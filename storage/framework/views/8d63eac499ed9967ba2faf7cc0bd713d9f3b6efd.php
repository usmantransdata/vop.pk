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
                     <h1><i class='fa fa-key'></i> Add Permission</h1>
                     
                    </h1>
                  </div><!-- /.page-header -->
                  <div class="row">
                    <div class="col-xs-12">

   
            <div class='col-lg-4 col-lg-offset-4'>

              <h1><i class='fa fa-key'></i> Add Permission</h1>
              <br>

              <?php echo e(Form::open(array('url' => 'permissions'))); ?>


              <div class="form-group">
                  <?php echo e(Form::label('name', 'Name')); ?>

                  <?php echo e(Form::text('name', '', array('class' => 'form-control'))); ?>

              </div><br>
              <?php if(!$roles->isEmpty()): ?> //If no roles exist yet
                  <h4>Assign Permission to Roles</h4>

                  <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                      <?php echo e(Form::checkbox('roles[]',  $role->id )); ?>

                      <?php echo e(Form::label($role->name, ucfirst($role->name))); ?><br>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
              <br>
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

