<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tiket',
        'nik',
        'nama_pengunjung',
        'narapidana',
        'barang_bawaan',
        'hubungan',
        'jumlah_pengunjung',
        'tanggal_kunjungan',
        'sesi_kunjungan',
        'waktu_status',
        'diperiksa',
        'status_periksa',
        'antrian',
        'waktu_antrian',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tanggal_kunjungan' => 'date',
        'diperiksa' => 'boolean',
    ];
}
