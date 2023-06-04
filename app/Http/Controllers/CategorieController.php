<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function pageAjoutCategorie(){
        return view('superAdmin.ajoutCategorie');
    }

    public function ajouterCategorieAction(Request $request){
        $request->validate([
            "libelle" => "required",
            "description" => "required",
        ]);

        Categorie::create([
            "libelle" => $request->libelle,
            "description" => $request->description,
        ]);

        return back()->with('success','Categorie ajouter avec success');
    }

    public function afficheListeCategorie(){
        $categories = Categorie::all();
        return view('superAdmin.listeCategorie', compact('categories'));
    }
}
