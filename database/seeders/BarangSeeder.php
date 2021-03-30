<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_barang')->insert([
            'kode_barang' => 'PRD004',
            'nama_barang' => 'Cheetos',
            'kategori_barang' => 'Snack',
            'harga' => 10000,
            'qty' => 27,
        ]);
    }
}
