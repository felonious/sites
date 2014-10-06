<?php namespace Acme\Configuracoes;

use Laracasts\Validation\FormValidator;

class EmpresaValidator
  extends FormValidator
{
  /**
   * @var array
   */
  protected $rules
    = [
      'nome' => 'Required|Between:5,100'
    ];

}