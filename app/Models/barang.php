<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jenis_id',
        'kondisi_id',
        'keterangan',
        'kecacatan', //opsional
        'jumlah',
        'gambar'
    ];
}
