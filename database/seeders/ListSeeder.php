<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListSeeder extends Seeder
{
   
    public function run(): void
    {
        DB::table('list')->insert([
            [
                'kode_barang'=>'BRS-01',
                'nama_barang' => 'Beras Pipin',
                'price' => '12550',
                'unit_id' => 1,
                'description' => 'Beras pipin adalah beras berkualitas nomer satu di Indonesia',
            ],
            [
                'kode_barang' => 'WTR-01',
                'nama_barang' => 'Aqua',
                'price' => '58000',
                'unit_id' => 5,
                'description' => 'AQUA 100% MURNI air mineral pegunungan yang melewati 400 Cek Kualitas dan dikemas Dengan Higenis',
            ],
            [
                'kode_barang' => 'BSN-01',
                'nama_barang' => 'Pertalite',
                'price' => '10000',
                'unit_id' => 3,
                'description' => 'Pertalite adalah bahan bakar yang memiliki warna hijau terang dan jernih serta memiliki angka oktan yang lebih tinggi',
            ],
        ]);
    }
}