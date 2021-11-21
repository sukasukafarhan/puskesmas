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
                                <li class="mb-1"><strong class="text-dark mr-4">No. Pendaftaran</strong> <span>no. daftar</span></li>
                                <li class="mb-1"><strong class="text-dark mr-4">Tanggal</strong> <span>tanggal, jam</span></li>
                                <li class="mb-1"><strong class="text-dark mr-4">No RM</strong> <span></span></li>
                                <li class="mb-1"><strong class="text-dark mr-4">Nama Lengkap</strong> <span></span></li>
                                <li class="mb-1"><strong class="text-dark mr-4">Tanggal Lahir</strong> <span> </span></li>
                                <li class="mb-1"><strong class="text-dark mr-4">Umur</strong> <span></span></li>
                                <li class="mb-1"><strong class="text-dark mr-4">Status Pasien</strong> <span></span></li>
                                <li class="mb-1"><strong class="text-dark mr-4">Nama KK</strong> <span>nama KK</span></li>
                                <li class="mb-1"><strong class="text-dark mr-4">Pekerjaan</strong> <span></span></li>
                                <li class="mb-1"><strong class="text-dark mr-4">Poli Asal</strong> <span>asal </span></li>
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
                                <button class="btn btn-secondary mb-2 px-4">Riwayat Rekam Medis</button>
                                <button class="btn btn-secondary mb-2 px-4">Riwayat Pemeriksaan</button>
                                <button class="btn btn-secondary mb-2 px-4">Hasil Lab</button>
                                
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
                                <button class="btn btn-secondary mb-2 px-5">Resep Obat</button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xl-9">
            <div class="card">
                <!-- <section> -->
                <div class="card-body">
                    <div>
                        <h4 class="text-muted mb-4">Anamnesa</h4>
                    </div>
                  
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>RPK</label>
                                        <input type="text" value="" name="rpk" class="form-control" placeholder="Riwayat Penyakit Keluarga" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>RPD</label>
                                        <input type="text" name="rpd" value="" class="form-control" placeholder="Riwayat Penyakit Dulu" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>RPS</label>
                                        <input type="text" name="rps" value="" class="form-control" placeholder="Riwayat Penyakit Sekarang" required>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                   
                        <div>
                            <h4 class="text-muted mb-4">Pemeriksaan Fisik</h4>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>TB</label>
                                    <div class="input-group">
                                        <input type="text" name="tb" value="" class="form-control" placeholder="Tinggi Badan" required><span class="input-group-append"><span class="input-group-text">
                                                <a class="text-muted">m</a>
                                            </span></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Sistol</label>
                                    <div class="input-group">
                                        <input type="text" name="sistol" value="" class="form-control" placeholder="Sistol" required><span class="input-group-append"><span class="input-group-text">
                                                <a class="text-muted">mmHg</a>
                                            </span></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>BB</label>
                                    <div class="input-group">
                                        <input type="text" name="bb" value="" class="form-control" placeholder="Berat Badan" required><span class="input-group-append"><span class="input-group-text">
                                                <a class="text-muted">Kg</a>
                                            </span></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Diastol</label>
                                    <div class="input-group">
                                        <input type="text" name="diastol" value="" class="form-control" placeholder="Diastol" required><span class="input-group-append"><span class="input-group-text">
                                                <a class="text-muted">mmHg</a>
                                            </span></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>IMT</label>
                                    <div class="input-group">
                                        <input type="text" name="imt" value="" class="form-control" placeholder="Index Massa" required><span class="input-group-append"><span class="input-group-text">
                                                <a class="text-muted">Kg/m2</a>
                                            </span></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Suhu</label>
                                    <div class="input-group">
                                        <input type="text" name="suhu" value="" class="form-control" placeholder="Suhu" required><span class="input-group-append"><span class="input-group-text">
                                                <a class="text-muted">'C</a>
                                            </span></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>RR</label>
                                    <div class="input-group">
                                        <input type="text" name="nafas" value="" class="form-control" placeholder="Jumlah Nafas" required><span class="input-group-append"><span class="input-group-text">
                                                <a class="text-muted">/menit</a>
                                            </span></span>
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
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="top" title="Hapus">
                                                        <i class="fa fa-trash color-danger"></i>
                                                    </button>
                                            </td>

                                        </tr>
                                    </tbody>
                               
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
                                        <tr>
                                            <td></td>
                                            <td></td>

                                            <td class="nav justify-content-center">---DATA TIDAK DITEMUKAN---</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                         
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
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                             <td>
                                                <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="top" title="Hapus">
                                                        <i class="fa fa-trash color-danger"></i>
                                                    </button>
                                            </td>
                                        </tr>
                                    </tbody>

                               
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>

                                            <th>No.</th>
                                            <th>Tindakan</th>
                                            <th>Keterangan</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="nav justify-content-center">---DATA TIDAK DITEMUKAN---</td>
                                            <td>
                                                
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                           
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
                                <tr>
 <td></td>
                                            <td></td>
                                           
                                            <td></td>
                                             <td></td>
                                            <td></td>
                                            <td></td>
                                        
                                            <td>
                                                <button type="button" class="btn btn-light" data-toggle="tooltip" data-target="#modal_hapus" title="Hapus">
                                                        <i class="fa fa-trash color-danger"></i>
                                                    </button>
                                            </td>


                                </tr>
                            </tbody>
                           
                              
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
                                    </tbody>
                                </table>
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
                        <form method="post" action="">

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
            <form class="form-horizontal" method="post" action="">
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
 
<div class="modal" id="modal_hapus" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title">Tambah Diagnosa</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form class="form-horizontal" method="post" action="">
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
            <form class="form-horizontal" method="post" action="">
                <div class="modal-body">
                    <!-- Modal body text goes here. -->
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="icdx">Tindakan </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="icdx" name="tindakan" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="diagnosa">Keterangan </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="diagnosa" name="keterangan" placeholder="">
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

             
<!-- <div class="modal fade" id="modal_hapus" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Hapus Produk</h3>
            </div> -->
          <!--   <form class="form-horizontal" method="post" action="C_Dokter/hapusProduk?id="> 
                <div class="modal-body"> -->
                  <!--   <p>Anda yakin mau menghapus <b></b></p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="kode_barang" value="">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
                    <button class="btn btn-danger">Hapus</button>
                </div> -->
            <!-- </form> -->
           <!--  </div>
            </div>
        </div> -->


<div class="modal" id="basicModal2" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title">Tambah Permintaan Laboratoriun</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form class="form-horizontal" method="post" action="">
                 
                <div class="modal-body">
                    <!-- Modal body text goes here. -->
                    <div class="form-group row">

                        <div class="col-lg-6">
                            <h4></h4>
                            <div class="col-lg-6">
                             <label class="form-check-label">

                                    <input type="checkbox" class="form-check-input" name="nama_pemeriksaan[]" value="" ></label>
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
            <form class="form-horizontal" method="post" action="">
                <div class="modal-body">
                   <!-- <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="jenis">Jenis -->
                            <!-- <span class="text-danger">*</span> -->
               <!--          </label>
                        <div class="col-lg-6">
                            <select class="form-control" id="jenis" name="jenis">
                                <option value="">Please select</option>
                                <option value="Racikan">Racikan</option>
                                <option value="Jadi">Jadi</option>
                            </select>
                        </div>
                    </div>

                  
                     
                       <div class="control-group after-add-more">
                            <select  id="jenis"  name="nama[]" class="form-control">
                                 <option value="">Please select</option>
                                 
                                <option value=""></option>
                            
                            </select>
                   
              <label>Jumlah</label>
              <input type="text" name="jk[]" class="form-control">
             
             
                   <br>
            <button class="btn btn-success add-more" type="button">
              <i class="glyphicon glyphicon-plus"></i> Add
            </button>
            <hr>
          </div>  
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="jumlah">Jumlah </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Obat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="signa">Signa </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="signa" name="signa" placeholder="Signa Obat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="aturan_pakai">Aturan Pakai </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="aturan_pakai" name="aturan_pakai" placeholder="Aturan Pakai">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="keterangan">Keterangan </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">
                        </div>
                    </div>
                </div>
            -->
             <form action="proses.php" method="POST">
          <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="jenis">Jenis
                            <!-- <span class="text-danger">*</span> -->
                        </label>
                        <div class="col-lg-6">
                            <select class="form-control" id="jenisobat" name="jenis">
                                <option value="">Please select</option>
                                <option value="Racikan">Racikan</option>
                                <option value="Jadi">Jadi</option>
                            </select>
                        </div>
                    </div>
          <div class="control-group after-add-more">
            <label>Nama Obat</label>
           <select class="form-control" id="jenis" name="nama[]">
                                 <option value="">Please select</option>
                                 
                               
                                <option value=""></option>
                         
                            </select>
            <label>Jumlah</label>
            <input type="text" name="jk[]" class="form-control">
            
           
            <hr>
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
            </div>
          </div>
            
        </div>
    </div>
</div>
  

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script>

     $(document).ready(function() {
        var nilai=1;
     $(".copy").hide();

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