<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fakultass')->insert([
            [
                'nama_fakultas' => 'Fakultas Perikanan dan Ilmu Kelautan'
            ],
            [
                'nama_fakultas' => 'Fakultas Ekonomi dan Bisnis'
            ]
        ]);

        DB::table('mahasiswas')->insert([
            [
                'nama_mahasiswa' => 'Ammar Ziddan',
                'npm' => 12354358312,
                'program_studi' => 'Ilmu Kelautan',
                'fakultas_id' => 1,
            ],
            [
                'nama_mahasiswa' => 'Salsabila Hana',
                'npm' => 1234872389,
                'program_studi' => 'Manajemen',
                'fakultas_id' => 2,
            ],
            [
                'nama_mahasiswa' => 'Mudrafin Rinnes',
                'npm' => 12348214235,
                'program_studi' => 'Perikanan',
                'fakultas_id' => 1,
            ],
            [
                'nama_mahasiswa' => 'Latifa',
                'npm' => 23141238265,
                'program_studi' => 'Pariwisata Bahari',
                'fakultas_id' => 1,
            ],
        ]);
    }
}
