<?php namespace Acme\Combos;

class Situacao
  extends \Eloquent {

  protected $table = 'situacoes';

  protected $fillable = ['nome'];

  protected $hidden = ['id'];

  protected $guarded = ['id'];

  public function GestaoTarefa()
  {

    return $this->hasMany(
      'Acme\GestaoTarefas\GestaoTarefa', 'id'
    );
  }

} 