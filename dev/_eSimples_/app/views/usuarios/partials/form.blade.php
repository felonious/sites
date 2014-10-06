<div class="col-md-6">

  <div class="form-group">
    {{ Form::label_for( 'Nome Completo', 'Infrome seu nome completo.' ) }}
    {{ Form::text_field( 'name' ) }}
    {{ Form::errors_for( 'name', 'Nome', $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::label_for( 'Usuário', 'Informe o nome do seu usuário do sistema.' ) }}
    {{ Form::text_field( 'username' ) }}
    {{ Form::errors_for( 'username', 'Usuário', $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::label_for( 'Email', 'Informe seu e-mail de contato.' ) }}
    {{ Form::text_field( 'email' ) }}
    {{ Form::errors_for( 'email', 'Email' , $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::label_for( 'Senha', 'Informe a sua senha<br>(de 6 a 32 caracteres).' ) }}
    {{ Form::password_field( 'password' ) }}
    {{ Form::errors_for( 'password', 'Senha', $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::label_for( 'Confirmação da senha', 'Informe novamente a sua senha.' ) }}
    {{ Form::password_field( 'password_confirmation' ) }}
    {{ Form::errors_for( 'password_confirmation', 'Confirmação da senha', $errors ) }}
  </div>

</div>

<div class="col-md-6">
</div>
