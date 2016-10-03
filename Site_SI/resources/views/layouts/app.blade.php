<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistemas de Informação/UFSM-FW</title>

    <!-- Styles -->
     <link rel="stylesheet" href="{{ asset('css/foundation.css')}}">

  <!-- This is how you would link your custom stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  
</head>

@include('admin.headerAdmin')
        

<body>
    <div class="row">
        <div class="columns" style="margin-top: -20; margin-top: 60px;" >
            @yield('conteudo')
        </div>
    </div>
    
    
    <!-- Scripts -->
    <script src="{{ asset('js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('js/vendor/foundation.min.js') }}"></script>

    <script>
        $(document).foundation();
    </script>
    
</body>
</html>
