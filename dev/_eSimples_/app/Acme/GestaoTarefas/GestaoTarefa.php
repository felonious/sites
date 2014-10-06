<?php namespace Acme\GestaoTarefas;

use Carbon\Carbon;

class GestaoTarefa
  extends \Eloquent {

  protected $table = 'gestao_tarefas';

  protected $fillable
    = [
      'titulo',
      'descricao',
      'user_id',
      'prioridade_id',
      'situacao_id',
      'lembrar_em',
      'palavra_chave'
    ];

  protected $hidden = ['id'];

  protected $guarded = ['id'];

  public function usuario()
  {
    return $this->belongsTo(
      'Acme\Usuarios\Usuario', 'user_id'
    );
  }

  public function prioridade()
  {
    return $this->belongsTo(
      'Acme\Combos\Prioridade', 'prioridade_id'
    );
  }

  public function situacao()
  {
    return $this->belongsTo(
      'Acme\Combos\Situacao', 'situacao_id'
    );
  }

  public function setlembrarEmAttribute( $value )
  {
    if ( $value === '' ) {
      $this->attributes['lembrar_em'] = '0000-00-00 00:00:00';

    } else {
      $this->attributes['lembrar_em']
        = Carbon::parse(
        str_replace( '/', '-', $value )
      )->format( 'Y-m-d H:i:s' );

    }
  }

  public function getlembrarEmAttribute()
  {
    if ( $this->attributes['lembrar_em'] === '0000-00-00 00:00:00' ) {
      return $this->attributes['lembrar_em'] = '';

    } else {
      return Carbon::parse(
        $this->attributes['lembrar_em']
      )->format( 'd/m/Y H:i:s' );

    }
  }


  public function getCreatedAtAttribute()
  {
    return Carbon::parse(
      $this->attributes['created_at']
    )->format( 'Y/m/d H:i:s' );
  }

}