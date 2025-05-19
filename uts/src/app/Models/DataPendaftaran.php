<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPendaftaran extends Model
{
    use HasFactory;

    protected $table = 'data_pendaftarans';
    protected $fillable = [
        'Nama',
        'Alamat',
        'Tanggal_Lahir',
        'Sekolah_Asal',
        'Jenis_kelamin',
        'Nama_Orangtua',
        'Tanggal_Daftar',
        'Status'
    ];
}
