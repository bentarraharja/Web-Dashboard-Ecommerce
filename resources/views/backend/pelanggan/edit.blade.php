@extends('partials.master')

@section('content')
<div class="container-fluid pt-3">
  <!-- BreadCrumb -->
  <div class="row">
    <div class="col">
      <h2>Edit Kategori</h2>
    </div>
    <div class="col d-flex flex-row-reverse">
      <nav aria-label="breadcrumb" role="navigation">
          <ol class="breadcrumb" style="background-color: transparent;">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('indexKategori')}}">Pelanggan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Pelanggan</li>
          </ol>
        </nav>
    </div>
  </div>

  @include('common.alert')

  <div class="row">
      <div class="col" style="padding-left: 200px; padding-right: 200px;">
              <div class="card">
                  <div class="card-header">
                      Edit Data Pelanggan
                  </div>
                    <div class="card-body">
                    <form method="POST" action="{{route('updatePelanggan', ["id" => $edit->id])}}"  enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                          <label class="form-label">Nama Pelanggan</label>
                          <input name="name" class="form-control mb-2 input-credit-card" type="text" value="{{$edit->name}}">
                        </div>
                        <div class="form-group">
                          <label class="form-label">Alamat Pelanggan</label>
                          <input name="alamat" class="form-control mb-2 input-credit-card" type="text" value="{{$edit->alamat}}">
                        </div>
                        <div class="row">
                            <div class="col text-center">
                            <button type="submit" class="btn btn-info">Edit Data</button>
                            </div>
                        </div>
                    </div>
                    </form>
            </div>
        </div>
  </div>
@endsection