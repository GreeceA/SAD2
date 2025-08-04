<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>

    <?php if($errors->any()): ?>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($err); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>

    <form action="<?php echo e(route('users.update', $user->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div>
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" value="<?php echo e(old('first_name', $user->first_name)); ?>" required>
        </div>

        <div>
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" value="<?php echo e(old('last_name', $user->last_name)); ?>" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo e(old('email', $user->email)); ?>" required>
        </div>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="<?php echo e(route('users.index')); ?>">← Back to list</a>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\dashboard\Soft-Eng-2-Project\resources\views/users/edit.blade.php ENDPATH**/ ?>