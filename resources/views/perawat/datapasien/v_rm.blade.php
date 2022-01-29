@include('template.header')
@include('perawat.template.sidebar')


<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Rekam Medis</a></li>
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
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Tanggal</th>
                                    <th>Waktu Datang</th>
                                    <th>Anamnesa</th>
                                    <th>Pemeriksaan Fisik</th>
                                    <th>Diagnosa</th>
                                    <th>Tindakan</th>
                                    <th>Lab</th>
                                    <th>Obat</th>
                                    <th>Penyuluhan/Edukasi</th>
                                    <th>Waktu Selesai</th>
                                    <th>Tenaga Medis 1</th>
                                    <th>Tenaga Medis 2</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;?>
                                @foreach($rekammedis as $rm)
                                <tr>
                                    <td class=" text-center">{{$no}}</td>
                                    <td>{{$rm->tanggal_kunjungan}}</td>
                                    <td>{{$rm->waktu_mulai}}</td>
                                    <td><b>rpd :</b> {{$rm->rpd}} || <b>rpk :</b> {{$rm->rpk}} || <b>rps :</b> {{$rm->rps}}</td>
                                    <td><b>tb :</b> {{$rm->tinggi_badan}} || <b>bb :</b> {{$rm->berat_badan}} || <b>imt :</b> {{$rm->imt}} || <br><b>suhu :</b> {{$rm->rpd}} || <b>rr :</b> {{$rm->rr}} || <b>sistol :</b> {{$rm->sistol }} || <br><b>diastol :</b> {{$rm->diastol}} || </td>
                                    <td>{{$rm->nama_diagnosa}}</td>
                                    <td>{{$rm->tindakan}}</td>
                                    <td> 
                                        @foreach($data_lab as $dl)
                                            @if($dl->id_pemeriksaan == $rm->id_pemeriksaan)
                                            <b> {{$dl->nama_pemeriksaan}} :</b> {{$dl->hasil_pemeriksaan_lab}} || <br>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>@foreach($data_obat as $do)
                                            @if($do->id_pemeriksaan == $rm->id_pemeriksaan)
                                               <b>{{$do->nama_obat}} :</b> <br>aturan : {{$do->aturan_pakai}} || jumlah : {{$do->jumlah}}  <br>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{$rm->isi_penyuluhan}}</td>
                                    <td>{{$rm->waktu_selesai}}</td>
                                    <td>{{$rm->dokter_penanggung_jawab}}</td>
                                    <td>{{$rm->perawat_penanggung_jawab}}</td>
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