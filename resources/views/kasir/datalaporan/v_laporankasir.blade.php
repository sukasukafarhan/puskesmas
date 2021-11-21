@include('template.header')
@include('kasir.template.sidebar')


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
                                    <th>Nama Pasient</th>
                                    <th>Nomor Rekam Medis</th>
                                    <th>Alamat(RT, Kelurahan/Desa)</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jenis Kunjungan(BPJS/Umum)</th>
                                    <th>Poli Asal</th>
                                    <th>Jenis Tindakan</th>
                                    <th>Harga</th>
                                    <th>Jenis Pelayanan Lab</th>
                                    <th>Harga</th>
                                    <th>Total Harga</th>
                                    <th>Jam Datang</th>
                                    <th>Jam Selesai</th>
                                    <th>Jumlah Waktu</th>
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
                                            
                                </tr>
                            </tbody>
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