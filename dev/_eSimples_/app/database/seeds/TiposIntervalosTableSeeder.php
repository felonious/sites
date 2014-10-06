<?php

use Acme\Combos\TipoIntervalo;

class TiposIntervalosTableSeeder
  extends Seeder {

  public function run()
  {
    DB::table( 'tipos_intervalos' )->delete();

    TipoIntervalo::create(
      [
        'id'   => 1,
        'nome' => 'Mês'
      ]
    );

    TipoIntervalo::create(
      [
        'id'   => 2,
        'nome' => 'Dias'
      ]
    );
  }
}