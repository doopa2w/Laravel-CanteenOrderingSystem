<?php $__env->startSection('content'); ?>
<h3>Your Restaurant Orders</h3>
<br>
<?php if(count($orders) > 0): ?>
    <table class="table table-striped table-bordered table-responsive-sm">
        <tr>
            <th>Order ID</th>
            <th>Food</th>
            <th>Ordered by</th>
            <th>Order Date</th>
            <th>Status</th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($food->id == $order->food_id): ?>
                    <tr>
                        <td><?php echo e($order->id); ?></td>
                        <td><?php echo e($food->title); ?></td>
                        <td><?php echo e($order->customer_id); ?></td>
                        <td><?php echo e($order->created_at); ?></td>
                        <td>
                        <?php echo Form::open(['action' => ['Staff\OrdersController@update', $order->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

                            <?php echo e(Form::select('status',
                                ['preparing'=>'Preparing','ready'=>'Ready','collected'=>'Collected','cancelled'=>'Cancelled'],
                                $order->status, ['class' => 'form-control'] )); ?>

                            <?php echo e(Form::hidden('_method','PUT')); ?>

                        </td>
                        <td>
                            <?php echo e(Form::submit('Update', ['class'=>'btn btn-success'])); ?>

                            <?php echo Form::close(); ?>

                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php echo e($orders->links()); ?>

<?php else: ?>
    <p>No orders found</p>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('staff.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\canteen\resources\views\staff\orders\index.blade.php ENDPATH**/ ?>