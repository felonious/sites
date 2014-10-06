<?php


use Acme\Combos\Operacao;

class OperacoesTableSeeder
  extends Seeder {

  public function run()
  {
    DB::table( 'operacoes' )->delete();

    Operacao::create(
      [
        'id'        => 1,
        'nome' => 'Soma'
      ]
    );

    Operacao::create(
      [
        'id'   => 2,
        'nome' => 'Total'
      ]
    );

  }
}