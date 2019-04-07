@extends('master')



@section('content')


    <!-- Start Our Happy Client Section-->
    <div class="our-client">
      <div class="container">
        <div class="client-intro">
          <h3>Our Happy Clients</h3>
          <hr/>
        </div>
		
		  
		<div class="comments">
			@foreach ($comments as $oneComment)
			
          <div style="margin-top:30px;">
			  <p> {{ $oneComment->comment }} </p>
            <h3>{{ $oneComment->username }}, {{ $oneComment->subject }}</h3>
          </div>
			@endforeach
	   	</div>	
		  
      </div>
    </div>
    <!-- End Our Happy Client Section -->


@stop