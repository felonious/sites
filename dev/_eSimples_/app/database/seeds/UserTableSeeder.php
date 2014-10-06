<?php

use Acme\Usuarios\Usuario;

class UserTableSeeder
  extends Seeder
{

  public function run()
  {
    DB::table( 'users' )->delete();

    Usuario::create(
      [
        'name'     => 'Administrador do Sistema',
        'username' => 'Administrador',
        'email'    => 'Administrador@esimples.com',
        'password' => 'secret'
      ]
    );

    Usuario::create(
      [
        'name'     => 'Sergio Luiz Dobri',
        'username' => 'sldobri',
        'email'    => 'sldobri@live.com',
        'password' => 'secret'
      ]
    );

  }
}