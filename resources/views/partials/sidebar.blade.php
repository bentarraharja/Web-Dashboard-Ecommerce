<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="{{asset('template-admin')}}/html/dist/assets/img/admin-avatar.png" width="45px" />
            </div>
            @php
                $userLogin = App\User::Where('id', Auth::id())->first();
            @endphp
            <div class="admin-info">
                <div class="font-strong">{{$userLogin->name}}</div><small>Administrator</small></div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a href="{{route('home')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="heading">MANAJEMEN PRODUK</li>
            <li>
                <a href="{{route('indexKategori')}}"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Kategori</span></a>
            </li>
            <li>
                <a href="{{route('indexProduk')}}"><i class="sidebar-item-icon fa fa-table"></i>
                    <span class="nav-label">Produk</span></a>
            </li>
            <li>
                <a href="{{route('indexPesanan')}}"><i class="sidebar-item-icon fa fa-edit"></i>
                    <span class="nav-label">Pesanan</span></a>
            </li>
            <li>
                <a href="{{route('indexLaporan')}}"><i class="sidebar-item-icon fa fa-file-text"></i>
                    <span class="nav-label">Laporan</span></a>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa ti-settings"></i>
                    <span class="nav-label">Pengaturan</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('indexPelanggan')}}">Tambah Pelanggan</a>
                    </li>
                    <li>
                        <a href="#">Datatables</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>