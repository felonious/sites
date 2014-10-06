
<div class="col-md-6">

  <div class="form-group">
    {{ Form::label_for( 'Nome', 'teste popover' ) }}
    {{ Form::text_field( 'nome' ) }}
    {{ Form::errors_for( 'nome', 'Nome', $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::label_for( 'Quantidade máxima de parcelas' ) }}
    {{ Form::number_field( 'quantidade_maxima_parcelas' ) }}
    {{ Form::errors_for( 'quantidade_maxima_parcelas', 'Quantidade máxima de parcelas' , $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::label_for( 'Quantidade de parcelas sem juros' ) }}
    {{ Form::number_field( 'quantidade_parcelas_sem_juros' ) }}
    {{ Form::errors_for( 'quantidade_parcelas_sem_juros', 'Quantidade de parcelas sem juros' , $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::label_for( 'Percentual de juros' ) }}
    {{ Form::percent_field( 'percentual_juros' ) }}
    {{ Form::errors_for( 'percentual_juros', 'Percentual de juros' , $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::label_for( 'Valor fixo da taxa' ) }}
    {{ Form::money_field( 'valor_fixo_taxa') }}
    {{ Form::errors_for( 'valor_fixo_taxa', 'Valor fixo da taxa' , $errors ) }}
  </div>

  <div class="form-group">
    {{ Form::label_for( 'Percentual de desconto a vista' ) }}
    {{ Form::percent_field( 'percentual_desconto_a_vista' ) }}
    {{ Form::errors_for( 'percentual_desconto_a_vista', 'Percentual de desconto a vista' , $errors ) }}
  </div>
</div>

<div class="col-md-6">

  <br>

  <div class="panel panel-default">
    <div class="panel-heading align-center">
      Preenchimento automático
    </div>
    <div class="panel-body">
      <small>Valores que serão preenchidos automaticamente ao selecionar esta forma de pagamento</small>

  <br>
  <div style="height: 18px"></div>

    <div class="form-group">
      {{ Form::label_for( 'Conta' ) }}
      {{ Form::select_field( 'conta_id', $contas , Input::old('conta_id') ) }}
      {{ Form::errors_for( 'conta_id', 'Conta' , $errors ) }}
    </div>

    <div class="form-group">
      {{ Form::label_for( 'Tipo de documento') }}
      {{ Form::select_field( 'tipo_documento_id', $tiposDocumentos , Input::old('custo_utilizacao_id') ) }}
      {{ Form::errors_for( 'tipo_documento_id', 'Tipo de documento' , $errors ) }}
    </div>

    <div class="form-group">
      {{ Form::label_for( 'Intervalo entre parcelas') }}
        <div class="table-responsive">
          <table class="cab">
          <tr>
            <td class="th20pct">
              {{ Form::number_field( 'intervalo_parcela') }}
            </td>
            <td>
              {{ Form::select_field( 'tipo_intervalo_id', $tiposIntervalos , Input::old('tipo_intervalo_id') ) }}
            </td>
          </tr>
        </table>
        </div>
      {{ Form::errors_for( 'intervalo_parcela', 'Intervalo entre parcelas' , $errors ) }}
    </div>
  <br>
    </div>
  </div>




</div>

