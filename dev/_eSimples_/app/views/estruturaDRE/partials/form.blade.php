
<div class="col-md-6">
  <div class="form-group">
    {{ Form::label_for( 'Grupo do DRE', 'Selecione o grupo do DRE.' ) }}
    {{ Form::select_field('grupo_dre_id', $grupoDRE , Input::old('grupo_dre_id') ) }}
    {{ Form::errors_for( 'grupo_dre_id', 'Grupo do DRE', $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::label_for( 'Operação', 'Selecione a operação a ser realizada com este grupo do DRE.' ) }}
    {{ Form::select_field('operacao_id', $operacoes , Input::old('custo_utilizacao_id') ) }}
    {{ Form::errors_for( 'operacao_id', 'Operação' , $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::label_for( 'Ordem', 'Infrome informe a ordem do grupo no DRE.' ) }}
    {{ Form::number_field( 'ordem' ) }}
    {{ Form::errors_for( 'ordem', 'Ordem' , $errors ) }}
  </div>
</div>

<div class="col-md-6">
</div>

