@include('template.header')
@include('laboratorium.template.sidebar')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Pelayanan Lab</a></li>
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
                            <li class="mb-1"><strong class="text-dark mr-4">No. Pendaftaran</strong> <span> </span></li>
                            <li class="mb-1"><strong class="text-dark mr-4">Tanggal</strong> <span> </span></li>
                            <li class="mb-1"><strong class="text-dark mr-4"></strong> <span> </span></li>
                            <li class="mb-1"><strong class="text-dark mr-4"></strong> <span> </span></li>
                            <li class="mb-1"><strong class="text-dark mr-4"></strong> <span> </span></li>
                            <li class="mb-1"><strong class="text-dark mr-4"></strong> <span> </span></li>
                            <li class="mb-1"><strong class="text-dark mr-4"></strong> <span> </span></li>
                            <li class="mb-1"><strong class="text-dark mr-4">Nama KK</strong> <span></span> </li>
                            <li class="mb-1"><strong class="text-dark mr-4"></strong> <span> </span> </li>
                            <li class="mb-1"><strong class="text-dark mr-4">Poli Asal</strong> <span> </span></li>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xl-9">
            <div class="card">
                <!-- <section> -->
                <div class="card-body">
                    <div>
                        <h4 class="text-muted mb-4"> Data Permintaan Lab</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Jenis Pemeriksaan</th>
                                    <th>Nama Pemeriksaan</th>
                                </tr>
                            </thead>
                            <tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div>
                        <h4 class="text-muted mb-4">Pemeriksaan Laboratorium</h4>
                    </div>
                    <div class="form-group">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <th class="card-title mt-3">Hematologi</th>
                                    <td>

                                        <div class="form-check ">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">HB</label>
                                        </div><br>
                                        <div class="form-check ">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">LECO</label>
                                        </div><br>
                                        <div class="form-check ">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">ERY</label>
                                        </div><br>
                                        <div class="form-check ">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">TROMBO</label>
                                        </div><br>
                                        <div class="form-check ">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">HCT</label>
                                        </div>
                                    </td>
                                    <th class="card-title mt-3">Hitung Jenis</th>
                                    <td>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Basofil</label>
                                        </div><br>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Eos</label>
                                        </div><br>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Batang</label>
                                        </div><br>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Segmen</label>
                                        </div><br>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">limfo</label>
                                        </div><br>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Monosit</label>
                                        </div><br>

                                    </td>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary "> Proses
                            </button>
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
@include('template.footer')