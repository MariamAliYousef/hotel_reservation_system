@extends('layouts.app')
@section('content')

<!--form Room Registe -->

    <div class="form-registe" id="Broom">
      <center>
        <form method="post" action="storePayment"  enctype="multipart/form-data">
        {{ csrf_field() }}
        	
				<div class="grid">
					<div class="details">
						<label>Visa Number *</label>
                        <input type="text" name="visa_number" placeholder="Enter Your Visa Number"/ required>
					</div>
				</div>
			
			
			    <div class="grid">
					<div class="details">
						<label>Amount Of Money *</label>
                        <input type="text" name="amount" placeholder="Amount"/ required>
					</div>
			    </div>
				
		<div class="email">
		   <div class="button">
				<input type="submit" value="Payment"/>
           </div>
         </div>
        </form>
      </center>
    </div>
    <!-- End Room Register Form -->


@stop
