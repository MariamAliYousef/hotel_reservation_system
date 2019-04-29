<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/fontawesome-all.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/CSS/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/CSS/fontawesome-all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/CSS/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/CSS/commonStyle.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/CSS/fontawesome-all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/CSS/reviewFeedback.css') }}" />
    <style>
      .cur:hover {
         cursor: pointer;
      }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif @else
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a onclick="bookRoom();" class="nav-link cur" id="room-B">booking Room</a></li>
                    <li class="nav-item"><a id="rest-B"  onclick="bookRest();" class="nav-link cur">booking Restaurant</a></li>
                    <li class="nav-item"><a id="hall-B" onclick="bookHall();" class="nav-link cur">booking Hall</a></li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
    </div>
    </nav>

        <!-- End Header-->
        <!-- ***************************************************************** -->
        <!--form Room Registe -->

    <div class="form-registe" id="Broom">
      <center>
        <form action="#" method="post">
        	<div class="first">
        		<div class="details">
        			<label>Name * </label>
        		  <div class="nam">
        			  <input type="text" name="First name" placeholder="First Name"/>
        		  </div>
        		  <div class="nam1">
        		    <input type="text" name="Last name" placeholder="Last Name"/>
        		  </div>
        	</div>
        </div>
				<div class="main2">
					<div class="details">
						<label>E-mail * </label>
				    <input type="email" name="Email" placeholder="ex : myname@gmail.com"/>
					</div>
				</div>
				<div class="grid">
					<div class="details">
						<label>Room Type</label>
						<select class="rtype" name="rtype"/>
							<option value=" ">None</option>
							<option value="rtype1">Single Room</option>
							<option value="rtype2">Double Room</option>
							<option value="rtype3">Trible Room</option>
						</select>
					</div>
				</div>
				<div class="check">
					<div class="details">
					<label>Check In & Out Date *</label>
						<div class="checktime">
							<input class="date" class="datepicker" name="Text" type="text" placeholder="mm/dd/yyyy --- mm/dd/yyyy "/>
						</div>
					</div>
				</div>
				<div class="check">
					<div class="details">
					  <label>Visa Number *</label>
						<div class="checktime">
							<input class="date" class="datepicker1" name="Text" type="text" placeholder="Visa Number"/>
						</div>
					</div>
				</div>
				<div class="email">
					<div class="button">
						<button class="btn btn-info" type="submit">Book Now</button>
                    </div>
                </div>
        </form>
      </center>
    </div>
    <!-- End Room Register Form -->

    <!-- Start Rest Registe Form -->
    <div class="form-registe" id="Brest" style="display:none">
      <center>
        <form  method="post" action="register_table">
            {{ csrf_field() }}
        	<div class="first">
        		<div class="details">
        			<label>Name * </label>
        		  <div class="nam">
        			  <input type="text" name="FirstName" placeholder="First Name"/>
        		  </div>
        		  <div class="nam1">
        		    <input type="text" name="LastName" placeholder="Last Name"/>
        		  </div>
        	   </div>
            </div>
				<div class="main2">
					<div class="details">
						<label>E-mail * </label>
				        <input type="email" name="email" placeholder="ex : myname@gmail.com"/>
					</div>
				</div>
				<div class="grid">
					<div class="details">
						<label>Number Of Persons </label>
						<input type="number" name="numberOfGuest"/>
					</div>
				</div>
				<div class="check">
					<div class="details">
					    <label>Check In Date *</label>
						<div class="checktime">
							<input class="date" class="datepicker" name="date" type="text" placeholder="mm/dd/yyyy"/>
						</div>
					</div>
				</div>
				<div class="check">
					<div class="details">
					  <label>Check In Time *</label>
						<div class="checktime">
							<input class="date" class="datepicker1" name="time" type="time"/>
						</div>
					</div>
				</div>
				<div class="email">
					<div class="button">
                        <button class="btn btn-info" type="submit">Book Now</button>
                    </div>
                </div>
        </form>
      </center>
    </div>
    <!-- End Rest Register Form -->

    <!-- Start Hall Register Form -->
        <div class="form-registe" id="Bhall" style="display:none">
            <center>
                <form method="POST" action="hall_Store">
                     {{ csrf_field() }}
                    <div class="first">
                        <div class="details">
                            <label>Name * </label>
                            <div class="nam">
                                <input type="text" name="f_name" placeholder="First Name" />
                            </div>
                            <div class="nam1">
                                <input type="text" name="s_name" placeholder="Last Name" />
                            </div>
                        </div>
                    </div>
                    <div class="main2">
                        <div class="details">
                            <label>E-mail * </label>
                            <input type="email" name="email" placeholder="ex : myname@gmail.com" />
                        </div>
                    </div>
                    <div class="grid">
                        <div class="details">
                            <label>Hall Type</label>
                             <input type="text" name="type" placeholder="BirthDay Or Wedding"/ required>
                        </div>
                    </div>
                    <div class="check">
                        <div class="details">
                            <label>Guest's Number *</label>
                            <input type="number" name="persons_number"/>
                        </div>
                    </div>
                    <div class="check">
                        <div class="details">
                            <label>Check In Date *</label>
                            <div class="checktime">
                                <input class="date" class="datepicker1" name="checkInDate" type="text" placeholder="mm/dd/yyyy" />
                            </div>
                        </div>
                    </div>
                    <div class="check">
                        <div class="details">
                            <label>Check In Time *</label>
                            <div class="checktime">
                                <input class="date" class="datepicker1" name="checkInTime" type="time" />
                            </div>
                        </div>
                    </div>
                    <div class="email">
                        <div class="button">
                            <button type="submit" class="btn btn-info">Book Now</button>
                            
                        </div>
                    </div>
                </form>
            </center>
        </div>
        </form>
      </center>
    </div>
    <!-- End Hall Registe Form -->

	<!-- Start Form to add comment -->
    <div class="footer">
      <div class="container">
         <form method="POST" action="store_comment" enctype="multipart/form-data">
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
    <script src="../js/index.js"></script>
  </body>
</html>
