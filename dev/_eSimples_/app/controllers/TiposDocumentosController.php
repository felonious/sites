<?php
use Acme\TiposDocumentos\TipoDocumentoValidator;
use Acme\TiposDocumentos\TipoDocumentoRepository;
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
   * @param UserValidator  $formValidator
   *
   * @param UserRepository $repository
   */
  function __construct(
    TipoDocumentoValidator $formValidator,
    TipoDocumentoRepository $repository
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

    $tiposDocumentos = $this->repository->getPaginatedBy(
      'nome', $showMany
    );

    $perPages = $this->repository->getPerPage();

    return View::make(
      'tiposDocumentos.index',
      compact( 'tiposDocumentos' , 'perPages', 'showMany' )
    );
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $calculoCusto = $this->repository->getCalculosCusto();

    return View::make(
      'tiposDocumentos.create',
      compact( 'calculoCusto' )
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

    $this->repository->create(
      Input::only( 'nome', 'calculo_custo_id', 'valor_custo' )
    );
    Flash::success( 'Registro incluído com sucesso.' );

    return Redirect::route( 'tiposDocumentos.index' );
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
    $now             = Carbon::parse( Carbon::now() )->format( 'd/m/Y H:i:s' );
    $tiposDocumentos = $this->repository->getAllby( 'nome' );

    return View::make(
      'tiposDocumentos.show',
      compact( 'tiposDocumentos', 'now' )
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
    $tipoDocumento = $this->repository->getById( $id );
    $calculoCusto  = $this->repository->getCalculosCusto();

    return View::make(
      'tiposDocumentos.edit',
      compact( 'tipoDocumento', 'calculoCusto' )
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
      Input::only( 'nome' )
    );

    $this->repository->update(
      $id,
      Input::only( 'nome', 'calculo_custo_id', 'valor_custo' )
    );
    Flash::success( 'Registro alterado com sucesso.' );

    return Redirect::route( 'tiposDocumentos.index' );
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

    return Redirect::route( 'tiposDocumentos.index' );
  }

}
