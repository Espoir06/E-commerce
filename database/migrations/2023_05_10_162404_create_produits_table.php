<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nomproduit');
            $table->foreignId('categorie_id');
            $table->string('prixproduit');
            $table->string('quantite');
            $table->text('description');
            $table->string('image');
            $table->string('proprietaire_id');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("produits", function(Blueprint $table){
            $table->dropConstrainedForeignId('categorie_id')->constrained('categories');
        });
        Schema::dropIfExists('produits');
    }
};
