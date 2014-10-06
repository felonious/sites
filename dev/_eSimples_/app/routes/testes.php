<?php

/**
 * Testes


Event::listen(
  'illuminate.query', function ( $query ) {
    var_dump($query);
  }
);
 */

Route::get(
  '/t',
  function () {

    return View::make( '_layouts.main' );
  }
);