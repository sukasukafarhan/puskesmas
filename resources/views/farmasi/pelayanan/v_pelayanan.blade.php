@include('farmasi.templatefarmasi.v_header')
@include('farmasi.templatefarmasi.v_sidebar_farmasi')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Antrian</a></li>
        </ol>
    </div>
</div>
<!-- row -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-5">
                        <div>
                            <h4 class="text-muted mb-4">Data Pasien</h4>
                        </div>
                        <ul class="card-profile__info">
                            <li class="mb-1"><strong class="text-dark mr-4">No. Pendaftaran</strong> <span>no. daftar</span></li>
                            <li class="mb-1"><strong class="text-dark mr-4">Tanggal</strong> <span>tanggal, jam</span></li>
                            <li class="mb-1"><strong class="text-dark mr-4">No RM</strong> <span> </span></li>
                            <li class="mb-1"><strong class="text-dark mr-4">Nama Lengkap</strong> <span> </span></li>
                            <li class="mb-1"><strong class="text-dark mr-4">Tanggal Lahir</strong> <span> </span></li>
                            <li class="mb-1"><strong class="text-dark mr-4">Umur</strong> <span> </span></li>
                            <li class="mb-1"><strong class="text-dark mr-4">Status Pasien</strong> <span> </span></li>
                            <li class="mb-1"><strong class="text-dark mr-4">Nama KK</strong> <span>nama KK</span> </li>
                            <li class="mb-1"><strong class="text-dark mr-4">Berat Badan</strong> <span> </span></li>
                            <li class="mb-1"><strong class="text-dark mr-4">Poli Asal</strong> <span>asal </span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row mb-5">
                        <div>
                            <h4 class="text-muted mb-4">Data Pelayanan</h4>
                        </div>
                        <div class="col-12 text-center">
                            <div class="btn-group-vertical">
                                <button class="btn btn-secondary mb-2 px-4">Riwayat Rekam Medis</button>
                                <button class="btn btn-secondary mb-2 px-4">Riwayat Pemeriksaan</button>
                                <button class="btn btn-secondary mb-2 px-4">Hasil Lab</button>
                                <button class="btn btn-secondary mb-2 px-4">Pengantar Rujukan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xl-9">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h4 class="text-center text-muted mb-4">Data Perawatan</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th style="width:50%">Poli Asal</th>
                                <td> </td>
                            </tr>
                            <tr>
                                <th>Tenaga Medis</th>
                                <td> </td>
                            </tr>
                            <tr>
                                <th>Alergi Pasien</th>
                                <td> </td>
                            </tr>
                            <tr>
                                <th>Apoteker</th>
                                <td> </td>
                            </tr>
                            <tr>
                                <th>Asisten Apoteker</th>
                                <td> </td>
                            </tr>
                            <tr>
                                <th>No. Resep</th>
                                <td> </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <!-- <section> -->
                <div class="card-body">
                    <div>
                        <h4 class="text-center text-muted mb-4">Diagnosa</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Tenaga Medis</th>
                                    <th>IDC-X</th>
                                    <th>Diagnosa</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <!-- <section> -->
                <div class="card-body">
                    <div>
                        <h4 class="text-center text-muted mb-4"> Resep Obat</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Racikan</th>
                                    <th>Nama Obat</th>
                                    <th>Satuan</th>
                                    <th>Sisa Stok</th>
                                    <th>Jumlah Permintaan</th>
                                    <th>Signa</th>
                                    <th>Aturan Pakai</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal Kadaluarsa</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <div class="rounded-button">
                            <button type="button" class="btn mb-2 btn-secondary float-right">Telaah Resep</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->
        @include('farmasi.templatefarmasi.v_header')