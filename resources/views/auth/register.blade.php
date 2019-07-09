<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="panel panel-primary mt-5">
            <!-- card view -->
            <div class="card">
            <h5 class="card-header">Register</h5>
            <div class="card-body">
                    <form action="http://localhost/sentinel/public/register" method="POST">
                        {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-sm-12">
                                <input type="email" class="form-control"name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="col-sm-12">
                                <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                            </div>

                            <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="password" class="form-control" name="password_confirmation" placeholder=" Confirmation Password" required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                            <div class="col-sm-12">
                                    <button type="submit" value="register" class="btn btn-success  pull-right">Register</button>
                                    <a href="http://localhost/sentinel/public/login" class="pull-right m-2">Login</a>
                                </div>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>