<?php

use Acme\FormasPagamentos\FormaPagamentoRepository;
use Acme\FormasPagamentos\FormaPagamentoValidator;
use Carbon\Carbon;

/**
 * @property mixed formValidator
 */
class FormasPagamentosController
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
   * @param UserValidator  $formValidator
   *
   * @param UserRepository $repository
   */
  function __construct(
    FormaPagamentoValidator $formValidator,
    FormaPagamentoRepository $repository
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

    $formasPagamentos = $this->repository->getPaginatedBy(
      'nome', $showMany
    );

    $perPages = $this->repository->getPerPage();

    return View::make(
      'formasPagamentos.index',
      compact( 'formasPagamentos', 'perPages', 'showMany' )
    );
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $contas          = $this->repository->getContas();
    $tiposDocumentos = $this->repository->getTiposPagamentos();
    $tiposIntervalos = $this->repository->getTiposIntervalos();

    return View::make(
      'formasPagamentos.create',
      compact( 'contas', 'tiposDocumentos', 'tiposIntervalos' )
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
      Input::only( 'nome' )
    );

    $this->repository->create();
    Flash::success( 'Registro incluído com sucesso.' );

    return Redirect::route( 'formasPagamentos.index' );
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
    $now              = Carbon::parse( Carbon::now() )->format( 'd/m/Y H:i:s' );
    $formasPagamentos = $this->repository->getAllby( 'nome' );

    return View::make(
      'formasPagamentos.show',
      compact( 'formasPagamentos', 'now' )
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
    $formaPagamento  = $this->repository->getById( $id );
    $contas          = $this->repository->getContas();
    $tiposDocumentos = $this->repository->getTiposDocumentos();
    $tiposIntervalos = $this->repository->getTiposIntervalos();

    return View::make(
      'formasPagamentos.edit',
      compact(
        'formaPagamento', 'contas', 'tiposDocumentos', 'tiposIntervalos'
      )
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
    $this->formValidator->validate( Input::only( 'nome' ) );

    $this->repository->update(
      $id,
      Input::only( 'nome', 'custo_utilizacao_id', 'valor_custo' )
    );

    Flash::success( 'Registro alterado com sucesso.' );

    return Redirect::route( 'formasPagamentos.index' );
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

    return Redirect::route( 'formasPagamentos.index' );
  }

}
