<?php

use Acme\EstruturaDRE\EstruturaDRE;

class EstruturaDRETableSeeder
  extends Seeder {

  public function run()
  {
    DB::table( 'estrutura_dre' )->delete();

    EstruturaDRE::create(
      [
        'id'           => 1,
        'grupo_dre_id' => 1,
        'operacao_id'  => 1,
        'ordem'        => 19
      ]
    );

    EstruturaDRE::create(
      [
        'id'           => 2,
        'grupo_dre_id' => 2,
        'operacao_id'  => 1,
        'ordem'        => 20
      ]
    );

    EstruturaDRE::create(
      [
        'id'           => 3,
        'grupo_dre_id' => 3,
        'operacao_id'  => 2,
        'ordem'        => 30
      ]
    );

    EstruturaDRE::create(
      [
        'id'           => 4,
        'grupo_dre_id' => 4,
        'operacao_id'  => 1,
        'ordem'        => 40
      ]
    );

    EstruturaDRE::create(
      [
        'id'           => 5,
        'grupo_dre_id' => 5,
        'operacao_id'  => 1,
        'ordem'        => 50
      ]
    );

    EstruturaDRE::create(
      [
        'id'           => 6,
        'grupo_dre_id' => 6,
        'operacao_id'  => 2,
        'ordem'        => 60
      ]
    );

    EstruturaDRE::create(
      [
        'id'           => 7,
        'grupo_dre_id' => 7,
        'operacao_id'  => 1,
        'ordem'        => 70
      ]
    );

    EstruturaDRE::create(
      [
        'id'           => 8,
        'grupo_dre_id' => 8,
        'operacao_id'  => 1,
        'ordem'        => 80
      ]
    );

    EstruturaDRE::create(
      [
        'id'           => 9,
        'grupo_dre_id' => 9,
        'operacao_id'  => 2,
        'ordem'        => 90
      ]
    );

  }
}