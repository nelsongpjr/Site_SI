<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class docentes extends Model
{
    //
    protected $table = 'docentes';
    protected $fillable = ['nome', 'descricao', 'admin_id', 'imagens_id'];
}
