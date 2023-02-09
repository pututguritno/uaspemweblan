<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //untuk menjalankan query builder
use Illuminate\Support\Facades\Auth;//untuk menjalankan logout

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mengambil data dari tabel buku
        $data = DB::table('data')->get();
        //mengirim data ke view mahasiswa
        return view('pages.buku' , ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.form_data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('data')->insert([
            'departemen' => $request->departemen,
            'jabatan' => $request->jabatan,
            'gaji' => $request->gaji,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at
        ]);
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //mengambil data buku berdasarkan id yang dipilih
        $data = DB::table('data')->where('id', $id)->get();
        // passing data buku yang didapat ke view/pages edit.blade.php
        return view('pages.edit' , ['data' => $data]);
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
        //update data buku berdasarkan id
        DB::table('data')->where('id', $request->id)->update([
            'departemen' => $request->deparetemen,
            'jabatan' => $request->jabatan,
            'gaji' => $request->gaji,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at

        ]);
        //alihkan ke halaman home
        return redirect('/home');
    }

    public function hapus($id)
    {
        //menghapus data buku berdasarkan id
            DB::table('data')->where('id', $id)->delete();
            return redirect('/home');
    }
}
