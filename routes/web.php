<?php

use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProprietaireController;
use App\Models\Categorie;
use App\Models\Produit;
use App\Models\Proprietaire;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProduitController::class, 'index'])->name('acceuil.boutique');

Route::get('/creezcompte', [ConnexionController::class, 'pageenregistrez'])->name('register.clients');
Route::post('/creezcompteaction', [ConnexionController::class, 'registeraction'])->name('register.clients.action');
Route::get('/connexionclient', [ConnexionController::class, 'pageconnexion'])->name('login.clients');
Route::post('/authentification', [ConnexionController::class, 'authentificate'])->name('login.script');

Route::get('/shop', [ProduitController::class, 'afficheboutique'])->name('shop.page');
Route::get('/accueilboutique', [ProduitController::class, 'index'])->name('index.boutique.page');
Route::get('profilpage', [CommandeController::class, 'profilclient'])->name('profil.du.client');
Route::post('modifiermdp', [CommandeController::class, 'majpasscleint'])->name('changer.pass.client');
Route::post('/deconnexionclient', [CommandeController::class, 'logout'])->name('deconnection.client');

Route::post('/ajouter/panier',[PanierController::class, 'ajouteraupanier'])->name('ajouter.au.panier');
Route::get('prevuecommande/{produit_id}', [ProduitController::class, 'prevuecommande'])->name('prevue.commande');
Route::post('passerunecommande/{produit_id}', [CommandeController::class, 'passercommande'])->name('passer.commande');
Route::get('lepanierencour/', [PanierController::class, 'affichepanier'])->name('affiche.panier.client');

Route::get('pagecontact', [ConnexionController::class, 'pagecontact'])->name('page.contact');
Route::get('pageapropos', [ConnexionController::class, 'pageapropos'])->name('page.apropos');

Route::get('/connexionadminpage', [AdministrateurController::class, 'loginpage'])->name('admin.connect.page');
Route::post('/actionconnexion', [AdministrateurController::class, 'authenticateadmin'])->name('admin.connect.action');
Route::get('/dashboard', [AdministrateurController::class, 'dashboard'])->name('accueil.admin');
Route::get('/ajouterprop', [AdministrateurController::class, 'pageajoutprop'])->name('ajout.prop.page');
Route::post('/ajouterpropaction', [AdministrateurController::class, 'ajoutpropscript'])->name('ajout.prop.script');
Route::get('/listeprop', [AdministrateurController::class, 'listeprop'])->name('liste.propriétaire');
Route::get('modifiproprietaire/{proprietaire}', [AdministrateurController::class, 'pagemodifierproprietaire'])->name('modif.proprietaire.page');
Route::post('modifierproprietaireaction/{proprietaire}', [AdministrateurController::class, 'modifierproprietaireaction'])->name('modif.proprietaire.action');
Route::get('/pageajoutcategorie', [CategorieController::class, 'pageAjoutCategorie'])->name('page.ajout.categorie');
Route::post('/actionajoutcategorie', [CategorieController::class, 'ajouterCategorieAction'])->name('action.ajout.categorie');
Route::get('/listecategorie', [CategorieController::class, 'afficheListeCategorie'])->name('liste.categorie');
Route::delete('supprimercategorie/{categorie}', [AdministrateurController::class, 'supprimercategorie'])->name('supprimer.categorie');
Route::get('modifiercategoriepage/{categorie}', [AdministrateurController::class, 'pagemodifiercategorie'])->name('mofifier.categorie.page');
Route::post('modifieracategorieaction/{categorie}', [AdministrateurController::class, 'modifiercategorieaction'])->name('modif.categorie.action');
Route::post('/deconnexionadmin', [AdministrateurController::class, 'logoutadmin'])->name('deconnexionadmin');


Route::get('/connexionprop', [ProprietaireController::class, 'pageconnexionprop'])->name('prop.connect.page');
Route::post('/connexionpropscript', [ProprietaireController::class, 'connexionprop'])->name('prop.connect.script');
Route::get('/dashproprio', [ProprietaireController::class, 'dashproprietaire'])->name('dashboard.proprietaire');
Route::get('/pageajouterproduit', [ProprietaireController::class, 'ajouterproduitpage'])->name('ajouter.produit.page');
Route::post('/ajouterunproduit', [ProprietaireController::class, 'ajouterproduitsaction'])->name('ajouter.produit.script');
Route::get('/listedesproduit', [ProprietaireController::class, 'listedesproduis'])->name('liste.produit.page');
Route::get('/mesproduitscommander', [ProprietaireController::class, 'mesprosuitscommandes'])->name('liste.produit.commander');
Route::post('validercommande/{commande_id}', [ProprietaireController::class, 'validercommande'])->name('valider.commande.client');
Route::post('annulercommande/{commande_id}', [ProprietaireController::class, 'annulercommande'])->name('annuler.commande.client');
Route::get('mescommandesvalider', [ProprietaireController::class, 'mescommandesvalider'])->name('commande.valider');
Route::get('/pageamodifierproduit/{produit}', [ProprietaireController::class, 'modifierproduitpage'])->name('modifier.produit.page');
Route::post('/modifierproduitaction/{produit}', [ProprietaireController::class, 'modifierproduitaction'])->name('modifier.produit.script');
Route::delete('/supprimerproduit{produit}', [ProprietaireController::class, 'supprimerproduit'])->name('supprimer.produit');
Route::post('/deconnexion', [ProprietaireController::class, 'logout'])->name('deconnect.proprietaire');
Route::get('/contact', [ProprietaireController::class, 'logout'])->name('contact');
Route::get('/about', [ProprietaireController::class, 'logout'])->name('about');
