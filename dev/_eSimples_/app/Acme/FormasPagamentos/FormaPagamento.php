<?php namespace Acme\FormasPagamentos;

class FormaPagamento
  extends \Eloquent {

  protected $table = 'formas_pagamento';

  protected $fillable
    = [
      'nome',
      'quantidade_maxima_parcelas',
      'quantidade_parcelas_sem_juros',
      'percentual_juros',
      'valor_fixo_taxa',
      'percentual_desconto_a_vista',
      'conta_id',
      'tipo_documento_id',
      'intervalo_parcela',
      'tipo_intervalo_id'
    ];

  protected $hidden = ['id'];

  protected $guarded = ['id'];

  public function contas()
  {
    return $this->belongsTo(
      'Acme\Contas\Conta', 'conta_id'
    );
  }

  public function tiposDocumentos()
  {
    return $this->belongsTo(
      'Acme\TiposDocumentos\TipoDocumento', 'tipo_documento_id'
    );
  }

  public function tipoIntervalos()
  {
    return $this->belongsTo(
      'Acme\TiposIntervalos\TipoIntervalo', 'tipo_intervalo_id'
    );
  }


  public function setValorTaxaFixaAttribute( $value )
  {
    $this->attributes['valor_taxa_fixa']
      = str_replace( ',', '.', str_replace( '.', '', $value ) );
  }

  public function getValorTaxaFixaAttribute()
  {
    setlocale( LC_MONETARY, "pt_BR" );

    return money_format( '%!i', $this->attributes['valor_taxa_fixa'] );
  }

  public function setPercentualJurosAttribute( $value )
  {
    $this->attributes['percentual_juros'] = str_replace( ',', '.', $value );
  }

  public function getPercentualJurosAttribute()
  {
    setlocale( LC_MONETARY, "pt_BR" );

    return money_format( '%!i', $this->attributes['percentual_juros'] ) + '%';
  }

  public function setQuantidadeMaximaParcelasAttribute( $value )
  {
    $this->attributes['quantidade_maxima_parcelas']
      = str_replace( '.', '', $value );
  }

  public function getQuantidadeMaximaParcelasAttribute()
  {
    return str_replace(
      ',', '.',
      number_format( $this->attributes['quantidade_maxima_parcelas'] )
    );
  }

  public function setQuantidadeParcelasSemJurosAttribute( $value )
  {
    $this->attributes['quantidade_parcelas_sem_juros']
      = str_replace( '.', '', $value );
  }

  public function getQuantidadeParcelasSemJurosAttribute()
  {
    return str_replace(
      ',', '.',
      number_format( $this->attributes['quantidade_parcelas_sem_juros'] )
    );
  }

}