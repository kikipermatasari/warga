-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 10:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dasawisma`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` bigint(191) NOT NULL,
  `id_nomorkk` varchar(100) NOT NULL,
  `nama_kk` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `rtrw` varchar(225) NOT NULL,
  `kodepos` varchar(225) NOT NULL,
  `kelurahan` varchar(225) NOT NULL,
  `kecamatan` varchar(225) NOT NULL,
  `kota` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `nik` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `tempat_lahir` varchar(225) NOT NULL,
  `tgl_lahir` varchar(225) NOT NULL,
  `agama_anggota` varchar(225) NOT NULL,
  `pendidikan` varchar(225) NOT NULL,
  `jenis_pekerjaan` varchar(225) NOT NULL,
  `detail_pekerjaan` text NOT NULL,
  `gol_darah` varchar(225) NOT NULL,
  `status_kawin` varchar(225) NOT NULL,
  `tgl_kawin` varchar(225) NOT NULL,
  `status_hub_keluarga` varchar(225) NOT NULL,
  `detail_hub_keluarga` text NOT NULL,
  `kwn` varchar(225) NOT NULL,
  `no_pasport` varchar(225) NOT NULL,
  `no_kitap` varchar(225) NOT NULL,
  `nama_ayah` varchar(225) NOT NULL,
  `nama_ibu` varchar(225) NOT NULL,
  `domisili` varchar(225) NOT NULL,
  `provinsi` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_keluarga`
--

CREATE TABLE `data_keluarga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kk` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rtrw` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_pekerjaan` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_pekerjaan` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gol_darah` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_hub_keluarga` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_hub_keluarga` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domisili` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kitap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_pasport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwn` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jns_kelamin` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kawin` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kawin` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penghayatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kerja_bakti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rukun_kematian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keagamaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumpitan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arisan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_penghayatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_kerja_bakti` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_rukun_kematian` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_keagamaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_jumpitan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_arisan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_dll` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktifitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2020_07_01_014958_kepala_keluarga', 1),
(5, '2020_07_01_015027_warga', 1),
(6, '2020_08_05_033445_rekap_hamil', 1),
(7, '2020_08_07_040336_anggota', 1),
(8, '2020_08_07_080230_kegiatan', 1),
(9, '2020_08_19_073629_data_keluarga', 2);

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
-- Table structure for table `rekap_hamil`
--

CREATE TABLE `rekap_hamil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkk_rt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkk_rw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_suami` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_hamil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bayi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akta_kelahiran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_alm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_alm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jnis_kl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_meninggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebab_meninggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin Dasawisma', 'AdmDS20', '$2y$10$dJ0bBRvh.PZMm/.A/reR8eQTZ1TYKQzgpwQBJyi6Oe0rXoVT6jx02', 'Admin Camat', NULL, NULL, NULL),
(4, 'Kiki Permata Sari', 'permata95', '$2y$10$P51EzXNErvOp1kZv/c8AJ.hXa0hOyEiknQty13QeQSEAKiL1Ny9vC', 'SuperAdmin', NULL, NULL, '2020-08-28 22:20:58'),
(7, 'SUCI LESTARI', '1374014601900001', '$2y$10$9l8wdzeHf46V.0DFSMdCG.2025/UO7coju43CcWGeq1wFhJjCClaC', 'Admin Kelurahan Balai-Balai', NULL, NULL, NULL),
(8, 'DENI MARISKI, S.Pd', '1374021503860041', '$2y$10$u8H0CYhpQ59tx8MqJ7h1meud1YXAneObVE0ZmR0qtOysXvCuKN8Sm', 'Admin Kelurahan Kampung Manggis', NULL, NULL, NULL),
(9, 'TRI ARIANI', '137402681095001', '$2y$10$2RH.eVVcjKrsSSdldUZlHO4GCf4CRU3AHd0sawAq1Ot4bj5xx8QUK', 'Admin Kelurahan pasar Usang', NULL, NULL, NULL),
(10, 'ROVIZA FATRI B GUDAM', '1374015501840020', '$2y$10$ZqLsEULUXkoaa.jFuBHsCO1UN7M2LPiTWnsrgMaiIdxti511.zSq.', 'Admin Kelurahan Pasar Baru', NULL, NULL, NULL),
(11, 'LUSI FEBRIANI', '13740241118900001', '$2y$10$dsozb9Q8Me5WyUKJTIYDSO45jrBU/VJTiO3Q8UxUnXcqdACcK1FrG', 'Admin Kelurahan Silaing Bawah', NULL, NULL, NULL),
(12, 'NADIA YUNITA', '1374026706870001', '$2y$10$fL0c7nJPVVssC3roPmKv4e4ZGLL6EuUjEszmhpV3A5uBW6Nln3uO.', 'Admin Kelurahan Silaing Atas', NULL, NULL, NULL),
(13, 'MEGA DELLA NUGRAHA', '1374026105950001', '$2y$10$0b/7kVMbye9kTIzXw10CYuR08Roc2gTSypxRaIuJe84Ql5cA/eBLe', 'Admin Kelurahan Tanah Hitam', NULL, NULL, NULL),
(14, 'MARIA SANUSI', '1374026502860001', '$2y$10$3My8vy6Hk4MvufCuQMRHAuTopxbRPoHe6.9UN4C6H4XTEoN0.GDom', 'Admin Kelurahan Bukit Surungan', NULL, NULL, NULL),
(15, 'FHANDY RAMADHONA, S.STP.MM', '198506092004121002', '$2y$10$LLdKjpeXKPplSb4MShhDJu6gJbFnHZTN4oyZR.sTLVtZKRlYT.I9W', 'Admin Camat', NULL, NULL, NULL),
(16, 'DANIEL MARULI SITORUS, S.Sos', '197906282007011001', '$2y$10$LDIsgC.O3rDh49xVxnbhuupunQigDFKzOsx8GdrxCfRNMBaW/q7LW', 'Admin Camat', NULL, NULL, NULL),
(17, 'DESMIWATI, SE', '196912051990032006', '$2y$10$yzWhaltHzD7QdQFv/p.tkeCFxceQ6tvhKVVMPcF3dZvuzfe4AbBYu', 'Admin Camat', NULL, NULL, NULL),
(18, 'ZAMRI, S.Th.I', '197812232005011005', '$2y$10$Dl5Yo7a2fgng/Gk/QYMBY.vNbB8mktbwcYwqvr6ELecfhM63omv2C', 'Admin Kelurahan Silaing Bawah', NULL, NULL, NULL),
(19, 'ROMI ARRAHMAN,ST', '198210122011011008', '$2y$10$tluNg6O16YZrLWeULsuY.OVPgZiRXmODuc.I5OyxlaLayYXXEeYOK', 'Admin Kelurahan pasar Usang', NULL, NULL, NULL),
(20, 'Drs.ASRUL', '19651121997021004', '$2y$10$CiGQigsUzSkvzVZ/NRthYudaCEUsLhxoCb6WZFhSuuh3AwVJV47eC', 'Admin Kelurahan Balai-Balai', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dasawisma` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noreg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akseptor_kb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktif_posyandu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_bina` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tabungan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelompok_belajar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_belajar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `koperasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_koperasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_akseptor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `penghayatan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kerja_bakti` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rukun_kematian` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keagamaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumpitan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arisan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dll` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_penghayatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket_kerja_bakti` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket_rukun_kematian` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket_keagamaan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket_jumpitan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket_arisan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket_dll` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id`, `dasawisma`, `noreg`, `nama_kk`, `nama`, `nik`, `jabatan`, `akseptor_kb`, `aktif_posyandu`, `program_bina`, `tabungan`, `kelompok_belajar`, `jenis_belajar`, `paud`, `umur`, `koperasi`, `jenis_koperasi`, `jenis_akseptor`, `volume`, `kali`, `created_at`, `updated_at`, `penghayatan`, `kerja_bakti`, `rukun_kematian`, `keagamaan`, `jumpitan`, `arisan`, `dll`, `ket_penghayatan`, `ket_kerja_bakti`, `ket_rukun_kematian`, `ket_keagamaan`, `ket_jumpitan`, `ket_arisan`, `ket_dll`) VALUES
(6, 'Melati', '5f437d7bae0d9', 'Rahmat Putra', 'KIKI PERMATA SARI', '1374017107950001', 'ssns', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Paket A', 'Tidak', '454', 'Tidak', 'ffgfgf', 'mkmkm', '0', '9', NULL, NULL, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'nnjn', 'test', 'nnun', 'nnjnj', 'jnjnjn', 'jnjnj', 'sdfghjkl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rekap_hamil`
--
ALTER TABLE `rekap_hamil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rekap_hamil_nama_suami_unique` (`nama_suami`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `warga_noreg_unique` (`noreg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` bigint(191) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rekap_hamil`
--
ALTER TABLE `rekap_hamil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
