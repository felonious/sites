<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstruturaDreTable
  extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(

      'estrutura_dre',

      function ( Blueprint $table ) {
        $table->increments( 'id' );

        $table->integer( 'grupo_dre_id' )->unsigned();
        $table->foreign( 'grupo_dre_id' )
          ->references( 'id' )->on( 'grupos_dre' );

        $table->integer( 'operacao_id' )->unsigned();
        $table->foreign( 'operacao_id' )
          ->references( 'id' )->on( 'operacoes' );

        $table->integer( 'ordem' );
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
    Schema::drop( 'estrutura_dre' );
  }

}
