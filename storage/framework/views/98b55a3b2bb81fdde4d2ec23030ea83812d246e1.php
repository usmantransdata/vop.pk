<!DOCTYPE html>
<html lang="en">
  <?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('layout.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<head>
    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
</head>
  <body class="no-skin">
          <div class="main-container" id="main-container">
            <script type="text/javascript">
              try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>
              <div class="page-content">
                <div class="page-content-area">
                  <div class="page-header">
                    <h1>
                      Dashboard
                      <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        overview &amp; stats
                      </small>
                    </h1>
                  </div><!-- /.page-header -->
                  <div class="row">
                    <div class="col-xs-12">



   <div class="container">
    <div class="row" style="margin-top: 50px">
       	<form action="<?php echo e(route('email-template-update', $templates->id)); ?>" method="post" class="form" role="form">
       		<div class="col-xs-12 col-sm-12 col-md-6">
            <label>Title</label>
            <input class="form-control" value="<?php echo e($templates->title); ?>" name="title" placeholder="Title of the email" type="text" required="required"/>
          </div>
       	<div class="col-xs-12 col-sm-12 col-md-6">
        
       		<label>Subject</label>
            <input class="form-control" name="subject" value="<?php echo e($templates->subject); ?>" placeholder="Subject" type="text" required="required" />
        </div>
   <div style="margin-top: 20px" >
        <?php echo e(csrf_field()); ?>

<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
    <label>Template</label>
     <textarea class="form-control summernote" name="template"><?php echo e($templates->template); ?></textarea>
     </div>
</div>
 </div>
            <div>
            <button style="margin-top: 20px; margin-left: 300px;height:50px;width: 600px"	class="btn btn-success" type="submit">
                Creat Email Template</button>
                </div>
            </form>
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

