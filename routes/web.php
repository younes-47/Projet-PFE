<?php

use App\Http\Controllers\IndexController;
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

// Route::get('/', function () {
// return view('index-&-login/index');
// });

// Route::resource('acceuil',IndexController::class);

Route::get('/accueil', 'App\Http\Controllers\IndexController@index');
Route::get('/', 'App\Http\Controllers\IndexController@index');
Route::get('/connection', 'App\Http\Controllers\IndexController@connection');
Route::get('/connection/etudiant', 'App\Http\Controllers\IndexController@etudiant');
Route::get('/connection/membre-jury', 'App\Http\Controllers\IndexController@membre_jury');
Route::get('/connection/admin', 'App\Http\Controllers\IndexController@admin');


// Route::get('/connection', function () {
//     return view('index-&-login/login');
// });

// Route::get('/identifier', function () {
//     return view('index-&-login/redirection');
// });

