<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class egressos extends Model
{
    //
    protected $table = 'egressos';
    protected $fillable = ['nome', 'descricao', 'admin_id', 'imagens_id', 'anexo_id'];
}
