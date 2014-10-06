<?php

class DatabaseSeeder
    extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Eloquent::unguard();
    
    $this->call( 'UserTableSeeder' );
    $this->call( 'FakerUsersTableSeeder' );
    $this->call( 'CalculosCustoTableSeeder' );
    $this->call( 'TiposIntervalosTableSeeder' );
    $this->call( 'GruposDRETableSeeder' );
    $this->call( 'OperacoesTableSeeder' );
    $this->call( 'PrioridadesTableSeeder' );
    $this->call( 'SituacoesTableSeeder' );
    $this->call( 'AtividadesTableSeeder' );
    $this->call( 'RegimesTributarioTableSeeder' );



    $this->call( 'ContasTableSeeder' );
    $this->call( 'TiposDocumentosTableSeeder' );
    $this->call( 'FormasPagamentosTableSeeder' );
    $this->call( 'EstruturaDRETableSeeder' );


  }

}
