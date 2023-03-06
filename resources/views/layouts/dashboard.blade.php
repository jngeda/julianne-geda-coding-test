<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token()}}">
        
        <title>Dashboard</title>

        <!-- Fonts and icons -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

        <!-- Styles -->
        <link href="{{ asset('dashboard/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
       
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

        <script src="{{ asset('dashboard/js/core/jquery.min.js') }}" defer> </script>
        <script src="{{ asset('dashboard/js/core/popper.min.js')}}" defer> </script>
        <script src="{{ asset('dashboard/js/core/bootstrap-material-design.min.js')}}" defer> </script>
        <script src="{{ asset('dashboard/js/plugins/perfect-scrollbar.jquery.min.js')}}" defer> </script>

        @yield('scripts')
    </body>
</html>