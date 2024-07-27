@extends('layout.sidebar')

@section('konten')
    <div class="row">
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Peralatan</h6>
                </div>

                @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
        @endif

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="rounded-top bg-secondary text-white">
                                <th scope="col">Nama Alat</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Tersedia</th>
                                <th scope="col">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $peralatan = App\Models\Peralatan::all();
                            @endphp
                            @foreach ($peralatan as $key => $data)
                            <tr>
                                <th>{{$data->nama_alat}}</th>
                                <td>{{$data->jumlah}}</td>
                                <td>{{$data->tersedia}}</td>
                                <td>
                                    <b>Perlengkapan :</b> {{$data->perlengkapan}} <br>
                                    <b>Warna :</b> {{$data->warna}} <br>
                                    <b>Merk :</b> {{$data->merk}} <br>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Pinjam Alat</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('peminjaman.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama_mapala">Nama Mapala</label>
                            <input type="text" class="form-control" placeholder="Nama Mapala" name="nama_mapala" id="nama_mapala">
                        </div>
                        <div class="form-group">
                            <label for="univ">Nama Universitas</label>
                            <input type="text" class="form-control" placeholder="Asal Universitas" name="univ" id="univ">
                        </div>
                        <div class="form-group">
                            <label for="nama_peminjaman">Nama Peminjam</label>
                            <input type="text" class="form-control" placeholder="Nama Peminjaman" name="nama_peminjaman" id="nama_peminjaman">
                        </div>
                        <div style="display: flex;">
                            <span>Peminjaman :</span>
                            <button style="margin-left: 120px" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" type="button" name="add" id="add">
                                <i class="fas fa-download fa-sm text-white-50"></i>Tambah
                            </button>
                        </div>
                        <table id="table">
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="nama_alat">Nama Alat</label>
                                        <input type="text" class="form-control" placeholder="Nama Alat" name="nama_alat[]" id="nama_alat">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="jumlah">Jumlah</label>
                                        <input type="text" class="form-control" id="jumlah" name="jumlah[]" placeholder="Jumlah">
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger remove-table" style="margin-top: 16px">
                                        <i class="fas fa-trash fa-sm text-white-50"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                        <div class="form-group">
                            <label for="no_hp">No Handphone</label>
                            <input type="text" class="form-control" placeholder="No Handphone" name="no_hp" id="no_hp">
                        </div>
                        <button type="submit" class="btn btn-primary">Pinjam</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


