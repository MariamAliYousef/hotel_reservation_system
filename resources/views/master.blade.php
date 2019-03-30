<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('style/CSS/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('.style/CSS/fontawesome-all.min.css') }}"/>
  </head>
  <body>
    <!-- Start Header -->
    <div class="header">
      <div class="navbar">
        <div class="container">
          <h2>Home</h2>
          <ul>
            <li><a href="home">Home</a></li>
            <li><a href="#">Rooms</a></li>
            <li><a href="#">Restaurant</a></li>
            <li><a href="#">Halls</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">History</a></li>
          </ul>
        </div>
      </div>
	</div>	
	  <!--end header-->
	  
	  @yield('content')
	  
	  
	     
    <script src="{{ asset('style/js/fontawesome-all.min.js') }}"></script>
  </body>
</html>