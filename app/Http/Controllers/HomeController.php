<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Kategori;
use App\Pelanggan;
use App\Pesanan;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['kategori'] = Kategori::count();
        $data['produk'] = Produk::count();
        $data['pelanggan'] = Pelanggan::count();
        $data['selesai'] = Pesanan::where('status', 'selesai')->count();
        $data['proses'] = Pesanan::where('status', 'proses')->count();

        $tstart = Carbon::today("GMT+7");
        $tend = Carbon::today("GMT+7")->endOfDay("GMT+7");
        $data['baru'] = Pesanan::whereBetween('date', [$tstart, $tend])->where('status', '=', 'proses')->count();
        $data['kirim'] = Pesanan::where([['date', '<=', Carbon::yesterday("GMT+7")], ['status', '=', 'proses']])->count();
        $data['omset'] = Pesanan::where('status', 'selesai')->sum('total_harga');
        return view('dashboard', $data);
    }
}
