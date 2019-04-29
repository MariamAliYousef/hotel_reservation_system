<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TemplatePattern\book_table_class;
use App\TemplatePattern\book_Hall_class;
use App\TemplatePattern\book_table_class\SupportReservation;


class reserveController extends Controller
{
    public function RegisterTable(Request $request){
        $table=new book_table_class();
        $table->reserve($request);
    }
    
    public function hallStore(Request $request){
        $hall = new book_Hall_class();
        $hall ->reserve($request);
    }
    
}
