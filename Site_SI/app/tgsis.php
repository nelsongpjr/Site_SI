<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tgsis extends Model
{
    //
    protected $table = 'tgsis';
    protected $fillable = ['titulo', 'descricao', 'autor','admin_id', 'imagens_id', 'anexo_id'];
}
