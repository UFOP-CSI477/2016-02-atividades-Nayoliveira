<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    protected $table = "shopping";
    protected $fillable = ('id', 'quantidade', 'data', 'user_id', 'product_id');
    //public $timestamps = false;só se não usar timestamps na migration
}
