<?php

namespace App\Http\Controllers\Backend;

use App\GiftCode;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GiftCodeController extends Controller
{
    //
    public function getGiftCode()
    {
        # code...
        $data = ['Giftcode'];
        $listGiftcode = GiftCode::all();
        return view('backend.giftcode.list_giftcode', ['data' => $data, 'list_giftcode' => $listGiftcode]);
    }


    public function postGiftCode(Request $request)
    {
        # code...
        $this->validate(
            $request,
            [
                'code' => 'required|unique:giftcodes',
                'price' => 'required|alpha_num',
                'number' => 'required|alpha_num',
            ],
            [
                'code.required' => 'Mã giftcode không được để trống',
                'code.unique' => 'Giftcode trùng lặp',
                'price.required' => 'Giá giftcode không được để trống',
                'price.alpha_num' => 'Giftcode phải là kiểu số',
                'number.required' => 'Số lượng không được để trống',
                'number.alpha_num' => 'Số lượng phải là kiểu số',
            ]
        );

        //print($request);
    }
}
