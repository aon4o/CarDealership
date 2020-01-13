<!DOCTYPE html>
<html lang="en">
<head>
    <title>Car dealership</title>

    <link rel="stylesheet" href="{{ asset('bootstrap-4.4.1-dist/css/bootstrap.min.css') }}">
</head>
<body>
<div class="header">
    @include('partials.header')
</div>
<div class="sidebar">
    @include('partials.sidebar')
</div>
<div class="content">
@yield('content')
</div>

<script src="{{ asset('jquery/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap-4.4.1-dist/js/bootstrap.min.js') }}"></script>
</body>
</html>
