<!DOCTYPE html>
<html lang="en">
  <?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('layout.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <body class="no-skin">
          <div class="main-container" id="main-container">
            <script type="text/javascript">
              try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>
              <div class="page-content">
                <div class="page-content-area">
                  <div class="page-header">
                    <h1>
                      Edit Users
                      <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                       Edit <?php echo e($user->name); ?>

                      </small>
                    </h1>
                  </div><!-- /.page-header -->
                  <div class="row">
                    <div class="col-xs-12">
                <div class='col-lg-4 col-lg-offset-4'>

                    <h1><i class='fa fa-user-plus'></i> Edit <?php echo e($user->name); ?></h1>
                    <hr>

                    <?php echo e(Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT'))); ?>


                    <div class="form-group">
                        <?php echo e(Form::label('name', 'Name')); ?>

                        <?php echo e(Form::text('name', null, array('class' => 'form-control'))); ?>

                    </div>

                    <div class="form-group">
                        <?php echo e(Form::label('email', 'Email')); ?>

                        <?php echo e(Form::email('email', null, array('class' => 'form-control'))); ?>

                    </div>

                    <h5><b>Give Role</b></h5>

                    <div class='form-group'>
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e(Form::checkbox('roles[]',  $role->id, $user->roles )); ?>

                            <?php echo e(Form::label($role->name, ucfirst($role->name))); ?><br>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="form-group">
                        <?php echo e(Form::label('password', 'Password')); ?><br>
                        <?php echo e(Form::password('password', array('class' => 'form-control'))); ?>


                    </div>

                    <div class="form-group">
                        <?php echo e(Form::label('password', 'Confirm Password')); ?><br>
                        <?php echo e(Form::password('password_confirmation', array('class' => 'form-control'))); ?>


                    </div>

                    <?php echo e(Form::submit('Add', array('class' => 'btn btn-primary'))); ?>


                    <?php echo e(Form::close()); ?>


                </div>
 
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.page-content-area -->
              </div><!-- /.page-content -->
            </div><!-- /.main-content -->

<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </body>
</html>

