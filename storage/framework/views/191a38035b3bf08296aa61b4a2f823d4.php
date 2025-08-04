<!DOCTYPE html>
<html>
<head>
    <title>View User</title>
</head>
<body>
    <h1>User Profile</h1>

    <ul>
        <li><strong>First Name:</strong> <?php echo e($user->first_name); ?></li>
        <li><strong>Last Name:</strong> <?php echo e($user->last_name); ?></li>
        <li><strong>Email:</strong> <?php echo e($user->email); ?></li>
        <li><strong>Created At:</strong> <?php echo e($user->created_at); ?></li>
        <li><strong>Updated At:</strong> <?php echo e($user->updated_at); ?></li>
    </ul>

    <p>
        <a href="<?php echo e(route('users.edit', $user->id)); ?>">Edit</a> |
        <a href="<?php echo e(route('users.index')); ?>">Back to List</a>
    </p>

    <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit">Delete</button>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\dashboard\Soft-Eng-2-Project\resources\views/users/show.blade.php ENDPATH**/ ?>