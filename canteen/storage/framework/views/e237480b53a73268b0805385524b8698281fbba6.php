<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col">
        <span class="float-left">
            <h3>Your Restaurant Posts</h3>
        </span>
    </div>
    <div class="col">
        <span class="float-right">
            <a href="<?php echo e(url('/manager/posts/create')); ?>" class="btn btn-primary">New</a>
        </span>
    </div>
</div>
<br>

<table class="table table-striped table-bordered table-responsive-sm">
    <tr>
        <th style="width:155px;"></th>
        <th>Title</th>
        <th>Body</th>
    </tr>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <div class="input-group">
                    <?php if(Auth::guard('manager')->id() == $post->manager->id): ?>
                        <a href="<?php echo e(url('/manager/posts')); ?>/<?php echo e($post->id); ?>/edit" class="btn btn-primary mr-2">Edit</a>
                        <?php echo Form::open(['action'=>['Manager\PostsController@destroy',$post->id], 'method'=>'POST', 'onsubmit' => 'return ConfirmDelete()']); ?>

                            <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                            <?php echo e(Form::submit('Delete',[ 'class'=>'btn btn-danger'])); ?>

                        <?php echo Form::close(); ?>

                    <?php endif; ?>
                </div>
            </td>
            <td><a href="<?php echo e(url('/manager/posts')); ?>/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></td>
            <td>
                <?php echo e(str_limit($post->body, $limit=150, $end = '...')); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php if(count($posts) == 0): ?>
    <p>No post found.</p>
<?php endif; ?>
<?php echo e($posts->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('manager.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\canteen\resources\views\manager\posts\index.blade.php ENDPATH**/ ?>