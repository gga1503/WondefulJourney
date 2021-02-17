<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'category_id' => '2',
                'title' => 'Gunung Bromo, Malang',
                'description' => 'Gunung Bromo (dari bahasa Sanskerta: Brahma, salah seorang Dewa Utama dalam agama Hindu) atau dalam bahasa Tengger dieja "Brama", adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. ',
                'image' => 'bromo.jpg',
            ],

            [
                'category_id' => '1',
                'title' => 'Pantai Carita, Banten',
                'description' => 'Pantai Carita adalah sebuah pantai di pesisir barat provinsi Banten, Indonesia. Pantai ini merupakan objek pariwisata pantai di Indonesia yang cukup terkenal selain Pantai Anyer, Pantai Karang Bolong dan Pantai Tanjung Lesung.',
                'image' => 'Carita.jpg',
            ],

            [
                'category_id' => '2',
                'title' => 'Gunung Merapi, Klaten',
                'description' => 'Gunung Merapi (ketinggian puncak 2.930 mdpl, per 2010) adalah gunung berapi di bagian tengah Pulau Jawa dan merupakan salah satu gunung api teraktif di Indonesia. Lereng sisi selatan berada dalam administrasi Kabupaten Sleman, Daerah Istimewa Yogyakarta, dan sisanya berada dalam wilayah Provinsi Jawa Tengah, yaitu Kabupaten Magelang di sisi barat, Kabupaten Boyolali di sisi utara dan timur, serta Kabupaten Klaten di sisi tenggara. Kawasan hutan di sekitar puncaknya menjadi kawasan Taman Nasional Gunung Merapi sejak tahun 2004.',
                'image' => 'Merapi.jpg',
            ],
        ]);
    }
}
