<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class SessionController extends Controller
{
	public function create()
{

    if(!Auth::check())
    return view ('login');
    else return Redirect::to('home');
}

function checklogin(Request $request)
{

    $this->validate($request, [
        'email' => 'required',
        'password' => 'required'
    ]);


    $user_data = array(
        'email' => $request->get('email'),
        'password' => $request->get('password')
    );


    if(Auth::attempt($user_data))
    {

        Auth::login(User::where('Email' ,$request->get('email'))->first());

        return Redirect::to('/home');


    }
    else
    {
        return back()->with('error', 'Wrong Login Details');
    }
}


function logout()
{
    Auth::logout();
    return redirect('login');
}

}
