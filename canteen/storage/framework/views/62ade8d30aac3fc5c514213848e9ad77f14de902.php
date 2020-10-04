<?php $__env->startSection('content'); ?>
<div class="row">
    <!--left side-->
    <div class="col-lg-3">
        <h1 class="my-4">
            Food Menu
        </h1>
        <div class="list-group">
            <a href="<?php echo e(url('/foods')); ?>" class="list-group-item">All</a>
            <a href="<?php echo e(url('/foods/category/western')); ?>" class="list-group-item">Western</a>
            <a href="<?php echo e(url('/foods/category/local')); ?>" class="list-group-item">Local</a>
        </div>
    </div>
    <!--right side-->
    <div class="col-lg-9">
        <!--dynamic slide-->
        <?php if(isset($foods_slide)): ?>
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php $__currentLoopData = $foods_slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food_slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo e($loop-> index); ?>" class="<?php echo e($loop->first ? 'active': ''); ?>"></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php $__currentLoopData = $foods_slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food_slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="carousel-item <?php echo e($loop->first ? 'active': ''); ?>">
                        <img class="d-block img-fluid" style="width:100%;" src="<?php echo e(url('/storage/cover_images')); ?>/<?php echo e($food_slide->cover_image); ?>" alt="<?php echo e($food_slide->title); ?>">
                        <div class="carousel-caption d-none d-md-block" style="text-shadow: black 0.1em 0.1em 0.2em;" >
                            <a href="<?php echo e(url('/foods')); ?>/<?php echo e($food_slide->id); ?>" class="link-unstyled"><h2><?php echo e($food_slide->title); ?></h2></a>
                            <p><?php echo e($food_slide->desc); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <?php endif; ?>
        <br>
        <div class="row">
            <!--items-->
            <?php if(count($foods) > 0): ?>
                <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 mb-4" >
                    <!--one slot-->
                    <div class="card h-60">
                        <a href="<?php echo e(url('/foods')); ?>/<?php echo e($food->id); ?>">
                            <img class="card-img-top" style="height:100%;" src="<?php echo e(url('/storage/cover_images')); ?>/<?php echo e($food->cover_image); ?>">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="<?php echo e(url('/foods')); ?>/<?php echo e($food->id); ?>"><?php echo e($food->title); ?></a>
                            </h4>
                            <div class="row">
                                <div class="col">
                                    <span class="float-left">
                                        <h5>RM <?php echo e($food->price); ?></h5>
                                    </span>
                                </div>
                                <div class="col">
                                    <span class="float-right">
                                        <?php echo Form::open(['action' => ['Customer\OrdersController@create'], 'method' => 'POST']); ?>

                                        <?php echo e(Form::hidden('food_id', $food->id)); ?>

                                        <?php echo e(Form::submit('Order', ['class' => 'btn btn-success'])); ?>

                                        <?php echo Form::close(); ?>

                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <?php echo e(str_limit($food->desc, $limit =50, $end = '...')); ?>

                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <p>No Food Found!</p>
            <?php endif; ?>
        </div>
        <div class="row">
            <?php echo e($foods->links()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\canteen\resources\views/customer/foods/index.blade.php ENDPATH**/ ?>