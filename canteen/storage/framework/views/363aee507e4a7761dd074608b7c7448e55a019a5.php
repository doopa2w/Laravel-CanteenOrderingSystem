<?php $__env->startSection('content'); ?>
<div class="col-md-8 mx-auto">
    <a href="<?php echo e(url('/manager/posts')); ?>" class="btn btn-primary">Go Back</a>
    <hr>
    <h1>Edit Post</h1>
    <?php echo Form::open(['action' => ['Manager\PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

        <div class="form-group">
            <?php echo e(Form::label('title', 'Title')); ?>

            <?php echo e(Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('body', 'Body')); ?>

            <?php echo e(Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])); ?>

        </div>
        <div class="form-group">
            <p>Select a picture of not more than 2MB</p>
            <?php echo e(Form::file('cover_image')); ?>

        </div>
        <?php echo e(Form::hidden('_method','PUT')); ?>

        <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('manager.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\canteen\resources\views\manager\posts\edit.blade.php ENDPATH**/ ?>