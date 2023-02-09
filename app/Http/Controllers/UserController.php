<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //untuk menjalankan query builder

class UserController extends Controller
{
    public function create()
    {
        return view('users.user');
    }
    public function __construct()
    {
        $this->middleware('auth');
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
            'emai;' => $request->email,
            'nama' => $request->nama,
            'id' => $request->id,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at
        ]);
        return redirect('/user');
    }
}
