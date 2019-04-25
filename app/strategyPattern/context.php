<?php

namespace App\strategyPattern;
use App\strategyPattern\roomInterface;
use Illuminate\Database\Eloquent\Model;


class Context extends Model{

  private $roomType;

  public function __construct(roomInterface $roomType){   // construct method
    $this->roomType = $roomType;
  }

  public function makeBookingRoom(){
      $filbooking = $this->roomType->booking();
  }



}
