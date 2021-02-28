<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function getEvent()
    {
        $data = ['Events'];
        return view('backend.news.list_event')->with('data', $data);
    }
}
