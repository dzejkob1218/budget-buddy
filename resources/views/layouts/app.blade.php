<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>test {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <link rel="stylesheet"
          href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css"/>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
<div class="wrapper">
@include('layouts.sidebar')
<!-- Page Content  -->
    <div id="content" class="p-0">
    @include('layouts.navigation')
    <!-- session alert -->
        @if (session('alert'))
            <div class="alert alert-success">
                {{ session('alert') }}
            </div>
        @endif
        {{$slot}}
    </div>
</div>

</body>

</html>
