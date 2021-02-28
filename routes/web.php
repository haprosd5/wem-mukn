<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\LoginMiddleware;
include 'route_admin.php';
//done
Route::post('register','Auth\RegisterController@postRegister');
Route::post('dangnhap','Auth\LoginController@postLogin');
Route::get('logout','Auth\LoginController@getLogout');
//-----done!----//


Route::get('/','HomeController@getHome')->name('home');
Route::get('/play','HomeController@getPlayGame')->name('play');

Route::group(['prefix'=>'user','middleware'=>'Login'],function(){        
    {
        Route::get('/home','UserController@getHome');
        Route::get('/logout','UserController@getLogout');
        Route::get('/change_pass','UserController@getChangePass');


        Route::get('/payment','PaymentController@getPayment');
        Route::get('/payment_mobi','PaymentController@getPaymentMobi');
        Route::post('/payment_mobi','PaymentController@postPaymentMobi');

        Route::get('/payment_bank','PaymentController@getPaymentBank');
        

        Route::get('/payment_momo','PaymentController@getPaymentMoMo');

        Route::get('/giftcode','GiftcodeController@getGiftcode');

        Route::get('/vongquay','VongquayController@getVongQuay');

        Route::get('/exchange','ExchangeController@getExchange');
    }        
});



