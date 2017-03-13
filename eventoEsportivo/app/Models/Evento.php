<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = "eventos";
    protected $fillable = ['id','nome','preco','data'];
    //public $timestamps = false;só se não usar timestamps na migration

}
