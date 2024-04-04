<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
        public function showLoginForm()
        {
            return view('login');
        }

    public function login(Request $request)
    {
        $user = User::where('identifiant', $request->input('identifiant'))->first();

        if ($user && $user->is_active) {
            $credentials = $request->only('identifiant', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->route('clients.create');
            } else {
                return redirect()->route('login')->with('error', 'les information formnis sont incorrecter');
            }
        } elseif ($user && !$user->is_active) {
            return redirect()->route('login')->with('error', 'Your account is deactivated.');
        } else {
            return redirect()->route('login')->with('error', 'les information formnis sont incorrecter');
        }
    }

        public function logout()
        {
            Auth::logout(); 
            return redirect()->route('sign-out'); 
        }

        public function showUsers()
        {
            $users = User::all();
            
            return view('user', ['users' => $users]);
        }
        public function deactivateUser(User $user)
        {
            DB::table('users')->where('id', $user->id)->update(['is_active' => false]);

            return redirect()->back()->with('success', 'User deactivated successfully');
        }

        public function activeuser(User $user)
        {
            DB::table('users')->where('id', $user->id)->update(['is_active' => true]);
            
            return redirect()->back()->with('success', 'User activated successfully');
        }
    
}
