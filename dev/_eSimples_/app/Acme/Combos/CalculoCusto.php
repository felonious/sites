<?php namespace Acme\Combos;

class CalculoCusto
  extends \Eloquent {

  protected $table = 'calculos_custo';

  protected $fillable = ['nome'];

  protected $hidden = ['id'];

  protected $guarded = ['id'];

  public function tiposDocumentos()
  {
    return $this->hasMany(
      'Acme\TiposDocumentos\TipoDocumento', 'id'
    );
  }
}
