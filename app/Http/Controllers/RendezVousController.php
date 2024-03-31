<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class RendezVousController extends Controller
{
    public function rdvNetNonStatuer(Client $client)
    {
        return view('Rendez-Vous.rdv_net_non_statuer', compact('client'));
    }

    public function rdvNetJourJ(Client $client)
    {
        return view('Rendez-Vous.rdv_net_jour_j', compact('client'));
    }

    public function rdvBrutAConfirmer(Client $client)
    {
        return view('Rendez-Vous.rdv_brut_a_confirmer', compact('client'));
    }
}
