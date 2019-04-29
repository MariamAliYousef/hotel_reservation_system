<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\meal;
use DB;

class mealsController extends Controller
{
    public function meal_Store(Request $request){
	    $meal = new Meal;   //Meal =  model
 		 
		$this->validate(request(), [
			'title' => 'required',
			'price' => 'required',
			'disc' => 'required',
			'image' => 'image|mimes:jpg,jpeg,gif,png,svg|max:2048|required'
		]);
		 
		
		 
		 $img_name = time() . '.' . $request->image->getClientOriginalExtension();
		 $meal->image = $img_name;
		 $path = public_path().'/admin/upload images';
		 $request->file('image')->move($path, $img_name);
		 
		 
		 $meal->title = request('title');
		 $meal->price = request('price');
		 $meal->disc = request('disc');
	
		 $meal->save();
		 
		 return back();
}
	
	
	public function meal_edit(meal $meal_id)
    {
		return view('admin_pages.edit_meal',compact('meal_id'));
    }
	
	
	
	
	
	public function meal_update(Request $request,Meal $meal_id){
		    
		    $this->validate(request(), [
			'title' => 'required',
			'price' => 'required',
			'disc' => 'required',
			'image' => 'image|mimes:jpg,jpeg,gif,png,svg|max:2048|required'
		 ]);
		 	 
			
		 $meal_id->title = request('title');
		 $meal_id->price = request('price');
		 $meal_id->disc = request('disc');	
			
		
		 if($request->hasFile('image')){
		 $img_name = time() . '.' . $request->image->getClientOriginalExtension();
		 $meal_id->image = $img_name;
		 $path = public_path().'/admin/upload images';
		 $request->file('image')->move($path, $img_name);
		 }
		 
	
		 $meal_id->save();
		return redirect('controll');
	}
	
	
	public function meal_delete(Meal $meal_id){
		$meal_id->delete();
		return back();
	}
}