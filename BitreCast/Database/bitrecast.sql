-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 06:23 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitrecast`
--

-- --------------------------------------------------------

--
-- Table structure for table `forecast`
--

CREATE TABLE `forecast` (
  `id_forecast` int(11) NOT NULL,
  `Kapitalisasi_Forecast` int(11) NOT NULL,
  `Harga_Forecast` int(11) NOT NULL,
  `Sirkulasi_Forecast` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kapitalisasi_pasar`
--

CREATE TABLE `kapitalisasi_pasar` (
  `id` int(11) NOT NULL,
  `Periode` float NOT NULL,
  `Kapitalisasi_Pasar` int(11) NOT NULL,
  `Satuan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sampel_data`
--

CREATE TABLE `sampel_data` (
  `id_data` int(11) NOT NULL,
  `Periode` date NOT NULL,
  `Kapitalisasi_Pasar` float NOT NULL,
  `Volume_Transaksi` float NOT NULL,
  `Satuan` varchar(150) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Sirkulasi_Beredar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sampel_data`
--

INSERT INTO `sampel_data` (`id_data`, `Periode`, `Kapitalisasi_Pasar`, `Volume_Transaksi`, `Satuan`, `Harga`, `Sirkulasi_Beredar`) VALUES
(1, '2017-01-31', 206.83, 1.87, 'Trilliun Rupiah', 12817820, 16136129),
(2, '2017-02-28', 254.65, 2.36, 'Trilliun Rupiah', 15729358, 16189472),
(3, '2017-03-31', 229.95, 5.93, 'Trilliun Rupiah', 14153289, 16247107),
(4, '2017-04-30', 287.67, 4.38, 'Trilliun Rupiah', 17645478, 16302760),
(5, '2017-05-31', 499.58, 22.67, 'Trilliun Rupiah', 30530558, 16363278),
(6, '2017-06-30', 555.43, 11.35, 'Trilliun Rupiah', 33827839, 16419317),
(7, '2017-07-31', 615.73, 9.73, 'Trilliun Rupiah', 37361693, 16480249),
(8, '2017-08-31', 1038.44, 25.23, 'Trilliun Rupiah', 62800827, 16535451),
(9, '2017-09-30', 965.43, 15.25, 'Trilliun Rupiah', 58171760, 16596197),
(10, '2017-10-31', 1440.6, 28.07, 'Trilliun Rupiah', 86488203, 16656607),
(11, '2017-11-30', 2142.68, 132.65, 'Trilliun Rupiah', 128219089, 16711084),
(12, '2017-12-31', 3243.96, 178.63, 'Trilliun Rupiah', 193393887, 16773850),
(13, '2018-01-31', 2264.43, 126.19, 'Trilliun Rupiah', 134488221, 16837385),
(14, '2018-02-28', 2438.54, 93.14, 'Trilliun Rupiah', 144362034, 16891837),
(15, '2018-03-31', 1672.21, 68.63, 'Trilliun Rupiah', 98654819, 16950110),
(16, '2018-04-30', 2201.66, 113.26, 'Trilliun Rupiah', 129451948, 17007546),
(17, '2018-05-31', 1795.74, 69.57, 'Trilliun Rupiah', 105220433, 17066457),
(18, '2018-06-30', 1565.48, 70.88, 'Trilliun Rupiah', 91420576, 17123935),
(19, '2018-07-31', 1935.03, 79.69, 'Trilliun Rupiah', 112619461, 17182021),
(20, '2018-08-31', 1771.4, 66.11, 'Trilliun Rupiah', 102737432, 17242012),
(21, '2018-09-30', 1704.2, 58.34, 'Trilliun Rupiah', 98523653, 17297369),
(22, '2018-10-31', 1668.67, 63.67, 'Trilliun Rupiah', 96165791, 17352012),
(23, '2018-11-30', 1009.48, 88.23, 'Trilliun Rupiah', 58013816, 17400683),
(24, '2018-12-31', 955.99, 67.37, 'Trilliun Rupiah', 54768176, 17455210),
(25, '2019-01-31', 842.94, 79.21, 'Trilliun Rupiah', 48135887, 17511675),
(26, '2019-02-28', 964.61, 123.99, 'Trilliun Rupiah', 54922155, 17563222),
(27, '2019-03-31', 1029.79, 129.49, 'Trilliun Rupiah', 58443290, 17620329),
(28, '2019-04-30', 1337.15, 199.57, 'Trilliun Rupiah', 75654792, 17674360),
(29, '2019-05-31', 2137.31, 405.79, 'Trilliun Rupiah', 120523762, 17733515),
(30, '2019-06-30', 2817.48, 391.4, 'Trilliun Rupiah', 158375108, 17789917),
(31, '2019-07-31', 2504.52, 226.16, 'Trilliun Rupiah', 140315707, 17849178),
(32, '2019-08-31', 2444.05, 159.73, 'Trilliun Rupiah', 136479371, 17907835),
(33, '2019-09-30', 2114.4, 238.97, 'Trilliun Rupiah', 117689697, 17965889),
(34, '2019-10-31', 2344.74, 361.01, 'Trilliun Rupiah', 130099567, 18022658),
(35, '2019-11-30', 1937.65, 242.18, 'Trilliun Rupiah', 107196312, 18075715),
(36, '2019-12-31', 1829.43, 301.16, 'Trilliun Rupiah', 100889696, 18132972),
(37, '2020-01-31', 2294.08, 434.01, 'Trilliun Rupiah', 126101777, 18192289),
(38, '2020-02-28', 2203.69, 534.23, 'Trilliun Rupiah', 120787969, 18244284),
(39, '2020-03-31', 1895.36, 568.35, 'Trilliun Rupiah', 103587262, 18297230),
(40, '2020-04-30', 2419.93, 1051.19, 'Trilliun Rupiah', 131849656, 18353707),
(41, '2020-05-31', 2564.57, 436.47, 'Trilliun Rupiah', 139450170, 18390583),
(42, '2020-06-30', 2413.36, 229.77, 'Trilliun Rupiah', 131024716, 18419120),
(43, '2020-07-31', 3051.39, 342.93, 'Trilliun Rupiah', 165407153, 18447751),
(44, '2020-08-31', 3151.22, 307.93, 'Trilliun Rupiah', 170557399, 18476009),
(45, '2020-09-30', 2970.69, 650.4, 'Trilliun Rupiah', 160542699, 18504049),
(46, '2020-10-31', 3733.46, 434.25, 'Trilliun Rupiah', 201475315, 18530608),
(47, '2020-11-30', 5049.34, 607, 'Trilliun Rupiah', 272076833, 18558508),
(48, '2020-12-31', 7448.59, 681.51, 'Trilliun Rupiah', 400750983, 18586579),
(49, '2021-01-31', 8612.81, 716.61, 'Trilliun Rupiah', 462666209, 18615602),
(50, '2021-02-28', 11676.7, 712.57, 'Trilliun Rupiah', 626391267, 18641144),
(51, '2021-03-31', 16087, 835.27, 'Trilliun Rupiah', 861656477, 18669795),
(52, '2021-04-30', 15302.8, 748.22, 'Trilliun Rupiah', 818535890, 18695332),
(53, '2021-05-31', 9908.99, 529.88, 'Trilliun Rupiah', 529243155, 18722944),
(54, '2021-06-30', 9318.16, 465.01, 'Trilliun Rupiah', 497095725, 18745202),
(55, '2021-07-31', 11230.3, 463.69, 'Trilliun Rupiah', 598236854, 18772364),
(56, '2021-08-31', 12680.5, 492.46, 'Trilliun Rupiah', 674397845, 18802699),
(57, '2021-09-30', 11571.5, 430.42, 'Trilliun Rupiah', 614505973, 18830574),
(58, '2021-10-31', 16294.8, 448.29, 'Trilliun Rupiah', 864532455, 18848060),
(59, '2021-11-30', 15414, 568.78, 'Trilliun Rupiah', 816099531, 18887341),
(60, '2021-12-31', 12794.3, 463.77, 'Trilliun Rupiah', 676379666, 18915929),
(61, '2022-01-31', 10408.2, 270.25, 'Trilliun Rupiah', 549391751, 18945024),
(62, '2022-02-28', 11192.3, 439.36, 'Trilliun Rupiah', 589980964, 18970646);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `Nama` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Alamat` text NOT NULL,
  `Password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `Nama`, `Email`, `Alamat`, `Password`) VALUES
(1, 'Nianka', 'nianka@gmail.com', 'Jalan Diponegoro 5 No. 5', 'love3'),
(2, 'Dono', 'Dono@gmail.com', 'Jalan Kembang Gula 2 No. 5', 'dodonono');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forecast`
--
ALTER TABLE `forecast`
  ADD PRIMARY KEY (`id_forecast`);

--
-- Indexes for table `kapitalisasi_pasar`
--
ALTER TABLE `kapitalisasi_pasar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sampel_data`
--
ALTER TABLE `sampel_data`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forecast`
--
ALTER TABLE `forecast`
  MODIFY `id_forecast` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kapitalisasi_pasar`
--
ALTER TABLE `kapitalisasi_pasar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sampel_data`
--
ALTER TABLE `sampel_data`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
