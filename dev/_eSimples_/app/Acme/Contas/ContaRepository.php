<?php namespace Acme\Contas;

use Acme\Repositorio\PadraoRepository;

class ContaRepository
  extends PadraoRepository
{

  function __construct( Conta $model )
  {
    $this->model = $model;
  }

}