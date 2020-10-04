<?php $__env->startSection('content'); ?>
<div class="col-md-8 mx-auto">
    <a href="<?php echo e(url('/manager/posts')); ?>" class="btn btn-primary">Go Back</a>
    <hr>
    <h1>Add Post</h1>
    <?php echo Form::open(['action' => 'Manager\PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class'=>'form-horizontal']); ?>

        <div class="form-group">
            <?php echo e(Form::label('title', 'Title',['class'=>'col-xs-10 control-label'])); ?>

            <?php echo e(Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('body', 'Body',['class'=>'col-xs-10 control-label'])); ?>

            <?php echo e(Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])); ?>

        </div>
        <div class="form-group">
            <p>Select a picture of not more than 2MB</p>
            <?php echo e(Form::file('cover_image')); ?>

        </div>
        <div class="form-group">  
            <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

        </div>
    <?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('manager.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\canteen\resources\views\manager\posts\create.blade.php ENDPATH**/ ?>