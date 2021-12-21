@include('template.header')
@include('laboratorium.template.sidebar')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Antrian Poli Umum</a></li>
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
                                    <th>Nama </th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nomor Rekam Medis</th>
                                    <th>Umur</th>
                                    <th>Asuransi</th>
                                    <th>Poli Asal</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($antrian as $a)
                                <tr>
                                            <td class=" text-center">{{$a->no_antrian}}</td>
                                            <td>{{$a->nama}} </td>
                                            <td>{{$a->jenis_kelamin}} </td>
                                            <td>{{$a->no_rm}} </td>
                                            <td>{{$a->umur}} </td>
                                            <td>{{$a->jenis_asuransi}} </td>
                                            <td>{{$a->poli_asal}} </td>
                                            <td><span>
                                            <button type="button" onclick="location.href='laboratpelayanan/{{$a->id_pemeriksaan}}/{{$a->no_rm}}'" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Layani">
                                            Layani
                                            </button>
                                            <button type="button" onclick="panggil({{$a->id_antrian}},{{$a->urutan}});" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Panggil" id="panggil">
                                            Panggil
                                            </button>
                                            <!-- <button type="button" onclick="location.href='/daftarantrian/panggil/{{$a->id_antrian}}'" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Layani">
                                                Panggil
                                            </button> -->
                                            <button type="button" class="btn btn-danger" onclick="location.href='/poliumum/hapus/{{$a->id_antrian}}'" data-toggle="tooltip" data-placement="top" title="Hapus">
                                                Hapus
                                            </button>
                                            <button type="button" class="btn btn-warning"  onclick="lewati({{$a->id_antrian}},{{$a->urutan}});"  data-toggle="tooltip" data-placement="top" title="Lewati">
                                            Lewati
                                            </button>
                                            <!-- <button type="button" class="btn btn-warning"  onclick="location.href='/daftarantrian/lewati/{{$a->id_antrian}}'" data-toggle="tooltip" data-placement="top" title="Lewati">
                                                Lewati
                                            </button> -->
                                            </td>
                                </tr>
                                @endforeach
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
@include('template.footer')