<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Veterinaria</title>

    {{-- ESTILOS --}}
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">

    {{-- FUENTE --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;700&display=swap" rel="stylesheet">
    
    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>
<body>

    @yield('secciones')

    @yield('CuerpoInicio')


    <script src="js/script.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
