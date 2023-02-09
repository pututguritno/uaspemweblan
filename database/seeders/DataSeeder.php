<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data')->insert([
            'departemen' => 'Accounting',
            'jabatan' => 'Chief Financial Officer',
            'gaji' => '11500000',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);
        DB::table('data')->insert([
            'departemen' => 'Accounting',
            'jabatan' => 'Manager Accounting',
            'gaji' => '16150000',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);
        DB::table('data')->insert([
            'departemen' => 'Accounting',
            'jabatan' => 'Karyawan Accounting',
            'gaji' => '3947000',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);
        DB::table('data')->insert([
            'departemen' => 'IT',
            'jabatan' => 'Chief Information Officer',
            'gaji' => '62500000',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);
        DB::table('data')->insert([
            'departemen' => 'IT',
            'jabatan' => 'Manager Teknologi Informasi',
            'gaji' => '28000000',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);
        DB::table('data')->insert([
            'departemen' => 'IT',
            'jabatan' => 'Karyawan Teknologi Informasi',
            'gaji' => '6000000',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);
    }
}
