<?php

namespace App\Http\Controllers;

use App\Tintuc;
use Illuminate\Http\Request;
use App\Server;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function getHome()
    {
        $server_new=Server::orderBy('id','desc')->first();
        $server_list_new=Server::all();
        $tintucs = Tintuc::where('status', true)->get();
        return view('home',['server_new'=>$server_new,'server_list_new'=>$server_list_new, 'tintucs' => $tintucs]);
    }
    public function getPlayGame(Request $request)
    {
        $sid=$request->sid;
        $server=Server::find($sid);
        $user=Auth::user();
        $link="http://183.81.35.149:81/game.php?user=".$user->name."&spverify=".$user->spverify."&srvid=".$sid."&srvaddr=".$server->ip."&srvport=".$server->port;
        
        return view('playgame',['link'=>$link]);
    }
}
