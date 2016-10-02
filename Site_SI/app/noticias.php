<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticias extends Model
{
    //
    protected $table = 'noticias';
    protected $fillable = ['titulo', 'noticia', 'admin_id', 'imagens_id', 'anexo_id'];
}
