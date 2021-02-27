<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    public function postLogin(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'required',
            'password'=>'required'
        ],
        [
            'name.required'=>'Chưa nhập name',
            'password.required'=>'Bạn chưa nhập password'
        ]);

        if (Auth::attempt(['name'=>$request->name,'password'=>$request->password],$request->remember))
        {
            $success[]='Đăng nhập thành công chơi ngay!';
            return redirect('/')->with('success',$success);
        }
        else
        {
            $error[]='Tài khoản hoặc mật khẩu không đúng';
            return redirect('/')->with('error',$error);
        }
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
