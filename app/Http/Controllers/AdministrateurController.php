<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Proprietaire;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdministrateurController extends Controller
{
    public function loginpage(){
        return view('superAdmin.loginadmin');
    }

    
    public function authenticateadmin(Request $request){
        $request->validate([
            "email"=>"required",
            "password"=>"required",
        ]);

        if(Auth::guard('superadmin')->attempt($request->only('email', 'password'))){
            return redirect()->route('accueil.admin');
        }

        return redirect()->back()->withErrors("Les identifiants ne sont pas corrects");
    }


    public function dashboard(){
        $clients = User::count();
        $proprietaires = Proprietaire::count();
        $categorie = Categorie::count();
        return view('superAdmin.dashboard', compact('clients', 'proprietaires',"categorie"));
    }

    public function pageajoutprop(){
        return view('superAdmin.ajouterProprietaire');
    }

    public function ajoutpropscript(Request $request){
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "email"=>"required",
            "motdepasse"=>"required",
        ]);

        Proprietaire::create([
            "nomprop"=> $request->nom,
            "prenomprop"=> $request->prenom,
            "email"=> $request->email,
            "password"=> Hash::make($request->motdepasse),
        ]);

        return redirect()->route('ajout.prop.page')->with("success", "Nouveau propriétaire enrégistrez avec succès");
    }

    public function supprimercategorie(Categorie $categorie){
        $categorie->delete();
        return redirect()->back()->with("success", "Produit supprimé avec succès");
    }

    public function pagemodifiercategorie(Categorie $categorie){
        return view('superAdmin.modifiercategorie', compact('categorie'));
    }

    public function modifiercategorieaction(Request $request, $categorie){
        $request->validate([
            "libelle"=>"required",
            "description"=>"required",
        ]);
        $lacategorie = Categorie::findOrFail($categorie);
        $lacategorie->update([
            "libelle"=>$request->libelle,
            "description"=>$request->description,
        ]);

        return redirect()->route('liste.categorie')->with("success", "La catégorie a été modifier avec succès");

    }

    public function listeprop(){
        $proprietaires = Proprietaire::all();
        return view('superAdmin.listeproprietaires', compact('proprietaires'));
    }

    public function pagemodifierproprietaire(Proprietaire $proprietaire){

        // dd($proprietaire);
        return view('superAdmin.modifierproprietaire', compact('proprietaire'));

    }

    public function modifierproprietaireaction(Request $request, $proprietaire){
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "email"=>"required",
            "motdepasse"=>"required",
        ]);

        $proprietaire = Proprietaire::findOrfail($proprietaire);

        $proprietaire->update([
            "nomprop"=> $request->nom,
            "prenomprop"=> $request->prenom,
            "email"=> $request->email,
            "password"=> Hash::make($request->motdepasse),
        ]);
        return redirect()->route('liste.propriétaire')->with("success","Proprietaire modifier avec succès");

    }

    public function logoutadmin(){
        auth()->guard('superadmin')->logout();
        return redirect()->route('acceuil.boutique');
    }
}

