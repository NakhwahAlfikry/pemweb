<?php

namespace Database\Seeders;

use App\Models\DataPendaftaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataPendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataPendaftaran::create([
            'Nama' => 'Budi',
            'Alamat' => 'Jl mawar No. 10',
            'Tanggal_Lahir' => '2005-06-15',
            'Sekolah_Asal' => 'SMP Negeri 1 Jakarta',
            'Jenis_kelamin' => 'Laki-laki',
            'Nama_Orangtua' => 'Slamet',
            'Tanggal_Daftar' => '2016-03-27',
            'Status' => 'Diterima',
        ]);

        DataPendaftaran::create([
            'Nama' => 'Siti',
            'Alamat' => 'Jl Melati No. 25',
            'Tanggal_Lahir' => '2005-09-20',
            'Sekolah_Asal' => 'SMP Negeri 2 Bandung',
            'Jenis_kelamin' => 'Perempuan',
            'Nama_Orangtua' => 'Darto',
            'Tanggal_Daftar' => '2016-04-02',
            'Status' => 'Ditolak',
        ]);
    }
}
