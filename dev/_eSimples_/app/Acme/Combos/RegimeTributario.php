<?php namespace Acme\Combos;

class RegimeTributario
  extends \Eloquent {

  protected $table = 'regimes_tributario';

  protected $fillable = ['nome'];

  protected $hidden = ['id'];

  protected $guarded = ['id'];

  public function empresa()
  {

    return $this->hasMany(
      'Acme\Empresas\Empresa', 'id'
    );
  }

} 