<?php

namespace Database\Seeders;

use App\Models\NewsLocation;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Data Semarang
        // NewsLocation::create([
        //     'name' => 'Berita Harian Semarang',
        //     'description' => 'Sumber terpercaya untuk berita terkini dari Semarang, meliputi peristiwa, ekonomi, dan budaya.',
        //     'kota' => 'Semarang',
        //     'daerah' => 'Semarang Tengah',
        //     'latitude' => '-6.9665',
        //     'longitude' => '110.4164'
        // ]);

        // NewsLocation::create([
        //     'name' => 'Semarang Info',
        //     'description' => 'Portal berita online yang memberikan informasi terupdate tentang kejadian dan isu penting di Semarang.',
        //     'kota' => 'Semarang',
        //     'daerah' => 'Semarang Utara',
        //     'latitude' => '-6.9669',
        //     'longitude' => '110.4290'
        // ]);

        // NewsLocation::create([
        //     'name' => 'Semarang News Network',
        //     'description' => 'Menyajikan berita dari sudut pandang masyarakat, fokus pada perkembangan sosial dan ekonomi di Semarang.',
        //     'kota' => 'Semarang',
        //     'daerah' => 'Semarang Selatan',
        //     'latitude' => '-7.0051',
        //     'longitude' => '110.4234'
        // ]);

        // NewsLocation::create([
        //     'name' => 'Lensa Semarang',
        //     'description' => 'Media lokal yang mengedepankan pemberitaan tentang budaya dan pariwisata di Semarang.',
        //     'kota' => 'Semarang',
        //     'daerah' => 'Tembalang',
        //     'latitude' => '-7.0032',
        //     'longitude' => '110.4428'
        // ]);

        // NewsLocation::create([
        //     'name' => 'Semarang Update',
        //     'description' => 'Berita terkini dan analisis mendalam mengenai politik dan pemerintahan di Semarang.',
        //     'kota' => 'Semarang',
        //     'daerah' => 'Banyumanik',
        //     'latitude' => '-6.9966',
        //     'longitude' => '110.4573'
        // ]);


        // // Data Surabaya
        // NewsLocation::create([
        //     'name' => 'Surabaya Daily',
        //     'description' => 'Berita terbaru dan informasi menarik seputar kota Surabaya.',
        //     'kota' => 'Surabaya',
        //     'daerah' => 'Genteng',
        //     'latitude' => '-7.2654',
        //     'longitude' => '112.7460'
        // ]);

        // NewsLocation::create([
        //     'name' => 'Surabaya News Portal',
        //     'description' => 'Sumber berita terpercaya tentang perkembangan ekonomi dan sosial di Surabaya.',
        //     'kota' => 'Surabaya',
        //     'daerah' => 'Gubeng',
        //     'latitude' => '-7.2814',
        //     'longitude' => '112.7752'
        // ]);

        // NewsLocation::create([
        //     'name' => 'Surabaya Times',
        //     'description' => 'Menyajikan berita dan analisis terkini dari berbagai sudut pandang.',
        //     'kota' => 'Surabaya',
        //     'daerah' => 'Sukolilo',
        //     'latitude' => '-7.3061',
        //     'longitude' => '112.7859'
        // ]);

        // NewsLocation::create([
        //     'name' => 'Lensa Surabaya',
        //     'description' => 'Portal berita yang fokus pada budaya dan pariwisata di Surabaya.',
        //     'kota' => 'Surabaya',
        //     'daerah' => 'Wonokromo',
        //     'latitude' => '-7.2840',
        //     'longitude' => '112.7675'
        // ]);

        // NewsLocation::create([
        //     'name' => 'Surabaya Update',
        //     'description' => 'Berita dan analisis mendalam mengenai isu politik dan pemerintahan di Surabaya.',
        //     'kota' => 'Surabaya',
        //     'daerah' => 'Tegalsari',
        //     'latitude' => '-7.2675',
        //     'longitude' => '112.7465'
        // ]);

        NewsLocation::create([
            'time' => '2024-09-30 08:00:00',
            'casualities' => '10 orang',
            'supplies' => 'Bantuan makanan, selimut',
            'disaster' => 'Banjir',
            'organization' => 'BNPB',
            'scale' => 'Besar',
            'person' => 'Dr. Budi Santoso',
            'city' => 'Semarang',
            'latitude' => '-6.966667',
            'longitude' => '110.416667',
        ]);

        NewsLocation::create([
            'time' => '2024-10-01 10:30:00',
            'casualities' => '5 orang',
            'supplies' => 'Tenda, makanan, obat-obatan',
            'disaster' => 'Tanah longsor',
            'organization' => 'BPBD Jawa Tengah',
            'scale' => 'Sedang',
            'person' => 'Andi Pratama',
            'city' => 'Semarang',
            'latitude' => '-6.970000',
            'longitude' => '110.420000',
        ]);

        NewsLocation::create([
            'time' => '2024-09-28 15:00:00',
            'casualities' => '2 orang',
            'supplies' => 'Air bersih, tenda darurat',
            'disaster' => 'Gempa bumi',
            'organization' => 'Palang Merah Indonesia',
            'scale' => 'Kecil',
            'person' => 'Siti Wulandari',
            'city' => 'Surabaya',
            'latitude' => '-7.250445',
            'longitude' => '112.768845',
        ]);

        NewsLocation::create([
            'time' => '2024-09-25 12:00:00',
            'casualities' => '20 orang',
            'supplies' => 'Tim medis, obat-obatan',
            'disaster' => 'Banjir',
            'organization' => 'BNPB',
            'scale' => 'Besar',
            'person' => 'Hendra Setiawan',
            'city' => 'Surabaya',
            'latitude' => '-7.24917',
            'longitude' => '112.75083',
        ]);

        NewsLocation::create([
            'time' => '2024-09-27 17:00:00',
            'casualities' => '7 orang',
            'supplies' => 'Bantuan pakaian, makanan',
            'disaster' => 'Kebakaran',
            'organization' => 'Dinas Pemadam Kebakaran',
            'scale' => 'Sedang',
            'person' => 'Bambang Sutrisno',
            'city' => 'Semarang',
            'latitude' => '-6.990000',
            'longitude' => '110.430000',
        ]);
    }
}