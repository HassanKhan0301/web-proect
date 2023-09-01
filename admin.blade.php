<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
    
    <link href="{{asset('admin/css/material-dashboard.css?v=3.0.0')}}" rel="stylesheet">
    
    <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">

    <!-- Scripts -->

</head>
<body>
<div class="wrapper">
@include('layouts.inc.sidebar')

<div class="container-fluid">
    @include('layouts.inc.nav')

    <div class="content">
        @yield('content')
</div>

    <div class="footer">
@yield('footer')
</div>
@include('layouts.inc.footer')

</div>

</div>




    
    <script src="{{asset('admin/js/core/popper.min.js')}}"></script>
    <script src="{{asset('admin/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/core/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('admin/js/smooth-scrollbar.min.js')}}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    @if(session('status'))

<script>
swal("{{session('status')}}");
    </script>

    @endif



@yield('scripts')


  
</body>
</html>


