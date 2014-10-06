<?php namespace Acme\EstruturaDRE;

use Laracasts\Validation\FormValidator;

class EstruturaDREValidator
  extends FormValidator {

  /**
   * @var array
   */
  protected $rules
    = [
      'grupo_dre_id' => 'Required',
      'operacao_id'  => 'Required',
      'ordem'        => 'Required'
    ];

}