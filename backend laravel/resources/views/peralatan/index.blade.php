@extends('layout.sidebar')

@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">List Peralatan</h1>
            <a href="{{ url('/tambahalat') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i>Tambah Peralatan</a>
        </div>

        @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
        @endif

        @if ($message = Session::get('danger'))
          <div class="alert alert-danger">
              <p>{{ $message }}</p>
          </div>
        @endif

        @if ($message = Session::get('warning'))
          <div class="alert alert-warning">
              <p>{{ $message }}</p>
          </div>
        @endif

        <!-- Content Row -->
        <table class="table table-bordered">
            <thead>
              <tr class="rounded-top bg-secondary text-white">
                <th scope="col">Nama Alat</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Tersedia</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Tindakan</th>
              </tr>
            </thead>
            <tbody>
              @php
                    $peralatan = App\Models\Peralatan::all();
                @endphp
                @foreach ($peralatan as $key => $data)
              <tr>
                <td>{{$data->nama_alat}}</td>
                <td>{{$data->jumlah}}</td>
                <td>{{$data->tersedia}}</td>
                <td>
                    <b>Perlengkapan :</b> {{$data->perlangkapan}} <br>
                    <b>Warna :</b>{{$data->warna}} <br>
                    <b>Merk :</b> {{$data->merk}} <br>
                </td>
                <td colspan="2" style="display: flex;">
                  <a href="{{ route('peralatan.edit', $data->id) }}" class="btn btn-warning" style="margin-right: 8px;">
                    <i class="fas fa-regular fa-pencil"></i>
                  </a>
                  <form action="{{ route('peralatan.destroy', $data->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">
                        <i class="fas fa-solid fa-trash"></i>
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