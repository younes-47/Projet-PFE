<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Soutenance;

class EtudiantController extends Controller
{
    

    function choisirPFE(Request $req){
        $soutenance = new Soutenance();
        $soutenance->projet = $req->projet;
        $soutenance->save();
        return redirect('/reponse');
    }
}
