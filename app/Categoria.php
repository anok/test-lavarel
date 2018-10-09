<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
	use SoftDeletes;
    protected $fillable = ['nome'];
    protected $dates = ['deleted_at'];
    //protected $dateFormat = 'U';
}