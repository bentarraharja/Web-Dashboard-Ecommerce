<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produk;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $primarykey = 'id';
    protected $fillable = [
        'jenis_kategori', 'nama_kategori'
    ];

    public function produk()
    {
        return $this->hasMany('App\Produk');
    }
}
