<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use SoftDeletes;
    protected $fillable = ['nome', 'valor'];
    protected $dates = ['deleted_at'];
    
    public function categorias()
    {
    	return $this->belongsToMany('App\Categoria');
    }
    //protected $dateFormat = 'U';
}
