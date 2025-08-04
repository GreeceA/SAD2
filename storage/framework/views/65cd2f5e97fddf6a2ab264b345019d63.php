<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/login.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/login.js'); ?>
    <style> body{background: url("<?php echo e(asset('images/login_bg.png')); ?>") no-repeat center center fixed;}</style>
</head>
<body>
    <div class="login-container">
        <h1>VIGOUR SEEDS | Log In</h1>

        <?php if(session('error')): ?>
            <p class="error"><?php echo e(session('error')); ?></p>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>

        <p class="register-text">Don't have an account? <a href="<?php echo e(route('register')); ?>">Register here</a></p>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\dashboard\Soft-Eng-2-Project\resources\views/auth/login.blade.php ENDPATH**/ ?>