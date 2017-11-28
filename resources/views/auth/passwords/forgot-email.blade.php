<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login Page - Ace Admin</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('/') }}public/aceadmin/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}public/aceadmin/assets/css/font-awesome.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('/') }}public/aceadmin/assets/css/ace-fonts.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('/') }}public/aceadmin/assets/css/ace.min.css" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="../assets/css/ace-part2.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('/') }}public/aceadmin/assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="../assets/css/ace-ie.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('/') }}public/aceadmin/assets/css/ace.onpage-help.css" />

  </head>

  <body class="login-layout">
    @guest
<body class="hold-transition login-page">
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

@if (session('status'))
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
        </div>
    @endif

@if ($message = Session::get('warning'))
    <div class="alert alert-warning">
        <p>{{ $message }}</p>
    </div>
@endif
    <div class="main-container" style="margin-top:50px; ">
      <div class="main-content">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="login-container">
              <div class="center">
                <h1>
                  <i class="ace-icon fa fa-leaf green"></i>
                  <span class="red">Rise Your Voice</span>
                </h1>
                <h4 class="blue" id="id-company-text">&copy; Trans Data</h4>
              </div>

              <div class="space-12"></div>

              <div class="position-relative" style="margin-top: 50px;">
                <div id="login-box" class="login-box visible widget-box no-border">
                  <div class="widget-body">
                    <div class="widget-main">
                      <h4 class="header blue lighter bigger">
                        <i class="ace-icon fa fa-coffee green"></i>
                        Please Enter Your Information
                      </h4>

                      <div class="space-12"></div>

                        <div id="forgot-box" class="forgot-box widget-box no-border">
                  @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                  <div class="widget-body">
                    <div class="widget-main">
                      <h4 class="header red lighter bigger">
                        <i class="ace-icon fa fa-key"></i>
                        Retrieve Password
                      </h4>

                      <div class="space-6"></div>
                      <p>
                        Enter your email and to receive instructions
                      </p>
                        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <fieldset>
                           <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                              <i class="ace-icon fa fa-envelope"></i>
                            </span>
                          </label>

                          <div class="clearfix">
                            <button type="submit" class="width-35 pull-right btn btn-sm btn-danger">
                              <i class="ace-icon fa fa-lightbulb-o"></i>
                              <span class="bigger-110">Send Me!</span>
                            </button>
                          </div>
                        </fieldset>
                      </form>
                    </div><!-- /.widget-main -->

                    <div class="toolbar center">
                      <a href="#" data-target="#login-box" class="back-to-login-link">
                        Back to login
                        <i class="ace-icon fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div><!-- /.widget-body -->
                </div><!-- /.forgot-box -->

            </fieldset>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</body>
</html>