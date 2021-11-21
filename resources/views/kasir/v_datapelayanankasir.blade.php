@include('farmasi.templatefarmasi.v_header')
@include('kasir.template.sidebar')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Antrian</a></li>
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
                            <li class="mb-1"><strong class="text-dark mr-4">No. Antrian</strong> <span></span></li>
                            <li class="mb-1"><strong class="text-dark mr-4">Tanggal</strong> <span>tanggal, jam</span></li>
                            <li class="mb-1"><strong class="text-dark mr-4">No RM</strong> <span> </span></li>
                            <li class="mb-1"><strong class="text-dark mr-4">Nama Lengkap</strong> <span> </span></li>
                            <li class="mb-1"><strong class="text-dark mr-4">Alamat</strong> <span> </span></li>
                            <li class="mb-1"><strong class="text-dark mr-4">Umur</strong> <span> </span></li>
                            <li class="mb-1"><strong class="text-dark mr-4">Jenis Kelamin</strong> <span> </span></li>
                            <li class="mb-1"><strong class="text-dark mr-4">Jenis Asuransi</strong> <span></span> </li>
                            <li class="mb-1"><strong class="text-dark mr-4">No Asuransi</strong> <span></span> </li>
                            <li class="mb-1"><strong class="text-dark mr-4">Poli Asal</strong> <span> </span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- <div class="card">
                <div class="card-body">
                    <div class="row mb-5">
                        <div>
                            <h4 class="text-muted mb-4">Data Pelayanan</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                   
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div> -->
        </div>
        
        <div class="col-lg-12 col-xl-9">
         
                <div class="card">
                    <!-- <section> -->
                    <div class="card-body">
                        
                        <div>
                            <h4 class="text-center text-muted mb-4">Pelayanan</h4>
                        </div>

                      <div class="form-row align-items-center">
                                <div class="col-auto my-1">
                                   <h4 class="text-center mb-4"> </h4>
                                </div>
                            </div>
                        <form   enctype="multipart/form-data" method="post" action="">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Poli Asal</th>
                                        <th>Jenis Tindakan</th>
                                         <th>Harga Jenis Tindakan</th>
                                     <th>Jenis Laboratorium</th>
                                      <th>Harga Jenis Laboratorium</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <tr>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                    
                                </tr>
                                </tbody>
                            </table>
                        </div>
                       <div class="card-footer">
                        <div class="rounded-button">
                            <button type="button" class="btn mb-1 btn-rounded btn-primary float-right" data-toggle="modal" data-target="#basicModal1">Simpan</button>
                        </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- #/ container -->
    
</div>
<div class="modal" id="basicModal1" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title">Invoice Pelayanan Pukesmas Rejowinangon</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
             
            <div class="modal-body">
                    <!-- Modal body text goes here. -->
                   <ul class="card-profile__info">
                            <li class="mb-1"><strong class="text-dark mr-4">Nama Pasien </strong> <span>:</span></li>
                            <li class="mb-1"><strong class="text-dark mr-4"> Nomor Pembayaran</strong> <span >:</span></li>
                            <li class="mb-1"><strong class="text-dark mr-4">Jumlah Yang Dibayarkan</strong>: <span> </span></li>
                            <li class="mb-1"><strong class="text-dark mr-4">Jenis Pelayanan (poli dan jenis tindakan)</strong> <span> :</span></li>
                            <li class="mb-1"><strong class="text-dark mr-4">Tanggal Pembayaran</strong> <span>: </span></li>
                           
                         
                        </ul>
                    
                </div>
               
            
        </div>
    </div>
</div>
@include('farmasi.templatefarmasi.v_footer')

<!--**********************************
            Content body end
        ***********************************-->