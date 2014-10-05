<?php
/**
 * Home
 */
$router->get('/',
             'HomeController@index');

/**
 * Autenticacao
 */
$router->controller('auth',
                    'App\Http\Controllers\Auth\AuthController');

$router->controller('password',
                    'App\Http\Controllers\Auth\RemindersController');
