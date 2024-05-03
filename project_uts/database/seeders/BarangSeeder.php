<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            [
                'kode_barang'=> 'tbo001',
                'nama_barang'=> 'Topi',
                'harga_barang'=> '20000',
                'deskripsi_barang'=> 'Topi boboiboy ori',
                'satuan_id'=> '1',
            ],
            [
                'kode_barang'=> 'br002',
                'nama_barang'=> 'Baju',
                'harga_barang'=> '80000',
                'deskripsi_barang'=> 'Baju rajut',
                'satuan_id'=> '2',
            ],
            [
                'kode_barang'=> 'cd003',
                'nama_barang'=> 'Celana',
                'harga_barang'=> '50000',
                'deskripsi_barang'=> 'Celana Deckeis',
                'satuan_id'=> '1',
            ],
        ]);

    }
}
