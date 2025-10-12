<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_layanan = [
            ['0c2ce546-aa59-4f23-8954-a03bcf5f5bb1', 'BLHO', 'BALIHO'],
            ['75fcd134-0fcf-4694-8625-8d43bf41ccb0', 'KONATA', 'SIARAN RADIO KONATA'],
            ['c9730c78-1a46-4cf4-b75d-aaaf9fbfda56', 'RTXT', 'RUNNING TEXT'],
            ['d062f47c-d9a9-4096-b941-894a7ca30915', 'PPID', 'PPID'],
            ['eb64bf1d-1a9f-4c53-88dc-36089dd196c4', 'KIM', 'KELOMPOK INFOMASI MASYARAKAT (KIM)'],
            ['f20ffbd5-9333-4a87-81ba-d7ff76aa669e', 'BUSI', 'BULETIN SIBER (BUSI)'],
        ];

        // Loop melalui data dan gunakan updateOrCreate
        foreach ($data_layanan as $item) {
            
            // Kunci pencarian: menggunakan 'id'
            $attributes = [
                'id' => $item[0],
            ];

            // Nilai yang akan diisi atau diupdate
            $values = [
                'kode_layanan'  => $item[1], // <-- KODE LAYANAN
                'layanan'  => $item[2],
            ];
            
            // Lakukan update atau create
            Layanan::updateOrCreate($attributes, $values);
        }
    }
}
