@include('dokter.templatedokter.v_header')
@include('dokter.templatedokter.v_sidebar')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Diagnosis</a></li>
        </ol>
    </div>
</div>

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
                                    <th>ID</th>
                                    <th>Kode ICD-X</th>
                                    <th>Nama Diagnosa</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class=" text-center"> </td>
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
                                    <th>ID</th>
                                    <th>Kode ICD-X</th>
                                    <th>Nama Diagnosa</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot> -->
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="rounded-button">
                            <<button type="button" class="btn mb-1 btn-rounded btn-primary float-right" data-toggle="modal" data-target="#basicModal1">Tambah Data</button>
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

                <h5 class="modal-title">Tambah Diagnosa</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
          <form class="form-horizontal" enctype="multipart/form-data" method="post" action=" ">
                <div class="modal-body">
                    <!-- Modal body text goes here. -->
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="icdx">Kode ICD-X </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="icdx" name="icdx" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="diagnosa">Nama Diagnosa</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="diagnosa" name="diagnosa" placeholder="">
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


@include('dokter.templatedokter.v_footer')