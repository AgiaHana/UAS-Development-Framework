@extends('layout.sidebar')

@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                @php
                                    $totalBorrowers = App\Models\Peralatan::where('jumlah', '>', 0)->count();
                                @endphp
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Jumlah Alat</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalBorrowers}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            @php
                                    $totalBorrowers = App\Models\Peralatan::where('tersedia', '>', 0)->count();
                                @endphp
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Jumlah Peralatan Tersedia</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalBorrowers}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                @php
                                    $totalBorrowers = App\Models\Peminjaman::count();
                                @endphp
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Jumlah Peminjam</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalBorrowers }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-solid fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->

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