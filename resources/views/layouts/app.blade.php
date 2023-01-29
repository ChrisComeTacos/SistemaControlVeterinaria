<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Veterinaria </title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
 
  </head>
  <body class="bg-gray-100 text-gray-800">

    <nav class="flex py-5 bg-indigo-500 text-white">
        <div class="w-1-2 px-12 mr-auto">
            <h2 class="text-2xl font-bold">Sistema Web Veterinaria</h2>
        </div>

        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
            @if(auth()->check())
            <li class="mx-8">
                <p class="text-xl">Bienvenido <b>{{ auth()->user()->name }}</b></p>
            </li>
            <li>
                <a href="{{ route('login.destroy') }}" class="font-bold py-3 px-4 rounded-md bg-red-500 hover:bg-red-600">Log Out</a>
            </li>
            @else

                <li>
                    <a href="{{ route('login.index') }}" class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md">Log In</a>
                    <a href="{{ route('register.index') }}" class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md">Register</a>
                </li>

            @endif
        </ul>


    </nav>

    @yield('content')
  
  
  </body>
</html>