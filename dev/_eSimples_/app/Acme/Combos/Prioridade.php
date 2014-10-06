<?php namespace Acme\Combos;

class Prioridade
  extends \Eloquent {

  protected $table = 'prioridades';

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