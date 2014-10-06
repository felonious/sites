<?php

use Acme\GestaoTarefas\GestaoTarefaRepository;
use Acme\GestaoTarefas\GestaoTarefaValidator;

/**
 * @property mixed formValidator
 */
class GestaoTarefasController
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
    GestaoTarefaValidator $formValidator,
    GestaoTarefaRepository $repository
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
    $searchFilters = Input::except('showMany', 'enviar');

    $tarefas = $this->repository->getPaginatedBy(
      'titulo', $showMany, $searchFilters
    );

    $perPages = $this->repository->getPerPage();

    return View::make(
      'gestaoTarefas.index',
      compact( 'tarefas', 'perPages', 'showMany' )
    );
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $prioridades = $this->repository->getPrioridades();
    $situacoes   = $this->repository->getSituacoes();
    $usuarios    = $this->repository->getUsuarios();

    return View::make(
      'gestaoTarefas.create',
      compact( 'prioridades', 'situacoes', 'usuarios' )
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
      Input::only( 'titulo', 'descricao', 'user_id' )
    );

    $this->repository->create(
      Input::only(
        'titulo',
        'descricao',
        'user_id',
        'prioridade_id',
        'situacao_id',
        'lembrar_em',
        'palavra_chave'
      )
    );
    Flash::success( 'Registro incluído com sucesso.' );

    return Redirect::route( 'gestaoTarefas.index' );
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
    $now     = Carbon::parse( Carbon::now() )->format( 'd/m/Y H:i:s' );
    $tarefas = $this->repository->getAllby( 'titulo' );

    return View::make(
      'gestaoTarefas.show',
      compact( 'tarefas', 'now' )
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
    $tarefa      = $this->repository->getById( $id );
    $prioridades = $this->repository->getPrioridades();
    $situacoes   = $this->repository->getSituacoes();
    $usuarios    = $this->repository->getUsuarios();

    return View::make(
      'gestaoTarefas.edit',
      compact( 'tarefa', 'prioridades', 'situacoes', 'usuarios' )
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
      Input::only( 'titulo', 'descricao', 'user_id' )
    );

    $this->repository->update(
      $id,
      Input::only(
        'titulo',
        'descricao',
        'user_id',
        'prioridade_id',
        'situacao_id',
        'lembrar_em',
        'palavra_chave'
      )
    );
    Flash::success( 'Registro alterado com sucesso.' );

    return Redirect::route( 'gestaoTarefas.index' );
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

    return Redirect::route( 'gestaoTarefas.index' );
  }

}
