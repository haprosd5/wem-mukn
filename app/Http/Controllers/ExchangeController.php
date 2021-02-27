<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExchangeController extends Controller
{
    //
    public function getExchange()
    {
        # code...
        return view('user.exchange.exchange');
    }
}
