<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Payment;
use App\PaymentMobi;

class PaymentController extends Controller
{
    //
    public function getPayment()
    {
        return view('user.payment.payment');
    }
    public function getPaymentMobi()
    {
        $user=Auth::user();
        $danhsach=PaymentMobi::where('id_user',$user->id)->get();
        return view('user.payment.payment_mobi',['danhsach'=>$danhsach]);
    }
    public function postPaymentMobi(Request $request)
    {
        $user=Auth::user();
        $payment = new PaymentMobi;
        $payment->id_user=$user->id;
        $payment->seri=$request->seri;
        $payment->pin=$request->pin;
        $payment->type=$request->type;
        $payment->price=$request->price;
        $payment->save();
        return back();
    }
    public function getPaymentMoMo()
    {
        return view('user.payment.payment_momo');
    }

    public function getPaymentBank()
    {
        # code...
        return view('user/payment/payment_bank');
    }
}
