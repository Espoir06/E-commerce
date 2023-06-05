<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\User;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ProduitController extends Controller
{

    public function index(Request $request)
    {
        $query = Produit::query()->orderBy('created_at', 'DESC');

        if (isset($request["product_search"])) {
            if(isset($request["category"])){
                $category = $request->input('category');
                if ($category != "all") {
                    $category = Categorie::where('libelle', $category)->first();
                    $query = $query->where('categorie_id', $category->id);
                }
            }

            $name = $request->input('product_search');
            $query = $query->where('nomproduit', 'like', "%{$name}%");
            $query = $query->OrWhere('description', 'like', "%{$name}%");
        }

        $categories = Categorie::all();
        $produits = $query->paginate(10);
        $produitsvedettes = Produit::latest()->take(7)->get();
        return view('clients.bienvenu', compact('produits', 'produitsvedettes', 'categories'));
    }

    public function afficheboutique()
    {
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
        $client->produits->syncWithoutDetaching([$produit->id => ['quantite' => $quantite, 'total' => $total, 'proprietaire' => $proprietaire]]);


        // Rediriger ou retourner la réponse appropriée
        return redirect()->back()->with('success', 'Commande enregistrée avec succès au panier !');
    }

    public function search(Request $request)
    {
        $query = Produit::query()->orderBy('created_at', 'DESC');

        if ($category = $request->validated('category')) {
            if ($category != "all") {
                $category = Categorie::where('libelle', $category);
                $query = $query->where('categorie_id', $category->id);
            }
        }
        if ($name = $request->validated('product_search')) {
            $query = $query->where('nomproduit', 'like', "%{$name}%");
            $query = $query->OrWhere('description', 'like', "%{$name}%");
        }
        $produitsvedettes = Produit::latest()->take(7)->get();
        $categories = Categorie::all();

        $produits = $query->paginate(10);
        return view('clients.bienvenu', compact('produits', 'produitsvedettes', 'categories'));
    }
}
