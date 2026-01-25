<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UmkmSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        // ==========================================
        // 1. Tahu Enak Siger Emas
        // ==========================================
        $umkmId1 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Bapak Nicholas Sumardi & Ibu Diana Eka Lestari',
            'business_name' => 'Tahu Enak Siger Emas',
            'address' => 'Jl. Nunyai No. 52',
            'contact' => '08972293929',
            'category' => 'Olahan Kedelai / Pangan',
            'description' => 'Produsen tahu dan susu kedelai premium sejak 2021 yang mengutamakan kualitas alami. Menghasilkan tahu dengan tekstur kenyal, padat, dan gurih tanpa bahan pengawet. Susu kedelai kami diproses dengan kedelai pilihan dan 100% gula murni, memberikan rasa yang kental dan autentik. Produk segar kami mampu bertahan hingga 1 minggu di dalam pendingin.',
            'operational_hours' => '05:00 - 17:00',
            'payment_method' => 'Tunai, QRIS, Transfer',
            'google_maps_status' => 'https://maps.app.goo.gl/gUJBQm9QbiqzFRsC9',
            'store_photo' => 'toko_tahu_siger_emas.jpg',
            'owner_photo' => 'owner_tahu_siger.jpeg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
            ['umkm_id' => $umkmId1, 'photo_path' => 'sule.jpeg', 'caption' => 'Es Susu Kedelai Premium Bang Di', 'created_at' => $now],
        ]);

        DB::table('umkm_links')->insert([
            ['umkm_id' => $umkmId1, 'platform_name' => 'Instagram', 'url' => 'https://www.instagram.com/tahudansusukedelaisigeremas', 'created_at' => $now],
        ]);


        // ==========================================
        // 2. Bakso Pakdhe
        // ==========================================
        $umkmId2 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Bapak Siman',
            'business_name' => 'Bakso pakde',
            'address' => 'Jl abdul kadir 1',
            'contact' => '085267439700',
            'category' => 'Kuliner',
            'description' => 'Menyajikan perpaduan sempurna antara mie ayam kenyal dengan bumbu rempah rahasia dan bakso daging sapi pilihan yang gurih. Setiap porsi diracik menggunakan bahan-bahan segar setiap harinya untuk menjamin kualitas rasa yang konsisten dan autentik. Pilihan tepat bagi pencinta kuliner yang mencari hidangan hangat, lezat, dan mengenyangkan dengan harga yang terjangkau.',
            'operational_hours' => '10:00 - 21:00',
            'payment_method' => 'Tunai',
            'google_maps_status' => 'https://maps.app.goo.gl/wC4tSd8xonGR3Jk78',
            'store_photo' => 'tempat_bakso_pakde.jpg',
            'owner_photo' => 'owner_bakso_pakde.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
            ['umkm_id' => $umkmId2, 'photo_path' => 'bakso.jpg', 'caption' => 'Bakso Special', 'created_at' => $now],
            ['umkm_id' => $umkmId2, 'photo_path' => 'mieayam.jpg', 'caption' => 'Mie Ayam Bakso', 'created_at' => $now],
        ]);

        DB::table('umkm_links')->insert([
        ]);


        // ==========================================
        // 3. Sanggar Seray Serumpun
        // ==========================================
        $umkmId3 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Ibu Solha Dewi',
            'business_name' => 'Sanggar Seray Serumpun',
            'address' => 'Gg. Delima, Kelurahan Nunyai',
            'contact' => '087771003490',
            'category' => 'Kerajinan Tangan',
            'description' => 'Pusat kerajinan tangan autentik khas Lampung yang memadukan kreativitas modern dengan kearifan lokal. Kami menyediakan berbagai produk eksklusif mulai dari kain tapis, peci, tas, hingga aksesori bernilai seni tinggi. Setiap produk dibuat dengan detail ketelitian untuk menghadirkan kualitas terbaik sebagai cendera mata maupun koleksi pribadi.',
            'operational_hours' => '08:00 - 17:30',
            'payment_method' => 'Tunai, Transfer',
            'google_maps_status' => '', 
            'store_photo' => 'store_tapis.jpeg',
            'owner_photo' => 'owner_tapis.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
            ['umkm_id' => $umkmId3, 'photo_path' => 'peci_kapal_tapis.jpg', 'caption' => 'Peci Tapis Motif Kapal', 'created_at' => $now],
            ['umkm_id' => $umkmId3, 'photo_path' => 'peci_manuk_meghem.jpg', 'caption' => 'Peci Tapis Manuk Meghem', 'created_at' => $now],
            ['umkm_id' => $umkmId3, 'photo_path' => 'peci_motif_premium.jpg', 'caption' => 'Peci Tapis Eksklusif', 'created_at' => $now],
            ['umkm_id' => $umkmId3, 'photo_path' => 'Kalung_tapis.jpg', 'caption' => 'Kalung Tapis', 'created_at' => $now],
            ['umkm_id' => $umkmId3, 'photo_path' => 'Tas_Tapis.jpg', 'caption' => 'Tas Tapis', 'created_at' => $now],
            ['umkm_id' => $umkmId3, 'photo_path' => 'sarung_tapis.jpg', 'caption' => 'Sarung Tapis', 'created_at' => $now],
        ]);

        DB::table('umkm_links')->insert([
            ['umkm_id' => $umkmId3, 'platform_name' => 'Facebook', 'url' => 'https://www.facebook.com/ahmadlambardislah', 'created_at' => $now],
        ]);


        // ==========================================
        // 4. Warung Evi
        // ==========================================
        $umkmId4 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Bapak Ahmad Nurkholik',
            'business_name' => 'Warung Evi',
            'address' => 'Jl. Nunyai, Rajabasa',
            'contact' => '081373821153',
            'category' => 'Warung Kelontong',
            'description' => 'Warung Evi adalah penyedia kebutuhan pokok rumah tangga terpercaya di kawasan Rajabasa. Kami menghadirkan produk esensial harian seperti beras berkualitas, minyak goreng, hingga ketersediaan gas LPG yang selalu terjaga. Dengan pelayanan yang ramah dan sigap, kami berkomitmen menjadi mitra pemenuhan kebutuhan dapur dan logistik harian bagi warga sekitar.',
            'operational_hours' => '07:00 - 21:00',
            'payment_method' => 'Tunai, Transfer (Dana)',
            'google_maps_status' => '', 
            'store_photo' => 'toko_warung_evi.jpeg',
            'owner_photo' => 'owner_warung_evi.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
            [
                'umkm_id' => $umkmId4, 
                'photo_path' => 'produk_warung_eva1.jpeg', 
                'caption' => 'Ketersediaan Keperluan Harian', 
                'created_at' => $now
            ],
            [
                'umkm_id' => $umkmId4, 
                'photo_path' => 'produk_warung_eva2.jpeg', 
                'caption' => 'Ketersediaan Keperluan Harian', 
                'created_at' => $now
            ],
        ]);

        DB::table('umkm_links')->insert([

        ]);

        // ==========================================
        // 5. Toko Fathar
        // ==========================================
        $umkmId5 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Bapak Suhendar',
            'business_name' => 'Toko Fathar',
            'address' => 'Jl. Nunyai, Rajabasa',
            'contact' => '085934610087',
            'category' => 'Toko Kelontong',
            'description' => 'Toko Fathar adalah penyedia kebutuhan sembako harian yang lengkap dan berkualitas di wilayah Rajabasa. Kami berkomitmen memberikan kemudahan bagi warga sekitar dalam memenuhi kebutuhan dapur dengan harga yang kompetitif. Fokus kami adalah pada kesegaran stok barang dan kenyamanan pelanggan saat berbelanja kebutuhan pokok setiap harinya.',
            'operational_hours' => '08:00 - 21:00',
            'payment_method' => 'Tunai, Qris',
            'google_maps_status' => '', // Bersedia diperbarui lokasinya
            'store_photo' => 'toko_fathar.jpeg',
            'owner_photo' => 'owner_toko_fathar.jpeg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
            [
                'umkm_id' => $umkmId5, 
                'photo_path' => 'toko_fathar_produk1.jpeg', 
                'caption' => 'Produk Sembako Lengkap', 
                'created_at' => $now
            ],
            [
                'umkm_id' => $umkmId5, 
                'photo_path' => 'toko_fathar_produk2.jpeg', 
                'caption' => 'Stok Barang Harian', 
                'created_at' => $now
            ],
        ]);


        // ==========================================
        // 6. Laundry Pelangi
        // ==========================================
        $umkmId6 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Bapak Eko',
            'business_name' => 'Laundry Pelangi',
            'address' => 'Jl. Nunyai, Rajabasa',
            'contact' => '085226867509',
            'category' => 'Jasa',
            'description' => 'Laundry Pelangi hadir memberikan solusi kebersihan pakaian dengan hasil yang rapi, harum, dan higienis bagi masyarakat di kawasan Jalan Nunyai. Kami menggunakan detergen pilihan dan proses pencucian yang teliti untuk menjaga kualitas kain tetap awet. Dengan layanan yang tepat waktu dan harga terjangkau, kami menjadi pilihan utama untuk kebutuhan laundry harian keluarga Anda.',
            'operational_hours' => '08:00 - 19:00 WIB',
            'payment_method' => 'Tunai, Qris',
            'google_maps_status' => '', // Bersedia diperbarui lokasinya
            'store_photo' => 'toko_Loundry_Pelangi.jpeg',
            'owner_photo' => 'owner_loundry_pelangi.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
        ]);


        // ==========================================
        // 7. Warung Bu Nila (Sembako)
        // ==========================================
        $umkmId7 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Ibu Nila Puspita Sari',
            'business_name' => 'Warung Bu Nila (Sembako)',
            'address' => 'Jl. Nunyai, Gang Semangka',
            'contact' => '088275850955',
            'category' => 'Toko Kelontong',
            'description' => 'Warung Bu Nila menyediakan berbagai kebutuhan pokok dan sembako harian untuk warga di sekitar Jalan Nunyai, khususnya Gang Semangka. Kami memastikan ketersediaan produk berkualitas dengan harga yang kompetitif untuk memenuhi kebutuhan dapur rumah tangga Anda.',
            'operational_hours' => '05:30 - 18:00 WIB',
            'payment_method' => 'Tunai, Transfer (Dana)',
            'google_maps_status' => '',
            'store_photo' => 'toko_sembako_bunila.png',
            'owner_photo' => 'owner_warung_bunila.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
        ]);

        // ==========================================
        // 8. Nasi Uduk Bu Nila (Kuliner)
        // ==========================================
        $umkmId8 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Ibu Nila Puspita Sari',
            'business_name' => 'Nasi Uduk Bu Nila',
            'address' => 'Jl. Nunyai, Gang Semangka',
            'contact' => '088275850955',
            'category' => 'Kuliner',
            'description' => 'Awali pagi Anda dengan kelezatan autentik Nasi Uduk Bu Nila. Kami menyajikan nasi uduk gurih lengkap dengan gorengan dan lontong sayur yang menggugah selera. Tersedia Paket Komplit Telur hanya Rp10.000 dan Paket Ekonomis (Uduk + Gorengan) hanya Rp7.000. Sarapan nikmat, kenyang, dan hemat di Gang Semangka.',
            'operational_hours' => '05:30 - 09:00 WIB',
            'payment_method' => 'Tunai, Transfer (Dana)',
            'google_maps_status' => '',
            'store_photo' => 'toko_nasi_uduk_bunila.png',
            'owner_photo' => 'owner_warung_bunila.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
            ['umkm_id' => $umkmId8, 'photo_path' => 'nasi_uduk_bunila.jpeg', 'caption' => 'Nasi Uduk', 'created_at' => $now],
        ]);
    }
}