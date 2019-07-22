<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}"> -->
@extends('layout.master')
@section('title',"Register")
@section('content')
<section class="register">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
             <h3 class="text-center">Register</h3>
                <form class="form-horizontal" action="http://localhost/sentinel/public/register" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" class="form-control" name="first_name" id="exampleInputEmail1" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" class="form-control" name="last_name" id="exampleInputEmail1" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Corfirmation Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Confirmation Password">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary btn-block">Register</button>
                         <!-- <a href="http://localhost/sentinel/public/login" class="pull-right m-2">Login</a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
<!-- <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script> -->