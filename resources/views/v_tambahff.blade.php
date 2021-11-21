

@extends('header')


<!--**********************************
    Nav header start
***********************************-->


<div class="nav-header">
    <div class="brand-logo">
        <a href="/C_antrian/">
            <b class="logo-abbr"><img src="/template/images/logopuskeskecil.png" alt=""> </b>
            <span class="logo-compact"><img src="/template/images/logopuskeskecil.png" alt=""></span>
            <span class="brand-title">
                <img src="/template/images/sispel.png" alt="">
            </span>
        </a>
    </div>
</div>
<div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>

                <div class="header-right">
                    <ul class="clearfix">

                         <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">

                                <img src="/template/images/user/surat.png" height="40" width="40" alt="">



                            </div>

                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="/template/images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <i class="icon-envelope-open"></i> <span>Inbox</span>
                                                <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                            </a>
                                        </li>

                                        <hr class="my-2">
                                        <li>
                                            <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href=""><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            </div>

            <div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Loket Pendaftaran</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Pendaftaran</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="">Pendaftaran Pasien</a></li>
                    <li><a href="">Form Pendaftaran</a></li>
                    <li><a href="#">History</a></li>
                    <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                </ul>
            </li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-notebook menu-icon"></i><span class="nav-text">Family Folder</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="">Family Folder</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="content-body">
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Family Folder</a></li>
        </ol>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- <h4 class="card-title">Data Family Folder</h4> -->
                    <div class="table-responsive">
                        <div class="container">
                            <div class="py-5 text-center">
                                <h1 class="h1 mb-3 font-weight-normal" style="text-align: center;"> Tambah Family Folder </h1>
                            </div>


                            <form class="ui form" action="/tambahff" method="post">
                            @csrf
                                <!-- <h1 class="h1 mb-3 font-weight-normal" style="text-align: center;"> Tambah Data Family Folder </h1> -->
                                <label for="inputNamaKK">Nama Kartu Keluarga</label>
                                <input type="text" name="nama_kk" id="inputNamaKK" class="form-control" placeholder="Nama KK" required autofocuse>
                                <br>
                                <label for="inputAlamat">Alamat</label>
                                <input type="text" name="alamat" id="inpuAlamat" class="form-control" placeholder="Alamat Lengkap" required autofocuse>
                                <br>
                                <label for="inputDesa">Desa</label>
                                <input type="text" name="desa" id="inputDesa" class="form-control" placeholder="Nama Desa" required autofocuse>
                                <br>
                                <label for="inputKecamatan">Kecamatan</label>
                                <input type="text" name="kecamatan" id="inputKecamatan" class="form-control" placeholder="Nama Kecamatan" required autofocuse>
                                <br>
                                <label for="inputKabupaten">Kabupaten</label>
                                <input type="text" name="kabupaten" id="inputKabupaten" class="form-control" placeholder="Nama Kabupaten" required autofocuse>
                                <br>
                                <label for="inputHP">No. Telp./HP.</label>
                                <input type="text" name="telp" id="inputHP" class="form-control" placeholder="Nomor Telpon / HP" required autofocuse>
                                <br>

                                <!-- <label for="inputIndex">Foto Dokumen Kartu Keluarga</label>
                                    <input type="text" name="no_index" id="inputIndex" class="form-control" placeholder="Nomor Index" required autofocuse>
                                    <br> -->
                                <div class="col-sm-2">

                                    <button class="btn btn-lg btn-primary btn-block" type="submit"> Simpan</button>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @extends('footer')
