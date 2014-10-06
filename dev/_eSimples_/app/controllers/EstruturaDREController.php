<?php

use Acme\EstruturaDRE\EstruturaDRERepository;
use Acme\EstruturaDRE\EstruturaDREValidator;
use Carbon\Carbon;

/**
 * @property mixed formValidator
 */
class TiposDocumentosController
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
   * @param EstruturaDREValidator  $formValidator
   *
   * @param EstruturaDRERepository $repository
   */
  function __construct(
    EstruturaDREValidator $formValidator,
    EstruturaDRERepository $repository
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

    $estruturaDRE = $this->repository->getPaginatedBy(
      'id', $showMany
    );

    $perPages = $this->repository->getPerPage();

    return View::make(
      'estruturaDRE.index',
      compact( 'estruturaDRE', 'perPages', 'showMany' )
    );
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $grupoDRE  = $this->repository->getGruposDRE();
    $operacoes = $this->repository->getOperacoes();

    return View::make(
      'estruturaDRE.create',
      compact( 'grupoDRE', 'operacoes' )
    );
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    $this->formValidator->validate(
      Input::only( 'grupo_dre_id', 'operacao_id', 'ordem' )
    );

    $this->repository->create(
      Input::only( 'grupo_dre_id', 'operacao_id', 'ordem' )
    );

    Flash::success( 'Registro incluído com sucesso.' );

    return Redirect::route( 'estruturaDRE.index' );
  }

  /**
   * Display the specified resource.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function show( $id = 0 )
  {
    $now          = Carbon::parse( Carbon::now() )->format( 'd/m/Y H:i:s' );
    $estruturaDRE = $this->repository->getAllby( 'id' );

    return View::make(
      'estruturaDRE.show',
      compact( 'estruturaDRE', 'now' )
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
    $estruturaDRE = $this->repository->getById( $id );
    $grupoDRE     = $this->repository->getGruposDRE();
    $operacoes    = $this->repository->getOperacoes();

    return View::make(
      'estruturaDRE.edit',
      compact( 'estruturaDRE', 'grupoDRE', 'operacoes' )
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
    $this->formValidator->validate(
      Input::only( 'grupo_dre_id', 'operacao_id', 'ordem' )
    );

    $this->repository->update(
      $id,
      Input::only( 'grupo_dre_id', 'operacao_id', 'ordem' )
    );
    Flash::success( 'Registro alterado com sucesso.' );

    return Redirect::route( 'estruturaDRE.index' );
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

    return Redirect::route( 'estruturaDRE.index' );
  }

}
