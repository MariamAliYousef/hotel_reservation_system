@extends('layouts.app') @section('content')

 <!-- Start Spa Section -->
      <div class="slideShow">
        <div class="container">
          <div class="slideshowCont">
            <h2> Have a closer look at other Services!<br/>SPA</h2>
          </div>
          <div class="mySlides">
            <img src="{{ asset('services-images/spa/spa5.jpg') }}">
          </div>
          <div class="mySlides">
            <img src="{{ asset('services-images/spa/spa1.jpg') }}"/>
          </div>
          <div class="mySlides">
            <img src="{{ asset('services-images/spa/spa3.png') }}"/>
          </div>
          <div class="mySlides">
            <img src="{{ asset('services-images/spa/spa4.jpg') }}"/>
          </div>
          <div class="prev clear-both" onclick="plusDivs(-1)"> &lt;</div>
          <div class="next" onclick="plusDivs(1)"> &gt;</div>
          <div class="text">
            <p class="clear-both">Nothing feels better than letting your mind off your worries,So we are providing the skincare and body massage at our inside spas
              , to make sure you will be almost reborn again when you are done with your vacation at our hotel.
		        </p>
          </div>
        </div>
      </div>
      <!-- End SPA Section -->

      <!-- Start Library Section -->
        <div class="slideShow">
          <div class="container">
            <div class="slideshowCont">
              <h2>Library</h2>
            </div>
            <div class="mySlide">
              <img src="{{ asset('services-images/library/library3.jpg') }}">
            </div>
            <div class="mySlide">
              <img src="{{ asset('services-images/library/lib2.jpg') }}"/>
            </div>
            <div class="mySlide">
              <img src="{{ asset('services-images/library/library2.jpg') }}"/>
            </div>
            <div class="mySlide">
              <img src="{{ asset('services-images/library/lib4.jpg') }}"/>
            </div>
            <div class="prev clear-both" onclick="plusDivs(-1)"> &lt;</div>
            <div class="next" onclick="plusDivs(1)"> &gt;</div>
            <div class="text">
              <p class="clear-both">In our hotel, you can enjoy reading whilerelaxing in the wooden furniture and cozy atmosphere that you'd be able to forget all but the book you're immersed in.
  		        </p>
            </div>
          </div>
        </div>
        <!-- End Library Section -->
@stop