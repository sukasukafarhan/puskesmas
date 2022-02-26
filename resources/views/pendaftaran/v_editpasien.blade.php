@include('template.header')
@include('pendaftaran.template.sidebar')
<!--**********************************
            Content body start
        ***********************************-->
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)"></a>Family Folder</li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)"></a>Data Pasien</li>
        </ol>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <div class="py-5 text-center">
                        <h1 class="h1 mb-3 font-weight-normal" style="text-align: center;"> Tambah Data Pasien </h1>
                    </div>
                    <div class="basic-form">
                        <form enctype="multipart/form-data"  method="POST" action="/saveeditpasien" role="form">
                        @csrf <!-- {{ csrf_field() }} -->
                            <input type="hidden" name="seg1" class="form-control" value="{{ $segment[0] }}">
                            <input type="hidden" name="id" id="id" class="form-control" value="{{ $pasien[0]->id }}">
                            <input type="hidden" name="no_rm" id="no_rm" class="form-control" value="{{ $pasien[0]->no_rm }}">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{ $pasien[0]->nama }}" required autofocuse>
                            </div>

                            <div class="form-group ">
                                <label>Jenis Kelamin</label>
                                <select id="inputState" name="jenis_kelamin" class="form-control" value="{{ $pasien[0]->jenis_kelamin }}" required autofocuse>
                                    <!-- <option selected="selected">Choose...</option> -->
                                    <option selected="selected" value="Laki-laki">Laki-laki</option>
                                    <option selected="selected" value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nama Kepala Keluarga</label>
                                    <input readonly type="text" name="nama_kk" class="form-control" value="{{ $pasien[0]->nama_kk }}" placeholder="Nama Kepala Keluarga" required autofocuse>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Index Family Folder</label>
                                    <input readonly type="text" name="index" class="form-control" value="{{ $pasien[0]->no_index }}" placeholder="Index Family Folder" required autofocuse>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat Lengkap</label>
                                <input readonly type="text" name="alamat" class="form-control" value="{{ $pasien[0]->alamat }}" placeholder="Alamat Lengkap" required autofocuse>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" value="{{ $pasien[0]->pekerjaan }}" required autofocuse>
                            </div>
                            <div class="form-group ">
                                <label>Tanggal Lahir</label>
                                <div class="input-group">
                                    <!-- <input type="text" name="tanggal_lahir" class="form-control mydatepicker" placeholder="yyyy/mm/dd" required autofocuse> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span> -->
                                    <input type="date" name="tanggal_lahir" class="form-control" value="{{ $pasien[0]->tanggal_lahir }}" id="tanggal_lahir" onchange="cari();"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Umur</label>
                                <input readonly type="text" id="umur" name="umur" class="form-control" value="{{ $pasien[0]->umur }}" required autofocuse>
                            </div>
                            <div class="form-group ">
                                <label>Asuransi</label>
                                <select id="jenis_asuransi" name="jenis_asuransi" class="form-control" onchange="isbpjs()" required autofocuse>
                                    <option selected="selected">Choose...</option>
                                    <option value="Umum">Umum</option>
                                    <option value="BPJS" >BPJS</option>
                                    <option value="SKTM">SKTM</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>No. Asuransi</label>
                                <input type="text" name="no_asuransi" id="no_asuransi" value="{{ $pasien[0]->no_asuransi }}" class="form-control" placeholder="Nomor Asuransi" readonly><br><span><a onclick="cekbpjs()"class="btn btn-success text-white" id="button_bpjs" disabled >Cek Asuransi</a></span>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <input type="text" name="agama" class="form-control" placeholder="Agama" value="{{ $pasien[0]->agama }}" required autofocuse>
                            </div>
                            <div class="form-group">
                                <label>No. HP</label>
                                <input type="text" name="no_hp" class="form-control" placeholder="Nomor HP/Telepon" value="{{ $pasien[0]->telp }}">
                            </div>
                            <div class="form-group">
                                <label>Silsilah</label>
                                <select id="inputState" name="silsilah" class="form-control"  value="{{ $pasien[0]->silsilah }}" placeholder="Posisi Pasien pada Silsilah Keluarga" required autofocuse>
                                    <option value="Lainnya">Lainnya</option>
                                    <option value="Kepala Keluarga" >Kepala Keluarga</option>
                                    <option value="Ibu">Ibu</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary ">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script
    src="https://code.jquery.com/jquery-2.2.4.js"
    integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
    crossorigin="anonymous">

    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    })
 </script>
 <script>   
 
    function isbpjs() {
        var asuransi = document.getElementById('jenis_asuransi').value;
        
        if(asuransi==="BPJS" || asuransi==="SKTM"){
            // $('#button_bpjs').attr('disabled','disabled');
            $("#button_bpjs").removeAttr('disabled');
            $("#no_asuransi").removeAttr('readonly');
        }else{
            $("#button_bpjs").attr('disabled', 'true');
            $("#no_asuransi").attr('readonly', 'false');
        }
    }

    function cekbpjs() {
        var no_asuransi = document.getElementById("no_asuransi");
        if (no_asuransi && no_asuransi.value) {
            $.ajax({
                type:'GET',
                url: "{{ url('/cekbpjs/')}}"+'/'+no_asuransi.value,               
                success: function( data ) {
                    alert(data);
                }  
            });
        }else{
            alert("nomor asuransi belum diisi");
        }
    }
    
   
    function cari() {
        var date = document.getElementById('tanggal_lahir').value;


        var today = new Date();
        var birthday = new Date(date);
        var year = 0;
        if (today.getMonth() < birthday.getMonth()) {
            year = 1;
        } else if ((today.getMonth() == birthday.getMonth()) && today.getDate() < birthday.getDate()) {
            year = 1;
        }
        var age = today.getFullYear() - birthday.getFullYear() - year;

        if(age < 0){
            age = 0;
        }
        document.getElementById('umur').value = age;
    }
    function getassurance() {
        var ass= document.getElementById('jenis_asuransi').value;

        if(ass === "Umum"){
            var asuransi="0o9oi9okimh";
            document.getElementById('no_asuransi').value = asuransi;
        }else{
            document.getElementById('no_asuransi').value = "";

        }
    }

</script>
@include('template.footer')
