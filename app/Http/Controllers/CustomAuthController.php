<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
 
class CustomAuthController extends Controller
{    
 
    public function customLogin(Request $request)
    {
        
        // $request->validate([
        //     'email' => 'required',
        //     'password'=> 'required'
        // ]);
        // @dd($all);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('applicationform');
        }
 
        return back()->withErrors([
            'email' => 'The provided email do not match our records.',
        ])->onlyInput('email');
        
    }
 
     
 
    public function signOut() {
        Session::flush();
        Auth::logout();
   
        return Redirect('/');
    }
}