<?php
namespace App\TemplatePattern;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\book_hall;
use App\TemplatePattern\supportReservation;
class book_Hall_class extends SupportReservation{
 
 public function book(Request $request){
      $hall = new book_hall;
      $hall -> f_name = $request -> f_name;
      $hall -> s_name = $request -> s_name;
      $hall -> email = $request -> email;
      $hall -> type = $request -> type;
      $hall -> persons_number = $request -> persons_number;
      $hall -> checkInDate = $request -> checkInDate;
      $hall -> checkInTime = $request -> checkInTime;
      $hall -> save();
  }
  public function confirm(){
      abort(redirect('done_reg_hall'));
    }
}