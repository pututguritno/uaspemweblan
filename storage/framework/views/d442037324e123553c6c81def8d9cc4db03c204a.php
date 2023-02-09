<?php $__env->startSection('main'); ?>
<div class="card">
    <div class="card-body">
      <h1>Form Edit Peminjaman Buku</h1>
      <?php $__currentLoopData = $peminjaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form action="/peminjaman/update" method="post">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="id_peminjam" value="<?php echo e($p->id_peminjam); ?>">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nomer Peminjaman</label>
            <input name="nomer" required="reqired" type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo e($p->nomer); ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Peminjam</label>
            <input name="nama_peminjam" required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo e($p->nama_peminjam); ?>">
        </div>
        <div class="mb-3">
            <label for="id">Judul Buku :</label>
            <select name="id" required="reqired" class="form-control" id="id">
                <?php
                    $buku = DB::table('buku')->get();
                ?>
            <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($b->id); ?>"><?php echo e($b->judul); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="keterangan">Keterangan :</label>
            <select name="keterangan" required="reqired" class="form-control" id="keterangan">
            <option value="pinjam">Pinjam</option>
            <option value="kembali">Kembali</option>
            </select>
        </div>
        <input type="hidden" name="created_at" value="<?php echo e($p->created_at); ?>">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
            <input name="updated_at" type="date" class="form-control" id="exampleFormControlInput1">
        </div>
        <input type="submit" value="Simpan Data">
    </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasweb\resources\views/pages/edit_peminjaman.blade.php ENDPATH**/ ?>