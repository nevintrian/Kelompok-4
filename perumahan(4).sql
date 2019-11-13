-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2019 pada 07.57
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perumahan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cluster`
--

CREATE TABLE `cluster` (
  `KD_CLUSTER` int(11) NOT NULL,
  `KD_PERUM` int(11) NOT NULL,
  `NAMA_CLUSTER` varchar(200) DEFAULT NULL,
  `TIPE` int(11) DEFAULT NULL,
  `LUAS_TANAH` varchar(5) NOT NULL,
  `STOK` int(11) DEFAULT NULL,
  `HARGA` bigint(20) DEFAULT NULL,
  `FASILITAS` varchar(200) DEFAULT NULL,
  `GAMBAR` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cluster`
--

INSERT INTO `cluster` (`KD_CLUSTER`, `KD_PERUM`, `NAMA_CLUSTER`, `TIPE`, `LUAS_TANAH`, `STOK`, `HARGA`, `FASILITAS`, `GAMBAR`) VALUES
(1, 5, 'Edge Gardenia', 60, '78', 32, 1000000000, 'jaringan listrik bawah tanah, jaringan fiber optik, air pdam', 'a.jpg'),
(2, 5, 'Boulevard Magnolia', 60, '105', 24, 1100000000, 'jaringan listrik bawah tanah, jaringan fiber optik, air pdam', 'b.jpg'),
(3, 1, 'Villa Bintaro Asri', 30, '60', 200, 130000000, 'Pondasi batu kali, lantai keramik, listrik daya 1300 watt', 'a.jpg'),
(4, 2, 'Puri Antirogo 2', 30, '60', 34, 116000000, 'Pondasi batu kali, lantai keramik, listrik daya 1300 watt', 'e.jpg'),
(5, 3, 'Arjasa Asri 2', 30, '72', 5, 110000000, 'Pondasi batu kali, lantai keramik, listrik daya 1300 watt', 'd.jpg'),
(6, 3, 'Arjasa Asri 2', 36, '72', 5, 125000000, 'Pondasi batu kali, lantai keramik, listrik daya 1300 watt', 'a.jpg'),
(7, 4, 'Saren Agung', 45, '63', 12, 400000000, 'pondasi batu pondasi, struktur beton bertulang, kusen aluminium, pintu toiler pvc', 'b.jpg'),
(8, 4, 'Indrapura', 47, '72', 7, 450000000, 'pondasi batu pondasi, struktur beton bertulang, kusen aluminium, pintu toiler pvc', 'a.jpg'),
(9, 4, 'Ismahayana', 50, '81', 5, 550000000, 'pondasi batu pondasi, struktur beton bertulang, kusen aluminium, pintu toiler pvc', 'c.jpg'),
(10, 6, 'Aster', 50, '90', 30, 590000000, 'pondasi batu kali, listrik 1300 watt, lantai keramik, genteng beton, dinding bata merah', 'd.jpg'),
(11, 6, 'Aster', 50, '112', 36, 650000000, 'pondasi batu kali, listrik 1300 watt, lantai keramik, genteng beton, dinding bata merah', 'e.jpg'),
(12, 6, 'Gardenia', 60, '120', 36, 900000000, 'pondasi batu kali, listrik 1300 watt, lantai keramik, genteng beton, dinding bata merah', 'b.jpg'),
(13, 6, 'Gardenia', 45, '127', 32, 850000000, 'pondasi batu kali, listrik 1300 watt, lantai keramik, genteng beton, dinding bata merah', 'a.jpg'),
(14, 6, 'Boulevard', 70, '120', 20, 1070000000, 'pondasi batu kali, listrik 1300 watt, lantai keramik, genteng beton, dinding bata merah', 'b.jpg'),
(15, 6, 'Boulevard', 90, '120', 25, 1300000000, 'pondasi batu kali, listrik 1300 watt, lantai keramik, genteng beton, dinding bata merah', 'e.jpg'),
(16, 6, 'Alamanda', 50, '90', 40, 720000000, 'pondasi batu kali, listrik 1300 watt, lantai keramik, genteng beton, dinding bata merah', 'd.jpg'),
(17, 6, 'Alamanda', 47, '107', 29, 720000000, 'pondasi batu kali, listrik 1300 watt, lantai keramik, genteng beton, dinding bata merah', 'c.jpg'),
(18, 6, 'Alamanda', 42, '72', 21, 400000000, 'pondasi batu kali, listrik 1300 watt, lantai keramik, genteng beton, dinding bata merah', 'b.jpg'),
(19, 6, 'Edelweis', 36, '90', 34, 450000000, 'pondasi batu kali, listrik 1300 watt, lantai keramik, genteng beton, dinding bata merah', 'a.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskusi`
--

CREATE TABLE `diskusi` (
  `KD_DIS` int(11) NOT NULL,
  `KD_CLUSTER` int(11) NOT NULL,
  `KD_USER` int(11) NOT NULL,
  `ISI_DIS` varchar(200) DEFAULT NULL,
  `TGLWAKTU_DIS` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `diskusi`
--

INSERT INTO `diskusi` (`KD_DIS`, `KD_CLUSTER`, `KD_USER`, `ISI_DIS`, `TGLWAKTU_DIS`) VALUES
(1, 14, 11, 'harga bisa nego', '2019-10-17 00:00:00'),
(2, 5, 11, 'halo', '2019-10-23 04:00:00'),
(3, 5, 7, 'masih ada?', '2019-10-23 02:22:00'),
(4, 8, 8, 'hai', '2019-10-21 00:09:06'),
(5, 10, 11, 'ready', '2019-10-20 04:00:13'),
(6, 16, 7, 'nomornya gk aktif', '2019-10-21 02:00:00'),
(7, 15, 8, 'saya minat dong', '2019-10-09 06:00:22'),
(8, 19, 7, 'tertarik', '2019-10-22 07:14:00'),
(9, 16, 8, 'aku mau beli', '2019-10-28 02:04:11'),
(10, 2, 11, 'bagus nih kayaknya', '2019-10-23 02:05:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perum`
--

CREATE TABLE `perum` (
  `KD_PERUM` int(11) NOT NULL,
  `KD_PT` int(11) NOT NULL,
  `NAMA_PERUM` varchar(200) DEFAULT NULL,
  `LOKASI` varchar(200) DEFAULT NULL,
  `GAMBAR_PERUM` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perum`
--

INSERT INTO `perum` (`KD_PERUM`, `KD_PT`, `NAMA_PERUM`, `LOKASI`, `GAMBAR_PERUM`) VALUES
(1, 1, 'Villa Bintaro Asri', 'Jalan Semangka, Jember', 'a.jpg'),
(2, 1, 'Puri Antirogo 2', 'Jalan Sarangan, Bondowoso', 'b.jpg'),
(3, 2, 'Arjasa Asri 2', 'Jalan Letnan Suprayitno, Jember', 'c.jpg'),
(4, 5, 'Puri Tegal Gede Residence', 'Jalan Tawang Mangu, Jember', 'd.jpg'),
(5, 3, 'Bernady Land Slawu', 'Jalan Cendrawasih, Jember', 'e.jpg'),
(6, 4, 'Cendrawasih', 'Jalan Cendrawasih, Jember', 'a.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `KD_PROFIL` int(11) NOT NULL,
  `KD_USER` int(11) NOT NULL,
  `NAMA_LENGKAP` varchar(200) DEFAULT NULL,
  `TGL_LAHIR` date DEFAULT NULL,
  `JENIS_KELAMIN` varchar(20) DEFAULT NULL,
  `FOTO` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`KD_PROFIL`, `KD_USER`, `NAMA_LENGKAP`, `TGL_LAHIR`, `JENIS_KELAMIN`, `FOTO`) VALUES
(1, 1, 'nevin', NULL, 'laki-laki', NULL),
(2, 2, 'reza', NULL, 'laki-laki', NULL),
(3, 3, 'aan', NULL, 'laki-laki', NULL),
(4, 4, 'gede', NULL, 'laki-laki', NULL),
(5, 10, 'diah', NULL, 'perempuan', 'tab2.png'),
(6, 5, 'ani', NULL, 'Perempuan', 'girl1.jpg'),
(7, 6, 'agung', NULL, 'laki-laki', 'man1.jpg'),
(8, 7, 'bambang', NULL, 'laki-laki', NULL),
(9, 8, 'sri', NULL, 'perempuan', NULL),
(10, 9, 'donny', NULL, 'laki-laki', 'man2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_detil`
--

CREATE TABLE `profil_detil` (
  `NO_TELEPON` varchar(12) NOT NULL,
  `KD_PROFIL` int(11) NOT NULL,
  `NAMA` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil_detil`
--

INSERT INTO `profil_detil` (`NO_TELEPON`, `KD_PROFIL`, `NAMA`) VALUES
('0811354123', 6, 'ani'),
('08123486944', 10, 'donny'),
('081331253700', 6, 'andre'),
('082232410112', 5, 'diah'),
('082336800768', 5, 'terry'),
('085259747367', 7, 'penny'),
('089526886400', 5, 'eghie'),
('089678456782', 7, 'agung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pt`
--

CREATE TABLE `pt` (
  `KD_PT` int(11) NOT NULL,
  `KD_USER` int(11) NOT NULL,
  `NAMA_PT` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pt`
--

INSERT INTO `pt` (`KD_PT`, `KD_USER`, `NAMA_PT`) VALUES
(1, 5, 'Alfatih Konstatinopel Putra'),
(2, 5, 'Tenang Jaya Putra'),
(3, 10, 'Ikasetia Agung Pratama'),
(4, 6, 'PJM Group'),
(5, 9, 'Barisan Binar Bintang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `report`
--

CREATE TABLE `report` (
  `KD_REP` int(11) NOT NULL,
  `KD_CLUSTER` int(11) NOT NULL,
  `KD_USER` int(11) NOT NULL,
  `ISI_REP` varchar(200) DEFAULT NULL,
  `TGLWAKTU_REP` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `report`
--

INSERT INTO `report` (`KD_REP`, `KD_CLUSTER`, `KD_USER`, `ISI_REP`, `TGLWAKTU_REP`) VALUES
(1, 2, 11, 'penipu', '2019-10-22 04:00:00'),
(2, 1, 11, 'pembohong', '2019-10-22 04:19:00'),
(3, 2, 7, 'astaga', '2019-10-28 04:00:00'),
(4, 3, 8, 'aku tertipu', '2019-10-23 03:12:00'),
(5, 1, 11, 'aku menyesal', '2019-10-27 03:05:00'),
(6, 1, 8, 'tolong iklannya dihapus', '2019-10-24 04:14:00'),
(7, 2, 11, 'admin, hapus iklannya', '2019-10-20 03:14:00'),
(8, 3, 8, 'iklan palsu', '2019-10-24 05:09:00'),
(9, 3, 8, 'zzzz', '2019-10-28 04:06:00'),
(10, 2, 7, 'tidak sesuai iklan', '2019-10-24 02:12:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `KD_REV` int(11) NOT NULL,
  `KD_CLUSTER` int(11) NOT NULL,
  `KD_USER` int(11) NOT NULL,
  `ISI_REV` varchar(200) DEFAULT NULL,
  `TGLWAKTU_REV` datetime DEFAULT NULL,
  `FOTO_REV` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `review`
--

INSERT INTO `review` (`KD_REV`, `KD_CLUSTER`, `KD_USER`, `ISI_REV`, `TGLWAKTU_REV`, `FOTO_REV`) VALUES
(1, 10, 7, 'jalannya rusak', '2019-10-16 01:00:00', NULL),
(2, 11, 8, 'rumahnya bagus', '2019-10-23 08:00:00', NULL),
(3, 12, 11, 'perumahan asri', '2019-10-14 03:09:00', NULL),
(4, 10, 11, 'mahal', '2019-10-13 03:11:02', NULL),
(5, 18, 7, 'bagus', '2019-10-14 04:10:07', NULL),
(6, 9, 11, 'banyak pohon', '2019-10-21 03:10:04', NULL),
(7, 4, 11, 'indah', '2019-10-21 02:07:06', NULL),
(8, 5, 8, 'cemerlang', '2019-10-28 03:06:08', NULL),
(9, 6, 8, 'sejuk', '2019-10-28 02:00:00', NULL),
(10, 8, 7, 'jalan bagus', '2019-10-28 03:09:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `KD_USER` int(11) NOT NULL,
  `USERNAME` varchar(20) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `STATUS` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`KD_USER`, `USERNAME`, `PASSWORD`, `STATUS`) VALUES
(1, 'nevin', 'nevin123', 'admin'),
(2, 'reza', 'reza123', 'admin'),
(3, 'aan', 'aan123', 'admin'),
(4, 'gede', 'gede123', 'admin'),
(5, 'ani', 'ani123', 'developer'),
(6, 'agung', 'agung123', 'developer'),
(7, 'bambang', 'bambang123', 'customer'),
(8, 'sri', 'sri123', 'customer'),
(9, 'donny', 'donny123', 'developer'),
(10, 'diah', 'diah123', 'developer'),
(11, 'adi', 'adi123', 'customer'),
(14, 'qq', '123', 'customer'),
(15, 'aaa', '111', 'developer'),
(20, 'nt', 'nt', 'developer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cluster`
--
ALTER TABLE `cluster`
  ADD PRIMARY KEY (`KD_CLUSTER`),
  ADD KEY `FK_MEMILIKI` (`KD_PERUM`);

--
-- Indeks untuk tabel `diskusi`
--
ALTER TABLE `diskusi`
  ADD PRIMARY KEY (`KD_DIS`),
  ADD KEY `FK_MENGENAI` (`KD_CLUSTER`),
  ADD KEY `FK_MENULIS` (`KD_USER`);

--
-- Indeks untuk tabel `perum`
--
ALTER TABLE `perum`
  ADD PRIMARY KEY (`KD_PERUM`),
  ADD KEY `FK_MENDATA` (`KD_PT`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`KD_PROFIL`),
  ADD KEY `FK_MENGISIKAN` (`KD_USER`);

--
-- Indeks untuk tabel `profil_detil`
--
ALTER TABLE `profil_detil`
  ADD PRIMARY KEY (`NO_TELEPON`),
  ADD KEY `FK_MELENGKAPI` (`KD_PROFIL`);

--
-- Indeks untuk tabel `pt`
--
ALTER TABLE `pt`
  ADD PRIMARY KEY (`KD_PT`),
  ADD KEY `FK_MEMPUNYAI` (`KD_USER`);

--
-- Indeks untuk tabel `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`KD_REP`),
  ADD KEY `FK_BERISIKAN` (`KD_CLUSTER`),
  ADD KEY `FK_MEMBERI` (`KD_USER`);

--
-- Indeks untuk tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`KD_REV`),
  ADD KEY `FK_MEMBUAT` (`KD_USER`),
  ADD KEY `FK_TENTANG` (`KD_CLUSTER`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`KD_USER`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cluster`
--
ALTER TABLE `cluster`
  MODIFY `KD_CLUSTER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `diskusi`
--
ALTER TABLE `diskusi`
  MODIFY `KD_DIS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `perum`
--
ALTER TABLE `perum`
  MODIFY `KD_PERUM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `KD_PROFIL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pt`
--
ALTER TABLE `pt`
  MODIFY `KD_PT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `report`
--
ALTER TABLE `report`
  MODIFY `KD_REP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `review`
--
ALTER TABLE `review`
  MODIFY `KD_REV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `KD_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cluster`
--
ALTER TABLE `cluster`
  ADD CONSTRAINT `FK_MEMILIKI` FOREIGN KEY (`KD_PERUM`) REFERENCES `perum` (`KD_PERUM`);

--
-- Ketidakleluasaan untuk tabel `diskusi`
--
ALTER TABLE `diskusi`
  ADD CONSTRAINT `FK_MENGENAI` FOREIGN KEY (`KD_CLUSTER`) REFERENCES `cluster` (`KD_CLUSTER`),
  ADD CONSTRAINT `FK_MENULIS` FOREIGN KEY (`KD_USER`) REFERENCES `user` (`KD_USER`);

--
-- Ketidakleluasaan untuk tabel `perum`
--
ALTER TABLE `perum`
  ADD CONSTRAINT `FK_MENDATA` FOREIGN KEY (`KD_PT`) REFERENCES `pt` (`KD_PT`);

--
-- Ketidakleluasaan untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `FK_MENGISIKAN` FOREIGN KEY (`KD_USER`) REFERENCES `user` (`KD_USER`);

--
-- Ketidakleluasaan untuk tabel `profil_detil`
--
ALTER TABLE `profil_detil`
  ADD CONSTRAINT `FK_MELENGKAPI` FOREIGN KEY (`KD_PROFIL`) REFERENCES `profil` (`KD_PROFIL`);

--
-- Ketidakleluasaan untuk tabel `pt`
--
ALTER TABLE `pt`
  ADD CONSTRAINT `FK_MEMPUNYAI` FOREIGN KEY (`KD_USER`) REFERENCES `user` (`KD_USER`);

--
-- Ketidakleluasaan untuk tabel `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `FK_BERISIKAN` FOREIGN KEY (`KD_CLUSTER`) REFERENCES `cluster` (`KD_CLUSTER`),
  ADD CONSTRAINT `FK_MEMBERI` FOREIGN KEY (`KD_USER`) REFERENCES `user` (`KD_USER`);

--
-- Ketidakleluasaan untuk tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `FK_MEMBUAT` FOREIGN KEY (`KD_USER`) REFERENCES `user` (`KD_USER`),
  ADD CONSTRAINT `FK_TENTANG` FOREIGN KEY (`KD_CLUSTER`) REFERENCES `cluster` (`KD_CLUSTER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
