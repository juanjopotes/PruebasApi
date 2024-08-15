<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('Datepicker/bootstrap-datepicker3.min.css') }}">

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
    <style>
        .datepicker,
        .table-condensed {
        width: 300px;
        height:300px;
        }
    </style>
</head>

<body class="bg-white">

    <script src="{{asset('Datepicker/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('Datepicker/bootstrap-datepicker.min.js')}}"></script>
    @yield('scripts')
</body>

</html>

