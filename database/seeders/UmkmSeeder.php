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
            'store_photo' => 'Toko_tahu_siger_emas.jpeg',
            'owner_photo' => 'owner_tahu_siger.jpeg',
            'created_at' => $now,
            'updated_at' => $now    ,
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
            'owner_photo' => 'owner_toko_fathar.jpg',
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
            'owner_photo' => 'owner_loundry_pelangi.png',
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


        // ==========================================
        // 9. By Muli Laundry
        // ==========================================
        $umkmId9 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Bapak Rahmat',
            'business_name' => 'By Muli Laundry',
            'address' => 'Jl. Rajabasa Nunyai',
            'contact' => '085709620174',
            'category' => 'Jasa',
            'description' => 'By Muli Laundry hadir sebagai solusi praktis untuk perawatan pakaian Anda di area Rajabasa Nunyai. Kami mengutamakan kebersihan maksimal dan keharuman yang tahan lama untuk setiap helai pakaian. Dengan pengerjaan yang teliti dan tepat waktu, kami memastikan pakaian Anda kembali dalam kondisi prima, rapi, dan siap pakai.',
            'operational_hours' => '07:30 - 17:00 WIB',
            'payment_method' => 'Tunai, QRIS',
            'google_maps_status' => '',
            'store_photo' => 'Toko_By Muli Laundry.jpg',
            'owner_photo' => 'default_owner.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
            [
                'umkm_id' => $umkmId9, 
                'photo_path' => 'By Muli Laundry.jpg', 
                'caption' => 'Layanan Cuci dan Setrika Rapi', 
                'created_at' => $now
            ],
        ]);


        // ==========================================
        // 10. Geprek Yasaka Fried Chicken
        // ==========================================
        $umkmId10 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Bapak Nurul Huda',
            'business_name' => 'Geprek Yasaka Fried Chicken',
            'address' => 'Jl. Rajabasa Nunyai',
            'contact' => '085896881690',
            'category' => 'Kuliner',
            'description' => 'Geprek Yasaka Fried Chicken menyajikan ayam goreng krispi yang lezat dengan sambal geprek pilihan yang pedas dan menggugah selera. Terletak strategis di Jalan Rajabasa Nunyai, kami menawarkan kualitas rasa ayam goreng ala Yasaka yang sudah dikenal luas dengan harga yang sangat terjangkau. Selain sajian kuliner, kami juga menyediakan layanan pengisian gas LPG untuk mempermudah kebutuhan rumah tangga warga sekitar.',
            'operational_hours' => '07:00 - 18:00 WIB',
            'payment_method' => 'Tunai Qris',
            'google_maps_status' => '',
            'store_photo' => 'Toko_Yasaka Fried Chicken.jpg',
            'owner_photo' => 'default_owner.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
            [
                'umkm_id' => $umkmId10, 
                'photo_path' => 'Yasaka Fried Chicken.jpg', 
                'caption' => 'Tempat', 
                'created_at' => $now
            ],
        ]);


        // ==========================================
        // 11. Peyek Ibu Wulan
        // ==========================================
        $umkmId11 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Ibu Widarsih',
            'business_name' => 'Peyek Ibu Wulan',
            'address' => 'Jl. A. Kadir II No.39, Rajabasa, Kota Bandar Lampung',
            'contact' => '089624317693',
            'category' => 'Kuliner',
            'description' => 'Peyek Ibu Wulan menghadirkan kelezatan camilan tradisional yang sehat dan autentik. Kami menyediakan aneka varian peyek seperti peyek teri dan kacang, serta kerupuk gendar dan keripik pisang gurih. Keunggulan produk kami adalah penggunaan bahan-bahan alami pilihan tanpa tambahan micin (MSG), sehingga aman dikonsumsi keluarga. Dengan kemasan mulai dari 250 gram hingga 1 kg, produk kami tetap renyah dan nikmat hingga satu bulan.',
            'operational_hours' => 'Sabtu - Minggu (Fleksibel)',
            'payment_method' => 'Tunai',
            'google_maps_status' => '',
            'store_photo' => 'toko_peyek_wulan.jpg',
            'owner_photo' => 'Owner_Penyek Bu Wulan.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
            [
                'umkm_id' => $umkmId11, 
                'photo_path' => 'Peyek Teri.jpg', 
                'caption' => 'Peyek Teri', 
                'created_at' => $now
            ],
            [
                'umkm_id' => $umkmId11, 
                'photo_path' => 'Kerupuk Gendar.jpg', 
                'caption' => 'Kerupuk Gendar', 
                'created_at' => $now
            ],
            [
                'umkm_id' => $umkmId11, 
                'photo_path' => 'keripik pisang.jpg', 
                'caption' => 'Keripik Pisang', 
                'created_at' => $now
            ],
        ]);


        // ==========================================
        // 12. Guan Motor
        // ==========================================
        $umkmId12 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Ibu Guan',
            'business_name' => 'Guan Motor',
            'address' => 'Jl. Nunyai No. 45, Rajabasa',
            'contact' => '081279143998',
            'category' => 'Bengkel & Toko Kelontong',
            'description' => 'Guan Motor hadir sebagai solusi satu atap untuk kebutuhan kendaraan dan rumah tangga Anda di Jalan Nunyai. Kami menyediakan jasa servis motor profesional yang ditangani oleh tenaga berpengalaman untuk memastikan performa kendaraan Anda tetap optimal. Selain bengkel, kami juga mengelola warung kelontong yang menyediakan kebutuhan esensial seperti pengisian gas LPG, galon air mineral, dan berbagai kebutuhan harian lainnya dengan pelayanan yang cepat dan jam operasional yang panjang hingga malam hari.',
            'operational_hours' => '07:00 - 23:00 WIB',
            'payment_method' => 'Tunai, QRIS',
            'google_maps_status' => '',
            'store_photo' => 'toko_guan_motor.jpeg',
            'owner_photo' => 'owner_guan_motor.jpeg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([

        ]);


        // ==========================================
        // 13. Livi Juice
        // ==========================================
        $umkmId13 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Diana',
            'business_name' => 'Livi Juice',
            'address' => 'Jl. Nunyai, Rajabasa',
            'contact' => '089527386658',
            'category' => 'Minuman',
            'description' => 'Livi Juice menawarkan kesegaran alami dari aneka jus buah segar yang diracik langsung untuk menjaga kualitas vitamin dan rasanya. Selain berbagai pilihan jus buah, kami juga menyediakan minuman populer seperti Pop Ice dan teh segar yang cocok dinikmati di segala suasana. Dengan pelayanan yang ramah dan harga yang terjangkau, Livi Juice adalah pilihan utama untuk melepas dahaga Anda di kawasan Jalan Nunyai.',
            'operational_hours' => '11:00 - 21:00',
            'payment_method' => 'Tunai, QRIS',
            'google_maps_status' => '', // Membutuhkan pembuatan titik Google Maps
            'store_photo' => 'Toko_Livi Juice.jpg',
            'owner_photo' => 'Owner_Livi Juice.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([

        ]);


        // ==========================================
        // 14. Salon Mesy
        // ==========================================
        $umkmId14 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Ibu Mesy',
            'business_name' => 'Salon Mesy',
            'address' => 'Jl. Nunyai No. 45, Rajabasa',
            'contact' => '085378044476',
            'category' => 'Jasa',
            'description' => 'Salon Mesy menawarkan berbagai layanan perawatan kecantikan profesional untuk menunjang penampilan Anda. Terletak strategis di Jalan Nunyai, kami menyediakan jasa potong rambut, perawatan rambut, hingga styling dengan sentuhan tenaga ahli yang berpengalaman. Kami berkomitmen memberikan kenyamanan maksimal dan hasil terbaik bagi setiap pelanggan dalam suasana salon yang ramah dan harga yang bersahabat.',
            'operational_hours' => '10:00 - 20:00',
            'payment_method' => 'Tunai, QRIS',
            'google_maps_status' => '',
            'store_photo' => 'toko_salon_messy.jpeg',
            'owner_photo' => 'owner_salon_messy.jpeg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
            [
                'umkm_id' => $umkmId14, 
                'photo_path' => 'salon_messy1.png', 
                'caption' => 'Interior Salon yang Nyaman', 
                'created_at' => $now
            ],
        ]);


        // ==========================================
        // 15. Surya Cell
        // ==========================================
        $umkmId15 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Surya',
            'business_name' => 'Surya Cell',
            'address' => 'Jl. Rajabasa Nunyai',
            'contact' => '081991370421',
            'category' => 'Konter HP',
            'description' => 'Surya Cell merupakan pusat pemenuhan kebutuhan digital dan aksesoris gadget Anda di Jalan Rajabasa Nunyai. Kami menyediakan berbagai pilihan paket data internet dari semua operator dengan harga kompetitif, serta koleksi casing HP yang stylish dan fungsional untuk melindungi perangkat Anda. Dengan pelayanan yang cepat dan jam operasional yang panjang, Surya Cell berkomitmen memudahkan akses komunikasi dan kebutuhan digital warga sekitar.',
            'operational_hours' => '08:00 - 21:00',
            'payment_method' => 'Tunai, QRIS',
            'google_maps_status' => '',
            'store_photo' => 'toko_surya_cell.png',
            'owner_photo' => 'owner_surya_cell.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
        ]);


        // ==========================================
        // 16. Warung Makan Umi Mona
        // ==========================================
        $umkmId16 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Bapak Nehru',
            'business_name' => 'Warung Makan Umi Mona',
            'address' => 'Jl. Nunyai Blok A No. 5B, Rajabasa',
            'contact' => '082176295285',
            'category' => 'Kuliner',
            'description' => 'Warung Makan Umi Mona menyajikan aneka hidangan rumahan dengan konsep prasmanan yang higienis dan menggugah selera. Kami menawarkan berbagai pilihan sayur dan lauk pauk khas masakan nusantara yang diracik dengan bumbu pilihan setiap harinya. Dengan tempat yang bersih dan harga yang bersahabat, Umi Mona adalah destinasi kuliner ideal bagi Anda yang merindukan cita rasa masakan ibu di tengah kesibukan harian di kawasan Jalan Nunyai.',
            'operational_hours' => '10:00 - 22:00 WIB',
            'payment_method' => 'Tunai, QRIS',
            'google_maps_status' => '',
            'store_photo' => 'toko_umi_mona.jpeg',
            'owner_photo' => 'owner_umi_mona.jpeg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
            [
                'umkm_id' => $umkmId16, 
                'photo_path' => 'umi_mona1.jpeg', 
                'caption' => 'Pilihan Menu Prasmanan Harian', 
                'created_at' => $now
            ],
            [
                'umkm_id' => $umkmId16, 
                'photo_path' => 'umi_mona2.jpeg', 
                'caption' => 'Pilihan Menu Prasmanan Harian', 
                'created_at' => $now
            ],
            [
                'umkm_id' => $umkmId16, 
                'photo_path' => 'umi_mona3.jpeg', 
                'caption' => 'Pilihan Menu Prasmanan Harian', 
                'created_at' => $now
            ],
            [
                'umkm_id' => $umkmId16, 
                'photo_path' => 'umi_mona4.jpeg', 
                'caption' => 'Pilihan Menu Prasmanan Harian', 
                'created_at' => $now
            ],
            [
                'umkm_id' => $umkmId16, 
                'photo_path' => 'umi_mona5.jpeg', 
                'caption' => 'Pilihan Menu Prasmanan Harian', 
                'created_at' => $now
            ],
        ]);


        // ==========================================
        // 17. Toko Syifa
        // ==========================================
        $umkmId17 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Rifal',
            'business_name' => 'Toko Syifa',
            'address' => 'Jl. Rajabasa Nunyai',
            'contact' => '085138606220',
            'category' => 'Toko Kelontong',
            'description' => 'Toko Syifa adalah toko kelontong yang setia melayani kebutuhan harian warga Rajabasa Nunyai dengan waktu pelayanan yang fleksibel hingga tengah malam. Kami menyediakan stok sembako berkualitas mulai dari beras, minyak, hingga berbagai macam jajanan dan camilan lengkap. Lokasinya yang strategis menjadikannya pilihan utama bagi warga yang mencari kebutuhan rumah tangga atau sekadar ingin membeli kudapan dengan pelayanan yang ramah.',
            'operational_hours' => '12:00 - 00:00 WIB',
            'payment_method' => 'Tunai, QRIS',
            'google_maps_status' => '', // Berdasarkan permintaan pembuatan gmaps
            'store_photo' => 'toko_syifa.jpeg',
            'owner_photo' => 'owner_toko_syifa.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
            [
                'umkm_id' => $umkmId17, 
                'photo_path' => 'toko_syifa1.jpg', 
                'caption' => 'Aneka Snack dan Jajanan', 
                'created_at' => $now
            ],
        ]);


        // ==========================================
        // 18. Warung Nasi Istiqomah
        // ==========================================
        $umkmId18 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Ibu Rousini',
            'business_name' => 'Warung Nasi Istiqomah',
            'address' => 'Jalan Nunyai Utama',
            'contact' => '085956488246',
            'category' => 'Kuliner',
            'description' => 'Warung Nasi Istiqomah menghadirkan cita rasa masakan rumahan yang otentik dan higienis dengan sistem prasmanan. Mulai melayani sejak pagi hari, kami menjadi pilihan favorit bagi warga Jalan Nunyai Utama untuk sarapan maupun makan siang dengan beragam pilihan lauk pauk dan sayuran segar. Dengan harga yang terjangkau dan pelayanan yang ramah, kami berkomitmen menyajikan hidangan lezat yang memberikan kenyamanan layaknya masakan di rumah sendiri.',
            'operational_hours' => '06:30 - 20:00',
            'payment_method' => 'Tunai',
            'google_maps_status' => '',
            'store_photo' => 'toko_istiqomah.jpeg',
            'owner_photo' => 'owner_nasi_istiqomah.jpeg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
        ]);


        // ==========================================
        // 19. Aquarius (Depot Air)
        // ==========================================
        $umkmId19 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Bapak Heri',
            'business_name' => 'Aquarius',
            'address' => 'Jalan Nunyai Haji Ismail, Rajabasa',
            'contact' => '087870397789',
            'category' => 'Depot Air',
            'description' => 'Aquarius merupakan penyedia jasa depot air minum isi ulang yang mengutamakan kebersihan dan kualitas air bagi warga di sekitar Jalan Nunyai Haji Ismail. Dengan proses filtrasi yang higienis dan terstandarisasi, kami berkomitmen menghadirkan air minum yang segar, jernih, dan aman dikonsumsi harian dengan harga yang sangat ekonomis. Pelayanan yang cepat serta jam operasional yang panjang sejak pagi hari menjadikan Aquarius solusi praktis untuk memenuhi kebutuhan air minum keluarga Anda.',
            'operational_hours' => '06:00 - 21:00',
            'payment_method' => 'Tunai',
            'google_maps_status' => 'Request Setup', // Berdasarkan catatan Gmaps di data
            'store_photo' => 'Toko_Aquarius.jpg',
            'owner_photo' => 'Owner_Aquarius.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
        ]);


        // ==========================================
        // 20. Laundry Dian
        // ==========================================
        $umkmId20 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Dian',
            'business_name' => 'Laundry Dian',
            'address' => 'Jalan Rajabasa Nunyai',
            'contact' => '085267888331',
            'category' => 'Jasa',
            'description' => 'Laundry Dian adalah penyedia jasa pencucian pakaian yang mengedepankan kebersihan dan ketepatan waktu di wilayah Jalan Rajabasa Nunyai. Kami berkomitmen untuk menjaga kualitas setiap helai pakaian Anda agar tetap bersih, harum, dan rapi menggunakan produk pembersih berkualitas. Layanan kami dirancang untuk mempermudah rutinitas harian Anda dengan harga yang terjangkau dan pelayanan yang ramah.',
            'operational_hours' => '08:00 - 17:00',
            'payment_method' => 'Tunai',
            'google_maps_status' => '', // Berdasarkan permintaan di data
            'store_photo' => 'Toko_Laundry Dian.jpg',
            'owner_photo' => 'Owner_Laundry Dian.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
            [
                'umkm_id' => $umkmId20, 
                'photo_path' => 'Laundry Dian.jpg', 
                'caption' => 'Pakaian Bersih dan Harum', 
                'created_at' => $now
            ],
        ]);


        // ==========================================
        // 21. Vermak Levis
        // ==========================================
        $umkmId21 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Bapak Agus',
            'business_name' => 'Vermak Levis',
            'address' => 'Jl. Nunyai, Rajabasa',
            'contact' => '081272585110',
            'category' => 'Jasa / Penjahit',
            'description' => 'Vermak Levis Bapak Agus memberikan solusi perbaikan pakaian berbahan denim atau levis dengan hasil jahitan yang kuat, rapi, dan presisi. Terletak di Jalan Nunyai, kami melayani berbagai kebutuhan vermak seperti potong celana, kecilkan pinggang, hingga perbaikan detail lainnya untuk memastikan pakaian Anda kembali nyaman dan pas saat dikenakan. Dengan jam operasional hingga malam hari, kami siap melayani kebutuhan jahit Anda dengan pelayanan yang cepat dan hasil yang memuaskan.',
            'operational_hours' => '09:00 - 22:00 WIB',
            'payment_method' => 'Tunai',
            'google_maps_status' => '', // Berdasarkan permintaan pembuatan gmaps
            'store_photo' => 'toko_vermak_levis.jpeg',
            'owner_photo' => 'owner_vermak_levis.jpeg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([

        ]);


        // ==========================================
        // 22. Ayam Geprek Merapi
        // ==========================================
        $umkmId22 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Ibu Dian Laila Fitri',
            'business_name' => 'Ayam Geprek Merapi',
            'address' => 'Jl. Abdul Kadir III, Gang Nuri No. 7, Rajabasa',
            'contact' => '085217758797',
            'category' => 'Kuliner',
            'description' => 'Ayam Geprek Merapi menyajikan sensasi ayam goreng krispi dengan perpaduan sambal korek yang pedasnya meledak bak merapi. Menggunakan ayam pilihan yang segar dan bumbu rempah rahasia, kami menjamin kualitas rasa yang gurih meresap hingga ke dalam. Kami melayani pemesanan langsung di tempat (offline) maupun melalui berbagai platform pengiriman online untuk menemani santap siang maupun malam Anda dengan praktis.',
            'operational_hours' => 'Online: 07:00-21:00, Offline: 10:00-21:00',
            'payment_method' => 'Tunai, Dana, ShopeePay',
            'google_maps_status' => 'https://maps.app.goo.gl/7mYnRe8SLBqe9fri9',
            'store_photo' => 'Toko_Ayam Geprek Merapi.jpg',
            'owner_photo' => 'Owner_Ayam Geprek Merapi.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
            [
                'umkm_id' => $umkmId22, 
                'photo_path' => 'Ayam Geprek Merapi 2.jpg', 
                'caption' => 'Menu Ayam Geprek Merapi', 
                'created_at' => $now
            ],
        ]);

        DB::table('umkm_links')->insert([
            ['umkm_id' => $umkmId22, 'platform_name' => 'ShopeeFood', 'url' => 'https://shopee.co.id/universal-link/now-food/shop/ayam-geprek-merapi', 'created_at' => $now],
            ['umkm_id' => $umkmId22, 'platform_name' => 'GrabFood', 'url' => 'https://r.grab.com/g/6-20260131_012807_b111150869b34bfd80ef2a6a4d853567_MEXMPS-6-C65JPF3AJTTWL2', 'created_at' => $now],
            ['umkm_id' => $umkmId22, 'platform_name' => 'GoFood', 'url' => 'https://gofood.link/a/ayam-geprek-merapi', 'created_at' => $now],
        ]);


        // ==========================================
        // 23. Toko     
        // ==========================================
        $umkmId23 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Ibu Lilis Nur Indah Sari',
            'business_name' => 'Toko Dua Putri',
            'address' => 'Jl. Nunyai No. 47, Rajabasa',
            'contact' => '085832566050',
            'category' => 'Toko Kelontong & Petshop',
            'description' => 'Toko Dua Putri hadir sebagai solusi praktis bagi warga Jalan Nunyai yang membutuhkan sembako sekaligus perlengkapan hewan peliharaan dalam satu tempat. Kami menyediakan berbagai kebutuhan pokok rumah tangga dan aneka makanan petshop berkualitas dengan harga yang sangat bersaing, mulai dari Rp6.000 hingga Rp25.000. Dengan pelayanan yang ramah dan produk yang lengkap, kami berkomitmen memberikan kemudahan belanja hemat untuk Anda dan hewan kesayangan.',
            'operational_hours' => '06:30 - 18:00 WIB',
            'payment_method' => 'Tunai, QRIS',
            'google_maps_status' => '', // Berdasarkan catatan Gmaps di data
            'store_photo' => 'toko_dua_putri.jpeg',
            'owner_photo' => 'owner_dua_putri.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
            [
                'umkm_id' => $umkmId23, 
                'photo_path' => 'produk_sembako warung dua putri.jpeg', 
                'caption' => 'Stok Sembako Lengkap', 
                'created_at' => $now
            ],
            [
                'umkm_id' => $umkmId23, 
                'photo_path' => 'Produk_ petshop warung dua putri.jpeg', 
                'caption' => 'Makanan Hewan Harga Terjangkau', 
                'created_at' => $now
            ],
        ]);


        // ==========================================
        // 24. Warung Bu Ros
        // ==========================================
        $umkmId24 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Pak Udin',
            'business_name' => 'Warung Bu Ros',
            'address' => 'Jalan Abdul Kadir 1, Rajabasa',
            'contact' => '081272289692',
            'category' => 'Warung Kelontong',
            'description' => 'Warung Bu Ros adalah toko kelontong terpercaya di wilayah Jalan Abdul Kadir yang menyediakan berbagai kebutuhan pokok (sembako) serta aneka jajanan lengkap untuk warga sekitar. Kami berkomitmen memberikan pelayanan yang ramah dan harga yang bersahabat setiap harinya. Dengan jam operasional yang panjang mulai dari pagi hari hingga malam, kami siap menjadi solusi praktis bagi kebutuhan dapur dan camilan harian keluarga Anda.',
            'operational_hours' => '06:00 - 21:30 WIB',
            'payment_method' => 'Tunai',
            'google_maps_status' => '', // Pemilik meminta pembuatan titik Google Maps
            'store_photo' => 'toko_warung_bu_ros.jpeg',
            'owner_photo' => 'owner_warung_bu_ros.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
        ]);


        // ==========================================
        // 25. Ayam Geprek Tata 2
        // ==========================================
        $umkmId25 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Sinta',
            'business_name' => 'Ayam Geprek Tata 2',
            'address' => 'Jl. Abdul Kadir 1, Rajabasa',
            'contact' => '081373436033',
            'category' => 'Kuliner',
            'description' => 'Ayam Geprek Tata 2 menyajikan kelezatan ayam goreng krispi dengan balutan sambal geprek yang pedas dan autentik. Kami berkomitmen menyajikan hidangan yang selalu segar setiap harinya dengan harga yang sangat terjangkau bagi para pelajar dan warga di kawasan Jalan Abdul Kadir. Pilihan favorit bagi Anda yang mencari santap siang atau makan malam yang praktis, mengenyangkan, dan penuh cita rasa.',
            'operational_hours' => '08:00 - 20:00 WIB',
            'payment_method' => 'Tunai, QRIS',
            'google_maps_status' => 'https://maps.app.goo.gl/VBFFy8Yin48RC4gn7',
            'store_photo' => 'Toko_Ayam Geprek Tata 2.jpg',
            'owner_photo' => 'Owner_Ayam Geprek Tata 2.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
            [
                'umkm_id' => $umkmId25, 
                'photo_path' => 'menu_geprek_tata2.jpeg', 
                'caption' => 'Paket Ayam Geprek Krispi', 
                'created_at' => $now
            ],
        ]);
        DB::table('umkm_links')->insert([
            ['umkm_id' => $umkmId22, 'platform_name' => 'ShopeeFood', 'url' => 'https://shopee.co.id/universal-link/now-food/shop/ayam-geprek-merapi', 'created_at' => $now],
            ['umkm_id' => $umkmId22, 'platform_name' => 'GrabFood', 'url' => 'https://r.grab.com/g/6-20260131_012807_b111150869b34bfd80ef2a6a4d853567_MEXMPS-6-C65JPF3AJTTWL2', 'created_at' => $now],
            ['umkm_id' => $umkmId22, 'platform_name' => 'GoFood', 'url' => 'https://gofood.link/a/ayam-geprek-merapi', 'created_at' => $now],
        ]);


        // ==========================================
        // 26. Berkah Jaya (Sembako)
        // ==========================================
        $umkmId26 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Lasino, ST., M.MB.',
            'business_name' => 'Berkah Jaya',
            'address' => 'Jl. Nunyai, Rajabasa',
            'contact' => '081379228607',
            'category' => 'Toko Kelontong',
            'description' => 'Berkah Jaya adalah pusat penyedia kebutuhan pokok dan perlengkapan rumah tangga terlengkap di kawasan Nunyai. Kami melayani pelanggan sejak pagi buta untuk memastikan kebutuhan dapur Anda terpenuhi dengan harga yang sangat kompetitif. Dengan stok yang selalu diperbarui dan pelayanan yang terorganisir, kami menjadi mitra belanja harian yang handal bagi warga sekitar.',
            'operational_hours' => '05:30 - 21:00 WIB',
            'payment_method' => 'Tunai, QRIS',
            'google_maps_status' => 'Tersedia',
            'store_photo' => 'Toko_Berkah Jaya dan Rice Bowl Mama Yonce (1).jpg',
            'owner_photo' => 'Owner_Berkah Jaya dan Ricebowl Mama Yonce.png',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
        ]);

        // ==========================================
        // 27. Mama Yonce Rice Bowl (Kuliner)
        // ==========================================
        $umkmId27 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Lasino, ST., M.MB.',
            'business_name' => 'Mama Yonce Rice Bowl',
            'address' => 'Jl. Nunyai, Rajabasa',
            'contact' => '081379228607',
            'category' => 'Kuliner',
            'description' => 'Mama Yonce Rice Bowl menyajikan solusi makan praktis, lezat, dan mengenyangkan dalam bentuk rice bowl. Kami menawarkan harga spesial untuk pembelian langsung (offline) hanya Rp12.000, serta tersedia di platform online untuk kemudahan Anda. Setiap porsi diracik dengan bumbu berkualitas untuk menghadirkan cita rasa masakan rumah yang modern dan higienis.',
            'operational_hours' => '05:30 - 21:00 WIB',
            'payment_method' => 'Tunai, QRIS',
            'google_maps_status' => 'Tersedia',
            'store_photo' => 'Berkah Jaya dan Mama Yonce 2.jpg',
            'owner_photo' => 'Owner_Berkah Jaya dan Ricebowl Mama Yonce.png',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
        ]);

        DB::table('umkm_links')->insert([
            ['umkm_id' => $umkmId27, 'platform_name' => 'ShopeeFood', 'url' => 'https://shopee.co.id/universal-link/now-food/shop/mama-yonce', 'created_at' => $now],
        ]);


        // ==========================================
        // 28. Warung Defi Yayan
        // ==========================================
        $umkmId28 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Devi Yayan',
            'business_name' => 'Warung Defi Yayan',
            'address' => 'Jl. Abdul Kadir 1, Gang Rajawali',
            'contact' => '082183821386',
            'category' => 'Warung Sayur & Kelontong',
            'description' => 'Warung Defi Yayan adalah penyedia sayuran segar dan kebutuhan pokok harian yang berlokasi di area Gang Rajawali. Kami melayani warga sejak dini hari untuk memastikan ketersediaan bahan masakan segar seperti sayur-mayur, bumbu dapur, hingga sembako berkualitas. Dengan produk yang selalu diperbarui setiap hari dan harga yang bersahabat, kami berkomitmen menjadi solusi belanja kebutuhan dapur yang praktis dan terpercaya bagi keluarga Anda.',
            'operational_hours' => '05:00 - 18:00 WIB',
            'payment_method' => 'Tunai',
            'google_maps_status' => '', // Belum tersedia
            'store_photo' => 'Toko_Defi Yayan.jpg',
            'owner_photo' => 'Owner_Defi Yayan.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
        ]);


        // ==========================================
        // 29. Warung Bu Yamin
        // ==========================================
        $umkmId29 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Bu Yamin',
            'business_name' => 'Warung Bu Yamin',
            'address' => 'Jl. Abdul Kadir 1, Rajabasa',
            'contact' => '082280190108',
            'category' => 'Kuliner',
            'description' => 'Warung Bu Yamin menyajikan kelezatan nasi uduk hangat yang gurih dengan aroma rempah yang menggoda. Cocok untuk sarapan pagi hingga makan malam, kami hadir dengan porsi yang mengenyangkan dan berbagai pilihan lauk pelengkap yang autentik. Terletak di Jalan Abdul Kadir 1, kami mengedepankan kualitas rasa masakan rumahan yang konsisten dan pelayanan yang ramah untuk memenuhi selera pecinta kuliner di kawasan Rajabasa.',
            'operational_hours' => '05:30 - 21:00 WIB',
            'payment_method' => 'Tunai',
            'google_maps_status' => '',
            'store_photo' => 'warung_bu_yamin.jpeg',
            'owner_photo' => 'owner_bu_yamin.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
        ]);


        // ==========================================
        // 30. Warung Pecel Mak Mbot
        // ==========================================
        $umkmId30 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Suyati',
            'business_name' => 'Warung Pecel Mak Mbot',
            'address' => 'Jl. Abdul Kadir 1, Rajabasa',
            'contact' => '083160186395',
            'category' => 'Kuliner',
            'description' => 'Warung Pecel Mak Mbot menyajikan cita rasa masakan tradisional yang autentik dengan bumbu kacang khas yang gurih dan lezat. Selain menu pecel sayur yang segar, kami juga menyediakan pilihan menu favorit lainnya seperti nasi goreng bumbu rempah dan aneka sate yang diolah dengan bumbu pilihan. Sangat cocok bagi Anda yang mencari hidangan makan siang yang nikmat, mengenyangkan, dan ramah di kantong di kawasan Jalan Abdul Kadir 1.',
            'operational_hours' => '08:00 - 16:00 WIB',
            'payment_method' => 'Tunai',
            'google_maps_status' => '', // Tidak ada/Belum tersedia
            'store_photo' => 'toko_warung_mak_mbot.jpeg',
            'owner_photo' => 'owner_warung_mak_mbot.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
        ]);


        // ==========================================
        // 31. Toko Alex
        // ==========================================
        $umkmId31 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Ibu Alex',
            'business_name' => 'Toko Alex',
            'address' => 'Jl. Nunyai Indah Blok C',
            'contact' => '081369685599',
            'category' => 'Toko Kelontong',
            'description' => 'Toko Alex hadir di Jalan Nunyai Indah Blok C sebagai penyedia kebutuhan harian warga sekitar yang andal. Dengan jam operasional yang dimulai sejak pukul 05.00 pagi, kami siap melayani pelanggan yang membutuhkan berbagai perlengkapan rumah tangga, produk tembakau, dan aneka barang kelontong lainnya. Kami mengedepankan pelayanan yang ramah dan konsisten, menjadikan Toko Alex pilihan praktis untuk memenuhi kebutuhan harian Anda tanpa harus pergi jauh dari lingkungan rumah.',
            'operational_hours' => '05:00 - 21:00 WIB',
            'payment_method' => 'Tunai',
            'google_maps_status' => '',
            'store_photo' => 'toko_alex.jpeg',
            'owner_photo' => 'owner_toko_alex.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
            [
                'umkm_id' => $umkmId31, 
                'photo_path' => 'produk_toko alex2.jpeg', 
                'caption' => 'Kebutuhan Harian Lengkap', 
                'created_at' => $now
            ],
            [
                'umkm_id' => $umkmId31, 
                'photo_path' => 'produk_toko alex1.jpeg', 
                'caption' => 'Jajanan dan camilan murah meriah', 
                'created_at' => $now
            ],
        ]);


        // ==========================================
        // 32. Warung Sembako Oma Al
        // ==========================================
        $umkmId32 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Ibu Fitri',
            'business_name' => 'Warung Sembako Oma Al',
            'address' => 'Jl. Abdul Kadir, Gg. Rajawali No. 141/30',
            'contact' => '081358600149',
            'category' => 'Toko Kelontong',
            'description' => 'Warung Sembako Oma Al adalah penyedia kebutuhan pokok harian yang terpercaya di area Gang Rajawali. Kami menyediakan stok beras, minyak goreng, dan berbagai kebutuhan rumah tangga lainnya dengan harga yang bersaing. Melayani warga sejak pagi buta hingga malam hari, kami berkomitmen untuk selalu menyediakan produk yang lengkap untuk kebutuhan dapur Anda.',
            'operational_hours' => '05:30 - 22:00 WIB',
            'payment_method' => 'Tunai, QRIS',
            'google_maps_status' => '',
            'store_photo' => 'Toko_Warung Oma Al.jpg',
            'owner_photo' => 'Owner_Warung Oma Al.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_photos')->insert([
            [
                'umkm_id' => $umkmId32, 
                'photo_path' => 'Warung Oma Al 1.jpg', 
                'caption' => 'Kebutuhan Harian Lengkap', 
                'created_at' => $now
            ],
        ]);


        // ==========================================
        // 33. Nasi Uduk & Nasi Kuning Oma Al
        // ==========================================
        $umkmId33 = DB::table('umkms')->insertGetId([
            'owner_name' => 'Ibu Fitri',
            'business_name' => 'Nasi Uduk & Nasi Kuning Oma Al',
            'address' => 'Jl. Abdul Kadir, Gg. Rajawali No. 141/30',
            'contact' => '081358600149',
            'category' => 'Kuliner',
            'description' => 'Nikmati sarapan lezat nan autentik dari Nasi Uduk & Nasi Kuning Oma Al. Kami menyajikan nasi kuning dan nasi uduk dengan cita rasa khas yang tersedia dalam berbagai pilihan paket, mulai dari nasi kuning biasa hingga paket spesial dengan telur. Hidangan kami tersedia secara offline maupun melalui platform online untuk memudahkan sarapan Anda.',
            'operational_hours' => '05:30 - 12:00 WIB',
            'payment_method' => 'Tunai, QRIS',
            'google_maps_status' => 'Perlu Perbaikan (Fixing)',
            'store_photo' => 'Warung Oma AL 2.jpg',
            'owner_photo' => 'Owner_Warung Oma Al.jpg',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('umkm_links')->insert([
            ['umkm_id' => $umkmId33, 'platform_name' => 'ShopeeFood', 'url' => 'https://shopee.co.id/universal-link/now-food/shop/warung-oma-al', 'created_at' => $now],
            ['umkm_id' => $umkmId33, 'platform_name' => 'GrabFood', 'url' => 'https://food.grab.com/id/id/restaurant/warung-oma-al', 'created_at' => $now],
        ]);
    }
}