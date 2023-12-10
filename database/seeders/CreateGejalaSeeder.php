<?php

namespace Database\Seeders;

use App\Models\Gejala;
use Illuminate\Database\Seeder;

class CreateGejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'Bau mulut',
                'kode' => 'G001'
            ],
            [
                'nama' => 'Sakit kepala',
                'kode' => 'G002'
            ],
            [
                'nama' => 'Gusi bengkak',
                'kode' => 'G003'
            ],
            [
                'nama' => 'Gusi berdarah',
                'kode' => 'G004'
            ],
            [
                'nama' => 'Gigi berlubang',
                'kode' => 'G005'
            ],
            [
                'nama' => 'Noda berwarna coklat, hitam, atau putih pada permukaan gigi',
                'kode' => 'G006'
            ],
            [
                'nama' => 'Sakit gigi',
                'kode' => 'G007'
            ],
            [
                'nama' => 'Sakit rahang gigi',
                'kode' => 'G008'
            ],
            [
                'nama' => 'Terbentuknya nanah dan pembengkakan jaringan',
                'kode' => 'G009'
            ],
            [
                'nama' => 'Demam',
                'kode' => 'G010'
            ],
            [
                'nama' => 'Sakit gigi yang menyebar ke telinga, rahang, dan leher',
                'kode' => 'G011'
            ],
            [
                'nama' => 'Gigi berubah warna',
                'kode' => 'G012'
            ],
            [
                'nama' => 'Kemerahan dan pembengkakan pada wajah',
                'kode' => 'G013'
            ],
            [
                'nama' => 'Pembengkakan kelenjar getah bening di leher atau bawah rahang',
                'kode' => 'G014'
            ],
            [
                'nama' => 'Gigi rapuh',
                'kode' => 'G015'
            ],
            [
                'nama' => 'Gusi berwarna kemerahan, bengkak, dan terasa lunak ketika disentuh dengan lidah atau tangan',
                'kode' => 'G016'
            ],
            [
                'nama' => 'Gusi turun atau menyusut',
                'kode' => 'G017'
            ],
            [
                'nama' => 'Gigi berubah warna',
                'kode' => 'G018'
            ],
            [
                'nama' => 'Perubahan warna gusi',
                'kode' => 'G019'
            ],
        ];

        Gejala::insert($data);
    }
}
