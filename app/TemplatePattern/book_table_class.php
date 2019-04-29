<?php

namespace App\TemplatePattern;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\registration;
use App\TemplatePattern\SupportReservation;
use App\pagesController;

class book_table_class extends SupportReservation{
    
     function book(Request $request)
     {
		$page = new registration;
        $page->FirstName=$request->FirstName;
        $page->LastName=$request->LastName;
        $page->email=$request->email;
        $page->NumberOfGuests=$request->numberOfGuest;
        $page->Date=$request->date;
        $page->Time=$request->time;    
        $page->save();

     }
        
    public function confirm(){
      abort(redirect('donetable'));
    }
}