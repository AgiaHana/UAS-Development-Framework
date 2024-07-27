@extends('layout.sidebar')

@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Catatan Peralatan</h1>
                <a href="{{url('/tambahcatatan')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i>Tambah Catatan</a>
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
                <th scope="col">Rencana</th>
                <th scope="col">Tindakan</th>
              </tr>
            </thead>

            <tbody>
              @php
              $rencana = App\Models\Rencana::all();
              @endphp
              @foreach ($rencana as $key => $data)
              <tr>
                <td>{{$data->nama_alat}}</td>
                <td>{{$data->rencana}}</td>
                <td colspan="3">
                  <form action="{{ route('rencana.destroy', $data->id) }}" method="post">
                    <a href="{{route('rencana.show', $data->id)}}" class="btn btn-warning">Lihat</a>
                    <a href="{{route('rencana.edit', $data->id)}}" class="btn btn-warning">Edit</a>

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