@extends('layouts.app') @section('content')
<!-- Start slider -->
    <div class="triple-slider">
		   <div class="abs"><h1>Triple Rooms</h1></div>
		   <img id="my-img" src="{{ asset('rooms-images/tripleRoom/triple2.jpg') }}">
   </div>
      <!-- End slider -->


    <!-- ******************************************************************* -->



<div class="container">
	  
	 
	@foreach ($rooms as $room)
	  @if($room->type == 'triple')   
  	<div class="single-rooms">
  		<div class=text>
			<br>
  			<h1>{{ $room->type }} room</h1>
  			<h2>{{ $room->price }} $ / Night</h2>
			<br><br><br><br>
  			
  			<p class="details">   Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut non cupidatat skateboard dolor brunch.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut non cupidatat skateboard dolor brunch.</p>
  			<pre>
  		          
				  				 <P>3 Persons Max                 2 Chaires                   WI-FI</P>
  		 <p>LCD                                  Air Condition</p>
				  
				  
		    </pre>
  			<a href="regist_room"><button>book now</button></a>
  		</div>
  		<div class="img"><img src="admin/upload images/{{ $room->image }}"></div>
  	</div>
      @endif
	@endforeach			
	
		
</div>
@stop