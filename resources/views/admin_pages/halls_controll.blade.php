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
                <a class="nav-link" href="controll">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="list-of-booking.html">List of Booking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="rooms.html">Rooms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="restaurant.html">Restaurant</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="admin_halls">Halls</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Comments</a>
              </li>
            </ul>
            
          </div>
        </nav>
      </div>
    </div>

    <!-- Add halls form -->
<div class="container">
    <span><b>Add New Hall</b></span>
    <div class="row list-group-item">
    <form method="POST" action="halls-store" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="input-group">
          <input type="text" name="type" class="form-control" placeholder="Hall Type" required>
		  <input type="text" name="num" class="form-control" placeholder="Number Of Persons" required>
		  <input type="text" name="price" class="form-control" placeholder="price" required>
			
			<pre>   <label style="color:green; font-size:18px;">Hall Image</label></pre>
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




    <!-- Start List Booking Table Body -->
    <div class="table-list">
      <div class="container">
        <div class="card">
          <table>
            <h5 class="card-header">
              Halls
              <tr>
                <th>Hall Type</th>
                <th>No. of Person</th>
                <th>Price</th>
                <th>Image</th>
                <th>Options</th>
              </tr>
            </h5>
			  
			  
			 @foreach ($halls as $hall) 
            <div class="card-body">
              <tr class="card-text">
                <td>{{ $hall->type }}</td>
                <td>{{ $hall->persons_number }}</td>
                <td>{{ $hall->price }}$</td>
				<td><img <img src="admin/upload images/{{ $hall->image }}" width="100px" height="100"></td>  
				  
                
                <td>
				<a href="hall/{{ $hall->id }}/edit" ><button class="btn btn-danger">update</button></a>
				<a href="hall/{{ $hall->id }}/delete"><button class="btn btn-primary">delete</button></a>
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