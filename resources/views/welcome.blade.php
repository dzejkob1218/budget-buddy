<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato', sans-serif;
            background: #f7fafc;
        }
    </style>
</head>
<body>

<section style="background: #1b4b72; width:100%; height:500px; position: fixed; top: 0; z-index: -99;">

    <div class="pt-1 text-center">
        <h1 class="font-weight-bold text-white display-3">All your expenses in one place</h1>
        <h1 class="font-weight-bold text-white">Scan receipts, split costs with friends and track your spending with
            Budget Buddy</h1>
    </div>


    <div class="container-fluid w-100" style="position: absolute; bottom: 0;">
        <div class="row">

            <!--
            <div class="col-sm bg-danger">
                <x-charts.demo-pie/>
            </div>
            -->
            <div class="col-sm bg-indigo">
                <x-charts.demo-bars style="position:relative; bottom:0; height: 300px"/>
            </div>

        </div>
    </div>

</section>

<section style="background: #4dc0b5; margin-top:500px; height: 100vh; position: relative; z-index: 100;">
    <div class="d-flex justify-content-center" style="position: relative; bottom: 300px">
        <x-application-logo width="500"/>
    </div>
    <div class="d-flex align-items-center flex-column" style="position: relative; bottom: 300px">
        @auth
            <x-navigation.button href="{{ url('/dashboard') }}"> Get Started!</x-navigation.button>
        @else
            <x-navigation.button href="{{ route('login') }}"> Login</x-navigation.button>
            <x-navigation.button href="{{ route('register') }}"> Register</x-navigation.button>
        @endif
    </div>


</section>


</body>
</html>
