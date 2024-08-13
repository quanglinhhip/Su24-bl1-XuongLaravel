<?php $__env->startSection('title'); ?>
    Add new category
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('categories.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control">

        <button type="submit" class="btn btn-success mt-4">Add</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\3.Su24-bl1-XuongLaravel\3.xuong-laravel\resources\views/categories/create.blade.php ENDPATH**/ ?>