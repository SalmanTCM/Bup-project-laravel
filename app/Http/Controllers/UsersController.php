<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{
    public function dataStore(Request $request)
    {
        $data = $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'mobile' => ['required'],
            ]
        );

        if ($data){
            $user = User::create($data);
            $request->session()->put('user', $user);
            return redirect()->to('/registration/course');
        }
    }


    public function courseRegistration(Request $request)
    {
        $user = $request->session()->get('user');
        return view('pages.courseRegistration')->with('user', $user);
    }

    public function certificateinfo(Request $request)
    {
        $user = $request->session()->get('user');
        return view('pages.certificateinfo')->with('user', $user);
    }

    public function confirmmsg(Request $request)
    {
        $user = $request->session()->get('user');
        return view('pages.confirmmsg')->with('user', $user);
    }

   

}
