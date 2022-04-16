<?php

namespace App;

use App\Pesanan;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $primarykey = 'id';
    protected $fillable = [
        'name', 'alamat'
    ];

    public function pesanan()
    {
        return $this->hasMany('App\Pesanan');
    }
}
