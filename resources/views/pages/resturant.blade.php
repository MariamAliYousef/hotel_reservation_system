@extends('layouts.app') @section('content')

<div class="header">
	      <div class="rest-slider">
          <img id="imging" src="{{ asset('restaurants-images/rest3.jpg') }}"/>
      </div>
</div>	


<!--Start Restaurant Section-->
    <div class="commun-res">
      <div class="container">
        <div class="restaurant-sec1">
            <div class="res-img1">
              <img src="{{ asset('restaurants-images/rest6.jpg') }}"/>
            </div>
            <p>All-day dining International restaurant with terrace. Start the morning with an extensive menu of Western & Asian specialities at our chic restaurant. Delight your breakfast with the absolute stunning ocean-view. Classic Chic style, embellish with luxurious materials and furnishing of the curved designs like ocean waves.
            </p>
            <h2>Service Hours :</h2>
            <p>06:00 am. to 11:00 pm.</p>
            <h2>Location :</h2>
            <p>Ground Floor, Suite Building.</p>
            <h2>Capacity :</h2>
            <p>150 seats indoor 80 seats outdoor.</p>
            <button><a href="table_form">Book a Table Now!</a></button>
        </div>
		  
		 
		  
		@foreach ($meals as $meal)  
        <div class="polaroid rotate_right">
            <img src="admin/upload images/{{ $meal->image }}"/>
            <p class="caption">{{ $meal->title }} </p>
        </div>
        <div class="polaroid rotate_left">
            <p class="caption">{{ $meal->disc }} . </p>
			<p>{{ $meal->price }}  $</p>
        </div>
	   @endforeach	  
		  

      </div>
    </div>
     <!--End Restaurant Section-->

@stop