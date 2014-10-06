<?php

class PaginasController
  extends \BaseController
{

  /**
   * GET /
   *
   * @return Response
   */
  public function home()
  {
    return View::make( 'paginas.home' );
  }

}