<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ConnexionController extends Controller
{
    //
    public function pageenregistrez(){
        return view('clients.register');
    }

    public function registeraction(Request $request){
        $request->validate([
            "nom"=>"required",
            "email"=>"required|email",
            "password"=>"required",
        ]);

        User::create([
            "nom"=>$request->nom,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
        ]);

        return redirect()->route('login.clients')->with("success", "Compte crée avec succès");
    }

    // public function shoppage(){

    // }

    public function pageconnexion(){
        return view('clients.login');
    }
    
    public function authentificate(Request $request){
        $request->validate([
            "email"=>"required",
            "password"=>"required",
        ]);

        if(auth()->attempt($request->only('email', 'password'))){
            return redirect()->route('shop.page');
        }

        return redirect()->back()->withErrors("Les identifiants ne sont pas corrects");
    }

    public function pagecontact(){
        return view('clients.pagecontact');
    }
    public function pageapropos(){
        return view('clients.apropospage');
    }
}










