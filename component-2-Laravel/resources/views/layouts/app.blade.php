<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <title>@yield('title')</title>
</head>
<body>




<div class="products-container">
    @section("content")
    @show
</div>




<div class="footer">
    
    <p>&copy; Rakshya Lama Moktan 2021</p>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
