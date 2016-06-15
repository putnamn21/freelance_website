<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.ttf">
    <link rel="stylesheet" href="{{ asset('css/vendor/foundation.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
       
  </head>
  <body>
     
   
    @yield('content')
      

    <script src="{{ asset('js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('js/vendor/typed.js') }}"></script>
    <script src="{{ asset('js/vendor/foundation.min.js') }}"></script>
    <script src="{{ asset('js/vendor/3d.min.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
  </body>
</html>