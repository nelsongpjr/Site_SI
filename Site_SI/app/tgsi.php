<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tgsi extends Model
{
    //
    protected $table = 'tgsi';
    protected $fillable = ['titulo', 'descricao', 'autor','admin_id', 'imagens_id', 'anexo_id'];
}
