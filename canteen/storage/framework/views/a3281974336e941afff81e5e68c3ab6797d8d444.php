<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col">
        <span class="float-left">
            <a href="<?php echo e(url('/posts')); ?>" class="btn btn-primary">Go Back</a>
        </span>
    </div>
</div>
<br>

<div class="jumbotron">
    <h1><?php echo e($post->title); ?></h1>
    <hr>
    <img style="width:100%;" src="<?php echo e(url('/storage/cover_images')); ?>/<?php echo e($post->cover_image); ?>">
    <hr>
    Written on <?php echo e($post->created_at); ?> by <?php echo e($post->manager->name); ?>

    <hr>
    <h4><?php echo $post->body; ?></h4>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\canteen\resources\views/customer/posts/show.blade.php ENDPATH**/ ?>