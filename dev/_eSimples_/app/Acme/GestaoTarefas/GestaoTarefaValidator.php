<?php namespace Acme\GestaoTarefas;

use Laracasts\Validation\FormValidator;

class GestaoTarefaValidator
  extends FormValidator {

  /**
   * @var array
   */
  protected $rules
    = [
      'titulo'    => 'Required|Between:1,255',
      'descricao' => 'Required',
      'user_id'   => 'Required'
    ];

}