<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguracoesProdutosTable
  extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(

      'configuracoes_produtos',

      function ( Blueprint $table ) {
        $table->increments( 'id' );
        $table->string( 'nome', 50 )->unique();
        $table->timestamps();

        //
        //Manter o preço de venda cadastrado no produto:	Não
        //
        //Resumo da tributação
        //ICMS: undefined Origem: 0 - Nacional, exceto as indicadas nos códigos de 3 a 5
        //IPI: undefined Alíquota: 0,00%
        //PIS: undefined Alíquota: 0,00%
        //COFINS: undefined Alíquota: 0,00%

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
    Schema::drop(
      'configuracoes_produtos'
    );
  }

}
