-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Apr 2018 pada 08.41
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga_service`
--

CREATE TABLE `harga_service` (
  `Kode_service` varchar(5) NOT NULL,
  `Jenis_service` varchar(20) NOT NULL,
  `Harga_service` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `harga_service`
--

INSERT INTO `harga_service` (`Kode_service`, `Jenis_service`, `Harga_service`) VALUES
('S1', 'Service Lengkap', 50000),
('S2', 'Service Berat', 70000),
('S3', 'Ganti Oli', 42000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(1) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(0, 'Admin'),
(1, 'Mekanik'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `Kode` varchar(5) NOT NULL,
  `Kode_service` varchar(5) NOT NULL,
  `Jenis_service` varchar(20) NOT NULL,
  `Tgl_service` date NOT NULL,
  `Harga_service` varchar(30) NOT NULL,
  `Kode_sparepart` varchar(5) NOT NULL,
  `Nama_sparepart` varchar(20) NOT NULL,
  `Harga_sparepart` int(20) NOT NULL,
  `Id_user` varchar(5) NOT NULL,
  `Nama_user` varchar(20) NOT NULL,
  `Nopol` varchar(10) NOT NULL,
  `Total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sparepart`
--

CREATE TABLE `sparepart` (
  `Kode_sparepart` varchar(5) NOT NULL,
  `Nama_sparepart` varchar(20) NOT NULL,
  `Harga_sparepart` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sparepart`
--

INSERT INTO `sparepart` (`Kode_sparepart`, `Nama_sparepart`, `Harga_sparepart`) VALUES
('S1', 'Spion', 25000),
('S2', 'Busi', 35000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Id_user` varchar(5) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `Nama_user` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Alamat` varchar(20) NOT NULL,
  `Jenis_kendaraan` varchar(20) NOT NULL,
  `Nopol` varchar(10) NOT NULL,
  `Telp` int(15) NOT NULL,
  `lvl_user` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Id_user`, `foto`, `Nama_user`, `Email`, `Password`, `Alamat`, `Jenis_kendaraan`, `Nopol`, `Telp`, `lvl_user`) VALUES
('34', '', 'riyard', '', '', 'Banyuwangi', 'CBR', 'P 4444 NM', 2147483647, 2),
('344', '', 'riyard', '', '', 'Banyuwangi', 'Beat', 'P 4444 NM', 2147483647, 0),
('347', '', 'Dyan', '', '', 'Lumajang', 'CB250R', 'N 1111 PP', 2147483647, 0),
('C1', '', 'Vini', '', '', 'Situbondo', 'Beat', 'P 6218 FD', 2147483647, 0),
('C2', '', 'Ikma', '', '', 'Lumajang', 'Vario', 'N 4532 DD', 2147483647, 0),
('C3', '', 'Nabuto', '', '', 'Banyuwangi', 'CBR', 'P 4444 NM', 2147483647, 0),
('C4', '', 'Riyard', '', '', 'Madura', 'CB250R', 'N 1111 PP', 2147483647, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harga_service`
--
ALTER TABLE `harga_service`
  ADD PRIMARY KEY (`Kode_service`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`Kode`),
  ADD KEY `Kode_service` (`Kode_service`),
  ADD KEY `Kode_sparepart` (`Kode_sparepart`),
  ADD KEY `Id_user` (`Id_user`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`Kode_sparepart`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_user`),
  ADD KEY `lvl_user` (`lvl_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
