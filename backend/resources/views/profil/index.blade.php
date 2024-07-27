@extends('layout.sidebar')

@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profil Anggota</h1>
                <a href="{{url('/tambahprofil')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i>Tambah Anggota</a>
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

        <div class="container" style="padding-top: 24px; padding-bottom: 16px;">
            <div class="row">
              <div class="">
                <img src="{{asset('img/myp.jpeg')}}" alt="..." class="rounded-circle align-self-center" style="height: 145px; width: 145px;">
              </div>
              <div class="text-dark" style="padding-left: 24px;">
                <h3><b>Mayapala</b></h3>
                <h5>Universitas Amikom Yogyakarta</h5>
                <p style="padding-top: 16px;">15 Anggota</p>
              </div>
            </div>
        </div>

        <!-- Content Row -->
        <table class="table table-bordered">
            <thead>
              <tr class="rounded-top bg-secondary text-white">
                <th scope="col">No</th>
                <th scope="col">Nama Anggota</th>
                <th scope="col">Nomor Anggota</th>
                <th scope="col">Nomer Handphone</th>
                <th scope="col">Tindakan</th>
              </tr>
            </thead>
            <tbody>
              @php
              $anggota = App\Models\Anggota::all();
              @endphp
              @foreach ($anggota as $key => $data)
              <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->nama_angg}}</td>
                <td>{{$data->nomor_angg}}</td>
                <td>{{$data->nomor_hp}}</td>
                <td colspan="3">
                  <form action="{{ route('anggota.destroy', $data->id) }}" method="post">
                    <a href="{{route('anggota.edit', $data->id)}}" class="btn btn-warning">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
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