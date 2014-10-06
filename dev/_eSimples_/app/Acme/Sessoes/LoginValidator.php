<?php namespace Acme\Sessoes;

use Laracasts\Validation\FormValidator;

class LoginValidator
  extends FormValidator
{

  /**
   * @var array
   */
  protected $rules
    = [
      'username' => 'Required',
      'password' => 'Required'
    ];

}