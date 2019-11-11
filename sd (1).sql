-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2019 at 02:15 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sd`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(128) NOT NULL,
  `nama_mapel` varchar(128) NOT NULL,
  `hari` varchar(128) NOT NULL,
  `jam_mulai` varchar(128) NOT NULL,
  `jam_selesai` varchar(128) NOT NULL,
  `nama_guru` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `nama_kelas`, `nama_mapel`, `hari`, `jam_mulai`, `jam_selesai`, `nama_guru`) VALUES
(1, '1', 'matematika', 'senin', '07.00-10.00', '', 'Unang Somantri'),
(2, '1', 'Bahasa Indonesia', 'Senin', '11:11', '', 'test'),
(3, '2', 'Matematika', 'Rabu', '11:11', '', 'unang somantri'),
(4, '1', 'Bahasa Indonesia', 'Senin', '14:22', '14:25', 'hani'),
(5, '1', 'Bahasa Indonesia', 'Senin', '02:04', '14:14', 'hani');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `nama_kelas` varchar(128) NOT NULL,
  `nama_wali` varchar(128) NOT NULL,
  `jumlah_siswa` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`nama_kelas`, `nama_wali`, `jumlah_siswa`) VALUES
('1', '', 3),
('2', '', 3),
('3', '', 3),
('4', '', 3),
('5', '', 3),
('6', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `nis` int(11) NOT NULL,
  `mapel` varchar(128) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `nama`, `kelas`, `nis`, `mapel`, `nilai`) VALUES
(19, 'trisakti', '1', 19980501, 'Matematika', 100),
(20, 'trisakti', '1', 19980501, 'Ilmu Pengetahuan Alam', 100),
(21, 'dwdw', '1', 484, 'Matematika', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `kode_tugas` varchar(128) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `mapel` varchar(256) NOT NULL,
  `guru` varchar(256) NOT NULL,
  `status` varchar(128) NOT NULL,
  `waktu_pengumpulan` date NOT NULL,
  `deskripsi` text NOT NULL,
  `file` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `kode_tugas`, `kelas`, `mapel`, `guru`, `status`, `waktu_pengumpulan`, `deskripsi`, `file`) VALUES
(1, '02', '3', 'Matematika', 'unang somantri', 'tidak aktif', '0000-00-00', '', ''),
(2, 'ulangan harian ', '5', 'Bahasa Indonesia', 'hani', 'tidak aktif', '0000-00-00', '', ''),
(3, 'ujian', '6', 'Bahasa Inggris', 'guru', 'aktif', '2019-06-19', 'ujian tertulis', ''),
(4, 'ujian', '4', 'Bahasa Inggris', 'guru', 'aktif', '2019-09-17', 'cek upload file', 'C:\\Users\\denyt\\Documents\\1173049-Deny_Trisakti.docx'),
(5, 'ulangan harian 2', '6', 'Matematika', 'guru', 'aktif', '2019-06-17', 'cek lokasi upload file', 'C:\\Users\\denyt\\Documents\\MAKALAH PENGENALAN JAVASCRIPT.docx'),
(6, 'ulangan harian 3', '5', 'Seni Budaya', 'unang somantri', 'aktif', '2022-08-17', 'uji tempat upload', 'C:\\Users\\denyt\\Documents\\tugas oracle 2.docx'),
(7, 'cek', '1', 'Bahasa Indonesia', 'hani', 'aktif', '2019-05-29', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nis` int(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `kelas` varchar(11) NOT NULL,
  `mapel` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `nis`, `image`, `password`, `role_id`, `kelas`, `mapel`, `is_active`, `date_created`) VALUES
(1, 'deny trisakti', 'denytrisakti@merahputih.id', 0, 'default.jpg', '$2y$10$SaIE/xjQ8KnXRFHXBFt3.OtnnGV4ZhivpCgHwhL8JZ2Hy82Z5.lzS', 1, '', '', 1, 1556476509),
(5, 'deny trisakti', 'deny@poltek.com', 0, 'default.jpg', '$2y$10$Eel.TkpdEXddX1dV7R.ng.Cw2q9y1iH4ioA8MTtsxhVO9ul6qnQEO', 1, '', '', 1, 1556613900),
(9, 'Zoro', 'test1@test.com', 117304999, 'default.jpg', '$2y$10$oX.26J9NiSUc58EBIUoTNO4Y0hWI9.LNnE23ZvWUjplYof/mL4cnm', 2, '3', '', 1, 1556750068),
(16, 'hani', 'hani@gmail.com', 997312, 'default.jpg', '$2y$10$ugqWmpTSU.jszZ/LrhSn0OVubFK9TAk8PAru7GLjjKzj7NnHreb8S', 3, '', 'Bahasa Sunda', 1, 1556807655),
(17, 'Deny Trisakti', 'Denytrisakti@yahoo.co.id', 11730049, 'default.jpg', '$2y$10$M9TvSmCa3s.DaakbeU/7F.92Ef8lGc/9/upjjkz.BfsdYk1yV0rV.', 2, '6', '', 1, 1556812056),
(19, 'trisakti', 'denytrisakti@merahputih.ac', 19980501, 'default.jpg', '$2y$10$KCaci1dT5gch4WUWWC0/UuqDtklUoPnAgndSvbkNhnsgoFakWuqO2', 2, '1', '', 1, 1556812614),
(20, 'surya', 'surya@gmail.com', 1173003, 'default.jpg', '$2y$10$rKZuhiI.HIDESTH9zVepw.eLA7C4UdzE9F.N3bDA8nmapcuuCxn.m', 2, '4', '', 1, 1556942488),
(21, 'irvan', 'irvan@poltek.com', 1173050, 'default.jpg', '$2y$10$RPQEhmL6YsXfPtK1NmhyW.d83gx/KXQJ7cg7N6SqahchLT/njR84e', 2, '2', '', 1, 1557898325),
(22, 'patrick', 'patrick@poltek.com', 773912, 'default.jpg', '$2y$10$rUQQ.XWsAbKSyMZHLmk6DOz0D22q6FI0dVPMJsRCqB434RHESiCeC', 2, '5', '', 1, 1557898414),
(23, 'unang somantri', 'unang@sman3.com', 2147483647, 'default.jpg', '$2y$10$FQV.V42CgfzoV.m6yvPEN.1Qi0MDJSG5bO6Q9GPtnPrWbW5rEwIKK', 3, '', 'Matematika', 1, 1558013213),
(24, 'yoga', 'togar@gmail.com', 116049, 'default.jpg', '$2y$10$/sPDN9QsGOzef3XG.E4B2OZxja8v9nNyUAHjqOf87CgK8iKcJCyC2', 2, '6', '', 1, 1558774914),
(25, 'siswa', 'siswa@test.com', 123456, 'default.jpg', '$2y$10$AZfsha6dowFn8oEwgzxdJ.PHqALAc1nbIHJNBYKVwihd0IWV0hF6G', 2, '3', '', 1, 1559373439),
(26, 'guru', 'guru@test.com', 12345678, 'default.jpg', '$2y$10$8dzmnxRGE0skIlGs.Svi1u/jp86x3ZzRTuItyEPIBJ1bvdgfVl7xa', 3, '', 'Matematika', 1, 1559373533),
(27, 'jom', 'jom@yahoo.com', 99762, 'default.jpg', '$2y$10$cZTWCggvsfthMBRpiuITheVjfevTQAUaLuHshzc/sSpQbLQbWNFmi', 2, '6', '', 1, 1559510148),
(36, 'dwdw', 'dwdada@fe.com', 484, 'default.jpg', '$2y$10$0LEbeVDf/LpNFBtYPrVLJOGVJTPIWokPlg2awJ2IzvZNq7Qi5BadK', 2, '1', '', 1, 1559510617),
(38, 'jdlwad', 'fdjdiw@wd.com', 482165, 'default.jpg', '$2y$10$JZCnPo0IB5yqjS0yFTNOSei6Z3Jo9w5gbKss3r54X/GPoCrwzA39S', 2, '6', '', 1, 1559511644),
(40, 'akkasi', 'dwaduh@fwd.com', 1548, 'default.jpg', '$2y$10$UPW6a/jRjpv/G3mwZpHbq.dduEKmERV3Hkkq4lMRGccrhrov6pxAG', 2, '5', '', 1, 1559512165),
(41, 'assa', 'dwadwad@ge.com', 524524, 'default.jpg', '$2y$10$.4UJUk9ttE6t81LqMH2ZducnCvH2Npru5sRhDO4qH7m9OS8O1qC1W', 2, '4', '', 1, 1559512204),
(43, 'awdasd', 'dasdba@fe.com', 83812, 'default.jpg', '$2y$10$V7kyzr4/c58PgQYvp981AOI.w4eoc3tIKjNj3FPYyuTeY9iM2m8u6', 2, '3', '', 1, 1559529797);

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `tambahjumlah` AFTER INSERT ON `user` FOR EACH ROW BEGIN
    UPDATE kelas
    SET jumlah_siswa = jumlah_siswa + 1
    WHERE nama_kelas = kelas;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'siswa'),
(3, 'guru');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `judul`, `url`) VALUES
(1, 1, 'dashboard', 'admin'),
(2, 2, 'Profil', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`nama_kelas`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
