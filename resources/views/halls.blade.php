@extends('layouts.app') @section('content')
    <!-- Start Halls Section -->


        <div class="slideshowContainer">
          <h2> Have a closer look at our Halls!</h2>
        </div>
        <div class="display-container clear-both">
          <div class="container">
            <img class="mySlides" src="{{ asset('style/images/restaurants-images/halls/slider7.jpg') }}">
            <img class="mySlides" src="{{ asset('style/images/restaurants-images/halls/halls3.jpg') }}">
            <img class="mySlides" src="{{ asset('style/images/restaurants-images/halls/halls5.jpg') }}" accesskey="">
            <img  class="mySlides" src="{{ asset('style/images/restaurants-images/halls/halls6.jpg') }}">
            <div class="slidebuttons">
              <div class="leftButton hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
              <div class="rightButton hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
            </div>
          </div>
        </div>
        <div class="responsive clear-both">
          <div class="container">
            <div class="gallery">
                <a target="_blank" href="../images/restaurants-images/halls/halls6.jpg">
                  <img src="{{ asset('style/images/restaurants-images/halls/halls6.jpg') }}">
                </a>
                <div class="desc">The first hall is very elegant and unique, you can find yourself slipping into another timeline while looking at it.</div>
                <form action="{{ url('halls_reg') }}">
                  <input class="MyButton" type="submit" value="Book Now!"/>
                </form>
              </div>
              <div class="gallery">
                <a target="_blank" href="../images/restaurants-images/halls/halls5.jpg">
                  <img src="{{ asset('style/images/restaurants-images/halls/halls5.jpg') }}">
                </a>
                <div  class="desc">The first hall is very elegant and unique, you can find yourself slipping into another timeline while looking at it.</div>
                <form action="{{ url('halls_reg') }}">
                  <input class="MyButton" type="submit" value="Book Now!"/>
                </form>
              </div>
              <div class="gallery">
                <a  target="_blank" href="../images/restaurants-images/halls/halls3.jpg">
                  <img src="{{ asset('style/images/restaurants-images/halls/halls3.jpg') }}">
                </a>
                <div class="desc">The first hall is very elegant and unique, you can find yourself slipping into another timeline while looking at it.</div>
                <form action="{{ url('halls_reg') }}">
                  <input class="MyButton" type="submit" value="Book Now!"/>
                </form>
             </div>
             <div class="gallery">
                <a target="_blank" href="../images/restaurants-images/halls/halls4.jpg">
                  <img src="{{ asset('style/images/restaurants-images/halls/halls4.jpg') }}">
                </a>
                <div class="desc">The first hall is very elegant and unique, you can find yourself slipping into another timeline while looking at it.</div>
                <form action="{{ url('halls_reg') }}">
                  <input class="MyButton" type="submit" value="Book Now!"/>
                </form>
              </div>
              <div class="gallery">
                <a target="_blank" href="../images/restaurants-images/halls/halls2.JPG">
                  <img src="{{ asset('style/images/restaurants-images/halls/halls2.jpg') }}">
                </a>
                <div class="desc">The first hall is very elegant and unique, you can find yourself slipping into another timeline while looking at it.</div>
                <form action="{{ url('halls_reg') }}">
                  <input class="MyButton" type="submit" value="Book Now!"/>
                </form>
            </div>
            <div class="gallery">
              <a target="_blank" href="../images/restaurants-images/halls/halls1.jpg">
                <img src="{{ asset('style/images/restaurants-images/halls/halls1.jpg') }}">
              </a>
              <div class="desc">The first hall is very elegant and unique, you can find yourself slipping into another timeline while looking at it.</div>
              <form action="{{ url('halls_reg') }}">
                <input class="MyButton" type="submit" value="Book Now!"/>
              </form>
            </div>
          </div>
        </div>
     
<!-- Start Form to add comment -->
    <div class="footer">
      <div class="container">
         <form method="post" action="store_comment" enctype="multipart/form-data">
			{{ csrf_field() }}
          <div class="form">
            <div class="first col-6">
              <label>Name *</label>
              <input type="text" name="user-name"/ required>
              <label>Email *</label>
              <input type="email" name="mail"/ required>
              <label>Subject</label>
              <input type="text" name="subject"/ required>
            </div>
            <div class="first col-6">
            <div class="row">
              <label>Your Comment *</label>
              <textarea name="comment" required></textarea>
                </div>
                <div class="row ml-1">
              <input type="submit" value="send"/>
                </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- End Form -->
    <!-- End Footer Section-->
    <script>
      var slideIndex = 1;
      showDivs(slideIndex);
      function plusDivs(n) {
        showDivs(slideIndex += n);
      }

      function currentDiv(n) {
        showDivs(slideIndex = n);
      }

      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
      }
    </script>
  </body>
</html>

@stop