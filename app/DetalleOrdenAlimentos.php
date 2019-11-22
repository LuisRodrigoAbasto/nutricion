<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleOrdenAlimentos extends Model
{
    protected $fillable=['cantida','porcion'];
    public $timestamps = false;
}
