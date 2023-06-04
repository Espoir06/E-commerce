<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Panier;
use App\Models\Produit;
use Illuminate\Http\Request;

class PanierController extends Controller
{

    public function affichepanier(){
        $clientconnecter = auth()->user()->id;

        $mescommandes = Commande::with('produit')
        ->where('user_id', $clientconnecter)
        ->get();

        return view('clients.monpanier', compact('mescommandes'));
    }

}
