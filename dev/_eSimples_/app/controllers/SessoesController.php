<?php


use Acme\Sessoes\LoginValidator;

class SessoesController
  extends \BaseController {

  /**
   * @var $formValidator
   */
  protected $formValidator;

  function __construct( LoginValidator $formValidator )
  {
    $this->formValidator = $formValidator;

    $this->beforeFilter( 'guest', [ 'except' => 'destroy' ] );
  }

  /**
   * Show the form for creating a new resource.
   * GET /Sessions/create
   *
   * @return Response
   */
  public function create()
  {
    return View::make( 'Sessoes.create' );
  }

  /**
   * Store a newly created resource in storage.
   * POST /Sessions
   *
   * @return Response
   */
  public function store()
  {
    $input = Input::only( 'username', 'password' );

    $this->formValidator->validate( $input );

    if ( Auth::attempt( $input ) )
    {
      return Redirect::route( 'home_path' );
    }

    Flash::error( 'Usuário ou senha inválida!' );

    return Redirect::back()->withInput();
  }


  /**
   * Remove the specified resource from storage.
   * DELETE /Sessions/{id}
   *
   * @param  int $id
   * @return Response
   */
  public function destroy( $id = null )
  {
    Auth::logout();

    return Redirect::to( 'login' );
  }

}