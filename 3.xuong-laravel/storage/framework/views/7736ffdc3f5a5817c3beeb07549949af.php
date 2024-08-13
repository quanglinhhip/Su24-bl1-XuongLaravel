<?php $__env->startSection('title'); ?>
    List Brands
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h1><a href="<?php echo e(route('brands.create')); ?>" class="btn btn-success">Add new Brand</a></h1>
    <?php if(session('msg')): ?>
        <h2><?php echo e(session('msg')); ?></h2>
    <?php endif; ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="bg-primary text-white">ID</th>
                <th class="bg-primary text-white">NAME</th>
                <th class="bg-primary text-white">IMAGE</th>
                <th class="bg-primary text-white">CREATED AT</th>
                <th class="bg-primary text-white">UPDATED AT</th>
                <th class="bg-primary text-white">ACTION</th>
            </tr>
        </thead>


        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><img src="<?php echo e(asset($item->image)); ?>" alt="anh san pham" width="100px"></td>
                    <td><?php echo e($item->created_at); ?></td>
                    <td><?php echo e($item->updated_at); ?></td>
                    <td>
                        <a href="<?php echo e(route('brands.show', $item)); ?>" class="btn btn-info">Show</a>
                        <a href="<?php echo e(route('brands.edit', $item)); ?>" class="btn btn-info">Edit</a>
                        <form action="<?php echo e(route('brands.destroy', $item)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure want to delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($data->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\3.xuong-laravel\resources\views/brands/index.blade.php ENDPATH**/ ?>