<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanoContasTable
  extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(

      'plano_contas',

      function ( Blueprint $table ) {
        $table->increments( 'id' );
        $table->string( 'classificacao', 50 );
        $table->string( 'descricao', 255 );

        $table->integer( 'grupo_dre_id' )->unsigned();
        $table->foreign( 'grupo_dre_id' )
          ->references( 'id' )->on( 'grupos_dre' );

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
    Schema::drop( 'plano_contas' );
  }

}
