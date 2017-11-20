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

Route::get('/', 'FirstController@index')->name('mainPage');

Route::get('howBuy', 'FirstController@howBuy')->name('howBuy');

Route::group(['prefix' => 'news'], function(){
    Route::get('/', 'FirstController@news')->name('news');
    //Route::get('{new}');
});

Route::group(['prefix' => 'catalog'], function (){
    Route::get('/', 'Main\CategoryController@index')->name('catalog');
});

Route::group(['prefix' => 'orders'], function(){
    Route::get('checkOrder', 'Main\OrderController@checkOrderView')->name('checkOrder');
});

Route::get('support', 'Main\SupportController@support')->name('support');

Route::get('reviews', 'FirstController@reviews')->name('reviews');

Route::group(['middleware' => 'auth'], function(){

    Route::group(['prefix' => 'cabinet'], function(){
        Route::get('orderHistory', 'PA\OrderController@orderHistory')->name('orderHistory');
        Route::get('personalData', 'PA\UserController@index')->name('personalData');
        Route::get('support', 'PA\SupportController@support')->name('supportLc');
    });

    Route::group(['prefix' => 'admin'], function(){
        Route::group(['prefix' => 'products'], function(){
            Route::get('/','Admin\CategoryController@index')->name('products');
        });
        Route::group(['prefix' => 'categories'], function(){
            Route::get('/create','Admin\CategoryController@create')->name('addCategory');
        });
        Route::group(['prefix' => 'sales'], function(){
            Route::get('/','Admin\SaleController@index')->name('sales');
        });
        Route::group(['prefix' => 'managers'], function(){
            Route::get('/','Admin\UserController@managers')->name('managers');
        });
        Route::group(['prefix' => 'salaries'], function(){
            Route::get('/','Admin\SalaryController@index')->name('salaries');
        });
        Route::group(['prefix' => 'options'], function(){
            Route::get('/','Admin\ChatController@index')->name('chats');
            Route::get('create','Admin\ChatController@create')->name('createChat');
            Route::post('store','Admin\ChatController@store')->name('storeChat');
        });
    });
});

Auth::routes();

Route::get('administratorLogin', 'Auth\LoginController@adminLoginView');

Route::get('/home', 'HomeController@index')->name('home');


