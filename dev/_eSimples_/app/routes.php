<?php

Route::get(
  'login',
  [
    'as'   => 'login_path',
    'uses' => 'SessoesController@create'
  ]
);

Route::post(
  'login',
  [
    'as'   => 'login_path',
    'uses' => 'SessoesController@store'
  ]
);

Route::get(
  'logout',
  [
    'as'   => 'logout_path',
    'uses' => 'SessoesController@destroy'
  ]
);


Route::filter(
  'auth',
  function () {
    if ( Auth::guest() ) {
      return Redirect::to( 'login' );
    }
  }
);

Route::group(
  ['before' => 'auth'],
  function () {

    foreach ( File::allFiles( __DIR__ . '/routes' ) as $partial ) {

      require_once $partial->getPathname();
    }

  }
);