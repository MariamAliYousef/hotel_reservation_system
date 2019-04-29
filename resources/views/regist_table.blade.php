@extends('layouts.app')
@section('content')

    <!-- Start Rest Registe Form -->
    <div class="form-registe" id="Brest">
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


@stop
