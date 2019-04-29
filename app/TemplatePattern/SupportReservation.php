<?php

namespace App\TemplatePattern;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

abstract class SupportReservation
{
   // Force Extending class to define this method
   abstract function book(Request $request);
   abstract function confirm();

   //template method
   public final function reserve(Request $request){
      $this->book($request);
      $this->confirm();
   }
}