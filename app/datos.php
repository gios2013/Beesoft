<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datos extends Model
{
    protected $table = 'datos';
    
    protected $fillable = ['nombre', 'correo', 'acerca_de_mi', 'img'];
}
