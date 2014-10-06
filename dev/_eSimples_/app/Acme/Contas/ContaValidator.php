<?php namespace Acme\Contas;

use Laracasts\Validation\FormValidator;

class ContaValidator
  extends FormValidator
{
  /**
   * @var array
   */
  protected $rules
    = [
      'nome'      => 'Required|Between:5,100',
      'descricao' => 'Required|Between:5,255'
    ];

}