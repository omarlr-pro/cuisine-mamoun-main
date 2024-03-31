<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function showUsers()
    {
        $users = User::all();
        
        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'civilite' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'cin' => 'required',
            'dob' => 'required|date',
            'adresse' => 'required',
            'code_postal' => 'required',
            'ville' => 'required',
            'tel_mobile' => 'required',
            'email_personnel' => 'required|email|unique:users,email',
            'identifiant' => 'required|unique:users',
            'statut' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required', 'string', 'min:8',
        ]);
    
        $user = new User();
        $user->civilite = $request->input('civilite');
        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->cin = $request->input('cin');
        $user->dob = $request->input('dob');
        $user->adresse = $request->input('adresse');
        $user->adresse_complementaire = $request->input('adresse_complementaire');
        $user->code_postal = $request->input('code_postal');
        $user->ville = $request->input('ville');
        $user->tel_mobile = $request->input('tel_mobile');
        $user->tel_fixe = $request->input('tel_fixe');
        $user->email_personnel = $request->input('email_personnel');
        $user->identifiant = $request->input('identifiant');
        $user->statut = $request->input('statut');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->password = $request->input('isactive');

        $user->save();
    
        return redirect()->route('users.create')->with('success', 'User created successfully!');
    }
    
    public function show($id)
    {
        $user = User::findOrFail($id);
        
        return view('users.show', ['user' => $user]);
    }
    public function edit($id)
{
    $user = User::findOrFail($id);
    return view('users.edit', ['user' => $user]);
}

    public function profil()
        {

            return view('profil');
        }

    public function calendrier()
        {

            return view('calendrier');
        }
  
    public function destroy($id)
        {
            $user = User::findOrFail($id);

            $user->delete();

            return redirect()->route('users.index')->with('success', 'User deleted successfully!');
        }

    
}