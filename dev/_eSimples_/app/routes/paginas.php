<?php

/**
 * Paginas
 */
Route::get(
  'dashboard',
  [
    'as'   => 'home_path',
    'uses' => 'PaginasController@home'
  ]
)->before('auth');