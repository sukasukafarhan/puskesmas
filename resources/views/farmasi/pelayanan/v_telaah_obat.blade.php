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
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Racikan</th>
                                        <th>Nama Obat</th>
                                        <th>Satuan</th>
                                        <th>Jumlah Permintaan</th>
                                        <th>Signa</th>
                                        <th>Aturan Pakai</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
                    <div class="card">
                <div class="card-body">
                    <div class="row mb-5">
                        <div>
                            <h4 class="text-muted mb-4">Data Pelayanan</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Racikan</th>
                                        <th>Nama Obat</th>
                                        <th>Satuan</th>
                                        <th>Jumlah Permintaan</th>
                                        <th>Signa</th>
                                        <th>Aturan Pakai</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
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
                            <h4 class="text-center text-muted mb-4">TELAAH OBAT</h4>
                        </div>

                      <div class="form-row align-items-center">
                                <div class="col-auto my-1">
                                   <h4 class="text-center mb-4"> Penelaah</h4>
                                </div>
                            </div>
<form   enctype="multipart/form-data" method="post" action="">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Persyaratan Administrasi</th>
                                        <th>Pilihan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Benar Obat</td>
                                        <td>
                                            <div class="radio mb-3">
                                                <label>
                                                    <input type="radio" required="" value="ada" name="adm1">Ada</label>
                                            </div>
                                            <div class="radio mb-3">
                                                <label>
                                                    <input type="radio" required="" value="tidak ada" name="adm1">Tidak Ada</label>
                                            </div>
                                        </td>
                                        <td>
                                            <input type="text" name="ket" class="form-control input-rounded" placeholder="Keterangan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Benar Waktu dan Frekuensi Pemberian</td>
                                        <td>
                                            <div class="radio mb-3">
                                                <label>
                                                    <input type="radio" required="" value="ada" name="adm2">Ada</label>
                                            </div>
                                            <div class="radio mb-3">
                                                <label>
                                                    <input type="radio" required="" value="tidak ada" name="adm2">Tidak Ada</label>
                                            </div>
                                        </td>
                                        <td>
                                            <input type="text" name="ket" class="form-control input-rounded" placeholder="Keterangan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Benar Dosis</td>
                                        <td>
                                            <div class="radio mb-3">
                                                <label>
                                                    <input type="radio" required="" value="ada" name="adm3">Ada</label>
                                            </div>
                                            <div class="radio mb-3">
                                                <label>
                                                    <input type="radio" required="" value="tidak ada" name="adm3">Tidak Ada</label>
                                            </div>
                                        </td>
                                        <td>
                                            <input type="text" name="ket" class="form-control input-rounded" placeholder="Keterangan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Benar Rute Pemberian</td>
                                        <td>
                                            <div class="radio mb-3">
                                                <label>
                                                    <input type="radio" required="" value="ada" name="adm4">Ada</label>
                                            </div>
                                            <div class="radio mb-3">
                                                <label>
                                                    <input type="radio" required="" value="tidak ada" name="adm4">Tidak Ada</label>
                                            </div>
                                        </td>
                                        <td>
                                            <input type="text" name="ket" class="form-control input-rounded" placeholder="Keterangan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Benar Identitas Pasien</td>
                                        <td>
                                            <div class="radio mb-3">
                                                <label>
                                                    <input type="radio" required="" value="ada" name="adm5">Ada</label>
                                            </div>
                                            <div class="radio mb-3">
                                                <label>
                                                    <input type="radio" required="" value="tidak ada" name="adm5">Tidak Ada</label>
                                            </div>
                                        </td>
                                        <td>
                                            <input type="text" name="ket" class="form-control input-rounded" placeholder="Keterangan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Benar Informasi</td>
                                        <td>
                                            <div class="radio mb-3">
                                                <label>
                                                    <input type="radio" required="" value="ada" name="adm6">Ada</label>
                                            </div>
                                            <div class="radio mb-3">
                                                <label>
                                                    <input type="radio" required="" value="tidak ada" name="adm6">Tidak Ada</label>
                                            </div>
                                        </td>
                                        <td>
                                            <input type="text" name="ket" class="form-control input-rounded" placeholder="Keterangan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Benar Dokumen</td>
                                        <td>
                                            <div class="radio mb-3">
                                                <label>
                                                    <input type="radio" required="" value="ada" name="adm7">Ada</label>
                                            </div>
                                            <div class="radio mb-3">
                                                <label>
                                                    <input type="radio" required="" value="tidak ada" name="adm7">Tidak Ada</label>
                                            </div>
                                        </td>
                                        <td>
                                            <input type="text" name="ket" class="form-control input-rounded" placeholder="Keterangan">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="rounded-button">
                            <button type="submit" class="btn mb-2 btn-secondary float-right">Pelaksanaan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- #/ container -->
</div>
@include('farmasi.templatefarmasi.v_footer')

<!--**********************************
            Content body end
        ***********************************-->