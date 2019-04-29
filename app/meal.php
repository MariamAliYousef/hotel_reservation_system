<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class meal extends Model
{
    protected $fillable = [ 'title', 'disc', 'price', 'image'];
}
