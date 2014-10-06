<?php

use Acme\Contas\ContaRepository;
use Acme\Contas\ContaValidator;
use Carbon\Carbon;

/**
 * @property mixed formValidator
 */
class ContasController
  extends \BaseController {

  /**
   * @var $formValidator
   */
  private $formValidator;
  /**
   * @var $repository
   */
  private $repository;

  /**
   * @param ContaValidator  $formValidator
   * @param ContaRepository $repository
   */
  function __construct(
    ContaValidator $formValidator,
    ContaRepository $repository
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

    $contas = $this->repository->getPaginatedBy(
      'nome', $showMany
    );

    $perPages = $this->repository->getPerPage();

    return View::make(
      'contas.index',
      compact( 'contas', 'perPages', 'showMany' )
    );
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return View::make( 'contas.create' );
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    $input = Input::only( 'nome', 'descricao' );

    $this->formValidator->validate( $input );

    $this->repository->create( $input );
    Flash::success( 'Registro incluído com sucesso.' );

    return Redirect::route( 'contas.index' );
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
    $now    = Carbon::parse( Carbon::now() )->format( 'd/m/Y H:i:s' );
    $contas = $this->repository->getAllby( 'nome' );

    return View::make(
      'contas.show',
      compact( 'contas', 'now' )
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
    $conta = $this->repository->getById( $id );

    return View::make( 'contas.edit', compact( 'conta' ) );
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
    $input = Input::only( 'nome', 'descricao' );

    $this->formValidator->validate( $input );

    $this->repository->update( $id, $input );
    Flash::success( 'Registro alterado com sucesso.' );

    return Redirect::route( 'contas.index' );
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

    return Redirect::route( 'contas.index' );
  }

}
