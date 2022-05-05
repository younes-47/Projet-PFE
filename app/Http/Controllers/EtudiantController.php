<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    function accueil(){
        return view('etudiant-panel.accueil');
    }
}
