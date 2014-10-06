<?php namespace Acme\Usuarios;

use Laracasts\Validation\FormValidator;

class UsuarioValidator
  extends FormValidator
{

  /**
   * @var array
   */
  protected $rules
    = [
      'name'                  => 'Required|Between:3,255',
      'username'              => 'Required|Between:3,50',
      'email'                 => 'Required|Between:3,255|Email|unique:users',
      'password'              => 'Required|Between:6,32|Confirmed|Regex:/^([a-z0-9!@#$€£%^&*_+-])+$/i',
      'password_confirmation' => 'Required_With:password|Between:6,32'
    ];

}