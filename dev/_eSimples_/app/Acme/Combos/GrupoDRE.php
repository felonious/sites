<?php namespace Acme\Combos;

class GrupoDRE
  extends \Eloquent {

  protected $table = 'grupos_dre';

  protected $fillable = ['nome'];

  protected $hidden = ['id'];

  protected $guarded = ['id'];

  public function EstruturaDRE()
  {

    return $this->hasMany(
      'Acme\EstruturaDRE\EstruturaDRE', 'id'
    );
  }

  public function planoConta()
  {

    return $this->hasMany(
      'Acme\PlanoContas\PlanoConta', 'id'
    );
  }
} 