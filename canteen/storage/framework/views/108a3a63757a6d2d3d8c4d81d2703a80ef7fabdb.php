<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col">
        <span class="float-left">
            <h3>Your Restaurant Foods</h3>
        </span>
    </div>
    <div class="col">
        <span class="float-right">
            <a href="<?php echo e(url('/manager/foods/create')); ?>" class="btn btn-primary">New</a>
        </span>
    </div>
</div>
<br>
<?php if(count($foods)>0): ?>
    <table class="table table-striped table-bordered table-responsive-sm">
        <tr>
            <th style="width:155px;"></th>
            <th>Name</th>
            <th>Price</th>
            <th>Featured</th>
            <th class="fit"></th>
        </tr>
        <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <div class="input-group">
                        <?php if(Auth::guard('manager')->id() == $food->manager->id): ?>
                            <a href="<?php echo e(url('/manager/foods')); ?>/<?php echo e($food->id); ?>/edit" class="btn btn-primary mr-2">Edit</a>
                            <?php echo Form::open(['action'=>['Manager\FoodsController@destroy',$food->id], 'method'=>'POST', 'onsubmit' => 'return ConfirmDelete()']); ?>

                                <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                                <?php echo e(Form::submit('Delete',[ 'class'=>'btn btn-danger'])); ?>

                            <?php echo Form::close(); ?>

                        <?php endif; ?>
                    </div>
                </td>
                <td><a href="<?php echo e(url('/manager/foods')); ?>/<?php echo e($food->id); ?>"><?php echo e($food->title); ?></a></td>
                <td>RM <?php echo e($food->price); ?></td>
                <td align="center">
                <?php echo Form::open(['action'=>['Manager\FoodsController@update',$food->id], 'method'=>'POST','enctype'=>'multipart/form-data']); ?>

                    <?php echo e(Form::hidden('title', $food->title)); ?> <!--workaround-->
                    <?php echo e(Form::hidden('desc', $food->desc)); ?>

                    <?php echo e(Form::hidden('price', $food->price)); ?>

                    <?php echo e(Form::hidden('category_id', $food->category_id)); ?>

                    <?php echo e(Form::select('featured',
                        [false=>'No', true=>'Yes'], 
                        $food->featured, ['class' => 'form-control'] )); ?> 
                    <?php echo e(Form::hidden('_method', 'PUT')); ?>

                </td>
                <td align="center">
                    <?php echo e(Form::submit('Update', ['class'=>'btn btn-success'])); ?>

                </td>
                <?php echo Form::close(); ?>

            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php echo e($foods->links()); ?>

<?php else: ?>
    <p>No food found</p>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('manager.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\canteen\resources\views\manager\foods\index.blade.php ENDPATH**/ ?>