-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2020 pada 14.55
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role_id`) VALUES
(1, 'malik', '6c34fd5b51dcdd56ad9204c67209d6b5', 1),
(2, 'ikrom', '6c34fd5b51dcdd56ad9204c67209d6b5', 1),
(3, 'nafi', 'bfac9ecf26c5716a5fd2d103ec748c07', 1),
(4, 'mila', 'bfac9ecf26c5716a5fd2d103ec748c07', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `akses`
--

CREATE TABLE `akses` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pess` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akses`
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
-- Struktur dari tabel `data_siswa`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `fitting`
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
-- Dumping data untuk tabel `fitting`
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
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `id_kategori` int(255) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
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
-- Struktur dari tabel `nominal`
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
-- Dumping data untuk tabel `nominal`
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
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `nama_setting` text NOT NULL,
  `nilai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setting`
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
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `fitting`
--
ALTER TABLE `fitting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nominal`
--
ALTER TABLE `nominal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `akses`
--
ALTER TABLE `akses`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fitting`
--
ALTER TABLE `fitting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `nominal`
--
ALTER TABLE `nominal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
