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
                      All Posts
                      <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Page <?php echo e($posts->currentPage()); ?> of <?php echo e($posts->lastPage()); ?>

                      </small>
                    </h1>
                  </div><!-- /.page-header -->
                  <div class="row">
                    <div class="col-xs-12">

   
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Your All Posts</h3></div>
                    <div class="panel-heading">Page <?php echo e($posts->currentPage()); ?> of <?php echo e($posts->lastPage()); ?></div>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="panel-body">
                            <li style="list-style-type:disc">
                                <a href="<?php echo e(route('posts.show', $post->slug )); ?>"><b><?php echo e($post->title); ?></b><br>
                                    <p class="teaser">
                                       <?php echo e(str_limit($post->body, 100)); ?> 
                                    </p>
                                </a>
                            </li>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="text-center">
                        <?php echo $posts->links(); ?>

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

