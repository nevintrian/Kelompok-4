-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2019 pada 07.33
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
  `LUAS_TANAH` int(11) DEFAULT NULL,
  `STOK` int(11) DEFAULT NULL,
  `HARGA` bigint(20) DEFAULT NULL,
  `FASILITAS` varchar(200) DEFAULT NULL,
  `GAMBAR` varchar(200) DEFAULT NULL,
  `GAMBAR1` varchar(200) NOT NULL,
  `GAMBAR2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cluster`
--

INSERT INTO `cluster` (`KD_CLUSTER`, `KD_PERUM`, `NAMA_CLUSTER`, `TIPE`, `LUAS_TANAH`, `STOK`, `HARGA`, `FASILITAS`, `GAMBAR`, `GAMBAR1`, `GAMBAR2`) VALUES
(1, 5, 'Edge Gardenia', 60, 78, 32, 1000000000, 'jaringan listrik bawah tanah, jaringan fiber optik, air pdam', 'a.jpg', 'b.jpg', 'c.jpg'),
(2, 5, 'Boulevard Magnolia', 60, 105, 24, 1100000000, 'jaringan listrik bawah tanah, jaringan fiber optik, air pdam', 'b.jpg', 'a.jpg', 'd.jpg'),
(3, 1, 'Villa Bintaro Asri', 30, 60, 200, 130000000, 'Pondasi batu kali, lantai keramik, listrik daya 1300 watt', 'a.jpg', 'c.jpg', 'e.jpg'),
(4, 2, 'Puri Antirogo 2', 30, 60, 34, 116000000, 'Pondasi batu kali, lantai keramik, listrik daya 1300 watt', 'e.jpg', 'a.jpg', 'b.jpg'),
(5, 3, 'Arjasa Asri 2', 30, 72, 5, 110000000, 'Pondasi batu kali, lantai keramik, listrik daya 1300 watt', 'd.jpg', 'c.jpg', 'b.jpg'),
(6, 3, 'Arjasa Asri 2', 36, 72, 5, 125000000, 'Pondasi batu kali, lantai keramik, listrik daya 1300 watt', 'a.jpg', 'c.jpg', 'e.jpg'),
(7, 4, 'Saren Agung', 45, 63, 12, 400000000, 'pondasi batu pondasi, struktur beton bertulang, kusen aluminium, pintu toiler pvc', 'b.jpg', 'd.jpg', 'e.jpg'),
(8, 4, 'Indrapura', 47, 72, 7, 450000000, 'pondasi batu pondasi, struktur beton bertulang, kusen aluminium, pintu toiler pvc', 'a.jpg', 'c.jpg', 'e.jpg'),
(9, 4, 'Ismahayana', 50, 81, 5, 550000000, 'pondasi batu pondasi, struktur beton bertulang, kusen aluminium, pintu toiler pvc', 'c.jpg', 'e.jpg', 'a.jpg'),
(10, 6, 'Aster', 50, 90, 30, 590000000, 'pondasi batu kali, listrik 1300 watt, lantai keramik, genteng beton, dinding bata merah', 'd.jpg', 'e.jpg', 'a.jpg'),
(11, 6, 'Aster', 50, 112, 36, 650000000, 'pondasi batu kali, listrik 1300 watt, lantai keramik, genteng beton, dinding bata merah', 'e.jpg', 'c.jpg', 'a.jpg'),
(12, 6, 'Gardenia', 60, 120, 36, 900000000, 'pondasi batu kali, listrik 1300 watt, lantai keramik, genteng beton, dinding bata merah', 'b.jpg', 'a.jpg', 'e.jpg'),
(13, 6, 'Gardenia', 45, 127, 32, 850000000, 'pondasi batu kali, listrik 1300 watt, lantai keramik, genteng beton, dinding bata merah', 'a.jpg', 'c.jpg', 'b.jpg'),
(14, 6, 'Boulevard', 70, 120, 20, 1070000000, 'pondasi batu kali, listrik 1300 watt, lantai keramik, genteng beton, dinding bata merah', 'b.jpg', 'a.jpg', 'c.jpg'),
(15, 6, 'Boulevard', 90, 120, 25, 1300000000, 'pondasi batu kali, listrik 1300 watt, lantai keramik, genteng beton, dinding bata merah', 'e.jpg', 'a.jpg', 'b.jpg'),
(16, 6, 'Alamanda', 50, 90, 40, 720000000, 'pondasi batu kali, listrik 1300 watt, lantai keramik, genteng beton, dinding bata merah', 'd.jpg', 'c.jpg', 'a.jpg'),
(17, 6, 'Alamanda', 47, 107, 29, 720000000, 'pondasi batu kali, listrik 1300 watt, lantai keramik, genteng beton, dinding bata merah', 'c.jpg', 'd.jpg', 'b.jpg'),
(18, 6, 'Alamanda', 42, 72, 21, 400000000, 'pondasi batu kali, listrik 1300 watt, lantai keramik, genteng beton, dinding bata merah', 'b.jpg', 'a.jpg', 'd.jpg'),
(19, 6, 'Edelweis', 36, 90, 34, 450000000, 'pondasi batu kali, listrik 1300 watt, lantai keramik, genteng beton, dinding bata merah', 'a.jpg', 'b.jpg', 'c.jpg'),
(29, 1, 'aas', 1, 1, -2, 1, 'srrtt', '251120190117122019-09-25_10-23-50.jpg', '251120190117122019-09-25_10-23-50.jpg', '251120190117122019-09-25_10-23-50.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskusi`
--

CREATE TABLE `diskusi` (
  `KD_DIS` int(11) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `KD_CLUSTER` int(11) NOT NULL,
  `ISI_DIS` varchar(200) DEFAULT NULL,
  `TGLWAKTU_DIS` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `diskusi`
--

INSERT INTO `diskusi` (`KD_DIS`, `USERNAME`, `KD_CLUSTER`, `ISI_DIS`, `TGLWAKTU_DIS`) VALUES
(2, 'adi', 5, 'halo', '2019-10-23 04:00:00'),
(3, 'bambang', 5, 'masih ada?', '2019-10-23 02:22:00'),
(4, 'sri', 8, 'hai', '2019-10-21 00:09:06'),
(5, 'adi', 10, 'ready', '2019-10-20 04:00:13'),
(6, 'bambang', 16, 'nomornya gk aktif', '2019-10-21 02:00:00'),
(7, 'sri', 15, 'saya minat dong', '2019-10-09 06:00:22'),
(8, 'bambang', 19, 'tertarik', '2019-10-22 07:14:00'),
(9, 'sri', 16, 'aku mau beli', '2019-10-28 02:04:11'),
(10, 'adi', 2, 'bagus nih kayaknya', '2019-10-23 02:05:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `marketing`
--

CREATE TABLE `marketing` (
  `KD_MARKET` int(11) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `NAMA` varchar(200) DEFAULT NULL,
  `NO_TELEPON` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `marketing`
--

INSERT INTO `marketing` (`KD_MARKET`, `USERNAME`, `NAMA`, `NO_TELEPON`) VALUES
(1, 'ani', 'ani', '0811354123'),
(2, 'donny', 'donny', '08123486944'),
(3, 'ani', 'andre', '081331253700'),
(6, 'agung', 'penny', '085259747367'),
(7, 'diah', 'eghie', '089526886400'),
(8, 'agung', 'agung', '089678456782'),
(10, 'diah', 'diah', '082232410112'),
(11, 'diah', 'terry', '082336800768');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perum`
--

CREATE TABLE `perum` (
  `KD_PERUM` int(11) NOT NULL,
  `KD_PT` int(11) NOT NULL,
  `NAMA_PERUM` varchar(200) DEFAULT NULL,
  `LOKASI` varchar(200) DEFAULT NULL,
  `GAMBAR_PERUM` varchar(200) DEFAULT NULL
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
-- Struktur dari tabel `pt`
--

CREATE TABLE `pt` (
  `KD_PT` int(11) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `NAMA_PT` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pt`
--

INSERT INTO `pt` (`KD_PT`, `USERNAME`, `NAMA_PT`) VALUES
(1, 'ani', 'Alfatih Konstatinopel Putra'),
(2, 'ani', 'Tenang Jaya Putra'),
(3, 'diah', 'Ikasetia Agung Pratama'),
(4, 'agung', 'PJM Group'),
(5, 'donny', 'Barisan Binar Bintang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `report`
--

CREATE TABLE `report` (
  `KD_REP` int(11) NOT NULL,
  `KD_CLUSTER` int(11) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `ISI_REP` varchar(200) DEFAULT NULL,
  `TGLWAKTU_REP` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `report`
--

INSERT INTO `report` (`KD_REP`, `KD_CLUSTER`, `USERNAME`, `ISI_REP`, `TGLWAKTU_REP`) VALUES
(3, 2, 'bambang', 'astaga', '2019-10-28 04:00:00'),
(4, 3, 'sri', 'aku tertipu', '2019-10-23 03:12:00'),
(5, 1, 'adi', 'aku menyesal', '2019-10-27 03:05:00'),
(6, 1, 'sri', 'tolong iklannya dihapus', '2019-10-24 04:14:00'),
(7, 2, 'adi', 'admin, hapus iklannya', '2019-10-20 03:14:00'),
(8, 3, 'sri', 'iklan palsu', '2019-10-24 05:09:00'),
(9, 3, 'sri', 'zzzz', '2019-10-28 04:06:00'),
(10, 2, 'bambang', 'tidak sesuai iklan', '2019-10-24 02:12:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `KD_REV` int(11) NOT NULL,
  `KD_CLUSTER` int(11) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `ISI_REV` varchar(200) DEFAULT NULL,
  `TGLWAKTU_REV` datetime DEFAULT NULL,
  `FOTO_REV` varchar(200) DEFAULT NULL,
  `RATING` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `review`
--

INSERT INTO `review` (`KD_REV`, `KD_CLUSTER`, `USERNAME`, `ISI_REV`, `TGLWAKTU_REV`, `FOTO_REV`, `RATING`) VALUES
(1, 10, 'sri', 'jalannya rusak', '2019-10-16 01:00:00', 'a.jpg', 3),
(2, 11, 'bambang', 'rumahnya bagus', '2019-10-23 08:00:00', 'b.jpg', 4),
(4, 10, 'adi', 'mahal', '2019-10-13 03:11:02', 'c.jpg', 5),
(5, 18, 'sri', 'bagus', '2019-10-14 04:10:07', 'a.jpg', 2),
(6, 9, 'adi', 'banyak pohon', '2019-10-21 03:10:04', 'a.jpg', 5),
(7, 4, 'adi', 'indah', '2019-10-21 02:07:06', 'c.jpg', 2),
(8, 5, 'bambang', 'cemerlang', '2019-10-28 03:06:08', 'd.jpg', 4),
(9, 6, 'bambang', 'sejuk', '2019-10-28 02:00:00', 'e.jpg', 3),
(10, 8, 'sri', 'jalan bagus', '2019-10-28 03:09:00', 'c.jpg', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `KD_SLIDER` int(11) NOT NULL,
  `JUDUL` varchar(200) NOT NULL,
  `KETERANGAN` varchar(200) NOT NULL,
  `GAMBAR_SLIDER` varchar(200) NOT NULL,
  `URUTAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`KD_SLIDER`, `JUDUL`, `KETERANGAN`, `GAMBAR_SLIDER`, `URUTAN`) VALUES
(1, 'carirumah.com', 'situs jual beli properti', '1.jpg', 1),
(2, 'carirumah.com', 'situs jual beli properti', '4.jpg', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `USERNAME` varchar(20) NOT NULL,
  `EMAIL` varchar(200) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `STATUS` varchar(20) DEFAULT NULL,
  `NAMA_LENGKAP` varchar(200) DEFAULT NULL,
  `TGL_LAHIR` date DEFAULT NULL,
  `JENIS_KELAMIN` varchar(20) DEFAULT NULL,
  `FOTO` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`USERNAME`, `EMAIL`, `PASSWORD`, `STATUS`, `NAMA_LENGKAP`, `TGL_LAHIR`, `JENIS_KELAMIN`, `FOTO`) VALUES
('aan', 'aan123@gmail.com', 'aan123', 'admin', 'aan', NULL, 'laki-laki', 'man1.jpg'),
('adi', 'adi123@gmail.com', 'adi123', 'customer', 'adit', '0000-00-00', 'laki-laki', '25112019133136aaa.jpg'),
('agung', 'agung123@gmail.com', 'agung123', 'developer', 'agung', NULL, 'laki-laki', 'man2.jpg'),
('ani', 'ani123@gmail.com', 'ani123', 'developer', 'anitw', '1999-01-23', 'perempuan', 'girl1.jpg'),
('bambang', 'bambang123@gmail.com', 'bambang123', 'customer', 'bambangjantan', '2000-01-23', 'laki-laki', 'man1.jpg'),
('diah', 'diah123@gmail.com', 'diah123', 'developer', 'diah', NULL, 'perempuan', 'girl1.jpg'),
('donny', 'donny123@gmail.com', 'donny123', 'developer', 'donnys', NULL, 'laki-laki', 'man2.jpg'),
('gede', 'gede123@gmail.com', 'gede123', 'admin', 'gede', NULL, 'laki-laki', 'man1.jpg'),
('nevin', 'nevin123@gmail.com', 'nevin123', 'admin', 'nevin', '2000-01-27', 'laki-laki', 'man1.jpg'),
('reza', 'reza123@gmail.com', 'reza123', 'admin', 'reza', NULL, 'laki-laki', 'man2.jpg'),
('sri', 'sri123@gmail.com', 'sri123', 'customer', 'sri', NULL, 'perempuan', 'girl1.jpg'),
('ss', 'ss', 'ss', 'developer', 'ss', '2019-11-26', 'laki-laki', NULL);

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
  ADD KEY `FK_MENULIS` (`USERNAME`);

--
-- Indeks untuk tabel `marketing`
--
ALTER TABLE `marketing`
  ADD PRIMARY KEY (`KD_MARKET`),
  ADD KEY `FK_MELENGKAPI` (`USERNAME`);

--
-- Indeks untuk tabel `perum`
--
ALTER TABLE `perum`
  ADD PRIMARY KEY (`KD_PERUM`),
  ADD KEY `FK_MENDATA` (`KD_PT`);

--
-- Indeks untuk tabel `pt`
--
ALTER TABLE `pt`
  ADD PRIMARY KEY (`KD_PT`),
  ADD KEY `FK_MEMPUNYAI` (`USERNAME`);

--
-- Indeks untuk tabel `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`KD_REP`),
  ADD KEY `FK_BERISIKAN` (`KD_CLUSTER`),
  ADD KEY `FK_MEMBERI` (`USERNAME`);

--
-- Indeks untuk tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`KD_REV`),
  ADD KEY `FK_MEMBUAT` (`USERNAME`),
  ADD KEY `FK_TENTANG` (`KD_CLUSTER`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`KD_SLIDER`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USERNAME`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cluster`
--
ALTER TABLE `cluster`
  MODIFY `KD_CLUSTER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `diskusi`
--
ALTER TABLE `diskusi`
  MODIFY `KD_DIS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `marketing`
--
ALTER TABLE `marketing`
  MODIFY `KD_MARKET` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `perum`
--
ALTER TABLE `perum`
  MODIFY `KD_PERUM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pt`
--
ALTER TABLE `pt`
  MODIFY `KD_PT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `report`
--
ALTER TABLE `report`
  MODIFY `KD_REP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `review`
--
ALTER TABLE `review`
  MODIFY `KD_REV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `KD_SLIDER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  ADD CONSTRAINT `FK_MENULIS` FOREIGN KEY (`USERNAME`) REFERENCES `user` (`USERNAME`);

--
-- Ketidakleluasaan untuk tabel `marketing`
--
ALTER TABLE `marketing`
  ADD CONSTRAINT `FK_MELENGKAPI` FOREIGN KEY (`USERNAME`) REFERENCES `user` (`USERNAME`);

--
-- Ketidakleluasaan untuk tabel `perum`
--
ALTER TABLE `perum`
  ADD CONSTRAINT `FK_MENDATA` FOREIGN KEY (`KD_PT`) REFERENCES `pt` (`KD_PT`);

--
-- Ketidakleluasaan untuk tabel `pt`
--
ALTER TABLE `pt`
  ADD CONSTRAINT `FK_MEMPUNYAI` FOREIGN KEY (`USERNAME`) REFERENCES `user` (`USERNAME`);

--
-- Ketidakleluasaan untuk tabel `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `FK_BERISIKAN` FOREIGN KEY (`KD_CLUSTER`) REFERENCES `cluster` (`KD_CLUSTER`),
  ADD CONSTRAINT `FK_MEMBERI` FOREIGN KEY (`USERNAME`) REFERENCES `user` (`USERNAME`);

--
-- Ketidakleluasaan untuk tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `FK_MEMBUAT` FOREIGN KEY (`USERNAME`) REFERENCES `user` (`USERNAME`),
  ADD CONSTRAINT `FK_TENTANG` FOREIGN KEY (`KD_CLUSTER`) REFERENCES `cluster` (`KD_CLUSTER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
