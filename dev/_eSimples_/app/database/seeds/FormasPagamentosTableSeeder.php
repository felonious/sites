<?php

use Acme\FormasPagamentos\FormaPagamento;

class FormasPagamentosTableSeeder
  extends Seeder
{

  public function run()
  {
    DB::table( 'formas_pagamento' )->delete();

    FormaPagamento::create(
      [
        'id'        => 1,
        'nome' => 'A vista',
        'quantidade_maxima_parcelas' => 0,
        'quantidade_parcelas_sem_juros' => 0,
        'percentual_juros' => 0.0,
        'valor_fixo_taxa' => 0.0,
        'percentual_desconto_a_vista' => 0.0,
        'conta_id' => 1,
        'tipo_documento_id' => 2,
        'intervalo_parcela' => 1,
        'tipo_intervalo_id' => 2
      ]
    );

    FormaPagamento::create(
      [
        'id'        => 2,
        'nome' => 'Parcelado',
        'quantidade_maxima_parcelas' => 3,
        'quantidade_parcelas_sem_juros' => 3,
        'percentual_juros' => 0.0,
        'valor_fixo_taxa' => 0.0,
        'percentual_desconto_a_vista' => 0.0,
        'conta_id' => 1,
        'tipo_documento_id' => 2,
        'intervalo_parcela' => 1,
        'tipo_intervalo_id' => 2
      ]
    );
  }
}