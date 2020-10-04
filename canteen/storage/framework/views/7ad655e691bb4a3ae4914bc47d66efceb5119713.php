<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Manager :: Dashboard</div>
            <div class="card-body">
                <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
                <p>You are logged in!</p><br>
                <p>
                    <a class="btn btn-primary btn-lg" href="<?php echo e(url('/manager/foods')); ?>" role="button">Foods</a>
                    <a class="btn btn-primary btn-lg" href="<?php echo e(url('/manager/posts')); ?>" role="button">Posts</a>
                </p>
            </div>
        </div>
        <br>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chart-area"></i> Area Chart for food popularity
            </div>
            <div class="card-body">
                <?php echo $chart->container(); ?>

                <?php echo $chart->script(); ?>

            </div>
        </div>
        
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chart-area"></i>Number of orders for the past 30 days
            </div>
            <div class="card-body">
                <?php echo $chart2->container(); ?>

                <?php echo $chart2->script(); ?>

            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('manager.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\canteen\resources\views\manager\home.blade.php ENDPATH**/ ?>