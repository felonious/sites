<?php namespace App\Http\Filters;

use Illuminate\Http\Response;
use Illuminate\Contracts\Foundation\Application;

/**
 * Class MaintenanceFilter
 *
 * @package App\Http\Filters
 */
class MaintenanceFilter {

  /**
   * The application implementation.
   *
   * @var Application
   */
  protected $app;

  /**
   * Create a new filter instance.
   *
   * @param  Application $app
   *
   * @return \App\Http\Filters\MaintenanceFilter
   */
  public function __construct( Application $app )
  {
    $this->app = $app;
  }

  /**
   * Run the request filter.
   *
   * @return mixed
   */
  public function filter()
  {
    if ( $this->app->isDownForMaintenance() ) {
      return new Response( 'Be right back!', 503 );
    }
  }

}
