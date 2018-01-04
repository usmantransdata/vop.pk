<!DOCTYPE html>
  <html>
    <head>
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- font awesome cdn -->
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ asset('/') }}public/dist/css/materialize.min.css"  media="screen,projection"/>
       <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     
      <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700" rel="stylesheet">
     
      <!--Let browser know website is optimized for mobile-->
     <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
 </head>

   
 <!--NAVBAR NAVBAR NAVBAR -->
  @guest
<nav class="navbar-fixed green lighten-2" style="position: fixed">
        <div class="nav-wrapper">
          <a href="{{route('/frontend')}}" class="brand-logo center" ><strong class="white-text">Voice</strong><strong> Of Pakistan</strong></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="" class="black-text">Blog</a></li>
            <li><a href="" class="black-text">Profile</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button black-text" href="#!" data-activates="dropdown1">Setting<i class="material-icons right black-text">arrow_drop_down</i></a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="">Browse</a></li>
            <li><a href="">Profile</a></li>
            <li><a href="">Browse</a></li>
            <li><a href="">Profile</a></li>
          </ul>
          <ul id="dropdown1" class="dropdown-content green lighten-2">
            @if (Auth::check()) 
           

             <li style="margin-top: 10px" class="#f44336 red "><a href="{{route('frontend-logout')}}" class="black-text">Logout</a></li>
            <li class="divider"></li>
              <li class="user-header">
               <a href="{{route('pet')}}">Dashboard</a> 
             </li>
            <li class="divider"></li>
             <li class="user-header">
                      <center>{{ Auth::user()-> name }}</center>
                      </p>
             </li>
              <li class="divider"></li>
           
          @else
            <li><a href="{{route('frontend-login')}}" class="black-text">Login</a></li>
            <li><a href="{{route('frontend-signup')}}" class="black-text">Sign up</a></li>
            @endif
          </ul>
      </div>
  </nav>
<!--END OF NAVBAR-->
  <main>
   
    <center>
      <div class="section"></div>

 @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

@if (session('dont'))
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('dont') }}
        </div>
    @endif
@if ($message = Session::get('dont'))
    <div class="alert alert-warning">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p>{{ $message }}</p>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-warning">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p>{{ $message }}</p>
    </div>
@endif
      <h5 class="white-text">Please, Login Into Your Account</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE; border-radius: 10px">

         <form class="form-horizontal" method="POST" action="{{ route('frontend-user-login') }}">
                 {{ csrf_field() }}
             <div class='row'>
              <div class='col s12'>
              </div>
            </div>
            <div class="row">
             
                 <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" required name="email" type="text" class="validate">
                <label for="icon_prefix">Enter Your Email</label>
              </div>
              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </div>
            </div>
            <div class="row">
               <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <input id="icon_prefix" required name="password" type="Password" class="validate">
                <label for="icon_prefix">Enter Your Password</label>
              </div>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
                <label style='float: right;'>
                <a class='pink-text' href='#!'><b>Forgot Password !</b></a>
              </label>
              </div>

            <br>
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='black-text btn waves-effect #0277bd green lighten-2'>Login</button>
              </div>
              <div class="row">

              <label class="pink-text"><b>Login With</b></label>
              </div>
              <div class='row'>                
                <a class="waves-effect #3b5999 waves-light btn-floating social google" style="background-color: #dd4b39">
                <i class="fa fa-google"></i></a>
                <a class="waves-effect waves-light btn-floating social twitter" style="background-color: #55acee">
                <i class="fa fa-twitter"></i></a>
                <a class="waves-effect waves-light btn-floating social facebook" style="background-color: #3b5999">
                <i class="fa fa-facebook"></i></a>
                <a class="waves-effect waves-light btn-floating social instagram" style="background-color: #bc2a8d">
                <i class="fa fa-instagram"></i></a>
              </div>          
            </center>
          </form>
        </div>
      </div>
      <a href="register.html" class="white-text">Create Account</a>
    </center>
  </main>
 <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="{{ asset('/') }}public/dist/js/materialize.min.js"></script>
      <!-- custom js for index page -->
      <script>
         $(document).ready(function(){
          // Init Sidenav
          $('.button-collapse').sideNav();
          // Init Modal
          $('.modal').modal();
         });
      </script>
      <style>
        html{
              font-family: 'Raleway', sans-serif;
              font-weight: 400;
            }
        .input-field .prefix.active{
            color: #81c784 ;
            }
        .input-field input[type=text]:focus + label
            {
              color: #81c784;
            }
        .input-field input[type=text]:focus
            {
              border-bottom: 1px solid #81c784;
              box-shadow: 0 1px 0 0 #81c784;
            }

      </style>
    </body>
     @else
 <script type="text/javascript">
    window.location = "/vop/index.php/frontend";//here double curly bracket
</script>

@endguest
  </html>