<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit_cards extends Model
{
    protected $fillable = ['type', 'card_holder', 'card_number','cvv2','month','year'];
}
