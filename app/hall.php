<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hall extends Model
{
    protected $fillable = [ 'type', 'price', 'persons_number', 'image'];
}
