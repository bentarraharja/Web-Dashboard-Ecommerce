@extends('partials.master')

@section('content')
<div class="container-fluid pt-3">
  <!-- BreadCrumb -->
  <div class="row">
    <div class="col">
      <h2>Tambah Pelanggan</h2>
    </div>
    <div class="col d-flex flex-row-reverse">
      <nav aria-label="breadcrumb" role="navigation">
          <ol class="breadcrumb" style="background-color: transparent;">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Pelanggan</li>
          </ol>
        </nav>
    </div>
  </div>

  @include('common.alert')

  <div class="row">
        <div class="col-4">
              <div class="card">
                  <div class="card-header">
                      Tambah Pelanggan
                  </div>
                  <form method="POST" action="{{route('storePelanggan')}}"  enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                          <label class="form-label">Nama Pelanggan</label>
                          <input name="name" class="form-control mb-2 input-credit-card" type="text">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label class="form-label">Alamat Pelanggan</label>
                                <input name="alamat" class="form-control mb-2 input-credit-card" type="text">
                              </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                            <button type="submit" class="btn btn-info">Tambah</button>
                            </div>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
            
        <div class="col-8">
          <div class="card">
              <div class="card-header">
                  List Pelanggan
            </div>
              <br>
              <div class="container">
              <div class="table-responsive-md">
                <table class="table table-bordered table-striped table-hover mb-0" id="datatables">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Created At</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($dataPelanggan as $pelanggan)
                    <tr>
                      <td>{{$pelanggan->id}}</td>
                      <td>{{$pelanggan->name}}</td>
                      <td>{{$pelanggan->alamat}}</td>
                      <td>{{$pelanggan->created_at->toDateString()}}</td>
                      <td>
                        <a href="{{route('editPelanggan', ["id" => $pelanggan->id])}}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{route('destroyPelanggan', ["id" => $pelanggan->id])}}" class="btn btn-sm btn-danger">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <br>
            {{-- <div class="d-flex justify-content-end">
              {{$dataPelanggan->links()}}
            </div> --}}
            </div>
        </div>
  </div>
</div>
@endsection