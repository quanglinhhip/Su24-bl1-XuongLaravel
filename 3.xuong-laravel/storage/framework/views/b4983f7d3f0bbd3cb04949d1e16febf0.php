<?php $__env->startSection('title'); ?>
    List Categories
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h3><a href="<?php echo e(route('categories.create')); ?>" class="btn btn-info mt-2">Add new </a></h3>
    <?php if(session('msg')): ?>
        <h2><?php echo e(session('msg')); ?></h2>
    <?php endif; ?>

    <table class="table table-striped">
        <tr>
            <th class="bg-primary text-white">ID</th>
            <th class="bg-primary text-white">NAME</th>
            <th class="bg-primary text-white">CREATED AT</th>
            <th class="bg-primary text-white">UPDATED AT</th>
            <th class="bg-primary text-white">ACTION</th>
        </tr>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->created_at); ?></td>
                <td><?php echo e($item->updated_at); ?></td>
                <td>
                    <a href="<?php echo e(route('categories.show', $item)); ?>" class="btn btn-info">Show </a>
                    <a href="<?php echo e(route('categories.edit', $item)); ?>" class="btn btn-warning">Edit </a>

                    <form action="<?php echo e(route('categories.destroy', $item)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                    </form>

                </td>
            </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
    <?php echo e($data->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\3.Su24-bl1-XuongLaravel\3.xuong-laravel\resources\views/categories/index.blade.php ENDPATH**/ ?>