<?php $__env->startSection('content'); ?>
<div class="btn-toolbar">
    <a href="<?php echo e(url('/foods')); ?>" class="btn btn-primary">Go Back</a>
</div>
<br>

<div class="col-md-5 p-0">
<?php echo Form::open(['action' => ['Customer\OrdersController@store'], 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

    <h1>Ordering: <?php echo e($food->title); ?></h1>
    <hr>
    <img style="height:240px;" src="<?php echo e(url('/storage/cover_images')); ?>/<?php echo e($food->cover_image); ?>">
    <hr>
    <h4>Final Price: RM<?php echo e($food->price); ?></h4>
    <br>
    <?php echo e(Form::hidden('food_id', $food->id)); ?>

    <div class="form-group row">
        <div class="col-sm-4">
        <?php echo e(Form::label('payment_gateway','Payment Method:')); ?>

        </div>
        <div class="col-sm-6">
        <?php echo e(Form::select('payment_gateway',['cash'=>'Cash', 'credit card'=>'Credit Card'], null, ['class' => 'form-control'] )); ?>

        </div>
    </div>
    <?php echo e(Form::submit('Confirm', ['class'=>'btn btn-primary'])); ?>

<?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\canteen\resources\views\customer\orders\create.blade.php ENDPATH**/ ?>