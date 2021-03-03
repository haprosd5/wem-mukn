<?php

namespace App\Http\Controllers\Backend;

use App\Admin;
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
        $this->validate(
            $request,
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'email.required' => 'Chưa nhập email',
                'password.required' => 'Bạn chưa nhập password'
            ]
        );

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            $success[] = 'Đăng nhập thành công chơi ngay!';
            return redirect('/admin/home')->with('success', $success);
        } else {
            $error = 'Tài khoản hoặc mật khẩu không đúng';
            return redirect('/admin/login')->with('error', $error);
        }

        // $email = trim($request->email); //lấy email của phương thức post vuejs gửi qua
        // $pass = trim($request->password);  //lấy pass của phương thức post vuejs gửi qua

        // //kiểm tra email và pass trong CSDL
        // $data = Admin::where('email', '=', $email, 'AND','spverify', '=', hash('md5',$pass))->first();
        // print($request);
        // print($data);

        // // if (count($data) > 0) {
        // //     if ($data[0]->email == $email && $data[0]->spverify == hash('md5',$pass)) {
        // //         //return response()->json($data[0]->email);

        // //         //nếu đúng next
        // //         $success[] = 'Đăng nhập thành công chơi ngay!';
        // //         return redirect('/admin/home')->with('success', $success);
        // //     }
        // // } else {

        // //     //nếu sai back
        // //     $error = 'Tài khoản hoặc mật khẩu không đúng';
        // //     return redirect('/admin/login')->with('error', $error);
        // // }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
