<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleOrdenAlimento extends Model
{
    protected $fillable=['cantidad','porcion','estado'];
    public $timestamps = false;
}
