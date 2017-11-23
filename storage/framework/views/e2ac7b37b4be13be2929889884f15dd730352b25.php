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
                   <h1><?php echo e($post->title); ?></h1>
                   
                  </div><!-- /.page-header -->
                  <div class="row">
                    <div class="col-xs-12">
          <div class="container">

              <h1><?php echo e($post->title); ?></h1>
              <hr>
              <p class="lead"><?php echo e($post->body); ?> </p>
              <hr>
              <?php echo Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->slug] ]); ?>

              <a href="<?php echo e(url()->previous()); ?>" class="btn btn-primary">Back</a>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Edit Post')): ?>
              <a href="<?php echo e(route('posts.edit', $post->slug)); ?>" class="btn btn-info" role="button">Edit</a>
              <?php endif; ?>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Delete Post')): ?>
              <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

              <?php endif; ?>
              <?php echo Form::close(); ?>

          </div>
   </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.page-content-area -->
              </div><!-- /.page-content -->
            </div><!-- /.main-content -->

<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </body>
</html>
