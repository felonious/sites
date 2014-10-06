<?php namespace Acme\Configuracoes;

use Acme\Repositorio\PadraoRepository;
use DB;

class EmpresaRepository
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
   * Obtem os custos por Utilizacao
   *
   * @return array
   */
  public function getCalculosCusto()
  {
    return DB::table( 'calculos_custo' )
      ->orderBy( 'id' )
      ->lists( 'nome', 'id' );;
  }

}