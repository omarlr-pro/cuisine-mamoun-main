<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'gender',
        'last_name',
        'first_name',
        'client_type',
        'dob',
        'address',
        'address_additional',
        'zipcode',
        'city',
        'mobile_phone',
        'phone',
        'email',
        'dossier_origin',
        'project_nature',
        'prospecteur',
        'qualiticien',
        'category',
        'contact',
        'qualification',
        'measure',
        'discovery',
        'solution_plan',
        'argumentation',
        'price_announcement',
        'handover',
        'decision',
        'sale',
        'step_completed_date',
        'description',
        'whoaddit',
    ];
}
