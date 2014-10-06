<?php


use Acme\PlanoContas\PlanoConta;

class PlanoContasTableSeeder
  extends Seeder {

  public function run()
  {
    DB::table( 'plano_contas' )->delete();

    //PlanoConta::create(
    //  [
    //    'id'               => 1,
    //    'classificacao'    => '',
    //    'descricao'        => '',
    //    'estrutura_dre_id' => 1
    //  ]
    //);

    PlanoConta::create(
      [
        'id'            => 1,
        'classificacao' => '3',
        'descricao'     => 'DESPESAS'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 2,
        'classificacao' => '3.1',
        'descricao'     => 'Custos dos Produtos Vendidos'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 3,
        'classificacao' => '3.1.1',
        'descricao'     => 'Custos dos Materiais'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 4,
        'classificacao' => '3.1.1.01',
        'descricao'     => 'Custos dos Materiais (indústria)'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 5,
        'classificacao' => '3.2',
        'descricao'     => 'Custo das Mercadorias Vendidas'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 6,
        'classificacao' => '3.2.1',
        'descricao'     => 'Custo das Mercadorias'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 7,
        'classificacao' => '3.2.1.01',
        'descricao'     => 'Custo das Mercadorias Vendidas'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 8,
        'classificacao' => '3.3',
        'descricao'     => 'Custo dos Serviços Prestados'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 9,
        'classificacao' => '3.3.1',
        'descricao'     => 'Custo dos Serviços'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 10,
        'classificacao' => '3.3.1.01',
        'descricao'     => 'Materiais Aplicados'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 11,
        'classificacao' => '3.3.1.02',
        'descricao'     => 'Mão-de-Obra'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 12,
        'classificacao' => '3.3.1.03',
        'descricao'     => 'Encargos Sociais'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 13,
        'classificacao' => '3.4',
        'descricao'     => 'Despesas Operacionais'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 14,
        'classificacao' => '3.4.1',
        'descricao'     => 'Despesas Gerais'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 15,
        'classificacao' => '3.4.1.01',
        'descricao'     => 'Salários'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 16,
        'classificacao' => '3.4.1.02',
        'descricao'     => 'Pro-labores'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 17,
        'classificacao' => '3.4.1.03',
        'descricao'     => 'INSS'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 18,
        'classificacao' => '3.4.1.04',
        'descricao'     => 'FGTS'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 19,
        'classificacao' => '3.4.1.05',
        'descricao'     => 'Aluguéis'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 20,
        'classificacao' => '3.4.1.06',
        'descricao'     => 'Escritório'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 21,
        'classificacao' => '3.4.1.07',
        'descricao'     => 'Seguros'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 22,
        'classificacao' => '3.4.1.08',
        'descricao'     => 'Postagens'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 23,
        'classificacao' => '3.4.1.09',
        'descricao'     => 'Água e esgoto'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 24,
        'classificacao' => '3.4.1.10',
        'descricao'     => 'Energia elétrica',
      ]
    );

    PlanoConta::create(
      [
        'id'            => 25,
        'classificacao' => '3.4.1.11',
        'descricao'     => 'Telefone'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 26,
        'classificacao' => '3.4.1.12',
        'descricao'     => 'Internet'
      ]
    );

    PlanoConta::create(
      [

        'id'            => 27,
        'classificacao' => '3.4.1.13',
        'descricao'     => 'Vale-transporte'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 28,
        'classificacao' => '3.4.1.14',
        'descricao'     => 'Fretes'
      ]
    );
    PlanoConta::create(
      [
        'id'            => 29,
        'classificacao' => '3.4.1.15',
        'descricao'     => 'Despesas diversas'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 30,
        'classificacao' => '3.5',
        'descricao'     => 'Despesas Financeiras',
      ]
    );

    PlanoConta::create(
      [
        'id'            => 31,
        'classificacao' => '3.5.1',
        'descricao'     => 'Desp. Financeiras',
      ]
    );

    PlanoConta::create(
      [
        'id'            => 32,
        'classificacao' => '3.5.1.01',
        'descricao'     => 'Juros e Desconto'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 33,
        'classificacao' => '3.5.1.02',
        'descricao'     => 'Multas'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 34,
        'classificacao' => '3.5.1.03',
        'descricao'     => 'Desp. bancárias'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 35,
        'classificacao' => '3.6',
        'descricao'     => 'Despesas Tributárias'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 36,
        'classificacao' => '3.6.1',
        'descricao'     => 'Tributos'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 37,
        'classificacao' => '3.6.1.01',
        'descricao'     => 'ICMS'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 38,
        'classificacao' => '3.6.1.02',
        'descricao'     => 'DAS'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 39,
        'classificacao' => '3.6.1.03',
        'descricao'     => 'ISS'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 40,
        'classificacao' => '3.6.1.04',
        'descricao'     => 'PIS COFINS'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 41,
        'classificacao' => '3.6.1.05',
        'descricao'     => 'CSLL'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 42,
        'classificacao' => '3.6.1.06',
        'descricao'     => 'IRPJ'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 43,
        'classificacao' => '3.7',
        'descricao'     => 'Perdas de Capital'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 44,
        'classificacao' => '3.7.1',
        'descricao'     => 'Baixa de Bens do Ativo Não Circulante'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 45,
        'classificacao' => '3.7.1.01',
        'descricao'     => 'Alienação de Investimentos'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 46,
        'classificacao' => '3.7.1.02',
        'descricao'     => 'Alienação do Imobilizado'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 47,
        'classificacao' => '4',
        'descricao'     => 'RECEITAS'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 48,
        'classificacao' => '4.1',
        'descricao'     => 'Receita Líquida'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 49,
        'classificacao' => '4.1.1',
        'descricao'     => 'Receita Bruta de Vendas'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 50,
        'classificacao' => '4.1.1.01',
        'descricao'     => 'De Mercadorias (comércio)'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 51,
        'classificacao' => '4.1.1.02',
        'descricao'     => 'De Produtos (indústria)'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 52,
        'classificacao' => '4.1.1.03',
        'descricao'     => 'De Serviços Prestados'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 53,
        'classificacao' => '4.1.2',
        'descricao'     => 'Deduções da Receita Bruta'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 54,
        'classificacao' => '4.1.2.01',
        'descricao'     => 'Devoluções'
      ]
    );

    PlanoConta::create(
      [
        'id'            => 55,
        'classificacao' => '4.1.2.02',
        'descricao'     => 'Serviços Cancelados'
      ]
    );
    PlanoConta::create(
      [
        'id'            => 56,
        'classificacao' => '4.2',
        'descricao'     => 'Outras Receitas Operacionais',
      ]
    );

    PlanoConta::create(
      [
        'id'            => 57,
        'classificacao' => '4.2.1',
        'descricao'     => 'Vendas de Ativos Não Circulantes',
      ]
    );
    PlanoConta::create(
      [
        'id'            => 58,
        'classificacao' => '4.2.1.01',
        'descricao'     => 'Receitas de Alienação de Investimentos',
      ]
    );

    PlanoConta::create(
      [
        'id'            => 59,
        'classificacao' => '4.2.1.02',
        'descricao'     => 'Receitas de Alienação do Imobilizado'
      ]
    );

  }
}