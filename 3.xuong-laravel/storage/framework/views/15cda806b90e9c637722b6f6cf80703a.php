<?php $__env->startSection('title'); ?>
    Detail Brand: <?php echo e($brand->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <td class="bg-primary text-white">FIELD NAME</td>
                <td class="bg-primary text-white">VALUE</td>
            </tr>
        </thead>

        <tbody>
            
            <?php $__currentLoopData = $brand->toArray(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(Str::ucfirst($field)); ?></td>
                    <?php if($field == 'image'): ?>
                        <td><img src="<?php echo e(asset($brand->image)); ?>" alt="" width="100px"></td>
                    <?php else: ?>
                        
                        <td><?php echo e($value); ?></td>
                    <?php endif; ?>


                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <a href="<?php echo e(route('brands.index')); ?>" class="btn btn-primary">Back</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\3.xuong-laravel\resources\views/brands/show.blade.php ENDPATH**/ ?>