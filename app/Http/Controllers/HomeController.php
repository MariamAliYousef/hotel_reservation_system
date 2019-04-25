<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\comment;
use App\User;
use App\Reservation;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $comments = DB::table('comments')->take(2)->get(); //to show only 2 comment
        return view('home', compact('comments'));
    }

    public function listBooking(){
      $reservs = Reservation::latest()->get();
      $listUsers = User::latest()->get();
      return view('admin_pages/list-of-booking', compact('reservs','listUsers'));
    }
}
