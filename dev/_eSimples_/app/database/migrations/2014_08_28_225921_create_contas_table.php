<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContasTable
  extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(

      'contas',

      function ( Blueprint $table ) {
        $table->increments( 'id' );
        $table->string( 'nome', 100 )->unique();
        $table->string( 'descricao', 255 )->nullable();
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
    Schema::drop( 'contas' );
  }

}
