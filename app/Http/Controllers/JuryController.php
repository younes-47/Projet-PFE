<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Soutenance;
use App\Models\Relations;
use App\Models\Jury;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\Relation;
use phpDocumentor\Reflection\DocBlock\Tags\Source;

class JuryController extends Controller
{
    function accueil(){
        $nom_complet = User::where('role', '1')->join('juries', 'users.user_id', '=', 'juries.num_jury')->where('juries.num_jury', '=', auth()->user()->user_id)
            ->select('juries.nom', 'juries.prenom')->get('*');
            
        $jury = Relations::where('num_jury',auth()->user()->user_id)->get('*');
        // $soutenance_id = $jury->id_soutenance;
        // $soutenances = Soutenance::where('id',$soutenance_id)->get('*');
        return view('jury-panel.accueil',compact('nom_complet','jury'));  //,['soutenance' => $soutenances]
    }


    function noterSoutenance($id, Request $req){
        $soutenance = Soutenance::find($id);
        $soutenance->note_finale = $req->note;
        $soutenance->update();
        return redirect('jury-panel/accueil');
    }
    function profileJury()
    {
        $jury = Jury::where('num_jury', auth()->user()->user_id)->get('*');
        return view('jury-panel.profile', compact('jury'));
    }
}
