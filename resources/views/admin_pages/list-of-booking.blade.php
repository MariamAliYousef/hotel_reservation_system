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
                <a class="nav-link" href="controll">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('list-of-booking') }}">List of Booking <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin_rooms">Rooms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin_meals">Restaurant </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="admin_halls">Halls</a>
              </li>

            </ul>
          </div>
        </nav>
      </div>
    </div>

    <!-- Start List Booking Table Body -->
    <div class="table-list" style="margin-bottom:50px">
      <div class="container">
        <div class="card">
          <table>
            <h5 class="card-header">
              Booking Rooms List
              <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Room Type</th>
                <th>Check In Date</th>
                <th>Check Out Date</th>
              </tr>
            </h5>
            @foreach($book_room as $room)
            <div class="card-body">
              <tr class="card-text">
                <td>{{ $room->id }}</td>
                <td>{{ $room->Fname }}</td>
                <td>{{ $room->Lname }}</td>
                <td>{{ $room->email }}</td>
                <td>{{ $room->roomType }}</td>
                <td>{{ $room->checkInDate }}</td>
                <td>{{ $room->checkOutDate }}</td>
              </tr>
            </div>
            @endforeach
          </table>
        </div>
      </div>
    </div>

<!-- Booking Table List -->
    <div class="table-list" style="margin-bottom:50px">
      <div class="container">
        <div class="card">
          <table>
            <h5 class="card-header">
              Booking Table List
              <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Guests</th>
                <th>Date</th>
                <th>Time</th>
              </tr>
            </h5>
            @foreach($book_table as $table)
            <div class="card-body">
              <tr class="card-text">
                <td>{{ $table->id }}</td>
                <td>{{ $table->FirstName }}</td>
                <td>{{ $table->LastName }}</td>
                <td>{{ $table->email }}</td>
                <td>{{ $table->NumberOfGuests }}</td>
                <td>{{ $table->Date }}</td>
                <td>{{ $table->Time }}</td>
              </tr>
            </div>
            @endforeach
          </table>
        </div>
      </div>
    </div>

<!-- Booking Hall List -->
    <div class="table-list" style="margin-bottom:50px">
      <div class="container">
        <div class="card">
          <table>
            <h5 class="card-header">
              Booking Hall List
              <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Hall Type</th>
                <th>Number of Guests</th>
                <th>Check In Date</th>
                <th>Check Out Date</th>
              </tr>
            </h5>
            @foreach($book_hall as $hall)
            <div class="card-body">
              <tr class="card-text">
                <td>{{ $hall->id }}</td>
                <td>{{ $hall->f_name }}</td>
                <td>{{ $hall->s_name }}</td>
                <td>{{ $hall->email }}</td>
                <td>{{ $hall->type }}</td>
                <td>{{ $hall->persons_number }}</td>
                <td>{{ $hall->checkInDate }}</td>
                <td>{{ $hall->checkInTime }}</td>
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
