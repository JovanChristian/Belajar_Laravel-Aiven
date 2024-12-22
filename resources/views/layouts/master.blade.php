<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootsrap/css/bootstrap.min.css') }}">
    <style>
        div{
            border:0px solid black;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <!-- Header -->
            @include('layouts.header')

        <!-- Menubar -->
            @include('layouts.menu')

        <!-- Konten -->
            @yield('content')
    </div>

    <script src="{{ asset('bootsrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
