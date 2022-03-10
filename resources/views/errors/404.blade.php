<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/errors/404.css') }}">

    {{-- Animation --}}
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css') }}">
</head>
<body>
    <div class="container">
        <h2 class="animate__animated animate__tada">Oops! You Got Us</h2>
        <img src="{{ asset('images/errors/undraw_under_construction_-46-pa.svg') }}" alt="">
        <p>We're working on this! :)</p>
        <a href="{{ url('/') }}">Go back home</a>
    </div>   
</body>
</html>