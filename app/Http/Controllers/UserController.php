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
        
        return view('user', ['users' => $users]);
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
            'name' => 'required',
            'email' => 'required|email|unique:users',
            
        ]);
    
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->img = $request->input('img');
        $user->identifat = $request->input('identifat');
        $user->status = $request->input('status');
        $user->password = bcrypt($request->input('password'));
        $user->civilite = $request->input('civilite');
        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->cin = $request->input('cin');
        $user->date_naissance = $request->input('date_naissance');
        $user->mobile = $request->input('mobile');
        $user->tel_fix = $request->input('tel_fix');
        $user->adresse = $request->input('adresse');
        $user->adresse_complementaire = $request->input('adresse_complementaire');
        $user->code_postale = $request->input('code_postale');
        $user->ville = $request->input('ville');
        
        $user->save();
    
        return redirect()->route('clients.index')->with('success', 'User created successfully!');
    }
    

   


  


    
}
