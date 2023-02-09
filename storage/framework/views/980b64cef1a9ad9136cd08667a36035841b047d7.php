<?php $__env->startSection('main'); ?>
<div class="card">
    <div class="card-body">
      <h1>Detail Peminjaman Buku</h1>
      <?php $__currentLoopData = $peminjaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form action="/peminjaman" method="post">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="id_peminjam" value="<?php echo e($p->id_peminjam); ?>">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nomer Peminjaman</label>
            <input name="nomer" disabled required="reqired" type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo e($p->nomer); ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Peminjam</label>
            <input name="nama_peminjam" disabled required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo e($p->nama_peminjam); ?>">
        </div>
        <div class="mb-3">
            <label for="id">Kode Buku :</label>
            <input name="kodebuku" disabled required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo e($p->kodebuku); ?>">
        </div>
        <div class="mb-3">
            <label for="id">Judul Buku :</label>
            <input name="judul" disabled required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo e($p->judul); ?>">
        </div>
        <div class="mb-3">
            <label for="id">pengarang Buku :</label>
            <input name="pengarang" disabled required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo e($p->pengarang); ?>">
        </div>
        <div class="mb-3">
            <label for="id">penerbit Buku :</label>
            <input name="penerbit" disabled required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo e($p->penerbit); ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal peminjaman</label>
            <input name="created_at" disabled required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo e($p->created_at); ?>">
        </div>
        <div class="mb-3">
            <label for="keterangan">Keterangan :</label>
            <input name="keterangan" disabled required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo e($p->keterangan); ?>">
        </div>
        <div class="mb-3">
            <a class="btn btn-outline-primary" href="/peminjaman" role="button"><i class="fas fa-fw fa-arrow-left"></i>Kembali</a>
        </div>
    </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasweb\resources\views/pages/detail.blade.php ENDPATH**/ ?>