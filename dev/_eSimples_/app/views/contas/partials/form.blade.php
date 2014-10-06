<div class="col-md-12"></div>
<div class="col-md-6">

  <div class="form-group">
    {{ Form::text_field( 'nome', 'Apelido' ) }}
    {{ Form::errors_for( 'nome', 'Apelido', $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::text_field( 'descricao', 'Descrição' ) }}
    {{ Form::errors_for( 'descricao', 'Descrição', $errors ) }}
  </div>

</div>

<div class="col-md-6">
</div>
