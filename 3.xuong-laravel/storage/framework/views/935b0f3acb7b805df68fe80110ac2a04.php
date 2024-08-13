<?php $__env->startSection('title'); ?>
    Update category: <?php echo e($category->name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if(session('msg')): ?>
        <h2><?php echo e(session('msg')); ?></h2>
    <?php endif; ?>
    <form action="<?php echo e(route('categories.update', $category)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" value="<?php echo e($category->name); ?>" class="form-control">

        <button type="submit" class="btn btn-success mt-4">Edit</button>
        <h2><a href="<?php echo e(route('categories.index')); ?>" class="btn btn-primary mt-3">Back</a></h2>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\3.xuong-laravel\resources\views/categories/edit.blade.php ENDPATH**/ ?>