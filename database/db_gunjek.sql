-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2024 at 02:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gunjek`
--

-- --------------------------------------------------------

--
-- Table structure for table `master driver`
--

CREATE TABLE `master driver` (
  `driver_id` varchar(50) NOT NULL,
  `NPM` varchar(15) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Nomor Kendaraan` varchar(50) NOT NULL,
  -- `BPKB` varchar(100) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Nomor Handphone` varchar(20) NOT NULL,
  `Foto Diri` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master location`
--

CREATE TABLE `master location` (
  `Kampus_id` varchar(50) NOT NULL,
  `Nama Kampus` varchar(50) NOT NULL,
  `Alamat Kampus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master user`
--

CREATE TABLE `master user` (
  `user_id` varchar(50) NOT NULL,
  `NPM` varchar(15) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `KTM` varchar(20) NOT NULL,
  `Nomor Handphone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `Tarif_id` varchar(50) NOT NULL,
  `Harga` int(50) NOT NULL,
  `Jam` varchar(50) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `Transportasi_id` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `Driver_id` varchar(50) NOT NULL,
  `Kampus_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master driver`
--
ALTER TABLE `master driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `master location`
--
ALTER TABLE `master location`
  ADD PRIMARY KEY (`Kampus_id`);

--
-- Indexes for table `master user`
--
ALTER TABLE `master user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`Tarif_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
