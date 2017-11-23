<!DOCTYPE html>
<html>
  <?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('layout.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- Content Wrapper. Contains page content -->

  <body class="no-skin">
          <div class="main-container" id="main-container">
            <script type="text/javascript">
              try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>
              <div class="page-content">
                <div class="page-content-area">
                  <div class="page-header">
                    <h1>
                      Email Templates
                      <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Edit, View &amp; Delete
                      </small>
                    </h1>
                  </div><!-- /.page-header -->
                  <div class="row">
                    <div class="col-xs-12">
                <div class="content-wrapper">
                   <div class="container" style="margin-top: 50px">     
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Subject</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($template->title); ?></td>
                      <td><?php echo e($template->subject); ?></td>
                      <td>
                      	<a href="<?php echo e(route('email-edit', $template->id)); ?>" style="margin-right:10px;" ><span class="fa fa-pencil-square-o" aria-hidden="true"></span></a>

              			<a href="<?php echo e(route('email-view', $template->id)); ?>" style="margin-right:10px;" ><span class="fa fa-eye" aria-hidden="true"></span></a></button>

                      	<a href="<?php echo e(route('email-del')); ?>" ><span class="fa fa-trash-o" aria-hidden="true"></span></a></td>
                     </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.page-content-area -->
              </div><!-- /.page-content -->
            </div><!-- /.main-content -->

<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </body>
</html>
