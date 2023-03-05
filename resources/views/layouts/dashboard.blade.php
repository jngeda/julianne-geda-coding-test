<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token()}}">
    
    <title>Dashboard</title>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('dashboard/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />

</head>
<body>
    <div class="wrapper">
        @include('layouts.include.sidebar')
        <div class="main-panel"> 
            @include('layouts.include.navbar')

            <div class="content"> 
                @yield('content')
            </div>

            @include('layouts.include.footer')
        </div>
    </div>

    <!-- Scrpts -->

    <script src="{{ asset('dashboard/js/core/jquery.min.js')}}" defer> </script>
    <script src="{{ asset('dashboard/js/core/popper.min.js')}}" defer> </script>
    <script src="{{ asset('dashboard/js/core/bootstrap.min.js')}}" defer> </script>
    <script src="{{ asset('dashboard/js/perfect-scrollbar.jquery.min.js')}}" defer> </script>

</body>
</html>