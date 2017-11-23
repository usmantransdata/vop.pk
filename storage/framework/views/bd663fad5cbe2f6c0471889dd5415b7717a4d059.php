
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login Page - Ace Admin</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="/aceadmin/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/aceadmin/assets/css/font-awesome.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="/aceadmin/assets/css/ace-fonts.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="/aceadmin/assets/css/ace.min.css" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="../assets/css/ace-part2.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="/aceadmin/assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="../assets/css/ace-ie.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="/aceadmin/assets/css/ace.onpage-help.css" />

  </head>

  <body class="login-layout">
    <?php if(auth()->guard()->guest()): ?>
<body class="hold-transition login-page">
  <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
<?php endif; ?>

<?php if(session('status')): ?>
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>

<?php if($message = Session::get('warning')): ?>
    <div class="alert alert-warning">
        <p><?php echo e($message); ?></p>
    </div>
<?php endif; ?>
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
                        Change Your Password
                      </h4>

                      <div class="space-12"></div>

                      <form class="form-horizontal" method="POST" action="<?php echo e(route('password.request')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <input type="hidden" name="token" value="<?php echo e($token); ?>">

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                           
                              <input id="email" type="email" class="form-control" name="email" value="<?php echo e(isset($email) ? $email : old('email')); ?>" placeholder="Email" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                       

                        <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                            
                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password"required >

                                <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            
                        </div>

                        <div class="form-group">
                                <button type="submit" class="width-45 pull-right btn btn-sm btn-danger">
                                  <i class="ace-icon fa fa-lightbulb-o"></i>
                                    Reset Password
                                </button>
                            
                        </div>
                    </form>
               
              </div><!-- /.position-relative -->
 </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

     <?php else: ?>
 <script type="text/javascript">
    window.location = "/admin";//here double curly bracket
</script>

<?php endif; ?>
  </body>
</html>
