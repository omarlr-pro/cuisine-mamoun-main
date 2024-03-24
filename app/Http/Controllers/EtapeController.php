<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etape;

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
        $client_id = $request->client_id;

        $etape = new Etape();
        $etape->client_id = $client_id; 
        $etape->valide_par = $request->whoaddit;
        $etape->date = $request->date;
        $etape->remarque = $request->remarque;
        $etape->etape = $request->etape;

        $etape->save();

        return redirect()->route('clients.index');
    }
    
}
