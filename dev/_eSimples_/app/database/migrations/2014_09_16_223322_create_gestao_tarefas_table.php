<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestaoTarefasTable
  extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(

      'gestao_tarefas',

      function ( Blueprint $table ) {
        $table->increments( 'id' );
        $table->string( 'titulo', 255 );
        $table->text( 'descricao' );

        $table->integer( 'user_id' )->unsigned();
        $table->foreign( 'user_id' )
          ->references( 'id' )->on( 'users' );

        $table->integer( 'prioridade_id' )->unsigned()->default( 2 );
        $table->foreign( 'prioridade_id' )
          ->references( 'id' )->on( 'prioridades' );

        $table->integer( 'situacao_id' )->unsigned()->default( 1 );
        $table->foreign( 'situacao_id' )
          ->references( 'id' )->on( 'situacoes' );

        $table->dateTime( 'lembrar_em' )->default('0000-00-00 00:00:00');
        $table->string( 'palavra_chave', 255 );

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
    Schema::drop( 'gestao_tarefas' );
  }

}
