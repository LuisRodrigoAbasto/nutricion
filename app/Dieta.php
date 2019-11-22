<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
    protected $fillable=['id_usuario','fecha_inicio','fecha_final','meta','peso','tiempo','tipo','estado'];
    public $timestamps = false;
}
