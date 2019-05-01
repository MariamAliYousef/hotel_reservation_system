@extends('layouts.app') @section('content')

<div class="header">
      <div class="head-nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Admin Dashboard</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="controll">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('list-of-booking') }}">List of Booking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin_rooms">Rooms <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin_meals">Restaurant</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="admin_halls">Halls</a>
              </li>

            </ul>
            
          </div>
        </nav>
      </div>
    </div>

    <!-- Add halls form -->
<div class="container">
    <span><b>Add New Room</b></span>
    <div class="row list-group-item">
    <form method="POST" action="rooms-store" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="input-group">
          <input type="text" name="type" class="form-control" placeholder="Room Type" required>
		  <input type="text" name="price" class="form-control" placeholder="price" required>
			
			<pre>   <label style="color:green; font-size:18px;">Room Image</label></pre>
			<input type="file" name= "image" required>
			
		
		
		  <div class="add-room text-center" id="new-hall">
              <button class="btn btn-success"  type="submit" >Add</button>
          </div>
			
			
        </div>
    </form>
    </div>
	
	    <!--errors messages-->
						<div>
						   @foreach ($errors->all() as $error)
							  {{ $error }} <br>
						   @endforeach 	
						</div>
		<!--end errors messages-->
	
	
</div>



   <br><br>
    <!-- Start List Booking Table Body -->
    <div class="table-list">
      <div class="container">
        <div class="card">
          <table>
            <h5 class="card-header">
              Rooms
              <tr>
                <th>Room Type</th>
                <th>price</th>
                
                <th>Image</th>
                <th>Options</th>
              </tr>
            </h5>
			  
			  
			@foreach ($rooms as $room)  
            <div class="card-body">
              <tr class="card-text">
                <td>{{ $room->type }} Room</td>
                <td>{{ $room->price }} $</td>
                
				<td><img src="admin/upload images/{{ $room->image }}" width="100px" height="100"></td>  
				  
                
                <td>
				<a href="room/{{ $room->id }}/edit" ><button class="btn btn-danger">update</button></a>
				<a href="room/{{ $room->id }}/delete"><button class="btn btn-primary">delete</button></a>
                </td>
              </tr>
            </div>
			@endforeach   
			  
          </table>
        </div>
      </div>
    </div>







    <!-- End Form -->
@stop