<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book_hall extends Model
{
    public $table = "book_hall";
    protected $fillable = ['f_name', 's_name', 'email'	,'type' ,	'persons_number', 'checkInDate' ,	'checkInTime'];
}
