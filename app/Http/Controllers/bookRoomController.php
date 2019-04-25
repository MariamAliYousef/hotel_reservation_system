<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\strategyPattern\singleRoom;
use App\strategyPattern\doubleRoom;
use App\strategyPattern\tripleRoom;
use App\strategyPattern\context;
use DB;

class bookRoomController extends Controller{


  public function show(){
    $context = DB::table('Contexts')->get();
    return view('/regist_room');
  }

  public function storeRoomBooking(Request $request)
  {
    $context;   //Context => strategy type
    $single = new singleRoom;
    $double = new singleRoom;
    $triple = new singleRoom;

    if($request->roomType == 'single'){
      $context = new Context($single);
    }elseif ($request->roomType == 'double') {
      $context = new Context($double);
    }
    elseif ($request->roomType == 'triple') {
      $context = new Context($triple);
    }
    else{
      $context = null;
      return redirect('ErrorPage');
    }

    $context->Fname = $request->First_name;
    $context->Lname = $request->Last_name;
    $context->email = $request->Email;
    $context->roomType = $request->roomType;
    $context->checkInDate = $request->checkIn;
    $context->checkOutDate = $request->checkOut;
    $context->visaNO = $request->visaNo;
    $context->save();

   return view('pages.doneRegister');
 }

}
