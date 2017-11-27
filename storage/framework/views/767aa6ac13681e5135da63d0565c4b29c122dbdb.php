<?php $__env->startComponent('mail::message'); ?>
# <?php echo e($data['subject']); ?>

## <?php echo e($data['title']); ?> <?php echo e($data['name']); ?>


<?php echo e($data['template']); ?>


## <?php echo e($data['name']); ?>,


Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
