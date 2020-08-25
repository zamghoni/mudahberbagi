-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 10:42 AM
-- Server version: 10.4.13-MariaDB
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
('Nely', 'Nely Lusiana', '2025927648fb48b37687517586f228ff', '085229654099', 'nelylusiana@gmail.com', '20190529115653_admin.jpg'),
('TWS', 'Tri wulan sisollandari', '202cb962ac59075b964b07152d234b70', '08988768865', '321triwulan@gmail.com', '0000_00_00.jpg'),
('WDY', 'Widya Anisa', '9146bfc09df862ee46fa9b512c72f9a6', '085956293655', 'wa054592@gmail.com', '0000_00_00.jpg');

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
(3, 'Nely', 8, 'Publik', '2020-08-09', '12:17:04', 'LAPORAN PELAKSANAAN TEBAR HEWAN QURBAN TAHUN 1441 H BAITUL MAAL BMT BUM', '<p>Alhamdulillah telah tersalurkan amanah berupa:</p>\r\n<p>71 ???? Qurban Kambing</p>\r\n<p>(69 qurban distribusi Tegal dan sekitarnya. 2 qurban distribusi mualaf tepian negeri Alor NTT)</p>\r\n\r\n<br>Qurban di bagi dalam bentuk paket daging sebanyak:</br>\r\n<p>1.295 ???? Paket Qurban</p>\r\n\r\n<br>*Daerah Penyaluran ????</br>\r\n<p>Kabupaten Tegal, kab Brebes, Kota Tegal dan Alor NTT.</p>\r\n\r\n<br>*Segmen Penerima Manfaat ????</br>\r\n<p>- Daerah Ekonomi Lemah</p>\r\n<p>- Wilayah minim qurban</p>\r\n<p>- Keluarga Anak Yatim</p>\r\n<p>- Keluarga Pasien Kanker Dampingan Baitul Maal BMT BUM</p>\r\n<p>- Komunitas Difabel Tegal dll</p>\r\n\r\n<br>Jazakumullahu Khairan Jaza kepada para donatur, relawan dan masyarakat yang telah membantu pelaksanaan Tebar Hewan Qurban ini semoga Allah menerima Qurban kita dan mengganti dengan rezeki yang makin berlipat dan berkah.</br>\r\n\r\n<br>_*Qurban Bikin Happy*_</br>\r\n\r\n<br>Jabat Erat</br>\r\n<p>Baitul Maal BMT BUM</p>\r\n\r\n<br>FB : Baitulmaalbum</br>\r\n<p>IG : Baitulmaal_BUM</p>\r\n<p>YT : BUM TV</p>\r\n\r\n<br>Cp : 085.878.888.789</br>', '20200809121703_berita.jpg'),
(4, 'Nely', 10, 'Blokir', '2020-08-11', '15:37:19', 'Aksi FOZ Jateng', 'Baitul Maal BMT BUM sebagai anggota Forum Zakat (FOZ) bersinergi mengatasi berbagai masalah karena dampak pandemi.\r\n\r\n<br>Alhamdulillah untuk atasi dampak pandemi, Forum Zakat Jateng Bagikan 102.773 Paket Sembako</br>\r\n\r\n<br>Semenjak pandemi covid-19 melanda Indonesia awal 2020 lalu, banyak masyarakat Jawa Tengah terkena dampaknya. Ribuan karyawan terkena PHK, guru honorer & guru ngaji yang tidak mendapat gaji, pedagang kaki lima yang tidak bisa berdagang, tukang ojek dan sopir angkot yang sepi pelanggan, sampai para penyandang difabel yang kehilangan penghasilan.</br>\r\n\r\n<br>Melihat fenomena itu, Organisasi Pengelola Zakat (OPZ) yang tergabung dalam Forum Zakat Jawa Tengah termasuk didalamnya Baitul Maal BMT BUM bergotong royong dan bersinergi untuk membantu warga yang terdampak covid 19.</br>\r\n\r\n<br>\"Banyak aksi yang sudah dilakukan diantaranya adalah penyemprotan desinfektan pada fasilitas publik, bantuan APD untuk tenaga medis, edukasi kepada masyarakat terkait perilaku hidup bersih dan sehat hingga pemberian paket sembako. \" Ungkap Djoko Adhi, selaku ketua Forum Zakat Jawa Tengah.</br>\r\n\r\n<br>Selengkapnya bisa di baca</br>\r\n<p>https://forumzakat.org/atasi-dampak-pandemi-forum-zakat-jateng-bagikan-102-773-paket-sembako/</p>', '20200811153718_berita.jpg');

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
  `target_donasi` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `kd_admin`, `id_kategori`, `st_donasi`, `tgl_donasi`, `jam_donasi`, `judul_donasi`, `isi_donasi`, `img_donasi`, `target_donasi`) VALUES
(24, 'Nely', 10, 'Publik', '2019-05-28', '19:17:13', 'Rumah Pemberdayaan', '<p><!--StartFragment-->Rumah Pemberdayaan berfokus pada pembentukan unit-unit ekonomi produktif yang dilakukan melalui KUBE (Kelompok Usaha Bersama) dan PERMATA (Pengusaha Berdaya Mandiri Tangguh) berupa pembuatan usaha dengan basis individu. Program ini dikuatkan dengan berbagai pelatihan gratis melalui Rumah Mandiri. Diantaranya: Pelatihan menjahit, kursus elektronik dasar, membuat Handmade, membuat aneka Snack dan kue, Training manajemen keuangan Bisnis dan lain lain.<!--EndFragment--></p>\r\n', '20200811152810_donasi.jpg', '15000000'),
(27, 'Nely', 10, 'Publik', '2019-05-28', '19:20:18', 'Rumah Dakwah', '<p><!--StartFragment-->Syiar keummatan dan dakwah menjadi salah satu program penting didalam Baitul Maal BMT BUM. Ada banyak kegiatan yang terangkum didalam program ini diantaranya adalah pembuatan MKU (Membangun Keluarga Utama) sebuah majelis taklim yang berbasis pemberdayaan ekonomi, Tebar Hewan Kurban khususnya di daerah yang belum ada qurban, Pelatihan Pulasara Jenazah khususnya untk ibu-ibu, Pawai Sambut Ramadhan, dan seminar-seminar agama.<!--EndFragment--></p>\r\n', '20190528192018_donasi.jpg', '16000000'),
(35, 'Nely', 9, 'Publik', '2020-08-11', '15:26:35', 'Wakaf Quran', 'Mungkin saat ini kita dengan mudah membeli Qur\'an yang Baru dan Bagus Kualitasnya untuk belajar membaca dan menghafalnya di Rumah.\r\n\r\n<br>Tapi, masih banyak saudara disekitar kita atau dipelosok daerah, yang tidak mampu membeli Qur\'an yang Baru dan Bagus Kualitasnya. Kalaupun ada kondisinya sudah lama dan usang. Sehingga untuk belajar dan menghafal mereka harus bergantian.</br>\r\n\r\n<br>Dengan berdonasi Wakaf Qur\'an Rp. 100.000. Anda bersinergi bersama Baitul Maal BMT BUM. Berbagi dan Menyalurkan Sejuta Qur\'an yang Baru dan Bagus Kualitasnya. Agar semakin banyak Masyarakat disekitar kita dan di pelosok daerah, yang bisa membaca dan menghafal Qur\'an.</br>\r\n\r\n<br>Bayangkan...</br>\r\n<p>Wakaf Qur\'an Anda</p>\r\n<p>Dibaca setiap hari..</p>\r\n<p>Dihafalkan dan diamalkan...</p>\r\n<p>Betapa banyak pahala mengalir..</p>\r\n<p>Dari setiap ayatnya...</p>\r\n<p>Bahkan setiap satu hurufnya..</p>\r\n\r\n<br>Info, Konfirmasi dan layanan jemput donasi wakaf :</br>\r\n<p>wa.me/6285878888789</p>', '20200811152634_donasi.jpg', '10000000');

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
(11, 'Nely', '202cb962ac59075b964b07152d234b70', '082319287391', 'nely@gmail.com', '3.jpg');

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
(41, 25, '11', '1', 120000, '2020-08-13', 'coba\r\n', '0', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kd_admin`);

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
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `donatur`
--
ALTER TABLE `donatur`
  MODIFY `kode_donatur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1237;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
