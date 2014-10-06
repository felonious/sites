<?php


use Acme\Combos\RegimeTributario;

class RegimesTributarioTableSeeder
  extends Seeder {

  public function run()
  {
    DB::table( 'regimes_tributario' )->delete();

    RegimeTributario::create(
      [
        'id'   => 1,
        'nome' => 'Simples Nacional'
      ]
    );

    RegimeTributario::create(
      [
        'id'   => 2,
        'nome' => 'Lucro Real'
      ]
    );

    RegimeTributario::create(
      [
        'id'   => 3,
        'nome' => 'Indústria'
      ]
    );

  }
}