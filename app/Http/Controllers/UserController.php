<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function getHome()
    {
        return view('user.home');
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function getChangePass()
    {
        # code...
        return view('user.change_pass');
    }
}
