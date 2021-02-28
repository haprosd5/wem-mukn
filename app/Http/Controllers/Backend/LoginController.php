<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function getLoginAdmin()
    {
        return view('backend.login.login');
    }

    public function postLoginAdmin(Request $request)
    {
        $this->validate($request,
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'email.required' => 'Chưa nhập email',
                'password.required' => 'Bạn chưa nhập password'
            ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            $success[] = 'Đăng nhập thành công chơi ngay!';
            return redirect('/admin/home')->with('success', $success);
        } else {
            $error[] = 'Tài khoản hoặc mật khẩu không đúng';
            return redirect('/')->with('error', $error);
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
