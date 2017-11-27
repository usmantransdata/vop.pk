
<!DOCTYPE html>
<html>
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
                      <h1><i class='fa fa-key'></i> Available Permissions</h1>
                      <small>
                         <a href="<?php echo e(url()->previous()); ?>"><i class="fa fa-backward" aria-hidden="true"></i>Back</a>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Available &amp; Permissions

                      </small>


                    </h1>

                  </div><!-- /.page-header -->
                  
                  <div class="row">

                    <div class="col-xs-12">
    
            <div class="col-lg-10 col-lg-offset-1">
                <h1><i class="fa fa-key"></i>Available Permissions

                <a href="<?php echo e(route('users.index')); ?>" class="btn btn-default pull-right">Users</a>
                <a href="<?php echo e(route('roles.index')); ?>" class="btn btn-default pull-right">Roles</a></h1>
                <hr>
                <div class="table-responsive">
                    <table style=background-color:#ccc; class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th>Permissions</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($permission->name); ?></td> 
                                <td>
                                <a href="<?php echo e(URL::to('permissions/'.$permission->id.'/edit')); ?>" class="btn btn-info" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>


                                <a href="<?php echo e(route('permissions.destroy', $permission->id)); ?>" class="btn btn-danger">
                                 
                                     <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </a>
                               

                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>

                <a href="<?php echo e(URL::to('permissions/create')); ?>" class="btn btn-success">Add Permission</a>

            </div>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.page-content-area -->
  </div><!-- /.page-content -->
</div><!-- /.main-content -->

   
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>



