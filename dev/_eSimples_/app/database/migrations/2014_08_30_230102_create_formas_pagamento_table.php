<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormasPagamentoTable
  extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(

      'formas_pagamento',

      function ( Blueprint $table ) {
        $table->increments( 'id' );
        $table->string( 'nome', 100 )->unique();
        $table->integer( 'quantidade_maxima_parcelas' )->default( 0 );
        $table->integer( 'quantidade_parcelas_sem_juros' )->default( 0 );
        $table->decimal( 'percentual_juros', 3, 2 )->default( '0.00' );
        $table->decimal( 'valor_fixo_taxa', 12, 2 )->default( '0.00' );
        $table->decimal( 'percentual_desconto_a_vista', 3, 2 )->default(
          '0.00'
        );

        $table->integer( 'conta_id' )->unsigned()->default( 1 );;
        $table->foreign( 'conta_id' )
          ->references( 'id' )->on( 'contas' );

        $table->integer( 'tipo_documento_id' )->unsigned()->default( 1 );
        $table->foreign( 'tipo_documento_id' )
          ->references( 'id' )->on( 'tipos_documentos' );

        $table->integer( 'intervalo_parcela' )->default( 1 );
        $table->integer( 'tipo_intervalo_id' )->default( 2 );
        $table->timestamps();

      }
    );
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop( 'formas_pagamento' );
  }

}
