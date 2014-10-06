
<div class="col-md-6">
  <div class="form-group">
    {{ Form::label_for( 'Classificação', 'Infrome o código de classificação desta conta.' ) }}
    {{ Form::text_field( 'classificacao' ) }}
    {{ Form::errors_for( 'classificacao', 'Classificação', $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::label_for( 'Descrição', 'Infrome a descrição desta conta.' ) }}
    {{ Form::money_field( 'descricao' ) }}
    {{ Form::errors_for( 'descricao', 'Descrição' , $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::label_for( 'Grupo DRE', 'Selecione o grupo do DRE que na estrutura do DRE tem a operação Soma.' ) }}
    {{ Form::select_field('grupo_dre_id', $gruposDRE , Input::old('grupo_dre_id') ) }}
    {{ Form::errors_for( 'grupo_dre_id', 'Grupo DRE' , $errors ) }}
  </div>
</div>

<div class="col-md-6">
</div>

