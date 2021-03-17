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
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'WelcomeController@index')->name('welcome');
Route::resource('reservation', 'ReservationController');
Route::post('contact', 'ContactController@sendMessage')->name('contact.send');


// Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'admin'], function () {
Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');

    Route::get('/role-register', 'Admin\AdminController@registered')->name('role-register');

    Route::get('/edit/{id}', 'Admin\AdminController@edit')->name('edit');

    Route::put('/update/{id}', 'Admin\AdminController@update')->name('update');

    Route::delete('/delete/{id}', 'Admin\AdminController@delete')->name('delete');


    Route::resource('slider', 'Admin\SliderController');
    Route::resource('category', 'Admin\CategoryController');
    Route::resource('item', 'Admin\ItemController');
    Route::get('reservation', 'Admin\ReservationController@index')->name('reservation.index');
    Route::post('reservation/{id}', 'Admin\ReservationController@status')->name('reservation.status');
    Route::delete('reservation/{id}', 'Admin\ReservationController@destroy')->name('reservation.destroy');

    Route::get('contact', 'Admin\ContactController@index')->name('contact.index');
    Route::get('contact/{id}', 'Admin\ContactController@show')->name('contact.show');
    Route::delete('contact/{id}', 'Admin\ContactController@destroy')->name('contact.destroy');

    // Route::get('slider', 'SliderController@index')->name('slider.index');
    // Route::get('slider/create', 'SliderController@create')->name('slider.create');
    // Route::post('slider/store', 'SliderController@store')->name('slider.store');
    // Route::get('slider/edit/{id}', 'SliderController@edit')->name('slider.edit');
    // Route::put('slider/update/{id}', 'SliderController@edit')->name('slider.update');
});



