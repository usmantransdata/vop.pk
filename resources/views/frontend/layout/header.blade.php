<head>
  <title></title>
  <meta charset="utf-8"s/>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- font awesome cdn -->
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ asset('/') }}public/frontend/css/materialize.css"  media="screen,projection"/>
     
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700" rel="stylesheet">
</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>

<!--NAVBAR NAVBAR NAVBAR -->
<nav class="navbar-fixed blue-grey darken-4">
        <div class="nav-wrapper">
          <a href="{{route('/frontend')}}" class="brand-logo center" ><strong class="white-text">Voice of </strong><strong class="green-text">Pakistan</strong></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#">Blog</a></li>
            <li><a href="#">Petition</a></li>
            <li><a href="">Survey</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Join Us<i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>
           
        
          <ul class="left hide-on-med-and-down">
             @if (Auth::check()) 
             @if (auth()->user()->isAdmin())
            <li><a href="/vop/index.php/backend" class="red-text"> <b>Dashboard</b></a> </li>
             @endif
           @endif
            <li><a href="{{route('/frontend')}}">Home</a></li>
            <li><a href="{{route('frontend/about')}}">About</a></li>
            <li><a href="#">News</a></li>
            <li><a href="{{route('frontend/contact')}}">Contact</a></li>
          </ul>

          <ul class="side-nav" id="mobile-demo">
            <li><a href="#">Petitions</a></li>
            <li><a href="#">Surveys</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="contact-us.html">Contact</a></li>
            <li><a href="#">About</a></li>
          </ul>
           
          <ul id="dropdown1" class="dropdown-content blue-grey darken-4">
             @if (!Auth::check()) 
            <li class="blue-grey darken-4"><a href="{{route('frontend-login')}}" class="white-text">Login</a></li>
           
            <li class="blue-grey darken-4"><a href="{{route('frontend-signup')}}" class="white-text">Sign up</a></li>
             @else
            <li class="divider"></li>
             <li class="blue-grey darken-4"><a href="{{route('frontend-profile')}}" class="white-text">Profile</a></li>
             <li class="blue-grey darken-4"><a href="{{route('pet')}}" class="white-text">Dashboard</a></li>
            <li class="blue-grey darken-4"><a href="{{route('frontend-logout')}}" class="red-text">Logout</a></li>
             @endif
          </ul>
      </div>
  </nav>