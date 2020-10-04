<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col">
        <span class="float-left">
            <a href="<?php echo e(url('/manager/foods')); ?>" class="btn btn-primary">Go Back</a>
        </span>
    </div>
    <div class="col">
        <span class="float-right">
            <div class="btn-toolbar">
            <?php if(Auth::guard('manager')->id() == $food->manager->id): ?>
                <a href="<?php echo e(url('/manager/foods')); ?>/<?php echo e($food->id); ?>/edit" class="btn btn-primary mr-2">Edit</a>
                <?php echo Form::open(['action' => ['Manager\FoodsController@destroy', $food->id], 'method' => 'POST', 'class' => 'pull-right', 'onsubmit' => 'return ConfirmDelete()']); ?>

                    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                    <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

                <?php echo Form::close(); ?>

            <?php endif; ?>
            </div>
        </span>
    </div>
</div>
<br>
<div class="jumbotron">
    <h1><?php echo e($food->title); ?></h1>
    <hr>
    <img style="width:100%" src="<?php echo e(url('/storage/cover_images')); ?>/<?php echo e($food->cover_image); ?>">
    <hr>
    <h3>Price: RM<?php echo e($food->price); ?></h3>
    <br>
    <h3>Description:</h3>
    <h4><?php echo $food->desc; ?></h4>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('manager.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\canteen\resources\views\manager\foods\show.blade.php ENDPATH**/ ?>