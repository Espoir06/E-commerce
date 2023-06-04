<?php

namespace App\Models;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model implements Authenticatable
{
    use HasFactory;
    use BasicAuthenticatable;
    protected $fillable = ["nomprop", "prenomprop", "email", "password"];

    public function produits(){
        return $this->hasMany(Produit::class);
    }
    
}
