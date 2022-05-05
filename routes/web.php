<?php

use App\Http\Controllers\MainController;
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
Route::get('/accueil', [MainController::class, 'index']);
Route::get('/', [MainController::class, 'index']);



//authentification b wahd commande smitha livewire
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
//page admin li fiha les etudiants
Route::get('/listeEtudiant',[App\Http\Controllers\AdminController::class,'listeEtudiant']);

Route::get('ajouterEtudiant',function(){
    return view('admin-panel/ajouterEtudiant');
});
Route::post('ajouterEtudiant',[App\Http\Controllers\AdminController::class,'ajouterEtudiant']);
Route::get('supprimerEtudiant/{id}',[App\Http\Controllers\AdminController::class,'supprimerEtudiant']);
Route::get('afficherModifierEtudiant/{id}',[App\Http\Controllers\AdminController::class,'afficherModifierEtudiant']);
Route::put('afficherModifierEtudiant/modifierEtudiant/{id}',[App\Http\Controllers\AdminController::class,'modifierEtudiant']);
Route::get('/listeJury',[App\Http\Controllers\AdminController::class,'listeJury']);
Route::get('ajouterJury',function(){
    return view('admin-panel/ajouterJury');
});
Route::post('ajouterJury',[App\Http\Controllers\AdminController::class,'ajouterJury']);
Route::get('supprimerJury/{id}',[App\Http\Controllers\AdminController::class,'supprimerJury']);
Route::get('afficherModifierJury/{id}',[App\Http\Controllers\AdminController::class,'afficherModifierJury']);
Route::put('afficherModifierJury/modifierJury/{id}',[App\Http\Controllers\AdminController::class,'modifierJury']);
Route::get('chercherJury',[App\Http\Controllers\AdminController::class,'chercherJury']);