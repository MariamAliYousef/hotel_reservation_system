<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class credit_card extends Model
{
    protected $fillable = [ 'card_number', 'amount_of_money'];
}
