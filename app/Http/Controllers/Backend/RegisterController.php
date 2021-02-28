<?php

namespace App\Http\Controllers\Backend;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function getRegister() {
        return view('backend.login.register');
    }
    public function postRegister(Request $request)
    {
        $this->validate($request,
            [
                'name'=>'required|alpha_dash|unique:admins,name',
                'email'=>'required|unique:admins,email',
                'password' => 'required| min:4|confirmed',
                'password_confirmation' => 'required| min:4'
            ],
            [
                'name.required'=>'Tên không được để trống',
                'name.alpha_dash'=>'Tên chỉ được đặt a-z 0-9 không có ký tự đặc biệt',
                'name.unique'=>'Tên đã tồn tại',
                'email.required'=>'Email không được để trống',
                'email.unique'=>'Email đã tồn tại',
                'password.required'=>'Mật khẩu không được để trống',
                'password_confirmation.required'=>'Nhập lại mật khẩu không được để trống'
            ]);

        $admin = new Admin();
        $admin->setConnection('mysql');
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password=bcrypt($request->password);
        $admin->spverify=md5($request->password);
        $admin->save();



        $success[]='Create User success!';
        return redirect('admin/login')->with('success',$success);
    }
}
