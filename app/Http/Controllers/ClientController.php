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
        $client->civilite = $request->input('civilite');
        $client->nom = $request->input('nom');
        $client->prenom = $request->input('prenom');
        $client->type = $request->input('type');
        $client->dob = $request->input('dob');
        $client->address = $request->input('address');
        $client->address_complementaire = $request->input('address_complementaire');
        $client->code_postal = $request->input('code_postal');
        $client->ville = $request->input('ville');
        $client->tel_mobile = $request->input('tel_mobile');
        $client->tel_fixe = $request->input('tel_fixe');
        $client->email = $request->input('email');
        $client->origine_dossier = $request->input('origine_dossier');
        $client->nature_project = $request->input('nature_project');
        $client->prospecteur = $request->input('prospecteur');
        $client->qualiticien = $request->input('qualiticien');
        $client->categorie = $request->input('categorie');
        $client->segment = $request->input('segment');
        $client->critere = $request->input('critere');
        $client->vendu = $request->input('vendu');
        $client->contact = $request->input('contact');
        $client->qualification = $request->input('qualification');
        $client->mesure = $request->input('mesure');
        $client->decouverte = $request->input('decouverte');
        $client->solution_plan = $request->input('solution_plan');
        $client->argumentaire = $request->input('argumentaire');
        $client->annonce_prix = $request->input('annonce_prix');
        $client->passage_main = $request->input('passage_main');
        $client->decision = $request->input('decision');
        $client->vente = $request->input('vente');
        $client->whoaddit = $request->input('whoaddit'); 
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
        $client = new Client();
        $client->civilite = $request->input('civilite');
        $client->nom = $request->input('nom');
        $client->prenom = $request->input('prenom');
        $client->type = $request->input('type');
        $client->dob = $request->input('dob');
        $client->address = $request->input('address');
        $client->address_complementaire = $request->input('address_complementaire');
        $client->code_postal = $request->input('code_postal');
        $client->ville = $request->input('ville');
        $client->tel_mobile = $request->input('tel_mobile');
        $client->tel_fixe = $request->input('tel_fixe');
        $client->email = $request->input('email');
        $client->origine_dossier = $request->input('origine_dossier');
        $client->nature_project = $request->input('nature_project');
        $client->prospecteur = $request->input('prospecteur');
        $client->qualiticien = $request->input('qualiticien');
        $client->categorie = $request->input('categorie');
        $client->segment = $request->input('segment');
        $client->critere = $request->input('critere');
        $client->vendu = $request->input('vendu');
        $client->contact = $request->input('contact');
        $client->qualification = $request->input('qualification');
        $client->mesure = $request->input('mesure');
        $client->decouverte = $request->input('decouverte');
        $client->solution_plan = $request->input('solution_plan');
        $client->argumentaire = $request->input('argumentaire');
        $client->annonce_prix = $request->input('annonce_prix');
        $client->passage_main = $request->input('passage_main');
        $client->decision = $request->input('decision');
        $client->vente = $request->input('vente');
        $client->whoaddit = $request->input('whoaddit'); 
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
