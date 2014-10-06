<?php namespace Acme\Contas;

class Conta
  extends \Eloquent
{
  protected $table = 'contas';

  protected $fillable
    = [
      'nome',
      'descricao'
    ];

  protected $hidden = ['id'];

  protected $guarded = ['id'];

  public function formasPagamentos()
  {
    return $this->hasMany(
      'Acme\FormasPagamentos\FormaPagamento'
    );
  }
}
