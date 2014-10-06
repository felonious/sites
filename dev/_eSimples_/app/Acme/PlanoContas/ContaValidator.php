<?php namespace Acme\PlanoContas;

use Laracasts\Validation\FormValidator;

class ContaValidator
  extends FormValidator {

  /**
   * @var array
   */
  protected $rules
    = [
      'classificacao'    => 'Required|Between:1,100',
      'descricao'        => 'Requiredx|Between:5,255'
    ];

}