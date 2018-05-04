<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    protected $fillable = ['street', 'city', 'state','zip','country','phone'];
}
