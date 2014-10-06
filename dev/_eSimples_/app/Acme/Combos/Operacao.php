<?php namespace Acme\Combos;

class Operacao
  extends \Eloquent {

  protected $table = 'operacoes';

  protected $fillable = ['nome'];

  protected $hidden = ['id'];

  protected $guarded = ['id'];

  public function EstruturaDRE()
  {

    return $this->hasMany(
      'Acme\EstruturaDRE\EstruturaDRE', 'id'
    );
  }

} 