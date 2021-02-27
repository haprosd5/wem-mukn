<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Account;

class RegisterController extends Controller
{
    public function postRegister(Request $request)
    {
        $this->validate($request,
        [
        'name'=>'required|alpha_dash|unique:users,name',
        'email'=>'required|unique:users,email',
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

        //tạo tài khoản ở http://183.81.35.149:81/api.php?act=reg
        // $account = new Account;
        // $account->setConnection('mysql2');
        // $account->account=$request->name;
        // $account->pass=md5($request->password);
        // $account->serverindex=1;
        // $account->updatetime=null;
        // $account->save();
        
        $user = new User;
        $user->setConnection('mysql');
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->spverify=md5($request->password);
        $user->save();

        

        $success[]='Create User success!';
        return redirect('/')->with('success',$success);
    }
}
