@include('template.header')
@include('admin.template.sidebar')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="javascript:void(0)">Data</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Tindakan Pelayanan</a></li>
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
                                    <th>Nama Poli</th>
                                    <th>Nama Tindakan</th>
                                    <th>Tarif Tindakan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class=" text-center"> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td><span>
                                    <button type="button" class="btn btn-light"  data-toggle="tooltip" data-placement="top" title="Hapus">
                                        <i class="fa fa-delete"></i>
                                    </button>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- <tfoot>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Nama Poli</th>
                                    <th>Nama Tindakan</th>
                                    <th>Tarif Tindakan</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot> -->
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="rounded-button">
                            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#basicModal1">Tambah Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="basicModal1" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title">Tambah Harga Pelayanan</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
               <form class="form-horizontal" enctype="multipart/form-data" method="post" action=" ">
                    <div class="modal-body">
                        <!-- Modal body text goes here. -->
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Nama Tindakan </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="nama_tindakan" placeholder="Nama Tindakan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Nama Poli</label>
                            <div class="col-lg-6">
                                <input readonly type="text" name="nama_poli" class="form-control" value="Poli Umum" placeholder="Nama Kepala Keluarga" required autofocuse>    
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Tarif Tindakan </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="tarif_tindakan" placeholder="Tarif Tindakan">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        </br>
                        <input type="hidden" name="id_pesan">
                        <button class="btn btn-default btn-sm" data-dismiss="modal" aria-hidden="true">Batal</button>
                        <button class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
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