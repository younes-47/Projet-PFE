<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuryController extends Controller
{
    function accueil(){
        return view('jury-panel.accueil');
    }
}
