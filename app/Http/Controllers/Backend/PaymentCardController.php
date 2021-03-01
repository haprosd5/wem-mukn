<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\PaymentMobi;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentCardController extends Controller
{
    public function getCard()
    {
        $data = ['Payment Card'];
        $allPay = DB::table(DB::raw('payment_mobi'))
            ->select('payment_mobi.*', 'users.name')
            ->join('users', 'payment_mobi.id_user', '=', 'users.id')
            ->where('payment_mobi.status', '=', 0)
            ->paginate(10);

        return view('backend.payment.list_cards', ['data' => $data, 'allPay' => $allPay]);
    }

    public function getPayCard($id, $id_user, $value)
    {
        $user = User::find($id_user);
        $user->xu = (int)$value;
        $user->save();

        $card = PaymentMobi::find($id);
        $card->status = true;
        $card->save();
        return redirect('admin/payment/card')->with('success', 'Bạn đã nạp tiền thành công');
    }
}
