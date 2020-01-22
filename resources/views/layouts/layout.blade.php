<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Car Dealership')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-4.4.1-dist/css/bootstrap.min.css') }}">
</head>
<body class="row bg-dark">
        <div class="col-sm-12 text-white-50">
            @include('partials.header')
        </div>
        <div class="col-sm-2">
            @include('partials.sidebar')
        </div>
        <div class="col-sm-10 text-white-50 border">
            @yield('content')
        </div>
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap-4.4.1-dist/js/bootstrap.min.js') }}"></script>
</body>
</html>
