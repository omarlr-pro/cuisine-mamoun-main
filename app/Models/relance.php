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
        'reporter_la_relance',
    ];

    protected $dates = ['reporter_la_relance'];

    public function client()
    {
        return $this->belongsTo(client::class);
    }
}