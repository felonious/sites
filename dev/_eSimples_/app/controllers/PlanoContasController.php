<?php

use Acme\PlanoContas\ContaRepository;
use Acme\PlanoContas\ContaValidator;
use Carbon\Carbon;

/**
 * @property mixed formValidator
 */
class PlanoContasController
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
   * @param PlanoContaValidator  $formValidator
   *
   * @param PlanoContaRepository $repository
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
    $searchFilters = Input::except('showMany');

    $contas = $this->repository->getPaginatedBy(
      'classificacao', $showMany, $searchFilters
    );

    $perPages = $this->repository->getPerPage();

    return View::make(
      'planoContas.index',
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
    $gruposDRE = $this->repository->gruposDRE();

    return View::make(
      'planoContas.create',
      compact( 'gruposDRE' )
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
      Input::only( 'classificacao', 'descricao' )
    );

    $this->repository->create(
      Input::only( 'classificacao', 'descricao', 'grupo_dre_id' )
    );
    Flash::success( 'Registro incluído com sucesso.' );

    return Redirect::route( 'planoContas.index' );
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
    $now         = Carbon::parse( Carbon::now() )->format( 'd/m/Y H:i:s' );
    $contas = $this->repository->getAllby( 'nome' );

    return View::make(
      'planoContas.show',
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
    $conta   = $this->repository->getById( $id );
    $gruposDRE = $this->repository->gruposDRE();

    return View::make(
      'planoContas.edit',
      compact( 'conta', 'gruposDRE' )
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
      Input::only( 'classificacao', 'descricao' )
    );

    $this->repository->update(
      $id,
      Input::only( 'classificacao', 'descricao', 'grupo_dre_id' )
    );
    Flash::success( 'Registro alterado com sucesso.' );

    return Redirect::route( 'planoContas.index' );
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

    return Redirect::route( 'planoContas.index' );
  }

}
