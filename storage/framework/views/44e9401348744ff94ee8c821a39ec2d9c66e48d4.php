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
                    Add Role
                      <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Add Role &amp; Assign Permissions
                      </small>
                    </h1>
                  </div><!-- /.page-header -->
                  <div class="row">
                        <div class="col-xs-12">
             <div class='col-lg-4 col-lg-offset-4'>

              <h1><i class='fa fa-key'></i> Add Role</h1>
              <hr>

              <?php echo e(Form::open(array('url' => 'roles'))); ?>


              <div class="form-group">
                  <?php echo e(Form::label('name', 'Name')); ?>

                  <?php echo e(Form::text('name', null, array('class' => 'form-control'))); ?>

              </div>

              <h5><b>Assign Permissions</b></h5>

              <div class='form-group'>
                  <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php echo e(Form::checkbox('permissions[]',  $permission->id )); ?>

                      <?php echo e(Form::label($permission->name, ucfirst($permission->name))); ?><br>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
