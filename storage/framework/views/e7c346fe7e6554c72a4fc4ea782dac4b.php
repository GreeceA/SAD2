<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/register.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/register.js'); ?>
    <style> body{background: url("<?php echo e(asset('images/login_bg.png')); ?>") no-repeat center center fixed;}</style>
</head>
<body>
    <form method="POST" action="<?php echo e(route('register')); ?>">
        <h1>Register</h1>
        <?php echo csrf_field(); ?>

        <?php if($errors->any()): ?>
            <div>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <div>
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" value="<?php echo e(old('first_name')); ?>" required>
        </div>

        <div>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" value="<?php echo e(old('last_name')); ?>" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        <div>
            <button type="submit">Register</button>
        </div>

        <p>Already have an account? <a href="<?php echo e(route('login')); ?>">Login here</a></p>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\dashboard\Soft-Eng-2-Project\resources\views/auth/register.blade.php ENDPATH**/ ?>