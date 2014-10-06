
<div class="col-md-6">
  <div class="form-group">
    {{ Form::label_for( 'Nome', 'Infrome o nome do tipo de documento.' ) }}
    {{ Form::text_field( 'nome' ) }}
    {{ Form::errors_for( 'nome', 'Nome', $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::label_for( 'Custo de utilização', 'Selecione o cálculo de como sera incluso o custo pela utilizaçao deste tipo de documento.' ) }}
    {{ Form::select_field('calculo_custo_id', $calculoCusto , Input::old('custo_utilizacao_id') ) }}
    {{ Form::errors_for( 'calculo_custo_id', 'Custo de utilização' , $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::label_for( 'Valor do custo', 'Infrome o valor do custo para a utilização deste tipos de documento.' ) }}
    {{ Form::money_field( 'valor_custo' ) }}
    {{ Form::errors_for( 'valor_custo', 'Valor do custo' , $errors ) }}
  </div>
</div>

<div class="col-md-6">
</div>

