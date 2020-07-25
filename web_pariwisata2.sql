-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2020 pada 06.02
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_pariwisata2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `role` enum('admin','customer') NOT NULL DEFAULT 'customer',
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`, `username`, `full_name`, `role`, `last_login`) VALUES
(1, 'admin@gmail.com', '123456', 'admin', '', '', '2020-07-24 07:22:54'),
(2, 'admin02@gmail.com', '$2y$10$tonZkQrnGnp9n38rWeMTieLPNxtDfvy4Z/35Q4rlFObsm/xFnSae.', 'admin', 'yunus', 'admin', '2020-07-25 04:01:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `nama`, `deskripsi`) VALUES
(1, 'berita1', 'weheheheheh'),
(2, 'berita 2', 'sdfasdfasdfasdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akomodasi`
--

CREATE TABLE `tb_akomodasi` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_akomodasi`
--

INSERT INTO `tb_akomodasi` (`id`, `nama`, `alamat`, `image`, `harga`, `deskripsi`) VALUES
('5f1b77a509100', 'Warung Yu jan', 'Saptosari, Gunungkidul', '5f1b77a509100.jpg', 0, 'Enak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `waktu` date NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `nama`, `waktu`, `deskripsi`, `image`) VALUES
('5f1b8d2b28de6', 'Gelombang Pasang di Pantai Selatan', '2020-07-24', 'Ngeri Uy', '5f1b8d2b28de6.jpg'),
('5f1b8d5f05c18', 'Pencurian Sandal Jepit di Keroyok Masa', '2020-07-23', 'Ngeri Bet dah', '5f1b8d5f05c18.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_destinasi`
--

CREATE TABLE `tb_destinasi` (
  `id` varchar(255) NOT NULL,
  `destinasi` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_destinasi`
--

INSERT INTO `tb_destinasi` (`id`, `destinasi`, `alamat`, `deskripsi`, `image`) VALUES
('5f1b6d03244f3', 'Pantai Wohkudu', 'Saptosari, Gunungkidul', 'bagus cuy', '5f1b6d03244f3.jpg'),
('5f1b72006adfe', 'Pantai Nobaran', 'Saptosari, Gunungkidul', 'Bagus kok', '5f1b72006adfe.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_event`
--

CREATE TABLE `tb_event` (
  `id` varchar(255) NOT NULL,
  `event` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_event`
--

INSERT INTO `tb_event` (`id`, `event`, `alamat`, `image`, `deskripsi`) VALUES
('5', 'yuhu', 'yuhu', '5f1ae02c5aaa3.jpg', 'ok'),
('5f1ae13351900', 'aya', 'aya', '5f1ae13351900.jpg', 'aya'),
('5f1aeff6a6d20', 'uy', 'uy', 'default.jpg', 'uy'),
('5f1af032dc304', 'r', 'r', '5f1af032dc304.jpg', 'r'),
('5f1afab5b56f7', 'asik asik asik', 'asik asik asik', '5f1afab5b56f7.jpg', 'asik asik jos joj asik asik asik asik asik asikasik asik asikasik asik asikasik asik asik'),
('5f1b6a8e92a14', 'adsadasas', 'Saptosari, Gunungkidul', '5f1b6a8e92a14.JPG', 'asdasd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `waktu` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_galeri`
--

INSERT INTO `tb_galeri` (`id`, `nama`, `waktu`, `image`) VALUES
('5f1b8f6de37d2', 'Lomba Makan Krupuk', '2020-07-16', '5f1b8f6de37d2.jpg'),
('5f1b8f879aa94', 'Lomba Lari Dari Kenyataan', '2020-07-23', '5f1b8f879aa94.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `waktu` date NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_informasi`
--

INSERT INTO `tb_informasi` (`id`, `nama`, `waktu`, `deskripsi`, `image`) VALUES
('5f1b89333c925', 'Perbaikan Gedung', '2020-07-25', 'OK', '5f1b89333c925.jpg'),
('5f1b895103e71', 'Karnaval', '2020-07-24', 'OK', '5f1b895103e71.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_akomodasi`
--
ALTER TABLE `tb_akomodasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_destinasi`
--
ALTER TABLE `tb_destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
