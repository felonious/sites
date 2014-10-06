<?php namespace Acme\Combos;

class TipoIntervalo
  extends \Eloquent {

  protected $table = 'tipos_intervalos';

  protected $fillable = ['nome'];

  protected $hidden = ['id'];

  protected $guarded = ['id'];

  public function formaPagamento()
  {

    return $this->hasMany(
      'Acme\FormasPagamentos\FormaPagamento',
      'id'
    );
  }
} 