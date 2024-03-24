<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'civilite',
        'nom',
        'prenom',
        'client_type',
        'dob',
        'adresse',
        'adresse_complementaire',
        'code_postal',
        'ville',
        'tel_mobile',
        'tel_fixe',
        'email',
        'origine_dossier',
        'nature_project',
        'prospecteur',
        'qualiticien',
        'categorie',
        'segment',
        'critere',
        'vendu',
        'contact',
        'qualification',
        'mesure',
        'decouverte',
        'solution_plan',
        'argumentaire',
        'annonce_prix',
        'passage_main',
        'decision',
        'vente',
        'step_completed_date',
        'description',
        'whoaddit',
    ];


    public function relances()
    {
        return $this->hasMany(Relance::class);
    }
    
    public function etapes()
{
    return $this->hasMany(Etape::class);
}

}
