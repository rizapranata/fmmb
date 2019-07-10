<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <title>@yield('title')</title>
  </head>
  <body>
    <header>
      <!-- awal navbar -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #3DC3B5;">
          <div class="container">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              @if(Sentinel::check())
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <form action="http://localhost/sentinel/public/logout" id="logout-form" methode="POST" class="form-inline mr-sm-2">
                    {{ csrf_field( )}}
                      <a href="" onclick="document.getElementById('logout-form').submit()" class="nav-link">Logout</a>
                  </form>
                </li>
              </ul>
              @else
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a href="http://localhost/sentinel/public/login" class="nav-link">login</a>
                  </li>
                <li class="nav-item">
                  <a href="http://localhost/sentinel/public/register" class="nav-link">Register</a>
                </li>
              </ul>
              
              @endif
             
                <!-- <li class="nav-item">
                  <a class="nav-link" href="http://localhost/sentinel/public/login">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/sentinel/public/register">Register</a>
                </li> -->
            </div>
          </nav>
        <!-- akhir navbar -->
    </header> 
    
      @yield('content')
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
  </body>
</html>