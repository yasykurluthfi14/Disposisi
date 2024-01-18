-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jul 2023 pada 12.39
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bagian`
--

CREATE TABLE `tbl_bagian` (
  `id_bagian` int(10) NOT NULL,
  `nama_bagian` text,
  `id_user` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_bagian`
--

INSERT INTO `tbl_bagian` (`id_bagian`, `nama_bagian`, `id_user`) VALUES
(9, 'Prasarana', 9),
(10, 'LSK', 9),
(12, 'Tata Usaha', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_disposisi`
--

CREATE TABLE `tbl_disposisi` (
  `id_disposisi` int(20) NOT NULL,
  `nomor_surat` varchar(30) NOT NULL,
  `nomor_agenda` varchar(70) NOT NULL,
  `sifat` varchar(70) NOT NULL,
  `tanggal` date NOT NULL,
  `bagian` varchar(30) NOT NULL,
  `hal` varchar(70) NOT NULL,
  `file` varchar(100) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_disposisi`
--

INSERT INTO `tbl_disposisi` (`id_disposisi`, `nomor_surat`, `nomor_agenda`, `sifat`, `tanggal`, `bagian`, `hal`, `file`, `id_user`) VALUES
(1, 'UM.202/1', '10', 'Segera', '2023-07-26', 'Tata Usaha', 'Test', '16_(2)1.docx', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lampiran`
--

CREATE TABLE `tbl_lampiran` (
  `id_lampiran` int(10) NOT NULL,
  `token_lampiran` varchar(100) NOT NULL,
  `nama_berkas` text,
  `ukuran` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_lampiran`
--

INSERT INTO `tbl_lampiran` (`id_lampiran`, `token_lampiran`, `nama_berkas`, `ukuran`) VALUES
(51, 'ce18a0ade38175e7146baf4658719d21', 'DAFTAR_PUSTAKA_ERLY.docx', '53.14'),
(50, '46ee6f679147ccb3f526ceca45ddddbf', 'Diagram_Rosi.docx', '276.81'),
(49, '4ff140edaf421abbf6ca2d45db0121ab', 'Picture12.png', '30.61'),
(48, '4d3f07c8ab452a0938df155e1a860161', '122.jpg', '21.1'),
(47, '8a09280e94cc1e15e957c2f6236fec32', '121.jpg', '21.1'),
(46, '07757a8da3e25e76c59f4e047d6b47ab', '12.jpg', '21.1'),
(45, 'a008ecf2e931bae31a46b9523e67aece', 'Picture11.png', '30.61'),
(44, 'd1234eaa0915fae6f4328db7c41428f7', 'Picture1.png', '30.61'),
(43, '49aa2525e004ae3e2b200147e2845163', '13.docx', '350.26'),
(42, '4ff140edaf421abbf6ca2d45db0121ab', '12.docx', '350.26'),
(41, '5bb70e723a6ff8f9f129ac4f07ed4b0c', '11.docx', '350.26'),
(40, 'b1a30598d697e4a7f891d1473859ae1c', '1.docx', '350.26'),
(52, '0343f7f9dc9aaedf74ecae404bd79ae9', 'inv_2.docx', '39.98'),
(53, 'feab559095c6523fd00fdc279f6d7c78', '14.docx', '350.26'),
(54, '0eff32ef7b86f217411fddfcfc1a499c', '15.docx', '350.26'),
(55, '6bd1cde03f930e652e11129f8b48f5ae', '16.docx', '350.26'),
(56, '8e36f286dd4cbb6c648e9b99a02fdc6c', '17.docx', '350.26'),
(57, '0a7be3a87b8e480999b9516474f4bb8c', 'INv.docx', '39.9'),
(58, 'e04e109fb1aaf4b74093df95b1a8725a', '16_(1).docx', '350.26'),
(59, '569c9c19091e7f158b377c3a66032f46', '16_(1)_(1).docx', '350.26'),
(60, '9a0f7af09bbba26ae817da4c4571124c', '16_(1)_(1)_(1).docx', '350.26'),
(61, 'cb81b911acc9a18e251cd4800a97aace', 'INv_(4).docx', '39.9'),
(62, '1efebdc7ef14df1edeb1af1b530f5407', '16_(1)_(1)_(1)_(2).docx', '350.26'),
(63, '676312fa05ee0ba84396ce5462bbcc98', 'INv_(4)1.docx', '39.9'),
(64, '2fc461f9d34fc2faac58cc82f8d234bb', '16_(2).docx', '350.26'),
(65, '3dbe57a92bbb90724bb03a99e3058fb4', '16_(2)1.docx', '350.26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_memo`
--

CREATE TABLE `tbl_memo` (
  `id_memo` int(10) NOT NULL,
  `judul_memo` text,
  `memo` text,
  `id_user` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_memo`
--

INSERT INTO `tbl_memo` (`id_memo`, `judul_memo`, `memo`, `id_user`) VALUES
(5, 'Hi Test', 'Test\r\n', 9),
(6, 'laporan triwulan', 'sudah di tindak lanjut ke bagian tata usaha', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ns`
--

CREATE TABLE `tbl_ns` (
  `id_ns` int(10) NOT NULL,
  `separator` text,
  `no_posisi` text,
  `no` text,
  `org_posisi` text,
  `org` text,
  `bag_posisi` text,
  `bag` text,
  `subbag_posisi` text,
  `subbag` text,
  `bln_posisi` text,
  `bln` text,
  `thn_posisi` text,
  `thn` text,
  `reset_no` text,
  `prefix` text,
  `prefix_posisi` enum('kiri','kanan') DEFAULT NULL,
  `nomor_surat` text,
  `ket` text,
  `jenis_ns` enum('semua','sm','sk','disposisi') DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL,
  `tgl_ns` varchar(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ns`
--

INSERT INTO `tbl_ns` (`id_ns`, `separator`, `no_posisi`, `no`, `org_posisi`, `org`, `bag_posisi`, `bag`, `subbag_posisi`, `subbag`, `bln_posisi`, `bln`, `thn_posisi`, `thn`, `reset_no`, `prefix`, `prefix_posisi`, `nomor_surat`, `ket`, `jenis_ns`, `id_user`, `tgl_ns`) VALUES
(1, '.', '1', '005', '2', 'waw', '', '', '', '', '4', 'X', '3', '2017', 'thn', 'yahoo', '', '005.waw.2017.X.yahoo', 'dkfhdf', 'sm', 6, NULL),
(2, '/', '2', '005', '1', 'ukm', '', '', '', '', '3', 'X', '4', '2017', 'thn', 'hay', 'kanan', 'ukm/005/X/2017/hay', '-', 'sk', 6, NULL),
(4, '/', '2', '001', '3', 'iptek', '', '', '', '', '4', 'X', '1', '2017', 'thn', '', '', '2017/001/iptek/X', '-', 'semua', 6, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_surat_keluar`
--

CREATE TABLE `tbl_surat_keluar` (
  `id_surat_keluar` int(20) NOT NULL,
  `nomor_surat` text,
  `tanggal_nomor_surat` varchar(12) DEFAULT NULL,
  `pengirim` text NOT NULL,
  `penerima` text,
  `perihal` text,
  `id_bagian` int(10) NOT NULL,
  `token_lampiran` text,
  `id_user` int(10) DEFAULT NULL,
  `dibaca` int(1) NOT NULL,
  `disposisi` text NOT NULL,
  `peringatan` int(1) NOT NULL,
  `tanggal_surat_keluar` varchar(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_surat_keluar`
--

INSERT INTO `tbl_surat_keluar` (`id_surat_keluar`, `nomor_surat`, `tanggal_nomor_surat`, `pengirim`, `penerima`, `perihal`, `id_bagian`, `token_lampiran`, `id_user`, `dibaca`, `disposisi`, `peringatan`, `tanggal_surat_keluar`) VALUES
(20, 'UM.202/0', '24-07-2023', '', '', 'Test', 0, '8e36f286dd4cbb6c648e9b99a02fdc6c', 10, 1, 'LSK', 0, '24-07-2023'),
(21, 'KP.904/1', '26-07-2023', '', '', 'laporan triwulan', 0, '569c9c19091e7f158b377c3a66032f46', 0, 1, '', 0, '26-07-2023'),
(22, 'KP.904/2', '26-07-2023', '', '', 'kegiatan 17 agustus', 0, '9a0f7af09bbba26ae817da4c4571124c', 0, 1, '', 0, '26-07-2023'),
(23, 'UM.202/3', '26-07-2023', '', '', 'laporan triwulan', 0, '2fc461f9d34fc2faac58cc82f8d234bb', 10, 1, '', 0, '26-07-2023'),
(24, 'UM.202/4', '26-07-2023', '', '', 'laporan', 0, '3dbe57a92bbb90724bb03a99e3058fb4', 10, 1, '', 0, '26-07-2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_surat_masuk`
--

CREATE TABLE `tbl_surat_masuk` (
  `id_surat_masuk` int(20) NOT NULL,
  `nomor_surat` text,
  `tanggal_nomor_surat` varchar(22) DEFAULT NULL,
  `nomor_asal` text,
  `tanggal_nomor_asal` varchar(22) DEFAULT NULL,
  `pengirim` text,
  `penerima` text,
  `perihal` text,
  `token_lampiran` varchar(100) DEFAULT NULL,
  `dibaca` int(1) NOT NULL,
  `disposisi` int(1) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `tanggal_surat_masuk` varchar(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_surat_masuk`
--

INSERT INTO `tbl_surat_masuk` (`id_surat_masuk`, `nomor_surat`, `tanggal_nomor_surat`, `nomor_asal`, `tanggal_nomor_asal`, `pengirim`, `penerima`, `perihal`, `token_lampiran`, `dibaca`, `disposisi`, `id_user`, `tanggal_surat_masuk`) VALUES
(37, 'KP.904/1', '24-07-2023', 'KP.904/1', '24-07-2023', 'Sekretaris', 'Admin', 'Test1', '0a7be3a87b8e480999b9516474f4bb8c', 1, 0, 0, '24-07-2023'),
(38, 'KP.904/2', '26-07-2023', 'KP.904/2', '26-07-2023', 'Sekretaris', 'Sekretaris', 'laporan triwulan', 'e04e109fb1aaf4b74093df95b1a8725a', 1, 0, 0, '26-07-2023'),
(41, 'KP.904/3', '26-07-2023', 'KP.904/3', '26-07-2023', 'Sekretaris', 'Sekretaris', 'laporan triwulan', '676312fa05ee0ba84396ce5462bbcc98', 1, 0, 0, '26-07-2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` text NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `email` text,
  `alamat` text,
  `telp` varchar(30) DEFAULT NULL,
  `pengalaman` text,
  `level` enum('s_admin','admin','user','sekretaris') DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `tanggal_daftar` varchar(20) DEFAULT NULL,
  `terakhir_login` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_lengkap`, `email`, `alamat`, `telp`, `pengalaman`, `level`, `status`, `tanggal_daftar`, `terakhir_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Kepala Balai', 'Admin@gmail.com', '-', '-', '-', 's_admin', 'aktif', '26-07-2023 16:26:56', '26-07-2023 17:15:11'),
(9, 'Sekretaris', 'ce1023b227de5c34b98c470cda4699bb', 'Sekretaris', '-', '-', '-', '-', 'admin', 'aktif', '24-07-2023 15:30:17', '26-07-2023 17:34:51'),
(10, 'Admin Pic', 'ee11cbb19052e40b07aac0ca060c23ee', 'Admin Pic', '-', '-', '-', '-', 'user', 'aktif', '24-07-2023 15:30:27', '26-07-2023 17:27:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_bagian`
--
ALTER TABLE `tbl_bagian`
  ADD PRIMARY KEY (`id_bagian`);

--
-- Indeks untuk tabel `tbl_disposisi`
--
ALTER TABLE `tbl_disposisi`
  ADD PRIMARY KEY (`id_disposisi`);

--
-- Indeks untuk tabel `tbl_lampiran`
--
ALTER TABLE `tbl_lampiran`
  ADD PRIMARY KEY (`id_lampiran`);

--
-- Indeks untuk tabel `tbl_memo`
--
ALTER TABLE `tbl_memo`
  ADD PRIMARY KEY (`id_memo`);

--
-- Indeks untuk tabel `tbl_ns`
--
ALTER TABLE `tbl_ns`
  ADD PRIMARY KEY (`id_ns`);

--
-- Indeks untuk tabel `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indeks untuk tabel `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_bagian`
--
ALTER TABLE `tbl_bagian`
  MODIFY `id_bagian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_disposisi`
--
ALTER TABLE `tbl_disposisi`
  MODIFY `id_disposisi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_lampiran`
--
ALTER TABLE `tbl_lampiran`
  MODIFY `id_lampiran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `tbl_memo`
--
ALTER TABLE `tbl_memo`
  MODIFY `id_memo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_ns`
--
ALTER TABLE `tbl_ns`
  MODIFY `id_ns` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
  MODIFY `id_surat_keluar` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  MODIFY `id_surat_masuk` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
