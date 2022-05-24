<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Soutenance;
use App\Models\Relations;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\Relation;
use phpDocumentor\Reflection\DocBlock\Tags\Source;

class JuryController extends Controller
{
    function accueil(){
        $nom_complet = User::where('role', '1')->join('juries', 'users.user_id', '=', 'juries.num_jury')->where('juries.num_jury', '=', auth()->user()->user_id)
            ->select('juries.nom', 'juries.prenom')->get('*');
        $jury = Relations::where('num_jury',auth()->user()->user_id)->first();
        $soutenance_id = $jury->id_soutenance;
        $soutenances = Soutenance::where('id',$soutenance_id)->get('*');
        return view('jury-panel.accueil',compact('nom_complet','soutenances'));
    }
}
