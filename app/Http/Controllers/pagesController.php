<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;
use App\hall;
use DB;
use App\registration;

class pagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showForm()
    {
		$comments = DB::table('comments')->take(2)->get(); //to show only 2 comment
        return view('pages.home', compact('comments'));
    }
	
	
	 public function showHalls()
     {
		
		$halls = Hall::all();
		return view('pages.halls', compact('halls'));
     }
    
    public function showHalls2()
     {
		return view('halls');
     }
    
    

	 public function storeComment(Request $request)
     {
		$comment = new Comment;   //comment =  model
		
		$comment->email = request('mail');
		$comment->comment = request('comment');
		$comment->username = request('user-name'); 
		$comment->subject = request('subject'); 
		 
		$comment->save();
		
        return redirect('show_comments');
     }
	
	
      public function showComments()
      {
		$comments = DB::table('comments')->get();
		
		return view('pages.show_comments',compact('comments'));
      }
    
    /*view the restaurants page*/
     public function showRestaurants()
     {
		return view('Restaurant');
     }
    /*view the restaurants page*/
     public function showRegister()
     {
		return view('register');
     }
    /*register table*/
//    public function RegisterTable(Request $request)
//     {
//		$page = new registration;
//        $page->FirstName=$request->FirstName;
//        $page->LastName=$request->LastName;
//        $page->email=$request->email;
//        $page->NumberOfGuests=$request->numberOfGuest;
//        $page->Date=$request->date;
//        $page->Time=$request->time;    
//        $page->save();
//        
//        return view('pages.doneRegister');
//     }
    public function showDoneReg(){
        return view('pages.doneRegister');
    }
}
