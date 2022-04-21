-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 05:19 PM
-- Server version: 10.6.5-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pemilihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id`, `id_user`, `id_kelas`, `nama`, `tanggal_lahir`, `tempat_lahir`, `jenis_kelamin`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(4, 493, 5, 'Arif Setiabudi', '1980-11-06', 'JAKARTA', 'Laki', 'Jln. Cakung Kec. Jatiasih-Bekasi', '0876878', '2022-04-18 14:58:45', '2022-04-18 14:58:45'),
(5, 494, 6, 'Agus Saryono', '1986-11-07', 'JAKARTA', 'Laki', 'Jln. Cakung Kec. Jatiasih-Bekasi', '0876879', '2022-04-18 14:58:45', '2022-04-18 14:58:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hasil`
--

CREATE TABLE `tbl_hasil` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `kode_seleksi` varchar(5) NOT NULL,
  `hasil_nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_hasil`
--

INSERT INTO `tbl_hasil` (`id`, `id_siswa`, `kode_seleksi`, `hasil_nilai`) VALUES
(170, 68, 'KS002', 3.8),
(171, 78, 'KS002', 3.65),
(172, 67, 'KS002', 4.5),
(173, 85, 'KS002', 3.8),
(174, 87, 'KS002', 3.88),
(175, 94, 'KS002', 4.5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id` int(11) NOT NULL,
  `kelas` char(1) NOT NULL,
  `sub_kelas` char(1) NOT NULL,
  `concat` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id`, `kelas`, `sub_kelas`, `concat`) VALUES
(5, '5', 'A', '5A'),
(6, '6', 'A', '6A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_raport`
--

CREATE TABLE `tbl_raport` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `pai` int(11) NOT NULL,
  `pkn` int(11) NOT NULL,
  `bahasa_indonesia` int(11) NOT NULL,
  `mtk` int(11) NOT NULL,
  `ipa` int(11) NOT NULL,
  `ips` int(11) NOT NULL,
  `sbdp` int(11) NOT NULL,
  `pjok` int(11) NOT NULL,
  `bahasa_inggris` int(11) NOT NULL,
  `bahasa_arab` int(11) NOT NULL,
  `tahsin` int(11) NOT NULL,
  `tik` int(11) NOT NULL,
  `nilai_raport` float NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `tahun_ajaran` varchar(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_raport`
--

INSERT INTO `tbl_raport` (`id`, `id_siswa`, `pai`, `pkn`, `bahasa_indonesia`, `mtk`, `ipa`, `ips`, `sbdp`, `pjok`, `bahasa_inggris`, `bahasa_arab`, `tahsin`, `tik`, `nilai_raport`, `id_kelas`, `tahun_ajaran`, `created_at`, `updated_at`) VALUES
(1, 65, 81, 91, 86, 83, 86, 80, 84, 89, 85, 91, 80, 85, 84.92, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(2, 66, 81, 91, 84, 80, 76, 80, 83, 89, 70, 84, 82, 70, 80.81, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(3, 67, 81, 91, 92, 89, 88, 95, 88, 89, 89, 80, 92, 89, 88.56, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(4, 68, 81, 91, 90, 94, 93, 93, 86, 90, 85, 92, 94, 85, 89.47, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(5, 69, 81, 91, 82, 80, 81, 82, 84, 87, 77, 91, 83, 80, 83.22, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(6, 70, 81, 91, 90, 93, 87, 82, 87, 88, 82, 87, 92, 82, 86.81, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(7, 71, 81, 91, 86, 80, 83, 84, 83, 86, 78, 85, 89, 78, 83.64, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(8, 72, 81, 91, 84, 86, 82, 87, 83, 88, 77, 84, 77, 75, 82.89, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(9, 73, 81, 91, 88, 93, 84, 81, 81, 86, 81, 91, 88, 81, 85.47, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(10, 74, 81, 91, 88, 84, 85, 86, 84, 88, 76, 90, 91, 78, 85.14, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(11, 75, 81, 91, 87, 80, 87, 80, 80, 85, 72, 82, 76, 72, 81.06, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(12, 76, 81, 91, 82, 83, 85, 84, 84, 87, 83, 86, 80, 83, 84.06, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(13, 77, 81, 91, 92, 83, 80, 95, 80, 86, 81, 91, 82, 81, 85.22, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(14, 78, 81, 91, 93, 96, 88, 94, 89, 86, 90, 95, 95, 90, 90.64, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(15, 79, 81, 91, 89, 83, 87, 88, 82, 87, 81, 91, 84, 81, 85.39, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(16, 80, 81, 91, 86, 81, 82, 80, 82, 88, 81, 91, 79, 81, 83.56, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(17, 81, 81, 91, 87, 92, 86, 89, 84, 88, 85, 89, 86, 85, 86.89, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(18, 82, 81, 91, 90, 94, 87, 84, 83, 89, 87, 90, 92, 87, 87.89, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(19, 83, 81, 91, 80, 81, 81, 81, 83, 86, 76, 91, 85, 76, 82.64, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(20, 84, 81, 91, 84, 94, 83, 91, 82, 87, 75, 86, 88, 75, 84.72, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(21, 85, 81, 91, 90, 93, 89, 97, 84, 89, 84, 91, 89, 84, 88.47, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(22, 86, 81, 91, 90, 93, 92, 93, 91, 85, 82, 91, 85, 82, 87.97, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(23, 87, 81, 91, 90, 95, 88, 83, 88, 90, 83, 91, 93, 83, 87.97, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(24, 88, 81, 91, 81, 88, 84, 83, 82, 89, 73, 85, 81, 73, 82.56, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(26, 89, 81, 91, 82, 83, 80, 83, 80, 86, 72, 91, 84, 72, 82.06, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(27, 90, 81, 91, 85, 96, 89, 92, 80, 87, 81, 91, 93, 81, 87.22, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(28, 91, 81, 91, 83, 95, 86, 93, 86, 89, 84, 83, 95, 84, 87.47, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(29, 92, 81, 91, 83, 94, 81, 83, 81, 86, 76, 91, 86, 76, 84.06, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(30, 93, 81, 91, 82, 91, 80, 84, 81, 86, 77, 85, 87, 77, 83.47, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(31, 94, 81, 91, 92, 95, 95, 94, 87, 87, 89, 84, 85, 89, 89.06, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(32, 95, 81, 91, 85, 95, 85, 93, 80, 89, 81, 91, 92, 81, 86.97, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(33, 96, 81, 91, 87, 94, 86, 82, 86, 88, 83, 85, 94, 83, 86.64, 5, '2019', '2022-04-16 06:31:54', '2022-04-16 06:31:54'),
(34, 65, 81, 91, 86, 83, 86, 80, 84, 89, 85, 91, 80, 85, 84.92, 6, '2020', '2022-04-16 06:32:19', '2022-04-16 06:32:19'),
(35, 66, 75, 85, 84, 80, 76, 80, 83, 89, 70, 84, 82, 70, 79.83, 6, '2020', '2022-04-16 06:32:19', '2022-04-16 06:32:19'),
(36, 67, 83, 95, 92, 89, 88, 95, 88, 89, 89, 80, 92, 89, 89.08, 6, '2020', '2022-04-16 06:32:19', '2022-04-16 06:32:19'),
(37, 68, 84, 95, 90, 94, 93, 93, 86, 90, 85, 92, 94, 85, 90.08, 6, '2020', '2022-04-16 06:32:19', '2022-04-16 06:32:19'),
(38, 69, 78, 81, 82, 80, 81, 82, 84, 87, 77, 91, 83, 80, 82.17, 6, '2020', '2022-04-16 06:32:19', '2022-04-16 06:32:19'),
(39, 70, 86, 89, 90, 93, 87, 82, 87, 88, 82, 87, 92, 82, 87.08, 6, '2020', '2022-04-16 06:32:19', '2022-04-16 06:32:31'),
(40, 71, 88, 86, 86, 80, 83, 84, 83, 86, 78, 85, 89, 78, 83.83, 6, '2020', '2022-04-16 06:32:19', '2022-04-16 06:32:19'),
(41, 72, 84, 87, 84, 86, 82, 87, 83, 88, 77, 84, 77, 75, 82.83, 6, '2020', '2022-04-16 06:32:19', '2022-04-16 06:32:19'),
(42, 73, 80, 91, 88, 93, 84, 81, 81, 86, 81, 91, 88, 81, 85.42, 6, '2020', '2022-04-16 06:32:19', '2022-04-16 06:32:31'),
(43, 74, 79, 88, 88, 84, 85, 86, 84, 88, 76, 90, 91, 78, 84.75, 6, '2020', '2022-04-16 06:32:19', '2022-04-16 06:32:19'),
(44, 75, 87, 84, 87, 80, 87, 80, 80, 85, 72, 82, 76, 72, 81, 6, '2020', '2022-04-16 06:32:19', '2022-04-16 06:32:19'),
(45, 76, 87, 91, 82, 83, 85, 84, 84, 87, 83, 86, 80, 83, 84.58, 6, '2020', '2022-04-16 06:32:19', '2022-04-16 06:32:19'),
(46, 77, 76, 85, 92, 83, 80, 95, 80, 86, 81, 91, 82, 81, 84.33, 6, '2020', '2022-04-16 06:32:19', '2022-04-16 06:32:19'),
(47, 78, 94, 96, 93, 96, 88, 94, 89, 86, 90, 95, 95, 90, 92.17, 6, '2020', '2022-04-16 06:32:19', '2022-04-16 06:32:19'),
(48, 79, 83, 92, 89, 83, 87, 88, 82, 87, 81, 91, 84, 81, 85.67, 6, '2020', '2022-04-16 06:32:19', '2022-04-16 06:32:19'),
(49, 80, 87, 90, 86, 81, 82, 80, 82, 88, 81, 91, 79, 81, 84, 6, '2020', '2022-04-16 06:32:19', '2022-04-16 06:32:19'),
(50, 81, 81, 94, 87, 92, 86, 89, 84, 88, 85, 89, 86, 85, 87.17, 6, '2020', '2022-04-16 06:32:19', '2022-04-16 06:32:19'),
(51, 82, 90, 91, 90, 94, 87, 84, 83, 89, 87, 90, 92, 87, 88.67, 6, '2020', '2022-04-16 06:32:20', '2022-04-16 06:32:20'),
(52, 83, 80, 84, 80, 81, 81, 81, 83, 86, 76, 91, 85, 76, 82, 6, '2020', '2022-04-16 06:32:20', '2022-04-16 06:32:31'),
(53, 84, 79, 88, 84, 94, 83, 91, 82, 87, 75, 86, 88, 75, 84.33, 6, '2020', '2022-04-16 06:32:20', '2022-04-16 06:32:20'),
(54, 85, 87, 94, 90, 93, 89, 97, 84, 89, 84, 91, 89, 84, 89.25, 6, '2020', '2022-04-16 06:32:20', '2022-04-16 06:32:20'),
(55, 86, 87, 90, 90, 93, 92, 93, 91, 85, 82, 91, 85, 82, 88.42, 6, '2020', '2022-04-16 06:32:20', '2022-04-16 06:32:20'),
(56, 87, 90, 93, 90, 95, 88, 83, 88, 90, 83, 91, 93, 83, 88.92, 6, '2020', '2022-04-16 06:32:20', '2022-04-16 06:32:20'),
(57, 88, 79, 83, 81, 88, 84, 83, 82, 89, 73, 85, 81, 73, 81.75, 6, '2020', '2022-04-16 06:32:20', '2022-04-16 06:32:20'),
(59, 89, 86, 82, 82, 83, 80, 83, 80, 86, 72, 91, 84, 72, 81.75, 6, '2020', '2022-04-16 06:32:20', '2022-04-16 06:32:20'),
(60, 90, 90, 89, 85, 96, 89, 92, 80, 87, 81, 91, 93, 81, 87.83, 6, '2020', '2022-04-16 06:32:20', '2022-04-16 06:32:20'),
(61, 91, 91, 87, 83, 95, 86, 93, 86, 89, 84, 83, 95, 84, 88, 6, '2020', '2022-04-16 06:32:20', '2022-04-16 06:32:20'),
(62, 92, 86, 84, 83, 94, 81, 83, 81, 86, 76, 91, 86, 76, 83.92, 6, '2020', '2022-04-16 06:32:20', '2022-04-16 06:32:20'),
(63, 93, 90, 90, 82, 91, 80, 84, 81, 86, 77, 85, 87, 77, 84.17, 6, '2020', '2022-04-16 06:32:20', '2022-04-16 06:32:20'),
(64, 94, 83, 95, 92, 95, 95, 94, 87, 87, 89, 84, 85, 89, 89.58, 6, '2020', '2022-04-16 06:32:20', '2022-04-16 06:32:20'),
(65, 95, 92, 91, 85, 95, 85, 93, 80, 89, 81, 91, 92, 81, 87.92, 6, '2020', '2022-04-16 06:32:20', '2022-04-16 06:32:20'),
(66, 96, 82, 90, 87, 94, 86, 82, 86, 88, 83, 85, 94, 83, 86.67, 6, '2020', '2022-04-16 06:32:20', '2022-04-16 06:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seleksi`
--

CREATE TABLE `tbl_seleksi` (
  `id` int(11) NOT NULL,
  `kode_seleksi` varchar(5) NOT NULL,
  `faktor` varchar(20) NOT NULL,
  `kriteria` varchar(20) NOT NULL,
  `bobot` int(11) NOT NULL,
  `subkriteria` varchar(100) NOT NULL,
  `bobot_subkriteria` char(1) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_seleksi`
--

INSERT INTO `tbl_seleksi` (`id`, `kode_seleksi`, `faktor`, `kriteria`, `bobot`, `subkriteria`, `bobot_subkriteria`, `tanggal`, `created_at`, `updated_at`) VALUES
(16, 'KS002', 'Core', 'KSN', 70, 'bahasa_arab', '3', '2022-04-30', '2022-04-21 13:36:12', '2022-04-21 13:36:12'),
(17, 'KS002', 'Secondary', 'KSN', 30, 'tik', '3', '2022-04-30', '2022-04-21 13:36:12', '2022-04-21 13:36:12'),
(18, 'KS002', 'Secondary', 'KSN', 30, 'ips', '4', '2022-04-30', '2022-04-21 13:36:12', '2022-04-21 13:36:12'),
(19, 'KS003', 'Core', 'OSN', 46, 'tik', '2', '2022-04-30', '2022-04-21 14:23:51', '2022-04-21 14:23:51'),
(20, 'KS003', 'Secondary', 'OSN', 54, 'pjok', '2', '2022-04-30', '2022-04-21 14:23:51', '2022-04-21 14:23:51'),
(21, 'KS004', 'Core', 'OSN', 42, 'bahasa_arab', '1', '2021-07-21', '2022-04-21 14:27:19', '2022-04-21 14:27:19'),
(22, 'KS004', 'Secondary', 'OSN', 58, 'bahasa_inggris', '3', '2021-07-21', '2022-04-21 14:27:19', '2022-04-21 14:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seleksi_proses`
--

CREATE TABLE `tbl_seleksi_proses` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kode_seleksi` varchar(5) NOT NULL,
  `ket` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_seleksi_proses`
--

INSERT INTO `tbl_seleksi_proses` (`id`, `id_siswa`, `id_user`, `kode_seleksi`, `ket`, `created_at`, `updated_at`) VALUES
(39, 78, 493, 'KS002', 'Mengikuti', '2022-04-21 13:37:00', '2022-04-21 13:37:00'),
(40, 68, 493, 'KS002', 'Mengikuti', '2022-04-21 13:37:02', '2022-04-21 13:37:02'),
(41, 94, 493, 'KS002', 'Mengikuti', '2022-04-21 13:41:17', '2022-04-21 13:41:17'),
(42, 85, 493, 'KS002', 'Mengikuti', '2022-04-21 13:41:19', '2022-04-21 13:41:19'),
(43, 67, 493, 'KS002', 'Mengikuti', '2022-04-21 13:41:22', '2022-04-21 13:41:22'),
(44, 87, 493, 'KS002', 'Mengikuti', '2022-04-21 13:41:24', '2022-04-21 13:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `tahun_ajaran` varchar(4) NOT NULL,
  `partisipasi` varchar(15) NOT NULL DEFAULT 'Tidak Mengikuti',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id`, `id_kelas`, `id_user`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `tempat_lahir`, `alamat`, `tahun_ajaran`, `partisipasi`, `created_at`, `updated_at`) VALUES
(65, 5, 460, 'ABIMANYU PANGESTU BAYUAJI', 'Laki', '2008-11-06', 'JAKARTA', 'Jln. Cakung Kec. Jatiasih-Bekasi', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(66, 5, 461, 'ADLY SULTHAN AQILLA', 'Laki', '2009-12-08', 'BEKASI', 'Jln. Cilincing cakung Jakarta Utara', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(67, 5, 462, 'AFLA AQILA WIBOWO', 'Laki', '2008-12-05', 'BANDUNG', 'Jln. Kanwil cakung Kel- pondok bambu Jakarta Timur', '2020', 'Mengikuti', '2022-04-16 06:22:15', '2022-04-19 13:42:45'),
(68, 5, 463, 'AGHA RESPATI FARRAS GUMILAR', 'Laki', '2008-04-13', 'JAKARTA', 'jln. Kampung jembatan gg. Mangga Jakarta Timur', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-21 07:26:38'),
(69, 5, 464, 'AGNIA SALSABILA MACHFUDZ', 'Laki', '2008-07-17', 'BEKASI', 'Jln. Raya penggilingan kelapa 2 Jakarta Timur', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(70, 5, 465, 'TALITHA ZAHRA APRILIA PUTRI ALKATIRI', 'Laki', '2009-01-29', 'TANGERANG', 'jln. Kemuning II Pulo gebang', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-19 12:59:36'),
(71, 5, 466, 'ALIKA MAHARANI PUTRI KUNCORO', 'Laki', '2008-09-08', 'JAKARTA', 'Jln. Alu Alu Kec. Pulogadung Jakarta Timur', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(72, 5, 467, 'ALYA JAZILAH', 'Laki', '2008-02-12', 'BEKASI', 'Jln Balai Pustaka I-IV Kec. Pulogadung Jakarta Timur', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(73, 5, 468, 'VIDYA TALITA SAKHI		', 'Laki', '2009-07-28', 'BEKASI', 'Jln. Pendidikan rt 009/05', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-19 12:59:36'),
(74, 5, 469, 'ANASTASHA NALINI SARISHA ZARIFAH', 'Laki', '2008-07-24', 'JAKARTA', 'Jln. Bawal Raya Kec. Pulogadung Jakarta Timur', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(75, 5, 470, 'ANDHIKA SATYA RAMADHAN', 'Laki', '2008-04-29', 'BEKASI', 'Jln Duren  I-IV Kec. Pulogadung Jakarta Timur', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(76, 5, 471, 'BISMA OKTAVIANO', 'Laki', '2009-01-25', 'TANGERANG', 'Jln. Taman kepiting Kec. Pulogadung Jakarta Timur', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(77, 5, 472, 'DANU EKA JULIAN', 'Laki', '2009-05-26', 'JAKARTA', 'Jln. Mentog Kec. Cakung Jakarta Timur', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(78, 5, 473, 'DZAKY ALMER JAMAIL', 'Laki', '2009-01-01', 'BEKASI', 'Jln. Manggis Kec. Cakung Jakarta Timur', '2020', 'Mengikuti', '2022-04-16 06:22:15', '2022-04-21 07:26:18'),
(79, 5, 474, 'FAHMI FRANANDA RADITYA', 'Laki', '2009-02-23', 'BANDUNG', 'Jln. Dahlia I-II Kec. Cakung Jakart Timur', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(80, 5, 475, 'FATMA YUNA DWI YUDISTY', 'Laki', '2008-05-24', 'JAKARTA', 'Jln. Kp. Petukangan RT. 005 / 015 Kel. Rawaterate', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(81, 5, 476, 'KHANSA JANEETA CELESTYN', 'Laki', '2008-06-12', 'BEKASI', 'Jln. Pulo Jahe Rt. 003 / 010 Kel. Jatinegara', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(82, 5, 477, 'MAHVIN AFLAH MULYANA', 'Laki', '2009-07-14', 'TANGERANG', 'Jln. Swadaya Rawa Buntu RT. 013/ 014 Kel. Jatinegara', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(83, 5, 478, 'NADHIRA FADHLAH', 'Laki', '2009-10-10', 'BEKASI', 'Jl. Masjid Al falah ', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-19 12:59:36'),
(84, 5, 479, 'MUHAMMAD NIZAM ZABRANI', 'Laki', '2009-08-22', 'BEKASI', 'jln. Kayu tinggi rt 001/06', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(85, 5, 480, 'MUHAMMAD ROYAN HERJUNO', 'Laki', '2008-11-23', 'BANDUNG', 'jln. Pendidikan IX komplek Ikip', '2020', 'Mengikuti', '2022-04-16 06:22:15', '2022-04-19 13:42:41'),
(86, 5, 481, 'MYEISHA ALZENA SHAKIRA', 'Laki', '2009-12-07', 'JAKARTA', 'Jln. Buluh Perindu raya no. 1', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(87, 5, 482, 'NADHIRAH ALAIDA YAHYA', 'Laki', '2008-12-17', 'TANGERANG', 'jln. Raya bekasi km 17', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(88, 5, 483, 'NAUFAL PRADIPTA', 'Laki', '2008-11-07', 'JAKARTA', 'jln. Buaran I Rt 006/08', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(89, 5, 485, 'QUINN LULU ATHIR DEEBA', 'Laki', '2009-05-23', 'BANDUNG', 'Jln. Raya penggilingan Komp. Pik ', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(90, 5, 486, 'RADEN BAGAS MAULANA IHSAN', 'Laki', '2009-08-09', 'JAKARTA', 'jln. Balai  Pondok bambu', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(91, 5, 487, 'RAFA HAFIZH RAMADHAN', 'Laki', '2009-07-28', 'BEKASI', 'jln. Raya Pondok Kelapa rt 010/02', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(92, 5, 488, 'RAHIL FAJRIA DESTAMARA', 'Laki', '2008-09-12', 'TANGERANG', 'jl. rawa jaya rt. 06/04 Pondok Kopi', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(93, 5, 489, 'RAMANIYA ATIFAH', 'Laki', '2008-09-08', 'JAKARTA', 'jln. Bina karya I Pondok Kopi', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(94, 5, 490, 'REYVANDY JULIANO', 'Laki', '2008-06-12', 'BEKASI', 'jln. Robusta raya blok P5 Pondok Kopi', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-21 07:26:36'),
(95, 5, 491, 'SAFARAS AKMA FADHIL', 'Laki', '2008-05-29', 'BANDUNG', 'jln. Dr. krt radjiman wedyodiningrat Rawaterate', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15'),
(96, 5, 492, 'SITI AISYAH MAULIDINA', 'Laki', '2008-08-19', 'JAKARTA', 'jln. Rawa bebek Pulo gebang', '2020', 'Tidak Mengikuti', '2022-04-16 06:22:15', '2022-04-16 06:22:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `level_user`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(460, '17182265', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(461, '17182266', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(462, '17182267', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(463, '17182268', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(464, '17182269', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(465, '17182270', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(466, '17182271', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(467, '17182272', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(468, '17182273', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(469, '17182274', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(470, '17182275', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(471, '17182276', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(472, '17182277', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(473, '17182240', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(474, '17182243', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(475, '17182241', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(476, '17182244', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(477, '17182242', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(478, '17182247', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(479, '17182245', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(480, '17182246', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(481, '17182250', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(482, '17182249', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(483, '17182248', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(484, '17182251', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(485, '17182255', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(486, '17182253', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(487, '17182252', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(488, '17182254', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(489, '17182256', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(490, '17182259', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(491, '17182260', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(492, '17182278', 'e10adc3949ba59abbe56e057f20f883e', 'Siswa'),
(493, '1111', 'e10adc3949ba59abbe56e057f20f883e', 'Guru'),
(494, '2222', 'e10adc3949ba59abbe56e057f20f883e', 'Guru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `tbl_hasil`
--
ALTER TABLE `tbl_hasil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_raport`
--
ALTER TABLE `tbl_raport`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_raport_ibfk_1` (`id_siswa`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `tbl_seleksi`
--
ALTER TABLE `tbl_seleksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_seleksi_proses`
--
ALTER TABLE `tbl_seleksi_proses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`id_user`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_hasil`
--
ALTER TABLE `tbl_hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_raport`
--
ALTER TABLE `tbl_raport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tbl_seleksi`
--
ALTER TABLE `tbl_seleksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_seleksi_proses`
--
ALTER TABLE `tbl_seleksi_proses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=495;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD CONSTRAINT `tbl_guru_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_guru_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_hasil`
--
ALTER TABLE `tbl_hasil`
  ADD CONSTRAINT `tbl_hasil_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tbl_siswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_raport`
--
ALTER TABLE `tbl_raport`
  ADD CONSTRAINT `tbl_raport_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tbl_siswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_raport_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_seleksi_proses`
--
ALTER TABLE `tbl_seleksi_proses`
  ADD CONSTRAINT `tbl_seleksi_proses_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tbl_siswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_seleksi_proses_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD CONSTRAINT `tbl_siswa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_siswa_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
