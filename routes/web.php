<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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


Route::get('/log', function () {
    return view('login');
});
Route::get('/logon', function () {
    return view('logon');
});
Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    
    Route::post('activate', 'SubscriptionsController@activate');
    Route::get('searchusers', 'SubscribersController@search');
    Route::get('searchsubs', 'SubscriptionsController@search');
    Route::post('addsubscription', 'SubscribersController@addsubscription');
    
    
    
    Route::resource('messages', 'MessagesController');
    Route::resource('settings', 'SettingsController');
    
    Route::resource('allusers', 'SubscribersController');
    Route::resource('subscriptions', 'SubscriptionsController');
    Route::get('/', 'DashboardController@root');
    
   });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
