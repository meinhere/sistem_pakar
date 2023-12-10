<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Seeder;

class CreatePenyakitSeeder extends Seeder
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
                'nama' => 'Denture Stomatitis',
                'kode' => 'P001',
                'penyebab' => 'Berbagai faktor yaitu trauma, mikroba faktor sistemik. Trauma adalah bentuk cedera atau kerusakan yang disebabkan oleh mekanis, termal kimia pada jaringan mukosa mulut yang dapat menyebabkan inflamasi. Mikroba yang menyebabkan terjadinya DS adalah jamur dan bakteri.'
            ],
            [
                'nama' => 'Pulpitis Kronis',
                'kode' => 'P002',
                'penyebab' => 'Lapisan enamel dan dentin pelindung pulpa gigi rusak sehingga bakteri masuk dalam jaringan pulpa.'
            ],
            [
                'nama' => 'Sensitive Dentin',
                'kode' => 'P003',
                'penyebab' => 'Kondisi dentin yang terbuka ini memicu setiap rangsangan, seperti makanan dingin, panas, atau manis mencapai saraf pada gigi. Dengan begitu, gigi akan menjadi lebih sensitif dan bisa menyebabkan rasa tidak nyaman.'
            ],
            [
                'nama' => 'Plak dan Kalkulus',
                'kode' => 'P004',
                'penyebab' => 'Berawal dari sisa-sisa makanan yang menumpuk di gigi hingga sisa makanan ini kemudian berkembang menjadi lapisan tipis dan lengket yang disebut plak. Plak yang dibersihkan dalam waktu yang lama kemudian berubah menjadi kalkulus gigi.'
            ],
            [
                'nama' => 'Abrasi Gigi',
                'kode' => 'P005',
                'penyebab' => 'Menyikat gigi dengan cara yang kurang benar. Sikat gigi yang bertekstur kasar dapat lebih cepat merusak lapisan enamel gigi bila bergesekan dengan gigi secara keras dan terus-menerus. Sering mengonsumsi makanan bertekstur keras, seperti daging, buah-buahan, dan es batu.'
            ],
            [
                'nama' => 'Gingivitis Akut O/K Plak',
                'kode' => 'P006',
                'penyebab' => 'Yang paling sering terjadi disebabkan oleh plak yang menumpuk dan tidak pernah dibersihkan.'
            ],
            [
                'nama' => 'Karies dentin pada permukaan pt & fissure',
                'kode' => 'P007',
                'penyebab' => 'Makanan yang lengket menempel di gigi seperti gula-gula (permen) dan coklat.'
            ],
            [
                'nama' => 'Impaksi M3',
                'kode' => 'P008',
                'penyebab' => 'Tidak tersedianya cukup ruangan pada rahang. Dengan demikian, gigi molar tiga tidak memiliki tempat untuk tumbuh dengan normal.'
            ],
            [
                'nama' => 'Abses Perapikal Dengan Sinus',
                'kode' => 'P009',
                'penyebab' => 'Bakteri yang masuk ke pulpa gigi melalui celah atau rongga, sehingga infeksi kemudian dapat menyebar ke ujung akar gigi dan jaringan sekitarnya.'
            ],
        ];

        Penyakit::insert($data);
    }
}
