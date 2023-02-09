<?php $__env->startSection('main'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Gaji Karyawan Perusahaan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Gaji Karyawan</h6>
            <a class="btn btn-primary" href="/buku/tambah" role="button"><i class="fas fa-fw fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Departemen</th>
                            <th>Jabatan</th>
                            <th>Gaji</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Departemen</th>
                            <th>Jabatan</th>
                            <th>Gaji</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($d->departemen); ?></td>
                            <td><?php echo e($d->jabatan); ?></td>
                            <td><?php echo e($d->gaji); ?></td>
                            <td>
                                <a class="btn btn-outline-danger" href="/buku/hapus/<?php echo e($d->id); ?>" role="button"><i class="fas fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php $__env->stopSection(); ?>



<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasweb\resources\views/pages/buku.blade.php ENDPATH**/ ?>