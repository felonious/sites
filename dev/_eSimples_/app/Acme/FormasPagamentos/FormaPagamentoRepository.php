<?php namespace Acme\FormasPagamentos;

use Acme\Repositorio\PadraoRepository;
use DB;

class FormaPagamentoRepository
  extends PadraoRepository {

  function __construct(
    FormaPagamento $model
  ) {
    $this->model = $model;
  }

  public function getContas()
  {
    return DB::table( 'contas' )
      ->orderBy( 'id' )
      ->lists( 'nome', 'id' );
  }

  public function getTiposDocumentos()
  {
    return DB::table( 'tipos_documentos' )
      ->orderBy( 'id' )
      ->lists( 'nome', 'id' );
  }

  public function getTiposIntervalos()
  {
    return DB::table( 'tipos_intervalos' )
      ->orderBy( 'id' )
      ->lists( 'nome', 'id' );
  }

}