<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
    <nav class="d-flex justify-content-around bg-dark p-3">
        <a href="/"><h1>Home</h1></a>
        <a href="{{route('voiture.index')}}"><h1>Voiture</h1></a>
        <a href="{{route('color.index')}}"><h1>Color</h1></a>
    </nav>
    <div class="d-flex p-5 justify-content-center align-items-center">
        @yield('content')
    </div>
    <script src="{{asset('js/app.js')}}"><script>
</body>
</html>