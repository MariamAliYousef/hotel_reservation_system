@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
    <title>Admin</title>

  </head>
  <body>
    <div class="header">
      <div class="head-nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Admin Dashboard</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="list-of-booking.html">List of Booking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="rooms.html">Rooms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="restaurant.html">Restaurant</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="halls.html">Halls</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Comments</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
            </form>
          </div>
        </nav>
      </div>
    </div>

    <!-- Start List Booking Table Body -->
    <div class="table-list">
      <div class="container">
        <div class="card">
          <table>
            <h5 class="card-header">
              Booking List
              <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Booking Type</th>
              </tr>
            </h5>
            @foreach($reservs as $reserv)
            <div class="card-body">
              <tr class="card-text">
                <td>{{ $reserv->id }}</td>
                <td>{{ $reserv->user_id }}</td>
                <td>{{ $reserv->email }}</td>
                <td>{{ $reserv->bookingType }}</td>
              </tr>
            </div>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
@stop
