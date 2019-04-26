<?php

namespace App\factoryPattern;
use App\factoryPattern\factory_interface;

class tax_12_precent implements factory_interface{
	
  public function __construct($price){   // construct method
   $this->price = $price;	  
  }	

  public function payment($price){
      return $price * 0.12;
  }

}