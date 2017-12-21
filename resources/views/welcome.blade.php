<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="shortcut icon" href="{{{ asset('img/favicon_symbol.png') }}}">

        
          <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>ChillArk</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
           <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        </style>
        
        
        
<meta name="description" content="ChillArk is the leading dedicated cluster server on PC. We are hosting all maps and have a great community with a seperate event server! Join today!">
<meta name="robots" content="noodp">
<link rel="canonical" href="http://chillark.com/">


    </head>

<!--
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
-->
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/">Home</a></li>
            <li><a href="/rules">Rules</a></li>
            <li><a href="https://discord.gg/fbzm3YB">Join Discord</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    
 <div class="content">

    <div class="cover">
        <div class="hi">
          <img class="logo" src="{{ asset('img/color_logo_transparent.png') }}"><br><h1>Full CrossArk PvP cluster for PC</h1>
          <a class="btn btn-default btn-md btn-primary" href="steam://connect/85.190.156.200:21001">Connect to Aberration</a>
          <a class="btn btn-default btn-md btn-primary" href="steam://connect/85.190.156.139:29001">Connect to The Center</a>
          <a class="btn btn-default btn-md btn-primary" href="steam://connect/85.190.156.49:23001">Connect to Ragnarok</a>
          <a class="btn btn-default btn-md btn-primary" href="steam://connect/85.190.157.13:25001">Connect to The Island</a><br><br>
          </div>
          
    </div>

<div id="rates" class="container-fluid">
  <center>
<div class="row">
  <div class="col-md-2">
    <div class="card" style="width: 20rem;">
      <img class="card-img-top" src="{{ asset('img/BrainIcon128White.png') }}" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">4x Experience</h4>
      </div>
    </div>
  </div>
    <div class="col-md-2">
    <div class="card" style="width: 20rem;">
      <img class="card-img-top" src="{{ asset('img/PickaxeIcon128White.png') }}" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">8x Harvesting</h4>
      </div>
    </div>
  </div>

  <div class="col-md-2">
    <div class="card" style="width: 20rem;">
      <img class="card-img-top" src="{{ asset('img/DinoIcon128White.png') }}" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title rate-title">8x Taming</h4>
      </div>
    </div>
  </div>
    <div class="col-md-2">
    <div class="card" style="width: 20rem;">
      <img class="card-img-top" src="{{ asset('img/AuctionIcon128White.png') }}" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">CrossArk Auctions Mod</h4>
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="card" style="width: 20rem;">
      <img class="card-img-top" src="{{ asset('img/EggIcon128White.png') }}" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">8x Hatching</h4>
      </div>
    </div>
  </div>
    <div class="col-md-2">
    <div class="card" style="width: 20rem;">
      <img class="card-img-top" src="{{ asset('img/BabyIcon128White.png') }}" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">8x Maturation</h4>
      </div>
    </div>
  </div>
</div>
</center>
</div>


            
        </div>
        
    <div class="video-background">
        <div class="video-foreground">
          <iframe src="https://www.youtube.com/embed/I8P_monBLEw?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    
    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        
    </body>
</html>
