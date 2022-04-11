<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Auth;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Index */

Route::get('/welcome', 'DashboardController@index');

/* Login */

Route::get('/', 'LoginController@login');
Route::post('login/auth', 'LoginController@store');

/* Register */

Route::post('/register/store', 'RegisterController@store');
Route::get('/register', 'RegisterController@register');

/* Auth */
Route::post('logout', 'AuthController@logout');


Route::get('/profil', 'ProfilController@index');

/* Event */
route::get('/event', 'EventController@index');
route::get('event/create', 'EventController@create');
route::post('event/create', 'EventController@store');
route::get('event/edit/{id}', 'EventController@edit');
route::post('event/edit/{id}', 'EventController@update');
route::get('event/delete/{id}', 'EventController@destroy');
