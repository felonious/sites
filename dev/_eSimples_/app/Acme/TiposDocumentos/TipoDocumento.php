<?php namespace Acme\TiposDocumentos;


class TipoDocumento
  extends \Eloquent
{
  protected $table = 'tipos_documentos';

  protected $fillable
    = [
      'nome',
      'calculo_custo_id',
      'valor_custo'
    ];

  protected $hidden = ['id'];

  protected $guarded = ['id'];

  public function formasPagamentos()
  {
    return $this->hasMany(
      'Acme\FormasPagamentos\FormaPagamento'
    );
  }

  public function calculosCusto()
  {
    return $this->belongsTo(
      'Acme\Combos\CalculoCusto', 'calculo_custo_id'
    );
  }

  public function setValorCustoAttribute( $value )
  {
    $this->attributes['valor_custo']
      = str_replace(
      ',',
      '.',
      str_replace( '.', '', $value )
    );
  }

  public function getValorCustoAttribute()
  {
    setlocale( LC_MONETARY, "pt_BR" );

    return money_format( '%!i', $this->attributes['valor_custo'] );
  }
}
