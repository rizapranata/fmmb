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
        <div class="row warning">
          <div class="col-md-6 offset-md-3">
            <div class="card text-center">
              <div class="card-header">
               Warning!
              </div>
              <div class="card-body">
                <h5 class="card-title">Registrasi/Login Dulu Bossku...!</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="http://localhost/sentinel/public/register" class="btn btn-primary">Go Register</a>
              </div>
            </div>
          </div>
        </div>
      @endif
    </div>
  @endsection
