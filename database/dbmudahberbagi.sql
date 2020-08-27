-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2020 at 09:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmudahberbagi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `kd_admin` varchar(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `pswd_admin` varchar(50) NOT NULL,
  `hp_admin` varchar(13) NOT NULL,
  `email_admin` varchar(30) NOT NULL,
  `img_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kd_admin`, `nama_admin`, `pswd_admin`, `hp_admin`, `email_admin`, `img_admin`) VALUES
('aji', 'aji sop', '202cb962ac59075b964b07152d234b70', '08979156600', 'aji@gmail.com', '0000_00_00.jpg'),
('Nely', 'Nely Lusiana', '2025927648fb48b37687517586f228ff', '085229654099', 'nelylusiana@gmail.com', '20190529115653_admin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `alokasi`
--

CREATE TABLE `alokasi` (
  `id_alokasi` int(5) NOT NULL,
  `id_donasi` int(10) NOT NULL,
  `kd_admin` varchar(10) NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `total_alokasi` int(12) NOT NULL,
  `alamat_penerima` text NOT NULL,
  `ket_alokasi` text NOT NULL,
  `dokumentasi` varchar(100) NOT NULL,
  `dibuat_pada` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alokasi`
--

INSERT INTO `alokasi` (`id_alokasi`, `id_donasi`, `kd_admin`, `nama_penerima`, `total_alokasi`, `alamat_penerima`, `ket_alokasi`, `dokumentasi`, `dibuat_pada`) VALUES
(1, 27, 'Nely', 'agus maulana', 5000000, '<p>jalan kates raya</p>\r\n', '<p>Dana Rehab Mushola</p>\r\n', 'Foto_Dokumentasi200826-a8954446bf.jpg', '2020-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) NOT NULL,
  `kd_admin` varchar(10) NOT NULL,
  `id_kategori` int(4) NOT NULL,
  `st_berita` varchar(6) NOT NULL,
  `tgl_berita` date NOT NULL,
  `jam_berita` time NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `img_berita` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `kd_admin`, `id_kategori`, `st_berita`, `tgl_berita`, `jam_berita`, `judul_berita`, `isi_berita`, `img_berita`) VALUES
(1, 'Nely', 7, 'Publik', '2019-06-18', '20:14:41', 'Kambing Untuk Dunia Islam', '\r\nBerbagai negara dengan penduduk Muslim mengalami kesulitan yang sangat extreem. Palestina dengan penjajahan sampai sekarang yang tak kunjung usai, tragedi kemanusiaan di Rohingya yang mengakibatkan ratusan ribu mengungsi, kekeringan bertahun tahun yang dialami Somalia, berbagai bencana dan konflik yang mengakibatkan jutaan manusia mengalami kesusahan dan kehidupan yang serba sulit membutuhkan uluran tangan dari saudara saudara muslim dimanapun berada.\r\n\r\nTahun ini mari sisihkan Qurban kita untuk membantu meringankan penderitaan saudara kita di berbagai belahan dunia melalui Baitul Maal BUM dan ACT…\r\n\r\nMengapa ber-Qurban melalui Baitul Maal BMT BUM (?)\r\n\r\nMudah dan Murah\r\nSudah termasuk biaya operasional\r\nDistribusi Sesuai Akad\r\nMendapatkan laporan pelaksanaan Qurban\r\n\r\nTertarik donasi (?)\r\n\r\nHARGA QURBAN\r\n\r\nSomalia, Rohingya\r\nRp 2.000.000/ ekor\r\n\r\nPalestina, Syria\r\nRp 4.750.000/ ekor\r\n\r\nKemudahan bayar\r\nBTN SY : 741 300 1290\r\nBSM : 711 2222 116\r\nBNI Sy: 0331725862\r\n\r\nKonfirmasi & Informasi : \r\n081 328 365 144\r\n085 726 573 510\r\n', 'Qurban-BUM-web-SP.jpg'),
(2, 'Nely', 8, 'Publik', '2019-06-18', '20:18:23', 'Qurban itu Mudah dan Murah', 'Mengapa ber-Qurban melalui Baitul Maal BMT BUM (?)\r\n\r\nMudah dan Murah\r\nSudah termasuk biaya operasional\r\nDistribusi hingga pelosok Desa & Miskin\r\nMendapatkan laporan pelaksanaan Qurban\r\n\r\nTertarik donasi (?)\r\n\r\nHARGA QURBAN\r\n\r\nDomba Jantan (21-25 kg)\r\nRp 1.590.000/ ekor\r\n\r\nDomba Premium (30-35 kg)\r\nRp 2.590.000/ ekor\r\n\r\n \r\n\r\nKemudahan bayar\r\nBTN SY : 741 300 1290\r\nBSM : 711 2222 116\r\nBNI Sy: 0331725862\r\n\r\nKonfirmasi & Informasi : \r\n081 328 365 144\r\n085 726 573 510\r\n', '20191203134633_berita.jpg'),
(3, 'Nely', 10, 'Publik', '2020-08-13', '21:07:53', 'berita 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '20200826004700_berita.jpg'),
(6, 'Nely', 7, 'Publik', '2020-08-13', '21:20:32', 'Sering Sakit Kepala? Redakan dengan 5 Buah \'Sakti\' Inia', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '20200826101906_berita.jpeg'),
(9, 'Nely', 8, 'Publik', '2020-08-26', '10:38:42', 'Sering kejang-kejang', '<p>sedekah</p>\r\n', '20200826103903_berita.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(11) NOT NULL,
  `kd_admin` varchar(10) NOT NULL,
  `id_kategori` int(4) NOT NULL,
  `st_donasi` varchar(6) NOT NULL,
  `tgl_donasi` date NOT NULL,
  `jam_donasi` time NOT NULL,
  `judul_donasi` varchar(100) NOT NULL,
  `isi_donasi` text NOT NULL,
  `img_donasi` varchar(100) NOT NULL,
  `target_donasi` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `kd_admin`, `id_kategori`, `st_donasi`, `tgl_donasi`, `jam_donasi`, `judul_donasi`, `isi_donasi`, `img_donasi`, `target_donasi`) VALUES
(23, 'admin', 2, 'Blokir', '2019-05-15', '19:24:57', 'coba judul doang', '<p>tes isi ny</p>\r\n', '20190515192456_berita.jpg', 0),
(24, 'Nely', 10, 'Publik', '2019-05-28', '19:17:13', 'Rumah Pemberdayaan', '<p><!--StartFragment-->Rumah Pemberdayaan berfokus pada pembentukan unit-unit ekonomi produktif yang dilakukan melalui KUBE (Kelompok Usaha Bersama) dan PERMATA (Pengusaha Berdaya Mandiri Tangguh) berupa pembuatan usaha dengan basis individu. Program ini dikuatkan dengan berbagai pelatihan gratis melalui Rumah Mandiri. Diantaranya: Pelatihan menjahit, kursus elektronik dasar, membuat Handmade, membuat aneka Snack dan kue, Training manajemen keuangan Bisnis dan lain lain.<!--EndFragment--></p>\r\n', '20200826061832_donasi.jpg', 15000000),
(25, 'Nely', 10, 'Publik', '2019-05-28', '19:18:34', 'Rumah Pintar', '<p><!--StartFragment-->Rumah Pintar berorientasi kepada peningkatan kualitas pendidikan anak secara integral. Artinya Baitul Maal BUM tidak hanya sekedar memberikan biaya sekolah, tetapi terintegrasi dengan program lain seperti bimbingan belajar, pendampingan spiritual, training motivasi untuk membangun karakter anak, dan outbond training untuk memperkuat kemandirian serta kerjasama (hubungan sosial).<!--EndFragment--></p>\r\n', '20190528191834_donasi.jpg', 10000000),
(26, 'Nely', 10, 'Publik', '2019-05-28', '19:19:18', 'Rumah Sehat', '<p><!--StartFragment-->Rumah Sehat berupaya memberikan pelayanan kesehatan terjangkau untuk masyarakat. Diantara program yang telah berjalan adalah Ambulan gratis yang telah membantu berbagai kebutuhan masyarakat. Selain ambulan gratis program Baitul Maal terkait kesehatan adalah cek kesehatan gratis. seperti asam urat, gula darah dan kolesterol kepada masyarakat disertai dengan penyuluhan berbagai permasalahan kesehatan.<!--EndFragment--></p>\r\n', '20200102142529_donasi.jpg', 12000000),
(27, 'Nely', 10, 'Publik', '2019-05-28', '19:20:18', 'Rumah Dakwah', '<p><!--StartFragment-->Syiar keummatan dan dakwah menjadi salah satu program penting didalam Baitul Maal BMT BUM. Ada banyak kegiatan yang terangkum didalam program ini diantaranya adalah pembuatan MKU (Membangun Keluarga Utama) sebuah majelis taklim yang berbasis pemberdayaan ekonomi, Tebar Hewan Kurban khususnya di daerah yang belum ada qurban, Pelatihan Pulasara Jenazah khususnya untk ibu-ibu, Pawai Sambut Ramadhan, dan seminar-seminar agama.<!--EndFragment--></p>\r\n', '20190528192018_donasi.jpg', 16000000);

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `kode_donatur` int(11) NOT NULL,
  `nama_donatur` varchar(50) NOT NULL,
  `pswd_donatur` varchar(50) NOT NULL,
  `hp_donatur` varchar(13) NOT NULL,
  `email_donatur` varchar(50) NOT NULL,
  `img_donatur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`kode_donatur`, `nama_donatur`, `pswd_donatur`, `hp_donatur`, `email_donatur`, `img_donatur`) VALUES
(1, 'Muhamad Syahrul Mubarok', '25d55ad283aa400af464c76d713c07ad', '082328924622', 'muhamadsyahrulmubarok@gmail.com', 'Logo_MI.jpg'),
(11, 'Nely', '202cb962ac59075b964b07152d234b70', '082319287391', 'nely@gmail.com', '20200826111707_Donatur.jpg'),
(1234, 'aldi', '5cf15fc7e77e85f5d525727358c0ffc9', '0897956689', 'aldi@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(4) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(7, 'Zakat'),
(8, 'Sedekah'),
(9, 'Wakaf'),
(10, 'Program Kemasyarakatan');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `id_donasi` int(11) NOT NULL,
  `kode_donatur` varchar(10) NOT NULL,
  `id_bank` varchar(1) NOT NULL,
  `nominal` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `dukungan` text NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL,
  `status_pembayaran` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_donasi`, `kode_donatur`, `id_bank`, `nominal`, `tgl_transaksi`, `dukungan`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(19, 26, '11', '4', 54000, '2019-12-11', 'ajdsh', '19.jpg', '1'),
(22, 26, '11', '0', 250000, '2019-11-06', '', '20200827-22.jpg', '1'),
(25, 27, '11', '1', 100000, '2020-07-15', 'oke', '20200827-25.jpg', '1'),
(26, 24, '11', '1', 1500000, '2020-08-23', '', '20200827-26.jpg', '1'),
(27, 25, '11', '3', 8500000, '2020-08-27', '', '20200827-27.jpeg', '1'),
(28, 24, '11', '4', 5000000, '2020-08-27', 'asasas', '20200827-28.jpeg', '1'),
(29, 26, '11', '1', 0, '2020-08-27', 'asas', '0', '0'),
(30, 25, '11', '1', 0, '2020-08-27', '', '0', '0'),
(31, 25, '11', '1', 50000, '2020-08-27', '', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indexes for table `alokasi`
--
ALTER TABLE `alokasi`
  ADD PRIMARY KEY (`id_alokasi`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`kode_donatur`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alokasi`
--
ALTER TABLE `alokasi`
  MODIFY `id_alokasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `donatur`
--
ALTER TABLE `donatur`
  MODIFY `kode_donatur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1239;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
