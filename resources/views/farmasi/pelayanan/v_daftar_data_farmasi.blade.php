@include('farmasi.templatefarmasi.v_header')
@include('farmasi.templatefarmasi.v_sidebar_farmasi')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Antrian Obat Farmasi</a></li>
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
                                    <th class="text-center">No</th>
                                    <th>no RM </th>
                                    <th>No Pemeriksaan</th>
                                    <th>Obat</th>
                                    <th>Waktu</th>
                                    <th>Status</th>
                                    <th></th> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td class=" text-center"></td>
                                    <td class=" text-center"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>     
                                    <!-- <span class="label label-success"> Selesai Oleh Dokter</span> -->
                                    </td>
                                    <!-- <span class="label label-warning">Selesai Oleh Kasir</span> -->
                                    </td>
                                    <td>
                                            <button type="button" class="btn btn-light"  onclick="location.href='/telaahresep'" data-toggle="tooltip" data-placement="top" title="Buka">
                                    <i class="fa fa-folder"></i>
                                    </button>
                                    </td>
                                    </tr>
                                 </tbody>                          
                            </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
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
  @include('farmasi.templatefarmasi.v_footer')