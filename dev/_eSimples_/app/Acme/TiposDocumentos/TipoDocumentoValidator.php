<?php namespace Acme\TiposDocumentos;

use Laracasts\Validation\FormValidator;

class TipoDocumentoValidator
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