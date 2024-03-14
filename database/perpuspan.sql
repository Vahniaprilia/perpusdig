-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Mar 2024 pada 18.25
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpuspan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `IDbuku` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahunterbit` int(11) NOT NULL,
  `foto` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`IDbuku`, `judul`, `penulis`, `penerbit`, `tahunterbit`, `foto`) VALUES
(1, 'Hilmy Milann', 'Nadia Ristivani', 'Gramedia', 2020, 'hilmy.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoribuku`
--

CREATE TABLE `kategoribuku` (
  `IDkategori` int(11) NOT NULL,
  `namakategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoribuku_relasi`
--

CREATE TABLE `kategoribuku_relasi` (
  `id` int(11) NOT NULL,
  `IDkategoribuku` int(11) NOT NULL,
  `IDbuku` int(11) NOT NULL,
  `IDkategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `koleksipribadi`
--

CREATE TABLE `koleksipribadi` (
  `id` int(11) NOT NULL,
  `IDkoleksi` int(11) NOT NULL,
  `IDuser` int(11) NOT NULL,
  `IDbuku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `IDpeminjaman` int(11) NOT NULL,
  `IDuser` int(11) NOT NULL,
  `IDbuku` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tglpeminjaman` date NOT NULL,
  `tglpengembalian` date NOT NULL,
  `statuspeminjaman` enum('dipinjam','diproses','dikembalikan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`IDpeminjaman`, `IDuser`, `IDbuku`, `nama`, `tglpeminjaman`, `tglpengembalian`, `statuspeminjaman`) VALUES
(1, 1, 1, 'Jenrina', '2024-03-08', '2024-03-15', 'dipinjam'),
(2, 3, 2, 'kiwiyuwa', '2024-03-21', '2024-03-28', 'dipinjam'),
(13, 2, 1, 'kongsi', '2024-03-14', '2024-03-21', 'dipinjam'),
(15, 2, 0, 'namin', '2024-04-05', '2024-04-12', 'dipinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasanbuku`
--

CREATE TABLE `ulasanbuku` (
  `IDulasan` int(11) NOT NULL,
  `IDuser` int(11) NOT NULL,
  `IDbuku` int(11) NOT NULL,
  `ulasan` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `IDuser` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `level` enum('admin','petugas','peminjam') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`IDuser`, `username`, `password`, `email`, `namalengkap`, `alamat`, `level`) VALUES
(1, 'jenrina', '1234', 'jenrina@gmail.com', 'jenrina aulia', 'Seoul, Korea Selatan', 'peminjam'),
(2, 'karinjaa', '1234', 'pani@gmail.com', 'karinaaja', 'Busan ', 'admin'),
(4, 'jaeminn', '9090', 'jemin@gmail.com', 'Jemina', 'Bekasi', 'petugas'),
(5, 'terwin', '6789', 'tu@gmail.com', 'Winter', 'Busan ', 'peminjam'),
(6, 'jaemine', '6789', 'jeno@gmail.com', 'Jenolee', 'beijing', 'peminjam');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`IDbuku`);

--
-- Indeks untuk tabel `kategoribuku`
--
ALTER TABLE `kategoribuku`
  ADD PRIMARY KEY (`IDkategori`);

--
-- Indeks untuk tabel `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDkategoribuku` (`IDkategoribuku`),
  ADD KEY `IDbuku` (`IDbuku`),
  ADD KEY `IDkategori` (`IDkategori`);

--
-- Indeks untuk tabel `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDkoleksi` (`IDkoleksi`),
  ADD KEY `IDuser` (`IDuser`),
  ADD KEY `IDbuku` (`IDbuku`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`IDpeminjaman`),
  ADD KEY `IDuser` (`IDuser`),
  ADD KEY `IDbuku` (`IDbuku`);

--
-- Indeks untuk tabel `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD PRIMARY KEY (`IDulasan`),
  ADD KEY `IDuser` (`IDuser`),
  ADD KEY `IDbuku` (`IDbuku`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDuser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `IDbuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `IDpeminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  MODIFY `IDulasan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `IDuser` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
