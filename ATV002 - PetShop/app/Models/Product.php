<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = ('id', 'nome', 'preco', 'imagem');
    //public $timestamps = false;só se não usar timestamps na migration
}
