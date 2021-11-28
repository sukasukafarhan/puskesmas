-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 03:18 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id` int(11) NOT NULL,
  `no_rm` varchar(255) NOT NULL,
  `id_pemeriksaan` int(11) NOT NULL,
  `total_pembayaran` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_11_153250_tbl_datapasien', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anamnesa_rm`
--

CREATE TABLE `tbl_anamnesa_rm` (
  `id_anamnesa` int(11) NOT NULL,
  `id_pemeriksaan` int(255) NOT NULL,
  `rpd` varchar(255) NOT NULL,
  `rpk` varchar(255) NOT NULL,
  `rps` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_antrian_poli`
--

CREATE TABLE `tbl_antrian_poli` (
  `id_antrian` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` varchar(10) NOT NULL,
  `no_rm` int(10) NOT NULL,
  `poli_asal` int(11) NOT NULL,
  `poli_tujuan` int(11) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_antrian_poli_umums`
--

CREATE TABLE `tbl_antrian_poli_umums` (
  `id_antrian` int(11) NOT NULL,
  `no_antrian` varchar(100) NOT NULL,
  `no_rm` varchar(25) NOT NULL,
  `waktu` varchar(25) NOT NULL,
  `status` varchar(255) NOT NULL,
  `poli_asal` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_antrian_poli_umums`
--

INSERT INTO `tbl_antrian_poli_umums` (`id_antrian`, `no_antrian`, `no_rm`, `waktu`, `status`, `poli_asal`, `created_at`, `updated_at`) VALUES
(1, '0', '10.T0001.1', '16:44:13', 'Masuk', 'Poli Umum', '2021-11-07', '2021-11-07 16:44:14'),
(2, '0', '10.T0001.1', '16:45:00', 'Masuk', 'Poli Umum', '2021-11-07', '2021-11-07 16:45:00'),
(3, '0', '10.T0001.1', '16:46:15', 'Masuk', 'Poli Umum', '2021-11-07', '2021-11-07 16:46:15'),
(4, '0', '10.A0001.3', '16:50:32', 'Masuk', 'Poli Umum', '2021-11-07', '2021-11-07 16:50:32'),
(5, '0', '10.T0001.1', '16:54:08', 'Masuk', 'Poli Umum', '2021-11-07', '2021-11-07 16:54:08'),
(6, '0', '10.T0001.1', '16:55:49', 'Masuk', 'Poli Umum', '2021-11-07', '2021-11-07 16:55:49'),
(7, 'A 00 8', '10.T0001.1', '16:56:56', 'Masuk', 'Poli Umum', '2021-11-07', '2021-11-07 16:56:56'),
(8, 'A 00 1', '10.A0001.3', '15:13:03', 'Masuk', 'Poli Umum', '2021-11-08', '2021-11-08 15:13:03'),
(9, 'A 00 2', '10.T0001.1', '15:13:15', 'Masuk', 'Poli Umum', '2021-11-08', '2021-11-08 15:13:15'),
(10, 'A 00 3', '10.T0001.1', '15:13:50', 'Masuk', 'Poli Umum', '2021-11-08', '2021-11-08 15:13:50'),
(11, 'A 00 1', '10.A0001.3', '14:55:56', 'Masuk', 'Poli Umum', '2021-11-09', '2021-11-09 14:55:56'),
(12, 'A 00 2', '10.T0001.1', '14:56:15', 'Masuk', 'Poli Umum', '2021-11-09', '2021-11-09 14:56:15'),
(13, 'A 00 1', '10.T0001.1', '12:31:55', 'Masuk', 'Poli Umum', '2021-11-12', '2021-11-12 12:31:55'),
(14, 'A 00 2', '10.A0001.3', '12:32:07', 'Masuk', 'Poli Umum', '2021-11-12', '2021-11-12 12:32:07'),
(15, 'A 00 1', '10.T0001.1', '14:32:08', 'Masuk', 'Poli Umum', '2021-11-16', '2021-11-16 14:32:08'),
(16, 'A 00 2', '10.A0001.3', '14:32:22', 'Masuk', 'Poli Umum', '2021-11-16', '2021-11-16 14:32:22'),
(17, 'A 00 1', '10.A0001.3', '01:09:35', 'Masuk', 'Poli Umum', '2021-11-17', '2021-11-17 01:09:35'),
(18, 'A 00 3', '10.A0001.3', '09:12:03', 'Masuk', 'Poli Umum', '2021-11-28', '2021-11-28 09:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_antri_pendaftaran`
--

CREATE TABLE `tbl_antri_pendaftaran` (
  `id_antrian` int(8) NOT NULL,
  `no_antrian` varchar(255) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `urutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_antri_pendaftaran`
--

INSERT INTO `tbl_antri_pendaftaran` (`id_antrian`, `no_antrian`, `id_poli`, `tanggal_daftar`, `status`, `urutan`) VALUES
(138, '3', 1, '2021-11-28', 'hapus', 1),
(139, '1', 1, '2021-11-28', 'lewati', 2),
(140, '2', 1, '2021-11-28', 'lewati', 3),
(141, '5', 1, '2021-11-28', 'lewati', 4),
(143, '4', 1, '2021-11-28', 'lewati', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_asuhan_keperawatan`
--

CREATE TABLE `tbl_asuhan_keperawatan` (
  `id_askep` int(11) NOT NULL,
  `id_pemeriksaan` int(11) NOT NULL,
  `no_rm` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` datetime NOT NULL,
  `rpd` text NOT NULL,
  `rpk` text NOT NULL,
  `rps` text NOT NULL,
  `nb_subjective` text NOT NULL,
  `tb` int(11) NOT NULL,
  `bb` int(11) NOT NULL,
  `imt` float NOT NULL,
  `suhu` float NOT NULL,
  `rr` int(11) NOT NULL,
  `sistol` int(11) NOT NULL,
  `diastol` int(11) NOT NULL,
  `nb_object` text NOT NULL,
  `nb_assessment` text NOT NULL,
  `nb_plan` text NOT NULL,
  `waktu_selesai` datetime NOT NULL,
  `penanggungjawab` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_datapasiens`
--

CREATE TABLE `tbl_datapasiens` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `nama_kk` varchar(50) NOT NULL,
  `no_index` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(5) NOT NULL,
  `jenis_asuransi` varchar(100) NOT NULL,
  `no_asuransi` varchar(100) DEFAULT NULL,
  `agama` varchar(50) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `silsilah` varchar(50) NOT NULL,
  `no_rm` varchar(50) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_datapasiens`
--

INSERT INTO `tbl_datapasiens` (`id`, `nama`, `jenis_kelamin`, `nama_kk`, `no_index`, `alamat`, `pekerjaan`, `tanggal_lahir`, `umur`, `jenis_asuransi`, `no_asuransi`, `agama`, `telp`, `silsilah`, `no_rm`, `updated_at`, `created_at`) VALUES
(4, 'abdullah nama ayahnya', 'Laki-laki', 'abdullah', '10.A0001', 'malang', 'pedagang', '2008-02-06', 13, 'BPJS', '12345', 'islam', '081235444555', 'Lainnya', '10.A0001.3', '2021-11-28 02:11:52', '2021-11-28 02:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_icdx`
--

CREATE TABLE `tbl_data_icdx` (
  `id` int(11) NOT NULL,
  `icd_x` varchar(50) NOT NULL,
  `nama_diagnosa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_laborat_dokter`
--

CREATE TABLE `tbl_data_laborat_dokter` (
  `id_data_laborat_dokter` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data_laborat_dokter`
--

INSERT INTO `tbl_data_laborat_dokter` (`id_data_laborat_dokter`, `nama`, `jenis`, `tarif`) VALUES
(1, 'HB', 'Hematologi', 0),
(2, '3 Parameter', 'Urin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_obat`
--

CREATE TABLE `tbl_data_obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_stock_obat`
--

CREATE TABLE `tbl_data_stock_obat` (
  `id` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jumlah_penerimaan` int(11) NOT NULL,
  `tanggal_kadaluarsa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_tindakan`
--

CREATE TABLE `tbl_data_tindakan` (
  `id_datatindakan` int(11) NOT NULL,
  `nama_tindakan` varchar(255) NOT NULL,
  `tarif` varchar(255) NOT NULL,
  `poli` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data_tindakan`
--

INSERT INTO `tbl_data_tindakan` (`id_datatindakan`, `nama_tindakan`, `tarif`, `poli`) VALUES
(1, 'rewrw', '50000', 'Poli Gigi'),
(2, 'rewrw899', '50000', 'Poli Umum');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diagnosa_rm`
--

CREATE TABLE `tbl_diagnosa_rm` (
  `id_diagnosa` int(11) NOT NULL,
  `id_pemeriksaan` int(11) NOT NULL,
  `icd_x` varchar(50) NOT NULL,
  `nama_diagnosa` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `kasus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_farmasi`
--

CREATE TABLE `tbl_farmasi` (
  `id` int(11) NOT NULL,
  `id_pemeriksaan` int(11) NOT NULL,
  `no_rm` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ffs`
--

CREATE TABLE `tbl_ffs` (
  `nama_kk` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `foto_KK` blob DEFAULT NULL,
  `no_index` varchar(10) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ffs`
--

INSERT INTO `tbl_ffs` (`nama_kk`, `alamat`, `desa`, `kecamatan`, `kabupaten`, `telp`, `foto_KK`, `no_index`, `updated_at`, `created_at`) VALUES
('abdullah', 'malang', 'smaan', 'klojen', 'malang', '084555555555', NULL, '10.A0001', '2021-11-28 02:09:07', '2021-11-28 02:09:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hasil_lab`
--

CREATE TABLE `tbl_hasil_lab` (
  `id_pemeriksaan_lab` int(11) NOT NULL,
  `id_pemeriksaan` int(11) NOT NULL,
  `id_nama_pemeriksaan` int(11) NOT NULL,
  `id_jenis_pemeriksaan` int(11) NOT NULL,
  `hasil_pemeriksaan_lab` float NOT NULL,
  `penanggung_jawab` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jamkes`
--

CREATE TABLE `tbl_jamkes` (
  `id_jamkes` int(11) NOT NULL,
  `singkatan_jamkes` varchar(255) NOT NULL,
  `nama_jamkes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jamkes`
--

INSERT INTO `tbl_jamkes` (`id_jamkes`, `singkatan_jamkes`, `nama_jamkes`) VALUES
(1, 'Umum', 'Umum'),
(2, 'BPJS', 'Badan Penyelenggara Jaminan Sosial'),
(3, 'SKTM', 'Surat Keterangan Tidak Mampu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_pemeriksaan`
--

CREATE TABLE `tbl_jenis_pemeriksaan` (
  `id_jenis_pemeriksaan` int(11) NOT NULL,
  `jenis_pemeriksaan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenis_pemeriksaan`
--

INSERT INTO `tbl_jenis_pemeriksaan` (`id_jenis_pemeriksaan`, `jenis_pemeriksaan`) VALUES
(1, 'fsfsfs'),
(2, 'Hematologi'),
(3, 'urin'),
(4, 'Hitung Jenis'),
(5, 'Sedimen'),
(6, 'Golongan Darah Widal'),
(7, 'Tes Kehamilan'),
(8, 'Kimia Darah'),
(9, 'Feses');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nama_pemeriksaan`
--

CREATE TABLE `tbl_nama_pemeriksaan` (
  `id_nama_pemeriksaan` int(11) NOT NULL,
  `id_jenis_pemeriksaan` int(11) NOT NULL,
  `nama_pemeriksaan` varchar(225) NOT NULL,
  `tarif_pemeriksaan` varchar(255) DEFAULT NULL,
  `nilai_normal` varchar(225) DEFAULT NULL,
  `satuan` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nama_pemeriksaan`
--

INSERT INTO `tbl_nama_pemeriksaan` (`id_nama_pemeriksaan`, `id_jenis_pemeriksaan`, `nama_pemeriksaan`, `tarif_pemeriksaan`, `nilai_normal`, `satuan`) VALUES
(1, 1, 'darah lengkap', '20000', '23000', '1'),
(2, 1, 'uang', '20000', '23000', '1'),
(3, 2, 'HB', '20000', '23000', '1'),
(4, 2, 'LECO', '20000', 'P (4000-10000) || L (4000-10000) ', 'ml'),
(5, 2, 'ERY', '20000', 'P (2-5) || L (2-5) ', 'jt/ml'),
(6, 2, 'TROMBO', '20000', 'P (150-450) || L (150/450) ', 'Ribu/ml'),
(7, 2, 'HCT', '20000', 'P (35-47) || L (32-45) ', '%'),
(8, 3, 'Albumin', '', '', ''),
(9, 3, 'Reduksi', '', '', ''),
(10, 3, 'Keton', '', '', ''),
(11, 3, 'Specifie Gravity', '', '', ''),
(12, 3, 'Blood', '', '', ''),
(13, 3, 'Ph', '', '', ''),
(14, 3, 'Bilirubin', '', '', ''),
(15, 3, 'urobilinogen', '', '', ''),
(16, 3, 'Nitrit', '', '', ''),
(17, 3, 'Leucosit', '', '', ''),
(18, 4, 'Basofil', '', '0-1', ''),
(19, 4, 'Eos', '', '1-3', ''),
(20, 4, 'Batang', '', '2-6', ''),
(21, 4, 'Segmen', '', '50-70', ''),
(22, 4, 'Limfo', '', '20-40', ''),
(23, 4, 'Monosit', '', '2-8', ''),
(24, 5, 'Ery', '', '', '/lpp'),
(25, 5, 'Leuco', '', '', '/lpb'),
(26, 5, 'Silinder', '', '', '/lpb'),
(27, 5, 'Ephitel', '', '', '/lpb'),
(28, 5, 'Kristal', '', '', '/lpb');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemeriksaan_rm`
--

CREATE TABLE `tbl_pemeriksaan_rm` (
  `id_pemeriksaan_objek` int(11) NOT NULL,
  `id_pemeriksaan` int(11) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `imt` float NOT NULL,
  `suhu` float NOT NULL,
  `rr` int(11) NOT NULL,
  `sistol` int(11) NOT NULL,
  `diastol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftarans`
--

CREATE TABLE `tbl_pendaftarans` (
  `no_antrian` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_rm` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `tipe_kunjungan` varchar(50) NOT NULL,
  `poli_yang_dituju` varchar(50) NOT NULL,
  `waktu_pelayanan` time NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pendaftarans`
--

INSERT INTO `tbl_pendaftarans` (`no_antrian`, `nama`, `no_rm`, `tanggal`, `tipe_kunjungan`, `poli_yang_dituju`, `waktu_pelayanan`, `updated_at`, `created_at`) VALUES
('A 00 5', 'Luwie Hartiarsa', '10.T0001.1', '2021-10-31', 'Baru', 'Poli Umum', '22:07:48', '2021-10-31 22:07:48', '2021-10-31 22:07:48'),
('A 00 1', 'MARTHARITA FARINDAHSARI PURWANDITA', '03.L0001.3', '2021-11-01', 'Baru', 'Poli Umum', '16:51:48', '2021-11-01 16:51:48', '2021-11-01 16:51:48'),
('A 00 1', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-01', 'Baru', 'Poli Umum', '23:38:36', '2021-11-01 23:38:36', '2021-11-01 23:38:36'),
('A 00 1', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-03', 'Baru', 'Poli Umum', '21:45:05', '2021-11-03 21:45:05', '2021-11-03 21:45:05'),
('A 00 1', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-03', 'Baru', 'Poli Umum', '21:45:53', '2021-11-03 21:45:53', '2021-11-03 21:45:53'),
('A 00 1', 'machi', '10.B0003.3', '2021-11-06', 'Baru', 'Poli Umum', '02:53:38', '2021-11-06 02:53:38', '2021-11-06 02:53:38'),
('A 00 1', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-07', 'Baru', 'Poli Umum', '16:23:50', '2021-11-07 16:23:50', '2021-11-07 16:23:50'),
('A 00 1', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-07', 'Baru', 'Poli Umum', '16:27:20', '2021-11-07 16:27:20', '2021-11-07 16:27:20'),
('A 00 1', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-07', 'Baru', 'Poli Umum', '16:33:24', '2021-11-07 16:33:24', '2021-11-07 16:33:24'),
('A 00 1', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-07', 'Baru', 'Poli Umum', '16:34:51', '2021-11-07 16:34:51', '2021-11-07 16:34:51'),
('A 00 1', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-07', 'Baru', 'Poli Umum', '16:35:30', '2021-11-07 16:35:30', '2021-11-07 16:35:30'),
('A 00 1', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-07', 'Baru', 'Poli Umum', '16:36:10', '2021-11-07 16:36:10', '2021-11-07 16:36:10'),
('A 00 2', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-07', 'Baru', 'Poli Umum', '16:37:57', '2021-11-07 16:37:57', '2021-11-07 16:37:57'),
('A 00 2', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-07', 'Baru', 'Poli Umum', '16:38:14', '2021-11-07 16:38:14', '2021-11-07 16:38:14'),
('A 00 2', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-07', 'Baru', 'Poli Umum', '16:41:22', '2021-11-07 16:41:22', '2021-11-07 16:41:22'),
('A 00 2', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-07', 'Baru', 'Poli Umum', '16:41:34', '2021-11-07 16:41:34', '2021-11-07 16:41:34'),
('A 00 2', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-07', 'Baru', 'Poli Umum', '16:43:38', '2021-11-07 16:43:38', '2021-11-07 16:43:38'),
('A 00 2', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-07', 'Baru', 'Poli Umum', '16:44:13', '2021-11-07 16:44:14', '2021-11-07 16:44:14'),
('A 00 3', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-07', 'Baru', 'Poli Umum', '16:45:00', '2021-11-07 16:45:00', '2021-11-07 16:45:00'),
('A 00 4', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-07', 'Baru', 'Poli Umum', '16:46:15', '2021-11-07 16:46:15', '2021-11-07 16:46:15'),
('A 00 5', 'a', '10.A0001.3', '2021-11-07', 'Baru', 'Poli Umum', '16:50:32', '2021-11-07 16:50:32', '2021-11-07 16:50:32'),
('A 00 6', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-07', 'Baru', 'Poli Umum', '16:54:08', '2021-11-07 16:54:08', '2021-11-07 16:54:08'),
('A 00 7', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-07', 'Baru', 'Poli Umum', '16:55:49', '2021-11-07 16:55:49', '2021-11-07 16:55:49'),
('A 00 8', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-07', 'Baru', 'Poli Umum', '16:56:56', '2021-11-07 16:56:56', '2021-11-07 16:56:56'),
('A 00 1', 'a', '10.A0001.3', '2021-11-08', 'Baru', 'Poli Umum', '15:13:03', '2021-11-08 15:13:03', '2021-11-08 15:13:03'),
('A 00 2', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-08', 'Baru', 'Poli Umum', '15:13:15', '2021-11-08 15:13:15', '2021-11-08 15:13:15'),
('A 00 3', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-08', 'Baru', 'Poli Umum', '15:13:50', '2021-11-08 15:13:50', '2021-11-08 15:13:50'),
('A 00 1', 'a', '10.A0001.3', '2021-11-09', 'Baru', 'Poli Umum', '14:55:56', '2021-11-09 14:55:56', '2021-11-09 14:55:56'),
('A 00 2', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-09', 'Baru', 'Poli Umum', '14:56:15', '2021-11-09 14:56:15', '2021-11-09 14:56:15'),
('A 00 1', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-12', 'Baru', 'Poli Umum', '12:31:55', '2021-11-12 12:31:55', '2021-11-12 12:31:55'),
('A 00 2', 'a', '10.A0001.3', '2021-11-12', 'Baru', 'Poli Umum', '12:32:07', '2021-11-12 12:32:07', '2021-11-12 12:32:07'),
('A 00 1', 'Luwie Hartiarsa', '10.T0001.1', '2021-11-16', 'Baru', 'Poli Umum', '14:32:08', '2021-11-16 14:32:08', '2021-11-16 14:32:08'),
('A 00 2', 'a', '10.A0001.3', '2021-11-16', 'Baru', 'Poli Umum', '14:32:22', '2021-11-16 14:32:22', '2021-11-16 14:32:22'),
('A 00 1', 'a', '10.A0001.3', '2021-11-17', 'Baru', 'Poli Umum', '01:09:35', '2021-11-17 01:09:36', '2021-11-17 01:09:36'),
('A 00 3', 'abdullah nama ayahnya', '10.A0001.3', '2021-11-28', 'Baru', 'Poli Umum', '09:12:03', '2021-11-28 09:12:03', '2021-11-28 09:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `No.HP` varchar(12) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id`, `full_name`, `username`, `password`, `email`, `role_id`, `No.HP`, `is_active`) VALUES
(1, 'Yulia Rahayu Putri', 'pendaftaran', '12345678', 'Yulia@gmail.com', 2, '', 1),
(2, 'cia tree', 'admin', '12345678', 'cia@gmail.com', 1, '', 1),
(3, 'ciiiia', 'dokter1', '1234568', 'cian@gmail.com', 3, '', 1),
(4, 'hihi', 'perawat1', '12345678', 'hihi2gmail.com', 4, '', 1),
(5, 'hahaha', 'laborat', '12345678', 'cianyyyyy@gmail.com', 5, '', 1),
(6, 'hihier', 'layanan', '12345678', 'hihddi2gmail.com', 6, '', 1),
(7, 'ciiiiajik', 'kasir', '12345678', 'cian@gmail.com', 6, '', 1),
(10, 'resrs', 'admin123', '12345678', 'anton@ymail.com', 1, '', 1),
(14, 'resrsrwe', 'farmasi1', '12345678', 'nuranisa290@yahoo.com', 7, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengobatan_rm`
--

CREATE TABLE `tbl_pengobatan_rm` (
  `id_pengobatan` int(11) NOT NULL,
  `id_pemeriksaan` int(11) NOT NULL,
  `rencana` varchar(255) NOT NULL,
  `terapi/tindakan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permintaanlab`
--

CREATE TABLE `tbl_permintaanlab` (
  `id_permintaan` int(11) NOT NULL,
  `id_pemeriksaan` int(11) NOT NULL,
  `id_data_laborat_dokter` int(11) NOT NULL,
  `status_permintaan` varchar(25) NOT NULL,
  `waktu` varchar(25) NOT NULL,
  `tanggal` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_poli`
--

CREATE TABLE `tbl_poli` (
  `id` int(11) NOT NULL,
  `kode_poli` varchar(255) NOT NULL,
  `nama_poli` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_poli`
--

INSERT INTO `tbl_poli` (`id`, `kode_poli`, `nama_poli`) VALUES
(1, 'A', 'Poli Umum');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekam_medis`
--

CREATE TABLE `tbl_rekam_medis` (
  `id_pemeriksaan` int(11) NOT NULL,
  `tanggal_kunjungan` date NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_selesai` datetime NOT NULL,
  `dokter_penanggung_jawab` varchar(255) NOT NULL,
  `perawat_penanggung_jawab` varchar(255) NOT NULL,
  `no_rm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resep_obat`
--

CREATE TABLE `tbl_resep_obat` (
  `id_resep` int(11) NOT NULL,
  `id_pemeriksaan` int(11) NOT NULL,
  `jenis_resep` varchar(50) NOT NULL,
  `nama_obat` varchar(225) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `signa` varchar(50) NOT NULL,
  `aturan_pakai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_telaah_obat`
--

CREATE TABLE `tbl_telaah_obat` (
  `id_telaah_obat` int(11) NOT NULL,
  `id_pemeriksaan` int(11) NOT NULL,
  `adm1` varchar(20) NOT NULL,
  `adm2` varchar(20) NOT NULL,
  `adm3` varchar(20) NOT NULL,
  `adm4` varchar(20) NOT NULL,
  `adm5` varchar(20) NOT NULL,
  `adm6` varchar(20) NOT NULL,
  `adm7` varchar(20) NOT NULL,
  `ketadm1` varchar(255) DEFAULT NULL,
  `ketadm2` varchar(255) DEFAULT NULL,
  `ketadm3` varchar(255) DEFAULT NULL,
  `ketadm4` varchar(255) DEFAULT NULL,
  `ketadm5` varchar(255) DEFAULT NULL,
  `ketadm6` varchar(255) DEFAULT NULL,
  `ketadm7` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_telaah_resep`
--

CREATE TABLE `tbl_telaah_resep` (
  `id` int(11) NOT NULL,
  `id_pemeriksaan` int(11) NOT NULL,
  `adm1` varchar(255) NOT NULL,
  `adm2` varchar(255) NOT NULL,
  `adm3` varchar(255) NOT NULL,
  `adm4` varchar(255) NOT NULL,
  `farm1` varchar(255) NOT NULL,
  `farm2` varchar(255) NOT NULL,
  `farm3` varchar(255) NOT NULL,
  `farm4` varchar(255) NOT NULL,
  `klinis1` varchar(255) NOT NULL,
  `klinis2` varchar(255) NOT NULL,
  `klinis3` varchar(255) NOT NULL,
  `klinis4` varchar(255) NOT NULL,
  `klinis5` varchar(255) NOT NULL,
  `ketadm1` varchar(255) DEFAULT NULL,
  `ketadm2` varchar(255) DEFAULT NULL,
  `ketadm3` varchar(255) DEFAULT NULL,
  `ketadm4` varchar(255) DEFAULT NULL,
  `ketfarm1` varchar(255) DEFAULT NULL,
  `ketfarm2` varchar(255) DEFAULT NULL,
  `ketfarm3` varchar(255) DEFAULT NULL,
  `ketfarm4` varchar(255) DEFAULT NULL,
  `ketklinis1` varchar(255) DEFAULT NULL,
  `ketklinis2` varchar(255) DEFAULT NULL,
  `ketklinis3` varchar(255) DEFAULT NULL,
  `ketklinis4` varchar(255) DEFAULT NULL,
  `ketklinis5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tindakan_rm`
--

CREATE TABLE `tbl_tindakan_rm` (
  `id_tindakan` int(11) NOT NULL,
  `id_pemeriksaan` int(11) NOT NULL,
  `tindakan` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `waktu_tindakan` datetime NOT NULL,
  `status` varchar(225) NOT NULL,
  `penanggung_jawab` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_role`
--

INSERT INTO `tbl_user_role` (`role_id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Pendaftaran'),
(3, 'Dokter Umum'),
(4, 'Perawat Umum'),
(5, 'Laboratorium'),
(6, 'Kasir'),
(7, 'Farmasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_rm` (`no_rm`,`id_pemeriksaan`),
  ADD KEY `id_pemeriksaan` (`id_pemeriksaan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `tbl_anamnesa_rm`
--
ALTER TABLE `tbl_anamnesa_rm`
  ADD PRIMARY KEY (`id_anamnesa`),
  ADD KEY `id_pemeriksaan` (`id_pemeriksaan`);

--
-- Indexes for table `tbl_antrian_poli`
--
ALTER TABLE `tbl_antrian_poli`
  ADD PRIMARY KEY (`id_antrian`),
  ADD KEY `no_antrian` (`no_antrian`);

--
-- Indexes for table `tbl_antrian_poli_umums`
--
ALTER TABLE `tbl_antrian_poli_umums`
  ADD PRIMARY KEY (`id_antrian`),
  ADD KEY `no_rm` (`no_rm`);

--
-- Indexes for table `tbl_antri_pendaftaran`
--
ALTER TABLE `tbl_antri_pendaftaran`
  ADD PRIMARY KEY (`id_antrian`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indexes for table `tbl_asuhan_keperawatan`
--
ALTER TABLE `tbl_asuhan_keperawatan`
  ADD PRIMARY KEY (`id_askep`),
  ADD KEY `id_pemeriksaan` (`id_pemeriksaan`);

--
-- Indexes for table `tbl_datapasiens`
--
ALTER TABLE `tbl_datapasiens`
  ADD PRIMARY KEY (`no_rm`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `no_index` (`no_index`);

--
-- Indexes for table `tbl_data_icdx`
--
ALTER TABLE `tbl_data_icdx`
  ADD PRIMARY KEY (`icd_x`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_data_laborat_dokter`
--
ALTER TABLE `tbl_data_laborat_dokter`
  ADD PRIMARY KEY (`id_data_laborat_dokter`);

--
-- Indexes for table `tbl_data_obat`
--
ALTER TABLE `tbl_data_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `tbl_data_stock_obat`
--
ALTER TABLE `tbl_data_stock_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `tbl_data_tindakan`
--
ALTER TABLE `tbl_data_tindakan`
  ADD PRIMARY KEY (`id_datatindakan`);

--
-- Indexes for table `tbl_diagnosa_rm`
--
ALTER TABLE `tbl_diagnosa_rm`
  ADD PRIMARY KEY (`id_diagnosa`),
  ADD KEY `id_pemeriksaan` (`id_pemeriksaan`);

--
-- Indexes for table `tbl_farmasi`
--
ALTER TABLE `tbl_farmasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_pemeriksaan` (`id_pemeriksaan`),
  ADD KEY `no_rm` (`no_rm`);

--
-- Indexes for table `tbl_ffs`
--
ALTER TABLE `tbl_ffs`
  ADD PRIMARY KEY (`no_index`);

--
-- Indexes for table `tbl_hasil_lab`
--
ALTER TABLE `tbl_hasil_lab`
  ADD PRIMARY KEY (`id_pemeriksaan_lab`),
  ADD KEY `id_pemeriksaan` (`id_pemeriksaan`),
  ADD KEY `id_nama_pemeriksaan` (`id_nama_pemeriksaan`),
  ADD KEY `id_jenis_pemeriksaan` (`id_jenis_pemeriksaan`);

--
-- Indexes for table `tbl_jamkes`
--
ALTER TABLE `tbl_jamkes`
  ADD PRIMARY KEY (`id_jamkes`);

--
-- Indexes for table `tbl_jenis_pemeriksaan`
--
ALTER TABLE `tbl_jenis_pemeriksaan`
  ADD PRIMARY KEY (`id_jenis_pemeriksaan`);

--
-- Indexes for table `tbl_nama_pemeriksaan`
--
ALTER TABLE `tbl_nama_pemeriksaan`
  ADD PRIMARY KEY (`id_nama_pemeriksaan`),
  ADD KEY `id_jenis_pemeriksaan` (`id_jenis_pemeriksaan`);

--
-- Indexes for table `tbl_pemeriksaan_rm`
--
ALTER TABLE `tbl_pemeriksaan_rm`
  ADD PRIMARY KEY (`id_pemeriksaan_objek`),
  ADD KEY `id_pemeriksaan` (`id_pemeriksaan`);

--
-- Indexes for table `tbl_pendaftarans`
--
ALTER TABLE `tbl_pendaftarans`
  ADD KEY `no_rm` (`no_rm`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `tbl_pengobatan_rm`
--
ALTER TABLE `tbl_pengobatan_rm`
  ADD PRIMARY KEY (`id_pengobatan`),
  ADD KEY `id_pemeriksaan` (`id_pemeriksaan`);

--
-- Indexes for table `tbl_permintaanlab`
--
ALTER TABLE `tbl_permintaanlab`
  ADD PRIMARY KEY (`id_permintaan`),
  ADD KEY `id_pemeriksaan` (`id_pemeriksaan`),
  ADD KEY `id_data_laborat_dokter` (`id_data_laborat_dokter`);

--
-- Indexes for table `tbl_poli`
--
ALTER TABLE `tbl_poli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rekam_medis`
--
ALTER TABLE `tbl_rekam_medis`
  ADD PRIMARY KEY (`id_pemeriksaan`),
  ADD KEY `no_rm` (`no_rm`);

--
-- Indexes for table `tbl_resep_obat`
--
ALTER TABLE `tbl_resep_obat`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `id_pemeriksaan` (`id_pemeriksaan`);

--
-- Indexes for table `tbl_telaah_obat`
--
ALTER TABLE `tbl_telaah_obat`
  ADD PRIMARY KEY (`id_telaah_obat`),
  ADD KEY `id_pemeriksaan` (`id_pemeriksaan`);

--
-- Indexes for table `tbl_telaah_resep`
--
ALTER TABLE `tbl_telaah_resep`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pemeriksaan` (`id_pemeriksaan`);

--
-- Indexes for table `tbl_tindakan_rm`
--
ALTER TABLE `tbl_tindakan_rm`
  ADD PRIMARY KEY (`id_tindakan`),
  ADD KEY `id_pemeriksaan` (`id_pemeriksaan`);

--
-- Indexes for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_anamnesa_rm`
--
ALTER TABLE `tbl_anamnesa_rm`
  MODIFY `id_anamnesa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_antrian_poli_umums`
--
ALTER TABLE `tbl_antrian_poli_umums`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_antri_pendaftaran`
--
ALTER TABLE `tbl_antri_pendaftaran`
  MODIFY `id_antrian` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `tbl_datapasiens`
--
ALTER TABLE `tbl_datapasiens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_data_icdx`
--
ALTER TABLE `tbl_data_icdx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_data_laborat_dokter`
--
ALTER TABLE `tbl_data_laborat_dokter`
  MODIFY `id_data_laborat_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_data_obat`
--
ALTER TABLE `tbl_data_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_data_stock_obat`
--
ALTER TABLE `tbl_data_stock_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_data_tindakan`
--
ALTER TABLE `tbl_data_tindakan`
  MODIFY `id_datatindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_diagnosa_rm`
--
ALTER TABLE `tbl_diagnosa_rm`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_farmasi`
--
ALTER TABLE `tbl_farmasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_hasil_lab`
--
ALTER TABLE `tbl_hasil_lab`
  MODIFY `id_pemeriksaan_lab` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jamkes`
--
ALTER TABLE `tbl_jamkes`
  MODIFY `id_jamkes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_jenis_pemeriksaan`
--
ALTER TABLE `tbl_jenis_pemeriksaan`
  MODIFY `id_jenis_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_nama_pemeriksaan`
--
ALTER TABLE `tbl_nama_pemeriksaan`
  MODIFY `id_nama_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_pemeriksaan_rm`
--
ALTER TABLE `tbl_pemeriksaan_rm`
  MODIFY `id_pemeriksaan_objek` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_pengobatan_rm`
--
ALTER TABLE `tbl_pengobatan_rm`
  MODIFY `id_pengobatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_permintaanlab`
--
ALTER TABLE `tbl_permintaanlab`
  MODIFY `id_permintaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_poli`
--
ALTER TABLE `tbl_poli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_rekam_medis`
--
ALTER TABLE `tbl_rekam_medis`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_resep_obat`
--
ALTER TABLE `tbl_resep_obat`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_telaah_obat`
--
ALTER TABLE `tbl_telaah_obat`
  MODIFY `id_telaah_obat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_telaah_resep`
--
ALTER TABLE `tbl_telaah_resep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tindakan_rm`
--
ALTER TABLE `tbl_tindakan_rm`
  MODIFY `id_tindakan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kasir`
--
ALTER TABLE `kasir`
  ADD CONSTRAINT `kasir_ibfk_1` FOREIGN KEY (`id_pemeriksaan`) REFERENCES `tbl_rekam_medis` (`id_pemeriksaan`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_anamnesa_rm`
--
ALTER TABLE `tbl_anamnesa_rm`
  ADD CONSTRAINT `tbl_anamnesa_rm_ibfk_1` FOREIGN KEY (`id_pemeriksaan`) REFERENCES `tbl_rekam_medis` (`id_pemeriksaan`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_asuhan_keperawatan`
--
ALTER TABLE `tbl_asuhan_keperawatan`
  ADD CONSTRAINT `tbl_asuhan_keperawatan_ibfk_1` FOREIGN KEY (`id_pemeriksaan`) REFERENCES `tbl_rekam_medis` (`id_pemeriksaan`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_datapasiens`
--
ALTER TABLE `tbl_datapasiens`
  ADD CONSTRAINT `tbl_datapasiens_ibfk_1` FOREIGN KEY (`no_index`) REFERENCES `tbl_ffs` (`no_index`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_data_stock_obat`
--
ALTER TABLE `tbl_data_stock_obat`
  ADD CONSTRAINT `tbl_data_stock_obat_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `tbl_data_obat` (`id_obat`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_diagnosa_rm`
--
ALTER TABLE `tbl_diagnosa_rm`
  ADD CONSTRAINT `tbl_diagnosa_rm_ibfk_1` FOREIGN KEY (`id_pemeriksaan`) REFERENCES `tbl_rekam_medis` (`id_pemeriksaan`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_farmasi`
--
ALTER TABLE `tbl_farmasi`
  ADD CONSTRAINT `tbl_farmasi_ibfk_1` FOREIGN KEY (`id_pemeriksaan`) REFERENCES `tbl_rekam_medis` (`id_pemeriksaan`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_hasil_lab`
--
ALTER TABLE `tbl_hasil_lab`
  ADD CONSTRAINT `tbl_hasil_lab_ibfk_1` FOREIGN KEY (`id_pemeriksaan`) REFERENCES `tbl_rekam_medis` (`id_pemeriksaan`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_hasil_lab_ibfk_2` FOREIGN KEY (`id_jenis_pemeriksaan`) REFERENCES `tbl_jenis_pemeriksaan` (`id_jenis_pemeriksaan`);

--
-- Constraints for table `tbl_nama_pemeriksaan`
--
ALTER TABLE `tbl_nama_pemeriksaan`
  ADD CONSTRAINT `tbl_nama_pemeriksaan_ibfk_1` FOREIGN KEY (`id_jenis_pemeriksaan`) REFERENCES `tbl_jenis_pemeriksaan` (`id_jenis_pemeriksaan`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_pemeriksaan_rm`
--
ALTER TABLE `tbl_pemeriksaan_rm`
  ADD CONSTRAINT `tbl_pemeriksaan_rm_ibfk_1` FOREIGN KEY (`id_pemeriksaan`) REFERENCES `tbl_rekam_medis` (`id_pemeriksaan`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD CONSTRAINT `tbl_pengguna_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tbl_user_role` (`role_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_pengobatan_rm`
--
ALTER TABLE `tbl_pengobatan_rm`
  ADD CONSTRAINT `tbl_pengobatan_rm_ibfk_1` FOREIGN KEY (`id_pemeriksaan`) REFERENCES `tbl_rekam_medis` (`id_pemeriksaan`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_permintaanlab`
--
ALTER TABLE `tbl_permintaanlab`
  ADD CONSTRAINT `tbl_permintaanlab_ibfk_1` FOREIGN KEY (`id_pemeriksaan`) REFERENCES `tbl_rekam_medis` (`id_pemeriksaan`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_permintaanlab_ibfk_2` FOREIGN KEY (`id_data_laborat_dokter`) REFERENCES `tbl_data_laborat_dokter` (`id_data_laborat_dokter`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_resep_obat`
--
ALTER TABLE `tbl_resep_obat`
  ADD CONSTRAINT `tbl_resep_obat_ibfk_1` FOREIGN KEY (`id_pemeriksaan`) REFERENCES `tbl_rekam_medis` (`id_pemeriksaan`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_telaah_obat`
--
ALTER TABLE `tbl_telaah_obat`
  ADD CONSTRAINT `tbl_telaah_obat_ibfk_1` FOREIGN KEY (`id_pemeriksaan`) REFERENCES `tbl_rekam_medis` (`id_pemeriksaan`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_telaah_resep`
--
ALTER TABLE `tbl_telaah_resep`
  ADD CONSTRAINT `tbl_telaah_resep_ibfk_1` FOREIGN KEY (`id_pemeriksaan`) REFERENCES `tbl_rekam_medis` (`id_pemeriksaan`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_tindakan_rm`
--
ALTER TABLE `tbl_tindakan_rm`
  ADD CONSTRAINT `tbl_tindakan_rm_ibfk_1` FOREIGN KEY (`id_pemeriksaan`) REFERENCES `tbl_rekam_medis` (`id_pemeriksaan`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
