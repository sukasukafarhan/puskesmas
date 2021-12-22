@include('dokter.templatedokter.v_header')
@include('dokter.templatedokter.v_sidebar')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Pelayanan Dokter</a></li>
        </ol>
    </div>
</div>

<!-- row -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-xl-3">
            <div class="card">
                <div class="card-body">
                   
                        <div class="row mb-5">
                            <div>
                                <h4 class="text-muted mb-4">Data Pasien</h4>
                            </div>
                            <ul class="card-profile__info">
                            @foreach($pasien as $pasiens)
                                <li class="mb-1"><strong class="text-dark mr-4">No. Pendaftaran</strong> <span>{{$pasiens->no_index}}</span></li>
                                <li class="mb-1"><strong class="text-dark mr-4">Tanggal</strong> <span>{{$pasiens->tanggal}}</span></li>
                                <li class="mb-1"><strong class="text-dark mr-4">No. Rekam Medis</strong> <span>{{$pasiens->no_rm}}</span></li>
                                <li class="mb-1"><strong class="text-dark mr-4">Nama Lengkap</strong> <span>{{$pasiens->nama}}</span></li>
                                <li class="mb-1"><strong class="text-dark mr-4">Tanggal Lahir</strong> <span> {{$pasiens->tanggal_lahir}}</span></li>
                                <li class="mb-1"><strong class="text-dark mr-4">Umur</strong> <span>{{$pasiens->umur}}</span></li>
                                <li class="mb-1"><strong class="text-dark mr-4">Status Pasien</strong> <span>Masuk</span></li>
                                <li class="mb-1"><strong class="text-dark mr-4">Nama KK</strong> <span>{{$pasiens->nama_kk}}</span></li>
                                <li class="mb-1"><strong class="text-dark mr-4">Pekerjaan</strong> <span>{{$pasiens->pekerjaan}}</span></li>
                                <li class="mb-1"><strong class="text-dark mr-4">Poli Asal</strong> <span>{{$pasiens->poli_asal}} </span></li>
                            @endforeach
                            </ul>

                        </div>
                </div>
            </div>
            <div class="card">

                <div class="card-body">
                    <div class="row mb-5">
                        <div>
                            <h4 class="text-muted mb-4">Data Pelayanan</h4>
                        </div>
                        <div class="col-12 text-center">
                            <div class="btn-group-vertical">
                                <button class="btn btn-secondary mb-2 px-4" data-toggle="modal" data-target="#modalRM">Riwayat Rekam Medis</button>
                                <button class="btn btn-secondary mb-2 px-4" data-toggle="modal" data-target="#modalPemeriksaan">Riwayat Pemeriksaan</button>
                                <button class="btn btn-secondary mb-2 px-4" data-toggle="modal" data-target="#modalHasilLab">Hasil Lab</button>
                                <button class="btn btn-secondary mb-2 px-4" data-toggle="modal" data-target="#modalAskep">Askep Pasien</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row mb-5">
                        <div>
                            <h4 class="text-muted mb-4">Data Permintaan</h4>
                        </div>
                        <div class="col-12 text-center">
                            <div class="btn-group-vertical">
                                <button class="btn btn-secondary mb-2 px-5" data-toggle="modal" data-target="#basicModal2">Permintaan Lab</button>
                                <!-- <button class="btn btn-secondary mb-2 px-5">Resep Obat</button> -->
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xl-9">
        @foreach($data as $datas)
            <div class="card">
                <!-- <section> -->
                <div class="card-body">
                    <div>
                        <h4 class="text-muted mb-4">Anamnesa</h4>
                    </div>
                  
                        <form action="/saveanamnesa" method="post">
                        @csrf  
                        <input type="hidden" value="{{$datas->id_pemeriksaan}}" name="id_pemeriksaan" class="form-control">
                        <input type="hidden" value="{{$datas->no_rm}}" name="no_rm" class="form-control">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>RPK</label>
                                        <input type="text" value="{{$datas->rpk}}" name="rpk" class="form-control" placeholder="Riwayat Penyakit Keluarga" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>RPD</label>
                                        <input type="text" name="rpd" value="{{$datas->rpd}}" class="form-control" placeholder="Riwayat Penyakit Dulu" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>RPS</label>
                                        <input type="text" name="rps" value="{{$datas->rps}}" class="form-control" placeholder="Riwayat Penyakit Sekarang" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-5">Simpan</button>
                        </form>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                   
                        <div>
                            <h4 class="text-muted mb-4">Pemeriksaan Fisik</h4>
                        </div>
                        <form action="/savepemeriksaan" method="post">
                        @csrf  
                        <input type="hidden" value="{{$datas->no_rm}}" name="no_rm" class="form-control">
                        <input type="hidden" value="{{$datas->id_pemeriksaan}}" name="id_pemeriksaan" class="form-control">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>TB</label>
                                    <div class="input-group">
                                        <input type="text" name="tb" value="{{$datas->tb}}" class="form-control" placeholder="Tinggi Badan" required><span class="input-group-append"><span class="input-group-text">
                                                <a class="text-muted">m</a>
                                            </span></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Sistol</label>
                                    <div class="input-group">
                                        <input type="text" name="sistol" value="{{$datas->sistol}}" class="form-control" placeholder="Sistol" required><span class="input-group-append"><span class="input-group-text">
                                                <a class="text-muted">mmHg</a>
                                            </span></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>BB</label>
                                    <div class="input-group">
                                        <input type="text" name="bb" value="{{$datas->bb}}" class="form-control" placeholder="Berat Badan" required><span class="input-group-append"><span class="input-group-text">
                                                <a class="text-muted">Kg</a>
                                            </span></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Diastol</label>
                                    <div class="input-group">
                                        <input type="text" name="diastol" value="{{$datas->diastol}}" class="form-control" placeholder="Diastol" required><span class="input-group-append"><span class="input-group-text">
                                                <a class="text-muted">mmHg</a>
                                            </span></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>IMT</label>
                                    <div class="input-group">
                                        <input type="text" name="imt" value="{{$datas->imt}}" class="form-control" placeholder="Index Massa" required><span class="input-group-append"><span class="input-group-text">
                                                <a class="text-muted">Kg/m2</a>
                                            </span></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Suhu</label>
                                    <div class="input-group">
                                        <input type="text" name="suhu" value="{{$datas->suhu}}" class="form-control" placeholder="Suhu" required><span class="input-group-append"><span class="input-group-text">
                                                <a class="text-muted">'C</a>
                                            </span></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>RR</label>
                                    <div class="input-group">
                                        <input type="text" name="nafas" value="{{$datas->rr}}" class="form-control" placeholder="Jumlah Nafas" required><span class="input-group-append"><span class="input-group-text">
                                                <a class="text-muted">/menit</a>
                                            </span></span>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-5">Simpan</button>
                        </form>
                </div>
            </div>
            @endforeach
            <div class="card">
                <div class="card-body">
                    <div>
                        <h4 class="text-muted mb-4">Diagnosa</h4>
                    </div>
                    <div class="table-responsive">
                    

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>ICD-X</th>
                                            <th>Diagnosa</th>
                                            <th>Jenis</th>
                                            <th>Kasus</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($diagnosa as $diagnosas)
                                        <tr>
                                            <td class=" text-center">{{$diagnosas->id_diagnosa}}</td>
                                            <!-- <td class=" text-center"> </td> -->
                                            <td> {{$diagnosas->icd_x}} </td>
                                            <td> {{$diagnosas->nama_diagnosa}} </td>
                                            <td> {{$diagnosas->jenis}} </td>
                                            <td> {{$diagnosas->kasus}} </td>
                                            <td><span>
                                                <button type="button" class="btn btn-danger" onclick="location.href='/pelayanandokter/hapus/{{$diagnosas->no_rm}}/{{$data[0]->id_pemeriksaan}}/{{$diagnosas->id_diagnosa}}'" data-toggle="tooltip" data-placement="top" title="Hapus">
                                                            Hapus
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>                         
                                </table>
                                <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#tambah1"> Tambah
                                </button>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div>
                        <h4 class="text-muted mb-4">Tindakan</h4>
                    </div>
                    <div class="table-responsive">
                      
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Tindakan</th>
                                            <th>Perawat</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($tindakan_rm as $tindakans_rm)
                                        <?php $no = 1;?>
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$tindakans_rm->tindakan}}</td>
                                            <td>{{$tindakans_rm->perawat}}</td>
                                            <td>{{$tindakans_rm->keterangan}}</td>
                                            <td>
                                                <button type="button" class="btn btn-danger" onclick="location.href='/pelayanandokter/hapustindakan/{{$tindakans_rm->no_rm}}/{{$data[0]->id_pemeriksaan}}/{{$tindakans_rm->id_tindakan}}'" data-toggle="tooltip" data-placement="top" title="Hapus">
                                                            Hapus
                                                </button>
                                            </td>
                                        </tr>
                                        <?php $no++;?>
                                        @endforeach
                                    </tbody>
                                </table>
                                <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#basicModal1"> Tambah
                                </button>
                    </div>

                </div>
            </div>

            

            <div class="card">
                <div class="card-body">
                    <div>
                        <h4 class="text-muted mb-4">Resep Obat</h4>
                    </div>
                       <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Jenis</th>
                                    <th>Nama Obat</th>
                                    <th>Jumlah</th>
                                    <th>Signa</th>
                                    <th>Aturan Pakai</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                           
                            <tbody>
                            <?php $no=1;?>
                                @foreach($dataobatpasien as $dataobatpasiens)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$dataobatpasiens->jenis_resep}}</td>   
                                    <td>{{$dataobatpasiens->nama_obat}}</td>
                                    <td>{{$dataobatpasiens->jumlah}}</td>
                                    <td>{{$dataobatpasiens->signa}}</td>
                                    <td>{{$dataobatpasiens->aturan_pakai}}</td>
                                    <td>                          
                                        <button type="button" class="btn btn-danger" onclick="location.href='/pelayanandokter/hapusresep/{{$data[0]->no_rm}}/{{$data[0]->id_pemeriksaan}}/{{$dataobatpasiens->id}}'" data-toggle="tooltip" data-placement="top" title="Hapus">
                                        Hapus
                                        </button>
                                    </td>
                                </tr>
                                <?php $no++;?>
                                @endforeach
                            <!-- </tbody>
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Jenis</th>
                                            <th>Nama Obat</th>
                                            <th>Jumlah</th>
                                            <th>Signa</th>
                                            <th>Aturan Pakai</th>
                                            <th>Keterangan</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="nav justify-content-center">---DATA TIDAK DITEMUKAN---</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                              <td></td>
                                            <td>
                                                
                                            </td>

                                        </tr>
                                    </tbody> -->
                                <!-- </table> -->
                        </table>
                        <button type="button"  class="btn btn-primary " id="modal3" data-toggle="modal" data-target="#basicModal3"> Tambah
                        </button>
                    </div>
                </div>
                 <div class="card">
                <div class="card-body">
                    <!-- <div>
                        <h4 class="text-muted mb-4">Anamnesa</h4>
                    </div> -->

                    <h4 class="card-title">Lainnya</h4>
                    <div class="basic-form">
                        <form method="post" action="/savepenyuluhan">
                        @csrf
                            <input type="hidden" value="{{$data[0]->id_pemeriksaan}}" name="id_pemeriksaan" class="form-control">
                            <input type="hidden" value="{{$data[0]->no_rm}}" name="no_rm" class="form-control">
                            <div class="form-group">
                                <label>Penyuluhan/Edukasi</label>
                                <textarea class="form-control h-150px" name="lainnya" rows="6" id="comment"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary ">Selesai</button>
                        </form>
                    </div>


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
<div class="modal" id="tambah1" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title">Tambah Diagnosa</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form class="form-horizontal" method="post" action="/savediagnosa">
                @csrf
                <input type="hidden" value="{{$data[0]->id_pemeriksaan}}" name="id_pemeriksaan" class="form-control">
                <input type="hidden" value="{{$data[0]->no_rm}}" name="no_rm" class="form-control">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="icdx">ICD-X </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="icdx" name="icdx" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="diagnosa">Diagnosa </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="diagnosa" name="diagnosa" placeholder="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="jenis">Jenis
                            <!-- <span class="text-danger">*</span> -->
                        </label>
                        <div class="col-lg-6">
                            <select class="form-control" id="jenis" name="jenis">
                                <option value="">Please select</option>
                                <option value="Primer">Primer</option>
                                <option value="Sekunder">Sekunder</option>
                                <option value="Komplikasi">Komplikasi</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="kasus">Kasus
                            <!-- <span class="text-danger">*</span> -->
                        </label>
                        <div class="col-lg-6">
                            <select class="form-control" id="kasus" name="kasus">
                                <option value="">Please select</option>
                                <option value="Baru">Baru</option>
                                <option value="Lama">Lama</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    </br>
                    <input type="hidden" name="id_pesan">
                    <button class="btn btn-default btn-sm" data-dismiss="modal" aria-hidden="true">Batal</button>
                    <button class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
 

<div class="modal" id="basicModal1" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title">Tambah Tindakan</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form class="form-horizontal" method="post" action="/savetindakan">
                @csrf
                <input type="hidden" value="{{$data[0]->id_pemeriksaan}}" name="id_pemeriksaan" class="form-control">
                <input type="hidden" value="{{$data[0]->no_rm}}" name="no_rm" class="form-control">
                <div class="modal-body">
                    <!-- Modal body text goes here. -->
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="tindakan">Tindakan </label>
                        <div class="col-lg-6">
                            <select class="form-control" id="tindakan" name="tindakan">
                                <option readonly>Please select</option>
                                @foreach($tindakan as $tindakans)
                                <option value="{{$tindakans->nama_tindakan}}">{{$tindakans->nama_tindakan}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form-control" id="tindakan" name="tindakan" placeholder="Masukkan tindakan"> -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="keterangan">Keterangan </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan keterangan">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="perawat">Panggil Perawat </label>
                        <div class="col-lg-6">
                            <select class="form-control" id="perawat" name="perawat">
                                <option readonly>Please select</option>
                                @foreach($perawat as $perawats)
                                <option value="{{$perawats->full_name}}">{{$perawats->full_name}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form-control" id="tindakan" name="tindakan" placeholder="Masukkan tindakan"> -->
                        </div>
                    </div>
                <div class="modal-footer">
                    </br>
                    <input type="hidden" name="id_pesan">
                    <button class="btn btn-default btn-sm" data-dismiss="modal" aria-hidden="true">Batal</button>
                    <button class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

 

<div class="modal" id="basicModal2" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title">Tambah Permintaan Laboratoriun</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form class="form-horizontal" method="post" action="/savepermintaanlab">
            @csrf
            <input type="hidden" value="{{$data[0]->id_pemeriksaan}}" name="id_pemeriksaan" class="form-control">
            <input type="hidden" value="{{$data[0]->no_rm}}" name="no_rm" class="form-control">
                <div class="modal-body">
                    <!-- Modal body text goes here. -->
                    <div class="form-group row">

                        <div class="col-lg-12">
                            <h4></h4>
                            <div class="col-lg-6">
                             <!-- <label class="form-check-label"> -->
                                @foreach($laborat as $datalaborats)
                                    <input type="checkbox" class="form-check-input" name="id_laborat[]" value="{{$datalaborats->id_data_laborat_dokter }}" ><label for="id_pemeriksaan[]">{{$datalaborats->nama }}</label><br>
                                <!-- </label> -->
                                @endforeach
                        </div>
                    </div>
                    </div>
                </div>
                  

               <div class="modal-footer">
                    </br>
                    <input type="hidden" name="id_pesan">
                    <button class="btn btn-default btn-md" data-dismiss="modal" aria-hidden="true">Batal</button>
                    <button class="btn btn-primary btn-md">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal" id="modalRM" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data Rekam Medis</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>RPK</th>
                            <th>RPS</th>
                            <th>RPD</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1;?>
                        @foreach($anamnesa as $anamnesas)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$anamnesas->rpk}}</td>   
                            <td>{{$anamnesas->rps}}</td>
                            <td>{{$anamnesas->rpd}}</td>
                        </tr>
                        <?php $no++;?>
                        @endforeach
                    </table>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modalHasilLab" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data Hasil Lab</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Jenis Pelayanan Lab</th>
                            <th>Jenis Permintaan Dokter</th>
                            <th>Jenis Uji Lab</th>
                            <th>Hasil Lab</th>
                            <th>Nilai Normal</th>
                            <th>Satuan</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1;?>
                        @foreach($hasillab as $hasillabs)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$hasillabs->jenis_pemeriksaan}}</td>   
                            <td>{{$hasillabs->jenis_pemeriksaan}}</td>
                            <td>{{$hasillabs->nama_pemeriksaan}}</td>
                            <td>{{$hasillabs->hasil_pemeriksaan_lab}}</td>
                            <td>{{$hasillabs->nilai_normal}}</td>
                            <td>{{$hasillabs->satuan}}</td>
                        </tr>
                        <?php $no++;?>
                        @endforeach
                    </table>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-xl" id="modalAskep" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data Asuhan Keperawatan</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>RPK</th>
                            <th>RPS</th>
                            <th>RPD</th>
                            <th>NB Subjective</th>
                            <th>NB Objective</th>
                            <th>tb</th>
                            <th>bb</th>
                            <th>IMT</th>
                            <th>Suhu</th>
                            <th>RR</th>
                            <th>Sistol</th>
                            <th>Diastol</th>
                            <th>Analisis</th>
                            <th>Planning</th>
                            <th>Penanggung Jawab</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1;?>
                        @foreach($askep as $askeps)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$askeps->rpk}}</td>   
                            <td>{{$askeps->rps}}</td>
                            <td>{{$askeps->rpd}}</td>
                            <td>{{$askeps->nb_subjective}}</td>   
                            <td>{{$askeps->nb_object}}</td>
                            <td>{{$askeps->tb}}</td>
                            <td>{{$askeps->bb}}</td>   
                            <td>{{$askeps->imt}}</td>
                            <td>{{$askeps->suhu}}</td>
                            <td>{{$askeps->rr}}<span>/Menit</span></td>   
                            <td>{{$askeps->sistol}}</td>
                            <td>{{$askeps->diastol}}</td>
                            <td>{{$askeps->nb_assessment}}</td>   
                            <td>{{$askeps->nb_plan}}</td>
                            <td>{{$askeps->penanggungjawab}}</td>
                        </tr>
                        <?php $no++;?>
                        @endforeach
                    </table>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modalPemeriksaan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Riwayat Pemeriksaan</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>TB</th>
                            <th>BB</th>
                            <th>Sistol</th>
                            <th>Diastol</th>
                            <th>IMT</th>
                            <th>Suhu</th>
                            <th>RR</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1;?>
                        @foreach($pemeriksaan as $pemeriksaans)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$pemeriksaans->tinggi_badan}}</td>   
                            <td>{{$pemeriksaans->berat_badan}}</td>
                            <td>{{$pemeriksaans->sistol}}</td>
                            <td>{{$pemeriksaans->diastol}}</td>   
                            <td>{{$pemeriksaans->imt}}</td>
                            <td>{{$pemeriksaans->suhu}}</td>
                            <td>{{$pemeriksaans->rr}}<span> /Menit</span></td>
                        </tr>
                        <?php $no++;?>
                        @endforeach
                    </table>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="basicModalRujukan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title">Tambah Permintaan Rujukan</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form class="form-horizontal" method="post" action="">
                 
                <div class="modal-body">
                    <!-- Modal body text goes here. -->
                    <div class="form-group row">
                        <label class="col-lg-9 col-form-label" for="nama_obat">Isi Rujukan </label>
                        <div class="col-lg-12">
                            <textarea class="form-control" id="isi_rujukan" name="isi_rujukan" placeholder="Rujukan..."></textarea>
                        </div>
                    </div>
                </div>
                  
             

               <div class="modal-footer">
                    </br>
                    <input type="hidden" name="id_pesan">
                    <button class="btn btn-default btn-md" data-dismiss="modal" aria-hidden="true">Batal</button>
                    <button class="btn btn-primary btn-md">Simpan</button>
                </div>
    </form>
        </div>
    </div>
</div>
<div class="modal" id="basicModal3" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title">Tambah Obat</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form class="form-horizontal" method="post" action="/dokteraddobat">
                @csrf
                
                <input type="hidden" value="{{$data[0]->id_pemeriksaan}}" name="id_pemeriksaan" class="form-control">
                <input type="hidden" value="{{$data[0]->no_rm}}" name="no_rm" class="form-control">
                <div class="modal-body">
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="jenis">Jenis
                                    <!-- <span class="text-danger">*</span> -->
                    </label>
                    <div class="col-lg-6">
                        <select class="form-control" id="jenisresep" name="jenis">
                            <option value="Racikan">Racikan</option>
                            <option value="Jadi">Jadi</option>
                        </select>
                    </div>
                </div>
                <div class="control-group after-add-more">
                    <label>Nama Obat</label>
                        <select class="form-control" id="nama_obat" name="nama_obat[]">
                            @foreach($dataobat as $dataobats)
                            <option value="{{$dataobats->nama_obat}}">{{$dataobats->nama_obat}}</option>
                             @endforeach
                        </select>
                    <label>Jumlah</label>
                        <input type="text" name="jk[]" class="form-control">
                </div>
                <button class="btn btn-success add-more" id="add" type="button">
                    <i class="glyphicon glyphicon-plus"></i> Add
                </button>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="signa">Signa </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="signa" name="signa" placeholder="Signa Obat">
                        </div>
                    </div>
                     <div class="col-lg-6">
                            <input type="hidden" class="form-control" id="coret" name="coret" placeholder="Signa Obat">
                        </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="aturan_pakai">Aturan Pakai </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="aturan_pakai" name="aturan_pakai" placeholder="Aturan Pakai">
                        </div>
                    </div>
                     <div class="modal-footer">
                    </br>
                    <input type="hidden" name="id_pesan">
                    <button class="btn btn-default btn-sm" data-dismiss="modal" aria-hidden="true">Batal</button>
                    <button class="btn btn-primary btn-sm">Simpan</button>
                </div>
         <!--  <button class="btn btn-success" type="submit">Submit</button> -->
        </form>

        <!-- class hide membuat form disembunyikan  -->
        <!-- hide adalah fungsi bootstrap 3, klo bootstrap 4 pake invisible  -->
       <div class="copy hide">
            <div class="control-group">
                <br>
                <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button> 
                <br>
                <label>Nama Obat</label>
                    <select class="form-control" id="nama_obat" name="nama_obat[]">
                        @foreach($dataobat as $dataobats)
                        <option value="{{$dataobats->nama_obat}}">{{$dataobats->nama_obat}}</option>
                        @endforeach
                    </select>
                    <!-- <select class="form-control" id="jenis" name="nama[]">
                        <option value="">Please select</option>
                        <option value=""></option>
                    </select> -->
                <label>Jumlah</label>
                <input type="text" name="jk[]" class="form-control">
            </div>
            <!-- <div class="control-group">
               <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>  
                <br>
                <label>Nama Obat</label>
                <select class="form-control" id="jenis" onkeyup="jadi();" name="nama[]">
                    <option value="">Please select</option>
                    <option value=""></option>
                </select>
                <label>Jumlah</label>
                <input type="text" name="jk[]" class="form-control">
              <hr>
            </div> -->
          </div>
        </div>
    </div>
</div>
  

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script>

     $(document).ready(function() {
        var nilai=1;
        $(".copy").hide()        
        $(".add-more").click(function(){ 
        var html = $(".copy").html();
        $(".after-add-more").after(html);
        var html1 = $(".add-more").html();
        $(".copy").after(html1);
        document.getElementById("coret").value =++nilai;
      });

      // saat tombol remove dklik control group akan dihapus 
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
          document.getElementById("coret").value =--nilai;
      });
    });
    function jadi(){
        if(document.getElementById("jenisobat").value ="jadi"){
            $("#add").hide();
        }
    }
</script>
@include('dokter.templatedokter.v_footer')