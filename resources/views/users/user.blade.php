
@extends('template')

@section('main')
<div class="card">
    <div class="card-body">
      <h1>Halaman User</h1>
    <form action="/peminjaman/store" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nomer Peminjaman</label>
            <input name="nomer" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nomer Peminjaman">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Peminjam</label>
            <input name="nama_peminjam" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama peminjam">
        </div>
        <div class="mb-3">
            <label for="id">Judul Buku :</label>
            <select name="id" class="form-control" id="id">
                @php
                    $buku = DB::table('buku')->get();
                @endphp
            @foreach($buku as $b)
            <option value="{{ $b->id }}">{{ $b->judul }}</option>
            @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="keterangan">Keterangan :</label>
            <select name="keterangan" class="form-control" id="keterangan">
            <option value="pinjam">Pinjam</option>
            <option value="kembali">Kembali</option>
            </select>
        </div>
        <input type="submit" value="Simpan Data">
    </form>
    </div>
  </div>

@endsection


