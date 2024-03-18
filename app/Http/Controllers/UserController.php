<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showUsers()
    {
        $users = User::all();
        
        return view('user', ['users' => $users]);
    }
}
