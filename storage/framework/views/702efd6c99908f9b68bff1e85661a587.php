

<?php $__env->startSection('content'); ?>
    <h1>Dashboard</h1>

    <p>Welcome, <?php echo e(auth()->user()->first_name); ?>!</p>

    <ul>
        <li><a href="<?php echo e(route('users.index')); ?>">View Users</a></li>
        <li>
            <form action="<?php echo e(route('logout')); ?>" method="POST" style="display: inline;">
                <?php echo csrf_field(); ?>
                <button type="submit">
                    Logout
                </button>
            </form>
        </li>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dashboard\Soft-Eng-2-Project\resources\views/dashboard.blade.php ENDPATH**/ ?>