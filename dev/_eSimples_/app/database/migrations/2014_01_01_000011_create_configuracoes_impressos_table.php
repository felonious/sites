<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguracoesImpressosTable
  extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(

      'configuracoes_impressos',

      function ( Blueprint $table ) {
        $table->increments( 'id' );
        $table->string( 'nome', 50 )->unique();
        $table->timestamps();
        //
        //Configuração do cabeçalho
        //Nenhuma
        //logomarca
        //cadastrada
        //Este cabeçalho é utilizado em Ordens de Serviço e Pedidos de Venda
        //
        //Configuração geral
        //Imprimir código personalizado:
        //Quando o produto tiver um código personalizado, o sistema imprimirá este
        //código nas vendas, entradas e ordens de serviço no lugar do código interno.
        //Não
        //
        //Configuração das Vendas
        //Desconto máximo na venda:	100%
        //Imprimir 2 vias?	Não
        //Imprimir assinatura?	Não
        //Imprimir resumo financeiro?	Não
        //Atualizar preço ao clonar?	Não
        //Observação padrão:
        //
        //
        //Configuração das OS (Ordens de Serviço)
        //Imprimir 2 vias?	Não
        //Imprimir assinatura?	Não
        //Imprimir resumo financeiro?	Não
        //Dias de garantia padrão:	0
        //Texto padrão para o campo
        //Observações gerais:

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
      'config_impressos'
    );
  }

}
