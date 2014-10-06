<?php namespace Acme\Combos;

class AtividadePrincipal
  extends \Eloquent {

  protected $table = 'atividades_principais';

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