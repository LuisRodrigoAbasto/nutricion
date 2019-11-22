<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    protected $fillable=['nombre','calorias','grasa','proteina','carbohidrato'];
    public $timestamps = false;
}
