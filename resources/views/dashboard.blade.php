@extends('partials.master')

@section('content')
<div class="container pt-3">
    <div class="row">
      <div class="col">
        <h2>Dashboard</h2>
      </div>
      <div class="col d-flex flex-row-reverse">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb" style="background-color: transparent;">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </nav>
      </div>
    </div>

    <div class="card">
        <div class="page-content fade-in-up" style="padding-left:20px; padding-right:20px;">
            <h5 class="sidebar-item-icon fa ti-world"><strong> Aktivitas Toko</strong></h5>
            <hr>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="ibox bg-success color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong" style="height: 35px;">{{$produk}}</h2>
                            <div class="m-b-5">Produk</div><i class="ti-shopping-cart widget-stat-icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ibox bg-info color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong" style="height: 35px;">{{$kategori}}</h2>
                            <div class="m-b-5">Kategori Produk</div><i class="ti-bookmark-alt widget-stat-icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ibox bg-warning color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong" style="font-size: 22px; height: 35px;">Rp {{number_format($omset,2, ',', ',')}}</h2>
                            <div class="m-b-5">Keseluruhan Omset</div><i class="fa fa-money widget-stat-icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ibox bg-danger color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong" style="height: 35px;">{{$pelanggan}}</h2>
                            <div class="m-b-5">Costumer</div><i class="ti-user widget-stat-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="ibox bg-success color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong" style="height: 35px;">{{$selesai}}</h2>
                            <div class="m-b-5">Orderan Selesai</div><i class="ti-receipt widget-stat-icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ibox bg-info color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong" style="height: 35px;">{{$kirim}}</h2>
                            <div class="m-b-5">Orderan Dikirim</div><i class="ti-truck widget-stat-icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ibox bg-warning color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong" style="height: 35px;">{{$baru}}</h2>
                            <div class="m-b-5">Orderan Baru</div><i class="ti-stats-up widget-stat-icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ibox bg-danger color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong" style="height: 35px;">{{$proses}}</h2>
                            <div class="m-b-5">Orderan Diproses</div><i class="ti-package widget-stat-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection