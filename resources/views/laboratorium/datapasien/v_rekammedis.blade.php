@include('template.header')
@include('laboratorium.template.sidebar')


<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Rekam Medis</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">    
                <div class="card-body">
                    <div>
                        <h1 class="text-center">Data Pasien</h1>
                    </div>
                    
                    <ul class="px-4 pt-4 justify-content-between">
                        <li class="mb-1"><strong class="text-dark mr-4">Nama Lengkap</strong> <span> </span></li>
                        <li class="mb-1"><strong class="text-dark mr-4">Nama KK</strong> <span> </span></li>
                        <li class="mb-1"><strong class="text-dark mr-4">Nomor Rekam Medis</strong> <span> </span></li>
                        <li class="mb-1"><strong class="text-dark mr-4">Jenis Asuransi</strong> <span> </span></li>
                        <li class="mb-1"><strong class="text-dark mr-4">Nomor Asuransi</strong> <span> </span></li><li class="mb-1"><strong class="text-dark mr-4">Silsilah</strong> <span> </span></li>
                        <li class="mb-1"><strong class="text-dark mr-4">Umur</strong> <span> </span></li>
                        <li class="mb-1"><strong class="text-dark mr-4">Pekerjaan</strong> <span> </span></li>
                        <li class="mb-1"><strong class="text-dark mr-4">No. HP</strong> <span> </span></li>
                    </ul>
                    
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Tanggal</th>
                                    <th>Waktu Datang</th>
                                    <th>Anamnesa</th>
                                    <th>Pemeriksaan Fisik</th>
                                    <th>Diagnosa</th>
                                    <th>Tindakan</th>
                                    <th>Lab</th>
                                    <th>Obat</th>
                                    <th>Penyuluhan/Edukasi</th>
                                    <th>Waktu Selesai</th>
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
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="rounded-button">
                            <button type="button" class="btn mb-1 btn-rounded btn-success float-right">Export to PDF</button>
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