@extends('layouts.app')
@section('content')

<!--form Room Registe -->

    <div class="form-registe" id="Broom">
      <center>
        <form method="post" action="{{action('bookRoomController@storeRoomBooking')}}"  enctype="multipart/form-data">
  {{ csrf_field() }}
        	<div class="first">
        		<div class="details">
        			<label>Name * </label>
        		  <div class="nam">
        			  <input type="text" name="First_name" placeholder="First Name"/ required>
        		  </div>
        		  <div class="nam1">
        		    <input type="text" name="Last_name" placeholder="Last Name"/ required>
        		  </div>
        	</div>
        </div>
				<div class="main2">
					<div class="details">
						<label>E-mail * </label>
				    <input type="email" name="Email" placeholder="ex : myname@gmail.com"/ required>
					</div>
				</div>
				<div class="grid">
					<div class="details">
						<label>Room Type *</label>
            <input type="text" name="roomType" placeholder="Enter Room Type"/ required>
					</div>
				</div>
				<div class="check">
					<div class="details">
					<label>Check In & Out Date *</label>
						<div class="checktime">
							<input class="date" class="datepicker" name="checkIn" type="date" placeholder="checkIn   mm/dd/yyyy"/ required>
              <input class="date" class="datepicker" name="checkOut" type="date" placeholder="checkOut  mm/dd/yyyy"/ required>
						</div>
					</div>
				</div>
				<div class="check">
					<div class="details">
					  <label>Visa Number *</label>
						<div class="checktime">
							<input class="date" class="datepicker1" name="visaNo" type="text" placeholder="Visa Number"/ required>
						</div>
					</div>
				</div>
				<div class="email">
					<div class="button">
						<input type="submit" value="Book Now"/>
          </div>
         </div>
        </form>
      </center>
    </div>
    <!-- End Room Register Form -->


@stop
