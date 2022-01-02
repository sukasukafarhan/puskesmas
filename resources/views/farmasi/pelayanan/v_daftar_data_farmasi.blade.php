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
                                    <span>
                                            <button type="button" onclick="location.href='/telaahresep/{{$pasiens->id_pemeriksaan}}/{{$pasiens->no_rm}}/'" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Layani">
                                            Layani
                                            </button>
                                            <!-- <button type="button" class="btn btn-light"  onclick="location.href='/pelayanankasir'" data-toggle="tooltip" data-placement="top" title="Buka">
                                            <i class="fa fa-folder"></i>
                                            </button> -->
                                            <button type="button" onclick="panggil({{$pasiens->id_antrian}},{{$pasiens->urutan}});" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Panggil" id="panggil">
                                            Panggil
                                            </button>
                                            <button type="button" class="btn btn-danger" onclick="location.href=''" data-toggle="tooltip" data-placement="top" title="Hapus">
                                                Hapus
                                            </button>
                                            <button type="button" class="btn btn-warning"  onclick="lewati({{$pasiens->id_antrian}},{{$pasiens->urutan}});"  data-toggle="tooltip" data-placement="top" title="Lewati">
                                            Lewati
                                            </button>
                                        </span>
                                            <!-- <button type="button" class="btn btn-light"  onclick="location.href='/telaahresep/{{$pasiens->id_pemeriksaan}}/{{$pasiens->no_rm}}/'" data-toggle="tooltip" data-placement="top" title="Buka">
                                    <i class="fa fa-folder"></i>
                                    </button> -->
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
    <script
    src="https://code.jquery.com/jquery-2.2.4.js"
    integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
    crossorigin="anonymous">
</script>
<script type="text/javascript">
    window.Echo.channel('EveryoneChannel')
    .listen('.EveryoneMessage', function (e) {
    location.reload();
    })
</script>
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    })
    
    function panggil(a , b) {
        var timer = setInterval(function() {
            var voices = speechSynthesis.getVoices();
            // console.log(voices);
            if (voices.length !== 0) {
                var msg = new SpeechSynthesisUtterance('Nomor Antrian A'+ b +', Silakan masuk ke antrian Farmasi');
                msg.rate = 0.9;
                msg.voice = voices[14];
                speechSynthesis.speak(msg);
                clearInterval(timer);
            }
        }, 200);
        var id = a;
        $.ajax({
                type:'GET',
                url: "{{ url('/antrianfarmasi/panggil')}}"+'/'+id,               
                success: function( data ) {
                    console.log(data);
                }  
            });
    }
    
    function lewati(a , b) {
        var id = a;
        $.ajax({
                type:'GET',
                url: "{{ url('/antrianfarmasi/lewati')}}"+'/'+id,               
                success: function( data ) {
                    if(data.success == true){
                        alert(data.message);
                        location.reload();
                    }
                }  
                // success: function( data ) {
                //     location.href="{{ url('/daftarantrian')}}"
                // }  
            });
    }
</script>
         
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