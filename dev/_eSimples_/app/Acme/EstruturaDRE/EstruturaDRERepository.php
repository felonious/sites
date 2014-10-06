<?php namespace Acme\EstruturaDRE;

use Acme\Repositorio\PadraoRepository;
use DB;

class EstruturaDRERepository
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
  public function getOperacoes()
  {
    return DB::table( 'operacoes' )
      ->orderBy( 'id' )
      ->lists( 'nome', 'id' );;
  }

  /**
   * Obtem os grupos DRE
   *
   * @return array
   */
  public function getGruposDRE()
  {
    return DB::table( 'grupos_dre' )
      ->orderBy( 'id' )
      ->lists( 'nome', 'id' );;
  }
}