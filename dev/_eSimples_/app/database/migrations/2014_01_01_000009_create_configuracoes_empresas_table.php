<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguracoesEmpresasTable
  extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(

      'configuracoes_empresas',

      function ( Blueprint $table ) {
        $table->increments( 'id' );
        $table->string( 'cpf_cnpj', 20 );
        $table->string( 'nome_razao_social', 200 );
        $table->string( 'nome_fantasia', 200 );
        $table->string( 'email', 200 );
        $table->string( 'telefones', 100 );
        $table->string( 'endereco', 150 );
        $table->string( 'bairro', 150 );
        $table->string( 'cep', 9 );
        $table->string( 'cidade', 150 );
        $table->string( 'uf', 2 );

        $table->integer( 'atividade_principal_id')->unsigned();
        $table->foreign( 'atividade_principal_id' )
          ->references( 'id' )->on( 'atividades_principais' );

        $table->integer( 'regime_tributario_id')->unsigned();
        $table->foreign( 'regime_tributario_id' )
          ->references( 'id' )->on( 'regimes_tributario' );

        $table->decimal( 'aliquota_simples', 3, 2 );

        $table->timestamps();

        //
        //Dados da empresa
        //CNPJ ou CPF:
        //Razão Social ou Nome:	Sergio Luiz Dobri
        //Nome Fantasia:	dobri corp.
        //E-mails:	sldobri@live.com
        //Telefones:
        //3186941951
        //Endereço:	R. Dom Pedro {{, 1662
        //Bairro / CEP:	centro / 15370000
        //Cidade / UF:	Pereira Barreto / SP
        //
        //
        //Dados fiscais da empresa
        //Principal atividade da empresa:	Comércio
        //Regime tributário:	Simples Nacional
        //Alíquota do Simples	4,00%

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
      'config_empresas'
    );
  }

}
