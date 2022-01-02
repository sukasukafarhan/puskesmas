@include('farmasi.templatefarmasi.v_header')
@include('kasir.template.sidebar')
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
                                    <th>Nomor Antrian</th>
                                    <th>Nomor Rekam Medis</th>
                                    <th>Jenis Asuransi</th>
                                    <th>Poli Asal</th>
                                     <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                @foreach($antrian as $antrians)
                                <tr>
                                    <td class=" text-center">{{$no}}</td>
                                    <td>{{$antrians->no_antrian}}</td>
                                    <td>{{$antrians->no_rm}}</td>
                                    <td>{{$antrians->jenis_asuransi}}</td>
                                    <td>{{$antrians->poli_asal}}</td>
                                    <td>{{$antrians->status}}</td>
                                    <td>
                                    <button type="button" onclick="location.href='/pelayanankasir/{{$antrians->id_pemeriksaan}}/{{$antrians->no_rm}}'" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Layani">
                                            Layani
                                            </button>
                                            <!-- <button type="button" onclick="location.href='/pelayanankasir'" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Layani">
                                            Layani
                                            </button> -->
                                            <button type="button" onclick="panggil({{$antrians->id_antrian}},{{$antrians->urutan}});" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Panggil" id="panggil">
                                            Panggil
                                            </button>
                                            <button type="button" class="btn btn-danger" onclick="location.href=''" data-toggle="tooltip" data-placement="top" title="Hapus">
                                                Hapus
                                            </button>
                                            <button type="button" class="btn btn-warning"  onclick="lewati({{$antrians->id_antrian}},{{$antrians->urutan}});"  data-toggle="tooltip" data-placement="top" title="Lewati">
                                            Lewati
                                            </button>
                                        <!-- <span>
                                            <button type="button" class="btn btn-light"  onclick="location.href='/pelayanankasir'" data-toggle="tooltip" data-placement="top" title="Buka">
                                            <i class="fa fa-folder"></i>
                                            </button>
                                        </span> -->
                                    </td>
                                </tr>
                                <?php $no++; ?>
                                @endforeach
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
                var msg = new SpeechSynthesisUtterance('Nomor Antrian A'+ b +', Silakan masuk ke antrian kasir');
                msg.rate = 0.9;
                msg.voice = voices[14];
                speechSynthesis.speak(msg);
                clearInterval(timer);
            }
        }, 200);
        var id = a;
        $.ajax({
                type:'GET',
                url: "{{ url('/antriankasir/panggil')}}"+'/'+id,               
                success: function( data ) {
                    console.log(data);
                }  
            });
    }
    
    function lewati(a , b) {
        var id = a;
        $.ajax({
                type:'GET',
                url: "{{ url('/antriankasir/lewati')}}"+'/'+id,               
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
         
     
        @include('farmasi.templatefarmasi.v_footer')