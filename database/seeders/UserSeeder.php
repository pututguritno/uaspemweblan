<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Peminjaman;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'email' => 'nana@gmail.com',
            'nama' => 'Nana Hamida',
            'id' => '1',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);
    }
}
