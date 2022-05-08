<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soutenance extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_etudiant',
        'prenom_etudiant',
        'num_salle',
        'filiere',
        'projet',
        'date_soutenance',
        'encadrant',
        'jury2',
        'jury3',
        'note',
    ];
}
