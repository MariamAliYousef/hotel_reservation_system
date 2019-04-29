<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;
use App\hall;
use App\room;
use App\meal;
use DB;

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
	
	
	
	public function showGolf()
     {

		return view('pages.golf');
     }
	
	
	
	public function showGym()
     {

		return view('pages.gym');
     }
	
	
	
	public function showOtherServ()
     {
		
		return view('pages.other_serv');
     }
	
	
	
	public function showHalls()
     {
		
		$halls = Hall::all();
		return view('pages.halls', compact('halls'));
     }
	
	
	
	
	 public function showTripleRooms()
     {
		$rooms = Room::all();
		return view('pages.triple_room', compact('rooms'));
     }
	
	
	
	 public function showDoubleRooms()
     {
		$rooms = Room::all();
		return view('pages.double_room', compact('rooms'));
     }
	
	
	 public function showSingleRooms()
     {
		$rooms = Room::all();
		return view('pages.single_room', compact('rooms'));
     }
	
	
	 public function showResturant()
     {
		$meals = Meal::all();
		return view('pages.resturant', compact('meals'));
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
     public function showHallForm()
     {
		return view('regist_hall');
     }
	
	
	 public function showTableForm()
     {
		return view('regist_table');
     }
	
	
	public function showDoneReg()
	{
        return view('pages.doneRegister');
    }
}
