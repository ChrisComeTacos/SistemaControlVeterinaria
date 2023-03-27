<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&family=Staatliches&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



  <title>Veterinaria</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
      <a class="navbar-brand text-primary" href="#">
        Veterinaria
      </a>    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    @yield('secciones')
  
      @if(auth()->check())
      <div class="d-flex">
          <p class="text-primary m-2">Bienvenido <b>{{ auth()->user()->name }}</b></p>
          <a href="{{ route('login.destroy') }}">

            <button type="button" class="btn btn-danger">Log Out</button>
          </a>

          @else
            <div class="d-flex">
              <a href="{{ route('login.index') }}" class="m-2" style="color: white">Log In</a>
              <a href="{{ route('register.index') }}" class="m-2" style="color: white">Register</a>
            </div>

          @endif


      </div>
    </div>
  </div>
</nav>


  @yield('content')

<script src="https://kit.fontawesome.com/a81368914c.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="{{ asset('js/app.js')}}"></script>

@yield('js')
</body>
</html>
