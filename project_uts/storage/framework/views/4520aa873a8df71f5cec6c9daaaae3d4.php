<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data
                Master</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav flex-row flex-wrap ms-auto">
                    <li class="nav-item"><a href="<?php echo e(route('home')); ?>" class="nav-link active"><i class="bi bi-house-fill me-2"></i> Home</a></li>
                    <li class="nav-item"><a href="<?php echo e(route('employees.index')); ?>" class="nav-link"><i class="bi bi-person-check-fill me-2"></i> Employee List</a></li>
                </ul>

                <a href="<?php echo e(route('profile')); ?>" class="btn btn-outline-light ms-2"><i class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h4><?php echo e($pageTitle); ?></h4>
        <hr>
        <div class="d-flex align-items-center py-4 px-4 bg-light rounded-3 border">
            <div class="bi bi-person-circle me-3 fs-3 text-primary"></div>
            <div>
                <p class="mb-0 fs-5">Muhammad Ilham Abdillah</p>
                <p class="mb-0 fs-6">NIM: 1204220105</p>
                <p class="mb-0 fs-6">Kelas: IS-05-03</p>
            </div>
        </div>
    </div>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>


</html>
<?php /**PATH C:\Users\milhamabd\project_uts\resources\views/profile.blade.php ENDPATH**/ ?>