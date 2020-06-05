<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 7 & MySQL CRUD Tutorial</title>
    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>



    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<a href="{{ url('/products/create')}}"> Create </a>
<div class="container">
    @yield('main')
</div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>

