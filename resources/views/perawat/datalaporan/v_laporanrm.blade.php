@include('template.header')
@include('laboratorium.template.sidebar')


<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Family Folder</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- <h4 class="card-title">Data Table</h4> -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    
                                    <th class="text-center">No.</th>
                                    <th>Tanggal</th>
                                    <th>Poli Asal</th>
                                    <th>Nama Pasien</th>
                                    <th>Nomor Rekam Medis</th>
                                    <th>Nama KK</th>
                                    <th>Alamat(RT, Kelurahan/Desa)</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Umur(thn, bln, hari)</th>
                                    <th>Jenis Kunjungan Dalam 1 Tahun(baru/lama)</th>
                                    <th>Jenis Kunjungan(BPJS/Umum)</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pekerjaan</th>
                                    <th>Anamnesa</th>
                                    <th>Pemeriksaan</th>
                                    <th>Diagnosa</th>
                                    <th>Jenis Tindakan</th>
                                    <th>Penyuluhan</th>
                                    <th>Resep Obat</th>
                                    <th>Jam Datang</th>
                                    <th>Jam Selesai</th>
                                    <th>Jumlah Waktu</th>
                                    <th>Tenaga Medis 1</th>
                                    <th>Tenaga Medis 2</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                            <td class=" text-center"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            
                                </tr>
                            </tbody>
                            <!-- <tfoot>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>ID Obat</th>
                                    <th>Nama Obat</th>
                                    <th>Jenis Obat</th>
                                    <th>Stok Obat</th>
                                    <th>Tanggal Masuk Obat</th>
                                    <th>Tanggal Kadaluarsa</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot> -->
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="rounded-button">
                            <button type="button" class="btn mb-1 btn-rounded btn-success float-right">Export to ecxel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
</div>


<script>
    // function deleteConfirm(url) {
    //     $('#btn-delete').attr('href', url);
    //     $('#deleteModal').modal();
    // }
</script>
<!--**********************************
            Content body end
        ***********************************-->
@include('template.footer')