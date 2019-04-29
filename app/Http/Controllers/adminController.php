<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hall;
use App\room;
use App\meal;
use DB;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAdminPage()
    {
        return view('admin_pages.controll');
    }
	
	
	
    public function showAdminRooms()
    {   
		$rooms = Room::all();
        return view('admin_pages.rooms_controll', compact('rooms'));
    }
	
	
	
    public function showAdminMeals()
    {
		$meals = Meal::all();
        return view('admin_pages.meals_controll', compact('meals'));
    }	
	
	
	/*add the new hall to database*/
	public function showAdminHalls()
    {
		$halls = Hall::all();
        return view('admin_pages.halls_controll', compact('halls'));
    }
	
	
	
	
	
	public function hall_edit(hall $hall_id)
    {
		return view('admin_pages.edit_hall',compact('hall_id'));
    }
	
	
	
	
	
	public function hall_update(Request $request,Hall $hall_id){
		
			 
				
		 $this->validate(request(), [
			'type' => 'required',
			'price' => 'required',
			'num' => 'required',
			'image' => 'image|mimes:jpg,jpeg,gif,png,svg|max:2048|required'
		 ]);
		 	 
			
		 $hall_id->type = request('type');
		 $hall_id->persons_number = request('num');
		 $hall_id->price = request('price');	
			
		
		 if($request->hasFile('image')){
		 $img_name = time() . '.' . $request->image->getClientOriginalExtension();
		 $hall_id->image = $img_name;
		 $path = public_path().'/admin/upload images';
		 $request->file('image')->move($path, $img_name);
		 }
		 
	
		 $hall_id->save();
		return redirect('controll');
	}
	
	
	
	
	public function hall_delete(Hall $hall_id){
		$hall_id->delete();
		return back();
	}
	
	
	
	
	
	
	/*add the new hall to database*/
	public function hall_Store(Request $request){
	    $hall = new Hall;   //Hall =  model
 		 
		$this->validate(request(), [
			'type' => 'required',
			'price' => 'required',
			'num' => 'required',
			'image' => 'image|mimes:jpg,jpeg,gif,png,svg|max:2048|required'
		]);
		 
		
		 
		 $img_name = time() . '.' . $request->image->getClientOriginalExtension();
		 $hall->image = $img_name;
		 $path = public_path().'/admin/upload images';
		 $request->file('image')->move($path, $img_name);
		 
		 
		 $hall->type = request('type');
		 $hall->persons_number = request('num');
		 $hall->price = request('price');
	
		 $hall->save();
		 
		 return back();
		
	}

 
}
