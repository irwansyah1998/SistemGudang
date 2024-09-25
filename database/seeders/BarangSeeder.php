<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    public function run()
    {
        Barang::create([
            'nama_barang' => 'Barang A',
            'kode' => 'BAR001',
            'kategori' => 'Kategori 1',
            'lokasi' => 'Lokasi 1',
        ]);

        Barang::create([
            'nama_barang' => 'Barang B',
            'kode' => 'BAR002',
            'kategori' => 'Kategori 2',
            'lokasi' => 'Lokasi 2',
        ]);

        Barang::create([
            'nama_barang' => 'Barang C',
            'kode' => 'BAR003',
            'kategori' => 'Kategori 3',
            'lokasi' => 'Lokasi 3',
        ]);
    }
}

