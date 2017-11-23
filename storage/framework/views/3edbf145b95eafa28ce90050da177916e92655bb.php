<?php $__env->startComponent('mail::message'); ?>
# <?php echo e($data['subject']); ?>


## Dear <?php echo e($data['name']); ?>,

<?php echo $data['template']; ?>


Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
