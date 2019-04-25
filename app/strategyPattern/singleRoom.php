<?php

namespace App\strategyPattern;
use App\strategyPattern\roomInterface;

class singleRoom implements roomInterface{

  public function booking(){

    $fillabel = ['Fname', 'Lname', 'email', 'roomType', 'checkInDate', 'checkOutDate', 'visaNO'];
    return $fillable;
  }

}
