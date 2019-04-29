@extends('layouts.app') @section('content')

	  <!-- Start slider -->
    <div class="single-slider">
		 <div class="abs"><h1>Our Halls</h1></div>
		 <img id="my-img" src="{{ asset('restaurants-images/halls/hall.jpg') }}"/>
   </div>
      <!-- End slider -->



  <div class="container">
	  
	  @foreach ($halls as $hall)
	  
  	<div class="single-rooms">
  		<div class=text>
			<br>
  			<h1>{{ $hall->type }}</h1>
  			<h2>{{ $hall->price }}$ / 4 houres</h2>
			<br><br><br><br>
  			
  			<p class="details">   Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut non cupidatat skateboard dolor brunch.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut non cupidatat skateboard dolor brunch.</p>
  			<pre>
  		          
				  <P>max no of persons : {{ $hall->persons_number }}       
		    </pre>
  			<a href="halls_reg"><button>book now</button></a>
  		</div>
  		<div class="img"><img src="admin/upload images/{{ $hall->image }}"></div>
  	</div>
		
	@endforeach	
		
</div>
	  
	  

@stop