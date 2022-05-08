<?php

use App\Http\Controllers\MainController;
use Illuminate\Routing\RouteRegistrar;
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

//Controlleur dyal page accueil & login

Route::view('/', 'main/index');
Route::view('/accueil', 'main/index');

//authentification b wahd commande smitha livewire
//les routes dyal admin khasshom ytadoro wst authentication bach hta wahed may9dr ywslhom ila hila kan admin

Route::middleware(['auth:sanctum','ifAdmin',config('jetstream.auth_session'),'verified'])->group(function () {

    Route::get('/dashboard',[App\Http\Controllers\AdminController::class,'dashboard'])->name('dashboard');

    Route::get('/listeEtudiant',[App\Http\Controllers\AdminController::class,'listeEtudiant']);

    Route::get('ajouterEtudiant',function(){
    return view('admin-panel/ajouterEtudiant');
    });
    Route::post('ajouterEtudiant',[App\Http\Controllers\AdminController::class,'ajouterEtudiant']);
    Route::get('supprimerEtudiant/{id}',[App\Http\Controllers\AdminController::class,'supprimerEtudiant']);
    Route::get('afficherModifierEtudiant/{id}',[App\Http\Controllers\AdminController::class,'afficherModifierEtudiant']);
    Route::put('afficherModifierEtudiant/modifierEtudiant/{id}',[App\Http\Controllers\AdminController::class,'modifierEtudiant']);
    Route::get('afficherEtudiant/{id}',[App\Http\Controllers\AdminController::class,'afficherEtudiant']);
    Route::get('/listeJury',[App\Http\Controllers\AdminController::class,'listeJury']);
    Route::get('ajouterJury',function(){
        return view('admin-panel/ajouterJury');
    });
    Route::post('ajouterJury',[App\Http\Controllers\AdminController::class,'ajouterJury']);
    Route::get('supprimerJury/{id}',[App\Http\Controllers\AdminController::class,'supprimerJury']);
    Route::get('afficherModifierJury/{id}',[App\Http\Controllers\AdminController::class,'afficherModifierJury']);
    Route::put('afficherModifierJury/modifierJury/{id}',[App\Http\Controllers\AdminController::class,'modifierJury']);
    Route::get('chercherJury',[App\Http\Controllers\AdminController::class,'chercherJury']);
    Route::get('afficherJury/{id}',[App\Http\Controllers\AdminController::class,'afficherJury']);
    Route::get('/listeSoutenance',[App\Http\Controllers\AdminController::class,'listeSoutenance']);



});

//les routes dyal jury
Route::middleware(['auth:sanctum','ifJury',config('jetstream.auth_session'),'verified'])->group(function () {

    Route::get('/jury-panel/accueil',[App\Http\Controllers\JuryController::class,'accueil']);

});

//les routes dyal etudiant
Route::middleware(['auth:sanctum','ifEtudiant',config('jetstream.auth_session'),'verified'])->group(function () {

    Route::get('/etudiant-panel/accueil',[App\Http\Controllers\EtudiantController::class,'accueil']);
    Route::post('/choix',[App\Http\Controllers\EtudiantController::class,'choisirPFE']);
    Route::get('/profile',[App\Http\Controllers\EtudiantController::class,'profile']);

});
