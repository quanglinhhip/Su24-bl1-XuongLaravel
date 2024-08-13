<?php $__env->startSection('title'); ?>
    Edit brand: <?php echo e($brand->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session('msg')): ?>
        <h2><?php echo e(session('msg')); ?></h2>
    <?php endif; ?>
    <form action="<?php echo e(route('brands.update', $brand)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name: </label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo e($brand->name); ?>">
        </div>
        <div class="mb-3 mt-3">
            <label for="image" class="form-label"> Image: </label>
            <input type="file" name="image" id="image" class="form-control">
            <img src="<?php echo e(asset($brand->image)); ?>" alt="anh san pham" width="100px">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="<?php echo e(route('brands.index')); ?>" class="btn btn-primary">Back</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\3.xuong-laravel\resources\views/brands/edit.blade.php ENDPATH**/ ?>