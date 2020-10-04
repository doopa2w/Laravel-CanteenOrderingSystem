<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col">
        <span class="float-left">
            <h3>Your Order History</h3>
        </span>
    </div>
</div>
<br>

<table class="table table-striped table-bordered table-responsive-sm">
    <tr>
        <th class="fit">Food</th>
        <th >Food Name</th>
        <th>Order ID</th>
        <th>Food ID</th>
        <th>Order Date</th>
        <th>Price</th>
        <th>Status</th>
    </tr>
    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($food->id == $order->food_id): ?>
                <tr>
                    <td><img style="height:140px;" src="<?php echo e(url('/storage/cover_images')); ?>/<?php echo e($food->cover_image); ?>"></td>
                    <td>
                        <a href="<?php echo e(url('/orders')); ?>/<?php echo e($order->id); ?>"><?php echo e($food->title); ?></a>
                    </td>
                    <td><?php echo e($order->id); ?></td>
                    <td><?php echo e($order->food_id); ?></td>
                    <td><?php echo e($order->created_at); ?></td>
                    <td>RM<?php echo e($order->billing_total); ?></td>
                    <td><?php echo e($order->status); ?></td>
                </tr>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php if(count($orders) == 0): ?>
    No orders found.
<?php endif; ?>
<?php echo e($orders->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\canteen\resources\views\customer\orders\index.blade.php ENDPATH**/ ?>