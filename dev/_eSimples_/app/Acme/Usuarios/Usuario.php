<?php namespace Acme\Usuarios;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Support\Facades\Hash;

class Usuario
  extends \Eloquent
  implements UserInterface, RemindableInterface {

  use UserTrait, RemindableTrait;

  protected $table = 'users';

  protected $fillable
    = [
      'name',
      'username',
      'email',
      'password'
    ];

  protected $hidden
    = [
      'id',
      'password'
    ];

  protected $guarded
    = [
      'id',
      'password'
    ];

  public function setPasswordAttribute( $value )
  {
    $this->attributes['password'] = Hash::make( $value );
  }

  public function getUpdatedAtAttribute( $value )
  {
    return Carbon::parse( $value )->format( 'd/m/Y H:i:s' );
  }

  public function getCreatedAtAttribute( $value )
  {
    return Carbon::parse( $value )->format( 'd/m/Y H:i:s' );
  }
}
