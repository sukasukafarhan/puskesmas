@include('farmasi.templatefarmasi.v_header')
@include('farmasi.templatefarmasi.v_sidebar_farmasi')
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
                                    <th>Nama Obat</th>
                                    <th>Nomor Antrian</th>
                                    <th>No RM</th>
                                    <th>Poli Asal</th>
                                     <th>Asuransi</th>
                                    <th>Action</th>
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
                                    <td>
                                        <span>
                                            <button type="button" class="btn btn-light"  onclick="location.href='/pelayanankasir'" data-toggle="tooltip" data-placement="top" title="Buka">
                                            <i class="fa fa-folder"></i>
                                            </button>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- <tfoot>
                                <tr>
                                    <th class="text-center">No.</th>
                                 
                                    <th>Nama Obat</th>
                                    <th>Jenis Obat</th>
                                       <th>harga</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot> -->
                        </table>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
</div>

         
     
        @include('farmasi.templatefarmasi.v_footer')