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
                            </thead>
                            <tbody>
                            <?php $no=1; ?>
                            @foreach($pasien as $pasiens)
                                <tr>
                                    <td class=" text-center">{{$no}}</td>
                                    <td class=" text-center">{{$pasiens->no_rm}}</td>
                                    <td>{{$pasiens->id_pemeriksaan}}</td>
                                    <td>@foreach($pasiens->obat as $obats)
                                            {{$obats}} ,
                                        @endforeach
                                    </td>
                                    <td>{{$pasiens->waktu}}</td>
                                    <td>     
                                        {{$pasiens->status}}
                                    <!-- <span class="label label-success"> Selesai Oleh Dokter</span> -->
                                    </td>
                                    <td>
                                            <button type="button" class="btn btn-light"  onclick="location.href='/telaahresep/{{$pasiens->id_pemeriksaan}}/{{$pasiens->no_rm}}/'" data-toggle="tooltip" data-placement="top" title="Buka">
                                    <i class="fa fa-folder"></i>
                                    </button>
                                    </td>
                                </tr>
                            <?php $no++;?>
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
  @include('farmasi.templatefarmasi.v_footer')