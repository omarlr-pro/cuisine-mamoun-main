<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RendezVousController extends Controller
{

    public function rdvNetNonStatuer()
    {
        return view('Rendez-Vous.rdv_net_non_statuer');
    }

    public function rdvNetJourJ()
    {
        return view('Rendez-Vous.rdv_net_jour_j');
    }

    public function rdvBrutAConfirmer()
    {
        return view('Rendez-Vous.rdv_brut_a_confirmer');
    }

}