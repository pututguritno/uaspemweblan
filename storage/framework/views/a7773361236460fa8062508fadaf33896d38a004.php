<?php $__env->startSection('main'); ?>
<div class="card">
    <div class="card-body">
      <h1>Form Edit Data Buku</h1>
      <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form action="/buku/update" method="post">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="id" value="<?php echo e($b->id); ?>">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kode Buku</label>
            <input name="kodebuku" required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo e($b->kodebuku); ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Judul Buku</label>
            <input name="judul" required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo e($b->judul); ?>">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Gambar</label>
            <input name="gambar" required="reqired" class="form-control" type="file" id="formFile" value="<?php echo e($b->gambar); ?>">
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Pengarang Buku</label>
            <input name="pengarang" required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo e($b->pengarang); ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
            <input name="penerbit" required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo e($b->penerbit); ?>">
        </div>
        <input type="submit" value="Simpan Data">
    </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasweb\resources\views/pages/edit.blade.php ENDPATH**/ ?>