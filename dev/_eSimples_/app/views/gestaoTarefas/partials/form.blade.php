
<div class="col-md-6">
  <div class="form-group">
    {{ Form::label_for( 'Título', 'Informe o título da tarefa.') }}
    {{ Form::text_field( 'titulo') }}
    {{ Form::errors_for( 'titulo', 'Título', $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::label_for( 'Descrição', 'Informe a descrição da tarefa.' ) }}
    {{ Form::textarea_field( 'descricao') }}
    {{ Form::errors_for( 'descricao', 'Descrição', $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::label_for( 'Responsavel/Destnatário', 'Selecione o Responsavel ou o Destnatário desta tarefa.' ) }}
    {{ Form::select_field('user_id', $usuarios , Input::old('user_id') ) }}
    {{ Form::errors_for( 'user_id', 'Responsavel/Destnatário' , $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::label_for( 'Prioridade', 'Selecione a prioridade de execução desta tarefa.' ) }}
    {{ Form::select_field('prioridade_id', $prioridades , Input::old('prioridade_id') ) }}
    {{ Form::errors_for( 'prioridade_id', 'Prioridade' , $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::label_for( 'Situação', 'Selecione a situação referente a execução desta tarefa.' ) }}
    {{ Form::select_field('situacao_id', $situacoes , Input::old('situacao_id') ) }}
    {{ Form::errors_for( 'situacao_id', 'Situação' , $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::label_for( 'Lembrar em', 'Informe a data que você sera lebrado desta tarefa, se necessário.') }}
    {{ Form::datetime_field( 'lembrar_em') }}
    {{ Form::errors_for( 'lembrar_em', 'Lembrar em', $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::label_for( 'Palavra chave', 'Informe o título da tarefa.') }}
    {{ Form::text_field( 'palavra_chave') }}
    {{ Form::errors_for( 'palavra_chave', 'Palavra chave', $errors ) }}
  </div>

</div>

<div class="col-md-6">
</div>

