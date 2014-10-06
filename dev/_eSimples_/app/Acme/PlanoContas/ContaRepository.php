<?php namespace Acme\PlanoContas;

use Acme\Repositorio\PadraoRepository;
use DB;

class ContaRepository
  extends PadraoRepository {

  /**
   * @param TipoDocumento    $model
   * @param CustosUtilizacao $custos
   */
  function __construct(
    TipoDocumento $model
  ) {
    $this->model = $model;
  }

  /**
   * Obtem os operacoes
   *
   * @return array
   */
  public function gruposDRE()
  {
    define('SOMA', 1);

    return DB::table( 'estrutura_dre' )
      ->join( 'grupos_dre', 'estrutura_dre.grupo_dre_id', '=', 'grupos_dre.id' )
      ->where( 'estrutura_dre.operacoes_id', '=', SOMA )
      ->orderBy( 'id' )
      ->lists( 'grupos_dre.nome', 'grupos_dre.id' );;
  }

}