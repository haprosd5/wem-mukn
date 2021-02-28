<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\LoginMiddleware;

/*route cho admin*/
Route::group(['prefix' => 'admin', 'namespace' => 'Backend'], function () { //'middleware'=>'Admin',
    {
        Route::get('/login', 'LoginController@getLoginAdmin');
        Route::get('/logout', 'LoginController@getLogout');
        Route::post('/login', 'LoginController@postLoginAdmin');

        Route::get('/register', 'RegisterController@getRegister');
        Route::post('/register', 'RegisterController@postRegister');

        Route::group(['middleware' => 'Admin'], function () {
            Route::get('/home', 'AdminController@getAdmin');


            Route::get('/news', 'NewController@getNew');
            Route::get('/news/add-new', 'NewController@getAddNew');
            Route::post('/news/add-new', 'NewController@postAddNew');

            Route::get('/events', 'EventController@getEvent');
            Route::get('/news/add-event', 'EventController@getAddEvent');
        });

    }
});
