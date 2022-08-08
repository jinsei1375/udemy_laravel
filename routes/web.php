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

Route::get('/', function () {
    return view('welcome');
});

Route::get('tests/test', 'TestController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function(){
    Route::get('index', 'ContactFormController@index')->name('contact.index');
    Route::get('contact', 'ContactFormController@create')->name('contact.create');
    Route::post('contact', 'ContactFormController@create')->name('contact.create');
    Route::get('store', 'ContactFormController@store')->name('contact.store');

});


// Route::resource('contacts', 'ContactFormController')->only([
//     'index', 'show'
// ]);
