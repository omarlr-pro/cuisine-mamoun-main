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
        'Reporter_la_relance',
    ];

    protected $dates = ['Reporter_la_relance'];

    public function client()
    {
        return $this->belongsTo(client::class);
    }
}