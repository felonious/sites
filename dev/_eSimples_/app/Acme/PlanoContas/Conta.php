<?php namespace Acme\PlanoContas;

class Conta
  extends \Eloquent {

  protected $table = 'estrutura_dre';

  protected $fillable
    = [
      'classificacao',
      'descricao',
      'grupo_dre_id'
    ];

  protected $hidden = ['id'];

  protected $guarded = ['id'];

  public function grupoDRE()
  {
    return $this->belongsTo(
      'Acme\Combos\GrupoDRE', 'grupo_dre_id'
    );
  }

}
