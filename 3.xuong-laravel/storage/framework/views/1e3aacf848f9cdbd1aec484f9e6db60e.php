<?php $__env->startSection('title'); ?>
    Add brand
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('brands.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name: </label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="mb-3 mt-3">
            <label for="image" class="form-label"> Image: </label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Add</button>
        <a href="<?php echo e(route('brands.index')); ?>" class="btn btn-primary">Back</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\3.Su24-bl1-XuongLaravel\3.xuong-laravel\resources\views/brands/create.blade.php ENDPATH**/ ?>