<?php


use Acme\Combos\Prioridade;

class PrioridadesTableSeeder
  extends Seeder {

  public function run()
  {
    DB::table( 'prioridades' )->delete();

    Prioridade::create(
      [
        'id'   => 1,
        'nome' => 'Baixa'
      ]
    );

    Prioridade::create(
      [
        'id'   => 2,
        'nome' => 'Normal'
      ]
    );

    Prioridade::create(
      [
        'id'   => 3,
        'nome' => 'Alta'
      ]
    );

  }
}