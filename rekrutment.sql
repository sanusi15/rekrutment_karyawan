-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2024 pada 08.42
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.2.34

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
-- Struktur dari tabel `jawaban_pelamar`
--

CREATE TABLE `jawaban_pelamar` (
  `id_jawaban` int(11) NOT NULL,
  `id_pelamar` varchar(10) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `isi_jawaban` varchar(10) NOT NULL,
  `isi_keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jawaban_pelamar`
--

INSERT INTO `jawaban_pelamar` (`id_jawaban`, `id_pelamar`, `id_soal`, `isi_jawaban`, `isi_keterangan`) VALUES
(15, 'PL001', 1, 'iya', 'Alasan nya balabalal'),
(16, 'PL001', 3, 'tidak', 'Yayaa ini alasan'),
(17, 'PL002', 1, 'iya', 'dk kags kgasyk aksgkag akhkhkhk eyigj '),
(18, 'PL002', 3, 'iya', 'ags ye eyta ajytg wyjg ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loker`
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
-- Dumping data untuk tabel `loker`
--

INSERT INTO `loker` (`id_loker`, `posisi`, `jabatan`, `minimum_pendidikan`, `persyaratan`, `gaji`, `status`, `img`) VALUES
(1, 'Software Enginer', 'Staff', 'S1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos facilis vitae expedita sed officiis in tempora vero doloribus accusamus et?', '5.000.000 - 7.000.000', 'non aktif', 'loker6.jpg'),
(2, 'Web Developer', 'Manager', 'S1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos facilis vitae expedita sed officiis in tempora vero doloribus accusamus et?', '8.000.000 - 10.000.000', 'aktif', 'loker7.jpg'),
(3, 'HRD', 'Staff HRG', 'S2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', '5.000.000 - 7.000.000', 'aktif', 'loker5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelamar`
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
  `status_lamaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelamar`
--

INSERT INTO `pelamar` (`id_pelamar`, `tgl_lamar`, `nama_lengkap`, `no_ktp`, `email`, `tempat_lahir`, `tgl_lahir`, `gender`, `no_hp`, `status_kawin`, `kewarganegaraan`, `agama`, `no_npwp`, `alamat_asli`, `alamat_domisili`, `cv`, `foto`, `id_loker`, `status_lamaran`) VALUES
('PL001', '2024-01-15 15:55:37', 'Ahmad', '1229382839192903', 'ahmad@gmail.com', 'Lebak', '2001-01-01', 'lk', '08567876542', 'lajang', 'WNI', 'islam', '12312312312', 'Cipinang, Jatinegara, Jakarta Timur', 'Lebak-Banten', 'CV_PL001.jpg', 'foto_PL001.jpeg', 2, 'Proses Seleksi'),
('PL002', '2024-01-17 16:19:57', 'Lionel Messi', '2239352839192902', 'messi@gmail.com', 'Barcelona', '1996-02-20', 'lk', '08567876283', 'lajang', 'WNI', 'islam', '32312312312', 'Alamat nya sesuai KTP', 'Tempat tinggal sekaranh', 'CV_PL002.jpg', 'foto_PL002.jpeg', 1, 'Proses Seleksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayatkerja_pelamar`
--

CREATE TABLE `riwayatkerja_pelamar` (
  `id_pengalamankerja` int(11) NOT NULL,
  `id_pelamar` varchar(10) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `lama_kerja` varchar(10) NOT NULL,
  `alasan_berhenti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayatkerja_pelamar`
--

INSERT INTO `riwayatkerja_pelamar` (`id_pengalamankerja`, `id_pelamar`, `nama_perusahaan`, `posisi`, `lama_kerja`, `alasan_berhenti`) VALUES
(14, 'PL001', 'Pt. Bissmillahirrahmanirrahim', 'Manager', '3 Tahun', 'Gajinya Kecil'),
(15, 'PL001', 'Pt. Nusantara', 'Direktur', '2 Tahun', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `isi_soal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id_soal`, `isi_soal`) VALUES
(1, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam a obcaecati repudiandae assumenda quia temporibus iste deleniti quae iure nemo ea veniam, in voluptatibus laudantium, eum maxime sequi. Quidem.'),
(3, ' amet consectetur adipisicing elit. Aliquam a obcaecati repudiandae assumenda quia temporibus iste deleniti quae iure nemo ea veniam, in voluptatibus laudantium, eum maxime sequi. Quidem, fugiat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `id_pelamar` varchar(10) DEFAULT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `id_pelamar`, `level`) VALUES
(1, 'admin@gmail.com', '123', NULL, 1),
(6, 'staffhrd@gmail.com', '123', NULL, 2),
(7, 'pelamar01', '123', 'PL001', 3),
(8, 'messi123', '123', 'PL002', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jawaban_pelamar`
--
ALTER TABLE `jawaban_pelamar`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indeks untuk tabel `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id_loker`);

--
-- Indeks untuk tabel `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indeks untuk tabel `riwayatkerja_pelamar`
--
ALTER TABLE `riwayatkerja_pelamar`
  ADD PRIMARY KEY (`id_pengalamankerja`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jawaban_pelamar`
--
ALTER TABLE `jawaban_pelamar`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `loker`
--
ALTER TABLE `loker`
  MODIFY `id_loker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `riwayatkerja_pelamar`
--
ALTER TABLE `riwayatkerja_pelamar`
  MODIFY `id_pengalamankerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
