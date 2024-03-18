<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('clients.create');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->gender = $request->input('gender');
        $client->last_name = $request->input('last_name');
        $client->first_name = $request->input('first_name');
        $client->client_type = $request->input('client_type');
        $client->dob = $request->input('dob');
        $client->address = $request->input('address');
        $client->address_additional = $request->input('address_additional');
        $client->zipcode = $request->input('zipcode');
        $client->city = $request->input('city');
        $client->mobile_phone = $request->input('mobile_phone');
        $client->phone = $request->input('phone');
        $client->email = $request->input('email');
        $client->dossier_origin = $request->input('dossier_origin');
        $client->project_nature = $request->input('project_nature');
        $client->prospecteur = $request->input('prospecteur');
        $client->qualiticien = $request->input('qualiticien');
        $client->category = $request->input('category');
        $client->contact = $request->input('contact');
        $client->qualification = $request->input('qualification');
        $client->measure = $request->input('measure');
        $client->discovery = $request->input('discovery');
        $client->solution_plan = $request->input('solution_plan');
        $client->argumentation = $request->input('argumentation');
        $client->price_announcement = $request->input('price_announcement');
        $client->handover = $request->input('handover');
        $client->decision = $request->input('decision');
        $client->vente = $request->input('vente');
        $client->sale = $request->input('sale');
        $client->step_completed_date = $request->input('step_completed_date');
        $client->description = $request->input('description');
        $client->whoaddit = $request->input('whoaddit'); 

        $client->save();

        return redirect()->route('clients.index')->with('success', 'Client created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::findOrFail($id);
        return view('clients.show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', ['client' => $client]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = Client::findOrFail($id);
        $client->gender = $request->input('gender');
        $client->last_name = $request->input('last_name');
        $client->first_name = $request->input('first_name');
        $client->client_type = $request->input('client_type');
        $client->dob = $request->input('dob');
        $client->address = $request->input('address');
        $client->address_additional = $request->input('address_additional');
        $client->zipcode = $request->input('zipcode');
        $client->city = $request->input('city');
        $client->mobile_phone = $request->input('mobile_phone');
        $client->phone = $request->input('phone');
        $client->email = $request->input('email');
        $client->dossier_origin = $request->input('dossier_origin');
        $client->project_nature = $request->input('project_nature');
        $client->prospecteur = $request->input('prospecteur');
        $client->qualiticien = $request->input('qualiticien');
        $client->category = $request->input('critere');
        $client->contact = $request->input('contact');
        $client->qualification = $request->input('qualification');
        $client->measure = $request->input('measure');
        $client->discovery = $request->input('discovery');
        $client->solution_plan = $request->input('solution_plan');
        $client->argumentation = $request->input('argumentation');
        $client->price_announcement = $request->input('price_announcement');
        $client->handover = $request->input('handover');
        $client->decision = $request->input('decision');
        $client->vente = $request->input('vente');
        $client->sale = $request->input('sale');
        $client->step_completed_date = $request->input('step_completed_date');
        $client->description = $request->input('description');
        $client->whoaddit = $request->input('whoaddit'); 

        $client->save();
    
        return redirect()->route('clients.index')->with('success', 'Client updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
    
        return redirect()->route('clients.index')->with('success', 'Client deleted successfully');
    }
}
