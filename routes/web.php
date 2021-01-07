<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\Api\MessageController;
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

// Route::get('/', function () {
//     return view('auth.login');
// });


Route::get('logout', function () {
    return redirect('login')->with(Auth::logout());
})->name('logout');

Auth::routes();

Route::resource('group', 'GroupController')->middleware('auth');

Route::get('/group/{uuid}/messages', 'Api\MessageController@group_messages')->middleware('auth');

Route::get('/group/{uuid}/invitation', 'GroupController@accept_invitation')->name('group.accept_invitation'); //->middleware('auth');
Route::post('/group/{uuid}/invitation', 'GroupController@post_accept_invitation')->name('group.post_accept_invitation'); //->middleware('auth');

Route::post('/group/{uuid}/invite', 'GroupController@invite')->name('group.invite')->middleware('auth');

Route::post('/authorize_group', 'Api\MessageController@authorize_group')->name('authorize_group')->middleware('auth');

Route::get('/messenger/{uuid}/group', 'MessengerController@group')->name('messenger.group')->middleware('auth');

Route::get('/messenger', 'MessengerController@index')->name('messenger')->middleware('auth');


Route::get('/privacy-policy', 'HomeController@privacy_policy')->name('privacy_policy');
Route::get('/contact-us', 'HomeController@contact_us')->name('contact_us');
Route::get('/faqs', 'HomeController@faqs')->name('faqs');
Route::get('/about-us', 'HomeController@about_us')->name('about_us');
Route::get('/', 'HomeController@index')->name('home');