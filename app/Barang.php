<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs'; // nama tabel
    protected $fillable = [
        'nama_barang', 'stok', 'harga', 'deskripsi', 'gambar'
    ];
}
