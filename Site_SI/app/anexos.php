<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anexos extends Model
{
    //
    protected $table = 'anexos';
    protected $fillable = ['caminho', 'tipo'];
}
