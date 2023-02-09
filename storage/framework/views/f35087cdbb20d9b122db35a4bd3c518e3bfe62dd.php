<?php $__env->startSection('main'); ?>
<div class="card">
    <div class="card-body">
      <h1>Form Tambah Data</h1>
    <form action="/buku/store" method="post">
        <?php echo e(csrf_field()); ?>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Departemen</label>
            <input name="departemen" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan departemen">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
          <input name="jabatan" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan jabatan">
      </div>
      <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Gaji</label>
          <input name="gaji" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan gaji">
      </div>
        <input type="hidden" name="created_at" value="<?php echo date('Y-m-d h:i:s'); ?>">
        <input type="hidden" name="updated_at" value="<?php echo date('Y-m-d h:i:s'); ?>">
        <input type="submit" value="Simpan Data">
    </form>
    </div>
  </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasweb\resources\views/pages/form_data.blade.php ENDPATH**/ ?>