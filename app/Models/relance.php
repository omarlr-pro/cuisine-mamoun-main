<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relance extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'whoaddit',
        'remarque',
        'annuler',
        'rdv_relance_date',
        'rdv_relance_heure',
        'relance_date',
        'relance_heure',
    ];

    protected $dates = ['reporter_la_relance'];

    public function client()
    {
        return $this->belongsTo(client::class);
    }
}