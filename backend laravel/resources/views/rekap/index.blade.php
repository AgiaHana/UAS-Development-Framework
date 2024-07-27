@extends('layout.sidebar')

@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Rekap Data</h1>
        </div>
        @if ($message = Session::get('danger'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
      @endif

        <!-- Content Row -->
        <table class="table table-bordered">
            <thead>
              <tr class="rounded-top bg-secondary text-white">
                <th scope="col">Nama Peminjam</th>
                <th scope="col">Asal Mapala</th>
                <th scope="col">Nomer Handphone</th>
                <th scope="col">Nama Alat</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Tanggal Peminjaman</th>
                <th scope="col">Tindakan</th>
              </tr>
            </thead>
            <tbody>
              @php
                $peminjaman = App\Models\Peminjaman::all();
              @endphp
              @foreach ($peminjaman as $key => $data)
              <tr>
                <td>{{$data->nama_peminjaman}}</td>
                <td>{{$data->nama_mapala}}</td>
                <td>{{$data->no_hp}}</td>
                <td>{{$data->nama_alat}}</td>
                <td>{{$data->jumlah}}</td>
                <td>{{$data->created_at}}</td>
                <td>
                  <form action="{{ route('peminjaman.destroy', $data->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">
                      <i>Delete</i>
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection