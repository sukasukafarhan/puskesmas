@include('template.header')
@include('pendaftaran.template.sidebar')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Data Antrian</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)"></a></li>
        </ol>
    </div>
</div>
{{--<div class="col p-md-3">--}}
{{--    <button onclick="location.href='/C_Pendaftaran/resetAntrian'" class="btn mb-1 btn-rounded btn-danger float-right">Reset</button>--}}
{{--</div>--}}

<div class="container-fluid">
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- <h4 class="card-title">Data Table</h4> -->
                    <div class="table-responsive" id = "tabel_antrian">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 1px;">No.</th>
                                <th>No Antrian </th>
                                <th>Poli Tujuan</th>
                                <th>Status</th>
                                <th class="justify-center" style="width: 150px">Action</th>
                            </tr>
                            <tbody>
                            <!-- @php
                                $no = 0;
                            @endphp -->
                            @foreach($antrian as $a)
                                @php
                                    $no = $a->urutan;
                                    if($a->no_antrian >= 10){
                                        $text_digit = "0";
                                    }else{
                                        $text_digit = "00";
                                    }
                                    $final_kode = $a->kode_poli." ".$text_digit." ".$a->no_antrian;
                                @endphp
                                <tr>
                                    <td class="text-center" style="width: 1px;">{{$no}}</td>
                                    <td>{{$final_kode}}</td>
                                    <td>{{$a->nama_poli}}</td>
                                    <td>{{$a->status}}</td>
                                    <td class="justify-center" style="width: 150px">
                                    <span>
                                        <button type="button" onclick="location.href='/daftarantrian/layani/{{$a->id_antrian}}'" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Layani">
                                            Layani
                                        </button>
                                        <button type="button" onclick="panggil({{$a->id_antrian}},{{$no}});" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Panggil" id="panggil">
                                            Panggil
                                        </button>
                                        <button type="button" class="btn btn-danger" onclick="location.href='/daftarantrian/hapus/{{$a->id_antrian}}'" data-toggle="tooltip" data-placement="top" title="Hapus">
                                            Hapus
                                        </button>
                                        <button type="button" class="btn btn-warning"  onclick="lewati({{$a->id_antrian}},{{$no}});"  data-toggle="tooltip" data-placement="top" title="Lewati">
                                            Lewati
                                        </button>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->
</div>
<!--**********************************
            Content body end
        ***********************************-->
@include('template.footer')

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
                var msg = new SpeechSynthesisUtterance('Nomor Antrian A'+ b +', Silakan masuk ke antrian pendaftaran');
                msg.rate = 0.9;
                msg.voice = voices[14];
                speechSynthesis.speak(msg);
                clearInterval(timer);
            }
        }, 200);
        var id = a;
        $.ajax({
                type:'GET',
                url: "{{ url('/daftarantrian/panggil')}}"+'/'+id,               
                success: function( data ) {
                    console.log(data);
                }  
            });
    }
    
    function lewati(a , b) {
        var id = a;
        $.ajax({
                type:'GET',
                url: "{{ url('/daftarantrian/lewati')}}"+'/'+id,               
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