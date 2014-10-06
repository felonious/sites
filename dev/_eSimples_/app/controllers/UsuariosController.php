<?php
use Acme\Usuarios\UsuarioValidator;
use Acme\Usuarios\UsuarioRepository;
use Carbon\Carbon;

/**
 * @property mixed formValidator
 */
class UsuariosController
  extends \BaseController {

  /**
   * @var UserValidator
   */
  private $formValidator;
  /**
   * @var UserRepository
   */
  private $repository;

  /**
   * @param UserValidator  $formValidator
   *
   * @param UserRepository $repository
   */
  function __construct(
    UsuarioValidator $formValidator,
    UsuarioRepository $repository
  ) {
    $this->formValidator = $formValidator;
    $this->repository    = $repository;
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $showMany = Input::only( 'showMany' )['showMany'];

    $usuarios = $this->repository->getPaginatedBy(
      'username', $showMany
    );

    $perPages = $this->repository->getPerPage();

    return View::make(
      'usuarios.index',
      compact( 'usuarios', 'perPages', 'showMany' )
    );
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return View::make( 'usuarios.create' );
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    $input = Input::only(
      'name',
      'username',
      'email',
      'password',
      'password_confirmation'
    );

    $this->formValidator->validate( $input );

    $this->repository->create( $input );

    Flash::success( 'Registro incluído com sucesso.' );

    return Redirect::route( 'usuarios.index' );
  }

  /**
   * Display the specified resource.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function show( $id )
  {
    $now      = Carbon::parse( Carbon::now() )->format( 'd/m/Y H:i:s' );
    $usuarios = $this->repository->getAllby( 'username' );

    return View::make(
      'usuarios.show',
      compact( 'usuarios', 'now' )
    );
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function edit( $id )
  {
    $usuario = $this->repository->getById( $id );

    return View::make(
      'usuarios.edit',
      compact( 'usuario' )
    );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function update( $id )
  {
    $input = Input::only(
      'name',
      'username',
      'email',
      'password',
      'password_confirmation'
    );

    $this->formValidator->validate( $input );

    $this->repository->update( $id, $input );

    Flash::success( 'Registro alterado com sucesso.' );

    return Redirect::route( 'usuarios.index' );
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function destroy( $id )
  {
    $this->repository->delete( $id );

    Flash::success( 'Registro excluido com sucesso.' );

    return Redirect::route( 'usuarios.index' );
  }

}
