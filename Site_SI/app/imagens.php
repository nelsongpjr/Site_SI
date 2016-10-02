<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class imagens extends Model
{
    //
    protected $table = 'imagens';
    protected $fillable = ['caminho', 'tipo', 'desponivel_galeria'];
}
