<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etape;
use App\Models\Client;

class EtapeController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create a new etape instance
        $etape = new Etape();
        $etape->client_id = $request->client_id; 
        $etape->valide_par = $request->whoaddit;
        $etape->isannuler = $request->annuler ?? "nest pas annuler";
        $etape->rdv_relance_date = $request->rdv_relance_date;
        $etape->rdv_relance_heure = $request->rdv_relance_heure;
        $etape->relance_date = $request->relance_date;
        $etape->relance_heure = $request->relance_heure;
        $etape->remarque = $request->remarque;
        $etape->etape = $request->etape;
        $etape->save();
    
        $client = Client::findOrFail($request->client_id);
        $client->rdv_relance_date = $request->rdv_relance_date; 
        $client->rdv_relance_heure = $request->rdv_relance_heure;
        $client->isannuler = $request->annuler ?? "nest pas annuler"; 
        $client->valide_par = $request->whoaddit; 
        $client->relance_date = $request->relance_date; 
        $client->relance_heure = $request->relance_heure; 
        $client->remarque = $request->remarque; 
        $client->etape = $request->etape;
        $client->save();
        
        return redirect()->route('clients.index');
    }
    
    
}