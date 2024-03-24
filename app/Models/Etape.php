<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etape extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id', 'valide_par', 'date', 'remarque', 'etape',
    ];

    // Define the relationship with the Client model
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
