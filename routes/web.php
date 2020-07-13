<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','HomeController@index', function(){
})->name('home')->middleware('auth');

<<<<<<< HEAD
Route::get('get_details/{id}', 'HomeController@getdetails');
=======
Route::get('/sentemail', 'UpdateUserController@index');
Route::post('/sentemail/update', 'UpdateUserController@update');
Route::post('/sentemail/verifypledge', 'UpdateUserController@verifypledge');
Route::get('/sentemail/showverifypledge', 'UpdateUserController@show_verified_page');
>>>>>>> 79e9169fcf70217eb7c201d05868148d6a53b697

Route::resource('voting', 'VotingController');
Route::resource('update_user', 'UpdateUserController');

// Route::get('email-form', 'SentEmailController@create');
// Route::post('email-form', 'SentEmailController@store');

Route::prefix('admin')
      ->namespace('Admin')
      ->middleware(['auth', 'admin'])
      ->group(function(){
        Route::get('/', 'DashboardController@index')
        ->name('dashboard');
        Route::resource('candidate', 'CandidateController');
      });

// Auth::routes(['verify' => true]);
Auth::routes();