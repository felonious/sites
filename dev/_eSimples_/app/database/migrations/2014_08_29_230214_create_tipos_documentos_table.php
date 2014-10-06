<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposDocumentosTable
  extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(

      'tipos_documentos',

      function ( Blueprint $table ) {
        $table->increments( 'id' );
        $table->string( 'nome', 100 )->unique();

        $table->integer( 'calculo_custo_id' )->default( 1 )->unsigned();
        $table->foreign( 'calculo_custo_id' )
          ->references( 'id' )->on( 'calculos_custo' );

        $table->decimal( 'valor_custo', 12, 2 )->default( '0.00' );
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
    Schema::drop( 'tipos_documentos' );
  }

}
