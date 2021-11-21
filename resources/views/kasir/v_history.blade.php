@include('template.header')
@include('kasir.template.sidebar')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)"></a>Data Pasien</li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Data Riwayat Pembayaran</a></li>
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
                                <th class="text-center" style="width: 1px;">No.</th>
                                    <th>Tanggal</th>
                                    <th class="text-center">Nomor Antrian</th>
                                    <th>Nama Obat</th>
                                    <th>Nomor Antrian</th>
                                    <th>No RM</th>
                                    <th>Poli Asal</th>
                                    <th>Asuransi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  
                                    <td class=" text-center"> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                </tr>
                        </table>
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