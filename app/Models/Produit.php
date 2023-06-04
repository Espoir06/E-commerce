<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = ["nomproduit", "categorie_id", "prixproduit", "quantite", "description", "image", "proprietaire_id"];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class);
    }

    public function clients()
    {
        return $this->belongsToMany(User::class);
    }
}
