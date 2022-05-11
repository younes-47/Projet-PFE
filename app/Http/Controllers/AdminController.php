<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Jury;
use App\Models\User;
use App\Models\Soutenance;
use App\Models\Projet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Source;

class AdminController extends Controller
{
    

    function dashboard(){
        return view('admin-panel.accueil');
    }

    function listeEtudiant(){
        $data = Etudiant::all();
        return view('admin-panel/listeEtudiant',['etudiants' => $data]);
        
    }
    function ajouterEtudiant(Request $req){
        
        $req->validate([
            "nom" => "required",
            "prenom" => "required",
            "date_naissance" => "required",
            "adresse" => "required",
            "filiere"=> "required",
            "num_telephone"=> "numeric",
            "num_etd"=>"required"
            
            
        ]);

        $etudiant = new Etudiant();
        $etudiant->nom = $req->nom;
        $etudiant->prenom = $req->prenom;
        $etudiant->date_naissance = $req->date_naissance;
        $etudiant->adresse = $req->adresse;
        $etudiant->num_telephone = $req->num_telephone;
        $etudiant->filiere = $req->filiere;
        $etudiant->num_etd = $req->num_etd;
        $user = new User();
        $user->email= $req->email;
        $user->password = Hash::make($req->password);
        $user->role = 0;
   
        $user->user_id = $etudiant->num_etd;
        $user->save();
        $etudiant->save();
        return redirect('/listeEtudiant');
    }
    function supprimerEtudiant($id){
        Etudiant::destroy($id);
        return redirect('/listeEtudiant');

    }
    function afficherModifierEtudiant($id){
        $etudiants= Etudiant::findOrFail($id);
        return view('admin-panel/afficherModifierEtudiant')->with('etudiants', $etudiants);
    }
    function modifierEtudiant($id, Request $req){
        $etudiant = Etudiant::find($id);
        $etudiant->nom = $req->input('nom');
        $etudiant->prenom = $req->input('prenom');
        $etudiant->date_naissance = $req->input('date_naissance');
        $etudiant->adresse = $req->input('adresse');
        $etudiant->num_telephone = $req->input('num_telephone');
        $etudiant->filiere = $req->input('filiere');
        $etudiant->num_etd = $req->input('num_etd');
        $etudiant->update();
        return redirect('/listeEtudiant')->with('status','Etudiant est bien modifié');
        
    }
    function afficherEtudiant($id){
        $data =Etudiant::find($id);
        return view('admin-panel/afficherEtudiant',['etudiant'=>$data]);
    }
    function listeJury(){
        $data = Jury::all();
        return view('admin-panel/listeJury',['jurys' => $data]);
    }
    function ajouterJury(Request $req){
        $req->validate([
            "nom" => "required",
            "prenom" => "required",
            "specialité" => "required",
            "grade" => "required",
            "université"=> "required",
            "etablissement"=> "required"
            
            
        ]);

        $jury = new Jury();
        $jury->nom = $req->nom;
        $jury->prenom = $req->prenom;
        $jury->grade = $req->grade;
        $jury->specialité = $req->specialité;
        $jury->université = $req->université;
        $jury->etablissement = $req->etablissement;
        $jury->num_jury= $req->num_jury;

        $user = new User();
        $user->email= $req->email;
        $user->password = Hash::make($req->password);
        $user->role = 1;
   
        $user->user_id = $jury->num_jury;
        $user->save();
        
        $jury->save();
        return redirect('/listeJury');
    }

    function supprimerJury($id){
        Jury::destroy($id);
        return redirect('/listeJury');

    }
    function afficherModifierJury($id){
        $juries= Jury::findOrFail($id);
        return view('admin-panel/afficherModifierJury')->with('juries', $juries);
    }
    function modifierJury($id, Request $req){
        $jury = Jury::find($id);
        $jury->nom = $req->input('nom');
        $jury->prenom = $req->input('prenom');
        $jury->grade = $req->input('grade');
        $jury->specialité = $req->input('specialité');
        $jury->université= $req->input('université');
        $jury->etablissement= $req->input('etablissement');
        
        $jury->num_jury= $req->input('num_jury');
        $jury->update();
        return redirect('/listeJury')->with('status',' Le Jury est bien modifié');
        
    }
    function chercherJury(Request $req)
    {
        $data= Jury::where('nom', 'like', '%'.$req->input('query').'%')->get();
        return view('admin-panel/chercherJury',['juries'=>$data]);
    }

    function afficherJury($id){
        $data =Jury::find($id);
        return view('admin-panel/afficherJury',['jury'=>$data]);
    }
    function listeSoutenance(){
        $data = Soutenance::all();
        return view('admin-panel/listeSoutenance',['soutenances' => $data]);
    }

    function logout(){
        Auth::logout();
        return redirect('/accueil');
    }

    function listeProjet(){
        $data = Projet::all();
        return view('admin-panel/listeProjet',['projets' => $data ]);
    }
}
