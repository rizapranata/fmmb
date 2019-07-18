<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="bootstrap3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap3/css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#home" class="navbar-brand page-scroll">Home</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <form role="search" class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Cari...">
              <button type="submit" class="btn btn-primary">Cari</button>
            </div>
          </form>

          <ul class="nav navbar-nav navbar-left">
            <li><a href="#about" class="page-scroll">About</a></li>
            <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
            <li><a href="#contact" class="page-scroll">Contact</a></li>
            <li><a href="produk.html">Produk</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar akhir -->
    
    @yield('content')

     <!-- footer -->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy;copyright 2018 | built with <i class="glyphicon glyphicon-heart"></i> <a href="http://instagram.com/rizapranata">FMMB</a></p>
            <div class="row">
              <div class="col-xs-4 col-xs-offset-2">
                <ul class="footer-child">
                  <li><a href="#home" class="page-scroll">Home</a></li>
                  <li><a href="#about" class="page-scroll">About</a></li>
                  <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
                </ul>
              </div>
            <div class="row">
              <div class="col-xs-4">
                <ul class="footer-child">
                  <li><a href="#home" class="page-scroll">Home</a></li>
                  <li><a href="#about" class="page-scroll">About</a></li>
                  <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- akhir footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap3/js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap3/js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap3/js/bootstrap.min.js"></script>
    <script src="bootstrap3/js/script.js"></script>
  </body>
</html>