<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peoples extends Model
{
  protected $fillable = ['first_name', 'last_name', 'email'];
    //cuando larabel no pluralisa
    //protected $table= 'nombre_de_la_base_de_datos';
}
