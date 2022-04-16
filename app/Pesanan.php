<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produk;
use App\Pelanggan;

class Pesanan extends Model
{
    protected $table = 'pesanan';
    protected $primarykey = 'id';
    protected $fillable = [
        'produk_id', 'pelanggan_id', 'invoice_id', 'qty', 'total_harga', 'status', 'date'
    ];

    public function produk()
    {
        return $this->belongsTo('App\Produk');
    }

    public function pelanggan()
    {
        return $this->belongsTo('App\Pelanggan');
    }
}
