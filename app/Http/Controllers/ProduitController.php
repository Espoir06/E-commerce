<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;

class ProduitController extends Controller
{

    public function index(){
        $produits = Produit::take(7)->get();
        $produitsvedettes = Produit::latest()->take(7)->get();
        return view('clients.index', compact('produits', 'produitsvedettes'));
    }

    public function afficheboutique(){
        $produits = Produit::all();
        // dd($produits);
        return view('clients.shop', compact('produits'));
    }
    public function prevuecommande($produit_id)
    {
        $leproduit = Produit::findOrFail($produit_id);
        return view('clients.prevuecommande', compact('leproduit'));
    }

    public function passercommande(Request $request, $produit_id)
    {
        $produit = Produit::findOrFail($produit_id);
        $proprietaire = $produit->proprietaire_id;

        // Récupérer le client actuellement authentifié
        $client = auth()->user();

        // Enregistrer la commande dans la table pivot produit_client
        $quantite = $request->input('quantite');
        $total = $produit->prixproduit * $quantite;

        // $client->produits()->syncWithoutDetaching([$produit->id , ['quantite' => $quantite, 'total' => $total, 'proprietaire'=>$proprietaire]]);
        $client->produits()->syncWithoutDetaching([$produit->id => ['quantite' => $quantite, 'total' => $total, 'proprietaire' => $proprietaire]]);


        // Rediriger ou retourner la réponse appropriée
        return redirect()->back()->with('success', 'Commande enregistrée avec succès au panier !');
    }
}
