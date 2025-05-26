<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs'; // Nama tabel database

    protected $fillable = [
        'kode',
        'nama_barang',
        'deskripsi',
        'harga_satuan',
        'jumlah',
        'foto',
    ];
}
