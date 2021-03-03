<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\LoginMiddleware;

/*route cho admin*/
Route::group(['prefix' => 'admin', 'namespace' => 'Backend'], function () { //'middleware'=>'Admin',
    {
        Route::get('/login', 'LoginController@getLoginAdmin');
        Route::post('/login', 'LoginController@postLoginAdmin');

        Route::get('/register', 'RegisterController@getRegister');
        Route::post('/register', 'RegisterController@postRegister');

        Route::get('/logout', 'LoginController@getLogout');

        Route::group(['middleware' => 'Admin'], function () {
            Route::get('/home', 'AdminController@getAdmin');
            // phần tin tức
            Route::group(['prefix' => 'news'], function () {
                Route::get('/', 'NewController@getNew');
                Route::get('/add-new', 'NewController@getAddNew');
                Route::post('/add-new/', 'NewController@postAddNew');
                Route::get('/edit-new/{id}', 'NewController@getEditNew');
                Route::post('/edit-new/{id}', 'NewController@postEditNew');
                Route::get('/delete-new/{id}', 'NewController@getDeleteNew');
            });
            // phân sự kiện
            Route::group(['prefix' => 'events'], function () {
                Route::get('/', 'EventController@getEvent');
                Route::get('/add-event', 'EventController@getAddEvent');
                Route::post('/add-event', 'EventController@postAddEvent');
                Route::get('/edit-event/{id}', 'EventController@getEditEvent');
                Route::post('/edit-event/{id}', 'EventController@postEditEvent');
                Route::get('/delete-event/{id}', 'NewController@getDeleteEvent');
            });

            // phần payment
            Route::group(['prefix' => 'payment'], function () {

                Route::get('/card', 'PaymentCardController@getCard');
                Route::get('/card-pay/{id}/{id_user}/{value}', 'PaymentCardController@getPayCard');

            });

            // phần payment
            Route::group(['prefix' => 'giftcode'], function () {

                Route::get('/', 'GiftCodeController@getGiftCode');
                Route::post('/create-giftcode', 'GiftCodeController@postGiftCode');
            });




        });

    }
});
