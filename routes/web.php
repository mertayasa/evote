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

Route::get('get_details/{id}', 'HomeController@getdetails');

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