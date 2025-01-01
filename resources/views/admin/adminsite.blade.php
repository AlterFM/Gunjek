@extends('templates.master')

@section('title', 'OFFICIAL GUNDARJEK')

@section('subjudul1', 'Admin')
@section('subjudul2', 'Page')

@section('content')
    <div class="row">
        <div class="col-4 col-md-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Jumlah User</h5>
                </div>
                <div class="card-body">
                    <h2 class="card-text">1,500</h2>
                    <p class="card-text">Total pengguna/mahasiswa yang terdaftar di aplikasi.</p>
                </div>
            </div>
        </div>

        <div class="col-4 col-md-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Jumlah Driver</h5>
                </div>
                <div class="card-body">
                    <h2 class="card-text">200</h2>
                    <p class="card-text">Jumlah driver dari mahasiswa terdaftar dan aktif.</p>
                </div>
            </div>
        </div>

        <div class="col-4 col-md-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Jumlah Kampus</h5>
                </div>
                <div class="card-body">
                    <h2 class="card-text">30</h2>
                    <p class="card-text">Jumlah kampus yang ada di gunadarma.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 col-xxl-3 d-flex mb-4">
            <div class="card w-100">
                <div class="align-self-center w-100">
                    <div class="chart">
                        <div id="datetimepicker-dashboard"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xxl-9 d-flex mb-4">
            <div class="card w-100">
                <div class="align-self-center w-100">
                    <div class="card-body py-3">
                        <h1>Statistik Data Gunjek</h1>
                        <p><?php echo"Periode ". date("Y")."-".date("Y",strtotime("+1 year"));  ?></p>
                        <div class="chart chart-sm">
                            <canvas id="chartjs-dashboard-line"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
