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
        $relance->reporter_la_relance = $request->reporter_la_relance;

        $relance->save();

        return redirect()->route('clients.index');
}
}