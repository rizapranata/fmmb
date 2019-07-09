@extends('layout.master')
    @section('content')
    <div class="container">
      @if(Sentinel::check())
        <form action="http://localhost/sentinel/public/logout" id="logout-form" methode="POST">
          {{ csrf_field( )}}
          <a href="" onclick="document.getElementById('logout-form').submit()">Logout</a>
        </form>
      @else
        <a href="http://localhost/sentinel/public/login">login</a>
        <a href="http://localhost/sentinel/public/register">Register</a>
      @endif
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
          <p>Login Dulu Bossku...!</p>
      @endif
    </div>
  @endsection
