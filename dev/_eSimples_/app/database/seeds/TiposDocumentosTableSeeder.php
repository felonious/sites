<?php

use Acme\TiposDocumentos\TipoDocumento;

class TiposDocumentosTableSeeder
  extends Seeder
{

  public function run()
  {
    DB::table( 'tipos_documentos' )->delete();

    TipoDocumento::create(
      [
        'id'               => 1,
        'nome'             => 'Sem documento',
        'calculo_custo_id' => 1,
        'valor_custo'      => 0.00
      ]
    );

    TipoDocumento::create(
      [
        'id'               => 2,
        'nome'             => 'Dinheiro',
        'calculo_custo_id' => 1,
        'valor_custo'      => 0.00
      ]
    );

    TipoDocumento::create(
      [
        'id'               => 3,
        'nome'             => 'Cheque',
        'calculo_custo_id' => 1,
        'valor_custo'      => 0.00
      ]
    );

    TipoDocumento::create(
      [
        'id'               => 4,
        'nome'             => 'Boleto',
        'calculo_custo_id' => 1,
        'valor_custo'      => 0.00
      ]
    );

    TipoDocumento::create(
      [
        'id'               => 5,
        'nome'             => 'Cartao de crédito',
        'calculo_custo_id' => 1,
        'valor_custo'      => 0.00
      ]
    );

    TipoDocumento::create(
      [
        'id'               => 6,
        'nome'             => 'Cartao de débito',
        'calculo_custo_id' => 1,
        'valor_custo'      => 0.00
      ]
    );

    TipoDocumento::create(
      [
        'id'               => 7,
        'nome'             => 'Duplicata',
        'calculo_custo_id' => 1,
        'valor_custo'      => 0.00
      ]
    );

    TipoDocumento::create(
      [
        'id'               => 8,
        'nome'             => 'Carnes',
        'calculo_custo_id' => 1,
        'valor_custo'      => '0.00'
      ]
    );

    TipoDocumento::create(
      [
        'id'               => 9,
        'nome'             => 'Transferencia eletronica',
        'calculo_custo_id' => 1,
        'valor_custo'      => 0.00
      ]
    );

  }
}