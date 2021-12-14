@include('template.header')
@include('pendaftaran.template.sidebar')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)"></a>Data Pasien</li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Data Riwayat Pendaftaran Poli Umum</a></li>
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
                                    <th class="text-center">Nomor Antrian</th>
                                    <th>Nama </th>
                                    <th>Tanggal </th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nomor Rekam Medis</th>
                                    <th>TTL</th>
                                    <th>Asuransi</th>
                                    <th>No Asuransi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $a= 1;
                                @endphp
                                @foreach($history as $histories)
                                <!-- $a=1; -->
                                <tr>
                                    <td class=" text-center"> {{$a}}</td>
                                    <td> {{$histories->no_antrian}} </td>
                                    <td> {{$histories->nama}} </td>
                                    <td> {{$histories->created_at}} </td>
                                    <td> {{$histories->jenis_kelamin}} </td>
                                    <td> {{$histories->no_rm}} </td>
                                    <td> {{$histories->tanggal_lahir}} </td>
                                    <td> {{$histories->jenis_asuransi}} </td>
                                    <td> {{$histories->no_asuransi}}</td>
                                    <td> {{$histories->status}}</td>
                                </tr>
                                @php
                                $a++;
                                @endphp
                                @endforeach
                            </tbody>
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