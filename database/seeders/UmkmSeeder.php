<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UmkmSeeder extends Seeder
{
    public function run(): void
    {
        // ==========================================
        // DATA UMKM 1 (Kripik Pisang)
        // ==========================================
        $umkmId1 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Nicholas sumardi ',
            'business_name' => 'Tahu enak siger emas',
            'address' => 'Jl. Nunyai nomer 52',
            'contact' => '08972293929',
            'category' => 'Olahan kedelai/pangan',
            'description' => 'Pembuatan tahu keungulan kenyal padat gurih bebas pengawat, sule lebih kental tanpa pengawet dan gurih, menggunakan kedelai premium pandan tua dan gula murni 100%, tanpa gula buatan kuat 1 minggu di kulkas, suhu ruangan 2 hari, sudah ada sejak 2021.',
            'operational_hours' => '05:00 - 17:00',
            'payment_method' => 'Tunai, QRIS, Transfer',
            'google_maps_status' => 'https://maps.app.goo.gl/gUJBQm9QbiqzFRsC9',
            'store_photo' => 'Toko_tahu_siger_emas.jpg',
            'owner_photo' => 'foto_owner.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('umkm_photos')->insert([
            ['umkm_id' => $umkmId1, 'photo_path' => 'tahu.jpeg', 'caption' => 'Rasa Cokelat', 'created_at' => now()],
            ['umkm_id' => $umkmId1, 'photo_path' => 'tahu.jpeg', 'caption' => 'Rasa Keju', 'created_at' => now()],
        ]);

        DB::table('umkm_links')->insert([
            ['umkm_id' => $umkmId1, 'platform_name' => 'Instagram', 'url' => 'https://www.instagram.com/tahudansusukedelaisigeremas', 'created_at' => now()],
        ]);


        // ==========================================
        // TAMBAHKAN DATA BARU DI SINI (Contoh UMKM 2)
        // ==========================================
        $umkmId2 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Bapak Budi Santoso',
            'business_name' => 'Bakso Son Haji Nunyai',
            'address' => 'Gg. Delima, Kelurahan Nunyai',
            'contact' => '085788990011',
            'category' => 'Kuliner',
            'description' => 'Bakso urat legendaris dengan kuah kaldu sapi murni tanpa pengawet.',
            'operational_hours' => '10:00 - 21:00',
            'payment_method' => 'Tunai',
            'google_maps_status' => '',
            'store_photo' => 'bakso_toko.jpg',
            'owner_photo' => 'pak_budi.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Masukkan foto produk untuk UMKM 2
        DB::table('umkm_photos')->insert([
            [
                'umkm_id' => $umkmId2, 
                'photo_path' => 'bakso_urat.jpg', 
                'caption' => 'Bakso Urat Spesial', 
                'created_at' => now()
            ],
            [
                'umkm_id' => $umkmId2, 
                'photo_path' => 'mie_ayam.jpg', 
                'caption' => 'Mie Ayam Bakso', 
                'created_at' => now()
            ],
        ]);

        // Masukkan link untuk UMKM 2
        DB::table('umkm_links')->insert([
            [
                'umkm_id' => $umkmId2, 
                'platform_name' => 'GrabFood', 
                'url' => 'https://food.grab.com/bakso-sonhaji', 
                'created_at' => now()
            ],
            [
                'umkm_id' => $umkmId2, 
                'platform_name' => 'Instagram', 
                'url' => '@baksosonhaji_nunyai', 
                'created_at' => now()
            ],
        ]);
        // ==========================================
        $umkmId3 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Ibu solha dewi',
            'business_name' => ' sanggar seray serumpun',
            'address' => 'Gg. Delima, Kelurahan Nunyai',
            'contact' => '087771003490 ',
            'category' => 'Kerajinan tangan',
            'description' => 'Kerajinan tangan khas Lampung yang meliputi tas, peci, kalung, gantungan kunci, serta kain tapis. Setiap produk dibuat dengan sentuhan kreativitas dan kearifan lokal, menghadirkan kualitas, keunikan, dan nilai budaya yang cocok sebagai pelengkap gaya maupun cendera mata bernilai seni.',
            'operational_hours' => '08:00 - 17:30',
            'payment_method' => 'Tunai',
            'google_maps_status' => '',
            'store_photo' => 'store_tapis.jpg',
            'owner_photo' => 'owner_tapis.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Masukkan foto produk untuk UMKM 2
        DB::table('umkm_photos')->insert([
            [
                'umkm_id' => $umkmId3, 
                'photo_path' => 'peci_kapal_tapis.jpg', 
                'caption' => 'Peci Tapis Motif 1', 
                'created_at' => now()
            ],
            [
                'umkm_id' => $umkmId3, 
                'photo_path' => 'peci_manuk_meghem.jpg', 
                'caption' => 'Peci Tapis Motif 2', 
                'created_at' => now()
            ],
            [
                'umkm_id' => $umkmId3, 
                'photo_path' => 'peci_motif3.jpg', 
                'caption' => 'Peci Tapis Untuk Sultan Lampung', 
                'created_at' => now()
            ],
            [
                'umkm_id' => $umkmId3, 
                'photo_path' => 'peci_motif4.jpg', 
                'caption' => 'Peci Tapis Motif 4', 
                'created_at' => now()
            ],
        ]);

        // Masukkan link untuk UMKM 2
        DB::table('umkm_links')->insert([
            [
                'umkm_id' => $umkmId3, 
                'platform_name' => 'Facebook', 
                'url' => 'https://www.facebook.com/ahmadlambardislah', 
                'created_at' => now()
            ],
        ]);
    }
}