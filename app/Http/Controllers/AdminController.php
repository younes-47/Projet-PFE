<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Jury;
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
            "ville_naissance" => "required",
            "filiere"=> "required"
            
            
        ]);

        $etudiant = new Etudiant();
        $etudiant->nom = $req->nom;
        $etudiant->prenom = $req->prenom;
        $etudiant->date_naissance = $req->date_naissance;
        $etudiant->ville_naissance = $req->ville_naissance;
        $etudiant->filiere = $req->filiere;
        
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
        $etudiant->ville_naissance = $req->input('ville_naissance');
        $etudiant->filiere = $req->input('filiere');
        $etudiant->update();
        return redirect('/listeEtudiant')->with('status',' Etudiant est bien modifié');
        
    }
    function listeJury(){
        $data = Jury::all();
        return view('admin-panel/listeJury',['jurys' => $data]);
    }
    function ajouterJury(Request $req){
        $req->validate([
            "nom" => "required",
            "prenom" => "required",
            "date_naissance" => "required",
            "ville_naissance" => "required",
            "matiere"=> "required"
            
            
        ]);

        $jury = new Jury();
        $jury->nom = $req->nom;
        $jury->prenom = $req->prenom;
        $jury->date_naissance = $req->date_naissance;
        $jury->ville_naissance = $req->ville_naissance;
        $jury->matiere = $req->matiere;
        
        $jury->save();
        return redirect('/listeJury');
    }

    function supprimerJury($id){
        Jury::destroy($id);
        return redirect('/listeJury');

    }
}
