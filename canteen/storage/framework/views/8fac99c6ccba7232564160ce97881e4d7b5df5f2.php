<?php $__env->startSection('content'); ?>
<div class="btn-toolbar">
    <a href="<?php echo e(url('/orders')); ?>" class="btn btn-primary mr-2">Go Back</a>
</div>
<br>

<div class="col-md-8 p-0">
<h1>Receipt</h1>
<hr>
<p>Canteen Ordering System</p>
<p>Date Ordered: <?php echo e($order->created_at); ?></p>
<p>Payment Method: <?php echo e($order->payment_gateway); ?></p>
<p>Status: <?php echo e($order->status); ?></p>
<br>
<table class="table table-bordered">
    <tr>
        <th></th>
        <th>Item</th>
        <th>Price</th>
    </tr>
    <tr>
        <td>1</td>
        <td><?php echo e($food->title); ?></td>
        <td>RM<?php echo e($food->price); ?></td>
    </tr>
    <tr>
        <td></td>
        <th>Total</th>
        <td>RM<?php echo e($food->price); ?></td>
    </tr>
</table>
<br>
<p>Print date: <?php echo e($date); ?></p>
<button onClick="window.print()">Print this page</button>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\canteen\resources\views\customer\orders\show.blade.php ENDPATH**/ ?>