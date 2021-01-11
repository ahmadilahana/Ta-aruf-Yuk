-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 07:39 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_taaruf`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_user` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(16) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_user`, `email`, `pass`, `nama`) VALUES
(1, 'ahmad@email.com', 'ahmad123', 'ahmad arif ilahana'),
(2, 'user@email.com', 'user123', 'user'),
(3, 'haka@email.com', '123', 'haka');

-- --------------------------------------------------------

--
-- Table structure for table `biodata_diri`
--

CREATE TABLE `biodata_diri` (
  `id_bio` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jns_kel` enum('L','P') NOT NULL,
  `tmp_lahir` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat_skr` text NOT NULL,
  `kota_skr` varchar(40) NOT NULL,
  `provinsi_skr` varchar(40) NOT NULL,
  `alamat_asl` text NOT NULL,
  `kota_asl` varchar(40) NOT NULL,
  `provinsi_asl` varchar(40) NOT NULL,
  `suku` varchar(40) NOT NULL,
  `gol_darah` enum('A','B','AB','O') NOT NULL,
  `nm_ayah` varchar(40) NOT NULL,
  `nm_ibu` varchar(40) NOT NULL,
  `stat_nikah` enum('perjaka','gadis','janda','duda') NOT NULL,
  `ket_nikah` enum('cerai','meninggal','') NOT NULL,
  `lam_surat` varchar(40) NOT NULL,
  `foto_ktp` varchar(40) NOT NULL,
  `no_hp` char(20) NOT NULL,
  `sosmed` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata_diri`
--

INSERT INTO `biodata_diri` (`id_bio`, `id_user`, `jns_kel`, `tmp_lahir`, `tgl_lahir`, `alamat_skr`, `kota_skr`, `provinsi_skr`, `alamat_asl`, `kota_asl`, `provinsi_asl`, `suku`, `gol_darah`, `nm_ayah`, `nm_ibu`, `stat_nikah`, `ket_nikah`, `lam_surat`, `foto_ktp`, `no_hp`, `sosmed`) VALUES
(1, 1, 'L', '', '0000-00-00', '', '', '', '', '', '', '', 'A', '', '', 'perjaka', '', '', '', '0', ''),
(2, 2, 'L', '', '0000-00-00', '', '', '', '', '', '', '', 'A', '', '', 'perjaka', '', '', '', '0', ''),
(3, 3, 'L', 'Semarang', '1999-05-01', 'Jl. Karang Rejo Utara dlm V no. 37, Srondol Wetan, Banyumanik', 'Semarang', 'Jawa Tengah', 'Jl. Karang Rejo Utara dlm V no. 37, Srondol Wetan, Banyumanik', 'Semarang', '', 'Jawa', 'B', 'ayah', 'ibu', 'perjaka', '', '', '', '081358942678', 'fb=ahmadilahaka\r\nig=ahmad.ilahaka77');

-- --------------------------------------------------------

--
-- Table structure for table `gm_diri`
--

CREATE TABLE `gm_diri` (
  `id_gm_diri` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `b_fisik` varchar(20) NOT NULL,
  `w_kulit` varchar(20) NOT NULL,
  `t_rambut` varchar(20) NOT NULL,
  `w_rambut` varchar(20) NOT NULL,
  `w_mata` varchar(20) NOT NULL,
  `c_fisik` varchar(20) NOT NULL,
  `t_badan` char(20) NOT NULL,
  `b_badan` char(20) NOT NULL,
  `s_tubuh` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gm_diri`
--

INSERT INTO `gm_diri` (`id_gm_diri`, `id_user`, `b_fisik`, `w_kulit`, `t_rambut`, `w_rambut`, `w_mata`, `c_fisik`, `t_badan`, `b_badan`, `s_tubuh`) VALUES
(1, 1, '', '', '', '', '', '', '', '', ''),
(2, 2, '', '', '', '', '', '', '', '', ''),
(3, 3, 'normal', 'sawo matang', 'bergelombang', 'hitam', 'hitam', 'tidak ada', '182', '70', 'tidak ada');

-- --------------------------------------------------------

--
-- Table structure for table `rw_pekerjaan`
--

CREATE TABLE `rw_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nm_perusahaan` varchar(40) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `periode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rw_pekerjaan`
--

INSERT INTO `rw_pekerjaan` (`id_pekerjaan`, `id_user`, `nm_perusahaan`, `jabatan`, `periode`) VALUES
(1, 3, 'pt indomaret semarang', 'kantor', '2020'),
(2, 3, 'pt pos indonesia', 'admin', '2020'),
(3, 3, 'pt telkomsel', 'junior meneger', '2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `biodata_diri`
--
ALTER TABLE `biodata_diri`
  ADD PRIMARY KEY (`id_bio`,`id_user`),
  ADD KEY `relasi_akun` (`id_user`);

--
-- Indexes for table `gm_diri`
--
ALTER TABLE `gm_diri`
  ADD PRIMARY KEY (`id_gm_diri`,`id_user`),
  ADD KEY `relasi_bio` (`id_user`) USING BTREE;

--
-- Indexes for table `rw_pekerjaan`
--
ALTER TABLE `rw_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`,`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biodata_diri`
--
ALTER TABLE `biodata_diri`
  ADD CONSTRAINT `relasi_akun` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_user`);

--
-- Constraints for table `gm_diri`
--
ALTER TABLE `gm_diri`
  ADD CONSTRAINT `relasi_bio` FOREIGN KEY (`id_user`) REFERENCES `biodata_diri` (`id_bio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
