@include('template.header')
@include('perawat.template.sidebar')


<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Asuhan Keperawatan</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card" id="content">
                <div class="card-body">
                    <div>
                        <h1 class="text-center">Data Pasien</h1>
                    </div>
                    
                    @foreach($pasien as $pasien)
                    <ul class="px-4 pt-4 justify-content-between">
                        <li class="mb-1"><strong class="text-dark mr-4">Nama Lengkap</strong> <span>: {{$pasien->nama}} </span></li>
                        <li class="mb-1"><strong class="text-dark mr-4">Nama KK</strong> <span>: {{$pasien->nama_kk}} </span></li>
                        <li class="mb-1"><strong class="text-dark mr-4">Nomor Rekam Medis</strong> <span>: {{$pasien->no_rm}} </span></li>
                        <li class="mb-1"><strong class="text-dark mr-4">Jenis Asuransi</strong> <span>: {{$pasien->jenis_asuransi}} </span></li>
                        <li class="mb-1"><strong class="text-dark mr-4">Nomor Asuransi</strong> <span>: {{$pasien->no_asuransi}} </span>
                        </li><li class="mb-1"><strong class="text-dark mr-4">Silsilah</strong> <span>: {{$pasien->silsilah}} </span></li>
                        <li class="mb-1"><strong class="text-dark mr-4">Umur</strong> <span>: {{$pasien->umur}} </span></li>
                        <li class="mb-1"><strong class="text-dark mr-4">Pekerjaan</strong> <span>: {{$pasien->pekerjaan}} </span></li>
                        <li class="mb-1"><strong class="text-dark mr-4">No. HP</strong> <span>: {{$pasien->telp}} </span></li>
                    </ul>
                    @endforeach
                    <!-- <h4 class="card-title">Data Table</h4> -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Tanggal</th>
                                    <th>Waktu Datang</th>
                                    <th>Subjective(rpd,rpk,rps, nb subject)</th>
                                    <th>Objective(pemeriksaan fisik, nb objek)</th>
                                    <th>Assessment</th>
                                    <th>Plan</th>
                                    <th>Waktu Selesai</th>
                                    <th>Tenaga Medis 1</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;?>
                                @foreach($askep as $a)
                                <tr>
                                    <td class=" text-center">{{$no}}</td>
                                    <td>{{$a->tanggal}}</td>
                                    <td>{{$a->jam_mulai}}</td>
                                    <td>><b>rpd :</b> {{$a->rpd}} || <b>rpk :</b> {{$a->rpk}} || <b>rps :</b> {{$a->rps}} || <b>nb_subjective :</b> {{$a->nb_subjective}}</td>
                                    <td><b>tb :</b> {{$a->tb}} || <b>bb :</b> {{$a->bb}} || <b>imt :</b> {{$a->imt}} || <br><b>suhu :</b> {{$a->rpd}} || <b>rr :</b> {{$a->rr}} || <b>sistol :</b> {{$a->sistol }} || <br><b>diastol :</b> {{$a->diastol}} || <b>nb_objective :</b> {{$a->nb_object}} </td>
                                    <td> {{$a->nb_assessment}}</td>
                                    <td> {{$a->nb_plan}}</td>
                                    <td> {{$a->waktu_selesai}}</td>
                                    <td> {{$a->penanggungjawab}}</td>
                                </tr>
                                <?php $no++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="rounded-button">
                            <button id="cmd" type="button" class="btn mb-1 btn-rounded btn-success float-right">Export to PDF</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.debug.js"></script> -->
<!-- <script src="/template/js/jspdf.debug.js"></script> -->
<!-- <script src="{{ asset('/template/js/jspdf.debug.js') }}"></script> -->
<script type="application/javascript" src="{{ asset('/js/jspdf.debug.js') }}"></script>



<script>
$(document).ready(function() {
    var doc = new jsPDF({
    orientation: 'landscape'
    });
    doc.setFontSize(10);
    $('#cmd').click(function () {
        doc.fromHTML($('#content').html(), 15, 15, {
            'width': 170,
        },
        function () {
            doc.save('data-rm.pdf')
        });
    });
});
</script>
<!--**********************************
            Content body end
        ***********************************-->
@include('template.footer')