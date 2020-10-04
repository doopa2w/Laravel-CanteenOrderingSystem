<?php $__env->startSection('content'); ?>
<div class="col-md-8 mx-auto">
    <a href="<?php echo e(url('/manager/foods')); ?>" class="btn btn-primary">Go Back</a>
    <hr>
    <h1>Edit Food</h1>
    <?php echo Form::open(['action' => ['Manager\FoodsController@update', $food->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

        <div class="form-group">
            <?php echo e(Form::label('title', 'Title')); ?>

            <?php echo e(Form::text('title', $food->title, ['class' => 'form-control', 'placeholder' => 'Title'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('desc', 'Desc')); ?>

            <?php echo e(Form::textarea('desc', $food->desc, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Desc Text'])); ?>

        </div>
        <div class="form-group row">
            <div class="col-xs-5 col-sm-3">
                <?php echo e(Form::label('price', 'Price')); ?>

                <?php echo e(Form::number('price', $food->price, ['class' => 'form-control', 'placeholder' => 'Price', 'step'=>'0.01'])); ?>

            </div>
            <div class="col-xs-10 col-sm-7 offset-sm-2">
                <?php echo e(Form::label('featured','Wanna be featured in the Menu of the Day?',['class'=>'col-xs-10 control-label'])); ?>

                <?php echo e(Form::select('featured',[false=>'No', true=>'Yes'], $food->featured, ['class' => 'form-control'])); ?>

            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-5 col-sm-3">
                <?php echo e(Form::label('category_id', 'Category')); ?>

                <?php echo e(Form::select('category_id',[1=>'Western', 2=>'Local'], $food->category_id, ['class' => 'form-control'])); ?>

            </div>
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
<?php echo $__env->make('manager.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\canteen\resources\views\manager\foods\edit.blade.php ENDPATH**/ ?>