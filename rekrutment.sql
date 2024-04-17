-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2024 at 03:27 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekrutment`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawabanpg_pelamar`
--

CREATE TABLE `jawabanpg_pelamar` (
  `id_jawabanpg` int(11) NOT NULL,
  `id_pelamar` varchar(10) NOT NULL,
  `id_pg` varchar(10) NOT NULL,
  `jawaban_pg` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jawabanpg_pelamar`
--

INSERT INTO `jawabanpg_pelamar` (`id_jawabanpg`, `id_pelamar`, `id_pg`, `jawaban_pg`) VALUES
(3, 'PL002', 'PG001', 'C'),
(4, 'PL002', 'PG002', 'B'),
(5, 'PL002', 'PG003', 'A'),
(6, 'PL002', 'PG004', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_pelamar`
--

CREATE TABLE `jawaban_pelamar` (
  `id_jawaban` int(11) NOT NULL,
  `id_pelamar` varchar(10) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `isi_jawaban` varchar(10) NOT NULL,
  `isi_keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jawaban_pelamar`
--

INSERT INTO `jawaban_pelamar` (`id_jawaban`, `id_pelamar`, `id_soal`, `isi_jawaban`, `isi_keterangan`) VALUES
(21, 'PL001', 1, 'iya', 'Lorem ipsum doler is amet'),
(22, 'PL001', 3, 'tidak', 'amet consectretur adipisicing elit.'),
(23, 'PL002', 1, 'tidak', 'asd'),
(24, 'PL002', 3, 'tidak', 'sad');

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE `loker` (
  `id_loker` int(11) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `minimum_pendidikan` varchar(50) NOT NULL,
  `persyaratan` text NOT NULL,
  `gaji` varchar(50) NOT NULL,
  `status` enum('aktif','non aktif') NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`id_loker`, `posisi`, `jabatan`, `minimum_pendidikan`, `persyaratan`, `gaji`, `status`, `img`) VALUES
(4, 'Accounting', 'Staff', 'S1', 'asdasdasjkdkasdjk', '6000000-700000', 'aktif', 'loker8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `id_pelamar` varchar(20) NOT NULL,
  `tgl_lamar` timestamp NULL DEFAULT current_timestamp(),
  `nama_lengkap` varchar(50) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `status_kawin` varchar(10) NOT NULL,
  `kewarganegaraan` varchar(5) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `no_npwp` varchar(20) DEFAULT NULL,
  `alamat_asli` text NOT NULL,
  `alamat_domisili` text NOT NULL,
  `cv` text NOT NULL,
  `foto` text NOT NULL,
  `id_loker` int(11) NOT NULL,
  `status_lamaran` varchar(20) NOT NULL,
  `kir` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`id_pelamar`, `tgl_lamar`, `nama_lengkap`, `no_ktp`, `email`, `tempat_lahir`, `tgl_lahir`, `gender`, `no_hp`, `status_kawin`, `kewarganegaraan`, `agama`, `no_npwp`, `alamat_asli`, `alamat_domisili`, `cv`, `foto`, `id_loker`, `status_lamaran`, `kir`, `ktp`) VALUES
('PL001', '2024-04-10 18:43:31', 'Tes', '1234373636718', 'sopyan@gmail.com', 'Arab', '2023-03-10', 'pr', '08583918383', 'Menikah', 'WNA', 'kristen', '1212312121', 'Alamat sesuai k=KTP', 'Aalamat sesuai domisaili', 'CV_PL001.png', 'foto_PL001.png', 4, 'Proses Seleksi', 'kir_PL001.pdf', 'ktp_PL001.pdf'),
('PL002', '2024-04-10 19:16:54', 'Tes 2', '1234373636711', 'tessiswa@gmail.com', 'Cilegon', '2023-03-10', 'pr', '08583918383', 'Menikah', 'WNA', 'kristen', '1212312121', 'askjdak', ' askdhkhk', 'CV_PL002.png', 'foto_PL002.png', 4, 'Proses Seleksi', 'kir_PL002.pdf', 'ktp_PL002.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pg`
--

CREATE TABLE `pg` (
  `id_pg` varchar(10) NOT NULL,
  `soal_pg` varchar(255) NOT NULL,
  `a` varchar(255) NOT NULL,
  `b` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL,
  `d` varchar(255) NOT NULL,
  `kunci_jawaban` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pg`
--

INSERT INTO `pg` (`id_pg`, `soal_pg`, `a`, `b`, `c`, `d`, `kunci_jawaban`) VALUES
('PG001', 'Siapa nama bapak kamu?', 'Udin', 'Mahfud', 'Imin', 'Anis', 'C'),
('PG002', 'Kenapa jumlah hari ada 7?', 'Gatau', 'Karena anu', 'Hahaha', 'Nuhanianin nu', 'A'),
('PG003', 'Siapa penemu lampu?', 'Joko', 'Dino', 'Ayama', 'Hahaha', 'A'),
('PG004', 'Dimana letak rumah pak rt?', 'Di rumahnya', 'Di bawah tanah', 'Di mekkah', 'Di sini', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `riwayatkerja_pelamar`
--

CREATE TABLE `riwayatkerja_pelamar` (
  `id_pengalamankerja` int(11) NOT NULL,
  `id_pelamar` varchar(10) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `lama_kerja` varchar(10) NOT NULL,
  `alasan_berhenti` text NOT NULL,
  `sertifikat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayatkerja_pelamar`
--

INSERT INTO `riwayatkerja_pelamar` (`id_pengalamankerja`, `id_pelamar`, `nama_perusahaan`, `posisi`, `lama_kerja`, `alasan_berhenti`, `sertifikat`) VALUES
(32, 'PL001', 'Pt. Haha hihi', 'Direktur', '2 Tahun', 'Bosen', 'PL001-at-0Invoice-1708480363.pdf'),
(33, 'PL001', 'PT. Salawasna', 'Manager', '3 Tahun', 'Gabut', ''),
(34, 'PL001', 'PT. Perusahaan 3', 'Staff', '1 Tahun', 'Gaji Kecil', 'PL001-at-2Invoice-1708480363.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `isi_soal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `isi_soal`) VALUES
(1, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam a obcaecati repudiandae assumenda quia temporibus iste deleniti quae iure nemo ea veniam, in voluptatibus laudantium, eum maxime sequi. Quidem.'),
(3, ' amet consectetur adipisicing elit. Aliquam a obcaecati repudiandae assumenda quia temporibus iste deleniti quae iure nemo ea veniam, in voluptatibus laudantium, eum maxime sequi. Quidem, fugiat');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `id_pelamar` varchar(10) DEFAULT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `id_pelamar`, `level`) VALUES
(1, 'admin@gmail.com', '123', NULL, 1),
(6, 'staffhrd@gmail.com', '123', NULL, 2),
(19, 'tes12345', '12345678', 'PL001', 3),
(20, 'tes12341', '12345678', 'PL002', 3),
(21, 'santoso123', '12345678', 'PL002', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawabanpg_pelamar`
--
ALTER TABLE `jawabanpg_pelamar`
  ADD PRIMARY KEY (`id_jawabanpg`);

--
-- Indexes for table `jawaban_pelamar`
--
ALTER TABLE `jawaban_pelamar`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id_loker`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indexes for table `pg`
--
ALTER TABLE `pg`
  ADD PRIMARY KEY (`id_pg`);

--
-- Indexes for table `riwayatkerja_pelamar`
--
ALTER TABLE `riwayatkerja_pelamar`
  ADD PRIMARY KEY (`id_pengalamankerja`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawabanpg_pelamar`
--
ALTER TABLE `jawabanpg_pelamar`
  MODIFY `id_jawabanpg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jawaban_pelamar`
--
ALTER TABLE `jawaban_pelamar`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `loker`
--
ALTER TABLE `loker`
  MODIFY `id_loker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `riwayatkerja_pelamar`
--
ALTER TABLE `riwayatkerja_pelamar`
  MODIFY `id_pengalamankerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
