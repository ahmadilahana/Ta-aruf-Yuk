-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 21, 2021 at 07:16 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `nama` varchar(40) NOT NULL,
  `stat` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_user`, `email`, `pass`, `nama`, `stat`) VALUES
(1, 'ahmad@email.com', 'ahmad123', 'ahmad arif ilahana', NULL),
(2, 'user@email.com', 'user123', 'user', NULL),
(3, 'haka@email.com', '123', 'haka', NULL),
(4, 'saya@tampan.com', '123123123', 'Saya Tampan', NULL),
(5, 'awsd@awsd.com', 'awsd123', 'awsd', NULL),
(6, 'gemganteng@hanamail.com', 'cintaitubuta', 'Gema Masse Cipta', NULL),
(7, 'ahmadfadhilah000@gmail.com', 'bambang123', 'Bambang Mulyadi', NULL),
(8, 'musaqif@gmail.com', '123456', 'musaqif', NULL),
(9, 'telomoyo@imaco.com', 'terryiop', 'Joseph Kala', NULL),
(10, 'dodi@hanamail.com', '123456', 'aisyah', NULL),
(11, 'qweqw@qweqwe.com', 'qweqweqwe', 'Siti', NULL),
(12, 'faishalstm23@gmail.com', 'SEMPAKjebol238', 'Muhammad Faishal Afandy', NULL),
(13, 'siti@email.com', 'siti123', 'siti', NULL),
(14, 'tiothebook@gmail.com', 'tioganteng', 'Dwitio Ahmad Pranoto', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `biodata_diri`
--

CREATE TABLE `biodata_diri` (
  `id_bio` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jns_kel` enum('L','P') DEFAULT NULL,
  `tmp_lahir` varchar(40) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat_skr` text DEFAULT NULL,
  `kota_skr` varchar(40) DEFAULT NULL,
  `provinsi_skr` varchar(40) DEFAULT NULL,
  `alamat_asl` text DEFAULT NULL,
  `kota_asl` varchar(40) DEFAULT NULL,
  `provinsi_asl` varchar(40) DEFAULT NULL,
  `suku` varchar(40) DEFAULT NULL,
  `gol_darah` enum('A','B','AB','O','') DEFAULT NULL,
  `nm_ayah` varchar(40) DEFAULT NULL,
  `nm_ibu` varchar(40) DEFAULT NULL,
  `stat_nikah` enum('perjaka','gadis','janda','duda','') DEFAULT NULL,
  `ket_nikah` enum('cerai','meninggal','') DEFAULT NULL,
  `lam_surat` varchar(40) DEFAULT NULL,
  `foto_ktp` varchar(40) DEFAULT NULL,
  `no_hp` char(20) DEFAULT NULL,
  `sosmed` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata_diri`
--

INSERT INTO `biodata_diri` (`id_bio`, `id_user`, `jns_kel`, `tmp_lahir`, `tgl_lahir`, `alamat_skr`, `kota_skr`, `provinsi_skr`, `alamat_asl`, `kota_asl`, `provinsi_asl`, `suku`, `gol_darah`, `nm_ayah`, `nm_ibu`, `stat_nikah`, `ket_nikah`, `lam_surat`, `foto_ktp`, `no_hp`, `sosmed`) VALUES
(1, 1, 'L', 'Semarang', '2000-02-01', 'Jl Sekar Suli', 'Jakarta', 'DKI Jakarta', 'Jl Srondol', 'Semarang', '', 'Jawa', 'AB', 'Bambang', 'Siti', 'perjaka', '', '', '', '0', 'Facebook = ilahana\r\nInstagram = ilahana'),
(2, 2, 'P', 'Denpasar', '1999-12-02', 'Jl. Kehidupan Indah', 'Denpasar', 'Bali', 'Jl. Kehidupan Indah', 'Denpasar', '', 'Bali', 'A', 'Asep', 'Mimin', 'gadis', '', '', '', '0', 'Facebook = userku'),
(3, 3, 'L', 'Semarang', '1999-05-01', 'Jl. Karang Rejo Utara dlm V no. 37, Srondol Wetan, Banyumanik', 'Semarang', 'Jawa Tengah', 'Jl. Karang Rejo Utara dlm V no. 37, Srondol Wetan, Banyumanik', 'Semarang', '', 'Jawa', 'B', 'ayah', 'ibu', 'perjaka', '', '', '', '081358942678', 'fb=ahmadilahaka\r\nig=ahmad.ilahaka77'),
(4, 4, 'L', 'Cilacap', '2020-02-02', 'Jl. Kewarasan', 'Cilacap', 'Jawa Tengah', 'Jl. Kemerdekaan', 'Cilacap', 'Jawa Tengah', 'Ngapak', 'B', 'Joko', 'Jiki', 'perjaka', NULL, '', '', '', ''),
(5, 5, 'P', 'Lamongan', '2020-02-02', 'Jl. Sehat', 'Lamongan', 'Jawa Timur', 'Jl. Sehat', 'Lamongan', '', 'Jawa', 'AB', 'Bambangku', 'Sitiku', 'gadis', NULL, '', '', '', ''),
(6, 6, 'L', 'Jogja', '2020-02-02', 'Jl. Slamet', 'Jogja', 'Yogyakarta', 'Jl. Slamet', 'Jogja', 'Yogyakarta', 'Jawa', 'A', 'Jhoni', 'Sulis', 'perjaka', NULL, '', '', '', ''),
(7, 7, 'L', 'Bandung', '2020-02-02', 'Jl Sudirman Bandung', 'Bandung', 'Jawa Barat', '', '', '', '', '', '', '', '', NULL, '', '', '', ''),
(8, 8, 'L', NULL, '2020-02-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 9, 'L', NULL, '2020-02-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 10, 'P', NULL, '2020-02-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 11, 'P', NULL, '2020-02-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 12, 'L', NULL, '2020-02-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 13, 'P', NULL, '2020-02-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 14, 'L', NULL, '2001-08-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gm_diri`
--

CREATE TABLE `gm_diri` (
  `id_gm_diri` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `b_fisik` varchar(20) DEFAULT NULL,
  `w_kulit` varchar(20) DEFAULT NULL,
  `t_rambut` varchar(20) DEFAULT NULL,
  `w_rambut` varchar(20) DEFAULT NULL,
  `w_mata` varchar(20) DEFAULT NULL,
  `c_fisik` varchar(20) DEFAULT NULL,
  `t_badan` char(20) DEFAULT NULL,
  `b_badan` char(20) DEFAULT NULL,
  `s_tubuh` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gm_diri`
--

INSERT INTO `gm_diri` (`id_gm_diri`, `id_user`, `b_fisik`, `w_kulit`, `t_rambut`, `w_rambut`, `w_mata`, `c_fisik`, `t_badan`, `b_badan`, `s_tubuh`) VALUES
(1, 1, 'normal', 'Putih', 'Hitam', 'Hitam', 'Hitam', 'Tidak Ada', '180', '70', 'tidak ada'),
(2, 2, 'normal', 'Hitam', 'Merah', 'Pink', 'Hijau', 'Tidak Ada', '170', '70', 'tato'),
(3, 3, 'normal', 'Putih', 'bergelombang', 'hitam', 'hitam', 'tidak ada', '182', '70', 'tidak ada'),
(4, 4, 'normal', 'Putih', 'Kriting', 'Hitam', 'Hitam', 'Tidak Ada', '170', '70', 'anting'),
(5, 5, 'normal', 'Putih', 'Lurus', 'Hitam', 'Hitam', '', '180', '70', 'tato'),
(6, 6, 'normal', 'Putih', 'Kriting', 'Hitam', 'Hitam', 'Tidak Ada', '170', '70', 'tato'),
(7, 7, 'kurus', 'Hitam', 'Kriting', 'Hitam', 'Hitam', 'Kurang tampan', '120', '10', 'tato'),
(8, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `minat`
--

CREATE TABLE `minat` (
  `id_minat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `hobi` text DEFAULT NULL,
  `film` text DEFAULT NULL,
  `buku` text DEFAULT NULL,
  `musik` text DEFAULT NULL,
  `olahraga` text DEFAULT NULL,
  `jawab1` text DEFAULT NULL,
  `jawab2` text DEFAULT NULL,
  `jawab3` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minat`
--

INSERT INTO `minat` (`id_minat`, `id_user`, `hobi`, `film`, `buku`, `musik`, `olahraga`, `jawab1`, `jawab2`, `jawab3`) VALUES
(1, 1, 'main game', 'anime', 'novel', 'rock', 'futsal', 'bermain dengan teman', 'jujur dan berwibawa', 'didalam rumah suka tidur diluar suka main'),
(2, 2, 'main game', 'horor', 'novel cinta', 'pop', 'lari', 'lari-lari', 'suka bermain musik dengan kaki', 'bangun tidur ku terus mandi tidak lupa menggosok gigi'),
(3, 3, 'menonton film, bermain game, membuat program', 'anime dan film barat', 'laskar pelangi', 'one ok rock', 'tidak ada', 'bermain game sama teman', 'jujur, bijaksana, berwibawa', 'didalam  tidur diluar tidur'),
(4, 4, 'main hp', 'film aksi', 'komik', 'rock dan pop', 'bulutangkis', 'main-main dengan teman', 'suka main', 'dirumah main diluar juga main'),
(5, 5, 'tidur dan rebahan', 'film horor', 'buku pelajaran', 'metal', 'senam', 'rebahan dari pagi sampai sore', 'jujur apa adanya', 'dirumah suka rebahan gak pernah main keluar'),
(6, 6, 'tidur', 'simple', 'komik', 'jepang', '-', 'tidur sampai menemukan kegiatan', 'tidur aja sampai menemukan tujuan', 'dirumah gak pernah pergi fokus tidur'),
(7, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(1, 3, 'Pondok IT', 'Santri', '2020'),
(2, 3, 'Pondok IT', 'Ketua pengurus', '2021'),
(3, 1, 'PT. Pembangunan', 'Kepala Bagian', '2023-Sekarang'),
(4, 2, 'PT Bangun', 'Kuli', '2006-sekarang'),
(5, 4, 'Pt Sri Rejeki', 'Pencari nasib', '2000-sekarang'),
(6, 5, 'Rs Sehat', 'OB', '2020-sekarang'),
(7, 6, 'Rumah', 'Kuli', '2010-sekarang');

-- --------------------------------------------------------

--
-- Table structure for table `rw_pendidikan`
--

CREATE TABLE `rw_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nm_sekolah` varchar(40) NOT NULL,
  `jurusan` varchar(40) NOT NULL,
  `th_ajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rw_pendidikan`
--

INSERT INTO `rw_pendidikan` (`id_pendidikan`, `id_user`, `nm_sekolah`, `jurusan`, `th_ajaran`) VALUES
(1, 3, 'Politeknik Negeri Bandung', 'D2-Teknik Informatika', '2019-2020'),
(2, 3, 'SMK Darul Amannah', 'Teknik Komputer dan Jaringan', '2014-2016'),
(3, 1, 'SD Semesta', '-', '2004-2010'),
(4, 1, 'SMP Semesta', '-', '2011-2013'),
(5, 1, 'SMA Semesta', 'IPA', '2014-2018'),
(6, 1, 'Universitas Semesta', 'Teknik Informatika', '2019-2023'),
(7, 2, 'SD Harum', '-', '2000-2006'),
(8, 4, 'SD Sumber Rejeki', '', '2000-2006'),
(9, 5, 'SD Sehat', '', '2010-2016'),
(10, 5, 'SMP Sehat', '', '2016-2019'),
(11, 6, 'TK Bakti', '', '2020');

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
-- Indexes for table `minat`
--
ALTER TABLE `minat`
  ADD PRIMARY KEY (`id_minat`,`id_user`);

--
-- Indexes for table `rw_pekerjaan`
--
ALTER TABLE `rw_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`,`id_user`);

--
-- Indexes for table `rw_pendidikan`
--
ALTER TABLE `rw_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`,`id_user`);

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
