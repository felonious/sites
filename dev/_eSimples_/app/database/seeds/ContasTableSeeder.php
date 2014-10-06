<?php


use Acme\Contas\Conta;

class ContasTableSeeder
  extends Seeder
{

  public function run()
  {
    DB::table( 'contas' )->delete();

    Conta::create(
      [
        'id'        => 1,
        'nome'      => 'Caixa Interno',
        'descricao' => 'Caixa interno da empresa'
      ]
    );

  }
}