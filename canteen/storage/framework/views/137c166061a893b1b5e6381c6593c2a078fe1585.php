<?php $__env->startSection('content'); ?>
<h3>Announcements</h3><hr>
<div class="row">
    <?php if(count($posts) > 0): ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-6 col-md-6 mb-4" >
            <div class="card">
                <a href="<?php echo e(url('/posts')); ?>/<?php echo e($post->id); ?>">
                    <img class="card-img-top" style="height:100%;"
                    src="<?php echo e(url('/storage/cover_images')); ?>/<?php echo e($post->cover_image); ?>" height="190"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="<?php echo e(url('/posts')); ?>/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a>
                    </h4>
                </div>
                <div class="card-footer">
                    Written on <?php echo e($post->created_at); ?> by <?php echo e($post->manager->name); ?>

                    <hr>
                    <?php echo e(str_limit($post->body, $limit=70, $end = '...')); ?>

                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($posts->links()); ?>

    <?php else: ?>
        <p>No posts found</p>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\canteen\resources\views/customer/posts/index.blade.php ENDPATH**/ ?>