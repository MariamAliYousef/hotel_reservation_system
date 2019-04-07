@extends('layouts.app') @section('content')


    <!-- Start Our Happy Client Section-->
     
      <div id="review">
        <div class="container">
			<br><br><br>
            <h3> Our Clients' Feedbacks </h3>
            <div class="lines">
                <hr class="firstLine" />
                <hr class="secondLine" />
            </div>
            <br />
           @foreach ($comments as $oneComment)
            <div class="reviewBox">
                <img src="{{ asset('style/images/52c66f1f8b.png') }}" />
                <div class="feedbackName">
                    <h4 class="clientName"> {{ $oneComment->username }} </h4>
                    <h6 class="reviewSubject"> {{ $oneComment->subject }} </h6>
                </div>
                <div class="clear"> </div>
                <div class="reviewDesc">
                    <q> {{ $oneComment->comment }} </q>
                </div>
            </div>
			@endforeach
        </div>
    </div>
     
    
    <!-- End Our Happy Client Section -->

     


@stop