<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Commande;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProprietaireController extends Controller
{
    //
    public function dashproprietaire()
    {
        $proprietaire  = auth()->guard('proprietaire')->user()->id;

        $commandes = Commande::where('proprietaire', $proprietaire)
            ->count();

        $clients = Commande::where('proprietaire', $proprietaire)
            ->distinct('user_id')
            ->count('user_id');

        $produits = Produit::count();
        return view('proprietaires.index', compact('produits', 'commandes', 'clients'));
    }

    public function pageconnexionprop()
    {
        return view('proprietaires.login');
    }

    public function connexionprop(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required",
        ]);

        if (auth()->guard('proprietaire')->attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard.proprietaire');
        }

        return redirect()->back()->withErrors("Les identifiants ne sont pas corrects");
    }

    public function logout()
    {
        auth()->guard('proprietaire')->logout();
        return redirect()->route('acceuil.boutique');
    }
    public function ajouterproduitpage()
    {
        $categories = Categorie::all();
        return view('proprietaires.ajouterproduits', compact('categories'));
    }

    public function ajouterproduitsaction(Request $request)
    {
        $request->validate([
            "nomproduit" => "required",
            "categorie_id" => "required",
            "prixproduit" => "required",
            "quantite" => "required",
            "description" => "required",
            "image" => "required",
        ]);

        $image = $request->file('image')->move('produits', time() . $request->file('image')->getClientOriginalName());
        $id_proprietaire = auth()->guard('proprietaire')->user()->id;
        Produit::create([
            "nomproduit" => $request->nomproduit,
            "categorie_id" => $request->categorie_id,
            "prixproduit" => $request->prixproduit,
            "quantite" => $request->quantite,
            "description" => $request->description,
            "image" => $image->getFilename(),
            "proprietaire_id" => $id_proprietaire,
        ]);

        return redirect()->route('ajouter.produit.page')->with("success", "Produit ajouté avec succès");
    }

    public function suprimerproduit()
    {
    }

    public function listedesproduis()
    {
        $id_proprietaire = auth()->guard('proprietaire')->user()->id;

        $mesproduits = Produit::where('proprietaire_id', $id_proprietaire)
            ->get();
        return view('proprietaires.listedesproduits', compact('mesproduits'));
    }

    public function mesprosuitscommandes()
    {
        $proprietaire  = auth()->guard('proprietaire')->user()->id;
        $etatdefaut = "enattente";
        $commandes = Commande::with('produit', 'client')
            ->where('proprietaire', $proprietaire)
            ->where('etat', $etatdefaut)
            ->get();
        return view('proprietaires.mescommandes', compact('commandes'));
    }

    public function mescommandesvalider()
    {
        $proprietaire  = auth()->guard('proprietaire')->user()->id;
        $etatcommande = "valider";
        $commandes = Commande::with('produit', 'client')
            ->where('proprietaire', $proprietaire)
            ->where('etat', $etatcommande)
            ->get();
        return view('proprietaires.mescommandesvalider', compact('commandes'));
    }



    public function validercommande($commande_id)
    {
        $proprietaire = auth()->guard('proprietaire')->user();
        $commandeavalider = Commande::findOrFail($commande_id);
        $etat = "valider";

        $commandeavalider->update([
            'etat' => $etat,
        ]);

        return redirect()->back()->with("success", "Commande validée avec succès.");
    }

    public function annulercommande($commande_id)
    {

        $proprietaire = auth()->guard('proprietaire')->user();
        $commandeaannuler = Commande::findOrFail($commande_id);

        $etat = "annuler";

        $commandeaannuler->update([
            'etat' => $etat,
        ]);

        return redirect()->back()->with("error", "commande annuler avec succès.");
    }

    public function modifierproduitpage(Produit $produit)
    {

        $categories = Categorie::all();

        return view('proprietaires.modifierproduit', compact('produit', 'categories'));
    }

    public function modifierproduitaction(Request $request, $produit_id)
    {
        $id_proprietaire = auth()->guard('proprietaire')->user()->id;
        $produit = Produit::findOrFail($produit_id);
        $request->validate([
            "nomproduit" => "required",
            "categorie_id" => "required",
            "prixproduit" => "required",
            "quantite" => "required",
            "description" => "required",
            "image" => "required",

        ]);

        $image = $request->file('image')->move('produits', time() . $request->file('image')->getClientOriginalName());

        $produit->update([
            "nomproduit" => $request->nomproduit,
            "categorie_id" => $request->categorie_id,
            "prixproduit" => $request->prixproduit,
            "quantite" => $request->quantite,
            "description" => $request->description,
            "image" => $image->getFilename(),
            "proprietaire_id" => $id_proprietaire,
        ]);
    }

    public function supprimerproduit(Produit $produit)
    {
        $produit->delete();

        return redirect()->back()->with("success", "Produit supprimée avec succès");
    }
}
