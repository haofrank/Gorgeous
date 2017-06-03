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

Route::get('/', 'QuestionsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::name('email.verify')->get('email/verify/{token}','EmailController@verify');

Route::resource('questions', 'QuestionsController');

Route::post('/questions/{question}/answer', 'AnswersController@store');

Route::get('question/{question}/follow','QuestionFollowController@follow');

Route::get('notifications','NotificationsController@index')->name('notifications');
Route::get('notifications/{notification}','NotificationsController@show');

Route::get('inbox', 'InboxController@index')->name('inbox');
Route::get('inbox/{dialogId}','InboxController@show');
Route::post('inbox/{dialogId}/store','InboxController@store');

Route::get('avater','UserController@avater')->name('avater');
Route::post('avatar','UserController@changeAvater');

Route::get('password', 'PasswordController@password');
Route::post('password/update', 'PasswordController@update');

Route::get('setting','SettingController@index')->name('setting');
Route::post('setting','SettingController@storeInfo');
// Route::get('/emailTest', function()
// {
//     // $email = new App\Mail\EmailTest();
//     // Mail::to('hao.frank@outlook.com')->send($email);
//
// });
