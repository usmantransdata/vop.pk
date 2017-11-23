<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('beautymail::templates.ark.heading', [
		'heading' => 'Hello World!',
		'level' => 'h1'
	], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('beautymail::templates.ark.contentStart', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <h4 class="secondary"><strong></strong></h4>
        <p>This is a test</p>

    <?php echo $__env->make('beautymail::templates.ark.contentEnd', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('beautymail::templates.ark.heading', [
		'heading' => 'Another headline',
		'level' => 'h2'
	], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('beautymail::templates.ark.contentStart', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <h4 class="secondary"><strong>Verify This Link To successfully login</strong></h4>
        <p>This is another test</p>

    <?php echo $__env->make('beautymail::templates.ark.contentEnd', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('beautymail::templates.ark', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>