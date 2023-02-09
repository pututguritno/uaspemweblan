<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //untuk menjalankan query builder

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //mengambil data darri database menggunakan db::table() dan disimpan ke dalam $data
            //menggunakan ->join() untuk menggabungkan tabel lainnya
            //menggunakkan where untuk menyeleksi
            //diakhir get() untuk mengambil data array

            //diakhir first() jika hanya satu data yang diambil

            $user = DB::table('data')
                    ->join('user', 'user.id', '=', 'data.id')
                    ->where('keterangan', 'terlihat')
                    ->get();
            //tampilkan view barang dan kirim peminjamannya ke view tersebut
            return view('pages.user')->with('user', $user);
    }
    // public function riwayat()
    // {
    //     //mengambil data darri database menggunakan db::table() dan disimpan ke dalam $data
    //         //menggunakan ->join() untuk menggabungkan tabel lainnya
    //         //menggunakkan where untuk menyeleksi
    //         //diakhir get() untuk mengambil data array

    //         //diakhir first() jika hanya satu data yang diambil

    //         $peminjaman = DB::table('buku')
    //                 ->join('peminjaman', 'peminjaman.id', '=', 'buku.id')
    //                 ->where('keterangan', 'kembali')
    //                 ->get();
    //         //tampilkan view barang dan kirim peminjamannya ke view tersebut
    //         return view('pages.riwayat')->with('peminjaman', $peminjaman);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.form_data_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('user')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'id' => $request->id,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at
        ]);
        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_user)
    {
        $user = DB::table('data')
                    ->join('user', 'user.id', '=', 'data.id')
                    ->where('id_user', $id_user)
                    ->get();
        // passing data peminjaman yang didapat ke view/pages detail.blade.php
        return view('pages.detail' , ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_user)
    {
        //mengambil data peminjaman berdasarkan id yang dipilih
        $user = DB::table('data')
                    ->join('user', 'user.id', '=', 'data.id')
                    ->where('id_user', $id_user)
                    ->get();
        // passing data peminjaman yang didapat ke view/pages edit.blade.php
        return view('pages.edit_user' , ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //update data peminjaman berdasarkan id
        DB::table('user')->where('id_user', $request->id_user)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'id' => $request->id,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at
        ]);
        //alihkan ke halaman home
        return redirect('/home');
    }

    public function hapus($id_user)
    {
        //menghapus data peminjaman berdasarkan id
            DB::table('user')->where('id_user', $id_user)->delete();
            return redirect('/home');
    }
}
