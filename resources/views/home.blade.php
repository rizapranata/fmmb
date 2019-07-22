@extends('layout.master')
    @section('title',"Home")
    @section('content')
    <section class="home">
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
    </div>   
      @else
      
      <section class="warning">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h3>STOP..!</h3>
            <h5>Login Dulu Bosquuuee...</h5>
          </div>
        </div>
      </div>
      </section>
      @endif
    
    </section>
  @endsection
