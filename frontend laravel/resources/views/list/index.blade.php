@extends('layout.sidebar')

@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">List Peralatan</h1>
        </div>

        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7" style="">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center">
                        <h6 class="m-0 font-weight-bold text-primary">Alat Yang Tersedia</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="">
                            <table class="table table-bordered">
                                <thead>
                                  <tr class="rounded-top bg-secondary text-white">
                                    <th scope="col">Nama Alat</th>
                                    <th scope="col">Deskripsi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @php
                                          $peralatan = App\Models\Peralatan::all();
                                      @endphp
                                      @foreach ($peralatan as $key => $data)
                                    <tr>
                                      <td>{{$data->nama_alat}}</td>
                                      <td>
                                          <b>Perlengkapan :</b> {{$data->perlangkapan}} <br>
                                          <b>Warna :</b>{{$data->warna}} <br>
                                          <b>Merk :</b> {{$data->merk}} <br>
                                      </td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection