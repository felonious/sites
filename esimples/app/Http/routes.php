<?php

/**
 * Home
 */
$router->get('/', 'HomeController@index');

/**
 * Autenticacao
 */
$router->resource('auth', 'App\Http\Controllers\Auth\AuthController');
$router->resource('password', 'App\Http\Controllers\Auth\RemindersController');
