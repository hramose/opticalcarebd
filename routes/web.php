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
Route::get('aboutus','HomeController@aboutUs')->name('aboutus');

Route::group(['middleware' => 'visitors'], function(){
    Route::get('login','LoginController@login')->name('login');
    Route::post('login','LoginController@doLogin')->name('doLogin');
});

Route::get('/activation/{email}/{activationCode}', 'ActivationController@activate');
Route::post('/logout', 'LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin' , 'middleware' => 'admin'], function(){
    Route::get('register','RegistrationController@register')->name('register');
    Route::post('register','RegistrationController@createUser')->name('doRegister');
    Route::post('changepassword','RegistrationController@changePassword')->name('changePassword');
    
    Route::get('dashboard','AdminController@admin')->name('adminDashboard');
    Route::get('dashboard/api','AdminController@getDue');

    Route::group(['prefix' => 'notes'], function () {
        Route::get('/','NotesController@notes')->name('notes');
        Route::post('/add','NotesController@addNote');
        Route::post('/update','NotesController@updateNote');
        Route::delete('/delete','NotesController@deleteNote');
    });

    Route::group(['prefix' => 'sms'], function () {
      Route::get('/','SmsController@index')->name('sms');
      Route::post('update','SmsController@updateMessage');
      Route::post('send','SmsController@send')->name('sendSMS');
      Route::get('all','SmsController@allSMS')->name('allSMS');
      Route::get('due/{id}','SmsController@dueSms');
      Route::get('all/due','SmsController@dueAllSms')->name('allDueSMS');
      Route::get('delivery/{id}','SmsController@deliverySms');
      Route::get('all/delivery','SmsController@deliveryAllSms')->name('allDeliverySMS');

    });

    Route::group(['prefix' => 'daycloseup'], function(){
      Route::get('/','DaycloseupController@index')->name('daycloseup');
      Route::get('/api','DaycloseupController@getData');
      Route::post('/add','DaycloseupController@addData');
      Route::delete('/delete','DaycloseupController@delete');
    });

    Route::group(['prefix' => 'expenses'], function(){
        Route::get('/','ExpensesController@index')->name("expenses");
        Route::post('add','ExpensesController@newExpenses')->name("addExpenses");
        Route::get('details/{date}','ExpensesController@expensesDetails');
        Route::delete('delete','ExpensesController@delete');
        Route::post('edit','ExpensesController@edit');
    });
    Route::group(['prefix' => 'sells'], function(){
        Route::get('/','SellsController@index')->name('sells');
        Route::get('/api','SellsController@getSells');
        Route::post('/paydue','SellsController@payDue');
        Route::delete('/delete','SellsController@deleteSells');
        Route::get('/{id}/details', 'SellsController@sellDetails');
        Route::get('/{id}/customercopy', 'SellsController@customerCopy');

        Route::get('/frame','SellsController@sellFrame')->name('sellFrame');
        Route::post('/frame','SellsController@newSellFrame');

        Route::get('/sunglass','SellsController@sellSunglass')->name('sellSunglass');
        Route::post('/sunglass','SellsController@newSellSunglass');

        Route::get('/contactlens','SellsController@sellContactlens')->name('sellContactlens');
        Route::post('/contactlens','SellsController@newSellContactlens');

        Route::get('/plasticlens','SellsController@sellPlasticlens')->name('sellPlasticlens');
        Route::post('/plasticlens','SellsController@newSellPlasticlens');

    });

    Route::group(['prefix' => 'stock'], function(){

        Route::group(['prefix' => 'frame'], function(){
            Route::get('/','Stock\FrameController@frame')->name('frame');
            Route::get('/api','Stock\FrameController@getFrame');
            Route::post('/','Stock\FrameController@addFrame');
            Route::post('/update','Stock\FrameController@updateFrame');
            Route::post('/edit','Stock\FrameController@editFrame');
            Route::delete('/delete','Stock\FrameController@deleteFrame');
        });

            Route::group(['prefix' => 'sunglass'], function(){
                Route::get('/','Stock\SunglassController@sunglass')->name('sunglass');
                Route::get('/api','Stock\SunglassController@getSunglass');
                Route::post('/','Stock\SunglassController@addSunglass');
                Route::post('/update','Stock\SunglassController@updateSunglass');
                Route::post('/edit','Stock\SunglassController@editSunglass');
                Route::delete('/delete','Stock\SunglassController@deleteSunglass');
            });

            Route::group(['prefix' => 'contactlens'], function(){
                Route::get('/','Stock\ContactlensController@contactlens')->name('contactlens');
                Route::get('/api','Stock\ContactlensController@getContactlens');
                Route::post('/','Stock\ContactlensController@addContactlens');
                Route::post('/update','Stock\ContactlensController@updateContactlens');
                Route::post('/edit','Stock\ContactlensController@editContactlens');
                Route::delete('/delete','Stock\ContactlensController@deleteContactlens');
            });

            Route::group(['prefix' => 'plasticlens'], function(){
                Route::get('/','Stock\PlasticlensController@plasticlens')->name('plasticlens');
                Route::get('/api','Stock\PlasticlensController@getPlasticlens');
                Route::post('/','Stock\PlasticlensController@addPlasticlens');
                Route::post('/update','Stock\PlasticlensController@updatePlasticlens');
                Route::post('/edit','Stock\PlasticlensController@editPlasticlens');
                Route::delete('/delete','Stock\PlasticlensController@deletePlasticlens');
            });
        });
});
