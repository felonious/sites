<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegimesTributarioTable
  extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(

      'regimes_tributario',

      function ( Blueprint $table ) {
        $table->increments( 'id' );
        $table->string( 'nome', 50 )->unique();
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
    Schema::drop( 'regimes_tributario' );
  }

}
