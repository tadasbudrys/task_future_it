<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--      jQuery  --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/products/create')}}">create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/products')}}">Product list</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    @yield('main')
</div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>

<script type="text/javascript">

    $('#myselect').change(function(){

        var select=   $( "#myselect option:selected" ).val();
        console.log(select);
        $.ajax({
            url:"{{route('products.fetch')}}",
            method:"GET",
            data: {select:select},
            dataType: 'JSON ',
            success:function(response)
            {
                $("#subcategory option").remove();
                console.log('response', response)
                $.each(response, function (index, value) {
                    $("<option></option>", {value: value.id, text:value.subcategory_name}).appendTo('#subcategory');
                });
            }
        })
    });
</script>
</body>
</html>

