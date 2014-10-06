<?php


use Acme\Combos\GrupoDRE;

class GruposDRETableSeeder
  extends Seeder {

  public function run()
  {
    DB::table( 'grupos_dre' )->delete();

    GrupoDRE::create(
      [
        'id'        => 1,
        'nome' => 'Faturamento'
      ]
    );

    GrupoDRE::create(
      [
        'id'   => 2,
        'nome' => '(COFINS, PIS, ISS)'
      ]
    );

    GrupoDRE::create(
      [
        'id'   => 3,
        'nome' => 'Faturamento líquido'
      ]
    );

    GrupoDRE::create(
      [
        'id'   => 4,
        'nome' => 'Despesas Pessoal/Encargos'
      ]
    );

    GrupoDRE::create(
      [
        'id'   => 5,
        'nome' => 'Outros'
      ]
    );

    GrupoDRE::create(
      [
        'id'   => 6,
        'nome' => 'Resultado Antes IRPJ/CSLL'
      ]
    );

    GrupoDRE::create(
      [
        'id'   => 7,
        'nome' => 'IRPJ'
      ]
    );

    GrupoDRE::create(
      [
        'id'   => 8,
        'nome' => 'CSLL'
      ]
    );

    GrupoDRE::create(
      [
        'id'   => 9,
        'nome' => 'Lucro líquido no período'
      ]
    );

  }
}