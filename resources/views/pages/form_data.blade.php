
@extends('template')

@section('main')
<div class="card">
    <div class="card-body">
      <h1>Form Tambah Data</h1>
    <form action="/buku/store" method="post">
        {{ csrf_field() }}
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

@endsection


