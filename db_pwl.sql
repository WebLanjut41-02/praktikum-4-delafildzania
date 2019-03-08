-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2019 pada 05.19
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pwl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelamar`
--

CREATE TABLE `tb_pelamar` (
  `id_pelamar` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan` enum('Diploma','Sarjana','Magister','Doktor') NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelamar`
--

INSERT INTO `tb_pelamar` (`id_pelamar`, `nama`, `ktp`, `jk`, `nohp`, `email`, `alamat`, `pendidikan`, `jurusan`) VALUES
(1, 'Devi Fildzania', '6701171052', 'perempuan', '082331516908', 'delafildzania76@gmail.com', 'Mangga Dua', 'Diploma', 'Sistem Informasi'),
(2, 'Dyah Ayu', '6701171053', 'perempuan', '0822222211', 'dyahayu@gmail.com', 'Adhyaksa', 'Diploma', 'Sistem Informasi'),
(3, 'Firda Amalia', '6701171054', 'perempuan', '0833333333', 'firdamalia@gmail.com', 'Dayeuhkolot', 'Diploma', 'Sistem Informasi'),
(4, 'Nining Parwati', '6701171055', 'laki-laki', '0812345678', 'niningparwati@gmail.com', 'Banyumas', 'Diploma', 'Sistem Informasi'),
(5, 'elisa', '6701171056', 'perempuan', '082331223', 'el@gmail.com', 'jogja', 'Diploma', 'Sistem Informasi'),
(6, 'sri', '6701171057', 'perempuan', '082331224', 'sr@gmail.com', 'jogja', 'Diploma', 'Sistem Informasi'),
(7, 'dania', '6701171058', 'perempuan', '082331225', 'dan@gmail.com', 'jogja', 'Diploma', 'Sistem Informasi'),
(8, 'desi', '6701171059', 'perempuan', '082331226', 'des@gmail.com', 'jogja', 'Diploma', 'Sistem Informasi'),
(9, 'fitri', '6701171050', 'perempuan', '082331227', 'fir@gmail.com', 'jogja', 'Diploma', 'Sistem Informasi'),
(10, 'dela', '6701171060', 'perempuan', '082331228', 'del@gmail.com', 'jogja', 'Diploma', 'Sistem Informasi'),
(11, 'ayas', '6701171061', 'perempuan', '0833333322', 'ayas@gmail.com', 'Dayeuhkolot', 'Diploma', 'Sistem Informasi'),
(12, 'martya', '6701171062', 'perempuan', '0833333399', 'martya@gmail.com', 'Adhyaksa', 'Diploma', 'Sistem Informasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pelamar`
--
ALTER TABLE `tb_pelamar`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pelamar`
--
ALTER TABLE `tb_pelamar`
  MODIFY `id_pelamar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
