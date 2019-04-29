@extends('layouts.app') @section('content')
    <!--Start Restaurant Section-->
    <div class="commun-res">
      <div class="container">
        <div class="restaurant-sec1">
            <div class="res-img1">
                
              <img src="{{ asset('style/images/restaurants-images/rest6.jpg')}} "/>
            </div>
            <p>All-day dining International restaurant with terrace. Start the morning with an extensive menu of Western & Asian specialities at our chic restaurant. Delight your breakfast with the absolute stunning ocean-view. Classic Chic style, embellish with luxurious materials and furnishing of the curved designs like ocean waves.
            </p>
            <h2>Service Hours :</h2>
            <p>06:00 am. to 11:00 pm.</p>
            <h2>Location :</h2>
            <p>Ground Floor, Suite Building.</p>
            <h2>Capacity :</h2>
            <p>150 seats indoor 80 seats outdoor.</p>
            <button><a href="{{url('register')}}">Book a Table Now!</a></button>
        </div>
        <div class="polaroid rotate_right">
            <img src="{{ asset('style/images/restaurants-images/meal2.jpg')}}"/>
            <p class="caption">Truffle Toast and Mashed potatoes . </p>
        </div>
        <div class="polaroid rotate_left">
            <img src="{{ asset('style/images/restaurants-images/meal4.jpg')}}"/>
            <p class="caption">Roast beef with Yorkshire pudding .</p>
        </div>
        <div class="pola rotate_right1">
            <img src="{{ asset('style/images/restaurants-images/meal1.jpg')}}"/>
            <p class="caption"> Mango and Douglas Fir <br/> Puree. </p>
        </div>
        <div class="pola rotate_left1">
            <img src="{{ asset('style/images/restaurants-images/meal3.jpg')}}"/>
            <p class="caption">Omelett and Shrimps with butter.</p>
        </div>
      </div>
    </div>
     <!--End Restaurant Section-->
     <!-- ******************************************************************* -->
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
    @stop
