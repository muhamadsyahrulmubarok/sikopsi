-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jul 2020 pada 16.12
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sikopsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `nama_admin` varchar(64) NOT NULL,
  `username_admin` varchar(64) NOT NULL,
  `pswd_admin` varchar(64) NOT NULL,
  `lvl_admin` varchar(1) NOT NULL,
  `img_admin` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username_admin`, `pswd_admin`, `lvl_admin`, `img_admin`) VALUES
(4, 'Administrator', 'adminku', '$2y$10$1mmp4qxzsK9O9dGfDfHx9.foIzUmViKmcCS7gZ3aXglS3qbq9fo/S', '1', 'adminku.png'),
(12, 'Syahrul Mubarok', 'syahrul', '$2y$10$YBZ.JqMfZmrKNOPCgk424OHKV49Gy/W9J/iaAgr7tA4jkKPpBnAVW', '2', 'default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(128) NOT NULL,
  `alamat_anggota` varchar(512) NOT NULL,
  `rt_anggota` varchar(4) NOT NULL,
  `rw_anggota` varchar(4) NOT NULL,
  `desa_anggota` varchar(64) NOT NULL,
  `kec_anggota` varchar(64) NOT NULL,
  `kab_anggota` varchar(64) NOT NULL,
  `prov_anggota` varchar(64) NOT NULL,
  `nohp_anggota` varchar(14) NOT NULL,
  `usaha_anggota` varchar(64) NOT NULL,
  `kd_resort` varchar(2) NOT NULL,
  `id_hari` int(2) NOT NULL,
  `id_admin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `alamat_anggota`, `rt_anggota`, `rw_anggota`, `desa_anggota`, `kec_anggota`, `kab_anggota`, `prov_anggota`, `nohp_anggota`, `usaha_anggota`, `kd_resort`, `id_hari`, `id_admin`) VALUES
(10, 'Syahrul Mubarok', 'Pengawinan', '24', '05', 'tembok luwung', 'adiwerna', 'tegal', 'jawa tengah', '0822892712', 'Freelancer', 'C', 2, 4),
(11, 'Ari Setiawan', 'slawi', '02', '02', 'slawi', 'slawi', 'tegal', 'jateng', '0820802', 'videografi', 'E', 3, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `angsuran`
--

CREATE TABLE `angsuran` (
  `id_angsuran` int(11) NOT NULL,
  `tgl_angsuran` date NOT NULL,
  `angsuran_ke` varchar(4) NOT NULL,
  `nominal_angsuran` int(12) NOT NULL,
  `id_admin` int(2) NOT NULL,
  `no_peminjaman` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `angsuran`
--

INSERT INTO `angsuran` (`id_angsuran`, `tgl_angsuran`, `angsuran_ke`, `nominal_angsuran`, `id_admin`, `no_peminjaman`) VALUES
(9, '2020-07-14', '1', 144000, 4, '20200713-002'),
(10, '2020-07-15', '2', 144000, 4, '20200713-002'),
(11, '2020-07-16', '3', 144000, 4, '20200713-002'),
(12, '2020-07-17', '4', 144000, 4, '20200713-002'),
(13, '2020-07-18', '5', 144000, 4, '20200713-002'),
(14, '2020-07-19', '6', 144000, 4, '20200713-002'),
(15, '2020-07-20', '7', 144000, 4, '20200713-002'),
(16, '2020-07-21', '8', 144000, 4, '20200713-002'),
(17, '2020-07-22', '9', 144000, 4, '20200713-002'),
(18, '2020-07-24', '10', 144000, 4, '20200713-002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(256) NOT NULL,
  `isi_berita` text NOT NULL,
  `tgl_berita` date NOT NULL,
  `img_berita` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita`, `tgl_berita`, `img_berita`) VALUES
(1, 'Hello World', '<p><span style=\"font-size: 1.5rem; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam ipsa delectus saepe optio nesciunt! Beatae at sed vitae, cumque dolorum fugit laudantium dolor reprehenderit aperiam quaerat vel? Illo, quo obcaecati</span></p>', '2020-04-24', 'f0531bdac0a2f8cb5a31a85d979c127e.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hari`
--

CREATE TABLE `hari` (
  `id_hari` int(2) NOT NULL,
  `nama_hari` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hari`
--

INSERT INTO `hari` (`id_hari`, `nama_hari`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jum\'at'),
(6, 'Sabtu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(64) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `masa_kerja` int(5) NOT NULL,
  `jabatan` varchar(16) NOT NULL,
  `diangkat` date NOT NULL,
  `golongan` varchar(2) NOT NULL,
  `kd_resort` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `tgl_lahir`, `alamat`, `masa_kerja`, `jabatan`, `diangkat`, `golongan`, `kd_resort`) VALUES
(2, 'Novita Sari', '1998-10-10', 'Slawi', 2, 'Admin', '2017-02-12', 'A', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `no_peminjaman` varchar(12) NOT NULL,
  `tgl_drop` date NOT NULL,
  `pinjaman_pokok` int(11) NOT NULL,
  `jasa_peminjaman` int(12) NOT NULL,
  `jasa_pelayanan` int(12) NOT NULL,
  `resiko_kredit` int(12) NOT NULL,
  `total_pinjaman` int(12) NOT NULL,
  `angsuran` int(4) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_admin` int(2) NOT NULL,
  `keterangan` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`no_peminjaman`, `tgl_drop`, `pinjaman_pokok`, `jasa_peminjaman`, `jasa_pelayanan`, `resiko_kredit`, `total_pinjaman`, `angsuran`, `id_anggota`, `id_admin`, `keterangan`) VALUES
('20200713-001', '2020-07-13', 930000, 83700, 83700, 18600, 1116000, 10, 11, 4, 'Proses'),
('20200713-002', '2020-07-13', 1200000, 108000, 108000, 24000, 1440000, 10, 10, 4, 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resort`
--

CREATE TABLE `resort` (
  `kd_resort` varchar(2) NOT NULL,
  `nama_resort` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resort`
--

INSERT INTO `resort` (`kd_resort`, `nama_resort`) VALUES
('B', 'BUGENVIL'),
('C', 'CEMPAKA'),
('D', 'DAHLIA'),
('E', 'ESTER'),
('F', 'FLAMBOYAN'),
('G', 'GADING'),
('H', 'HARUM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan`
--

CREATE TABLE `simpanan` (
  `id_simpanan` int(11) NOT NULL,
  `no_peminjaman` varchar(12) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `tgl_drop_simpanan` date NOT NULL,
  `simpanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `simpanan`
--

INSERT INTO `simpanan` (`id_simpanan`, `no_peminjaman`, `id_anggota`, `tgl_drop_simpanan`, `simpanan`) VALUES
(10, '20200713-002', 10, '2020-07-13', 60000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_hari` (`id_hari`),
  ADD KEY `kd_resort` (`kd_resort`);

--
-- Indeks untuk tabel `angsuran`
--
ALTER TABLE `angsuran`
  ADD PRIMARY KEY (`id_angsuran`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `no_peminjaman` (`no_peminjaman`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `kd_resort` (`kd_resort`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`no_peminjaman`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `resort`
--
ALTER TABLE `resort`
  ADD PRIMARY KEY (`kd_resort`);

--
-- Indeks untuk tabel `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`id_simpanan`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `no_peminjaman` (`no_peminjaman`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `angsuran`
--
ALTER TABLE `angsuran`
  MODIFY `id_angsuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `hari`
--
ALTER TABLE `hari`
  MODIFY `id_hari` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `simpanan`
--
ALTER TABLE `simpanan`
  MODIFY `id_simpanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `anggota_ibfk_2` FOREIGN KEY (`id_hari`) REFERENCES `hari` (`id_hari`),
  ADD CONSTRAINT `anggota_ibfk_3` FOREIGN KEY (`kd_resort`) REFERENCES `resort` (`kd_resort`);

--
-- Ketidakleluasaan untuk tabel `angsuran`
--
ALTER TABLE `angsuran`
  ADD CONSTRAINT `angsuran_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `angsuran_ibfk_3` FOREIGN KEY (`no_peminjaman`) REFERENCES `peminjaman` (`no_peminjaman`);

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `simpanan`
--
ALTER TABLE `simpanan`
  ADD CONSTRAINT `simpanan_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`),
  ADD CONSTRAINT `simpanan_ibfk_3` FOREIGN KEY (`no_peminjaman`) REFERENCES `peminjaman` (`no_peminjaman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
