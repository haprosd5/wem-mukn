<?php

namespace App\Http\Controllers;

use App\Tintuc;
use Illuminate\Http\Request;
use App\Server;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function getHome()
    {
        $server_new = Server::orderBy('id', 'desc')->first();
        $server_list_new = Server::all();
        $tintucs = DB::table('news')
        ->where('news.cate_id', '=', 1)
        ->where('news.status', '=', 1)->get();
        return view('home', ['server_new' => $server_new, 'server_list_new' => $server_list_new, 'tintucs' => $tintucs]);
    }

    public function getEvent()
    {
        $server_new = Server::orderBy('id', 'desc')->first();
        $server_list_event = Server::all();

        $event = DB::table('news')
        ->where('news.cate_id', '=', 2)
        ->where('news.status', '=', 1)->get();


        
        return view('home', ['server_new' => $server_new, 'server_list_new' => $server_list_event, 'tintucs' => $event]);
    }

    public function getPlayGame(Request $request)
    {
        $sid = $request->sid;
        $server = Server::find($sid);
        $user = Auth::user();
        $link = "http://183.81.35.149:81/game.php?user=" . $user->name . "&spverify=" . $user->spverify . "&srvid=" . $sid . "&srvaddr=" . $server->ip . "&srvport=" . $server->port;

        return view('playgame', ['link' => $link]);
    }


    public function getTintuc($slug)
    {
        $server_new = Server::orderBy('id', 'desc')->first();
        $server_list_new = Server::all();

        // lay du lieu bai viet
        $tintuc = DB::table(DB::raw('news'))
            ->select('news.*', 'users.name')
            ->join('users', 'news.author', '=', 'users.id')
            ->where('news.slug', 'like', $slug)
            ->get();
        //print ($tintuc);

        return view('user.news.post', ['server_new' => $server_new, 'server_list_new' => $server_list_new, 'tintuc' =>
            $tintuc]);
    }
}
