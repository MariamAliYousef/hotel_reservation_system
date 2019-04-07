<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\comment;
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
    {$comments = DB::table('comments')->take(2)->get(); //to show only 2 comment
        return view('home', compact('comments'));
    }
}
