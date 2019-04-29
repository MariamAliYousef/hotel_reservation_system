@extends('layouts.app') @section('content')

 <!-- button action to form page -->
    <div class="div2">
      <h2 class="m">OUR MASSTION</h2>
      <hr/>
      <p class="motivate">NO PAIN<br/>NO GAIN<br/>Let's Train<br/>Lose Your Weight<br/>Build Your Six Pack
      </p>
    </div>
    <div class="video">
      <video class="video1" autoplay>
          <source src="{{ asset('services-images/gym/Leader.mp4') }}" type="video/mp4">
      </video>
    </div>
    <div class="div3">
      <p  class="about">OUR CLASSES MAKE U DEFFERENT<br/>You Can Join ONE OR MORE<br/>Machine<br/>Zumba<br/>Yoga<br/>Boxing
      </p>
      <div class="slideshow-container" style="margin-bottom:100px;">
        <div class="mySlides">
          <img src="{{ asset('services-images/gym/machine.jpg') }}" style="width:100%">
        </div>
        <div class="mySlides">
          <img src="{{ asset('services-images/gym/zumba.jpg') }}" style="width:100%">
        </div>
        <div class="mySlides">
          <img src="{{ asset('services-images/gym/boxing.jpg') }}" style="width:100%">
        </div>
        <div class="mySlides">
          <img src="{{ asset('services-images/gym/WOMEN-YOGA.jpg') }}" style="width:100%">
        </div>
        <br>
      </div>
		
		
		
		 <script>
      var slideIndex = 0;
         showSlides();
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
           slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex> slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 5000); // Change image every 5 seconds
      }
    </script>

@stop