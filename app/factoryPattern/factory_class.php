<?php

namespace App\factoryPattern;
use App\factoryPattern\factory_interface;
use Illuminate\Database\Eloquent\Model;


class factory_class {

  private $visaNumber;
  private $price;	
  
  public function __construct(factory_interface $tax_amount, $price){   // construct method
   $this->tax_amount = $tax_amount;
   $this->price = $price;	  
  }

  public function payment(){
      $amount = $this->tax_amount->payment($this->price);
	  return $amount;
  }

}