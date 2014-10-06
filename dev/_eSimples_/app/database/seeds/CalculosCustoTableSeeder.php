<?php

use Acme\Combos\CalculoCusto;

class CalculosCustoTableSeeder
  extends Seeder {

  public function run()
  {
    DB::table( 'calculos_custo' )->delete();

    CalculoCusto::create(
      [
        'id'   => 1,
        'nome' => ' Sem custo'
      ]
    );

    CalculoCusto::create(
      [
        'id'   => 2,
        'nome' => 'Percentagem'
      ]
    );

    CalculoCusto::create(
      [
        'id'   => 3,
        'nome' => 'Valor fixo por total'
      ]
    );

    CalculoCusto::create(
      [
        'id'   => 4,
        'nome' => 'valor fixo por parcela'
      ]
    );
  }
}