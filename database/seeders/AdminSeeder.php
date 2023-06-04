<?php

namespace Database\Seeders;

use App\Models\Administrateur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Administrateur::create([
            "nom"=>"BOUILI",
            "prenom"=>"espoir",
            "email"=>"espoir@gmail.com",
            "password"=>Hash::make("secret"),
        ]);
    }
}
