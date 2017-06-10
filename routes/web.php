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

/**@var \Illuminate\Routing\Router $router */

$router->get('/', function () {
    return view('index');
})->name('home');

//Auth::routes();

Route::get('/home', 'HomeController@index');

$router->get('/works', 'WorksController@index')
    ->name('works');

$router->get('/register', 'Auth\RegisterController@showRegistrationForm')
    ->name('register');
$router->post('/register', 'Auth\RegisterController@register');

$router->get('/login', 'Auth\LoginController@showLoginForm')
    ->name('login')->middleware('guest');
$router->post('/login', 'Auth\LoginController@login')
    ->name('postLogin');
$router->post('/logout', 'Auth\LoginController@logout')
    ->name('logout');

$router->post('/addwork', 'WorksController@addWork')
    ->name('addwork');


