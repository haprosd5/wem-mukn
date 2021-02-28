<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewController extends Controller
{
    //
    public function getNew()
    {
        $data = ['News'];
        return view('backend.news.list_new')->with('data', $data);
    }


    public function getAddNew()
    {
        $data = ['News', 'Thêm bài viết'];
        return view('backend.news.add_new')->with('data', $data);
    }

    public function postAddNew(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required|alpha_dash|unique:admins,name',
                'email' => 'required|unique:admins,email',
                'password' => 'required| min:4|confirmed',
                'password_confirmation' => 'required| min:4'
            ],
            [
                'name.required' => 'Tên không được để trống',
                'name.alpha_dash' => 'Tên chỉ được đặt a-z 0-9 không có ký tự đặc biệt',
                'name.unique' => 'Tên đã tồn tại',
                'email.required' => 'Email không được để trống',
                'email.unique' => 'Email đã tồn tại',
                'password.required' => 'Mật khẩu không được để trống',
                'password_confirmation.required' => 'Nhập lại mật khẩu không được để trống'
            ];
    }
}
