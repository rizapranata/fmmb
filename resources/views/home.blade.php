@extends('layout.master')
    @section('title',"Home")
    @section('content')
    <div class="container">
     
      @if(Sentinel::check())
        <p class="lead">
            <h3>Selamat Datang {{Sentinel::getUser()->first_name}}</h3>
        </p>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Email</th>
            </tr>
          </thead>
        @foreach($show as $s)
          <tbody>
            <tr>
              <th scope="row">{{ $s->id }}</th>
              <td>{{ $s->first_name}}</td>
              <td>{{ $s->last_name}}</td>
              <td>{{ $s->email}}</td>
            </tr>
          </tbody>
        @endforeach
        </table>
        
      @else
          <p>Registrasi Dulu Bossku...!</p>
      @endif
    </div>
  @endsection
