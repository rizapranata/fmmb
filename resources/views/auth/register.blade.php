<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="panel panel-primary mt-5">
                <form action="http://localhost/sentinel/public/register" method="POST">
                 {{ csrf_field() }}
                    <div class="form-group row">
                        <div class="col-sm-10">
                        <input type="email" class="form-control"name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="first_name" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                        <input type="password" class="form-control" name="password_confirmation" placeholder=" Confirmation Password">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-10">
                        <button type="submit" value="register" class="btn btn-success  pull-right">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>