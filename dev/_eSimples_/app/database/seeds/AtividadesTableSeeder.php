<?php


use Acme\Combos\AtividadePrincipal;

class AtividadesTableSeeder
  extends Seeder {

  public function run()
  {
    DB::table( 'atividades_principais' )->delete();

    AtividadePrincipal::create(
      [
        'id'   => 1,
        'nome' => 'Comércio'
      ]
    );

    AtividadePrincipal::create(
      [
        'id'   => 2,
        'nome' => 'Serviço'
      ]
    );

    AtividadePrincipal::create(
      [
        'id'   => 3,
        'nome' => 'Indústria'
      ]
    );

  }
}