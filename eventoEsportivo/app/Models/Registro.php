<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Registro extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'atleta_id', 'evento_id', 'data', 'pago'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
    
    public function atleta(){
        return $this->belongsTo('App\Models\Atleta');
    }
    public function evento(){
        return $this->belongsTo('App\Models\Evento');
    }
}