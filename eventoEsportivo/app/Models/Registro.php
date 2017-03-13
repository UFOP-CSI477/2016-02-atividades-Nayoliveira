<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{

  protected $fillable = ['data', 'pago'];

  public function registros() {
    return $this->hasMany('App\Evento');
}