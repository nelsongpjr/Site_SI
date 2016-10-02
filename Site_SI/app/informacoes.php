<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class informacoes extends Model
{
    protected $table = 'informacoes';
    protected $fillable = ['titulo', 'informacao', 'admin_id', 'imagens_id', 'anexo_id'];
}
