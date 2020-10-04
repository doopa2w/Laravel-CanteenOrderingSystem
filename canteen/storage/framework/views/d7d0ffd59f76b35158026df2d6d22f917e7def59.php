<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col">
        <span class="float-left">
            <a href="<?php echo e(url('/manager/posts')); ?>" class="btn btn-primary">Go Back</a>
        </span>
    </div>
    <div class="col">
        <span class="float-right">
            <div class="btn-toolbar">
            <?php if(Auth::guard('manager')->id() == $post->manager->id): ?>
                <a href="<?php echo e(url('/manager/posts')); ?>/<?php echo e($post->id); ?>/edit" class="btn btn-primary mr-2">Edit</a>
                <?php echo Form::open(['action' => ['Manager\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right', 'onsubmit' => 'return ConfirmDelete()']); ?>

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
    <h1><?php echo e($post->title); ?></h1>
    <hr>
    <img style="width:100%" src="<?php echo e(url('/storage/cover_images')); ?>/<?php echo e($post->cover_image); ?>">
    <hr>
    Written on <?php echo e($post->created_at); ?> by <?php echo e($post->manager->name); ?>

    <hr>
    <h3><?php echo $post->body; ?></h3>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('manager.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\canteen\resources\views\manager\posts\show.blade.php ENDPATH**/ ?>