-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2020 pada 15.26
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
  `no_peminjaman` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `angsuran`
--

INSERT INTO `angsuran` (`id_angsuran`, `tgl_angsuran`, `angsuran_ke`, `nominal_angsuran`, `id_admin`, `no_peminjaman`) VALUES
(6, '2020-04-12', '1', 120000, 4, '3/E/04');

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
(1, 'Hello World', '<p><span style=\"font-size: 0.9rem;\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam ipsa delectus saepe optio nesciunt! Beatae at sed vitae, cumque dolorum fugit laudantium dolor reprehenderit aperiam quaerat vel? Illo, quo obcaecati.</span></p><p><span style=\"font-size: 0.9rem;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ab quis doloribus sint? Quidem voluptatibus rem exercitationem commodi quis optio, voluptas fugit, quos saepe facilis quibusdam amet repellat quae obcaecati.</span><img src=\"data:image/png;base64,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\" data-filename=\"HERE Capture.PNG\" style=\"width: 483px;\"></p><p><b><br></b></p>', '2020-04-24', 'f0531bdac0a2f8cb5a31a85d979c127e.png');

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
  `no_peminjaman` varchar(11) NOT NULL,
  `tgl_drop` date NOT NULL,
  `pinjaman_pokok` int(11) NOT NULL,
  `jasa_peminjaman` int(12) NOT NULL,
  `jasa_pelayanan` int(12) NOT NULL,
  `resiko_kredit` int(12) NOT NULL,
  `total_pinjaman` int(12) NOT NULL,
  `angsuran` int(4) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_admin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`no_peminjaman`, `tgl_drop`, `pinjaman_pokok`, `jasa_peminjaman`, `jasa_pelayanan`, `resiko_kredit`, `total_pinjaman`, `angsuran`, `id_anggota`, `id_admin`) VALUES
('01/C/04', '2020-04-12', 500000, 45000, 45000, 10000, 600000, 10, 10, 4),
('2/C/04', '2020-04-13', 5000000, 450000, 450000, 100000, 6000000, 10, 10, 4),
('3/E/04', '2020-04-15', 930000, 83700, 83700, 18600, 1116000, 10, 11, 4);

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
-- Struktur dari tabel `tabungan`
--

CREATE TABLE `tabungan` (
  `id_tabungan` int(11) NOT NULL,
  `no_peminjaman` varchar(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `tgl_drop_tabungan` date NOT NULL,
  `tabungan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabungan`
--

INSERT INTO `tabungan` (`id_tabungan`, `no_peminjaman`, `id_anggota`, `tgl_drop_tabungan`, `tabungan`) VALUES
(1, '01/C/04', 10, '2020-04-14', 30000),
(3, '2/C/04', 10, '2020-04-13', 300000),
(7, '3/E/04', 11, '2020-04-15', 46500);

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
-- Indeks untuk tabel `tabungan`
--
ALTER TABLE `tabungan`
  ADD PRIMARY KEY (`id_tabungan`),
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
  MODIFY `id_angsuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT untuk tabel `tabungan`
--
ALTER TABLE `tabungan`
  MODIFY `id_tabungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- Ketidakleluasaan untuk tabel `tabungan`
--
ALTER TABLE `tabungan`
  ADD CONSTRAINT `tabungan_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`),
  ADD CONSTRAINT `tabungan_ibfk_3` FOREIGN KEY (`no_peminjaman`) REFERENCES `peminjaman` (`no_peminjaman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
