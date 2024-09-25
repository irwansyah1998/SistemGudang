<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mutasi;
use App\Models\User; // Pastikan untuk menggunakan model User
use App\Models\Barang; // Pastikan untuk menggunakan model Barang
use Carbon\Carbon;

class MutasiSeeder extends Seeder
{
    public function run()
    {
        $user = User::first(); // Ambil pengguna pertama
        $barang = Barang::first(); // Ambil barang pertama

        Mutasi::create([
            'user_id' => $user->id,
            'barang_id' => $barang->id,
            'tanggal' => Carbon::now()->toDateString(),
            'jenis_mutasi' => 'Masuk',
            'jumlah' => 10,
        ]);

        Mutasi::create([
            'user_id' => $user->id,
            'barang_id' => $barang->id,
            'tanggal' => Carbon::now()->toDateString(),
            'jenis_mutasi' => 'Keluar',
            'jumlah' => 5,
        ]);
    }
}
