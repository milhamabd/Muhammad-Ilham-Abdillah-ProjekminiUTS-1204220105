<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="<?php echo e(route('home')); ?>" class="navbar-brand"><i class="bi bi-hexagon-fill me-2"></i> Data Master</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('home')); ?>"><i class="bi bi-house-fill me-1"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('employees.index')); ?>"><i class="bi bi-person-check-fill me-1"></i> Employee List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('profile')); ?>"><i class="bi bi-person-circle me-1"></i> My Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-8 col-xl-9 mx-auto">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">List Barang</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="<?php echo e(route('employees.create')); ?>" class="btn btn-success"><i class="bi bi-plus"></i> Tambah Barang</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Harga Barang</th>
                                        <th>Deskripsi</th>
                                        <th>Satuan ID</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barangs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($barangs->kode_barang); ?></td>
                                        <td><?php echo e($barangs->nama_barang); ?></td>
                                        <td><?php echo e($barangs->harga_barang); ?></td>
                                        <td><?php echo e($barangs->deskripsi_barang); ?></td>
                                        <td><?php echo e($barangs->satuan_id); ?></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="<?php echo e(route('employees.edit', ['employee' => 3])); ?>" class="btn btn-outline-info btn-sm me-2"><i class="bi bi-pencil-square"></i></a>
                                                <div>
                                                    <form action="<?php echo e(route('employees.destroy', ['employee' => 3])); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('delete'); ?>
                                                    <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                                 </form>
                                             </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH C:\Users\milhamabd\project_uts\resources\views/employee/index.blade.php ENDPATH**/ ?>