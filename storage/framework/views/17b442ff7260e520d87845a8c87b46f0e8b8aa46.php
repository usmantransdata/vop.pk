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
                   <h1>Edit Post</h1>
                  </div><!-- /.page-header -->
                  <div class="row">
                    <div class="col-xs-12">


             <div class="row">

              <div class="col-md-8 col-md-offset-2">

                  <h1>Edit Post</h1>
                  <hr>
                      <?php echo e(Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT'))); ?>

                      <div class="form-group">
                      <?php echo e(Form::label('title', 'Title')); ?>

                      <?php echo e(Form::text('title', null, array('class' => 'form-control'))); ?><br>

                      <?php echo e(Form::label('body', 'Post Body')); ?>

                      <?php echo e(Form::textarea('body', null, array('class' => 'form-control'))); ?><br>

                      <?php echo e(Form::submit('Save', array('class' => 'btn btn-primary'))); ?>


                      <?php echo e(Form::close()); ?>

              </div>
              </div>
          </div>
             
      
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.page-content-area -->
              </div><!-- /.page-content -->
            </div><!-- /.main-content -->

<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </body>
</html>

