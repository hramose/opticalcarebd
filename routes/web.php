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
Route::get('/','HomeController@home')->name('home');

Route::group(['middleware' => 'visitors'], function(){
    Route::get('register','RegistrationController@register')->name('register');
    Route::post('register','RegistrationController@createUser')->name('doRegister');
    
    Route::get('login','LoginController@login')->name('login');
    Route::post('login','LoginController@doLogin')->name('doLogin');
});

Route::get('/activation/{email}/{activationCode}', 'ActivationController@activate');
Route::post('/logout', 'LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin' , 'middleware' => 'admin'], function(){
    Route::get('dashboard','AdminController@admin')->name('adminDashboard');
    Route::get('notes','NotesController@notes')->name('notes');
    Route::post('notes','NotesController@addNote');

    Route::group(['prefix' => 'stock'], function(){
        Route::get('frame','StockController@frame')->name('frame');
        Route::get('api/frame','StockController@getFrame');
        Route::post('frame','StockController@addFrame');
        Route::post('frame/edit','StockController@editFrame');
        Route::post('frame/update','StockController@updateFrame');
        Route::delete('frame/delete','StockController@deleteFrame');
        Route::group(['prefix' => 'sunglass'], function(){
            Route::get('/','StockController@sunglass')->name('sunglass');
            Route::get('/api','StockController@getSunglass');      
            Route::post('/','StockController@addSunglass');
            Route::post('/update','StockController@updateSunglass');
            Route::post('/edit','StockController@editSunglass');
            Route::delete('/delete','StockController@deleteSunglass');
        
        
        });
        Route::get('contactlans','StockController@contactlans')->name('contactlans');
        });
});