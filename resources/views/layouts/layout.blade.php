<!DOCTYPE html>
<html lang="en">
<head>
    <title>Car dealership</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-4.4.1-dist/css/bootstrap.min.css') }}">
</head>
<body class="bg-light">
<div class="">
    <div class="row">
        <div class="col-sm-12">
            @include('partials.header')
        </div>
    </div>
</div>

<div class="">
    <div class="row">
        <div class="col-sm-2">
            @include('partials.sidebar')
        </div>
        <div class="col-sm-10">
            @yield('content')
        </div>
    </div>
</div>

<script src="{{ asset('jquery/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap-4.4.1-dist/js/bootstrap.min.js') }}"></script>
</body>
</html>
