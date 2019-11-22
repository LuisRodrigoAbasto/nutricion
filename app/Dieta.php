<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
    protected $fillable=['fecha_inicio','fecha_final','meta','peso','tiempo','tipo'];
    public $timestamps = false;
}
