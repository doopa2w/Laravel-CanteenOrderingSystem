<?php $__env->startSection('content'); ?>
<div class="jumbotron text-center" style="background-color: light-grey" >
    <h1 class="display-4">Welcome to Canteen!</h1>
    <hr>
    <p class="lead">Feel free to browse any food available here.</p>
    <p class="lead">To order, please log in or register an account first.</p>
</div>

<div class="jumbotron" style="background-color: light-grey">
    <h1>Featured Foods</h1>
    <hr>
    <div class="row">
    <?php if(count($foods) > 0): ?>
        <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-6 mb-4" >
            <div class="card h-60">
                <a href="<?php echo e(url('/foods')); ?>/<?php echo e($food->id); ?>">
                    <img class="card-img-top" style="height:100%;" src="<?php echo e(url('/storage/cover_images')); ?>/<?php echo e($food->cover_image); ?>">
                </a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="<?php echo e(url('/foods')); ?>/<?php echo e($food->id); ?>"><?php echo e($food->title); ?></a>
                    </h4>
                    <hr>
                    <h5>RM <?php echo e($food->price); ?></h5>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <p>No featured foods found.</p>
    <?php endif; ?>
    </div>
</div>

<div class="jumbotron" style="background-color: light-grey">
    <h1>Announcements</h1>
    <hr>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-striped table-bordered table-responsive-sm">

                    <?php if(count($posts) > 0): ?>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <a href="<?php echo e(url('/posts')); ?>/<?php echo e($post->id); ?>">
                                        <img img style="height:180px;" class="card-img-top" src="<?php echo e(url('/storage/cover_images')); ?>/<?php echo e($post->cover_image); ?>">
                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo e(url('/posts')); ?>/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a>
                                    <br>
                                    Written on <?php echo e($post->created_at); ?> by <?php echo e($post->manager->name); ?>

                                    <br><br>
                                    <?php echo e(str_limit($post->body, $limit =100, $end = '...')); ?>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <p>No announcements.</p>
                    <?php endif; ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\canteen\resources\views/pages/index.blade.php ENDPATH**/ ?>