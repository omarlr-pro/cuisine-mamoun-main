<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Relance;

class RelanceController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $relance = new Relance();
        $relance->client_id = $request->client_id;
        $relance->whoaddit = $request->whoaddit;
        $relance->remarque = $request->remarque;
        $relance->isannuler = $request->annuler ?? "nest pas annuler";

        $relance->rdv_relance_date = $request->rdv_relance_date;
        $relance->rdv_relance_heure = $request->rdv_relance_heure;
        
        $relance->relance_date = $request->relance_date;
        $relance->relance_heure = $request->relance_heure;

        $relance->save();

        return redirect()->route('clients.index');
}
}