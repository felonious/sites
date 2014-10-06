<?php


use Acme\Configuracoes\Empresa;

class ConfiguracoesEmpresasTableSeeder
  extends Seeder {

  public function run()
  {
    DB::table( 'configuracoes_empresas' )->delete();

    Empresa::create(
      [
        'id'                     => 1,
        'bairro'                 => 'Centro',
        'cep'                    => '15370-000',
        'cidade'                 => 'Pereria Barreto',
        'uf'                     => 'SP',
        'principal_atividade_id' => 1,
        'regime_tributario_id'   => 1,
        'aliquota_simples'       => 0

      ]
    );

  }
}