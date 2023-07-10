-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 10:31 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_elip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` int(10) NOT NULL,
  `nid` varchar(30) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `role_id` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `nid`, `nama_dosen`, `tgl_lahir`, `alamat`, `no_hp`, `email`, `password`, `matkul`, `role_id`, `status`, `img`) VALUES
(2, '242422423', 'Deny vasanando', '2022-10-06', 'Brebes Bumiayu', '08232532525', 'deny@gmail.com', '$2y$10$msUVTRxeOt6nztePGHsipuTIrH20IrZABHEshyIAc7VWU9GbQ/RXO', 'pemograman web', 2, 1, 'user.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nim` int(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `semester` int(2) NOT NULL,
  `password` varchar(200) NOT NULL,
  `img` text NOT NULL,
  `status` int(1) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mhs`, `nama`, `nim`, `tgl_lahir`, `alamat`, `email`, `no_hp`, `semester`, `password`, `img`, `status`, `role_id`) VALUES
(1, 'Bagus Taqwillah', 2002135, '2001-10-12', 'danasari,kebagusan', 'bagus@gmail.com', '08232532525', 5, '$2y$10$0Al1AGP8Es9GoPU4lZpXTu/rlZRQXvZV//ZG5Q4lTmB0kWR.Iw612', 'bagus1.jpg', 1, 1),
(3, 'Angga', 2002136, '2022-10-13', ' Adiwerna', 'angga@gmail.com', '08232532525', 3, '$2y$10$PBhFRK4kmvnELpKAwGqKvuNYeMy8IIChfi44GyrERi.sNNaYt/CwC', 'Gubernur_DKI_Jokowi.jpg', 1, 1),
(4, 'Deny Vasanando', 2082323, '0000-00-00', '', '', '082328432509', 2, '$2y$10$umIdd18WdTXRhhObiwDfKu5S7spOKX76ZxoMFrMUZbYepmS616voO', 'default.jpg', 1, 1),
(6, 'Akhya', 2002135, '0000-00-00', '', 'akhya@gmail.com', '08232532525', 2, '$2y$10$PmDbmlk5A7kFMlXZROTQbeDJ37v7.ERFPdDL2DOIP32DKSPQ5ftI.', 'user.png', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_matkul`
--

CREATE TABLE `tb_matkul` (
  `id_mk` int(11) NOT NULL,
  `nama_mk` varchar(100) NOT NULL,
  `materi` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_matkul`
--

INSERT INTO `tb_matkul` (`id_mk`, `nama_mk`, `materi`, `deskripsi`) VALUES
(1, 'Technopreuner', 'silahkan baca buku ini', 'ini materi untuk semester 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mtugas`
--

CREATE TABLE `tb_mtugas` (
  `id_mtugas` int(11) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `semester` enum('1','2','3','4','5') NOT NULL,
  `file` text NOT NULL,
  `tgl_kirim` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `mk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mtugas`
--

INSERT INTO `tb_mtugas` (`id_mtugas`, `nama_mhs`, `kelas`, `semester`, `file`, `tgl_kirim`, `mk`) VALUES
(9, 'nandi', 'TI A 1', '1', 'img_panel2.png', '2022-10-20 13:53:59', 'algoritma');

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(100) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`id_role`, `nama_role`, `role_id`) VALUES
(1, 'mahasiswa', 1),
(2, 'dosen', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tugas`
--

CREATE TABLE `tb_tugas` (
  `id_tugas` int(11) NOT NULL,
  `nama_mk` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `lampiran` text NOT NULL,
  `semester` enum('1','2','3','4','5') NOT NULL,
  `tenggat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tugas`
--

INSERT INTO `tb_tugas` (`id_tugas`, `nama_mk`, `judul`, `deskripsi`, `lampiran`, `semester`, `tenggat`) VALUES
(19, 'algoritma', 'skema dasar', 'selesaikan kasus pemograman yang tersidia pada lampiran', '', '1', '2022-10-25 14:57:00'),
(21, 'algoritma', 'Jokowi presiden RI', 'cek', 'display.jpg', '1', '2022-10-25 16:52:00'),
(22, 'algoritma', 'skema dasar', 'selesaikan kasus pemograman yang tersidia pada lampiran', '', '1', '2022-10-26 14:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `identitas` varchar(50) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `img` varchar(50) NOT NULL,
  `role_id` int(1) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `identitas`, `tgl_lahir`, `alamat`, `email`, `no_hp`, `password`, `img`, `role_id`, `status`) VALUES
(1, 'Bagus Taqwillah', '78236478234', '2022-10-07', 'Danasari Tegal', 'bagus@gmail.com', '08232532525', '$2y$10$AALx4yVURzDnt74IQ3qQBepybADDBdPNf2ZDYaa.R238zcQ65q.k2', 'bagus2.jpg', 2, 1),
(2, 'Deny Vasanando', '2382973', '2022-10-13', 'Kota Tegal', 'deny@gmail.com', '082328432509', '$2y$10$xfbIWJye/4EdLRy.U998yOR8pDiGhVRjEGYdbdhc5BWaWDCKh00c.', 'logo_poltek1.png', 2, 1),
(3, 'Aris Muzaki', '09232324', '', '', 'aris@gmail.com', '', '$2y$10$RCvkHPFK6hSaUGJz5.5yReEB2gRRsY/6am6xF7LlAvFFBIfoI/b.2', 'user.png', 3, 1),
(4, 'salman', '294843', '', '', 'salman@gmail.com', '', '$2y$10$DiTPgp1QNaKYKQctkq0z2eWX9AgFHbVLq46y0lRvVhHVV9cZy0Acu', 'user.png', 1, 1),
(5, 'Dany', '202145', '', 'Tegal Jawa Tengah', 'dany@gmail.com', '0823534652', '$2y$10$U6MvhwoZma.jFgbbT8g.C.VPjoOSOYcSQpQqDxreokoh8/6yBbWPW', 'user.png', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  ADD PRIMARY KEY (`id_mk`);

--
-- Indexes for table `tb_mtugas`
--
ALTER TABLE `tb_mtugas`
  ADD PRIMARY KEY (`id_mtugas`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id_dosen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  MODIFY `id_mk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_mtugas`
--
ALTER TABLE `tb_mtugas`
  MODIFY `id_mtugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
