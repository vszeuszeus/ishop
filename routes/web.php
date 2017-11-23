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

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){

        Route::group(['prefix' => 'products'], function(){
            Route::get('/','CategoryController@index')->name('products');

        });
        Route::group(['prefix' => 'categories'], function(){
            Route::get('/{category}/show','CategoryController@show')->name('category.show');
            Route::get('/create','CategoryController@create')->name('category.create');
            Route::post('/store','CategoryController@store')->name('category.store');
            Route::get('{category}/edit','CategoryController@edit')->name('category.edit');
            Route::patch('{category}/update','CategoryController@update')->name('category.update');
            Route::get('{category}/delete','CategoryController@delete')->name('category.delete');
            Route::get('test','CategoryController@test')->name('category.test');
        });

        Route::group(['prefix' => 'product_groups'], function()
        {
            //
        });

        Route::group(['prefix' => 'sales'], function(){
            Route::get('/','SaleController@index')->name('sales');
        });

        Route::group(['prefix' => 'managers'], function(){
            Route::get('/','UserController@managers')->name('managers');
        });

        Route::group(['prefix' => 'salaries'], function(){
            Route::get('/','SalaryController@index')->name('salaries');
        });

        Route::group(['prefix' => 'tickets'], function(){
            Route::get('/','TicketController@index')->name('tickets');
        });

        Route::group(['prefix' => 'chats'], function(){
            Route::get('/','ChatController@index')->name('chats');
            Route::get('create','ChatController@create')->name('createChat');
            Route::post('store','ChatController@store')->name('storeChat');
        });

        Route::group(['prefix' => 'options'], function(){
            Route::get('/','OptionController@index')->name('options');
        });

        Route::group(['prefix' => 'notices'], function(){
            Route::get('/','NoticeController@index')->name('notices');
        });
    });
});

Auth::routes();

Route::get('administratorLogin', 'Auth\LoginController@adminLoginView');

Route::get('/home', 'HomeController@index')->name('home');


