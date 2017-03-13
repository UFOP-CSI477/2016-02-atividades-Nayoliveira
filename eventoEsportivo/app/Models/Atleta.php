<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
    protected $table = "atletas";
    protected $fillable = ['id', 'nome', 'login', 'senha'];
    //public $timestamps = false;só se não usar timestamps na migration

}
