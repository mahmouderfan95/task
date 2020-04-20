<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class registerController extends Controller
{
    public function register(){
        return view('frontEnd.register');
    }

    public function welcomeCompany(){
        return view('frontEnd.company.welcome');
    }
    public function welcomeEmploye(){
        return view('frontEnd.employe.welcomeEmploye');
    }
    /* login company */
    public function getLoginCompany(){
        return view('frontEnd.company.login');
    }
    public function companyLogin(){
        if(! Auth::guard('company')->attempt(request(['email','password']))){
            return back()->withErrors([
                'message'   => 'email or passworn is not correct !'
            ]);
        }
        return redirect()->route('welcomeCompany',auth()->user()->id);
    }

    /* login company */

    public function getLoginEmploye(){
        return view('frontEnd.employe.login');
    }

    public function employelogin(){
        if(! Auth::guard('employe')->attempt(request(['email','password']))){
            return back()->withErrors([
                'message'   => 'email or passworn is not correct !'
            ]);
        }
        return redirect()->route('welcomeEmploye',auth()->user()->id);
    }
}
