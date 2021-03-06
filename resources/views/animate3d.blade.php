<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>jQuery animate3d</title>
   <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/animate3d.css') }}">
   <link rel="stylesheet" href="{{ asset('css/fontello.css') }}">
   <link href="https://fonts.googleapis.com/css?family=Lato:100,400" rel="stylesheet">
</head>
<body>
   <main class="container text-center">
      <h1 class="text-center">Animate3d jQuery Extension</h1>
      <div class="row text-center">
         <a class="btn" href="https://github.com/putnamn21/jquery-animate3d" target="_blank">View On Github <i class="icon-github-circled"></i></a>
         <a class="btn" href="/animate3d/download" download>Download .zip <i class="icon-download"></i></a>
         
      </div>
      <div class="row">
         
         <div class="col-md-6">
           <h2>Default</h2>
            <div class="image-container animate-1">
               <img src="{{ asset('img/animate3d/world-map.png')}}" alt="world map">
               <img src="{{ asset('img/animate3d/layer.svg')}}" alt="places I have been">
               <img src="{{ asset('img/animate3d/layer.svg')}}" alt="places I have been">
            </div>
         </div>
         
         <div class="col-md-6">
            <ul class="nav nav-pills">
               <li class="active"><a data-option='{"distance": 15}'>Distace = 15</a></li>
               <li><a data-option='{"rotation": 0.1}'>Rotation = 0.1</a></li>
               <li><a data-option='{"perspective": 250}'>Perspective = 250</a></li>
               <li><a data-option='{"startX": 0.2, "startY": 0.2}'>Start X/Y = 0.2/0.2</a></li>
            </ul>
            <div class="image-container animate-2">
               <img src="{{ asset('img/animate3d/world-map.png')}}" alt="world map">
               <img src="{{ asset('img/animate3d/layer.svg')}}" alt="places I have been">
               <img src="{{ asset('img/animate3d/layer.svg')}}" alt="places I have been">
            </div>
            <h3 id="code"></h3>
         </div>
         
      </div>   
         
   </main>

<script src="{{ asset('js/vendor/jquery.js') }}"></script>
<script src="{{ asset('js/vendor/animate3d.min.js') }}"></script>
<script src="{{ asset('js/animatePage.js') }}"></script>  


</body>
</html>