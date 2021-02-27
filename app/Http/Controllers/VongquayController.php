<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VongquayController extends Controller
{
    //
    public function getVongQuay()
    {
        # code...
        return view('user.vongquay.vq_mayman');
    }
}
