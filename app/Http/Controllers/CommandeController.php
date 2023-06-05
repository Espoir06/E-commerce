<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CommandeController extends Controller
{
  //

  public function passercommande(Request $request, $produit_id)
  {
    
    $produit = Produit::findOrFail($produit_id);

    // Récupérer le client actuellement authentifié
    $client = auth()->user();


    $request->validate([
      "quantite" => "required",
      "proprietaire" => "required",
      "adresselivraison" => "required",
      "numerotel" => "required",
    ]);

    $total = $produit->prixproduit * $request->quantite;
    $etat = "enattente";

    Commande::create([
      "user_id" => $client->id,
      "produit_id" => $produit->id,
      "quantite" => $request->quantite,
      "total" => $total,
      "proprietaire" => $request->proprietaire,
      "adresselivraison" => $request->adresselivraison,
      "numerotel" => $request->numerotel,
      "etat" => $etat,
    ]);

    // dd($client);
    return back()->with("success", "Produit ajouté avec succès au panier");
  }

  public function profilclient()
  {
    $client = auth()->user()->id;

    $clientinfo = User::findOrFail($client);

    return view("clients.profil", compact('clientinfo'));
  }

  public function majpasscleint(Request $request, User $client)
  {
    // dd($client);
    $request->validate([
      "motdepasse" => "required",
      "confirmmotdepasse" => "required",
    ]);

    // Vérification que le nouveau mot de passe et la confirmation correspondent
    if ($request->motdepasse !== $request->confirmmotdepasse) {
      return redirect()->back()->with(['error' => 'Les nouveaux mots de passe ne correspondent pas.']);
    }
    // Mise à jour du mot de passe stocké pour l'utilisateur
    $client->update([
      "password" => Hash::make($request->new_password)
    ]);
    // Redirection vers la page de confirmation
    return redirect()->route('profil.du.client')->with('success', 'Votre mot de passe a été modifié avec succès.');
  }

  public function logout()
  {
      auth()->logout();
      return redirect()->route('acceuil.boutique');
  }

}
