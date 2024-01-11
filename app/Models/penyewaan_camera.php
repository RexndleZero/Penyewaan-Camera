<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyewaan_camera extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_peminjam',
        'alamat',
        'nomor_handphone',
        'nama_camera',
        'kategori_camera',
        'tanggal_awal_peminjaman',
        'tanggal_selesai_peminjaman',
    ];
}
