@extends('layouts.app')
@section('content')

 <!-- Start Hall Register Form -->
        <div class="form-registe" id="Bhall">
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


@stop
