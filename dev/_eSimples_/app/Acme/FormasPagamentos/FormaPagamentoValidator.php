<?php namespace Acme\FormasPagamentos;

use Laracasts\Validation\FormValidator;

class FormaPagamentoValidator
  extends FormValidator
{
  /**
   * @var array
   */
  protected $rules
    = [
      'nome'                       => 'Required|Between:5,100',
      'quantidade_maxima_parcelas' => 'Required|Between:1,255'
    ];

}