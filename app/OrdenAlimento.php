<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenAlimento extends Model
{
    protected $fillable=['fecha','tipo'];
    public $timestamps = false;
}