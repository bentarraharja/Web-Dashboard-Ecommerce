<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kategori;
use App\Pesanan;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primarykey = 'id';
    protected $fillable = [
        'kategori_id', 'nama_produk', 'deskripsi', 'harga', 'status', 'berat', 'foto_produk'
    ];

    public function kategori()
    {
        return $this->belongsTo('App\Kategori');
    }

    public function pesanan()
    {
        return $this->hasMany('App\Pesanan');
    }
}
