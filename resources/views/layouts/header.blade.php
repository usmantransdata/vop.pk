<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>TransData</title>
    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<link rel="stylesheet" href="/aceadmin/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/aceadmin/assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/aceadmin/assets/css/ace-fonts.css" />
    <link rel="stylesheet" href="/aceadmin/assets/css/ace.min.css" id="main-ace-style" />
    <link rel="stylesheet" href="/aceadmin/assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="/aceadmin/assets/css/ace-rtl.min.css" />
    <script src="/aceadmin/assets/js/ace-extra.min.js"></script>
    
    
    <link rel="stylesheet" href="/aceadmin/assets/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="/aceadmin/assets/css/jquery.gritter.css" />
    <link rel="stylesheet" href="/aceadmin/assets/css/select2.css" />
    <link rel="stylesheet" href="/aceadmin/assets/css/datepicker.css" />
    <link rel="stylesheet" href="/aceadmin/assets/css/bootstrap-editable.css" />
   </head>
  <body class="no-skin">
    <!-- #section:basics/navbar.layout -->
    <div id="navbar" class="navbar navbar-default">
      <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
      </script>

      <div class="navbar-container" id="navbar-container">
        <!-- #section:basics/sidebar.mobile.toggle -->
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
          <span class="sr-only">Toggle sidebar</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- /section:basics/sidebar.mobile.toggle -->
        <div class="navbar-header pull-left">
          <!-- #section:basics/navbar.layout.brand -->
          <a href="/backend" class="navbar-brand">
            <small>
              <i class="fa fa-leaf"></i>
              Trans Data
            </small>
          </a>
        </div>

        <!-- #section:basics/navbar.dropdown -->
        <div class="navbar-buttons navbar-header pull-right" role="navigation">
              <ul class="nav ace-nav" >
                <!-- #section:basics/navbar.user_menu -->
           
                <li class="light-blue">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background-color: transparent;">
                      <img src="/dist/img/user2-160x160.jpg" style="width: 30px;" class="user-image" alt="User Image">
                      <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>

                  <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                     <li class="user-header">
                     <img src="/dist/img/user2-160x160.jpg" style="width: 150px;" class="user-image" alt="User Image">
                      <center>{{ Auth::user()->name }}</center>
                      </p>
                    </li>

                    <li>
                      <a href="#">
                        <i class="ace-icon fa fa-cog"></i>
                        Settings
                      </a>
                    </li>

                    <li>
                      <a href="{{route('profile')}}">
                        <i class="ace-icon fa fa-user"></i>
                        Profile
                      </a>
                    </li>

                    <li class="divider"></li>

                    <li>
                      <div class="pull-right">

               
                                        <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    
                </div>
                    </li>
                  </ul>
                </li>

                <!-- /section:basics/navbar.user_menu -->
              </ul>

             
        </div>

        <!-- /section:basics/navbar.dropdown -->
      </div><!-- /.navbar-container -->
    </div>
 </body>
</html>

