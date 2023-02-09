<?php $__env->startSection('main'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Peminjaman</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Peminjaman</h6>
            <a class="btn btn-primary" href="http://localhost:8000/peminjaman/tambah" role="button"><i class="fas fa-fw fa-plus"></i> Tambah Peminjaman</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomer Peminjaman</th>
                            <th>Nama Peminjam</th>
                            <th>Judul Buku</th>
                            <th>Gambar</th>
                            <th>Tanggal Pinjam</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $peminjaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($p->nomer); ?></td>
                            <td><?php echo e($p->nama_peminjam); ?></td>
                            <td><?php echo e($p->judul); ?></td>
                            <td><img height="200" width="130" src="/user/img/buku/<?php echo e($p->gambar); ?>"></td>
                            <td><?php echo e($p->created_at); ?></td>
                            <td>
                                <a class="btn btn-outline-primary" href="/peminjaman/edit/<?php echo e($p->id_peminjam); ?>" role="button"><i class="fas fa-fw fa-edit"></i></a>
                                |
                                <a class="btn btn-outline-danger" href="/peminjaman/hapus/<?php echo e($p->id_peminjam); ?>" role="button"><i class="fas fa-fw fa-trash"></i></a>
                                |
                                <a class="btn btn-outline-success" href="/peminjaman/detail/<?php echo e($p->id_peminjam); ?>" role="button"><i class="fas fa-fw fa-search"></i></a>
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



<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasweb\resources\views/pages/peminjaman.blade.php ENDPATH**/ ?>