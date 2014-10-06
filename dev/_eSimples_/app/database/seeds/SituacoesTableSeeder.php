<?php


use Acme\Combos\Situacao;

class SituacoesTableSeeder
  extends Seeder {

  public function run()
  {
    DB::table( 'situacoes' )->delete();

    Situacao::create(
      [
        'id'   => 1,
        'nome' => 'Criada'
      ]
    );

    Situacao::create(
      [
        'id'   => 2,
        'nome' => 'Em execução'
      ]
    );

    Situacao::create(
      [
        'id'   => 3,
        'nome' => 'Finalizada'
      ]
    );

  }
}