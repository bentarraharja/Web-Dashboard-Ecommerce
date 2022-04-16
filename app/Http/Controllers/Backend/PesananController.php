<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Pesanan as AppPesanan;
use Illuminate\Http\Request;
use App\Pesanan;
use App\Produk;
use App\Pelanggan;
use Carbon\Carbon;

class PesananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!request('search')) {
            $data['dataPesanan'] = Pesanan::orderBy('date', 'ASC')->get();
            return view('backend.pesanan.index', $data);
        } else {
            $search = $request->search;

            $data['dataPesanan'] = Pesanan::where('invoice_id', 'like', "%" . $search . "%")->paginate();
            return view('backend.pesanan.index', $data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['produk'] = Produk::get();
        $datas['pelanggan'] = Pelanggan::get();
        return view('backend.pesanan.create', $data, $datas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $today = Carbon::now('GMT+7');
        $random = random_int(10000, 99999);
        $invoice = $today->year . '/' . $today->month . '/' . $today->day . '/' . $random;

        $produk = Produk::find($request->produk_id);
        $total = $request->qty * $produk->harga;

        //tinggal cetak array merge
        $store = Pesanan::create(array_merge($request->all(), ['invoice_id' => $invoice, 'total_harga' => $total]));
        if (!$store) {
            return redirect()->route('createPesanan')->with('error', 'Data Added Failed.');
        } else {
            return redirect()->route('indexPesanan')->with('success', 'Data Added Successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['edit'] = Pesanan::find($id);
        $data['produk'] = Produk::get();
        $data['pelanggan'] = Pelanggan::get();

        if (!$data['edit']) {
            return redirect()->route('indexPesanan')->with('error', 'Data Not Found!.');
        }

        return view('backend.pesanan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Pesanan::updateOrCreate(['id' => $id], $request->all());
        if (!$update) {
            return redirect()->back()->with('error', 'Data Not Found!.');
        }
        return redirect()->route('indexPesanan')->with('success', 'Data Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Pesanan::find($id);
        if (!$destroy) {
            return redirect()->route('indexPesanan')->with('error', 'Data Not Found.');
        }

        $destroy->delete();
        if (!$destroy) {
            return redirect()->route('indexPesanan')->with('error', 'Data Cannot Be Deleted.');
        }

        return redirect()->route('indexPesanan')->with('success', 'Data Has Been Deleted.');
    }
}
