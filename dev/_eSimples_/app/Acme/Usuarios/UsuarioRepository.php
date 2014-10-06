<?php namespace Acme\Usuarios;

use Acme\Repositorio\PadraoRepository;

class UsuarioRepository
  extends PadraoRepository {

  /**
   * @param Usuario $model
   */
  function __construct( Usuario $model )
  {
    $this->model = $model;
  }

}