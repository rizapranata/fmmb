
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}"> -->
@extends('layout.master')
@section('title',"Login")
@section('content')
<section class="login">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
        <h3 class="text-center">Login</h3>
        <form class="form-horizontal" action="http://localhost/sentinel/public/login" method="POST">
        @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <div class="checkbox mb-3">
                <label>
                <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
                <!-- <a href="http://localhost/sentinel/public/register" class="pull-right m-2 ">Register</a> -->
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
</section>
@endsection
<!-- <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script> -->