<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use App\Models\Soutenance;
use App\Models\Projet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EtudiantController extends Controller
{
    
    function accueil(){

        //requete bach tjbed smia
        $nom_complet = User::where('role', '0')->join('etudiants','users.user_id','=','etudiants.num_etd')->where('etudiants.num_etd','=',auth()->user()->user_id)
        ->select('etudiants.nom','etudiants.prenom')->get('*');
        
        //requete bach n3rfo etudiant wach deja khtar sujet ola la
        $khtar = Projet::where('num_etd',auth()->user()->user_id)->get('*');

        //requete bach njbdo ga3 les sujets li tkhtaro mn filliere dyal etudiant bach n2afiwhm
        $filiere = Etudiant::where('num_etd',auth()->user()->user_id)->select('filiere')->first();
        
       $sujets = DB::table('projets')->join('etudiants','etudiants.num_etd','=','projets.num_etd')->where('filiere',$filiere)->select('nom_projet')->get('*');

        return view('etudiant-panel.accueil',compact('nom_complet','khtar','sujets'));
    }

    function choisirPFE(Request $req){
      /*  $soutenance = new Soutenance();

        //had requete bach njbdo le nom & prenom dyal etudiant o nstockiwha f table de soutenenaces
        $nom_complet = Etudiant::where('num_etd', auth()->user()->user_id)->select('etudiants.nom','etudiants.prenom')->first();
        
        //had requete bach njbdo filliere dyal etudiant mn table etudtants
        $filiere = Etudiant::where('num_etd', auth()->user()->user_id)->select('filiere')->first();

        //daba 3amar table dyal soutenances bhad les infos
       $soutenance->nom_etudiant = $nom_complet->nom;
        $soutenance->prenom_etudiant = $nom_complet->prenom;
        $soutenance->num_etd = auth()->user()->user_id;
        $soutenance->filiere = $filiere->filiere;
        $soutenance->projet = $req->projet;
        $soutenance->save();*/
         
       
        $projet = new Projet();
        $nom = Etudiant::where('num_etd', auth()->user()->user_id)->value('nom');
        $prenom = Etudiant::where('num_etd', auth()->user()->user_id)->value('prenom');
        
        $projet->nom_projet = $req->projet;
        $projet->nom_etudiant = $nom;
        $projet->prenom_etudiant = $prenom;
        $projet->num_etd = auth()->user()->user_id;
        
        
        $projet->save();
        return redirect('/etudiant-panel/accueil');
    }

    function profile(){

        $etudiant = Etudiant::where('num_etd',auth()->user()->user_id)->first();
        return view('etudiant-panel.profile',compact('etudiant'));
    }
}
