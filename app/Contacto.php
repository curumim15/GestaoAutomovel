<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Contacto extends Model
{
    protected $fillable = ['nome', 'email', 'telefone', 'mensagem'];
}
