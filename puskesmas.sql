-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 03:27 PM
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

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id`, `no_rm`, `id_pemeriksaan`, `total_pembayaran`, `status`) VALUES
(6, '10.S0001.2', 17, '50000', 'Pembayaran'),
(7, '10.G0001.4', 19, '175000', 'Pembayaran'),
(8, '10.S0001.2', 28, '250000', 'Pembayaran'),
(9, '10.S0001.2', 28, '250000', 'Pembayaran'),
(10, '10.S0001.2', 28, '250000', 'Pembayaran'),
(11, '10.K0001.1', 29, '0', 'Pembayaran');

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
  `rps` varchar(255) NOT NULL,
  `no_rm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_anamnesa_rm`
--

INSERT INTO `tbl_anamnesa_rm` (`id_anamnesa`, `id_pemeriksaan`, `rpd`, `rpk`, `rps`, `no_rm`) VALUES
(5, 4, 'asma', 'asma', 'asma', ''),
(6, 4, 'asma', 'asma', 'asma', ''),
(7, 9, 'kanker hati', 'nyeri pinggang', 'asma', '10.N0001.2'),
(10, 10, 'asma', 'nyeri pinggang', 'kanker hati', '10.L0001.5'),
(11, 9, 'asma', 'nyeri pinggang', 'kanker hati', '10.N0001.2'),
(12, 11, 'asma', 'batuk', 'batuk', '10.S0001.1'),
(13, 12, 'sakit kepala', 'sakit kepala', 'sakit kepala', '10.K0001.1'),
(14, 14, 'kanker hati', 'nyeri pinggang', 'asma', '10.G0001.1'),
(15, 17, 'mata merah', 'mata merah', 'mata merah', '10.S0001.2'),
(16, 18, 'mata merah', 'nyeri pinggang', 'sakit kepala', '10.U0001.1'),
(17, 19, 'kanker hati', 'nyeri pinggang', 'asma', '10.G0001.4'),
(18, 29, 'mata merah koko', 'nyeri pinggang koko', 'gegar otak koko', '10.K0001.1'),
(19, 28, 'covid boby', 'cidera acl boby', 'asma boby', '10.S0001.2'),
(20, 27, 'kanker hati hamid', 'batuk hamid', 'batuk hamid', '10.H0001.1'),
(21, 25, 'kanker hati jimin', 'nyeri pinggang jimin', 'asma jimin', '10.A0001.7'),
(22, 26, 'asma nurfarida', 'asma nurfarida', 'asma nurfarida', '10.N0001.2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_antrian_farmasi`
--

CREATE TABLE `tbl_antrian_farmasi` (
  `id_antrian` int(11) NOT NULL,
  `no_antrian` varchar(100) NOT NULL,
  `no_rm` varchar(25) NOT NULL,
  `waktu` varchar(25) NOT NULL,
  `status` varchar(255) NOT NULL,
  `poli_asal` varchar(255) NOT NULL,
  `urutan` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_antrian_farmasi`
--

INSERT INTO `tbl_antrian_farmasi` (`id_antrian`, `no_antrian`, `no_rm`, `waktu`, `status`, `poli_asal`, `urutan`, `created_at`, `updated_at`, `tanggal`) VALUES
(1, 'A 00 1', '10.S0001.2', '08:18:58', 'selesai', 'Poli Umum', 1, '2022-01-02', '', NULL),
(2, 'A 00 1', '10.G0001.4', '08:27:11', 'selesai', 'Poli Umum', 1, '2022-01-06', '', NULL),
(5, 'A 00 1', '10.S0001.2', '07:13:56', 'selesai', 'Poli Umum', 1, '0000-00-00', '', '2022-01-30'),
(6, 'A 00 2', '10.K0001.1', '07:16:44', 'selesai', 'Poli Umum', 2, '0000-00-00', '', '2022-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_antrian_kasir`
--

CREATE TABLE `tbl_antrian_kasir` (
  `id_antrian` int(11) NOT NULL,
  `no_antrian` varchar(100) NOT NULL,
  `no_rm` varchar(25) NOT NULL,
  `waktu` varchar(25) NOT NULL,
  `status` varchar(255) NOT NULL,
  `poli_asal` varchar(255) NOT NULL,
  `urutan` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `tanggal` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_antrian_kasir`
--

INSERT INTO `tbl_antrian_kasir` (`id_antrian`, `no_antrian`, `no_rm`, `waktu`, `status`, `poli_asal`, `urutan`, `created_at`, `updated_at`, `tanggal`) VALUES
(1, 'A 00 1', '10.S0001.2', '07:42:15', 'selesai', 'Poli Umum', 1, '2022-01-02', '', '2022-01-06'),
(2, 'A 00 1', '10.G0001.4', '08:22:40', 'selesai', 'Poli Umum', 1, '2022-01-06', '', '2022-01-06'),
(3, 'A 00 1', '10.S0001.2', '01:19:11', 'selesai', 'Poli Umum', 1, '0000-00-00', '', '2022-01-30'),
(4, 'A 00 2', '10.K0001.1', '12:56:23', 'selesai', 'Poli Umum', 2, '0000-00-00', '', '2022-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_antrian_laborat`
--

CREATE TABLE `tbl_antrian_laborat` (
  `id_antrian` int(11) NOT NULL,
  `no_antrian` varchar(100) NOT NULL,
  `no_rm` varchar(25) NOT NULL,
  `waktu` varchar(25) NOT NULL,
  `status` varchar(255) NOT NULL,
  `poli_asal` varchar(255) NOT NULL,
  `urutan` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_antrian_laboratorium`
--

CREATE TABLE `tbl_antrian_laboratorium` (
  `id_antrian` int(11) NOT NULL,
  `no_antrian` varchar(100) NOT NULL,
  `no_rm` varchar(25) NOT NULL,
  `waktu` varchar(25) NOT NULL,
  `status` varchar(255) NOT NULL,
  `poli_asal` varchar(255) NOT NULL,
  `urutan` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_antrian_laboratorium`
--

INSERT INTO `tbl_antrian_laboratorium` (`id_antrian`, `no_antrian`, `no_rm`, `waktu`, `status`, `poli_asal`, `urutan`, `created_at`, `updated_at`, `tanggal`) VALUES
(1, 'A 00 2', '10.U0001.1', '09:22:37', 'selesai', 'Poli Umum', 1, '2022-01-02', '', NULL),
(2, 'A 00 1', '10.G0001.4', '07:41:58', 'selesai', 'Poli Umum', 1, '0000-00-00', '', NULL),
(9, 'A 00 5', '10.N0001.2', '12:00:56', 'selesai', 'Poli Umum', 1, '0000-00-00', '', '2022-01-30'),
(10, 'A 00 4', '10.A0001.7', '12:00:36', 'selesai', 'Poli Umum', 2, '0000-00-00', '', '2022-01-30'),
(11, 'A 00 2', '10.K0001.1', '11:56:42', 'selesai', 'Poli Umum', 3, '0000-00-00', '', '2022-01-30'),
(12, 'A 00 1', '10.S0001.2', '11:58:57', 'hapus', 'Poli Umum', 4, '0000-00-00', '', '2022-01-30'),
(13, 'A 00 3', '10.H0001.1', '12:00:08', 'hapus', 'Poli Umum', 5, '0000-00-00', '', '2022-01-30');

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
  `urutan` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_antrian_poli_umums`
--

INSERT INTO `tbl_antrian_poli_umums` (`id_antrian`, `no_antrian`, `no_rm`, `waktu`, `status`, `poli_asal`, `urutan`, `created_at`, `updated_at`) VALUES
(1, '0', '10.T0001.1', '16:44:13', 'Masuk', 'Poli Umum', 0, '2021-11-07', '2021-11-07 16:44:14'),
(2, '0', '10.T0001.1', '16:45:00', 'Masuk', 'Poli Umum', 0, '2021-11-07', '2021-11-07 16:45:00'),
(3, '0', '10.T0001.1', '16:46:15', 'Masuk', 'Poli Umum', 0, '2021-11-07', '2021-11-07 16:46:15'),
(4, '0', '10.A0001.3', '16:50:32', 'Masuk', 'Poli Umum', 0, '2021-11-07', '2021-11-07 16:50:32'),
(5, '0', '10.T0001.1', '16:54:08', 'Masuk', 'Poli Umum', 0, '2021-11-07', '2021-11-07 16:54:08'),
(6, '0', '10.T0001.1', '16:55:49', 'Masuk', 'Poli Umum', 0, '2021-11-07', '2021-11-07 16:55:49'),
(7, 'A 00 8', '10.T0001.1', '16:56:56', 'Masuk', 'Poli Umum', 0, '2021-11-07', '2021-11-07 16:56:56'),
(8, 'A 00 1', '10.A0001.3', '15:13:03', 'Masuk', 'Poli Umum', 0, '2021-11-08', '2021-11-08 15:13:03'),
(9, 'A 00 2', '10.T0001.1', '15:13:15', 'Masuk', 'Poli Umum', 0, '2021-11-08', '2021-11-08 15:13:15'),
(10, 'A 00 3', '10.T0001.1', '15:13:50', 'Masuk', 'Poli Umum', 0, '2021-11-08', '2021-11-08 15:13:50'),
(11, 'A 00 1', '10.A0001.3', '14:55:56', 'Masuk', 'Poli Umum', 0, '2021-11-09', '2021-11-09 14:55:56'),
(12, 'A 00 2', '10.T0001.1', '14:56:15', 'Masuk', 'Poli Umum', 0, '2021-11-09', '2021-11-09 14:56:15'),
(13, 'A 00 1', '10.T0001.1', '12:31:55', 'Masuk', 'Poli Umum', 0, '2021-11-12', '2021-11-12 12:31:55'),
(14, 'A 00 2', '10.A0001.3', '12:32:07', 'Masuk', 'Poli Umum', 0, '2021-11-12', '2021-11-12 12:32:07'),
(15, 'A 00 1', '10.T0001.1', '14:32:08', 'Masuk', 'Poli Umum', 0, '2021-11-16', '2021-11-16 14:32:08'),
(16, 'A 00 2', '10.A0001.3', '14:32:22', 'Masuk', 'Poli Umum', 0, '2021-11-16', '2021-11-16 14:32:22'),
(17, 'A 00 1', '10.A0001.3', '01:09:35', 'Masuk', 'Poli Umum', 0, '2021-11-17', '2021-11-17 01:09:35'),
(18, 'A 00 3', '10.A0001.3', '09:12:03', 'Masuk', 'Poli Umum', 0, '2021-11-28', '2021-11-28 09:12:03'),
(19, 'A 00 1', '10.A0001.3', '21:21:14', 'Masuk', 'Poli Umum', 0, '2021-12-08', '2021-12-08 21:21:15'),
(20, 'A 00 2', '10.H0001.1', '21:47:01', 'Masuk', 'Poli Umum', 0, '2021-12-08', '2021-12-08 21:47:01'),
(21, 'A 00 1', '10.H0001.1', '08:01:25', 'Masuk', 'Poli Umum', 1, '2021-12-09', '2021-12-09 08:01:25'),
(22, 'A 00 2', '10.A0001.3', '08:03:14', 'Masuk', 'Poli Umum', 2, '2021-12-09', '2021-12-09 08:03:14'),
(23, 'A 00 1', '10.H0001.1', '09:10:05', 'Masuk', 'Poli Umum', 1, '2021-12-11', '2021-12-11 09:10:06'),
(24, 'A 00 1', '10.H0001.1', '10:23:05', 'Masuk', 'Poli Umum', 1, '2021-12-12', '2021-12-12 10:23:06'),
(25, 'A 00 3', '10.A0001.2', '21:17:26', 'selesai', 'Poli Umum', 2, '2021-12-12', '2021-12-12 21:17:26'),
(26, 'A 00 1', '10.S0001.1', '08:22:23', 'Masuk', 'Poli Umum', 1, '2021-12-13', '2021-12-13 08:22:23'),
(27, 'A 00 1', '10.L0001.1', '09:31:21', 'selesai', 'Poli Umum', 1, '2021-12-16', '2021-12-16 09:31:21'),
(28, 'A 00 2', '10.L0001.1', '20:05:29', 'hapus', 'Poli Umum', 2, '2021-12-16', '2021-12-16 20:05:30'),
(29, 'A 00 3', '10.N0001.2', '20:32:27', 'hapus', 'Poli Umum', 3, '2021-12-16', '2021-12-16 20:32:27'),
(30, 'A 00 1', '10.L0001.1', '06:16:14', 'hapus', 'Poli Umum', 1, '2021-12-19', '2021-12-19 06:16:14'),
(31, 'A 00 2', '10.L0001.5', '06:38:31', 'proses', 'Poli Umum', 2, '2021-12-19', '2021-12-19 06:38:31'),
(32, 'A 00 1', '10.N0001.2', '13:56:11', 'proses', 'Poli Umum', 1, '2021-12-21', '2021-12-21 13:56:12'),
(33, 'A 00 2', '10.N0001.2', '14:31:44', 'hapus', 'Poli Umum', 2, '2021-12-21', '2021-12-21 14:31:44'),
(34, 'A 00 3', '10.S0001.1', '14:45:25', 'proses', 'Poli Umum', 3, '2021-12-21', '2021-12-21 14:45:25'),
(35, 'A 00 1', '10.K0001.1', '07:52:36', 'hapus', 'Poli Umum', 1, '2021-12-22', '2021-12-22 07:52:36'),
(36, 'A 00 2', '10.G0001.1', '19:49:40', 'permintaanlab', 'Poli Umum', 2, '2021-12-22', '2021-12-22 19:49:40'),
(37, 'A 00 1', '10.K0001.1', '06:01:57', 'selesai', 'Poli Umum', 1, '2021-12-24', '2021-12-24 06:01:58'),
(38, 'A 00 1', '10.S0001.2', '06:54:06', 'selesai', 'Poli Umum', 1, '2022-01-02', '2022-01-02 06:54:06'),
(39, 'A 00 2', '10.U0001.1', '09:09:26', 'proses', 'Poli Umum', 2, '2022-01-02', '2022-01-02 09:09:26'),
(40, 'A 00 1', '10.G0001.4', '07:36:44', 'selesai', 'Poli Umum', 1, '2022-01-06', '2022-01-06 07:36:44'),
(41, 'A 00 1', '10.U0001.1', '12:11:52', 'Masuk', 'Poli Umum', 1, '2022-01-12', '2022-01-12 12:11:53'),
(42, 'A 00 2', '10.S0001.2', '12:30:49', 'Masuk', 'Poli Umum', 2, '2022-01-12', '2022-01-12 12:30:49'),
(43, 'A 00 3', '10.C0001.1', '12:34:51', 'selesai', 'Poli Umum', 3, '2022-01-12', '2022-01-12 12:34:51'),
(44, 'A 00 3', '10.U0001.1', '18:53:23', 'proses', 'Poli Umum', 1, '2022-01-29', '2022-01-29 18:53:24'),
(45, 'A 00 2', '10.L0001.5', '18:46:19', 'proses', 'Poli Umum', 2, '2022-01-29', '2022-01-29 18:46:19'),
(47, 'A 00 1', '10.C0001.1', '18:42:50', 'proses', 'Poli Umum', 3, '2022-01-29', '2022-01-29 18:42:51'),
(100000001, 'A 00 2', '10.K0001.1', '2022-01-30 11:23:52', 'selesai', 'Poli Umum', 1, '2022-01-30', '2022-01-30 11:23:52'),
(100000002, 'A 00 1', '10.S0001.2', '2022-01-30 11:23:34', 'selesai', 'Poli Umum', 2, '2022-01-30', '2022-01-30 11:23:34'),
(100000003, 'A 00 3', '10.H0001.1', '2022-01-30 11:23:14', 'proses', 'Poli Umum', 3, '2022-01-30', '2022-01-30 11:23:14'),
(100000004, 'A 00 4', '10.A0001.7', '2022-01-30 11:21:48', 'proses', 'Poli Umum', 4, '2022-01-30', '2022-01-30 11:21:49'),
(100000005, 'A 00 5', '10.N0001.2', '2022-01-30 11:22:28', 'proses', 'Poli Umum', 5, '2022-01-30', '2022-01-30 11:22:29'),
(100000009, 'A 00 1', '10.A0001.3', '2022-02-04 21:25:49', 'Masuk', 'Poli Umum', 1, '2022-02-04', '2022-02-04 21:25:49');

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
(100000003, '1', 1, '2021-11-30', 'masuk', 1),
(100000004, '1', 1, '2021-12-01', 'masuk', 1),
(100000005, '2', 1, '2021-12-01', 'masuk', 2),
(100000006, '3', 1, '2021-12-01', 'masuk', 3),
(100000007, '4', 1, '2021-12-01', 'masuk', 4),
(100000008, '5', 1, '2021-12-01', 'masuk', 5),
(100000009, '6', 1, '2021-12-01', 'masuk', 6),
(100000010, '7', 1, '2021-12-01', 'masuk', 7),
(100000011, '8', 1, '2021-12-01', 'masuk', 8),
(100000012, '9', 1, '2021-12-01', 'masuk', 9),
(100000013, '10', 1, '2021-12-01', 'masuk', 10),
(100000014, '11', 1, '2021-12-01', 'masuk', 11),
(100000015, '12', 1, '2021-12-01', 'masuk', 12),
(100000016, '13', 1, '2021-12-01', 'masuk', 13),
(100000017, '14', 1, '2021-12-01', 'masuk', 14),
(100000018, '15', 1, '2021-12-01', 'masuk', 15),
(100000019, '16', 1, '2021-12-01', 'masuk', 16),
(100000020, '1', 1, '2021-12-02', 'masuk', 1),
(100000021, '2', 1, '2021-12-02', 'masuk', 2),
(100000022, '3', 1, '2021-12-02', 'masuk', 3),
(100000023, '4', 1, '2021-12-02', 'masuk', 4),
(100000024, '5', 1, '2021-12-02', 'masuk', 5),
(100000025, '6', 1, '2021-12-02', 'masuk', 6),
(100000026, '7', 1, '2021-12-02', 'masuk', 7),
(100000027, '8', 1, '2021-12-02', 'masuk', 8),
(100000028, '9', 1, '2021-12-02', 'masuk', 9),
(100000029, '10', 1, '2021-12-02', 'masuk', 10),
(100000030, '11', 1, '2021-12-02', 'masuk', 11),
(100000031, '12', 1, '2021-12-02', 'masuk', 12),
(100000032, '13', 1, '2021-12-02', 'masuk', 13),
(100000033, '14', 1, '2021-12-02', 'masuk', 14),
(100000034, '1', 1, '2021-12-03', 'masuk', 1),
(100000035, '1', 1, '2021-12-04', 'masuk', 1),
(100000036, '1', 1, '2021-12-05', 'masuk', 1),
(100000037, '2', 1, '2021-12-05', 'masuk', 2),
(100000038, '1', 1, '2021-12-08', 'hapus', 1),
(100000039, '2', 1, '2021-12-08', 'hapus', 2),
(100000040, '1', 1, '2021-12-09', 'hapus', 1),
(100000041, '2', 1, '2021-12-09', 'hapus', 2),
(100000042, '1', 1, '2021-12-11', 'hapus', 1),
(100000043, '2', 1, '2021-12-11', 'masuk', 2),
(100000044, '3', 1, '2021-12-11', 'masuk', 3),
(100000045, '4', 1, '2021-12-11', 'masuk', 4),
(100000046, '1', 1, '2021-12-12', 'hapus', 1),
(100000047, '2', 1, '2021-12-12', 'masuk', 2),
(100000048, '3', 1, '2021-12-12', 'hapus', 3),
(100000049, '1', 1, '2021-12-13', 'hapus', 1),
(100000050, '1', 1, '2021-12-16', 'hapus', 1),
(100000051, '2', 1, '2021-12-16', 'hapus', 2),
(100000052, '3', 1, '2021-12-16', 'hapus', 3),
(100000053, '1', 1, '2021-12-19', 'hapus', 1),
(100000054, '2', 1, '2021-12-19', 'hapus', 2),
(100000055, '3', 1, '2021-12-19', 'masuk', 3),
(100000056, '1', 1, '2021-12-21', 'hapus', 1),
(100000057, '2', 1, '2021-12-21', 'hapus', 2),
(100000058, '3', 1, '2021-12-21', 'hapus', 3),
(100000059, '1', 1, '2021-12-22', 'hapus', 1),
(100000060, '2', 1, '2021-12-22', 'hapus', 2),
(100000061, '1', 1, '2021-12-24', 'hapus', 1),
(100000062, '1', 1, '2022-01-02', 'hapus', 1),
(100000063, '2', 1, '2022-01-02', 'hapus', 2),
(100000064, '1', 1, '2022-01-06', 'hapus', 1),
(100000065, '1', 1, '2022-01-12', 'hapus', 1),
(100000066, '2', 1, '2022-01-12', 'hapus', 2),
(100000067, '3', 1, '2022-01-12', 'hapus', 3),
(100000068, '1', 1, '2022-01-21', 'masuk', 1),
(100000069, '1', 1, '2022-01-29', 'hapus', 1),
(100000070, '2', 1, '2022-01-29', 'hapus', 2),
(100000071, '3', 1, '2022-01-29', 'hapus', 3),
(100000072, '5', 1, '2022-01-29', 'masuk', 4),
(100000075, '4', 1, '2022-01-29', 'lewati', 5),
(100000077, '4', 1, '2022-01-30', 'hapus', 1),
(100000078, '5', 1, '2022-01-30', 'hapus', 2),
(100000079, '3', 1, '2022-01-30', 'hapus', 3),
(100000080, '1', 1, '2022-01-30', 'hapus', 4),
(100000081, '2', 1, '2022-01-30', 'hapus', 5),
(100000085, '1', 1, '2022-02-04', 'hapus', 1);

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

--
-- Dumping data for table `tbl_asuhan_keperawatan`
--

INSERT INTO `tbl_asuhan_keperawatan` (`id_askep`, `id_pemeriksaan`, `no_rm`, `tanggal`, `jam_mulai`, `rpd`, `rpk`, `rps`, `nb_subjective`, `tb`, `bb`, `imt`, `suhu`, `rr`, `sistol`, `diastol`, `nb_object`, `nb_assessment`, `nb_plan`, `waktu_selesai`, `penanggungjawab`) VALUES
(1, 4, '10.A0001.2', '2021-12-12', '0000-00-00 00:00:00', 'asma', 'asma', 'asma', 'subjective', 150, 50, 22.2, 35, 60, 90, 120, 'objective', 'Analysis', 'Planning', '0000-00-00 00:00:00', 'hihi'),
(2, 7, '10.L0001.1', '2021-12-16', '0000-00-00 00:00:00', 'kanker hati', 'kanker hati', 'kanker hati', 'subjective lisa', 150, 50, 22.2, 35, 60, 90, 120, 'objective lisa', 'Analysis lisa', 'Planning lisa', '0000-00-00 00:00:00', 'Yulia Rahayu Putri'),
(3, 7, '10.L0001.1', '2021-12-16', '2020-10-11 00:00:00', 'nyeri pinggang', 'nyeri pinggang', 'nyeri pinggang', 'subjective', 150, 50, 22.2, 35, 60, 90, 120, 'objective', 'Analysis', 'Planning', '2020-12-17 00:00:00', 'hihi'),
(4, 9, '10.N0001.2', '2021-12-16', '0000-00-00 00:00:00', 'kanker hati', 'nyeri pinggang', 'asma', 'subjective nurfarida', 150, 50, 22.2, 35, 60, 90, 120, 'objective nurfarida', 'Analysis nurfarida', 'Planning nurfarida', '0000-00-00 00:00:00', 'hihi'),
(5, 10, '10.L0001.5', '2021-12-19', '0000-00-00 00:00:00', 'asma', 'nyeri pinggang', 'kanker hati', 'subjective bambang', 150, 50, 22.2, 35, 60, 90, 120, 'objective bambang', 'Analysis bambang', 'Planning bambang', '0000-00-00 00:00:00', 'Yulia Rahayu Putri'),
(8, 11, '10.S0001.1', '2021-12-21', '0000-00-00 00:00:00', 'asma', 'batuk', 'batuk', 'subjective sulaiman', 150, 50, 22.2, 35, 60, 90, 120, 'objective sulaiman', 'Analysis sulaiman', 'Planning sulaiman', '2015-06-01 00:00:00', 'hihi'),
(9, 12, '10.K0001.1', '2021-12-22', '0000-00-00 00:00:00', 'sakit kepala', 'sakit kepala', 'sakit kepala', 'subjective koko', 150, 50, 22.2, 35, 60, 90, 120, 'objective koko', 'Analysis koko', 'Planning koko', '0000-00-00 00:00:00', 'hihi'),
(10, 14, '10.G0001.1', '2021-12-22', '0000-00-00 00:00:00', 'kanker hati', 'nyeri pinggang', 'asma', 'subjective gilang', 150, 50, 22.2, 35, 60, 90, 120, 'objective gilang', 'Analysis gilang', 'Planning gilang', '0000-00-00 00:00:00', 'hihi'),
(11, 16, '10.K0001.1', '2021-12-24', '2006-02-20 00:00:00', 'sakit pinggang', 'sakit pinggang', 'sakit pinggang', 'subjective koko2', 150, 50, 22.2, 35, 60, 90, 120, 'objective koko2', 'Analysis koko2', 'Planning koko2', '2006-03-04 00:00:00', 'hihi'),
(12, 17, '10.S0001.2', '2022-01-02', '0000-00-00 00:00:00', 'mata merah', 'mata merah', 'mata merah', 'subjective boby', 150, 50, 22.2, 35, 60, 90, 120, 'objective boby', 'Analysis boby', 'Planning boby', '0000-00-00 00:00:00', 'hihi'),
(13, 18, '10.U0001.1', '2022-01-02', '0000-00-00 00:00:00', 'mata merah', 'nyeri pinggang', 'sakit kepala', 'subjective ucup', 150, 50, 22.2, 35, 60, 90, 120, 'objective ucup', 'Analysis ucup', 'Planning ucup', '2009-10-29 00:00:00', 'hihi'),
(14, 19, '10.G0001.4', '2022-01-06', '0000-00-00 00:00:00', 'kanker hati', 'nyeri pinggang', 'asma', 'subjective emerson', 150, 50, 22.2, 35, 60, 90, 120, 'objective emerson', 'Analysis emerson', 'Planning emerson', '0000-00-00 00:00:00', 'hihi'),
(15, 21, '10.C0001.1', '2022-01-12', '0000-00-00 00:00:00', 'covid', 'covid', 'covid', 'subjective cika', 175, 85, 27.8, 35, 60, 90, 120, 'objective cika', 'Analysis cika', 'Planning cika', '0000-00-00 00:00:00', 'hihi'),
(16, 24, '10.U0001.1', '2022-01-29', '0000-00-00 00:00:00', 'jantung', 'sipilis', 'batuk', 'subjective ucup3', 200, 95, 23.8, 35, 65, 98, 120, 'objective ucup3', 'Analysis ucup3', 'Planning ucup3', '0000-00-00 00:00:00', 'hihi'),
(17, 23, '10.L0001.5', '2022-01-29', '0000-00-00 00:00:00', 'paru paru basah', 'cidera acl', 'paru paru basah', 'subjective bambang2', 195, 90, 23.7, 35, 65, 95, 130, 'objective bambang2', 'Analysis bambang2', 'Planning bambang2', '0000-00-00 00:00:00', 'hihi'),
(18, 22, '10.C0001.1', '2022-01-29', '2022-01-29 19:35:10', 'gegar otak', 'gegar otak', 'gegar otak', 'subjective cika2', 198, 90, 23, 35, 60, 95, 120, 'objective cika2', 'Analysis cika2', 'Planning cika2', '2022-01-29 07:36:02', 'hihi'),
(19, 29, '10.K0001.1', '2022-01-30', '2022-01-30 11:27:56', 'mata merah koko', 'nyeri pinggang koko', 'gegar otak koko', 'subjective koko3', 155, 50, 20.8, 35, 60, 95, 120, 'objective koko3', 'Analysis koko3', 'Planning koko3', '2022-01-30 11:28:56', 'hihi'),
(20, 28, '10.S0001.2', '2022-01-30', '2022-01-30 11:29:33', 'covid boby', 'cidera acl boby', 'asma boby', 'subjective boby2', 175, 85, 27.8, 35, 65, 95, 130, 'objective boby2', 'Analysis boby2', 'Planning boby2', '2022-01-30 11:30:17', 'hihi'),
(21, 27, '10.H0001.1', '2022-01-30', '2022-01-30 11:30:42', 'kanker hati hamid', 'batuk hamid', 'batuk hamid', 'subjective hamid', 200, 85, 21.3, 35, 60, 95, 120, 'objective hamid', 'Analysis hamid', 'Planning hamid', '2022-01-30 11:31:24', 'hihi'),
(22, 25, '10.A0001.7', '2022-01-30', '2022-01-30 11:31:31', 'kanker hati jimin', 'nyeri pinggang jimin', 'asma jimin', 'subjective jimin', 175, 85, 27.8, 35, 60, 95, 130, 'objective jimin', 'Analysis jimin', 'Planning jimin', '2022-01-30 11:32:13', 'hihi'),
(23, 26, '10.N0001.2', '2022-01-30', '2022-01-30 11:32:17', 'asma nurfarida', 'asma nurfarida', 'asma nurfarida', 'subjective nurfarida3', 155, 85, 35.4, 35, 60, 95, 120, 'objective nurfarida3', 'Analysis nurfarida3', 'Planning nurfarida3', '2022-01-30 11:32:55', 'hihi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_asuransi`
--

CREATE TABLE `tbl_asuransi` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tipe_asuransi` varchar(250) NOT NULL,
  `nomor_asuransi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_asuransi`
--

INSERT INTO `tbl_asuransi` (`id`, `nama`, `tipe_asuransi`, `nomor_asuransi`) VALUES
(1, 'abdullah nama ayahnya', 'BPJS', 12345),
(2, 'gilang ramadan', 'BPJS', 12347),
(3, 'hamid rusdi', 'BPJS', 123457),
(4, 'koko ari', 'BPJS', 123458),
(5, 'Andre Stinky', 'SKTM', 99999);

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
(12, 'jihan', 'Perempuan', 'abdullah', '10.A0001', 'malang', 'guru', '1969-12-02', 52, 'Umum', '1111', 'islam', '081235444555', 'Ibu', '10.A0001.2', '2021-12-12 21:08:00', '2021-12-12 21:08:00'),
(4, 'abdullah nama ayahnya', 'Laki-laki', 'abdullah', '10.A0001', 'malang', 'pedagang', '2008-02-06', 13, 'BPJS', '12345', 'islam', '081235444555', 'Lainnya', '10.A0001.3', '2021-11-28 02:11:52', '2021-11-28 02:11:52'),
(6, 'siti aminah', 'Perempuan', 'abdullah', '10.A0001', 'malang', 'guru', '1999-10-22', 22, 'Umum', '1222', 'islam', '081235444566', 'Lainnya', '10.A0001.4', '2021-12-12 13:49:57', '2021-12-12 13:49:57'),
(7, 'susan', 'Perempuan', 'abdullah', '10.A0001', 'malang', 'pedagang', '2020-01-30', 1, 'Umum', '111', 'islam', '081235444555', 'Lainnya', '10.A0001.5', '2021-12-12 20:59:27', '2021-12-12 20:59:27'),
(8, 'susan', 'Perempuan', 'abdullah', '10.A0001', 'malang', 'pedagang', '2020-01-30', 1, 'Umum', '111', 'islam', '081235444555', 'Lainnya', '10.A0001.6', '2021-12-12 20:59:39', '2021-12-12 20:59:39'),
(9, 'jimin', 'Laki-laki', 'abdullah', '10.A0001', 'malang', 'guru', '2005-06-15', 16, 'Umum', '12346', 'islam', '081235444566', 'Lainnya', '10.A0001.7', '2021-12-12 21:01:40', '2021-12-12 21:01:40'),
(10, 'jimin', 'Laki-laki', 'abdullah', '10.A0001', 'malang', 'guru', '2005-06-15', 16, 'Umum', '12345', 'islam', '081235444566', 'Lainnya', '10.A0001.8', '2021-12-12 21:01:58', '2021-12-12 21:01:58'),
(11, 'jeje', 'Perempuan', 'abdullah', '10.A0001', 'malang', 'pedagang', '1998-12-12', 23, 'Umum', '1111', 'islam', '081235444555', 'Lainnya', '10.A0001.9', '2021-12-12 21:04:48', '2021-12-12 21:04:48'),
(24, 'cika', 'Perempuan', 'cika', '10.C0001', 'mojolangu, lowokwaru, malang', 'guru', '1998-12-12', 23, 'Umum', NULL, 'islam', '081235444566', 'Kepala Keluarga', '10.C0001.1', '2022-01-12 12:34:32', '2022-01-12 12:34:32'),
(19, 'gilang ramadan', 'Laki-laki', 'gilang', '10.G0001', 'klojen, malang', 'pedagang', '1998-02-05', 23, 'BPJS', '12347', 'islam', '081235444555', 'Kepala Keluarga', '10.G0001.1', '2021-12-22 19:49:33', '2021-12-22 19:49:33'),
(23, 'emerson', 'Laki-laki', 'gilang', '10.G0001', 'klojen, malang', 'mahasiswa', '1997-02-22', 24, 'Umum', NULL, 'islam', '081235444566', 'Lainnya', '10.G0001.4', '2022-01-06 07:27:51', '2022-01-06 07:27:51'),
(5, 'hamid rusdi', 'Laki-laki', 'hamid', '10.H0001', 'samaan', 'guru', '1996-02-08', 25, 'BPJS', '123457', 'islam', '081235444', 'Kepala Keluarga', '10.H0001.1', '2021-12-08 14:31:41', '2021-12-08 14:31:41'),
(18, 'koko ari', 'Laki-laki', 'koko', '10.K0001', 'klojen, malang', 'guru', '1985-01-02', 36, 'BPJS', '123458', 'islam', '081235444555', 'Kepala Keluarga', '10.K0001.1', '2021-12-22 07:36:29', '2021-12-22 07:36:29'),
(14, 'lisa yulianti', 'Perempuan', 'lisa yulianti', '10.L0001', 'klojen, malang', 'marketing', '1989-08-18', 32, 'Umum', '0000', 'islam', '081235444555', 'Kepala Keluarga', '10.L0001.1', '2021-12-16 09:30:58', '2021-12-16 09:30:58'),
(15, 'alisa', 'Perempuan', 'lisa yulianti', '10.L0001', 'klojen, malang', 'guru', '1998-02-01', 23, 'Umum', '111222', 'islam', '081235444566', 'Lainnya', '10.L0001.4', '2021-12-16 20:03:15', '2021-12-16 20:03:15'),
(17, 'bambang', 'Perempuan', 'lisa yulianti', '10.L0001', 'klojen, malang', 'pedagang', '1990-12-01', 31, 'Umum', '00000', 'islam', '081235444566', 'Lainnya', '10.L0001.5', '2021-12-19 06:12:46', '2021-12-19 06:12:46'),
(16, 'nurfarida', 'Perempuan', 'nandar', '10.N0001', 'mojolangu, lowokwaru, malang', 'pedagang', '1997-02-04', 24, 'Umum', '1111', 'islam', '081235444555', 'Ibu', '10.N0001.2', '2021-12-16 20:20:51', '2021-12-16 20:20:51'),
(13, 'sulaiman', 'Laki-laki', 'sulaiman', '10.S0001', 'klojen, malang', 'pedagang', '1969-12-23', 51, 'Umum', '12345', 'islam', '081222333444', 'Kepala Keluarga', '10.S0001.1', '2021-12-13 08:21:37', '2021-12-13 08:21:37'),
(21, 'boby', 'Laki-laki', 'sulaiman', '10.S0001', 'klojen, malang', 'pedagang', '1998-10-12', 23, 'Umum', NULL, 'islam', '081235444555', 'Ibu', '10.S0001.2', '2022-01-02 06:47:41', '2022-01-02 06:47:41'),
(22, 'ucup', 'Laki-laki', 'ucup', '10.U0001', 'klojen, malang', 'pedagang', '1987-12-12', 34, 'Umum', NULL, 'islam', '081235444555', 'Kepala Keluarga', '10.U0001.1', '2022-01-02 09:09:12', '2022-01-02 09:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_icdx`
--

CREATE TABLE `tbl_data_icdx` (
  `id` int(11) NOT NULL,
  `icd_x` varchar(50) NOT NULL,
  `nama_diagnosa` varchar(255) NOT NULL,
  `status` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_data_icdx`
--

INSERT INTO `tbl_data_icdx` (`id`, `icd_x`, `nama_diagnosa`, `status`) VALUES
(1, '1-00', 'paru-paru basah', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_laborat_dokter`
--

CREATE TABLE `tbl_data_laborat_dokter` (
  `id_data_laborat_dokter` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tarif` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data_laborat_dokter`
--

INSERT INTO `tbl_data_laborat_dokter` (`id_data_laborat_dokter`, `nama`, `tarif`, `id_jenis`) VALUES
(12, 'tes darah lengkap', 50000, 1),
(13, 'HB', 25000, 1),
(14, '3 Parameter', 125000, 2),
(15, '10 Parameter', 250000, 2),
(16, 'Sedimen', 125000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_obat`
--

CREATE TABLE `tbl_data_obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `jenis_obat` varchar(250) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_data_obat`
--

INSERT INTO `tbl_data_obat` (`id_obat`, `nama_obat`, `satuan`, `jenis_obat`, `harga`) VALUES
(1, 'paracetamol', 'biji', 'pil', 7500),
(2, 'obh herbal', 'ml', 'sirup', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_stock_obat`
--

CREATE TABLE `tbl_data_stock_obat` (
  `id` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jumlah_penerimaan` int(11) NOT NULL,
  `tanggal_kadaluarsa` date NOT NULL,
  `pemakaian` int(11) NOT NULL,
  `sisa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_data_stock_obat`
--

INSERT INTO `tbl_data_stock_obat` (`id`, `id_obat`, `tanggal_masuk`, `jumlah_penerimaan`, `tanggal_kadaluarsa`, `pemakaian`, `sisa`) VALUES
(1, 2, '2021-12-14', 12, '2021-12-30', 162, -152),
(2, 1, '2021-12-14', 100, '2022-01-07', 20, 80);

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
  `kasus` varchar(255) NOT NULL,
  `no_rm` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_diagnosa_rm`
--

INSERT INTO `tbl_diagnosa_rm` (`id_diagnosa`, `id_pemeriksaan`, `icd_x`, `nama_diagnosa`, `jenis`, `kasus`, `no_rm`, `status`) VALUES
(1, 4, '1-01', 'bronkitis', 'Primer', 'Baru', '10.A0001.2', 'hapus'),
(2, 4, '1-02', 'bronkitis2', 'Primer', 'Baru', '10.A0001.2', 'tersedia'),
(3, 10, '1-03', 'liver', 'Primer', 'Baru', '10.L0001.5', 'tersedia'),
(4, 11, '1-00', 'bronkitis3', 'Primer', 'Baru', '10.S0001.1', 'hapus'),
(5, 11, '1-02', 'bronkitis3', 'Komplikasi', 'Baru', '10.S0001.1', 'hapus'),
(6, 12, '1-03', 'bronkitis2', 'Primer', 'Baru', '10.K0001.1', 'tersedia'),
(7, 16, '1-02', 'bronkitis2', 'Primer', 'Baru', '10.K0001.1', 'tersedia'),
(8, 17, '1-00', 'paru-paru basah', 'Primer', 'Baru', '10.S0001.2', 'tersedia'),
(9, 18, '1-00', 'paru-paru basah', 'Primer', 'Baru', '10.U0001.1', 'tersedia'),
(10, 19, '1-00', 'paru-paru basah', 'Primer', 'Baru', '10.G0001.4', 'tersedia'),
(11, 29, '1-00', 'paru-paru basah', 'Primer', 'Baru', '10.K0001.1', 'tersedia'),
(12, 28, '1-00', 'paru-paru basah', 'Primer', 'Lama', '10.S0001.2', 'tersedia');

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
('abdullah', 'malang', 'smaan', 'klojen', 'malang', '084555555555', NULL, '10.A0001', '2021-11-28 02:09:07', '2021-11-28 02:09:07'),
('cika', 'mojolangu, lowokwaru, malang', 'mojolangu', 'klojen', 'malang', '084555555555', NULL, '10.C0001', '2022-01-12 05:32:13', '2022-01-12 05:32:13'),
('gilang', 'klojen, malang', 'samaan', 'klojen', 'malang', '08122333444', NULL, '10.G0001', '2021-12-22 12:43:01', '2021-12-22 12:43:01'),
('hamid', 'samaan', 'samaan', 'klojen', 'malang', '08122333444', NULL, '10.H0001', '2021-12-08 14:29:11', '2021-12-08 14:29:11'),
('koko', 'klojen, malang', 'samaan', 'klojen', 'malang', '085744455566', NULL, '10.K0001', '2021-12-22 00:35:42', '2021-12-22 00:35:42'),
('lisa yulianti', 'klojen, malang', 'samaan', 'klojen', 'malang', '08122333444', NULL, '10.L0001', '2021-12-16 02:29:57', '2021-12-16 02:29:57'),
('nandar', 'mojolangu, lowokwaru, malang', 'mojolangu', 'lowokwaru', 'malang', '085744455566', NULL, '10.N0001', '2021-12-16 13:19:23', '2021-12-16 13:19:23'),
('sulaiman', 'klojen, malang', 'samaan', 'klojen', 'malang', '081222999111', NULL, '10.S0001', '2021-12-13 01:20:43', '2021-12-13 01:20:43'),
('ucup', 'klojen, malang', 'mojolangu', 'lowokwaru', 'malang', '084555555555', NULL, '10.U0001', '2022-01-02 02:08:21', '2022-01-02 02:08:21');

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

--
-- Dumping data for table `tbl_hasil_lab`
--

INSERT INTO `tbl_hasil_lab` (`id_pemeriksaan_lab`, `id_pemeriksaan`, `id_nama_pemeriksaan`, `id_jenis_pemeriksaan`, `hasil_pemeriksaan_lab`, `penanggung_jawab`) VALUES
(13, 16, 3, 1, 22000, 'hahaha'),
(14, 16, 4, 1, 5000, 'hahaha'),
(15, 16, 5, 1, 4, 'hahaha'),
(16, 16, 6, 1, 150, 'hahaha'),
(17, 16, 7, 1, 50, 'hahaha'),
(18, 16, 8, 2, 255, 'hahaha'),
(19, 16, 9, 2, 100, 'hahaha'),
(20, 16, 13, 2, 7, 'hahaha'),
(21, 18, 8, 2, 22000, 'hahaha'),
(22, 18, 9, 2, 22000, 'hahaha'),
(23, 18, 13, 2, 22000, 'hahaha'),
(24, 19, 8, 2, 22000, 'hahaha'),
(25, 19, 9, 2, 22000, 'hahaha'),
(26, 19, 13, 2, 6, 'hahaha'),
(27, 26, 8, 2, 22000, 'hahaha'),
(28, 26, 9, 2, 22000, 'hahaha'),
(29, 26, 13, 2, 22000, 'hahaha'),
(30, 26, 5, 2, 3, 'hahaha'),
(31, 26, 25, 2, 0, 'hahaha'),
(32, 26, 26, 2, 0, 'hahaha'),
(33, 26, 27, 2, 22000, 'hahaha'),
(34, 26, 28, 2, 22000, 'hahaha'),
(35, 25, 3, 1, 22000, 'hahaha'),
(36, 25, 8, 2, 22000, 'hahaha'),
(37, 25, 9, 2, 22000, 'hahaha'),
(38, 25, 10, 2, 22000, 'hahaha'),
(39, 25, 11, 2, 22000, 'hahaha'),
(40, 25, 12, 2, 22000, 'hahaha'),
(41, 25, 13, 2, 22000, 'hahaha'),
(42, 25, 14, 2, 22000, 'hahaha'),
(43, 25, 15, 2, 22000, 'hahaha'),
(44, 25, 16, 2, 22000, 'hahaha'),
(45, 25, 17, 2, 22000, 'hahaha'),
(46, 29, 3, 1, 22000, 'hahaha'),
(47, 29, 4, 1, 5000, 'hahaha'),
(48, 29, 5, 1, 3, 'hahaha'),
(49, 29, 6, 1, 200, 'hahaha'),
(50, 29, 7, 1, 40, 'hahaha'),
(51, 29, 3, 1, 22000, 'hahaha'),
(52, 29, 4, 1, 2200, 'hahaha'),
(53, 29, 5, 1, 3, 'hahaha'),
(54, 29, 6, 1, 300, 'hahaha'),
(55, 29, 7, 1, 45, 'hahaha'),
(56, 29, 3, 1, 22000, 'hahaha');

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
-- Table structure for table `tbl_jenis_dokter`
--

CREATE TABLE `tbl_jenis_dokter` (
  `id_jenis_dokter` int(11) NOT NULL,
  `jenis_dokter` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jenis_dokter`
--

INSERT INTO `tbl_jenis_dokter` (`id_jenis_dokter`, `jenis_dokter`, `status`) VALUES
(1, 'Hematologi', 'tersedia'),
(2, 'Urin', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_pemeriksaan`
--

CREATE TABLE `tbl_jenis_pemeriksaan` (
  `id_jenis_pemeriksaan` int(11) NOT NULL,
  `jenis_pemeriksaan` varchar(225) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenis_pemeriksaan`
--

INSERT INTO `tbl_jenis_pemeriksaan` (`id_jenis_pemeriksaan`, `jenis_pemeriksaan`, `status`) VALUES
(1, 'fsfsfs', 'tersedia'),
(2, 'Hematologi', 'tersedia'),
(3, 'urin', 'tersedia'),
(4, 'Hitung Jenis', 'tersedia'),
(5, 'Sedimen', 'tersedia'),
(6, 'Golongan Darah Widal', 'tersedia'),
(7, 'Tes Kehamilan', 'tersedia'),
(8, 'Kimia Darah', 'hapus'),
(9, 'Feses', 'tersedia');

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
-- Table structure for table `tbl_pemeriksaan_dokter`
--

CREATE TABLE `tbl_pemeriksaan_dokter` (
  `id` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_nama` int(250) NOT NULL,
  `id_data_laborat_dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pemeriksaan_dokter`
--

INSERT INTO `tbl_pemeriksaan_dokter` (`id`, `id_jenis`, `id_nama`, `id_data_laborat_dokter`) VALUES
(6, 1, 3, 12),
(7, 1, 4, 12),
(8, 1, 5, 12),
(9, 1, 6, 12),
(10, 1, 7, 12),
(11, 1, 3, 13),
(12, 2, 8, 14),
(13, 2, 9, 14),
(14, 2, 13, 14),
(15, 2, 8, 15),
(16, 2, 9, 15),
(17, 2, 10, 15),
(18, 2, 11, 15),
(19, 2, 12, 15),
(20, 2, 13, 15),
(21, 2, 14, 15),
(22, 2, 15, 15),
(23, 2, 16, 15),
(24, 2, 17, 15),
(25, 2, 5, 16),
(26, 2, 25, 16),
(27, 2, 26, 16),
(28, 2, 27, 16),
(29, 2, 28, 16);

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
  `diastol` int(11) NOT NULL,
  `no_rm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pemeriksaan_rm`
--

INSERT INTO `tbl_pemeriksaan_rm` (`id_pemeriksaan_objek`, `id_pemeriksaan`, `tinggi_badan`, `berat_badan`, `imt`, `suhu`, `rr`, `sistol`, `diastol`, `no_rm`) VALUES
(1, 4, 150, 50, 22.2, 35, 60, 90, 120, ''),
(3, 4, 150, 50, 22.2, 35, 60, 90, 120, ''),
(6, 10, 150, 50, 22.2, 35, 60, 90, 120, '10.L0001.5'),
(7, 9, 150, 50, 22.2, 35, 60, 90, 120, '10.N0001.2'),
(8, 11, 150, 50, 22.2, 35, 60, 90, 120, '10.S0001.1'),
(9, 12, 150, 50, 22.2, 35, 60, 90, 120, '10.K0001.1'),
(10, 14, 150, 50, 22.2, 35, 60, 90, 120, '10.G0001.1'),
(11, 17, 150, 50, 22.2, 35, 60, 90, 120, '10.S0001.2'),
(12, 18, 150, 50, 22.2, 35, 60, 90, 120, '10.U0001.1'),
(13, 19, 150, 50, 22.2, 35, 60, 90, 120, '10.G0001.4'),
(14, 29, 155, 50, 20.8, 35, 60, 95, 120, '10.K0001.1'),
(15, 28, 175, 85, 27.8, 35, 65, 95, 130, '10.S0001.2'),
(16, 27, 200, 85, 21.3, 35, 60, 95, 120, '10.H0001.1'),
(17, 25, 175, 85, 27.8, 35, 60, 95, 130, '10.A0001.7'),
(18, 26, 155, 85, 35.4, 35, 60, 95, 120, '10.N0001.2');

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
('A 00 3', 'abdullah nama ayahnya', '10.A0001.3', '2021-11-28', 'Baru', 'Poli Umum', '09:12:03', '2021-11-28 09:12:03', '2021-11-28 09:12:03'),
('A 00 1', 'abdullah nama ayahnya', '10.A0001.3', '2021-12-08', 'Baru', 'Poli Umum', '21:21:14', '2021-12-08 21:21:15', '2021-12-08 21:21:15'),
('A 00 2', 'hamid rusdi', '10.H0001.1', '2021-12-08', 'Baru', 'Poli Umum', '21:47:01', '2021-12-08 21:47:01', '2021-12-08 21:47:01'),
('A 00 1', 'hamid rusdi', '10.H0001.1', '2021-12-09', 'Baru', 'Poli Umum', '08:01:25', '2021-12-09 08:01:25', '2021-12-09 08:01:25'),
('A 00 2', 'abdullah nama ayahnya', '10.A0001.3', '2021-12-09', 'Baru', 'Poli Umum', '08:03:14', '2021-12-09 08:03:14', '2021-12-09 08:03:14'),
('A 00 1', 'hamid rusdi', '10.H0001.1', '2021-12-11', 'Baru', 'Poli Umum', '09:10:05', '2021-12-11 09:10:06', '2021-12-11 09:10:06'),
('A 00 1', 'hamid rusdi', '10.H0001.1', '2021-12-12', 'Baru', 'Poli Umum', '10:23:05', '2021-12-12 10:23:06', '2021-12-12 10:23:06'),
('A 00 3', 'jihan', '10.A0001.2', '2021-12-12', 'Baru', 'Poli Umum', '21:17:26', '2021-12-12 21:17:26', '2021-12-12 21:17:26'),
('A 00 1', 'sulaiman', '10.S0001.1', '2021-12-13', 'Baru', 'Poli Umum', '08:22:23', '2021-12-13 08:22:23', '2021-12-13 08:22:23'),
('A 00 1', 'lisa yulianti', '10.L0001.1', '2021-12-16', 'Baru', 'Poli Umum', '09:31:21', '2021-12-16 09:31:21', '2021-12-16 09:31:21'),
('A 00 2', 'lisa yulianti', '10.L0001.1', '2021-12-16', 'Baru', 'Poli Umum', '20:05:29', '2021-12-16 20:05:30', '2021-12-16 20:05:30'),
('A 00 3', 'nurfarida', '10.N0001.2', '2021-12-16', 'Baru', 'Poli Umum', '20:32:27', '2021-12-16 20:32:27', '2021-12-16 20:32:27'),
('A 00 1', 'lisa yulianti', '10.L0001.1', '2021-12-19', 'Baru', 'Poli Umum', '06:16:14', '2021-12-19 06:16:14', '2021-12-19 06:16:14'),
('A 00 2', 'bambang', '10.L0001.5', '2021-12-19', 'Baru', 'Poli Umum', '06:38:31', '2021-12-19 06:38:31', '2021-12-19 06:38:31'),
('A 00 1', 'nurfarida', '10.N0001.2', '2021-12-21', 'Lama', 'Poli Umum', '13:56:11', '2021-12-21 13:56:12', '2021-12-21 13:56:12'),
('A 00 2', 'nurfarida', '10.N0001.2', '2021-12-21', 'Lama', 'Poli Umum', '14:31:44', '2021-12-21 14:31:44', '2021-12-21 14:31:44'),
('A 00 3', 'sulaiman', '10.S0001.1', '2021-12-21', 'Baru', 'Poli Umum', '14:45:25', '2021-12-21 14:45:25', '2021-12-21 14:45:25'),
('A 00 1', 'koko ari', '10.K0001.1', '2021-12-22', 'Baru', 'Poli Umum', '07:52:36', '2021-12-22 07:52:36', '2021-12-22 07:52:36'),
('A 00 2', 'gilang ramadan', '10.G0001.1', '2021-12-22', 'Baru', 'Poli Umum', '19:49:40', '2021-12-22 19:49:40', '2021-12-22 19:49:40'),
('A 00 1', 'koko ari', '10.K0001.1', '2021-12-24', 'Lama', 'Poli Umum', '06:01:57', '2021-12-24 06:01:58', '2021-12-24 06:01:58'),
('A 00 1', 'boby', '10.S0001.2', '2022-01-02', 'Baru', 'Poli Umum', '06:54:06', '2022-01-02 06:54:06', '2022-01-02 06:54:06'),
('A 00 2', 'ucup', '10.U0001.1', '2022-01-02', 'Baru', 'Poli Umum', '09:09:26', '2022-01-02 09:09:26', '2022-01-02 09:09:26'),
('A 00 1', 'emerson', '10.G0001.4', '2022-01-06', 'Baru', 'Poli Umum', '07:36:44', '2022-01-06 07:36:44', '2022-01-06 07:36:44'),
('A 00 1', 'ucup', '10.U0001.1', '2022-01-12', 'Lama', 'Poli Umum', '12:11:52', '2022-01-12 12:11:53', '2022-01-12 12:11:53'),
('A 00 2', 'boby', '10.S0001.2', '2022-01-12', 'Lama', 'Poli Umum', '12:30:49', '2022-01-12 12:30:49', '2022-01-12 12:30:49'),
('A 00 3', 'cika', '10.C0001.1', '2022-01-12', 'Baru', 'Poli Umum', '12:34:51', '2022-01-12 12:34:51', '2022-01-12 12:34:51'),
('A 00 1', 'cika', '10.C0001.1', '2022-01-29', 'Lama', 'Poli Umum', '18:42:50', '2022-01-29 18:42:51', '2022-01-29 18:42:51'),
('A 00 2', 'bambang', '10.L0001.5', '2022-01-29', 'Lama', 'Poli Umum', '18:46:19', '2022-01-29 18:46:19', '2022-01-29 18:46:19'),
('A 00 3', 'ucup', '10.U0001.1', '2022-01-29', 'Lama', 'Poli Umum', '18:53:23', '2022-01-29 18:53:24', '2022-01-29 18:53:24'),
('A 00 4', 'jimin', '10.A0001.7', '2022-01-30', 'Baru', 'Poli Umum', '11:21:48', '2022-01-30 11:21:49', '2022-01-30 11:21:49'),
('A 00 5', 'nurfarida', '10.N0001.2', '2022-01-30', 'Lama', 'Poli Umum', '11:22:28', '2022-01-30 11:22:29', '2022-01-30 11:22:29'),
('A 00 3', 'hamid rusdi', '10.H0001.1', '2022-01-30', 'Baru', 'Poli Umum', '11:23:14', '2022-01-30 11:23:14', '2022-01-30 11:23:14'),
('A 00 1', 'boby', '10.S0001.2', '2022-01-30', 'Lama', 'Poli Umum', '11:23:34', '2022-01-30 11:23:34', '2022-01-30 11:23:34'),
('A 00 2', 'koko ari', '10.K0001.1', '2022-01-30', 'Lama', 'Poli Umum', '11:23:52', '2022-01-30 11:23:52', '2022-01-30 11:23:52'),
('A 00 1', 'abdullah nama ayahnya', '10.A0001.3', '2022-02-04', 'Baru', 'Poli Umum', '21:25:49', '2022-02-04 21:25:49', '2022-02-04 21:25:49');

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
  `no_hp` varchar(12) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id`, `full_name`, `username`, `password`, `email`, `role_id`, `no_hp`, `is_active`) VALUES
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
  `keterangan` varchar(255) NOT NULL,
  `no_rm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyuluhan`
--

CREATE TABLE `tbl_penyuluhan` (
  `id_penyuluhan` int(11) NOT NULL,
  `isi_penyuluhan` varchar(250) NOT NULL,
  `no_rm` varchar(250) NOT NULL,
  `id_pemeriksaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penyuluhan`
--

INSERT INTO `tbl_penyuluhan` (`id_penyuluhan`, `isi_penyuluhan`, `no_rm`, `id_pemeriksaan`) VALUES
(2, 'adaasdad', '10.A0001.2', 4),
(3, 'adaasdad', '10.A0001.2', 4),
(4, 'adaasdad', '10.A0001.2', 4),
(5, 'asdada', '10.L0001.1', 7),
(6, 'asdada', '10.L0001.1', 7),
(7, 'istirahat yang cukup', '10.K0001.1', 12),
(8, 'Banyak Istirahat', '10.K0001.1', 16),
(16, 'penyuluhan boby', '10.S0001.2', 17),
(17, 'edukasi emerson', '10.G0001.4', 19),
(18, 'edukasi koko 2022', '10.K0001.1', 29),
(19, 'edukasi boby 1234', '10.S0001.2', 28);

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
  `tanggal` varchar(25) NOT NULL,
  `dokter_penanggungjawab` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permintaanlab`
--

INSERT INTO `tbl_permintaanlab` (`id_permintaan`, `id_pemeriksaan`, `id_data_laborat_dokter`, `status_permintaan`, `waktu`, `tanggal`, `dokter_penanggungjawab`) VALUES
(22, 16, 12, 'Baru', '11:03:45', '2021-12-24', 'ciiiia'),
(23, 16, 14, 'Baru', '11:03:45', '2021-12-24', 'ciiiia'),
(25, 18, 14, 'Baru', '09:22:37', '2022-01-02', 'ciiiia'),
(26, 19, 14, 'Baru', '07:41:58', '2022-01-06', 'ciiiia'),
(27, 29, 13, 'Baru', '11:37:00', '2022-01-30', 'ciiiia'),
(28, 28, 14, 'Baru', '11:37:56', '2022-01-30', 'ciiiia'),
(29, 27, 12, 'Baru', '11:40:35', '2022-01-30', 'ciiiia'),
(30, 25, 13, 'Baru', '11:46:03', '2022-01-30', 'ciiiia'),
(31, 26, 14, 'Baru', '11:46:49', '2022-01-30', 'ciiiia'),
(32, 29, 12, 'Baru', '11:54:26', '2022-01-30', 'ciiiia'),
(33, 29, 12, 'Baru', '11:56:42', '2022-01-30', 'ciiiia'),
(34, 28, 13, 'Baru', '11:58:57', '2022-01-30', 'ciiiia'),
(35, 27, 14, 'Baru', '12:00:08', '2022-01-30', 'ciiiia'),
(36, 25, 15, 'Baru', '12:00:36', '2022-01-30', 'ciiiia'),
(37, 26, 16, 'Baru', '12:00:56', '2022-01-30', 'ciiiia');

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
  `dokter_penanggung_jawab` varchar(255) DEFAULT NULL,
  `perawat_penanggung_jawab` varchar(255) DEFAULT NULL,
  `no_rm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rekam_medis`
--

INSERT INTO `tbl_rekam_medis` (`id_pemeriksaan`, `tanggal_kunjungan`, `waktu_mulai`, `waktu_selesai`, `dokter_penanggung_jawab`, `perawat_penanggung_jawab`, `no_rm`) VALUES
(2, '2021-12-12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, '10.A0001.8'),
(3, '2021-12-12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 'Yulia Rahayu Putri', '10.A0001.9'),
(4, '2021-12-12', '2009-08-00 00:00:00', '2009-08-00 00:00:00', 'ciiiia', 'Yulia Rahayu Putri', '10.A0001.2'),
(5, '2021-12-13', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 'Yulia Rahayu Putri', '10.S0001.1'),
(7, '2021-12-16', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 'Yulia Rahayu Putri', '10.L0001.1'),
(8, '2021-12-16', '2008-03-14 00:00:00', '2008-03-14 00:00:00', NULL, 'Yulia Rahayu Putri', '10.L0001.4'),
(9, '2021-12-16', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ciiiia', 'Yulia Rahayu Putri', '10.N0001.2'),
(10, '2021-12-19', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Yulia Rahayu Putri', 'Yulia Rahayu Putri', '10.L0001.5'),
(11, '2021-12-21', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ciiiia', 'Yulia Rahayu Putri', '10.S0001.1'),
(12, '2021-12-22', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ciiiia', 'Yulia Rahayu Putri', '10.K0001.1'),
(14, '2021-12-22', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ciiiia', 'Yulia Rahayu Putri', '10.G0001.1'),
(15, '2021-12-22', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 'Yulia Rahayu Putri', '10.G0001.1'),
(16, '2021-12-24', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 'Yulia Rahayu Putri', '10.K0001.1'),
(17, '2022-01-02', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ciiiia', 'Yulia Rahayu Putri', '10.S0001.2'),
(18, '2022-01-02', '2009-09-12 00:00:00', '2009-09-12 00:00:00', 'ciiiia', 'Yulia Rahayu Putri', '10.U0001.1'),
(19, '2022-01-06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ciiiia', 'Yulia Rahayu Putri', '10.G0001.4'),
(20, '2022-01-12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 'Yulia Rahayu Putri', '10.S0001.2'),
(21, '2022-01-12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 'Yulia Rahayu Putri', '10.C0001.1'),
(22, '2022-01-29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 'Yulia Rahayu Putri', '10.C0001.1'),
(23, '2022-01-29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 'Yulia Rahayu Putri', '10.L0001.5'),
(24, '2022-01-29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 'Yulia Rahayu Putri', '10.U0001.1'),
(25, '2022-01-30', '2022-01-30 11:21:48', '2022-01-30 11:21:48', 'ciiiia', 'Yulia Rahayu Putri', '10.A0001.7'),
(26, '2022-01-30', '2022-01-30 11:22:28', '2022-01-30 11:22:28', 'ciiiia', 'Yulia Rahayu Putri', '10.N0001.2'),
(27, '2022-01-30', '2022-01-30 11:23:14', '2022-01-30 11:23:14', 'ciiiia', 'Yulia Rahayu Putri', '10.H0001.1'),
(28, '2022-01-30', '2022-01-30 11:23:34', '2022-01-30 11:23:34', 'ciiiia', 'Yulia Rahayu Putri', '10.S0001.2'),
(29, '2022-01-30', '2022-01-30 11:23:52', '2022-01-30 11:23:52', 'ciiiia', 'Yulia Rahayu Putri', '10.K0001.1'),
(30, '2022-02-04', '2022-02-04 21:25:49', '2022-02-04 21:25:49', NULL, 'Yulia Rahayu Putri', '10.A0001.3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resep_obat`
--

CREATE TABLE `tbl_resep_obat` (
  `id_resep` int(11) NOT NULL,
  `id_pemeriksaan` int(11) NOT NULL,
  `jenis_resep` varchar(50) NOT NULL,
  `signa` varchar(50) NOT NULL,
  `aturan_pakai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_resep_obat`
--

INSERT INTO `tbl_resep_obat` (`id_resep`, `id_pemeriksaan`, `jenis_resep`, `signa`, `aturan_pakai`) VALUES
(28, 4, 'Racikan', 'signa obat', '3x1'),
(29, 4, 'Racikan', 'signa obat2', '3x2'),
(34, 11, 'Racikan', 'signa obat', '3x2'),
(35, 11, 'Racikan', 'signa obat', '3x1'),
(36, 11, 'Racikan', 'signa obat2', '3x2'),
(37, 12, 'Racikan', 'signa obat2', '3x2'),
(38, 16, 'Racikan', 'signa obat koko', '3x1'),
(39, 17, 'Jadi', 'signa obat boby', '3x1'),
(40, 18, 'Jadi', 'signa obat ucup', '3x2'),
(41, 19, 'Jadi', 'signa obat emerson', '3x2'),
(42, 29, 'Racikan', 'signa obat koko2', '3x2'),
(43, 28, 'Jadi', 'signa obat boby2', '3x2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resep_obats`
--

CREATE TABLE `tbl_resep_obats` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(250) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_resep` int(11) NOT NULL,
  `status` varchar(250) NOT NULL,
  `id_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_resep_obats`
--

INSERT INTO `tbl_resep_obats` (`id`, `nama_obat`, `jumlah`, `id_resep`, `status`, `id_obat`) VALUES
(1, 'obh herbal', 2, 28, 'hapus', 2),
(2, 'paracetamol', 3, 28, 'tersedia', 1),
(3, 'obh herbal', 2, 28, '', 2),
(4, 'paracetamol', 2, 28, 'tersedia', 1),
(5, 'obh herbal', 1, 28, 'tersedia', 2),
(6, 'obh herbal', 2, 28, 'tersedia', 2),
(7, 'paracetamol', 2, 28, 'tersedia', 1),
(8, 'obh herbal', 2, 28, 'tersedia', 2),
(9, 'paracetamol', 32, 28, 'tersedia', 1),
(10, 'obh herbal', 2, 28, 'tersedia', 2),
(11, 'obh herbal', 1, 35, 'hapus', 2),
(12, 'paracetamol', 1, 36, 'tersedia', 1),
(13, 'obh herbal', 2, 36, 'tersedia', 2),
(14, 'obh herbal', 2, 37, 'tersedia', 2),
(15, 'paracetamol', 32, 37, 'tersedia', 1),
(16, 'paracetamol', 2, 38, 'tersedia', 1),
(17, 'paracetamol', 1, 38, 'tersedia', 1),
(18, 'paracetamol', 2, 39, 'tersedia', 1),
(19, 'paracetamol', 1, 40, 'tersedia', 2),
(20, 'paracetamol', 2, 41, 'tersedia', 2),
(21, 'paracetamol', 2, 42, 'tersedia', 1),
(22, 'obh herbal', 32, 42, 'tersedia', 2),
(23, 'paracetamol', 2, 43, 'tersedia', 1);

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
  `penanggung_jawab` varchar(225) NOT NULL,
  `no_rm` varchar(250) NOT NULL,
  `perawat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tindakan_rm`
--

INSERT INTO `tbl_tindakan_rm` (`id_tindakan`, `id_pemeriksaan`, `tindakan`, `keterangan`, `waktu_tindakan`, `status`, `penanggung_jawab`, `no_rm`, `perawat`) VALUES
(1, 4, 'rewrw', 'keterangan tindakan rewrw', '0000-00-00 00:00:00', 'Masuk', 'hihi', '10.A0001.2', ''),
(2, 7, 'rewrw', 'keterangan tindakan rewrw', '0000-00-00 00:00:00', 'Masuk', 'ciiiia', '10.A0001.2', ''),
(3, 10, 'rewrw', 'keterangan tindakan rewrw', '0000-00-00 00:00:00', 'Masuk', 'Yulia Rahayu Putri', '10.L0001.5', 'hihi'),
(4, 11, 'rewrw899', 'keterangan tindakan rewrw899', '0000-00-00 00:00:00', 'hapus', 'ciiiia', '10.S0001.1', 'hihi'),
(5, 12, 'rewrw', 'keterangan tindakan rewrw', '0000-00-00 00:00:00', 'Masuk', 'ciiiia', '10.K0001.1', 'hihi'),
(6, 17, 'rewrw', 'keterangan tindakan rewrw boby', '2022-01-02 07:29:48', 'Masuk', 'ciiiia', '10.S0001.2', 'hihi'),
(7, 18, 'rewrw', 'keterangan tindakan rewrw', '2022-01-02 09:11:28', 'Masuk', 'ciiiia', '10.U0001.1', 'hihi'),
(8, 19, 'rewrw', 'keterangan tindakan rewrw', '2022-01-06 08:02:29', 'Masuk', 'ciiiia', '10.G0001.4', 'hihi'),
(9, 29, 'rewrw', 'keterangan tindakan rewrw koko', '2022-01-30 12:55:30', 'Masuk', 'ciiiia', '10.K0001.1', 'hihi'),
(10, 28, 'rewrw899', 'keterangan tindakan rewrw boby2', '2022-01-30 01:18:41', 'Masuk', 'ciiiia', '10.S0001.2', 'hihi');

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
-- Indexes for table `tbl_antrian_farmasi`
--
ALTER TABLE `tbl_antrian_farmasi`
  ADD PRIMARY KEY (`id_antrian`),
  ADD KEY `no_rm` (`no_rm`);

--
-- Indexes for table `tbl_antrian_kasir`
--
ALTER TABLE `tbl_antrian_kasir`
  ADD PRIMARY KEY (`id_antrian`),
  ADD KEY `no_rm` (`no_rm`);

--
-- Indexes for table `tbl_antrian_laborat`
--
ALTER TABLE `tbl_antrian_laborat`
  ADD PRIMARY KEY (`id_antrian`),
  ADD KEY `no_rm` (`no_rm`);

--
-- Indexes for table `tbl_antrian_laboratorium`
--
ALTER TABLE `tbl_antrian_laboratorium`
  ADD PRIMARY KEY (`id_antrian`),
  ADD KEY `no_rm` (`no_rm`);

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
-- Indexes for table `tbl_asuransi`
--
ALTER TABLE `tbl_asuransi`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id_data_laborat_dokter`),
  ADD KEY `tbl_data_laborat_dokter_ibfk_1` (`id_jenis`);

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
-- Indexes for table `tbl_jenis_dokter`
--
ALTER TABLE `tbl_jenis_dokter`
  ADD PRIMARY KEY (`id_jenis_dokter`);

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
-- Indexes for table `tbl_pemeriksaan_dokter`
--
ALTER TABLE `tbl_pemeriksaan_dokter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_nama` (`id_nama`),
  ADD KEY `id_data_laborat_dokter` (`id_data_laborat_dokter`);

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
-- Indexes for table `tbl_penyuluhan`
--
ALTER TABLE `tbl_penyuluhan`
  ADD PRIMARY KEY (`id_penyuluhan`),
  ADD KEY `no_rm` (`no_rm`),
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
-- Indexes for table `tbl_resep_obats`
--
ALTER TABLE `tbl_resep_obats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_resep` (`id_resep`),
  ADD KEY `id_obat` (`id_obat`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_anamnesa_rm`
--
ALTER TABLE `tbl_anamnesa_rm`
  MODIFY `id_anamnesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_antrian_farmasi`
--
ALTER TABLE `tbl_antrian_farmasi`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_antrian_kasir`
--
ALTER TABLE `tbl_antrian_kasir`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99999999;

--
-- AUTO_INCREMENT for table `tbl_antrian_laborat`
--
ALTER TABLE `tbl_antrian_laborat`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_antrian_laboratorium`
--
ALTER TABLE `tbl_antrian_laboratorium`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000001;

--
-- AUTO_INCREMENT for table `tbl_antrian_poli_umums`
--
ALTER TABLE `tbl_antrian_poli_umums`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000010;

--
-- AUTO_INCREMENT for table `tbl_antri_pendaftaran`
--
ALTER TABLE `tbl_antri_pendaftaran`
  MODIFY `id_antrian` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000086;

--
-- AUTO_INCREMENT for table `tbl_asuhan_keperawatan`
--
ALTER TABLE `tbl_asuhan_keperawatan`
  MODIFY `id_askep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_asuransi`
--
ALTER TABLE `tbl_asuransi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_datapasiens`
--
ALTER TABLE `tbl_datapasiens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_data_icdx`
--
ALTER TABLE `tbl_data_icdx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_data_laborat_dokter`
--
ALTER TABLE `tbl_data_laborat_dokter`
  MODIFY `id_data_laborat_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_data_obat`
--
ALTER TABLE `tbl_data_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_data_stock_obat`
--
ALTER TABLE `tbl_data_stock_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_data_tindakan`
--
ALTER TABLE `tbl_data_tindakan`
  MODIFY `id_datatindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_diagnosa_rm`
--
ALTER TABLE `tbl_diagnosa_rm`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_farmasi`
--
ALTER TABLE `tbl_farmasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_hasil_lab`
--
ALTER TABLE `tbl_hasil_lab`
  MODIFY `id_pemeriksaan_lab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_jamkes`
--
ALTER TABLE `tbl_jamkes`
  MODIFY `id_jamkes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_jenis_dokter`
--
ALTER TABLE `tbl_jenis_dokter`
  MODIFY `id_jenis_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `tbl_pemeriksaan_dokter`
--
ALTER TABLE `tbl_pemeriksaan_dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_pemeriksaan_rm`
--
ALTER TABLE `tbl_pemeriksaan_rm`
  MODIFY `id_pemeriksaan_objek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_pengobatan_rm`
--
ALTER TABLE `tbl_pengobatan_rm`
  MODIFY `id_pengobatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_penyuluhan`
--
ALTER TABLE `tbl_penyuluhan`
  MODIFY `id_penyuluhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_permintaanlab`
--
ALTER TABLE `tbl_permintaanlab`
  MODIFY `id_permintaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_poli`
--
ALTER TABLE `tbl_poli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_rekam_medis`
--
ALTER TABLE `tbl_rekam_medis`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_resep_obat`
--
ALTER TABLE `tbl_resep_obat`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_resep_obats`
--
ALTER TABLE `tbl_resep_obats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
  MODIFY `id_tindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- Constraints for table `tbl_data_laborat_dokter`
--
ALTER TABLE `tbl_data_laborat_dokter`
  ADD CONSTRAINT `tbl_data_laborat_dokter_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `tbl_jenis_dokter` (`id_jenis_dokter`);

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
  ADD CONSTRAINT `tbl_hasil_lab_ibfk_2` FOREIGN KEY (`id_jenis_pemeriksaan`) REFERENCES `tbl_jenis_dokter` (`id_jenis_dokter`),
  ADD CONSTRAINT `tbl_hasil_lab_ibfk_3` FOREIGN KEY (`id_nama_pemeriksaan`) REFERENCES `tbl_nama_pemeriksaan` (`id_nama_pemeriksaan`);

--
-- Constraints for table `tbl_nama_pemeriksaan`
--
ALTER TABLE `tbl_nama_pemeriksaan`
  ADD CONSTRAINT `tbl_nama_pemeriksaan_ibfk_1` FOREIGN KEY (`id_jenis_pemeriksaan`) REFERENCES `tbl_jenis_pemeriksaan` (`id_jenis_pemeriksaan`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_pemeriksaan_dokter`
--
ALTER TABLE `tbl_pemeriksaan_dokter`
  ADD CONSTRAINT `tbl_pemeriksaan_dokter_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `tbl_jenis_dokter` (`id_jenis_dokter`),
  ADD CONSTRAINT `tbl_pemeriksaan_dokter_ibfk_2` FOREIGN KEY (`id_nama`) REFERENCES `tbl_nama_pemeriksaan` (`id_nama_pemeriksaan`),
  ADD CONSTRAINT `tbl_pemeriksaan_dokter_ibfk_3` FOREIGN KEY (`id_data_laborat_dokter`) REFERENCES `tbl_data_laborat_dokter` (`id_data_laborat_dokter`);

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
-- Constraints for table `tbl_penyuluhan`
--
ALTER TABLE `tbl_penyuluhan`
  ADD CONSTRAINT `tbl_penyuluhan_ibfk_1` FOREIGN KEY (`no_rm`) REFERENCES `tbl_datapasiens` (`no_rm`),
  ADD CONSTRAINT `tbl_penyuluhan_ibfk_2` FOREIGN KEY (`id_pemeriksaan`) REFERENCES `tbl_asuhan_keperawatan` (`id_pemeriksaan`);

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
-- Constraints for table `tbl_resep_obats`
--
ALTER TABLE `tbl_resep_obats`
  ADD CONSTRAINT `tbl_resep_obats_ibfk_1` FOREIGN KEY (`id_resep`) REFERENCES `tbl_resep_obat` (`id_resep`);

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
