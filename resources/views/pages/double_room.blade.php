@extends('layouts.app') @section('content')
<!-- Start slider -->
    <div class="double-slider">
  		 <div class="abs"><h1>Double Rooms</h1></div>
  		 <img id="my-img" src="{{ asset('rooms-images/doubleRoom/Room5.jpg') }}">
    </div>
      <!-- End slider -->


    <!-- ******************************************************************* -->



<div class="container">
	  
	 
	@foreach ($rooms as $room)
	  @if($room->type == 'double')  
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
  		          
				 <P>One King Bed                  2 Chaires                   WI-FI</P>
  		 <p>LCD                                  Air Condition</p>
  			</pre>
				 
		    </pre>
  			<a href="regist_room"><button>book now</button></a>
  		</div>
  		<div class="img"><img src="admin/upload images/{{ $room->image }}"></div>
  	</div>
	 @endif
	@endforeach		
	
		
</div>
@stop