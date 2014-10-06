<?php namespace Acme\EstruturaDRE;

class EstruturaDRE
  extends \Eloquent {

  protected $table = 'estrutura_dre';

  protected $fillable
    = [
      'grupo_dre_id',
      'operacao_id',
      'ordem'
    ];

  protected $hidden = ['id'];

  protected $guarded = ['id'];

  public function planoConta()
  {
    return $this->hasMany(
      'Acme\PlanoConas\PlanoConta'
    );
  }

  public function grupoDRE()
  {
    return $this->belongsTo(
      'Acme\Combos\GrupoDRE', 'grupo_dre_id'
    );
  }

  public function operacoes()
  {
    return $this->belongsTo(
      'Acme\Combos\Operacao', 'operacao_id'
    );
  }

}
