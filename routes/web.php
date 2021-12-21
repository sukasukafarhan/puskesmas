<?php
use App\Http\Controllers\EventController;


Route::get('/','Antrian@index');
Route::get('/getantrian/{id}','Antrian@antrian');
Route::get('/jumlahantrian','Antrian@showjumlahantrian');
// Route::get('/update-antrian-pendaftaran', function () {
//     return view('antrian/v_updateantrian');
// });

Route::get('/login','Login@index');
Route::get('/logout','Login@logout');
Route::post('/login','Login@login');

Route::get('/daftarantrian','PendaftaranController@index');
Route::get('/daftarantrian/lewati/{id}','PendaftaranController@lewati');
Route::get('/daftarantrian/hapus/{id}','PendaftaranController@hapus');
Route::get('/daftarantrian/panggil/{id}','PendaftaranController@panggil');
Route::get('/daftarantrian/layani/{id}','PendaftaranController@layani');
Route::get('/daftarantrian/addfamily/{id}','PendaftaranController@addfamily');
Route::post('/daftarantrian/createfamily','PendaftaranController@store');
Route::get('/history','PendaftaranController@history');

Route::get('/datapasien/{id}/{id2}','PendaftaranController@datapasien');
Route::get('/datapasien/addpasien/{id}/{id2}','PendaftaranController@addpasien');
Route::post('/datapasien/createpasien','PendaftaranController@storepasien');

Route::get('/pendaftaranpasien/{id}/{id2}','PendaftaranController@pendaftaran_pasien');
Route::post('/pendaftaranpasien','PendaftaranController@save_pendaftaran');


Route::get('/datapasienrm','PasienController@viewdataFF');
Route::get('/datapasienrm/viewdatapasien/{id}','PasienController@viewdatapasien');
Route::get('/datapasienrm/viewaddpasien/{id}','PasienController@viewaddpasien');
Route::get('/datapasienrm/viewaddfamily','PasienController@viewaddfamily');
Route::post('/datapasienrm/createfamily','PendaftaranController@tambahFF');
Route::post('/datapasienrm/createpasien','PendaftaranController@tambahpasien');


Route::get('/perawatumum','PerawatUmumController@index');
// Route::get('/poliumum/lewati/{id}','PendaftaranController@lewati');
// Route::get('/poliumum/hapus/{id}','PendaftaranController@hapus');
// Route::get('/poliumum/panggil/{id}','PendaftaranController@panggil');
Route::get('/poliumum/lewati/{id}','PerawatUmumController@lewati');
Route::get('/poliumum/hapus/{id}','PerawatUmumController@hapus');
Route::get('/poliumum/panggil/{id}','PerawatUmumController@panggil');
Route::get('/poliumum/layani/{id}/{id2}','PerawatUmumController@layani');
Route::post('/poliumumperawat','PerawatUmumController@storeperawat');
Route::get('/historyperawat','PerawatUmumController@history');
Route::get('/poliumum/laporanrm','PerawatUmumController@showlaporanrm');


Route::get('/laborat','LaboratoriumController@index');
Route::get('/laboratpelayanan/{id1}/{id2}','LaboratoriumController@layani');
Route::get('/laboratdatajenislab','LaboratoriumController@dataJenisPelayananLab');
Route::get('/laboratdatajenisdokter/{id}','LaboratoriumController@dataJenisPelayananDokter');
Route::get('/laboratdataujilab/{id}','LaboratoriumController@dataUjiLab');
Route::get('/laboratlaporanlab','LaboratoriumController@dataLaporanLab');
Route::get('/laborathistory','LaboratoriumController@history');
Route::post('/savepelayanandokter','LaboratoriumController@storepelayanandokter');
Route::post('/savehasillab','LaboratoriumController@storehasillab');
Route::get('/laborat/deletepelayanandokter/{id1}/{id2}','LaboratoriumController@deletepelayanandokter');
Route::get('/laborat/deletedatajenislab/{id}','LaboratoriumController@deletedatajenislab');

Route::get('/pelayanandokter/{id1}/{id2}','DokterController@index');
Route::post('/saveanamnesa','DokterController@storeanamnesa');
Route::post('/savepemeriksaan','DokterController@storepemeriksaan');
Route::post('/savepermintaanlab','DokterController@storepermintaanlab');
Route::post('/dokteraddobat','DokterController@tambahObat');
Route::post('/savediagnosa','DokterController@storediagnosa');
Route::post('/savetindakan','DokterController@storetindakan');
Route::post('/savepenyuluhan','DokterController@storepenyuluhan');
Route::get('/pelayanandokter/hapustindakan/{id1}/{id2}/{id3}','DokterController@hapustindakan');
Route::get('/pelayanandokter/hapus/{id1}/{id2}/{id3}','DokterController@hapusdiagnosa');
Route::get('/pelayanandokter/hapusresep/{id1}/{id2}/{id3}','DokterController@hapusresep');
Route::get('/daftarantriandokter','DokterController@showantriandokter');
Route::get('/dataicdx','DokterController@showicdx');
Route::post('/saveicdx','DokterController@storeicdx');
Route::get('/dataicdx/hapus/{id}','DokterController@hapus');

Route::get('/farmasi','FarmasiController@index');
Route::get('/showantrianfarmasi','FarmasiController@showantrian');
Route::get('/telaahobat','FarmasiController@showtelaahobat');
Route::get('/telaahresep','FarmasiController@showtelaahresep');
Route::get('/pelayanan','FarmasiController@showpelayanan');
Route::get('/tabelobat','FarmasiController@showobat');
Route::get('/stokobat','FarmasiController@showstokobat');
Route::post('/tabelobat/tambahdataobat','FarmasiController@storedataobat');
Route::post('/tabelobat/tambahstokobat','FarmasiController@storestockobat');
Route::get('/laporanlidi','FarmasiController@showlaporanlidi');
Route::get('/laporanlplpo','FarmasiController@showlaporanlplpo');
Route::get('/laporanstock','FarmasiController@showlaporanstok');
Route::get('/laporantelaah','FarmasiController@showlaporantelaah');
Route::get('/farmasi/history','FarmasiController@showhistory');

Route::get('/kasir','KasirController@index');
Route::get('/pelayanankasir','KasirController@showpelayanankasir');
Route::get('/kasir/history','KasirController@showhistory');
Route::get('/kasir/laporan','KasirController@showlaporan');

Route::get('/admin','AdminController@index');
Route::get('/admin/jamkes','AdminController@showjamkes');
Route::get('/admin/levelpengguna','AdminController@showlevelpengguna');
Route::get('/admin/pengguna','AdminController@showpengguna');
Route::get('/admin/poliutama','AdminController@showpoliutama');
Route::get('/admin/datapelayanan','AdminController@showdatapelayanan');

Route::get('/datarekammedislab','PasienController@viewaddfamilyrmlaborat');
Route::get('/datarekammedislab/laboratrmdatapasien/{id}','PasienController@viewdatapasienrmlaborat');
Route::get('/datarekammedislab/laboratrmdatapasien/rm/{id}','PasienController@viewdatarmlaborat');
Route::get('/datarekammedis','PasienController@viewaddfamilyrm');
Route::get('/datarekammedis/viewdatapasien/{id}','PasienController@viewdatapasienrm');
Route::get('/datarekammedis/viewdatapasien/rm/{id}','PasienController@viewdatarmpendaftran');
Route::get('/datarekammedisperawat','PasienController@viewaddfamilyrmperawat');
Route::get('/datarekammedisperawat/perawatrmdatapasien/{id}','PasienController@viewdatapasienrmperawat');
Route::get('/datarekammedisperawat/perawatrmdatapasien/perawataskep/{id}','PasienController@viewaskepperawat');
Route::get('/datarekammedisperawat/perawatrmdatapasien/perawatrm/{id}','PasienController@viewrmperawat');
Route::get('/datarekammedisfarmasi','PasienController@viewaddfamilyrmfarmasi');
Route::get('/datarekammedisfarmasi/viewdatapasien/{id}','PasienController@viewdatapasienrmfarmasi');
Route::get('/datarekammedisfarmasi/viewdatapasien/rm/{id}','PasienController@viewdatarmfarmasi');
Route::get('/datarekammedisadmin','PasienController@viewaddfamilyrmadmin');
Route::get('/datarekammedisadmin/viewdatapasien/{id}','PasienController@viewdatapasienrmadmin');
Route::get('/datarekammedisadmin/viewdatapasien/rm/{id}','PasienController@viewdatarmadmin');
Route::get('/datarekammedisdokter','PasienController@viewaddfamilyrmdokter');
Route::get('/datarekammedisdokter/viewdatapasien/{id}','PasienController@viewdatapasienrmdokter');
Route::get('/datarekammedisdokter/viewdatapasien/rm/{id}','PasienController@viewdatarmdokter');