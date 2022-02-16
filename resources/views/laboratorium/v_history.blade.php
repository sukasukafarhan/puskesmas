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
                                    <th class="text-center">Nomor Antrian</th>
                                    <th>Tanggal</th>
                                    <th>Nama </th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nomor Rekam Medis</th>
                                    <th>Umur</th>
                                    <th>Asuransi</th>
                                    <th>Poli Asal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach($data as $datas)
                                <tr>
                                    <td class=" text-center">{{$no}}</td>
                                    <td class=" text-center">{{$datas->tanggal}}</td>
                                    <td>{{$datas->nama}}</td>
                                    <td>{{$datas->jenis_kelamin}}</td>
                                    <td>{{$datas->no_rm}}</td>                                        
                                    <td>{{$datas->umur}}</td>
                                    <td>{{$datas->jenis_asuransi}}</td>
                                    <td>{{$datas->poli_asal}}</td>
                                </tr>
                                <?php $no++ ?>
                                @endforeach
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
                    <!-- <div class="card-footer">
                        <div class="rounded-button">
                            <button type="button" class="btn mb-1 btn-rounded btn-primary float-right">Print
                    </div> -->
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