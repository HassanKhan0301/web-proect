<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
    
    
    
    <link href="{{asset('frontend/custom.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/bootstrap5.css')}}" rel="stylesheet">

    <!-- Scripts -->

</head>
<body>


    <div class="content">
        @yield('content')
</div>

  

</div>




    
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    @if(session('status'))

<script>
swal("{{session('status')}}");
    </script>

    @endif



@yield('scripts')


  
</body>
</html>


