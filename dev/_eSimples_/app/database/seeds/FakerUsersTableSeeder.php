<?php

use Acme\Usuarios\Usuario;
use Faker\Factory as Faker;

class FakerUsersTableSeeder
    extends Seeder {

  public function run()
  {
    $faker = Faker::create();

    foreach ( range( 1, 50 ) as $index )
    {
      Usuario::create(
          [
              'name' => $faker->name(),
              'username' => $faker->userName(),
              'email'    => $faker->email(),
              'password' => 'secret']
      );
    }
  }

}
