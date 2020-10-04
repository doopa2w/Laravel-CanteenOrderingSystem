<?php $__env->startSection('content'); ?>
<div class="btn-toolbar">
    <a href="<?php echo e(url('/foods')); ?>" class="btn btn-primary mr-2">Go Back</a>
    <?php echo Form::open(['action' => ['Customer\OrdersController@create'], 'method' => 'POST']); ?>

    <?php echo e(Form::hidden('food_id', $food->id)); ?>

    <?php echo e(Form::submit('Order', ['class' => 'btn btn-success'])); ?>

    <?php echo Form::close(); ?>

</div>
<br>

<div class="jumbotron">
    <h1><?php echo e($food->title); ?></h1>
    <hr>
    <img style="width:100%;" src="<?php echo e(url('/storage/cover_images')); ?>/<?php echo e($food->cover_image); ?>">
    <hr>
    <h3>Price: RM<?php echo e($food->price); ?></h3>
    <br>
    <h3>Description:</h3>
    <h4><?php echo $food->desc; ?></h4>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\canteen\resources\views\customer\foods\show.blade.php ENDPATH**/ ?>