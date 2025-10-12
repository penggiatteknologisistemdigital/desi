<?php

namespace Database\Seeders;

use App\Models\Instansi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InstansiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_instansi = [
            ['0198a1a2-ebd0-429f-88ee-4e4296663c58', 'KELURAHAN TIPES'],
            ['01d1e6ba-ec07-40b0-83f7-31d7b1cbbbe8', 'KELURAHAN SUDIROPRAJAN'],
            ['0263dca3-d243-421f-befb-471f2fdb2af6', 'DPUPR'],
            ['02b833b0-d599-45fb-9464-0885328dfa58', 'KELURAHAN KARANGASEM'],
            ['0329ca40-98d4-44e0-b2ce-b0c30778d0b2', 'KELURAHAN KEPATIHAN KULON'],
            ['03be7a5f-29f3-4176-8ede-c42d9f16c05e', 'KECAMATAN SERENGAN'],
            ['0404ddf7-9c15-44ee-8d89-af87878d4ccd', 'KELURAHAN TIMURAN'],
            ['06dd1556-8cd0-420f-8adc-f29834ba7f4f', 'KELURAHAN BALUWARTI'],
            ['07c2b237-7f44-4889-889b-ad6923592b10', 'DISBUDPAR'],
            ['080dd40e-26ef-4852-8e2c-760f482a7a6e', 'KELURAHAN PANULARAN'],
            ['0892d0b8-a858-4d4e-a2bd-0708b1e044a8', 'KELURAHAN SANGKRAH'],
            ['09344a1e-2420-497b-a3c0-1bf47b78473a', 'KELURAHAN KAUMAN'],
            ['09bfda1b-9b0e-4e70-8799-bc689e067dca', 'KELURAHAN LAWEYAN'],
            ['0a02e20f-855a-44c6-ae1f-e10b484a4d35', 'KELURAHAN GANDEKAN'],
            ['0a5a0352-ff21-4271-9bac-3e18a1f54981', 'KELURAHAN PAJANG'],
            ['0b532f1d-92d6-4976-9584-9159db7cf0d6', 'KELURAHAN JAJAR'],
            ['0b6c1db9-1c96-40bb-9701-e22d406d9eac', 'KELURAHAN PUNGGAWAN'],
            ['0c62c568-9df8-4595-9496-fb8c0466f079', 'BAKESBANGPOL'],
            ['0dcdd8a8-56d8-45af-9330-2a9c1ca1b013', 'KELURAHAN JEBRES'],
            ['0eb7f9bd-10a5-4054-a6f9-56c4770d0e75', 'KELURAHAN MOJOSONGO'],
            ['15a1d92c-ad5b-4175-a702-97fe7354fc6b', 'KELURAHAN KAMPUNG BARU'],
            ['15cdd098-61b7-4344-a729-b9c48d5306e4', 'KECAMATAN JEBRES'],
            ['17bf3208-4a2b-45ba-8679-4a87e78d0057', 'KELURAHAN PASARKLIWON'],
            ['1b83d044-1ca5-48bb-95d2-693fe5e76edf', 'KELURAHAN BANJARSARI'],
            ['1bfff7c6-866f-4015-b694-e39226c28912', 'KELURAHAN KEMLAYAN'],
            ['1c578e05-3d20-4a0d-bbff-1bde71c79216', 'KELURAHAN TEGALHARJO'],
            ['1c8d3bc3-ee56-4212-9585-5167949078d8', 'DPMPTSP'],
            ['1dea27ce-4a55-4a19-9a84-d84b893416ca', 'BAPPEDA'],
            ['1f94af1b-cae7-48f9-bc9f-af1361e9a6f1', 'BAPENDA'],
            ['20d50209-5a8c-4f1f-98b0-bd408a5e1e14', 'DISDIK'],
            ['22a98073-2320-4c22-8c9a-b89c818267ae', 'KELURAHAN DANUKUSUMAN'],
            ['22b6d31d-6e73-46e2-9261-2e897aeb0409', 'DINAS KESEHATAN'],
            ['23b6d94c-e781-48de-9982-4e5bab9beb14', 'KELURAHAN MANAHAN'],
            ['24f88e4b-c007-4b93-b1ab-e8a57fbb378e', 'KELURAHAN PENUMPING'],
            ['260d4253-10d6-4255-8953-e84c9cab38be', 'BADAN PERENCANAAN PEMBANGUNAN DAERAH'],
            ['290a69a6-e5d9-49e3-9f52-a917dcd62c27', 'KELURAHAN JAGALAN'],
            ['2a147d92-d19d-4145-b837-51a6a63629b5', 'BPBD'],
            ['2c64cd42-0f43-4280-81bd-b7beb4d3696d', 'KELURAHAN KESTALAN'],
            ['2c86da0f-fc60-4809-b21e-fec24d1fa06e', 'BAGIAN PEREKONOMIAN DAN SDA'],
            ['2f1a9dd1-d6d7-4ea8-9696-f60233e4d5fd', 'DISPERSIP'],
            ['3232f822-d340-4540-8e05-90edc8c0701a', 'KELURAHAN SUMBER'],
            ['324e0011-fc2e-4b74-934d-5f3c3918e299', 'KELURAHAN KADIPIRO'],
            ['32a1ee4e-1030-45f1-a43c-492b9360e91e', 'KELURAHAN PUCANGSAWIT'],
            ['32e56a8f-5d9d-4560-8ac5-6082281ad0ae', 'KELURAHAN SETABELAN'],
            ['364b55c7-d740-455f-b47f-ccae11105941', 'KELURAHAN JOGLO'],
            ['3677247e-45d3-4505-81e1-f0c2391aed72', 'BAGIAN PROKOMPIM'],
            ['389c120d-a555-4b83-ab1e-30fd70449d7d', 'KELURAHAN PURWODININGRATAN'],
            ['3c03405d-3a1d-4adb-97f1-dd789361e608', 'KELURAHAN PURWOSARI'],
            ['3da26659-c615-4fe5-907d-e9292c4a9743', 'DISNAKER'],
            ['3e60b3fa-292d-4e1a-bb20-e6a6b92f6180', 'KELURAHAN MANGKUBUMEN'],
            ['4160d79f-4bcf-4749-a36b-5838e34dfa6a', 'KELURAHAN KRATONAN'],
            ['42ce8a59-e96a-4cc3-bc23-0cb79519b214', 'DINAS PENDIDIKAN'],
            ['4346008a-f91a-49e4-82b5-9c5711ae6105', 'BAGIAN KERJASAMA SEKRETARIAT DAERAH'],
            ['45637413-2975-460d-8217-cc2839a55b7e', 'KELURAHAN SEWU'],
            ['456ba9a9-5c00-4a84-b94d-0d8056a84e4b', 'KELURAHAN KEPRABON'],
            ['46a5f13d-384e-4b6f-b9dc-9bb84b310666', 'KELURAHAN JOYOSURAN'],
            ['49a26166-4283-4438-b48e-f10270b10be5', 'DP3AP2KB'],
            ['4c2d7682-bf82-4698-ad45-095fabafed19', 'KELURAHAN GILINGAN'],
            ['5452b301-4413-4212-ac7c-47bd1478bc75', 'KELURAHAN JOYOTAKAN'],
            ['5531cb26-e5b7-4a14-985b-35ea97ec0512', 'KELURAHAN KEDUNGLUMBU'],
            ['573311d8-faeb-42d1-a1d5-5fe0f77f8fb4', 'KELURAHAN SEMANGGI'],
            ['59603220-29ce-4aec-857a-aa8f7b2583b5', 'KELURAHAN KEPATIHAN WETAN'],
            ['5a2c5757-7fbf-4870-a7c3-27d74bfecb50', 'DISKOMINFO SP'],
            ['62741e6d-f727-4ba3-af29-830c1d270f27', 'KECAMATAN BANJARSARI'],
            ['66739f57-4772-41c2-bff1-98887ee82df0', 'BAGIAN UMUM'],
            ['69bab0a8-3564-4907-850b-bdea2a6c5d73', 'KELURAHAN KERTEN'],
            ['6c212c3f-4531-45f7-ab0f-ec5188e60808', 'SETWAN'],
            ['6f517dff-6413-4885-9f8e-d0c3ae1e9793', 'ADNAN MULYA SATYANU'],
            ['70e23b96-2f6d-49ac-be06-012032c1c7d8', 'KELURAHAN SONDAKAN'],
            ['7b0fe311-0872-4dca-a26a-941417c06c45', 'KELURAHAN NUSUKAN'],
            ['7b91be5b-ea11-4f3d-8be2-ba5cce796e9d', 'KELURAHAN SERENGAN'],
            ['80f7d8e3-e6cf-4f5f-a618-2c4db7e65f5b', 'KELURAHAN BANYUANYAR'],
            ['812753a2-58c0-4b03-a4b4-053d96fcb6c9', 'KELURAHAN BUMI'],
            ['82910f8c-110b-4e72-a4dc-41b0192d303a', 'DISDAG'],
            ['833631f2-487e-4026-bdaa-488ef1e67a02', 'BAGIAN KESEJAHTERAAN RAKYAT'],
            ['8421e9c2-0e4f-4bcc-afbf-d126f6420afd', 'SANG GATOTKOCO KEMBALI'],
            ['8eac0bfb-2a66-4d04-b643-36649964f46c', 'KELURAHAN MOJO'],
            ['8f2858db-e451-4b51-91e8-a094b700ca71', 'DINKOPUKMPERIN'],
            ['92799be3-e7a5-4b25-88e7-8a7fd230afc7', 'BKPSDM'],
            ['94001e72-c0f8-443d-ae27-5cd8c77372d9', 'BAGIAN TATA PEMERINTAHAN'],
            ['94679dcd-6885-490d-bc6b-98d5c9db7b05', 'DLH'],
            ['95deed03-171d-4127-9d20-f846c95f5082', 'KELURAHAN GAJAHAN'],
            ['99b603c3-993c-45e0-9ce8-a2469e01a0eb', 'BPKAD'],
            ['9d51d9c5-3412-4607-83cb-e286380131fd', 'KELURAHAN KETELAN'],
            ['9fa4e5a7-bcd0-4f7f-a4bd-8de7a4e35627', 'KELURAHAN JAYENGAN'],
            ['a1210c5e-1e6f-4e53-8fd3-cfabd578dd48', 'INSPEKTORAT'],
            ['a91dbdec-9d35-4fa1-a9f0-e2d87fc44acc', 'DISDUKCAPIL'],
            ['b1f2071b-3e50-4010-8490-f3c351a572ca', 'DISPANGTAN'],
            ['b2523b15-acb4-4a0c-95e3-0d0c9d10cdf3', 'KELURAHAN SRIWEDARI'],
            ['b33c9dbe-221e-4f08-aacf-21849be3a0ea', 'SATPOL PP'],
            ['b862f627-7ff7-481e-a979-ee580f52fd2c', 'KECAMATAN LAWEYAN'],
            ['c99b3445-8da6-42d1-a01f-31dc255b1480', 'BAGIAN HUKUM'],
            ['d230eeb0-b56a-4462-adce-621ebdc6b59d', 'DISHUB'],
            ['d8831bde-d449-4fef-adfb-dfedbe83cb06', 'DINKES'],
            ['d8832a1d-b914-4d37-b892-fa94ccfdeb69', 'DAMKAR'],
            ['d9585628-7579-4580-8cf3-94238af0274c', 'BLP'],
            ['daa4f63b-38a6-4ec9-8790-734a246c6627', 'DINSOS'],
            ['dbd2dcdc-98d4-4146-8a3a-067e6c6e7914', 'KECAMATAN PASAR KLIWON'],
            ['ea428dcb-6e99-4ced-a203-c42c3d963b6e', 'BAGIAN ADMINISTRASI PEMBANGUNAN'],
            ['ef738b84-a69e-49ac-beb1-2413a4685f49', 'BADAN PENDAPATAN DAERAH'],
            ['f3a31836-c56f-4e1d-9ef5-b196d215f915', 'BAGIAN ORGANISASI'],
            ['f5621f63-4e52-4b54-b5da-963161d88895', 'DISPORA'],
            ['f70aac61-0858-4aa0-ac7f-091822d519ee', 'DISPERKIMTAN'],
        ];

        // Loop melalui data dan gunakan updateOrCreate
        foreach ($data_instansi as $item) {
            
            // Kunci pencarian: menggunakan 'id'
            $attributes = [
                'id' => $item[0],
            ];

            // Nilai yang akan diisi atau diupdate
            $values = [
                'instansi' => $item[1],
                // created_at dan updated_at akan diisi otomatis oleh Eloquent
                // Jika Anda ingin menggunakan timestamp spesifik dari SQL, Anda harus menambahkannya ke sini.
            ];
            
            // Lakukan update atau create
            Instansi::updateOrCreate($attributes, $values);
        }
    }
}
