{"filter":false,"title":"app.blade.php","tooltip":"/resources/views/layouts/app.blade.php","undoManager":{"mark":59,"position":59,"stack":[[{"start":{"row":80,"column":0},"end":{"row":81,"column":0},"action":"insert","lines":["",""],"id":1}],[{"start":{"row":81,"column":0},"end":{"row":82,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":82,"column":0},"end":{"row":83,"column":0},"action":"insert","lines":["",""],"id":3}],[{"start":{"row":83,"column":0},"end":{"row":84,"column":0},"action":"insert","lines":["",""],"id":4}],[{"start":{"row":84,"column":0},"end":{"row":85,"column":0},"action":"insert","lines":["",""],"id":5}],[{"start":{"row":85,"column":0},"end":{"row":86,"column":0},"action":"insert","lines":["",""],"id":6}],[{"start":{"row":86,"column":0},"end":{"row":110,"column":0},"action":"insert","lines":["<!--HamBurger Icon-->","<div class=\"bars\" id=\"nav-action\">","  <span class=\"bar\"> </span>","</div>","","<!--Navbar Links-->","<nav id=\"nav\">","  <ul>","    <li class=\"shape-circle circle-one\"><a href=\"#\">Contact</a></li>","    <li class=\"shape-circle circle-two\"><a href=\"#\">Blog</a></li>","    <li class=\"shape-circle circle-three\"><a href=\"#\">Work</a></li>","    <li class=\"shape-circle circle-five\">","      <a href=\"#\">Home</a>","    </li>","  </ul>","</nav>","","<!--Main Body Content-->","<article class=\"container\">","  <h1>A<br> Circular<br> Navbar</h1>","  <p> Inspired by Google Material Design and Circles</p>","  <a href=\"https://codepen.io/alexakasanjeev/pen/RPxGXY\" target=\"_blank\">Pair it With Horizontal Line Break</a>","</article>","",""],"id":7}],[{"start":{"row":84,"column":0},"end":{"row":110,"column":0},"action":"remove","lines":["","","<!--HamBurger Icon-->","<div class=\"bars\" id=\"nav-action\">","  <span class=\"bar\"> </span>","</div>","","<!--Navbar Links-->","<nav id=\"nav\">","  <ul>","    <li class=\"shape-circle circle-one\"><a href=\"#\">Contact</a></li>","    <li class=\"shape-circle circle-two\"><a href=\"#\">Blog</a></li>","    <li class=\"shape-circle circle-three\"><a href=\"#\">Work</a></li>","    <li class=\"shape-circle circle-five\">","      <a href=\"#\">Home</a>","    </li>","  </ul>","</nav>","","<!--Main Body Content-->","<article class=\"container\">","  <h1>A<br> Circular<br> Navbar</h1>","  <p> Inspired by Google Material Design and Circles</p>","  <a href=\"https://codepen.io/alexakasanjeev/pen/RPxGXY\" target=\"_blank\">Pair it With Horizontal Line Break</a>","</article>","",""],"id":8}],[{"start":{"row":84,"column":0},"end":{"row":227,"column":0},"action":"insert","lines":["<!doctype html>","<html lang=\"{{ app()->getLocale() }}\">","    <head>","        <meta charset=\"utf-8\">","        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","        ","        <link rel=\"shortcut icon\" href=\"{{{ asset('img/favicon_symbol.png') }}}\">","","        ","          <meta name=\"csrf-token\" content=\"{{ csrf_token() }}\">","        <title>ChillArk</title>","","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Raleway:100,600\" rel=\"stylesheet\" type=\"text/css\">","","        <!-- Styles -->","           <!-- Styles -->","    <link href=\"{{ asset('css/app.css') }}\" rel=\"stylesheet\">","        </style>","    </head>","","<!--","        <div class=\"flex-center position-ref full-height\">","            @if (Route::has('login'))","                <div class=\"top-right links\">","                    @auth","                        <a href=\"{{ url('/home') }}\">Home</a>","                    @else","                        <a href=\"{{ route('login') }}\">Login</a>","                        <a href=\"{{ route('register') }}\">Register</a>","                    @endauth","                </div>","            @endif","-->","<nav class=\"navbar navbar-default navbar-fixed-top\">","      <div class=\"container\">","        <div class=\"navbar-header\">","          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">","            <span class=\"sr-only\">Toggle navigation</span>","            <span class=\"icon-bar\"></span>","            <span class=\"icon-bar\"></span>","            <span class=\"icon-bar\"></span>","          </button>","          <a class=\"navbar-brand\" href=\"#\"></a>","        </div>","        <div id=\"navbar\" class=\"collapse navbar-collapse\">","          <ul class=\"nav navbar-nav navbar-right\">","            <li><a href=\"#\">Home</a></li>","            <li><a href=\"#\">News</a></li>","            <li><a href=\"#\">Rules</a></li>","            <li><a href=\"#\">Config</a></li>","            <li><a href=\"#\">Join</a></li>","          </ul>","        </div><!--/.nav-collapse -->","      </div>","    </nav>","    "," <div class=\"content\">","","    <div class=\"cover\">","        <div class=\"hi\">","          <img class=\"logo\" src=\"{{ asset('img/color_logo_transparent.png') }}\"><br>Full CrossArk PvP cluster<br>COMING SOON...<br>","          <a class=\"btn btn-default btn-md btn-primary\" href=\"steam://connect/85.190.156.139:29001\">Connect to The Center</a>","          <a class=\"btn btn-default btn-md btn-primary\" href=\"steam://connect/5.62.101.197:27016\">Connect to Ragnarok</a>","          </div>","          ","    </div>","","<div id=\"rates\" class=\"container-fluid\">","  <center>","<div class=\"row\">","  <div class=\"col-md-2\">","    <div class=\"card\" style=\"width: 20rem;\">","      <img class=\"card-img-top\" src=\"{{ asset('img/BrainIcon128White.png') }}\" alt=\"Card image cap\">","      <div class=\"card-body\">","        <h4 class=\"card-title\">4x Experience</h4>","      </div>","    </div>","  </div>","    <div class=\"col-md-2\">","    <div class=\"card\" style=\"width: 20rem;\">","      <img class=\"card-img-top\" src=\"{{ asset('img/PickaxeIcon128White.png') }}\" alt=\"Card image cap\">","      <div class=\"card-body\">","        <h4 class=\"card-title\">8x Harvesting</h4>","      </div>","    </div>","  </div>","","  <div class=\"col-md-2\">","    <div class=\"card\" style=\"width: 20rem;\">","      <img class=\"card-img-top\" src=\"{{ asset('img/DinoIcon128White.png') }}\" alt=\"Card image cap\">","      <div class=\"card-body\">","        <h4 class=\"card-title rate-title\">8x Taming</h4>","      </div>","    </div>","  </div>","    <div class=\"col-md-2\">","    <div class=\"card\" style=\"width: 20rem;\">","      <img class=\"card-img-top\" src=\"{{ asset('img/AuctionIcon128White.png') }}\" alt=\"Card image cap\">","      <div class=\"card-body\">","        <h4 class=\"card-title\">CrossArk Auctions Mod</h4>","      </div>","    </div>","  </div>","  <div class=\"col-md-2\">","    <div class=\"card\" style=\"width: 20rem;\">","      <img class=\"card-img-top\" src=\"{{ asset('img/EggIcon128White.png') }}\" alt=\"Card image cap\">","      <div class=\"card-body\">","        <h4 class=\"card-title\">8x Hatching</h4>","      </div>","    </div>","  </div>","    <div class=\"col-md-2\">","    <div class=\"card\" style=\"width: 20rem;\">","      <img class=\"card-img-top\" src=\"{{ asset('img/BabyIcon128White.png') }}\" alt=\"Card image cap\">","      <div class=\"card-body\">","        <h4 class=\"card-title\">8x Maturation</h4>","      </div>","    </div>","  </div>","</div>","</center>","</div>","","","            ","        </div>","        ","    <div class=\"video-background\">","        <div class=\"video-foreground\">","          <iframe src=\"https://www.youtube.com/embed/I8P_monBLEw?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1\" frameborder=\"0\" allowfullscreen></iframe>","        </div>","    </div>","    ","    <script","  src=\"https://code.jquery.com/jquery-2.2.4.min.js\"","  integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\"","  crossorigin=\"anonymous\"></script>","        <script src=\"{{ asset('js/app.js') }}\"></script>","        ","    </body>","</html>",""],"id":9}],[{"start":{"row":144,"column":0},"end":{"row":208,"column":0},"action":"remove","lines":["    <div class=\"cover\">","        <div class=\"hi\">","          <img class=\"logo\" src=\"{{ asset('img/color_logo_transparent.png') }}\"><br>Full CrossArk PvP cluster<br>COMING SOON...<br>","          <a class=\"btn btn-default btn-md btn-primary\" href=\"steam://connect/85.190.156.139:29001\">Connect to The Center</a>","          <a class=\"btn btn-default btn-md btn-primary\" href=\"steam://connect/5.62.101.197:27016\">Connect to Ragnarok</a>","          </div>","          ","    </div>","","<div id=\"rates\" class=\"container-fluid\">","  <center>","<div class=\"row\">","  <div class=\"col-md-2\">","    <div class=\"card\" style=\"width: 20rem;\">","      <img class=\"card-img-top\" src=\"{{ asset('img/BrainIcon128White.png') }}\" alt=\"Card image cap\">","      <div class=\"card-body\">","        <h4 class=\"card-title\">4x Experience</h4>","      </div>","    </div>","  </div>","    <div class=\"col-md-2\">","    <div class=\"card\" style=\"width: 20rem;\">","      <img class=\"card-img-top\" src=\"{{ asset('img/PickaxeIcon128White.png') }}\" alt=\"Card image cap\">","      <div class=\"card-body\">","        <h4 class=\"card-title\">8x Harvesting</h4>","      </div>","    </div>","  </div>","","  <div class=\"col-md-2\">","    <div class=\"card\" style=\"width: 20rem;\">","      <img class=\"card-img-top\" src=\"{{ asset('img/DinoIcon128White.png') }}\" alt=\"Card image cap\">","      <div class=\"card-body\">","        <h4 class=\"card-title rate-title\">8x Taming</h4>","      </div>","    </div>","  </div>","    <div class=\"col-md-2\">","    <div class=\"card\" style=\"width: 20rem;\">","      <img class=\"card-img-top\" src=\"{{ asset('img/AuctionIcon128White.png') }}\" alt=\"Card image cap\">","      <div class=\"card-body\">","        <h4 class=\"card-title\">CrossArk Auctions Mod</h4>","      </div>","    </div>","  </div>","  <div class=\"col-md-2\">","    <div class=\"card\" style=\"width: 20rem;\">","      <img class=\"card-img-top\" src=\"{{ asset('img/EggIcon128White.png') }}\" alt=\"Card image cap\">","      <div class=\"card-body\">","        <h4 class=\"card-title\">8x Hatching</h4>","      </div>","    </div>","  </div>","    <div class=\"col-md-2\">","    <div class=\"card\" style=\"width: 20rem;\">","      <img class=\"card-img-top\" src=\"{{ asset('img/BabyIcon128White.png') }}\" alt=\"Card image cap\">","      <div class=\"card-body\">","        <h4 class=\"card-title\">8x Maturation</h4>","      </div>","    </div>","  </div>","</div>","</center>","</div>",""],"id":10}],[{"start":{"row":147,"column":4},"end":{"row":147,"column":8},"action":"remove","lines":["    "],"id":11}],[{"start":{"row":147,"column":0},"end":{"row":147,"column":4},"action":"remove","lines":["    "],"id":12}],[{"start":{"row":147,"column":0},"end":{"row":147,"column":4},"action":"insert","lines":["    "],"id":13}],[{"start":{"row":147,"column":0},"end":{"row":147,"column":4},"action":"remove","lines":["    "],"id":14}],[{"start":{"row":147,"column":0},"end":{"row":147,"column":1},"action":"insert","lines":[" "],"id":15}],[{"start":{"row":144,"column":0},"end":{"row":144,"column":17},"action":"insert","lines":["@yield('content')"],"id":16}],[{"start":{"row":0,"column":0},"end":{"row":79,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ app()->getLocale() }}\">","<head>","    <meta charset=\"utf-8\">","    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","    <!-- CSRF Token -->","    <meta name=\"csrf-token\" content=\"{{ csrf_token() }}\">","","    <title>{{ config('app.name', 'Laravel') }}</title>","","    <!-- Styles -->","    <link href=\"{{ asset('css/app.css') }}\" rel=\"stylesheet\">","</head>","<body>","    <div id=\"app\">","        <nav class=\"navbar navbar-default navbar-static-top\">","            <div class=\"container\">","                <div class=\"navbar-header\">","","                    <!-- Collapsed Hamburger -->","                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#app-navbar-collapse\">","                        <span class=\"sr-only\">Toggle Navigation</span>","                        <span class=\"icon-bar\"></span>","                        <span class=\"icon-bar\"></span>","                        <span class=\"icon-bar\"></span>","                    </button>","","                    <!-- Branding Image -->","                    <a class=\"navbar-brand\" href=\"{{ url('/') }}\">","                        {{ config('app.name', 'Laravel') }}","                    </a>","                </div>","","                <div class=\"collapse navbar-collapse\" id=\"app-navbar-collapse\">","                    <!-- Left Side Of Navbar -->","                    <ul class=\"nav navbar-nav\">","                        &nbsp;","                    </ul>","","                    <!-- Right Side Of Navbar -->","                    <ul class=\"nav navbar-nav navbar-right\">","                        <!-- Authentication Links -->","                        @guest","                            <li><a href=\"{{ route('login') }}\">Login</a></li>","                            <li><a href=\"{{ route('register') }}\">Register</a></li>","                        @else","                            <li class=\"dropdown\">","                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">","                                    {{ Auth::user()->name }} <span class=\"caret\"></span>","                                </a>","","                                <ul class=\"dropdown-menu\" role=\"menu\">","                                    <li>","                                        <a href=\"{{ route('logout') }}\"","                                            onclick=\"event.preventDefault();","                                                     document.getElementById('logout-form').submit();\">","                                            Logout","                                        </a>","","                                        <form id=\"logout-form\" action=\"{{ route('logout') }}\" method=\"POST\" style=\"display: none;\">","                                            {{ csrf_field() }}","                                        </form>","                                    </li>","                                </ul>","                            </li>","                        @endguest","                    </ul>","                </div>","            </div>","        </nav>","","        @yield('content')","    </div>","","    <!-- Scripts -->","    <script src=\"{{ asset('js/app.js') }}\"></script>","</body>","</html>"],"id":17}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":18}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":19}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":20}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":21}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":22}],[{"start":{"row":49,"column":4},"end":{"row":49,"column":41},"action":"remove","lines":["        <li><a href=\"#\">News</a></li>"],"id":23}],[{"start":{"row":51,"column":0},"end":{"row":51,"column":43},"action":"remove","lines":["            <li><a href=\"#\">Config</a></li>"],"id":24}],[{"start":{"row":50,"column":42},"end":{"row":51,"column":0},"action":"remove","lines":["",""],"id":25}],[{"start":{"row":48,"column":25},"end":{"row":48,"column":26},"action":"remove","lines":["#"],"id":26}],[{"start":{"row":48,"column":25},"end":{"row":48,"column":26},"action":"insert","lines":["/"],"id":27}],[{"start":{"row":50,"column":25},"end":{"row":50,"column":26},"action":"remove","lines":["#"],"id":28}],[{"start":{"row":50,"column":25},"end":{"row":50,"column":26},"action":"insert","lines":["r"],"id":29}],[{"start":{"row":50,"column":26},"end":{"row":50,"column":27},"action":"insert","lines":["u"],"id":30}],[{"start":{"row":50,"column":27},"end":{"row":50,"column":28},"action":"insert","lines":["l"],"id":31}],[{"start":{"row":50,"column":28},"end":{"row":50,"column":29},"action":"insert","lines":["e"],"id":32}],[{"start":{"row":50,"column":29},"end":{"row":50,"column":30},"action":"insert","lines":["s"],"id":33}],[{"start":{"row":50,"column":29},"end":{"row":50,"column":30},"action":"remove","lines":["s"],"id":34}],[{"start":{"row":50,"column":28},"end":{"row":50,"column":29},"action":"remove","lines":["e"],"id":35}],[{"start":{"row":50,"column":27},"end":{"row":50,"column":28},"action":"remove","lines":["l"],"id":36}],[{"start":{"row":50,"column":26},"end":{"row":50,"column":27},"action":"remove","lines":["u"],"id":37}],[{"start":{"row":50,"column":25},"end":{"row":50,"column":26},"action":"remove","lines":["r"],"id":38}],[{"start":{"row":50,"column":25},"end":{"row":50,"column":26},"action":"insert","lines":["."],"id":39}],[{"start":{"row":50,"column":26},"end":{"row":50,"column":27},"action":"insert","lines":["r"],"id":40}],[{"start":{"row":50,"column":27},"end":{"row":50,"column":28},"action":"insert","lines":["u"],"id":41}],[{"start":{"row":50,"column":27},"end":{"row":50,"column":28},"action":"remove","lines":["u"],"id":42}],[{"start":{"row":50,"column":26},"end":{"row":50,"column":27},"action":"remove","lines":["r"],"id":43}],[{"start":{"row":50,"column":25},"end":{"row":50,"column":26},"action":"remove","lines":["."],"id":44}],[{"start":{"row":50,"column":25},"end":{"row":50,"column":26},"action":"insert","lines":["."],"id":45}],[{"start":{"row":50,"column":25},"end":{"row":50,"column":26},"action":"remove","lines":["."],"id":46}],[{"start":{"row":50,"column":24},"end":{"row":50,"column":26},"action":"remove","lines":["\"\""],"id":47}],[{"start":{"row":50,"column":24},"end":{"row":50,"column":25},"action":"insert","lines":["/"],"id":48}],[{"start":{"row":50,"column":24},"end":{"row":50,"column":25},"action":"remove","lines":["/"],"id":49}],[{"start":{"row":50,"column":24},"end":{"row":50,"column":26},"action":"insert","lines":["\"\""],"id":50}],[{"start":{"row":50,"column":25},"end":{"row":50,"column":26},"action":"insert","lines":["."],"id":51}],[{"start":{"row":50,"column":25},"end":{"row":50,"column":26},"action":"remove","lines":["."],"id":52}],[{"start":{"row":50,"column":25},"end":{"row":50,"column":26},"action":"insert","lines":["r"],"id":53}],[{"start":{"row":50,"column":26},"end":{"row":50,"column":27},"action":"insert","lines":["u"],"id":54}],[{"start":{"row":50,"column":27},"end":{"row":50,"column":28},"action":"insert","lines":["l"],"id":55}],[{"start":{"row":50,"column":28},"end":{"row":50,"column":29},"action":"insert","lines":["e"],"id":56}],[{"start":{"row":50,"column":29},"end":{"row":50,"column":30},"action":"insert","lines":["s"],"id":57}],[{"start":{"row":51,"column":12},"end":{"row":51,"column":41},"action":"remove","lines":["<li><a href=\"#\">Join</a></li>"],"id":58},{"start":{"row":51,"column":12},"end":{"row":51,"column":74},"action":"insert","lines":["<li><a href=\"https://discord.gg/fbzm3YB\">Join Discord</a></li>"]}],[{"start":{"row":50,"column":25},"end":{"row":50,"column":26},"action":"insert","lines":["/"],"id":59}],[{"start":{"row":48,"column":41},"end":{"row":49,"column":4},"action":"remove","lines":["","    "],"id":60}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":48,"column":41},"end":{"row":48,"column":41},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1510009333538,"hash":"4b0515a867edcfa2318587d2a08a2f7fdc9d74ca"}