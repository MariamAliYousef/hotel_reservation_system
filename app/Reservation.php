<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function bookingList(){
      return $this->hasMany(User::class);
    }
}
