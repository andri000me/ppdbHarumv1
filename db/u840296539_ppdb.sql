-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 30, 2020 at 05:44 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u840296539_ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role_id`) VALUES
(1, 'malik', '6c34fd5b51dcdd56ad9204c67209d6b5', 1),
(2, 'ikrom', '6c34fd5b51dcdd56ad9204c67209d6b5', 1),
(3, 'nafi', 'bfac9ecf26c5716a5fd2d103ec748c07', 1),
(4, 'mila', 'bfac9ecf26c5716a5fd2d103ec748c07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pess` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`id_siswa`, `nama`, `pess`, `is_active`) VALUES
(1, 'ABCD', 9090, 0),
(2, 'USKA', 8826, 0),
(3, 'GVPL', 5894, 0),
(4, 'QDVQ', 3858, 0),
(5, 'ESPI', 9844, 0),
(6, 'QWNX', 6798, 0),
(7, 'MDGS', 4964, 0),
(8, 'SORQ', 9026, 0),
(9, 'QUHL', 5110, 0),
(10, 'AEVN', 4808, 0),
(11, 'HMNO', 7258, 0),
(12, 'FTFB', 5916, 0),
(13, 'ETOM', 7277, 0),
(14, 'NHZX', 1773, 0),
(15, 'OKFL', 2081, 0),
(16, 'BISG', 5011, 0),
(17, 'DWLQ', 4422, 0),
(18, 'NTBS', 1300, 0),
(19, 'YGFG', 1908, 0),
(20, 'OBOR', 4498, 0),
(21, 'TWUD', 8303, 0),
(22, 'PPDI', 3081, 0),
(23, 'IJEC', 3599, 0),
(24, 'UZUC', 8277, 0),
(25, 'GYSO', 5059, 0),
(26, 'DFTH', 6891, 0),
(27, 'VMIL', 6597, 0),
(28, 'ERNE', 9771, 0),
(29, 'HYCR', 4853, 0),
(30, 'FIGQ', 9759, 0),
(31, 'VJRN', 6305, 0),
(32, 'TNOR', 6090, 0),
(33, 'CGOV', 4210, 0),
(34, 'SQWG', 5839, 0),
(35, 'QCNX', 4897, 0),
(36, 'ERFC', 2708, 0),
(37, 'WQIJ', 7251, 1),
(38, 'SNRP', 8287, 1),
(39, 'ZQAQ', 6100, 1),
(40, 'ELLH', 1830, 1),
(41, 'DRPI', 2765, 1),
(42, 'PYKE', 3319, 1),
(43, 'SKIY', 7516, 1),
(44, 'FDNJ', 6196, 1),
(45, 'NSRP', 6723, 1),
(46, 'RCRP', 2929, 1),
(47, 'NAIA', 2574, 1),
(48, 'ZUKF', 8007, 1),
(49, 'DILM', 9392, 1),
(50, 'PGHH', 3592, 1),
(51, 'EAZG', 7024, 1),
(52, 'NFVD', 5514, 1),
(53, 'QMMS', 9735, 1),
(54, 'QXBP', 4187, 1),
(55, 'EBRA', 6796, 1),
(56, 'YIGG', 7553, 1),
(57, 'SQNJ', 4989, 1),
(58, 'WXPC', 2956, 1),
(59, 'GZXO', 3946, 1),
(60, 'GNTH', 7801, 1),
(61, 'OBQA', 2717, 1),
(62, 'SEAA', 7947, 1),
(63, 'AVAW', 1257, 1),
(64, 'TDFG', 2406, 1),
(65, 'IVOQ', 2650, 0),
(66, 'FJUU', 8063, 1),
(67, 'BOXQ', 5346, 1),
(68, 'EZAZ', 2712, 1),
(69, 'PYIZ', 3730, 1),
(70, 'NKES', 4744, 1),
(71, 'GDRE', 4154, 1),
(72, 'KLAM', 5888, 1),
(73, 'XHKT', 6182, 1),
(74, 'WDBK', 9898, 1),
(75, 'FDHX', 4283, 1),
(76, 'RGMQ', 8287, 1),
(77, 'BPMQ', 9245, 1),
(78, 'XSOF', 6258, 1),
(79, 'YDLD', 7004, 1),
(80, 'IEOH', 8109, 1),
(81, 'BJDW', 5076, 1),
(82, 'CLIU', 9001, 1),
(83, 'UBKQ', 3689, 1),
(84, 'ULYY', 7307, 1),
(85, 'OAFC', 8151, 1),
(86, 'CCZV', 1552, 1),
(87, 'GYZL', 9769, 1),
(88, 'BFRG', 5996, 1),
(89, 'ROYM', 7532, 1),
(90, 'NEKF', 1451, 1),
(91, 'ISLH', 9461, 1),
(92, 'EXJU', 5201, 1),
(93, 'NHLA', 9279, 1),
(94, 'CCTO', 7242, 1),
(95, 'JFXS', 4158, 1),
(96, 'URLZ', 2912, 1),
(97, 'KAXE', 9071, 1),
(98, 'ASYY', 4774, 1),
(99, 'GWZI', 2700, 1),
(100, 'RCTQ', 7228, 1),
(101, 'ZBTX', 9629, 1),
(102, 'AZAA', 3348, 1),
(103, 'XQXD', 7090, 1),
(104, 'SOHA', 6340, 1),
(105, 'GBDT', 6109, 1),
(106, 'CLIO', 8716, 1),
(107, 'VOJS', 2874, 1),
(108, 'PBAR', 1863, 1),
(109, 'TBLP', 3328, 1),
(110, 'MHBN', 4057, 1),
(111, 'WTML', 7552, 1),
(112, 'MXWL', 2288, 1),
(113, 'DFHB', 3211, 1),
(114, 'VOOC', 3018, 1),
(115, 'SGJH', 7453, 1),
(116, 'MPLE', 3350, 1),
(117, 'RDWP', 4875, 1),
(118, 'LLBU', 2910, 1),
(119, 'KJVK', 1315, 1),
(120, 'SGIN', 1396, 1),
(121, 'FRAX', 9182, 1),
(122, 'DEIB', 3667, 1),
(123, 'OEZB', 8931, 1),
(124, 'QJYK', 7122, 1),
(125, 'XZGG', 8590, 1),
(126, 'VDAN', 4270, 1),
(127, 'MYSM', 1497, 1),
(128, 'CFPX', 6718, 1),
(129, 'QCIC', 1196, 1),
(130, 'AMDH', 1126, 1),
(131, 'JFPL', 4717, 1),
(132, 'TJGS', 4874, 1),
(133, 'HFXS', 2186, 1),
(134, 'XQQX', 2296, 1),
(135, 'VRBO', 1009, 1),
(136, 'SWCT', 3652, 1),
(137, 'JQCK', 1147, 1),
(138, 'OASZ', 2174, 1),
(139, 'GLKQ', 4414, 1),
(140, 'GKAM', 2130, 1),
(141, 'GWCJ', 8042, 1),
(142, 'NZBO', 7175, 1),
(143, 'THKX', 5126, 1),
(144, 'MSFZ', 2212, 1),
(145, 'HMEN', 9598, 1),
(146, 'ACDH', 2777, 1),
(147, 'JGNJ', 3614, 1),
(148, 'HLSL', 7018, 1),
(149, 'DJNF', 6078, 1),
(150, 'LQPU', 3273, 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `kopes` text NOT NULL,
  `us` text NOT NULL,
  `ps` text NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `namapanggilan` varchar(100) NOT NULL,
  `asalsekolah` varchar(100) NOT NULL,
  `jeniskelamin` enum('laki-laki','perempuan') NOT NULL,
  `tempatlahir` varchar(255) NOT NULL,
  `tanggallahir` text NOT NULL,
  `berkebutuhankhusus` varchar(255) NOT NULL,
  `alamatlengkap` varchar(255) NOT NULL,
  `tempattinggal` varchar(255) NOT NULL,
  `namaayah` varchar(255) NOT NULL,
  `pendidikanayah` varchar(255) NOT NULL,
  `pekerjaanayah` varchar(255) NOT NULL,
  `penghasilanayah` varchar(255) NOT NULL,
  `namaibu` varchar(255) NOT NULL,
  `pendidikanibu` varchar(255) NOT NULL,
  `pekerjaanibu` varchar(255) NOT NULL,
  `penghasilanibu` varchar(255) NOT NULL,
  `nomorteleponayah` varchar(255) NOT NULL,
  `nomorteleponibu` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(255) NOT NULL,
  `kategori_biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`kopes`, `us`, `ps`, `id_siswa`, `namalengkap`, `namapanggilan`, `asalsekolah`, `jeniskelamin`, `tempatlahir`, `tanggallahir`, `berkebutuhankhusus`, `alamatlengkap`, `tempattinggal`, `namaayah`, `pendidikanayah`, `pekerjaanayah`, `penghasilanayah`, `namaibu`, `pendidikanibu`, `pekerjaanibu`, `penghasilanibu`, `nomorteleponayah`, `nomorteleponibu`, `email`, `status`, `kategori_biaya`) VALUES
('202020210001', 'DJNF', '6078', 73, 'KAYYISHA SHILA TSABITAH', 'CHILLA', 'STRAWBERRY PRESCHOOL AND DAYCARE', 'perempuan', 'JEMBER', '11 Januari 2014', 'Tidak', 'TEGAL BESAR CLUSTER B5', 'Bersama orangtua', 'VERI FAUZI ROHMAN', 'D4/S1', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'NOVI DYAH AYUNINGTYAS', 'D4/S1', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', '08133399371', '082140984550', 'ayuningtyasnovi13@gmail.com', 1, 6),
('202020210003', 'NZBO', '7175', 75, 'MUHAMMAD ALIF SYAHMI KASMILAN', 'ALIF', 'TK. KUNCUP HARAPAN', 'laki-laki', 'JEMBER', '18 Agustus 2013', 'Tidak', 'JALAN LANGSEP RAYA NOMOR 73 RT 004 RW 012 PERUMNAS PATRANG JEMBER', 'Bersama orangtua', 'YUDI TRI CAHYONO KASMILAN', 'D4/S1', 'Karyawan Swasta', 'lebh dari Rp. 2.000.000', 'AMIROH MAHFUDHO', 'D4/S1', 'Wiraswasta', 'Rp. 1.000.000 - Rp. 2.000.000', '082142254242', '081336375323', 'yudi3cahyono@gmail.com', 1, 4),
('202020210004', 'HMEN', '9598', 76, 'VANIA KALLISTA RAYNA AZ ZAHRA', 'VANIA', 'ISLAMIC KIDS HOUSE BUAH HATI KITA', 'perempuan', 'JEMBER', '07/12/2013', 'Tidak', 'Dusun Kidul Desa Sumber Jeruk Kecamatan KalisatRt 001 Rw 003', 'Bersama orangtua', 'BAHRODI', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 1.000.000 - Rp. 2.000.000', 'NURUS SARIFAH', 'SMA Sederajat', 'Tidak Bekerja', 'Tidak berpenghasilan', '085232658203', '082316708481', 'rudibahrudi@gmail.com', 1, 6),
('202020210005', 'ACDH', '2777', 78, 'Abyan Dzaky Al Faeyza', 'Abyan', 'TK Integral Adh Dhuha', 'laki-laki', 'Jember', '19 Februari 2014', 'Tidak', 'Jl. Dr. Sutomo gg VIII No.156 Jember', 'Bersama orangtua', 'Tri Anggoro', 'D4/S1', 'Lainnya', 'Rp. 2.000.000 - Rp. 4.999.000', 'Riza Dewi Al Ardi', 'S2', 'Karyawan Swasta', 'kurang dari Rp. 1.000.000', '085335100801', '085749470030', 'riza.adz@gmail.com', 1, 1),
('202020210006', 'HLSL', '7018', 79, 'MUHAMMAD ALKHALIFI IZZULHAQ', 'ALIF', 'TK AD-DHUHA JEMBER', 'laki-laki', 'BANYUWANGI', '03 April 2013', 'Tidak', 'JL SRIWIJAYA GG XXIV NO 6, SUMBERSARI, JEMBER', 'Bersama orangtua', 'FAISAL AHMAD', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 5.000.000 - Rp. 20.000.000', 'ANNISA CAHYANING ARINI', 'D4/S1', 'Tidak Bekerja', 'Tidak berpenghasilan', '085646794024', '085755816457', 'faizal.pecel@gmail.com', 1, 1),
('202020210007', 'Jqck', '1147', 80, 'Ghinzia Hafiza Khaira Lubna', 'Zeezee', 'TK alifia', 'perempuan', 'Jember', '18 Oktober 2013', 'Tidak', 'Perum pondok gede permai blok C. 37Kelurahan tegal besar, Kecamatan Kaliwates, Jember-jatim', 'Bersama orangtua', 'Setyo Agus Tanyono', 'D3', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'Luluk Indahyani', 'SMA Sederajat', 'Tidak Bekerja', 'Tidak berpenghasilan', '0852232818937', '08124942356', 'lulukindahyani3@gmail', 1, 6),
('202020210008', 'SWCT', '3652', 81, 'Kenzie Azka Alfarizy Putra Arinda', 'Kenzie', 'TK ABA 4, Mangli', 'laki-laki', 'Jember', '27 Desember 2013', 'Tidak', 'Perum. Darma Alam Blok Z - 18, RT 004, RW 014, Kel. Sempusari, Kec. Kaliwates, Kab. Jember', 'Bersama orangtua', 'Ahmad Arief', 'D4/S1', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'Endah Novi Triwijayanti', 'D4/S1', 'Tidak Bekerja', 'Tidak berpenghasilan', '085236733703', '085236666619', 'ahmadarief.syngenta@gmail.com', 1, 1),
('202020210009', 'GKAM', '2130', 82, 'NAYLA FAWWAZAH ASSYIFA DAHLAN', 'ILA', 'TK AISYIYAH BUSTANUL ATHFAL 01 BONDOWOSO', 'perempuan', 'BONDOWOSO', '30 Agustus 2013', 'Tidak', 'PERUM TAMANSARI INDAH BLOK M-06 KEL. TAMANSARI KEC. TAMANSARI KAB. BONDOWOSO', 'Bersama orangtua', 'MUHAMMAD SYAIFUD DAHLAN', 'D4/S1', 'Karyawan Swasta', 'Rp. 5.000.000 - Rp. 20.000.000', 'ARYVIA WINDA CHARULINA ARIYANTO', 'D4/S1', 'Tidak Bekerja', 'Tidak berpenghasilan', '08125255053', '081334555599', 'ciputh@gmail.com', 1, 5),
('202020210010', 'MSFZ', '2212', 83, 'Khania Azmi Fernanda', 'Khania', 'TK Adh-Dhuha', 'perempuan', 'Jember', '03 Oktober 2013', 'Tidak', 'Perum.Bumi Tegal Besar Blok BR 14C', 'Bersama orangtua', 'Ferry Fernanda A', 'D4/S1', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'Nurul Fuji W', 'D3', 'Lainnya', 'Rp. 2.000.000 - Rp. 4.999.000', '085336174899', '085236879699', 'nurulfuji3004@gmail.com', 1, 5),
('202020210011', 'OASZ', '2174', 84, 'Muhammad Fadhil Za\'im', 'Fadhil', 'TK Kuncup Harapan', 'laki-laki', 'Pati', '17 Februari 2013', 'Tidak', 'Jl. Langsep V /66, Jember', 'Bersama orangtua', 'Muhammad Atmus Syahriz Za\'im', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 5.000.000 - Rp. 20.000.000', 'Ellys Indriawati', 'D4/S1', 'Tidak Bekerja', 'Tidak berpenghasilan', '085234999576', '087721864718', 'ellys.indria@gmail.com', 1, 2),
('202020210012', 'XQQX', '2296', 85, 'AZKA GIBRAN HIDAYATULLAH', 'AZKA', 'TK AR-ROHIM', 'laki-laki', 'JEMBER', '16 Desember 2012', 'Tidak', 'JL.SULTAN AGUNG UTARA SMA ARJASA RT02 RW 02', 'Bersama orangtua', 'YANUAR PRAYUDI ALIEF TIANDINATA', 'S2', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'RAUDA IRIANTI', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', '08113634999', '08113634222', 'shinjo_nakano@yahoo.com', 1, 1),
('202020210013', 'LQPU', '3273', 86, 'M.USAMAH', 'USAMAH', 'TK ABA 1', 'laki-laki', 'JEMBER,20 MEI 2014', '20 Mei 2014', 'Tidak', 'JL.CEMPEDAK 1A NO.24 JEMBER', 'Bersama orangtua', 'SETIJA BUDI ADI PRANOTO', 'D4/S1', 'Pedagang Kecil', 'Rp. 1.000.000 - Rp. 2.000.000', 'WIWIN SRI WAHYUNI', 'SMA Sederajat', 'Tidak Bekerja', 'Tidak berpenghasilan', '-', '083852061632', 'aisyahainunm@gmail.com', 1, 2),
('202020210014', 'GLKQ', '4414', 87, 'Hafiza Qirani Andanyka', 'Hafiza', 'TKIT Buah Hati Kita', 'perempuan', 'Manado', '28 Maret 2014', 'Tidak', 'Perum Mastrip blok O no 21 Rt 03 Rw 18Sumbersari Jember', 'Bersama orangtua', 'Sony Ibnu Yudanto', 'D1', 'PNS/TNI/Polri', 'Rp. 5.000.000 - Rp. 20.000.000', 'Priska Widya Ariyani', 'D4/S1', 'Tidak Bekerja', 'kurang dari Rp. 1.000.000', '085746137452', '082228059191', 'dyariyani@gmail.com', 1, 5),
('202020210015', 'GWCJ', '8042', 88, 'Aisyah Kalila Putri Setiawan', 'Kalila', 'TK PGRI BHAKTI LESTARI PAKUSARI', 'perempuan', 'PEKANBARU', '13 April 2013', 'Tidak', 'JL. PB SUDIRMAN DUSUN GEMPAL RT 02 RW 08 PAKUSARI JEMBER', 'Bersama orangtua', 'AGUS SETIAWAN', 'D3', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'DEVI NITASARI', 'D4/S1', 'Tidak Bekerja', 'Tidak berpenghasilan', '081233000543', '081233304353', 'devinita2329@gmail.com', 1, 5),
('202020210016', 'vrbo', '1009', 89, 'callysta azka putri', 'caca', 'TK. CUT NYAK DHIEN', 'perempuan', 'JEMBER', '22 Januari 2014', 'Tidak', 'JLN. PIERE TENDEAN NO.99', 'Bersama orangtua', 'HERIANTO', 'S2', 'Wiraswasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'EMILIA FITRIANA BAHRI', 'D3', 'Wiraswasta', 'Rp. 1.000.000 - Rp. 1.999.000', '085322280444', '081237500055', 'EMILIAFITRIANACARA@GMAIL.COM', 1, 6),
('202020210017', 'JFPL', '4717', 90, 'Hasna Nabila Aldzulhijjah', 'Nabila', 'TKIT BUAH HATI KITA', 'perempuan', 'Jember', '25 Oktober 2013', 'Tidak', 'Jalan M yamin, belakang resto queen gardenia, kavling 2, nomer 2. Tegal besar', 'Bersama orangtua', 'Iman Sulaeman', 'D3', 'Karyawan Swasta', 'Rp. 1.000.000 - Rp. 1.999.000', 'Faizun Mardiana', 'D3', 'Tidak Bekerja', 'Tidak berpenghasilan', '082319389592', '085233756373', 'mardianafaizun@gmail.com', 1, 5),
('202020210018', 'THKX', '5126', 91, 'Arfareza Ramadhan', 'Rafa', 'TKIT Buah Hati Kita', 'laki-laki', 'Jember', '04 Agustus 2013', 'Tidak', 'Jalan Diponegoro, Jalan Raya Jember-Bondowoso, RT 01/RW 02 Krajan Barat Candijati Arjasa', 'Bersama orangtua', 'Umar Firjon Failani', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', 'Ika Rahmawati Sutejo', 'S2', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', '082234563380', '081335560333', 'ika.unej@gmail.com', 1, 1),
('202020210019', 'QCIC', '1196', 94, 'Ilyas Rafardhan Athalla', 'Ilyas', 'TK INSAN MULIA', 'laki-laki', 'Banyuwangi', '15 Mei 2013', 'Tidak', 'Perumahan Puri Bunga Nirwana Cluster Kelapa Gading Blok E8/9 Kelurahan Karangrejo, Kecamatan Sumbersari Jember', 'Bersama orangtua', 'Tri Hantoko Priyo Pamungkas', 'D4/S1', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'Dian Purbasari', 'S2', 'Lainnya', 'Rp. 2.000.000 - Rp. 4.999.000', '081316248100', '081387554551', 'dian.ipb2009@gmail.com', 1, 1),
('202020210020', 'CFPX', '6718', 95, 'FATIH NAZYFA SALSABILA', 'ZYFA', 'TK AMANAH', 'perempuan', 'JEMBER', '01 Februari 2014', 'Tidak', 'JLN. PANJAITAN VIII/ NO.120 RT 003 RW 024 KELURAHAN KEBONSARI KECAMATAN SUMBERSARI', 'Bersama orangtua', 'NUR HIDAYAT', 'SMA Sederajat', 'Karyawan Swasta', 'lebh dari Rp. 2.000.000', 'NIA IGUSTI ANGGRAINI', 'D4/S1', 'Lainnya', 'Rp. 500.000 - Rp. 999.000', '082334186028', '085259760262', 'igustianggraninia@gmail.com', 1, 5),
('202020210021', 'AMDH', '1126', 96, 'Mikayla Aguin Zhafira', 'Mika', 'TK Dharma Indria 1 Jember', 'perempuan', 'Jember', '08 April 2014', 'Tidak', 'Jalan bondoyudo No.15 Jember', 'Bersama orangtua', 'Agus Septiawan', 'D3', 'Karyawan Swasta', 'lebh dari Rp. 2.000.000', 'Indri', 'D4/S1', 'Lainnya', 'Rp. 500.000 - Rp. 999.000', '085330771092', '085336170558', 'mikaylaaguin@gmail.com', 1, 5),
('202020210022', 'XZGG', '8590', 97, 'Muhammad Ariq Milan Maulana', 'Ariq', 'TK Yasmin', 'laki-laki', 'Jember', '10/03/2013', 'Tidak', 'Jl. Sumatra VII/58 Sumbersari', 'Bersama orangtua', 'Donny Fadjri Maulana', 'D4/S1', 'Karyawan Swasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'Ayu Indirasari', 'D3', 'Lainnya', 'Rp. 1.000.000 - Rp. 2.000.000', '085258455569', '08124907725', 'ayiraa01@gmail.com', 1, 1),
('202020210023', 'OEZB', '8931', 98, 'Aerilyn bellvania cinta Kirana', 'Bellva', 'TK.Cut Nya\'dhien', 'perempuan', 'Jember', '22 Oktober 2013', 'Tidak', 'Jl.semeru raya kav.2, sumbersari, jember', 'Bersama orangtua', 'Setiyono', 'SMA Sederajat', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', 'Lidya Ika Puspitasari', 'SMA Sederajat', 'Tidak Bekerja', 'Tidak berpenghasilan', '081336805222', '082223394899', 'bellvaniacinta123@gmail.com', 1, 5),
('202020210024', 'DEIB', '3667', 99, 'Muhammad azri najmussabah', 'Azri', 'Tk Arni.jember', 'laki-laki', 'Jember ', '19 - 11- 2013', 'Tidak', 'Perum taman anggrek,D 5 no 22.tegal besar.jember', 'Bersama tua', 'Zerry anggrera', 'SMA Sederajat', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'Darwati', 'SMA Sederajat', 'Tidak bekerja', 'Tidak berpenghasilan', '082139593424', '081252654813', 'mutyazahwa.ma@gmail.com', 1, 1),
('202020210025', 'MYSM', '1497', 100, 'FARAH NUHA MUFIDA', 'FARAH', 'TKIT BUAH HATI KITA JEMBER', 'perempuan', 'JEMBER', '04 Maret 2014', 'Tidak', 'PERUMAHAN KALIURANG GREEN GARDEN BLOK C2/14 JEMBER', 'Bersama orangtua', 'DWI KRISNANTO', 'D4/S1', 'Karyawan Swasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'WANTIYAH', 'S2', 'PNS/TNI/Polri', 'lebh dari Rp. 2.000.000', '081393604271', '081931772544', 'everkriskros1981@gmail.com', 1, 10),
('202020210026', 'VDAN', '4270', 101, 'Azzahra Kaylarahma Rhinata', 'Kayla', 'TK Al Irsyad Al Islamiyyah Jember', 'perempuan', 'Jember', '24 Januari 2014', 'Tidak', 'Perum. Puri Bunga Nirwana, Cluster Bintaro E - 16 Jember', 'Bersama orangtua', 'Andi Sanata, S.T., M.T.', 'S2', 'PNS/TNI/Polri', 'Rp. 5.000.000 - Rp. 20.000.000', 'Barita Riska Irianingsih, A.Md. Keb.', 'D3', 'Wiraswasta', 'Rp. 1.000.000 - Rp. 1.999.000', '081358010900', '085655629777', 'andisanata@unej.ac.id', 1, 5),
('202020210027', 'SGIN', '1396', 102, 'IBRAHIM FAIQ RAHMAN HANIF', 'FAIQ', 'TKIT BUAH HATI KITA JEMBER', 'laki-laki', 'JEMBER', '08 Agustus 2013', 'Tidak', 'JLN.KH ABDUS SYUKUR NO 99 SUMBERSARI SUMBERSARI JEMBER', 'Bersama orangtua', 'DWI NURAHMANTO', 'S2', 'PNS/TNI/Polri', 'Rp. 5.000.000 - Rp. 20.000.000', 'ELIYATININGSIH', 'S2', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', '081328383811', '081234562692', 'dwinurahmanto.farmasi@unej.ac.id', 1, 2),
('202020210028', 'TJGS', '4874', 103, 'Queenadira el farisya purwadi', 'Queen', 'Tk ABA 1 Patrang', 'perempuan', 'Jember', '27 Juli 2013', 'Tidak', 'Jl. Pb. Sudirman gang 4 no. 57 kecamatan patrang jember', 'Bersama orangtua', 'Purwadi Yusroni', 'D4/S1', 'Karyawan Swasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'Mellyda octavia putri', 'D4/S1', 'Tidak Bekerja', 'Tidak berpenghasilan', '0852336115142', '085258458403', '', 1, 5),
('202020210029', 'KJVK', '1315', 104, 'AISYAH IZZATI AZZAHRA', 'AISYAH', 'TK ABA I PATRANG', 'perempuan', 'JEMBER', '09 Februari 2014', 'Tidak', 'JL,CENDRAWASIH I/6 JEMBER', 'Bersama orangtua', 'SUGING URIP PRAYOGO', 'SMA Sederajat', 'Lainnya', 'Rp. 1.000.000 - Rp. 1.999.000', 'ERLIN ANDRIYANI', 'SMA Sederajat', 'Tidak Bekerja', 'Tidak berpenghasilan', '085330845211', '082332603831', 'wiwinwiwin651@gmail.com', 1, 5),
('202020210030', 'QJYK', '7122', 105, 'SAGIFAH AHMAD KA\'WELEH', 'SAGIFAH', 'TK ABA 3', 'perempuan', 'BONDOWOSO', '10 Oktober 2013', 'Tidak', 'GRIYA TAMAN KAMPUS KALIURANGAN BLOK F NO.1', 'Bersama orangtua', 'AHMAD', 'D4/S1', 'Karyawan Swasta', 'lebh dari Rp. 2.000.000', 'NAF\'AH', 'SMP Sederajat', 'Tidak Bekerja', 'Tidak berpenghasilan', '085334596030', '085336084732', '', 1, 5),
('202020210031', 'RDWP', '4875', 106, 'Nafla Zafira Mahendra ', 'Nafla', 'Tk Al amin -  jember', 'perempuan', 'Jember', '16 Juni 2013', 'Tidak', 'Jl. Sumatra V nomer 86 A  jember', 'Bersama orangtua', 'Hendra Ganda Sundarta ', 'S2', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', 'Iftitah Erlina ', 'D4/S1', 'Tidak Bekerja', 'kurang dari Rp. 1.000.000', '082140865451', '082331358441', 'hendraganda0411@gmail.com', 1, 5),
('202020210032', 'LLBU', '2910', 107, 'MOCHAMMAD AYDAN SAJIDUR RAHMAN', 'AYDAN', 'TK BUAH HATI KITA', 'laki-laki', 'JEMBER', '18 April 2013', 'Tidak', 'PERUMAHAN MASTRIP O/2 LINGK. GUMUK KERANG RT/RW : 003/018, DESA/KELURAHAN SUMBERSARI, KECAMATAN SUMBERSARI, KAB. JEMBER,  KODE POS 68121', 'Bersama orangtua', 'DJOKO SETIANTO', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 5.000.000 - Rp. 20.000.000', 'NI\'MATUZZAHROH', 'D4/S1', 'Tidak Bekerja', 'Tidak berpenghasilan', '081234651145', '081216352574', 'djokos74@gmail.com', 1, 2),
('202020210033', 'HFXS', '2186', 108, 'NUHAMMAD ZAKARIA ERDYANSYAH', 'ERDY', 'TK IT BUAH HATI KITA', 'laki-laki', 'JEMBER', '02 Desember 2013', 'Tidak', 'JL. LETJEN SUPRAPTO 14/NO.162 KRAJAN RT 01 RW 05 KEBONSARI SUMBERSARI', 'Bersama orangtua', 'RUDY HANTORO', 'SMA Sederajat', 'Wiraswasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'ERLIN CITRA NINGSIH', 'D4/S1', 'Wiraswasta', 'lebh dari Rp. 2.000.000', '085236545678', '085258979400', 'erin.citra@yahoo.com', 1, 1),
('202020210034', 'SGJH', '7453', 109, 'DZAKIRA THALITA PUTRI AIRA', 'AIRA', 'TK AL AMIEN', 'perempuan', 'JEMBER', '28 Desember 2013', 'Tidak', 'JL. TIDAR  GREENLAND CLUSTER GN.11', 'Bersama orangtua', 'Ari Novianto Sukarno Putra', 'D4/S1', 'Karyawan Swasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'Yanuari Risda Rahmatika', 'D4/S1', 'Tidak Bekerja', 'Tidak berpenghasilan', '082336447404', '085204226390', 'Yanuaririsda@gmail.com', 1, 6),
('202020210035', 'FRAX', '9182', 110, 'Zavara Mega Izinbayeva', 'Zavara', 'TK AL QODIRI Jember', 'perempuan', 'Jember', '30 januari 2014', 'Tidak', 'Jalan Tawang Mangu 3', 'Bersama orangtua', 'Bambang Hermanto', 'SMA Sederajat', 'Karyawan Swasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'NOVEMBRIANI', 'SMA Sederajat', 'Tidak Bekerja', 'kurang dari Rp. 1.000.000', '081913879459', '085727300831', 'thejanoko11@gmail.com', 2, 5),
('202020210036', 'VOOC', '3018', 111, 'Faradiba Nafisa Ufaira', 'Aufa', 'TKIT Buah Hati Kita', 'perempuan', 'Jember', '25 Juli 2014', 'Tidak', 'Jl. Manyar Gg. Antrokan No 29, RT/RW 001/004, Desa Slawu, Kecamatan Patrang.', 'Bersama orangtua', 'Akwiyaga Jepatrika Purdana', 'D4/S1', 'Wiraswasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'Afia Ulyzana', 'D4/S1', 'Tidak Bekerja', 'kurang dari Rp. 500.000', '085735044445', '085745811116', 'afia.ulyzana@gmail.com', 1, 5),
('202020210037', 'Wtml', '7552', 112, 'Azzahra Shakila Fairuz Pohan', 'Zahra', 'TK ABBA 1 AISYAH', 'perempuan', 'Jember', 'Selasa/20 Mei/2014', 'Tidak', 'Jl.Manggis No.93 \r\nJember', 'Bersama orangtua', 'Suhemi Yahya Paisal Pohan', 'D4/S1', 'PNS/TNI/Polri', 'lebh dari Rp. 2.000.000', 'Yuliani Widyaningsih', 'SMA Sederajat', 'Tidak Bekerja', 'Tidak berpenghasilan', '082230127707', '08123496698', 'yulianiwidya@gmail.com', 1, 5),
('202020210038', 'DFHB', '3211', 113, 'muhammad azka maulana', 'azka', 'tk. qur\'an ibnu katsir', 'laki-laki', 'jember', '22 april 2013', 'Tidak', 'perum. puri bunga nirwana cluster bintaro blok m no.33 sumbersari jember', 'Bersama orangtua', 'dedi hari cahyono', 'SMA Sederajat', 'Wiraswasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'Ririn Rohmaniyah', 'D3', 'Tidak Bekerja', 'Tidak berpenghasilan', '08124943668', '085234064652', 'dedi6642@gmail.com', 1, 1),
('202020210039', 'CLIO', '8716', 114, 'Muhammad Raka Satria Abimanyu', 'Raka', 'Adh Dhuha', 'laki-laki', 'Banyuwangi', '23 Oktober 2013', 'Tidak', 'Jl kaliurang gg. swadaya no.3 jember', 'Bersama orangtua', 'Doni Kristanto', 'S2', 'PNS/TNI/Polri', 'Lainnya', 'Dievi widowati', 'D4/S1', 'Wiraswasta', 'Lainnya', '08124901408', '08123418879', 'dwid83@yahoo.com', 1, 1),
('202020210040', 'VOJS', '2874', 115, 'Nadhira Syalimah Ananta', 'Nadhira', 'TK Puspa Melati', 'perempuan', 'Jember', '01 Oktober 2013', 'Tidak', 'Jl. Hayam Wuruk IV/153B kaliwates Jember', 'Bersama orangtua', 'Nanang Pamungkas', 'D3', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', 'Denita Aisyah', 'D3', 'Tidak Bekerja', 'kurang dari Rp. 1.000.000', '081232303096', '085234623394', 'kalanganelite90@gmail.com', 1, 5),
('202020210041', 'PBAR', '1863', 116, 'Raisha dwi putri prasetyo', 'Acha', 'TK MUTIARA DINI', 'perempuan', 'Jember', '10 Juni 2014', 'Tidak', 'Jln. Kenanga III No.55 RT 03 RW 19 Lingk. Ledok kebon lor Kelurahan Jember kidul Kec. Kaliwates Kab. Jember', 'Bersama orangtua', 'Benny Dwi Prasetyo', 'SMA Sederajat', 'Tidak Bekerja', 'Rp. 1.000.000 - Rp. 1.999.000', 'Roida Agustina', 'D3', 'PNS/TNI/Polri', 'Rp. 1.000.000 - Rp. 1.999.000', '082132986040', '081332991634', 'bennydwip@gmail.com', 1, 6),
('202020210042', 'MPLE', '3350', 117, 'Kirana Dwitania Azzahra', 'Kirana', 'TK ABA III', 'perempuan', 'Jember', '26/04/2013', 'Tidak', 'Puri Bunga Nirwana Cluster Kelapa Gading B 34', 'Bersama orangtua', 'Kartika Setyawan', 'D3', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', 'Vinda Saftaria', 'D3', 'Tidak Bekerja', 'Tidak berpenghasilan', '081336264400', '082226426863', 'kakasetya@gmail.com', 1, 5),
('202020210043', 'MHBN', '4057', 118, 'Gaizka Fadzila Ashadeeyah Hadianto', 'Gege', 'TK Al Irsyad Al Islamiyah, Jember', 'perempuan', 'Jember', '05 Maret 2014', 'Tidak', 'Perum Semeru blok AA 8\r\nKecamatan Sumbersari\r\nKabupaten Jember', 'Bersama orangtua', 'Aldino Hadianto', 'D3', 'PNS/TNI/Polri', 'lebh dari Rp. 2.000.000', 'Firdiana Hardapuspita', 'D4/S1', 'Karyawan Swasta', 'lebh dari Rp. 2.000.000', '082232020183', '081331478856', 'aldinohadianto@gmail.com', 1, 5),
('202020210044', 'SOHA', '6340', 119, 'Ahmad Dzaky Akbar', 'Akbar', 'TK IT Harum Kalisat', 'laki-laki', 'Jember', '10 September 2013', 'Tidak', 'Dusun Rowo RT/RW 13/14 Desa/ Kecamatan Pakusari', 'Bersama orangtua', 'Dradjat Tri Atmadja', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', 'Naning Ratnaningtyas', 'D4/S1', 'Tidak Bekerja', 'kurang dari Rp. 1.000.000', '081233070371', '081249176303', 'triatmaja2009@gmail.com', 1, 1),
('202020210045', 'GBDT', '6109', 120, 'Arsakha Gerda Rosiana Putra Kaili', 'Erda', 'TK ALFATH JEMBER', 'laki-laki', 'Jember', '10 Desember 2013', 'Tidak', 'Perum Kebonagung Blok VII no. 13 Jember', 'Bersama orangtua', 'Abdul Rosi', 'D4/S1', 'Wiraswasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'Mardiana', 'D4/S1', 'Tidak Bekerja', 'Tidak berpenghasilan', '081249050081', '085230556637', 'Mardiana.Rosiana@gmail.com', 1, 1),
('202020210046', 'AZAA', '3348', 121, 'Hasna perempuan prayogo', 'Puan', 'TK Adh-Dhuha', 'perempuan', 'Jember', '20 februari 2014', 'Tidak', 'Perum Taman Gading blok k no. 13 jember', 'Bersama orangtua', 'Firman teguh prayogo', 'S2', 'Lainnya', 'Rp. 2.000.000 - Rp. 4.999.000', 'Amalia fatimah', 'D1', 'Tidak Bekerja', 'kurang dari Rp. 1.000.000', '081332202001', '085204910419', 'prayogo12@gmail.com', 1, 5),
('202020210047', 'XQXD', '7090', 122, 'KHANZA AZZALEA ERFANDA', 'KHANZA', 'TK AR ROHIM PATRANG', 'perempuan', 'SIDOARJO', '08 Agustus 2013', 'Tidak', 'Jl. Kepodang I Bintoro Patrang', 'Bersama orangtua', 'ERFAN JUNAIDI', 'SMA Sederajat', 'Wiraswasta', 'Rp. 1.000.000 - Rp. 1.999.000', 'IFKI FAUKHI PRIHARTINI', 'D3', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', '082144448222', '082144449955', 'ukikdylan@gmail.com', 1, 5),
('202020210048', 'TBLP', '3328', 123, 'Rasya Al Abian Pramana Putra', 'Bian', 'TKIT Buah Hati Kita', 'laki-laki', 'Jember', '26/07/2013', 'Tidak', 'Perum Kaliurang Cluster blok B8, Kel. Tegal gede, Kec. Sumbersari, Jember', 'Bersama orangtua', 'Mahardi Sandya', 'D3', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', 'Ayuning Gusti', 'D4/S1', 'Tidak Bekerja', 'Tidak berpenghasilan', '081358758671', '08113577811', 'mahardi.sp@gmail.com', 1, 2),
('202020210049', 'ZBTX', '9629', 124, 'Muhammad Fahrezi Ariyansyah Putra', 'Fahrezi', 'TK ABA 2 Jember', 'laki-laki', 'Jember', '28 November 2013', 'Tidak', 'Jln. Belitung Raya no 20 Jember', 'Bersama orangtua', 'Dian Ari Cahyono', 'D4/S1', 'Wiraswasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'Nurul Fajriah Fatmawati', 'D3', 'Karyawan Swasta', 'Rp. 1.000.000 - Rp. 2.000.000', '085236711229', '082331324563', 'nfajriah7181@gmail.com', 1, 1),
('202020210050', 'RCTQ', '7228', 125, 'Azmi Syahmi Zulhilmi', 'Azmi', 'TK Darus Sholah. Tegal Besar, Kaliwates, Jember.', 'laki-laki', 'Jember', '16 Mei 2013', 'Tidak', 'Perum. Istana Tegal Besar, Cluster Majapahit, Blok J-2.\r\nKel. Tegal Besar, Kec. Kaliwates, Kab. Jember.', 'Bersama orangtua', 'Eddy Mulyono', 'D4/S1', 'Karyawan Swasta', 'Lebih dari Rp. 20.000.000', 'Evi Rahmadewi', 'D4/S1', 'Tidak Bekerja', 'Tidak berpenghasilan', '0817847771', '08124935694', 'eddy.mulyono@gmail.com', 1, 2),
('202020210051', 'KAXE', '9071', 126, 'Muhammad Fathurrahman Yusuf', 'Fathur', 'TKIT Buah Hati', 'laki-laki', 'Tangerang', '13 Juni 2014', 'Tidak', 'Perumahan Argopuro\r\nCluster South Argopuro No.29, Kaliwates', 'Bersama orangtua', 'Teguh Prasetya', 'D4/S1', 'Karyawan Swasta', 'Lebih dari Rp. 20.000.000', 'Yunizar Heniwaty', 'D4/S1', 'Tidak Bekerja', 'Tidak berpenghasilan', '08159577577', '08179858300', 'yunizar.heniwaty@gmail.com', 1, 1),
('202020210052', 'URLZ', '2912', 127, 'Fatin Fathiya Sabryanza', 'Fathiya', 'Lab. School PAUD Yasmin', 'perempuan', 'Jember', '27 Juli 2013', 'Tidak', 'Jl. Karimata IV No. 13 Jember', 'Bersama orangtua', 'Mochammad Zain Hilmi', 'D4/S1', 'Wiraswasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'Merlyana Rengganis', 'D4/S1', 'Karyawan Swasta', 'lebh dari Rp. 2.000.000', '082334028345', '089683113339', 'merlyana.rengganis@gmail.com', 1, 6),
('202020210053', 'JFXS', '4158', 128, 'Zidni Ilma Salsabila', 'Ilma', 'TK IT BUAH HATI KITA', 'perempuan', 'Banyuwangi', '1 April 2013', 'Tidak', 'jln Basuki Rahmad nomer 25 jember', 'Bersama orangtua', 'TEGUH Sulhadi', 'SMA Sederajat', 'Pedagang Kecil', 'Rp. 1.000.000 - Rp. 1.999.000', 'Nadhiratul Ulfa', 'SMA Sederajat', 'Tidak Bekerja', 'Tidak berpenghasilan', '085230422990', '085850588055', 'Teguh.Sulhadi@gmaill.com', 1, 5),
('202020210054', 'CCTO', '7242', 129, 'Azka Sakha Wiranu', 'Azka', 'TK Al-Hijrah jember', 'laki-laki', 'Jember', '17 Mei 2013', 'Tidak', 'Jl Dr.Soetomo 1/2 Rambipuji-jember', 'Bersama orangtua', 'Pengky Sutanto Dwi Prasetyo', 'SMA Sederajat', 'Karyawan Swasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'Yati Kurniawati', 'D4/S1', 'Tidak Bekerja', 'kurang dari Rp. 1.000.000', '081336954888', '081249069058', 'yatikurniawati184@gmail.com', 1, 1),
('202020210055', 'NHLA', '9279', 130, 'Maudy Nayla Shanum', 'Maudy', 'TKIT Buah Hati Kita', 'perempuan', 'Jember', '13 Januari 2014', 'Tidak', 'Perumahan greenland blok GJ.26 jalan tidar - Jember', 'Bersama orangtua', 'Rudi Dwi Hartono', 'D4/S1', 'Wiraswasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'Monicha juanda', 'D4/S1', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', '081336704335', '089695914638', 'monicha.juanda@gmail.com', 1, 5),
('202020210056', 'EXJU', '5201', 131, 'Rahima Talita Shaliha', 'Tata', 'Tkit buah hati kita', 'perempuan', 'Jember', '03 September 2013', 'Tidak', 'Jl.sawo 1 no.8 purisadewo \r\nPatrang', 'Bersama orangtua', 'Rudi Hartono ', 'D4/S1', 'Wirausaha', 'Lainnya', 'Atik Faizah', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', '082334638405', '081336756976', 'abu.syafia@gmail.com', 1, 5),
('202020210057', 'ISLH', '9461', 132, 'HAMZAH BUDI PRABOWO', 'HAMZAH', 'PAUD TAAM \"MAWADDAH\"', 'laki-laki', 'JEMBER', '12 Juli 2013', 'Tidak', 'PERUM DEMANG MULIA D-11, RT 002, RW 006, KEBONSARI, SUMBERSARI, JEMBER', 'Bersama orangtua', 'IBNU PRABOWO', 'SMA Sederajat', 'Wiraswasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'ARIZA BUDI TUNJUNG SARI', 'S2', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', '081249544099', '081380726454', 'ibnuprabowo38@gmail.com', 1, 1),
('202020210058', 'ROYM', '7532', 133, 'Nur khanza almira putri fitrianto', 'Khanza ', 'TK Islam terpadu Azzahroh ', 'perempuan', 'Jember', '25 Desember 2013', 'Tidak', 'Jl slamet riyadi 139 patrang', 'Bersama orangtua', 'Sugeng supriyanto', 'D4/S1', 'Wiraswasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'Wiranti diah safitri', 'D3', 'Tidak Bekerja', 'Tidak berpenghasilan', '08113050263', '085336180927', 'ryantifitri89@gmail.com', 1, 5),
('202020210059', 'ROYM', '7532', 134, 'Nur khanza almira putri fitrianto', 'Khanza ', 'TK Islam terpadu Azzahroh ', 'perempuan', 'Jember', '25 Desember 2013', 'Tidak', 'Jl slamet riyadi 139 patrang', 'Bersama orangtua', 'Sugeng supriyanto', 'D4/S1', 'Wiraswasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'Wiranti diah safitri', 'D3', 'Tidak Bekerja', 'Tidak berpenghasilan', '08113050263', '085336180927', 'ryantifitri89@gmail.com', 1, 5),
('202020210060', 'OAFC', '8151', 135, 'Dimas Aryo Yamadipati', 'Dimas', 'TK Ad Dhuha', 'laki-laki', 'Jember', '19 Januari 2013', 'Tidak', 'Jl. Mastrip No 9', 'Bersama orangtua', 'Indra Ari Wijaya', 'D4/S1', 'Wiraswasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'Novita', 'SMA Sederajat', 'Wiraswasta', 'Rp. 1.000.000 - Rp. 2.000.000', '081554200206', '081554200206', '', 1, 3),
('202020210061', 'ULYY', '7307', 136, 'Fakhirah Najwa Asy Syarofi', 'Farah', 'Paud Quran Ibnu katsir', 'perempuan', 'Jember', '27/04/2014', 'Tidak', 'Perum Jember Permai II/C5 Jl. S. parman gg. Bentol jember', 'Bersama orangtua', 'Akhmad Najib Syarofi', 'D4/S1', 'Wiraswasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'Widya Palupi Purba', 'D4/S1', 'Tidak Bekerja', 'Lainnya', '081252700033', '081515783878', 'widyasyarofi@gmail.com', 1, 5),
('202020210062', 'BFRG', '5996', 137, 'Muhammad Akram Jaasir', 'Akram', 'TK Ohya Kodomoeng, Shizuoka, Japan', 'laki-laki', 'Jember', '01 September 2016', 'Tidak', 'Perum Puri Bunga Nirwana Cluster Bintaro Blok No.9 Jember', 'Bersama orangtua', 'Pramudya Dwi Aristya Putra', 'S3', 'PNS/TNI/Polri', 'lebh dari Rp. 2.000.000', 'Ari Indriana Hapsari', 'S2', 'Karyawan Swasta', 'Rp. 1.000.000 - Rp. 2.000.000', '09081303850', '09081303850', 'pramudya.fkip@unej.ac.id', 1, 1),
('202020210063', 'Bjdw', '5076', 138, 'Dzakira Talitha khumaira', 'Ara', 'TK as salam 2', 'perempuan', 'Jember', '06/06/2013', 'Tidak', 'Perum villa Tegal besar c/48 lingk Krajan barat RT 004 RW 007 Tegal besar Kaliwates jember', 'Bersama orangtua', 'Eko Yudha prasetyo', 'SMA Sederajat', 'Karyawan Swasta', 'Rp. 1.000.000 - Rp. 1.999.000', 'Linda herawati', 'SMA Sederajat', 'Wiraswasta', 'Rp. 1.000.000 - Rp. 1.999.000', '085337778011', '085236277581', 'ekoyudha5766@gmail.com', 1, 5),
('202020210064', 'UBKQ', '3689', 139, 'Nasywa Rania El Fajria', 'Nasywa', 'TKIT BUAH HATI KITA', 'perempuan', 'Jember', '06 Februari 2014', 'Tidak', 'Jl. Blimbing IV nomor 8 Jember Lor Patrang', 'Bersama orangtua', 'Eko Wahyudi Anto', 'D4/S1', 'Wirausaha', 'Rp. 2.000.000 - Rp. 4.999.000', 'Prih Sulistiyani', 'D4/S1', 'Tidak Bekerja', 'Tidak berpenghasilan', '085201667766', '08113517766', 'ekowahyudi_a@yahoo.com', 1, 6),
('202020210065', 'CLIU', '9001', 140, 'Mutia Anggun Zuleyka', 'Mutia', 'TK CAHAYA NURANI', 'perempuan', 'JEMBER', '16 Januari 2016', 'Tidak', 'Jalan Nias III Nias Cluster A1 Sumbersari, Jember', 'Bersama orangtua', 'OSCAR TINO WIBOWO', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', 'MEGA WULANDARI', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', '085335536484', '085290640159', 'wulandarimega100@gmail.com', 1, 6),
('202020210066', 'CCZV', '1552', 141, 'Zaidan Rafi Ihsan', 'Rafi', 'TK An nur', 'laki-laki', 'Klaten', '25 Maret 2013', 'Tidak', 'Bumi Tegal besar blok EC 22', 'Bersama orangtua', 'Muhammad Irfan Aminudin', 'D3', 'Karyawan Swasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'Eny Nur Syamsiyah', 'D3', 'Karyawan Swasta', 'Rp. 1.000.000 - Rp. 2.000.000', '085236370017', '085229769021', 'enynursyamsiah@gmail.com', 1, 1),
('202020210067', 'NEKF', '1451', 142, 'Raisa Muthia Azzahra', 'Raisa', 'TKIT Alfath Griya Mangli', 'perempuan', 'Jember', '19 Januari 2014', 'Tidak', 'Griya Mangli Indah Blok D-4A/5 Jember ', 'Bersama orangtua', 'Rakhmad Ragil Febriyanto', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', 'Ranita Wahyuninghadi ', 'D1', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', '082337108194', '085655817101', 'heauw.uti@gmail.com', 1, 5),
('202020210068', 'YDLD', '7004', 143, 'Henriko arrasyid budiyono', 'Riko', 'TK YWKA', 'laki-laki', 'Jember', '08 Februari 2013', 'Tidak', 'Jl.bungur GG Tugu kavling 4 blok I-5 kelurahan jember lor kecamatan patrang JEMBER', 'Bersama orangtua', 'EKO BUDIYONO', 'SMA Sederajat', 'Lainnya', 'Rp. 5.000.000 - Rp. 20.000.000', 'Ari indah permanasari', 'D4/S1', 'Lainnya', 'Rp. 1.000.000 - Rp. 2.000.000', '082330432034', '085234979001', 'ebyehm3@gmail.com', 1, 1),
('202020210069', 'IEOH', '8109', 144, 'IQRIMA KHOUDZ ILMI', 'RIMA', 'TK IT BUAH HATI', 'perempuan', 'JEMBER', '11 Maret 2014', 'Tidak', 'JALAN KARANG SETRA TEGAL GEDE NO 16 JEMBER', 'Bersama orangtua', 'HADI SUTRISNO', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 1.000.000 - Rp. 2.000.000', 'NANING INDRIAWATI', 'D3', 'Wiraswasta', 'kurang dari Rp. 1.000.000', '085334884474', '085204217778', 'ajenganind@gmail.com', 1, 5),
('202020210070', 'XSOF', '6258', 145, 'Annisa Khaira Rahmah', 'Khaira', 'TK As Salam 2 Jember', 'perempuan', 'Jember', '21 Agustus 2013', 'Tidak', 'Jl. Rasamala No. 26 Perum BTN Baratan Permai Jember', 'Bersama orangtua', 'Agus Zainur Rahmat', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 5.000.000 - Rp. 20.000.000', 'Ari Sita Nastiti', 'S2', 'Lainnya', 'Rp. 2.000.000 - Rp. 4.999.000', '082319244516', '083853301587', 'khaira.sita@gmail.com', 1, 5),
('202020210071', 'GYZL', '9769', 146, 'Afiqah Aida batrisya', 'Afiqah', 'TK jember permai 1', 'perempuan', 'Madiun', '24 Oktober 2013', 'Tidak', 'Perum semeru blok AA no 9 jalan semeru sumber sari jember', 'Bersama orangtua', 'Tabah suwasono', 'SMA Sederajat', 'Tidak Bekerja', 'Rp. 5.000.000 - Rp. 20.000.000', 'Yulia Noor wahyuningsih', 'SMA Sederajat', 'Tidak Bekerja', 'kurang dari Rp. 1.000.000', '081232065294', '081217021604', 'tabahtsa123@gmail.com', 1, 5),
('202020210072', 'BPMQ', '9245', 147, 'SULTAN MAULANA NUGROHO', 'SULTAN', 'TK R.A MIFTAHUSSALAM', 'laki-laki', 'JEMBER', '21 Januari 2014', 'Tidak', 'PERUMAHAN TAMAN GADING BLOK AZ 7 JEMBER', 'Bersama orangtua', 'ANDHY NUGROHO', 'D4/S1', 'Lainnya', 'Rp. 1.000.000 - Rp. 2.000.000', 'NURLAILI SYAFARIAH', 'D4/S1', 'Karyawan Swasta', 'Rp. 1.000.000 - Rp. 1.999.000', '08113621986', '081336422364', 'farahqueen75@gmail.com', 1, 2),
('202020210074', 'ASYY', '4774', 149, 'Aufa Zafran Setyawan', 'Zafran', 'TKIT BUAH HATI KITA', 'laki-laki', 'Banyuwangi', '6 April 2014', 'Tidak', 'Kaliurang cluster D5', 'Bersama orangtua', 'Eka Nova Setyawan', 'D4/S1', 'Karyawan Swasta', 'lebh dari Rp. 2.000.000', 'Mu\'rifah', 'D4/S1', 'Wiraswasta', 'Rp. 1.000.000 - Rp. 2.000.000', '081237365887', '082331977750', 'rifamurifah88@gmail.com', 1, 9),
('202020210075', 'MXWL', '2288', 150, 'KANZIA HADZKADINA', 'KANZIA', 'TD BUAH HATI KITA', 'perempuan', 'SUKOHARJO', '21 April 2013', 'Tidak', 'PERUMAHAN GREEN TEGAL, JL. TONDANO, GEDE BLOK F 43, SUMBER SARI', 'Bersama orangtua', 'ANANG FEBRI PRASETYO', 'S2', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', 'DWI HASTUTI', 'S2', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', '082141124166', '081901336318', 'anangfebri@polije.ac.id', 1, 5),
('202020210076', 'WDBK', '9898', 151, 'Quaneisha Aisy Nasywa', 'Ais', 'TK ASSALAM JEMBER', 'perempuan', 'JEMBER', '17 Juni 2014', 'Tidak', 'PERUM BUKIT PERMAI CLASTER BLOK DF 10\r\nJEMBER', 'Bersama orangtua', 'Agustusi Lastian', 'D4/S1', 'Karyawan Swasta', 'lebh dari Rp. 2.000.000', 'Lien Safari Nuryana', 'Tidak Sekolah', 'Tidak Bekerja', 'Tidak berpenghasilan', '085258907360', '085100153403', '', 1, 5),
('202020210077', 'FDHX', '4283', 152, 'Abrisam Daanish El Syalaby', 'Daanish', 'TK Permata Hati Situbondo', 'laki-laki', 'Situbondo', '31 Desember 2013', 'Tidak', 'Bernady Land Slawu Cluster Plumeria Blok A8', 'Bersama orangtua', 'Ahmad Syalaby', 'D4/S1', 'Karyawan Swasta', 'Rp. 5.000.000 - Rp. 20.000.000', 'Nodistya Septian Indrastana', 'S2', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', '081556668822', '085649976633', 'n.s.indrastana@gmail.com', 2, 1),
('202020210078', 'GWZI', '2700', 153, 'Muhammad Rakai Adyuta', 'Rakai', 'TK Buah Hati Kita', 'laki-laki', 'Jember', '14 November 2012', 'Tidak', 'Perum Puri Bunga Nirwana Cluster Pondok Indah C9 Karangrejo Kec. Sumbersari', 'Bersama orangtua', 'Sulung Lukman Cahyono', 'D4/S1', 'PNS/TNI/Polri', 'lebh dari Rp. 2.000.000', 'Selviya Nina Budiarti', 'D4/S1', 'Wiraswasta', 'Rp. 1.000.000 - Rp. 2.000.000', '081336390744', '085258574722', 'selviyanina01@gmail.com', 1, 1),
('202020210079', 'KLAM', '5888', 154, 'Roy Faris Ahnaf Zeroun', 'Roy', 'KB BSTAR', 'laki-laki', 'Jember', '30 Juli 2013', 'Tidak', 'Jl. Mawar XI no 14 Jember', 'Bersama orangtua', 'Endra Nurhadi Rahmat', 'SMA Sederajat', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'Fatimah Ulhikma R', 'D3', 'Tidak Bekerja', 'kurang dari Rp. 1.000.000', '085236286500', '085234609337', '', 1, 1),
('202020210080', 'XHKT', '6182', 155, 'ASYAFAH AUDRINA BELVANIA', 'SYAFA', 'TK IT BUAH HATI KITA', 'perempuan', 'JEMBER', '17 Agustus 2013', 'Tidak', 'JL.RIAU NO 99B RT 03.RW.22 SUMBERSARI -JEMBER', 'Bersama orangtua', 'ROBBY SUSANTO', 'D4/S1', 'Wiraswasta', 'lebh dari Rp. 2.000.000', 'ARDHANIAH DWI ERLINAH', 'D4/S1', 'Lainnya', 'Rp. 1.000.000 - Rp. 1.999.000', '082141510099', '085649672021', 'asyafah13@gmail.com', 1, 6),
('202020210081', 'PYIZ', '3730', 156, 'NAUFAL RAFKA ABQORY', 'RAFKA', 'SEKOLAH LABORATORIUM PAUD YASMIN UNMUH JEMBER', 'laki-laki', 'KEDIRI', '06 Oktober 2013', 'Tidak', 'PERUMAHAN PAJAK NO 148 JL LETJEN S PARMAN II, KEBONSARI, SUMBERSARI, JEMBER', 'Bersama orangtua', 'ARI KRISDIANTO', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 5.000.000 - Rp. 20.000.000', 'INTAN KHOIRUN AMALA', 'SMA Sederajat', 'Tidak Bekerja', 'Tidak berpenghasilan', '085691994709', '085649050488', 'ayikhost@gmail.com', 1, 1),
('202020210082', 'GDRE', '4154', 157, 'Muhammad Atharizz Bilfaqih', 'Atharizz', 'TA Hidayatul Mubtadiin', 'laki-laki', 'Banyuwangi', '10 Juni 2013', 'Tidak', 'Perumahan Pajak\r\nJl. Letjen. S. Parman Gg. 2,  Kebonsari - Sumbersari - Kab. Jember', 'Bersama orangtua', 'Dyno Yuniarta', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 5.000.000 - Rp. 20.000.000', 'Ussisatil Fiqhiyyah', 'D4/S1', 'Tidak Bekerja', 'Tidak berpenghasilan', '082330233433', '082330233733', 'crashbondet@gmail.com', 1, 1),
('202020210083', 'NKES', '4744', 158, 'Sylan Aisha Farhana', 'Sylan', 'MI Al-Huda', 'perempuan', 'Banyuwangi', '30 Desember 2009', 'Tidak', 'Perumahan Pajak\r\nJl. Letjen. S. Parman Gg. 2,  Kebonsari - Sumbersari - Kab. Jember', 'Bersama orangtua', 'Dyno Yuniarta', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 5.000.000 - Rp. 20.000.000', 'Ussisatil Fiqhiyyah', 'D4/S1', 'Tidak Bekerja', 'Tidak berpenghasilan', '082330233433', '082330233733', 'crashbondet@gmail.com', 1, 5),
('202020210084', 'EZAZ', '2712', 159, 'Rayya Quaeneisha Al Mahdi', 'Rayya', 'TKIT Al Husna', 'perempuan', 'Jember ', 'Sabtu 7 Septembember 2013', 'Tidak', 'Jl. Kalimantan X /65 rt 03 rw 28 kel. Sumbersari kec. Sumbersari Jember', 'Bersama orangtua', 'Didik suyanto', 'SMA Sederajat', 'Wiraswasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'Ulmiyah Faridatus Sakdiyah', 'SMA Sederajat', 'Tidak Bekerja', 'Lainnya', '081249138022', '', '', 1, 5),
('202020210085', 'BOXQ', '5346', 160, 'MUHAMMAD HARITS AL FATIH', 'FATIH', 'TK AL IRSYAD AL ISLAMIYAH JEMBER', 'laki-laki', 'PONOROGO', '08 November 2013', 'Tidak', 'Perumahan Karimata Dreamland Kavling 15\r\nJalan Gunung Agung III Sumbersari Jember', 'Bersama orangtua', 'AKHID NUGRAHA', 'D4/S1', 'Lainnya', 'Rp. 5.000.000 - Rp. 20.000.000', 'NIKEN NURDIANA', 'D4/S1', 'Lainnya', 'Rp. 5.000.000 - Rp. 20.000.000', '085334246507', '081334657084', 'nurdiananiken@gmail.com', 1, 1),
('202020210086', 'FJUU', '8063', 161, 'Amira Jasmine Azhmi Athifa', 'Yasmin', 'TK Adh Dhuha', 'perempuan', 'Jember', '04 April 2014', 'Tidak', 'Perumahan kaliurang green garden H-07 no 05', 'Bersama orangtua', 'Chairul Bhakti', 'D4/S1', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'Anisa Rosita Rahmawati', 'D4/S1', 'Tidak Bekerja', 'kurang dari Rp. 1.000.000', '085318880055', '082331296707', 'chairulbhakti@gmail.com', 2, 5),
('202020210087', 'TDFG', '2406', 162, 'Ahmad Furqon Hamizan', 'Furqon', 'TK ABA 3 Jember', 'laki-laki', 'Jember', '10 September 2013', 'Tidak', 'Jl. Bangka Gg. VI No.9 Jember', 'Bersama orangtua', 'Rizki Nur Wijaya', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', 'Anita Trisiana', 'S2', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', '082141468579', '081358255140', 'rizkiair.jember@gmail.com', 1, 3),
('202020210088', 'SEAA', '7947', 163, 'Alivio Muhammad gunawan', 'Vio', 'TK pelita hati', 'laki-laki', 'Jember', '16/01/2014', 'Tidak', 'Perum Mastrip blok O no 17', 'Bersama orangtua', 'Akhmad Gunawan baktiono', 'D4/S1', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'Wita erida dwiwara', 'D4/S1', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', '082244115656', '085204960863', 'witaerida21@gmail.com', 2, 1),
('202020210089', 'AVAW', '1257', 164, 'ALYA ZAFIRA DERMAWAN', 'ALYA', 'TK AL IRSYAD', 'perempuan', 'JEMBER', '04 Februari 2014', 'Tidak', 'JL. TAWANGMANGU NO.80 JEMBER', 'Bersama orangtua', 'HENDRI DERMAWAN', 'D4/S1', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'RIZKI PARAMITA SYAHATA', 'D4/S1', 'Tidak Bekerja', 'Rp. 2.000.000 - Rp. 4.999.000', '081231011980', '081336710559', 'rizkiparamita70@gmail.com', 1, 6),
('202020210090', 'OBQA', '2717', 165, 'Muhammad Akhdan El Rafif', 'Rafif', 'Sekolah Integral Adh Dhuha Jember', 'laki-laki', 'Jember', '29 Mei 2014', 'Tidak', 'Perumahan Kaliurang Cluster Blok B 1 A Tegalgede Sumbersari Jember', 'Bersama orangtua', 'Arif Wahyudi', 'D4/S1', 'Wiraswasta', 'lebh dari Rp. 2.000.000', 'Yuli Astutik', 'D4/S1', 'Lainnya', 'lebh dari Rp. 2.000.000', '082337110565', '08123467923', 'zuliasaz@gmail.com', 1, 2),
('202020210091', 'GZXO', '3946', 166, 'Adelia kaiyisah ashakila', 'Kila', 'TKIT Buah hati kita', 'perempuan', 'Jember', '11 mei 2013', 'Tidak', 'Perum pessona wirolegi blok H 15', 'Bersama orangtua', 'M.Ridwan', 'SMA Sederajat', 'Wiraswasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'Roisatul umaiyah', 'D4/S1', 'Lainnya', 'Rp. 500.000 - Rp. 999.000', '081336635050', '081330362680', '', 1, 5),
('202020210092', 'GNTH', '7801', 167, 'AQILLA GANSHA ADHIYASTA', 'GANSHA', 'RA Miftahus Salam', 'laki-laki', 'Jember', '04/07/2013', 'Tidak', 'Perum. TAMAN GADING Blok AN 10 RT 4 RW 40 Tegal besar Kaliwates Jember', 'Bersama orangtua', 'IMRON ROSYIDI', 'D4/S1', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'HANDRIANI DWI RAHAYU', 'D4/S1', 'Tidak Bekerja', 'Tidak berpenghasilan', '081232492464', '081231691329', 'imronjbr@gmail.com', 1, 1),
('202120220093', 'WXPC', '2956', 168, 'EL DASTAN ARFA DWIPRAWIRA', 'DASTAN', 'TK YASMIN', 'laki-laki', 'JEMBER', '04 Januari 2014', 'Tidak', 'PERUM PURI BUNGA NIRWANA CLUSTER BINTARO BLOK B4 RT01 RW22 KARANGREJO SUMBERSARI JEMBER', 'Bersama orangtua', 'YOHANES SETYABUDI', 'D4/S1', 'Lainnya', 'Rp. 5.000.000 - Rp. 20.000.000', 'BHYRNA FREISTIANY', 'D4/S1', 'Tidak Bekerja', 'Tidak berpenghasilan', '081234370004', '085231080748', 'bhyrna.freistiany@gmail.com', 1, 2),
('202120220094', 'SQNJ', '4989', 169, 'Muhammad Ayaturrohman', 'Ayat', 'PAUD Ibnu Katsir', 'laki-laki', 'Jember', '28 Mei 2013', 'Tidak', 'Perum Tegal Besar Permai 1 Blok A2 RT 1 RW 09 Kelurahan Tegal Besar Kecamatan Kaliwates Jember', 'Bersama orangtua', 'Novan Aulia Rohman', 'S2', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', 'Nila Sholicha', 'D4/S1', 'Lainnya', 'kurang dari Rp. 1.000.000', '081235757418', '081559913044', 'novan.aulia@gmail.com', 1, 11),
('202120220095', 'YIGG', '7553', 170, 'Jihan Putri Azzahra', 'Ara', 'Paud Darussalam', 'perempuan', 'Jember', '06 Maret 2013', 'Tidak', 'Perumahan green Tegal gede residence blok g 47\r\nTegal gede - sumbersari- Jember', 'Bersama orangtua', 'Bahtiar efendi', 'SMA Sederajat', 'PNS/TNI/Polri', 'Rp. 1.000.000 - Rp. 2.000.000', 'Ratna Anita sari', 'D3', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', '082332583529', '085233612479', 'ratnaaratip@gmail.com', 1, 5),
('202120220096', 'EBRA', '6796', 171, 'Aqila Naafa Syahira', 'Aqila', 'TK Assalam', 'perempuan', 'Jember', '18 Desember 2013', 'Tidak', 'Jl. Halmahera IV/18 Jember', 'Bersama orangtua', 'Jeffri Chrisdiawan', 'D4/S1', 'Lainnya', 'Rp. 5.000.000 - Rp. 20.000.000', 'Dian Alfiyatul Uliyah', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 5.000.000 - Rp. 20.000.000', '081235444454', '081234597959', 'jeffrichrisdiawan1983@gmail.com', 1, 5),
('202120220097', 'QXBP', '4187', 172, 'Muhammad Asyraf Athaya Hidayat', 'Athaya', 'TKIT Buah Hati Kita', 'laki-laki', 'Jember', '26 Februari 2013', 'Tidak', 'Perum Mastrip Blok F no 11\r\nJember', 'Bersama orangtua', 'Very Hidayat', 'D3', 'Wiraswasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'Vita Septina Anggraeni', 'D4/S1', 'Wiraswasta', 'Rp. 2.000.000 - Rp. 4.999.000', '082257711116', '08123497926', 'my_pipit84@yahoo.com', 1, 2),
('202120220098', 'NFVD', '5514', 173, 'Muhammad Aryasatya Bhirawa', 'Arbhi', 'TKIT Buah Hati Kita Jember', 'laki-laki', 'Jember', '23 Januari 2014', 'Tidak', 'Jalan Kalimantan XII No 27 Sumbersari Jember', 'Bersama orangtua', 'Mahendra Yudya Bhirawa, SP', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', 'Indaryani, SAP', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', '081249792824', '082332943878', 'indaryani.fisip@unej.ac.id', 1, 2),
('202120220099', 'EAZG', '7024', 174, 'Sya\'ba Ibnu Ramadhan Niam', 'Sya\'ba', 'TK Ad-Duha', 'laki-laki', 'Jember', '04 Juli 2013', 'Tidak', 'Perumahan Mastrip Blok EE-10 Kecamatan Sumbersari Jember', 'Bersama orangtua', 'Muhammad Indrorun Niam', 'D4/S1', 'Wiraswasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'Elly Antika', 'S2', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', '081332077345', '08124946073', 'elly_antika@polije.ac.id', 1, 1),
('202120220100', 'PGHH', '3592', 175, 'QUEENZA AZRA RAZITA SISWANTO', 'Zita', 'Lab school yasmin', 'perempuan', 'Kabupaten Jember', '03 mei 2014', 'Tidak', 'Perum new taman bambu B7 wirolegi- sumbersari - jember', 'Bersama orangtua', 'Dodik heru siswanto', 'D4/S1', 'Karyawan Swasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'Fresy tri sugianto', 'D3', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', '081336877673', '085235946000', 'fresytrisugianto@gmail.com', 1, 6),
('202120220101', 'RGMQ', '8287', 176, 'Kemilau Qalbi Mumtaza', 'Qalbi', 'TK Adh Dhuha', 'perempuan', 'Jember', '02 April 2014', 'Tidak', 'Jl Tawangmangu II/102\r\nTegal Gede Jember', 'Bersama orangtua', 'Danang Yudistiro ', 'S2', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', 'Augustia Farahdilla', 'D4/S1', 'Tidak Bekerja', 'kurang dari Rp. 1.000.000', '08125299727', '087762000981', 'dystiro@gmail.com', 1, 5),
('202120220102', 'DILM', '9392', 177, 'Shakila Azzahra Nadhifa', 'Shakila', 'TK ABA 1 Kaliwates', 'perempuan', 'Jember', '13/Maret/2014', 'Tidak', 'Perumahan Bedadung Indah Blok J 14 RT 4 RW 7\r\nKel. Kebonsari Kec. Sumbersari Jember', 'Bersama orangtua', 'Achmad Nadip Setyo Budi', 'D4/S1', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'Linna Anggraeni', 'D3', 'Tidak Bekerja', 'Tidak berpenghasilan', '08123495606', '085310129966', 'nadipachmad@gmail.com', 1, 5),
('202120220103', 'qmms', '9735', 178, 'TSALISA ARAFAH RIDHO', 'AIS', 'TK ADH DHUHA', 'perempuan', 'JEMBER', '14 Oktober 2013', 'Tidak', 'Jl. SUMATRA VI NO. 32 B JEMBER', 'Bersama orangtua', 'ATOK AINUR RIDHO', 'S2', 'Karyawan Swasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'IKA OKTAVIANAWATI', 'S2', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', '085238873471', '081336628911', 'bag_cha@yahoo.com', 1, 6),
('202120220104', 'ZUKF', '8007', 179, 'Nanda Qeisya nur fajri', 'Qeisya', 'Paud permata bunda', 'perempuan', 'Jember', '19-02-2013', 'Tidak', 'Desa sumber pinang rt02/rw10. Dusun jeding pakusari\r\n', 'Bersama orangtua', 'Yusiono', 'SMA Sederajat', 'Wiraswasta', 'Rp. 500.000 - Rp. 999.000', 'Nisa murniati', 'SMP Sederajat', 'Tidak Bekerja', 'Tidak berpenghasilan', '082301067224', '082301067224', 'yusiono234@gmail.com', 1, 5),
('202120220105', 'NAIA', '2574', 180, 'ATIQUL FAHISH SIDQI', 'FAHISH', 'TKIT BUAH HATI KITA', 'laki-laki', 'BONDOWOSO', '10 September 2013', 'Tidak', 'PERUM JEMBER PERMAI 2 BLOK L/17\r\nKELURAHAN SUMBERSARI ', 'Bersama orangtua', 'IKA SUJATMIKO', 'SMA Sederajat', 'Karyawan Swasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'DIAH TRI WAHYUNI', 'S2', 'Tidak Bekerja', 'Tidak berpenghasilan', '085219319032', '081259097869', 'diahtriwahyunifahish@gmail.com', 1, 1),
('202120220106', 'RCRP', '2929', 181, 'NIDAA AZZAHRA EL MAUDUDY', 'NIDAA', 'TK CUT NYAK DIEN', 'perempuan', 'JEMBER', '15 Desember 2013', 'Tidak', 'JL. TRUNOJOYO VBLOK 2 NO.9', 'Bersama orangtua', 'ABUL A\'LA EL MAUDUDY', 'SMA Sederajat', 'Wirausaha', 'Rp. 1.000.000 - Rp. 2.000.000', 'SANDRA ARISTANTI', 'D3', 'Karyawan Swasta', 'kurang dari Rp. 1.000.000', '085100671159', '0895387203052', 'sand.think@yahoo.com', 1, 5),
('202120220107', 'NSRP', '6723', 182, 'Arjuna Muhammad Al Fatih', 'Juna', 'TK Aisyiah 03 Nganjuk', 'laki-laki', 'Nganjuk', '16 Februari 2014', 'Tidak', 'Jalan Mt Haryono III no. 20 kel. Ploso Kec. Nganjuk Kab. Nganjuk', 'Bersama orangtua', 'Shoim Hamdani', 'SMA Sederajat', 'Wiraswasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'Nunung Widya Icha', 'D4/S1', 'Tidak Bekerja', 'kurang dari Rp. 1.000.000', '085336644366', '082301083935', 'mamajuna87@gmail.com', 1, 1),
('202120220108', 'FDNJ', '6196', 183, 'Muhammad Sakha Abrisam Anwar', 'Sakha', 'TK Aisyah Bustanul Afthal III Jember', 'laki-laki', 'Pasuruan', '22 Februari 2014', 'Tidak', 'Perumahan Kaliurang Green Garden C1 nkmer 6', 'Wali', 'Saiful Anwar', 'SMA Sederajat', 'Karyawan Swasta', 'Rp. 5.000.000 - Rp. 20.000.000', 'Siti soleha', 'SMA Sederajat', 'Tidak Bekerja', 'kurang dari Rp. 1.000.000', '08113573700', '', 'andreee.muhammad@gmail.com', 2, 1),
('202120220109', 'SKIY', '7516', 184, 'ALIF NAUFAL PRADANA', 'ALIF', 'TK BINA ANAPRASA NURIS JEMBER', 'laki-laki', 'JEMBER', '07 Desember 2013', 'Tidak', 'JL. SULTAN AGUNG NO.2 ARJASA JEMBER', 'Bersama orangtua', 'ARIO FARMY PRADANA', 'D4/S1', 'Wiraswasta', 'Lebih dari Rp. 20.000.000', 'NURANI AISYAH', 'D4/S1', 'Tidak Bekerja', 'Tidak berpenghasilan', '081234418558', '085102299790', 'ario.fp@gmail.com', 1, 1),
('202120220110', 'PYKE', '3319', 185, 'XHERDAN ALFARIZI SYAQIRI MUHAMMAD', 'AL', 'ALAMANDA 79', 'laki-laki', 'Surabaya', '05 Juli 2004', 'Tidak', 'Jl. Citarum gang 2 nomer 22 Jember ', 'Bersama orangtua', 'DADANG BAHTERA', 'D4/S1', 'Buruh', 'Rp. 1.000.000 - Rp. 2.000.000', 'ERLINA MARIYAM SYAH', 'SMA Sederajat', 'Tidak Bekerja', 'kurang dari Rp. 1.000.000', '081336498778', '', '', 1, 1),
('202120220111', 'DRPI', '2765', 186, 'Nafis Prayata Ramadhan', 'Nafis', 'SDIT Utsman Bin Affan Surabaya', 'laki-laki', 'Banyuwangi', '05/09/2010', 'Tidak', 'Jl. Diponegoro III/41 Kalisat Jember', 'Bersama orangtua', 'Sofiyulloh Prawira Negara', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', 'Iis Fitriyah', 'D4/S1', 'Tidak Bekerja', 'Tidak berpenghasilan', '085236071187', '085259109466', 'fitriyahiis@gmail.com', 1, 1),
('202120220112', '9090', '9090', 188, 'Khairan Razin Prajana', 'Ai', 'TK Buah Hati Kita', 'laki-laki', 'Jember', '02 Juli 2013', 'Tidak', 'Jl Kalimantan 4 no 72 Jember', 'Bersama orangtua', 'Jeffri Suryo Iswahyudi', 'D4/S1', 'Wiraswasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'Rasullah Perdania', 'D4/S1', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', '08113502070', '08113505435', 'rasullahperdania@gmail.com', 1, 2),
('202120220113', 'ELLH', '1830', 189, 'Afuww Saverio Maheswara', 'Afuww', 'RA Perwanida 6 Pace Silo Jember', 'laki-laki', 'Jember', '24 Agustus 2013', 'Tidak', 'Jalan Halmahera IV nomor 9 Sumbersari Jember', 'Bersama orangtua', 'Wimbi Rendra Permadi', 'D4/S1', 'Karyawan Swasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'Yuanita Auliasari', 'D4/S1', 'Wirausaha', 'Rp. 500.000 - Rp. 999.000', '085258441152', '085258299399', 'yuanitaauliasari987@gmail.com', 1, 0),
('202120220114', 'ZQAQ', '6100', 190, 'IBIEL KAUTSAR ALLAM', 'IBIEL', 'SEKOLAH LABORATORIUM PAUD YASMIN', 'laki-laki', 'BONDOWOSO', '02 September 2013', 'Tidak', 'Jl. Kaliurang, Perum. Kaliurang Green Garden C2. No.2, Tegalgede, Sumbersari, Jember', 'Bersama orangtua', 'SUTOPO', 'D4/S1', 'Karyawan Swasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'TRIAS WURGANDINI', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', '085220713663', '081234803782', 'digdagdug@yahoo.com', 1, 0),
('202120220115', 'SNRP', '8287', 192, 'Zahratuyaluufari Muqarrabiin', 'Zahra', 'TK.Al Amien Jember', 'perempuan', 'Jember', '08 April 2013', 'Tidak', 'Perum Bumi Tegal Besar Blok CC No.12 Jember', 'Bersama orangtua', 'Erwan Dwi R', 'SMA Sederajat', 'Wiraswasta', 'Rp. 2.000.000 - Rp. 4.999.000', 'Sri rahayu', 'SMA Sederajat', 'Tidak Bekerja', 'Tidak berpenghasilan', '08123233335', '085746179639', 'daj.jember@gmail.com', 1, 0);
INSERT INTO `data_siswa` (`kopes`, `us`, `ps`, `id_siswa`, `namalengkap`, `namapanggilan`, `asalsekolah`, `jeniskelamin`, `tempatlahir`, `tanggallahir`, `berkebutuhankhusus`, `alamatlengkap`, `tempattinggal`, `namaayah`, `pendidikanayah`, `pekerjaanayah`, `penghasilanayah`, `namaibu`, `pendidikanibu`, `pekerjaanibu`, `penghasilanibu`, `nomorteleponayah`, `nomorteleponibu`, `email`, `status`, `kategori_biaya`) VALUES
('202120220116', 'KLAZ', '4588', 193, 'Roy Faris Ahnaf Zeroun', 'Roy', 'Tk B STAR', 'laki-laki', 'Jember', '30 Juli 2013', 'Tidak', 'Jl. MAWAR XI NO 14 JEMBER', 'Bersama orangtua', 'ENDRA NURHADI RAHMAT', 'SMA Sederajat', 'Tidak Bekerja', 'Rp. 5.000.000 - Rp. 20.000.000', 'FATIMAH UL HIKMA R', 'SMA Sederajat', 'Tidak Bekerja', 'Tidak berpenghasilan', '085236286500', '085234609337', 'qes@fds.vc', 1, 0),
('202120220117', 'BVBV', '9598', 194, 'Vania Kallista Rayna Az Zahra', 'Vania', 'TKIT BUAH HATI KITA', 'perempuan', 'Jember', '07122013', 'Tidak', 'Dusun kidul,sumber jeruk,kalisat', 'Bersama orangtua', 'Bahrodi', 'D4/S1', 'PNS/TNI/Polri', 'Rp. 1.000.000 - Rp. 2.000.000', 'Nurus sarifah', 'SMA Sederajat', 'Tidak Bekerja', 'Tidak berpenghasilan', '085232658203', '082316708481', 'rudibahrudi@gmail.com', 1, 0),
('202120220118', 'COKZ', '7676', 195, 'Muhammad Akram Jaasir', 'Akram', 'Tk ohya kodomoeng', 'laki-laki', 'Jember', '01 September 2013', 'Tidak', 'Perum Puri Bunga Nirwana Cluster Bintaro N9', 'Bersama orangtua', 'Pramudya Dwi Aristya P', 'D1', 'PNS/TNI/Polri', 'lebh dari Rp. 2.000.000', 'Ari Indriana Hapsari', 'S2', 'Lainnya', 'Rp. 1.000.000 - Rp. 2.000.000', '081515456802', '081515456803', 'pramudya.fkip@unej.ac.id', 1, 0),
('202120220119', '566', 'sdit', 196, 'Muhammad Akhdan el rafif', 'Rafif', 'Tk ad dhuha', 'laki-laki', 'Jember', '29 Mei 2014', 'Tidak', 'Kaliurang cluster blok b1a tegalgede sumbersari jember', 'Bersama orangtua', 'Arif', 'D4/S1', 'Wiraswasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'Yuli', 'D4/S1', 'Tidak Bekerja', 'kurang dari Rp. 1.000.000', '34', '234', 'admin@ewr.com', 1, 0),
('202120220120', 'WQIJ', '7251', 197, 'MISTRAL SALADINE AHMAD', 'MISTRAL', 'RA. As. Shofa', 'laki-laki', 'JEMBER', '19 JANUARI 2014', 'Tidak', 'Jl.Perumdim RT 07 No. G16 Jubung Kecamatan Sukorambi Jember Jawa Timur.', 'Bersama orangtua', 'Prijo Derita Santoso', 'SMA Sederajat', 'Karyawan Swasta', 'Rp. 1.000.000 - Rp. 2.000.000', 'Herawati', 'SMA Sederajat', 'PNS/TNI/Polri', 'Rp. 2.000.000 - Rp. 4.999.000', '085233512350', '081233796549', 'sitioktaviani111@gmail.com', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fitting`
--

CREATE TABLE `fitting` (
  `id` int(11) NOT NULL,
  `kopes` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `seragam` varchar(3) NOT NULL,
  `bawahan` varchar(5) NOT NULL,
  `jilbab` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fitting`
--

INSERT INTO `fitting` (`id`, `kopes`, `nama`, `seragam`, `bawahan`, `jilbab`) VALUES
(15, '202020210018', 'Arfareza Ramadhan', 'XL', 'XL', '-'),
(16, '202020210010', 'Khania Azmi Fernanda', 'S', 'M', 'M'),
(17, '202020210006', 'MUHAMMAD ALKHALIFI IZZULHAQ', 'S', 'S', '-'),
(18, '202020210045', 'Arsakha Gerda Rosiana Putra Kaili', 'M', 'M', '-'),
(19, '202120220100', 'QUEENZA AZRA RAZITA SISWANTO', 'S', 'S', 'M'),
(20, '202020210034', 'DZAKIRA THALITA PUTRI AIRA', 'S', 'S', 'S'),
(21, '202020210076', 'Quaneisha Aisy Nasywa', 'S', 'S', 'S'),
(22, '202020210004', 'VANIA KALLISTA RAYNA AZ ZAHRA', 'M', 'M', 'M'),
(23, '202020210054', 'Azka Sakha Wiranu', 'M', 'M', '-'),
(24, '202020210028', 'Queenadira el farisya purwadi', 'S', 'S', 'S'),
(25, '202020210037', 'Azzahra Shakila Fairuz Pohan', 'S', 'S', 'S'),
(26, '202020210090', 'Muhammad Akhdan El Rafif', '', 'S', '-'),
(27, '202020210005', 'Abyan Dzaky Al Faeyza', 'S', 'S', '-'),
(28, '202020210032', 'MOCHAMMAD AYDAN SAJIDUR RAHMAN', 'S', 'S', '-'),
(29, '202020210007', 'Ghinzia Hafiza Khaira Lubna', 'L', 'XXL', 'M'),
(30, '202020210011', 'Muhammad Fadhil Za\'im', 'L', 'L', '-'),
(31, '202120220098', 'Muhammad Aryasatya Bhirawa', 'S', 'S', '-'),
(32, '202020210025', 'FARAH NUHA MUFIDA', 'S', 'S', 'S'),
(33, '202020210080', 'ASYAFAH AUDRINA BELVANIA', 'S', 'S', 'S'),
(34, '202120220104', 'Nanda Qeisya nur fajri', 'S', 'S', 'S'),
(35, '202120220114', 'IBIEL KAUTSAR ALLAM', 'M', 'S', '-'),
(36, '202020210015', 'Aisyah Kalila Putri Setiawan', 'M', 'M', 'M'),
(37, '202020210021', 'Mikayla Aguin Zhafira', 'XXL', 'XXL', 'XL'),
(38, '202020210029', 'AISYAH IZZATI AZZAHRA', 'S', 'M', 'M'),
(39, '202020210031', 'Nafla Zafira Mahendra ', 'S', 'M', 'S'),
(40, '202120220115', 'Zahratuyaluufari Muqarrabiin', 'XL', 'XL', 'M'),
(41, '202020210022', 'Muhammad Ariq Milan Maulana', 'XXL', 'XXL', '-'),
(42, '202020210039', 'Muhammad Raka Satria Abimanyu', 'XL', 'XL', '-'),
(43, '202120220116', 'Roy Faris Ahnaf Zeroun', 'M', 'M', '-'),
(44, '202020210068', 'Henriko arrasyid budiyono', 'XXL', 'XXL', '-'),
(45, '202120220105', 'ATIQUL FAHISH SIDQI', 'M', 'M', '-'),
(46, '202120220095', 'Jihan Putri Azzahra', 'S', 'S', 'S'),
(47, '202020210041', 'Raisha dwi putri prasetyo', 'M', 'L', 'M'),
(48, '202020210027', 'IBRAHIM FAIQ RAHMAN HANIF', 'L', 'M', '-'),
(49, '202020210044', 'Ahmad Dzaky Akbar', 'M', 'M', '-'),
(50, '202020210069', 'IQRIMA KHOUDZ ILMI', 'L', 'L', 'L'),
(51, '202020210047', 'KHANZA AZZALEA ERFANDA', 'S', 'M', 'M'),
(52, '202020210052', 'Fatin Fathiya Sabryanza', 'M', 'M', 'M'),
(53, '202020210087', 'Ahmad Furqon Hamizan', 'S', 'S', '-'),
(54, '202120220113', 'Afuww Saverio Maheswara', 'S', 'S', '-'),
(55, '202020210001', 'KAYYISHA SHILA TSABITAH', 'L', 'L', 'L'),
(56, '202120220102', 'Shakila Azzahra Nadhifa', 'S', 'S', 'S'),
(57, '202020210055', 'Maudy Nayla Shanum', 'XL', 'XL', 'L'),
(58, '202020210083', 'Sylan Aisha Farhana', 'S', 'M', 'S'),
(59, '202020210082', 'Muhammad Atharizz Bilfaqih', 'S', 'S', '-'),
(60, '202120220093', 'EL DASTAN ARFA DWIPRAWIRA', 'S', 'S', '-'),
(61, '202020210016', 'callysta azka putri', 'M', 'M', 'M'),
(62, '202020210075', 'KANZIA HADZKADINA', 'S', 'S', 'S'),
(63, '202020210067', 'Raisa Muthia Azzahra', 'M', 'M', 'M'),
(64, '202120220097', 'Muhammad Asyraf Athaya Hidayat', 'S', 'M', '-'),
(65, '202020210084', 'Rayya Quaeneisha Al Mahdi', 'XL', 'XL', 'XL'),
(66, '202020210089', 'ALYA ZAFIRA DERMAWAN', 'M', 'L', 'M'),
(67, '202020210081', 'NAUFAL RAFKA ABQORY', 'S', 'S', '-'),
(68, '202020210008', 'Kenzie Azka Alfarizy Putra Arinda', 'M', 'M', '-'),
(69, '202020210042', 'Kirana Dwitania Azzahra', 'S', 'M', 'S'),
(70, '202020210049', 'Muhammad Fahrezi Ariyansyah Putra', 'S', 'S', '-'),
(71, '202020210024', 'Muhammad azri najmussabah', 'L', 'L', '-'),
(72, '202020210070', 'Annisa Khaira Rahmah', 'L', 'L', 'M'),
(73, '202020210012', 'AZKA GIBRAN HIDAYATULLAH', 'M', 'M', '-'),
(74, '202020210036', 'Faradiba Nafisa Ufaira', 'L', 'L', 'M'),
(75, '202020210091', 'Adelia kaiyisah ashakila', 'M', 'M', 'M'),
(76, '202120220118', 'Muhammad Akram Jaasir', 'M', 'M', '-'),
(77, '202020210003', 'MUHAMMAD ALIF SYAHMI KASMILAN', 'M', 'M', '-'),
(78, '202020210017', 'Hasna Nabila Aldzulhijjah', 'L', 'L', 'XL'),
(79, '202020210092', 'AQILLA GANSHA ADHIYASTA', 'L', 'L', '-'),
(80, '202020210056', 'Rahima Talita Shaliha', 'S', 'L', 'M'),
(81, '202020210020', 'FATIH NAZYFA SALSABILA', 'M', 'M', 'M'),
(82, '202120220107', 'Arjuna Muhammad Al Fatih', 'M', 'M', '-'),
(83, '202020210033', 'NUHAMMAD ZAKARIA ERDYANSYAH', 'M', 'M', '-'),
(84, '202020210072', 'SULTAN MAULANA NUGROHO', 'M', 'M', '-'),
(85, '202020210065', 'Mutia Anggun Zuleyka', 'L', 'L', 'L'),
(86, '202020210050', 'Azmi Syahmi Zulhilmi', 'S', 'S', '-'),
(87, '202020210019', 'Ilyas Rafardhan Athalla', 'XL', 'XL', '-'),
(88, '202120220094', 'Muhammad Ayaturrohman', 'S', 'S', '-'),
(89, '202020210038', 'muhammad azka maulana', 'S', 'L', '-'),
(90, '202120220099', 'Sya\'ba Ibnu Ramadhan Niam', 'S', 'S', '-'),
(91, '202020210074', 'Aufa Zafran Setyawan', 'S', 'S', '-'),
(92, '202020210051', 'Muhammad Fathurrahman Yusuf', 'L', 'L', '-'),
(93, '202120220112', 'Khairan Razin Prajana', 'S', 'S', '-'),
(94, '202020210057', 'HAMZAH BUDI PRABOWO', 'XL', 'XL', '-'),
(95, '202020210013', 'M.USAMAH', 'S', 'S', '-'),
(96, '202020210048', 'Rasya Al Abian Pramana Putra', 'M', 'M', '-'),
(97, '202020210063', 'Dzakira Talitha khumaira', 'M', 'S', 'M'),
(98, '202120220101', 'Kemilau Qalbi Mumtaza', 'S', 'S', 'M'),
(99, '202020210078', 'Muhammad Rakai Adyuta', 'S', 'S', '-'),
(100, '202120220106', 'NIDAA AZZAHRA EL MAUDUDY', 'S', 'S', 'M'),
(101, '202020210026', 'Azzahra Kaylarahma Rhinata', 'S', 'S', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `id_kategori` int(255) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `id_kategori`, `kategori`) VALUES
(1, 1, '(PA) Standart'),
(2, 2, '(PA) Family One'),
(3, 3, '(PA) Family Two'),
(5, 5, '(PI) Standart'),
(6, 6, '(PI) Family One'),
(7, 7, '(PI) Family Two'),
(9, 9, 'X'),
(10, 10, 'Y'),
(11, 11, 'Z');

-- --------------------------------------------------------

--
-- Table structure for table `nominal`
--

CREATE TABLE `nominal` (
  `id` int(11) NOT NULL,
  `id_kategori` int(255) NOT NULL,
  `infaq_gedung` int(11) NOT NULL,
  `infaq_perpustakaan` int(11) NOT NULL,
  `infaq_kegiatan` int(11) NOT NULL,
  `buku_dan_media_pembelajaran` int(11) NOT NULL,
  `seragam_dan_attribut_sekolah` int(11) NOT NULL,
  `jilbab` int(11) NOT NULL,
  `pendidikan_infaq_pengembangan` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nominal`
--

INSERT INTO `nominal` (`id`, `id_kategori`, `infaq_gedung`, `infaq_perpustakaan`, `infaq_kegiatan`, `buku_dan_media_pembelajaran`, `seragam_dan_attribut_sekolah`, `jilbab`, `pendidikan_infaq_pengembangan`, `total`) VALUES
(6, 1, 5500000, 300000, 1000000, 1050000, 800000, 0, 608000, 9258000),
(7, 2, 5250000, 300000, 1000000, 1050000, 800000, 0, 583000, 8983000),
(10, 5, 5500000, 300000, 1000000, 1050000, 800000, 160000, 608000, 9418000),
(11, 6, 5250000, 300000, 1000000, 1050000, 800000, 160000, 583000, 9143000),
(12, 7, 5000000, 300000, 1000000, 1050000, 800000, 160000, 558000, 8868000),
(14, 3, 5000000, 300000, 1000000, 1050000, 800000, 0, 558000, 8708000),
(15, 9, 5000000, 300000, 1000000, 1050000, 800000, 0, 558000, 8708000),
(16, 10, 4750000, 300000, 1000000, 1050000, 800000, 160000, 533000, 8593000),
(17, 11, 4500000, 300000, 1000000, 1050000, 800000, 0, 508000, 8158000);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `nama_setting` text NOT NULL,
  `nilai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `nama_setting`, `nilai`) VALUES
(2, 'kuota', '150'),
(3, 'guru', '60'),
(4, 'siswa', '10000'),
(5, 'pengumuman', 's');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `fitting`
--
ALTER TABLE `fitting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nominal`
--
ALTER TABLE `nominal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `akses`
--
ALTER TABLE `akses`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `fitting`
--
ALTER TABLE `fitting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nominal`
--
ALTER TABLE `nominal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
