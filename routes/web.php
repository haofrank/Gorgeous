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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::name('email.verify')->get('email/verify/{token}','EmailController@verify');

Route::resource('questions', 'QuestionsController');


// Route::get('/emailTest', function()
// {
//     // $email = new App\Mail\EmailTest();
//     // Mail::to('hao.frank@outlook.com')->send($email);
//
// });
