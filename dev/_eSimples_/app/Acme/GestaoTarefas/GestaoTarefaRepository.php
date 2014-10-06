<?php namespace Acme\GestaoTarefas;

use Acme\Repositorio\PadraoRepository;
use DB;

class GestaoTarefaRepository
  extends PadraoRepository {

  function __construct( GestaoTarefa $model )
  {
    $this->model = $model;
  }

  public function getAll()
  {
    DB::table( 'gestao_tarefas' )
      ->leftJoin(
        'prioridades', 'prioridades.id', '=', 'gestao_tarefas.prioridades_id'
      );
  }

  public function getPrioridades()
  {
    return DB::table( 'prioridades' )
      ->orderBy( 'id' )
      ->lists( 'nome', 'id' );
  }

  public function getSituacoes()
  {
    return DB::table( 'situacoes' )
      ->orderBy( 'id' )
      ->lists( 'nome', 'id' );
  }

  public function getUsuarios()
  {
    return DB::table( 'users' )
      ->where( 'id', '>', '1' )
      ->orderBy( 'name' )
      ->lists( 'name', 'id' );
  }
}