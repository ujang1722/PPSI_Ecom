-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 11:12 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ticz`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `crt_id` int(11) NOT NULL,
  `crt_mru_id` int(11) DEFAULT NULL,
  `crt_mrt_id` int(11) DEFAULT NULL,
  `crt_qty` varchar(255) DEFAULT NULL,
  `crt_put_in_cart_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mr_tickets`
--

CREATE TABLE `mr_tickets` (
  `mrt_id` int(11) NOT NULL,
  `mrt_nama` varchar(255) DEFAULT NULL,
  `mrt_harga` varchar(255) DEFAULT NULL,
  `mrt_gambar` varchar(255) DEFAULT NULL,
  `mrt_desc` varchar(255) DEFAULT NULL,
  `mrt_stok` int(75) DEFAULT NULL,
  `mrt_created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mr_tickets`
--

INSERT INTO `mr_tickets` (`mrt_id`, `mrt_nama`, `mrt_harga`, `mrt_gambar`, `mrt_desc`, `mrt_stok`, `mrt_created_date`, `kategori`) VALUES
(17, 'Camping Paket 1', '35000', 'paketcamping1.jpg', 'Camping di desa Wisata rindu hati dengan \r\nFitur :\r\n1.  2 x tenda maksimal 2 orang / tenda\r\n2. Sarapan rebusan ubi & jagung\r\n3. Air minum\r\n4. WC', 70, '2021-12-27 16:49:12', 'Camping'),
(18, 'Camping Paket 2 ', '65000', 'camping12.jpg', 'Camping  Paket 2 di desa Wisata rindu hati dengan Fitur : 1. 4 x tenda maksimal 2 orang / tenda 2. Sarapan rebusan ubi & jagung 3. Air minum 4. WC ', 89, '2021-12-27 16:52:19', 'Camping'),
(20, 'Paket Wisata Air Terjun  Desa RIndu Hati', '25000', 'waterfall_product1.jpg', 'Wisata Air Terjun Desa Rindu Hati (Durasi 60 menit) dengan Fitur : 1. Tour Guide 2. Air minum', 100, '2021-12-27 16:59:21', 'Waterfall'),
(21, 'Paket Glamping', '150000', '256386780_1093313541206328_3017350933094326714_n_webp1.jpg', 'Glamping Desa Wisata Rindu Hati  Fitur  :\r\n1. 1 x Tenda maksimal 4 orang\r\n2. Air minum\r\n3. Sarapan Rebusan Jagung \r\n4. Bakar-Bakaran makanan \r\n5. Api unggun ', 84, '2021-12-27 17:06:24', 'Glamping'),
(22, 'Paket Tubing Desa Wisata Rindu Hati', '50000', 'tubing_product1.jpg', 'Paket Tubing Desa Wisata Rindu Hati (45 menit) Fitur :\r\n1. Tour Guide\r\n2. Perlengkapan Tubing', 93, '2021-12-27 17:08:27', 'Tubing');

-- --------------------------------------------------------

--
-- Table structure for table `mr_user`
--

CREATE TABLE `mr_user` (
  `mru_id` int(11) NOT NULL,
  `mru_full_name` varchar(255) DEFAULT NULL,
  `mru_username` varchar(25) DEFAULT NULL,
  `mru_password` varchar(50) DEFAULT NULL,
  `mru_address` varchar(255) DEFAULT NULL,
  `mru_kode_pos` varchar(255) DEFAULT NULL,
  `mru_email_address` varchar(30) DEFAULT NULL,
  `mru_mobile_number` varchar(15) DEFAULT NULL,
  `mru_level` varchar(10) DEFAULT NULL,
  `mru_created_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mr_user`
--

INSERT INTO `mr_user` (`mru_id`, `mru_full_name`, `mru_username`, `mru_password`, `mru_address`, `mru_kode_pos`, `mru_email_address`, `mru_mobile_number`, `mru_level`, `mru_created_date`) VALUES
(1, 'Administator', 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, 'admin@mail.com', NULL, '1', '2018-12-18 23:56:38'),
(2, 'Adam Marulyanto', 'adammarul', '21232f297a57a5a743894a0e4a801fc3', 'Jl. Bratasena V Blok BC 2 No. 18', '15416', 'adam@gmail.com', '087887889881', '99', '2018-12-21 11:43:30'),
(3, 'Marulyanto', 'marulyanto', 'e10adc3949ba59abbe56e057f20f883e', 'Jl. Bratasena V Blok BC 2 No. 18', '15416', 'marulyanto@gmail.com', '082123123123', '99', '2018-12-21 13:41:40'),
(10, 'aldatasya', 'tasya', '827ccb0eea8a706c4c34a16891f84e7b', 'mana aja', '15416', 'aldtsyaa@gmail.com', '9876543318', '99', '2018-12-21 17:42:02'),
(11, 'damdudidam', 'adam', '827ccb0eea8a706c4c34a16891f84e7b', 'jalan kenangan', '12312', 'marulyanto@gmail.com', '34567887654', '99', '2018-12-21 19:27:28'),
(13, 'abi', 'abi', '19a9228dbbbe3b613190002e54dc3429', 'ajajsahb', '123', 'abi@gmail.com', '09845899690906', '99', '2021-11-20 15:11:40'),
(14, 'vitaa', 'vita', '202cb962ac59075b964b07152d234b70', 'jln salak', '225554', 'broga@gmail.com', '8226553219', '99', '2021-12-29 08:43:37');

-- --------------------------------------------------------

--
-- Table structure for table `tickets_detail`
--

CREATE TABLE `tickets_detail` (
  `tdt_id` int(11) NOT NULL,
  `tdt_trxd_id` int(11) DEFAULT NULL,
  `tdt_mrt_id` int(11) DEFAULT NULL,
  `tdt_kode_tiket` varchar(255) DEFAULT NULL,
  `tdt_created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets_detail`
--

INSERT INTO `tickets_detail` (`tdt_id`, `tdt_trxd_id`, `tdt_mrt_id`, `tdt_kode_tiket`, `tdt_created_date`) VALUES
(1, 1, 1, 'DWP-1', '2018-12-21 18:44:01'),
(2, 2, 1, 'DWP-2', '2018-12-21 18:44:35'),
(3, 3, 1, 'DWP-3', '2018-12-21 19:29:09'),
(4, 4, 2, 'FT-1', '2018-12-21 19:29:09'),
(5, 5, 1, 'DWP-4', '2021-11-20 12:11:15'),
(6, 6, 11, 'FT-2', '2021-12-27 16:05:07'),
(7, 7, 18, 'FT-2', '2021-12-27 17:09:55'),
(8, 8, 21, 'FT-2', '2021-12-27 17:09:55'),
(9, 9, 22, 'FT-2', '2021-12-27 17:09:55'),
(10, 10, 21, 'FT-2', '2021-12-27 17:13:36'),
(11, 11, 17, 'FT-2', '2021-12-27 17:30:15'),
(12, 12, 22, 'FT-2', '2021-12-29 08:44:02'),
(13, 13, 17, 'FT-2', '2021-12-29 08:44:02'),
(14, 14, 22, 'FT-2', '2021-12-29 12:09:36'),
(15, 15, 18, 'FT-2', '2021-12-29 12:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `trx_id` int(11) NOT NULL,
  `trx_mru_id` int(11) DEFAULT NULL,
  `trx_kode` varchar(255) DEFAULT NULL,
  `trx_jml_tiket` varchar(255) DEFAULT NULL,
  `trx_total_bayar` varchar(255) DEFAULT NULL,
  `trx_status` int(5) DEFAULT NULL,
  `trx_date` datetime DEFAULT NULL,
  `trx_bukti` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`trx_id`, `trx_mru_id`, `trx_kode`, `trx_jml_tiket`, `trx_total_bayar`, `trx_status`, `trx_date`, `trx_bukti`) VALUES
(1, 2, 'TCZ-20181221-2-1', '1', '950000', 2, '2018-12-21 18:44:01', NULL),
(2, 10, 'TCZ-20181221-10-1', '1', '950000', 2, '2018-12-21 18:44:35', NULL),
(3, 11, 'TCZ-20181221-11-1', '6', '3000000', 2, '2018-12-21 19:29:09', NULL),
(4, 12, 'TCZ-20211120-12-1', '1', '950000', 1, '2021-11-20 12:11:15', NULL),
(5, 13, 'TCZ-20211227-13-1', '1', '200000', 2, '2021-12-27 16:05:07', NULL),
(6, 13, 'TCZ-20211227-13-2', '30', '3150000', 2, '2021-12-27 17:09:55', '1191914_20160322124908.jpg'),
(7, 13, 'TCZ-20211227-13-3', '1', '150000', 2, '2021-12-27 17:13:36', '119719206_331694498142033_7225351931127765250_n.jpg'),
(8, 13, 'TCZ-20211227-13-4', '1', '35000', 1, '2021-12-27 17:30:15', '186704439_676967606418309_3068595918107125823_n2.jpg'),
(9, 14, 'TCZ-20211229-14-1', '1', '35000', 1, '2021-12-29 08:44:02', NULL),
(10, 13, 'TCZ-20211229-13-5', '2', '100000', 1, '2021-12-29 12:09:36', 'Untitled_Diagram_drawio.png'),
(11, 13, 'TCZ-20211229-13-6', '1', '65000', 1, '2021-12-29 12:11:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `trxd_id` int(11) NOT NULL,
  `trxd_trx_id` int(11) DEFAULT NULL,
  `trxd_mru_id` int(11) DEFAULT NULL,
  `trxd_mrt_id` int(11) DEFAULT NULL,
  `trxd_qty` int(11) DEFAULT NULL,
  `trxd_total_bayar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`trxd_id`, `trxd_trx_id`, `trxd_mru_id`, `trxd_mrt_id`, `trxd_qty`, `trxd_total_bayar`) VALUES
(1, 1, 2, 1, 1, '950000'),
(2, 2, 10, 1, 1, '950000'),
(3, 3, 11, 1, 3, '2850000'),
(4, 3, 11, 2, 3, '150000'),
(5, 4, 12, 1, 1, '950000'),
(6, 5, 13, 11, 1, '200000'),
(7, 6, 13, 18, 10, '650000'),
(8, 6, 13, 21, 15, '2250000'),
(9, 6, 13, 22, 5, '250000'),
(10, 7, 13, 21, 1, '150000'),
(11, 8, 13, 17, 1, '35000'),
(12, 9, 14, 22, 1, '50000'),
(13, 9, 14, 17, 1, '35000'),
(14, 10, 13, 22, 2, '100000'),
(15, 11, 13, 18, 1, '65000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`crt_id`);

--
-- Indexes for table `mr_tickets`
--
ALTER TABLE `mr_tickets`
  ADD PRIMARY KEY (`mrt_id`);

--
-- Indexes for table `mr_user`
--
ALTER TABLE `mr_user`
  ADD PRIMARY KEY (`mru_id`);

--
-- Indexes for table `tickets_detail`
--
ALTER TABLE `tickets_detail`
  ADD PRIMARY KEY (`tdt_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`trx_id`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`trxd_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `crt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mr_tickets`
--
ALTER TABLE `mr_tickets`
  MODIFY `mrt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mr_user`
--
ALTER TABLE `mr_user`
  MODIFY `mru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tickets_detail`
--
ALTER TABLE `tickets_detail`
  MODIFY `tdt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `trx_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `trxd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
