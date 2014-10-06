<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

$router->get('/', 'HomeController@index');

$router->resource('auth','App\Http\Controllers\Auth\AuthController');
$router->resource('password','App\Http\Controllers\Auth\RemindersController');
