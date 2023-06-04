<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = ["user_id","produit_id","quantite","total","proprietaire", "adresselivraison", "numerotel", "etat"];

    public function produit()
{
    return $this->belongsTo(Produit::class, 'produit_id');
}

public function client()
{
    return $this->belongsTo(User::class, 'user_id');
}

}
