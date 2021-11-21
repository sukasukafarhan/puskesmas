@include('template.header')
@include('laboratorium.template.sidebar')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Data Pasien</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Family Folder</a></li>
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
                                <th>Kode</th>
                                <th>Jenis Pemeriksaan Lab</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                          
                                <tr>
                                    <td class="text-center" style="width: 1px;"> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td><span>
                                        <button type="button" onclick="location.href='/laboratdatajenisdokter'" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Layani">
                                            Data Pelayanan Dokter
                                            </button>
                                        </span>
                                        <span>
                                        <button type="button" onclick="location.href='/laboratdataujilab'" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Layani">
                                            Data Pelayanan 
                                            </button>
                                        </span>
                                        <span>
                                        <button type="button" onclick="location.href=' '" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Layani">
                                            Hapus
                                            </button>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="card-footer">
                        <div class="rounded-button">
                             <button type="button" class="btn mb-1 btn-rounded btn-primary float-right" data-toggle="modal" data-target="#basicModal1">Tambah Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
</div>
<div class="modal" id="basicModal1" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title">Tambah Jenis Pemeriksaan Lab</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="#">
                <div class="modal-body">
                    <!-- Modal body text goes here. -->
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Kode</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="kode" placeholder="Stok Obat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Jenis Pemeriksaan Lab</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="kode" placeholder="Jenis Pemeriksaan">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    </br>
                    <input type="hidden">
                    <button class="btn btn-default btn-sm" data-dismiss="modal" aria-hidden="true">Batal</button>
                    <button class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


@include('template.footer')
