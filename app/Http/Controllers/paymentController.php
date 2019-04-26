<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\credit_card;
use App\payment;	

use App\factoryPattern\tax_15_precent;
use App\factoryPattern\tax_12_precent;
use App\factoryPattern\tax_10_precent;
use App\factoryPattern\factory_class;

class paymentController extends Controller
{
	
  public function showPaymentForm()
  {
        return view('pages.payment');
  }	
	
	


  public function store_payment(Request $request)
  {
    $factory_class;   //factory_class => factory type
	$tax_15 = new tax_15_precent(request('amount'));
    $tax_12 = new tax_12_precent(request('amount'));
    $tax_10 = new tax_10_precent(request('amount'));  
	
	$tax = 0; 

    if(request('amount') >= 700){
      $factory_class = new factory_class($tax_15, request('amount'));
		$tax = $factory_class->payment();
    }
	elseif (request('amount') >= 500) {
      $factory_class = new factory_class($tax_12, request('amount'));
		$tax = $factory_class->payment();
    }
    elseif(request('amount') < 500){
      $factory_class = new factory_class($tax_10, request('amount'));
		$tax = $factory_class->payment();
    }
	  
	 // Withdraw balance
	// $credit = DB::table('credit_cards')->where('card_number', request('visa_number'))->get(); 
	// $visa_amount = $credit->amount_of_money;
	// $price = request('amount') + $tax; 
	  
	 //if($visa_amount >= $price){
		 
    // $new_palance = $visa_amount - $price;		 
	// $data = ['amount_of_money'=>$new_palance];
	 
		 
	// DB::table('credit_cards')->where('card_number', request('visa_number'))->update($data);	 
	 //}
	//return view('pages.donePayment', compact('tax'));

   //}
	
	$credit = DB::table('credit_cards')->where('card_number', request('visa_number'));
    $visa_amount = $credit->value('amount_of_money');
	$price = request('amount') + $tax;

	if($visa_amount >= $price){
		$new_palance = $visa_amount - $price;
		$data = ['amount_of_money'=>$new_palance];
		
	    $credit->update($data);
	  	
		
		
	    // save in payment table 
		$payment = new Payment;   //comment =  model
		
		$payment->visaNumber= request('visa_number');
		$payment->price = request('amount');
		
		$payment->save();
		
		
		
		return view('pages.donePayment');
	}
	else{
		return view('pages.payment_error');
	}   
  }
}

