<?php

namespace Database\Seeders;

use App\Models\Baliho;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BalihoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $data_baliho = [
            ['BALIHO DEPAN KECAMATAN LAWEYAN', 'Jl. Dr. Rajiman No.352, Penumping, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57141', 'baliho/01K6MCC0H1ZPGB3ZNKFMJ4CPJ3.jpg', '4M X 8M', 'Vertical'],
            ['BALIHO DEPAN PASAR JONGKE', 'Pasar Jongke, Jl. Dr. Rajiman 0441, Pajang, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57147', 'baliho/01K6MBJ6KTY04QVQ43BZK55EBH.jpg', '4M X 8M', 'Vertical'],
            ['BALIHO PDAM', 'Jl. Adi Sucipto No.135C, Kerten, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57143', 'baliho/01K6M2D71MXJ5EW4GRSJT3YYAD.jpg', '4M X 8M', 'Horizontal'],
            ['BALIHO JURUG', 'CVM5+H55, Jl. Ir. Sutami, Pucangsawit, Kec. Jebres, Kota Surakarta, Jawa Tengah 57125', 'baliho/01K6M1ZA5PWSJFR4NY1Q8TJEKK.jpg', '4M X 8M', 'Horizontal'],
            ['BALIHO INSTITUTE SENI INDONESIA', 'CVV2+GJV, Jl. Ki Hajar Dewantara, Jebres, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126', 'baliho/01K6M2A1T4N862C0666WF1WBW5.jpg', '4M X 8M', 'Vertical'],
            ['BALIHO SHELTER LOJIWETAN', 'Shelter Lojiwetan, Jl. Kapten Mulyadi, Kedung Lumbu, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57133', 'baliho/01K6MC22YSMN7VYTV7AWYYNW74.jpg', '4M X 6M', 'Vertical'],
            ['BALIHO YOS SUDARSO / TANJUNGANOM', 'CR58+MXF, Jl. Yos Sudarso, Joyotakan, Kec. Serengan, Kota Surakarta, Jawa Tengah 57157', 'baliho/01K6M2S1YASFQHMK3V10CVCX3R.jpg', '4M X 6M', 'Vertical'],
            ['BALIHO SIMPANG LIMA BANJARSARI', 'Jl. Walter Monginsidi, Margoyudan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57134', 'baliho/01K6M2J3E2H3S3M1VTZ9CWS18C.jpg', '4M X 6M', 'Vertical'],
            ['BALIHO DEPAN KECAMATAN BANJARSARI', 'Jl. Adi Sumarmo, Banyuanyar, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57137', 'baliho/01K6M21W546HFYKMTRQHEAPYHV.jpg', '4M X 8M', 'Vertical'],
            ['BALIHO KECAMATAN SERENGAN', 'Jl. Veteran, Serengan, Kec. Serengan, Kota Surakarta, Jawa Tengah 57155', 'baliho/01K6MB41SSV3E3Y195DBXVK139.jpg', '4M X 8M', 'Vertical'],
            ['BALIHO GIRIMULYO SUMBER', 'CRW2+WFR, Jl. Letjen Suprapto, Manahan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57143', 'baliho/01K6MB95023M40FQ5M4B7866RM.jpg', '4M X 6M', 'Vertical'],
            ['BALIHO TUGU LILIN SMA MURNI', 'Jl. Dr. Wahidin, Purwosari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57142', 'baliho/01K6MBSJ562690V5817CKRBFCW.jpg', '4M X 6M', 'Vertical'],
            ['BALIHO PASAR SIDODADI KLECO', 'Pasar Sidodadi, Kleco, Karangasem, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57145', 'baliho/01K6MBXWRJQS16KRXSM72Z08DN.jpg', '4M X 8M', 'Horizontal'],
        ];

        // Loop melalui data dan masukkan ke database
        foreach ($data_baliho as $item) {
            // 1. Tentukan UUID data ini
            $item_id = $this->getUuidFromNama($item[0]);

            // 2. Kunci pencarian: menggunakan 'id'
            $attributes = [
                'id' => $item_id,
            ];

            // 3. Nilai yang akan diisi atau diupdate
            $values = [
                'nama_baliho'   => $item[0],
                'lokasi_baliho'        => $item[1],
                'koordinat_baliho'        => null,
                'foto_baliho'        => $item[2],
                'ukuran_baliho'        => $item[3],
                'layout_baliho'          => $item[4],
                // created_at dan updated_at akan diurus oleh Eloquent
            ];
            
            // Lakukan update atau create
            Baliho::updateOrCreate($attributes, $values);
        }
    }

    private function getUuidFromNama(string $nama): string
    {
        $map = [
            'BALIHO DEPAN KECAMATAN LAWEYAN'      => '1b8fdd7a-79e4-491e-814d-52d5f8978b94',
            'BALIHO DEPAN PASAR JONGKE'          => '3dec2736-e6d9-4fc6-9c53-11e4b2195775',
            'BALIHO PDAM'                        => '49da6e69-0024-4001-9021-ae534beede94',
            'BALIHO JURUG'                       => '7b755978-6ebb-4a0b-ab95-a57dff1252ea',
            'BALIHO INSTITUTE SENI INDONESIA'     => '988b9e25-ab16-46b8-a738-8f114d671675',
            'BALIHO SHELTER LOJIWETAN'           => '9f1b1f62-b5b8-457f-88ef-513c6f5954f7',
            'BALIHO YOS SUDARSO / TANJUNGANOM'    => 'c488ab46-9da7-41ac-ac7c-e21b624f7942',
            'BALIHO SIMPANG LIMA BANJARSARI'     => 'd93f54a1-50cd-4d55-9c77-4c4549788591',
            'BALIHO DEPAN KECAMATAN BANJARSARI'    => 'dea38f38-692f-4c34-899b-cbcf591121a6',
            'BALIHO KECAMATAN SERENGAN'           => 'ec81712d-742f-408a-9aad-ca2afec1d60d',
            'BALIHO GIRIMULYO SUMBER'            => 'ef7f0b4c-3638-4e58-b7ee-d5f797da0d51',
            'BALIHO TUGU LILIN SMA MURNI'        => 'f454387f-5f1e-4805-a8bb-226844d3b37d',
            'BALIHO PASAR SIDODADI KLECO'        => 'f7dcfc56-45d0-4e61-aa7f-5051f2b39b26',
        ];
        return $map[$nama] ?? \Ramsey\Uuid\Uuid::uuid4()->toString();
    }
}
