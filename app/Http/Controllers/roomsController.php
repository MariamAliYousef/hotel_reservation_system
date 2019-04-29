<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\room;
use DB;

class roomsController extends Controller
{
   	public function room_Store(Request $request){
	    $room = new Room;   //Room =  model
 		 
		$this->validate(request(), [
			'type' => 'required',
			'price' => 'required',
			'image' => 'image|mimes:jpg,jpeg,gif,png,svg|max:2048|required'
		]);
		 
		
		 
		 $img_name = time() . '.' . $request->image->getClientOriginalExtension();
		 $room->image = $img_name;
		 $path = public_path().'/admin/upload images';
		 $request->file('image')->move($path, $img_name);
		 
		 
		 $room->type = request('type');
		 $room->price = request('price');
	
		 $room->save();
		 
		 return back();
		
	}
	
	
	public function room_edit(room $room_id)
    {
		return view('admin_pages.edit_room',compact('room_id'));
    }
	
	
	
	
    public function room_update(Request $request,Room $room_id){
		
		 $this->validate(request(), [
			'type' => 'required',
			'price' => 'required',
			'image' => 'image|mimes:jpg,jpeg,gif,png,svg|max:2048|required'
		 ]);
		 	 
			
		 $room_id->type = request('type');
		 $room_id->price = request('price');	
			
		
		 if($request->hasFile('image')){
		 $img_name = time() . '.' . $request->image->getClientOriginalExtension();
		 $room_id->image = $img_name;
		 $path = public_path().'/admin/upload images';
		 $request->file('image')->move($path, $img_name);
		 }
		 
	
		 $room_id->save();
		return redirect('controll');
	}
	
	
	
	public function room_delete(Room $room_id){
		$room_id->delete();
		return back();
	}

}
