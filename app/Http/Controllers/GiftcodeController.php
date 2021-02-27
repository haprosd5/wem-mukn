<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiftcodeController extends Controller
{
    //

    public function getGiftcode()
    {
        # code...
        return view('user.giftcode.giftcode');
    }
}
