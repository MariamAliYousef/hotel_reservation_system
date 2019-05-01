@extends('layouts.app') @section('content')
   

    <div class="header">
      <div class="head-nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Admin Dashboard</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="controll">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('list-of-booking') }}">List of Booking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin_rooms">Rooms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin_meals">Restaurant</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin_halls">Halls</a>
              </li>

            </ul>
         
          </div>
        </nav>
      </div>
    </div>

    <!-- Statr Admin Home Body -->
    <div class="admin-home-body">
      <div class="container">
        <div class="row">
          <div class="total-body">
            <div class="first col-6">
              <div class="card">
                <h5 class="card-header">Admin Dashboard</h5>
                <div class="card-body">
                  <h5 class="card-title">Welcome</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut non cupidatat skateboard dolor brunch.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut non cupidatat skateboard dolor brunch.
                  </p>
                </div>
              </div>
            </div>
            <div class="second col-6">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('admin/img/1.jpg') }}" class="d-block w-100"/>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('admin/img/2.jpg') }}" class="d-block w-100"/>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('admin/img/3.jpg') }}" class="d-block w-100"/>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




@stop