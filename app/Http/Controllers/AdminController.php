<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Jury;
use App\Models\User;
use App\Models\Soutenance;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    

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
            
            
        ]);

        $etudiant = new Etudiant();
        $etudiant->nom = $req->nom;
        $etudiant->prenom = $req->prenom;
        $etudiant->date_naissance = $req->date_naissance;
        $etudiant->adresse = $req->adresse;
        $etudiant->num_telephone = $req->num_telephone;
        $etudiant->filiere = $req->filiere;
        $user = new User();
        $user->email= $req->email;
        $user->password = Hash::make($req->password);
        $user->role = 0;
        $user->nom= $req->nom_user;
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
        $etudiant->update();
        return redirect('/listeEtudiant')->with('status',' Etudiant est bien modifié');
        
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
            "num_telephone" => "required",
            "adresse" => "required",
            "ecole"=> "required"
            
            
        ]);

        $jury = new Jury();
        $jury->nom = $req->nom;
        $jury->prenom = $req->prenom;
        $jury->num_telephone = $req->num_telephone;
        $jury->adresse = $req->adresse;
        $jury->ecole = $req->ecole;
        
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
        $jury->num_telephone = $req->input('num_telephone');
        $jury->adresse = $req->input('adresse');
        $jury->ecole= $req->input('ecole');
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
}
