-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 04:05 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wizz`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `AboutID` int(11) NOT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `BlogID` int(11) NOT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `Content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detailpaket`
--

CREATE TABLE `detailpaket` (
  `DetailPaketID` int(11) NOT NULL,
  `PaketID` int(11) DEFAULT NULL,
  `ServiceName` varchar(100) DEFAULT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detailpemesanan`
--

CREATE TABLE `detailpemesanan` (
  `DetailPemesananID` int(11) NOT NULL,
  `PemesananID` int(11) DEFAULT NULL,
  `DetailPaketID` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `GalleryID` int(11) NOT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `ImageURL` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `PaketID` int(11) NOT NULL,
  `PackageName` varchar(100) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `PemesananID` int(11) NOT NULL,
  `PaketID` int(11) DEFAULT NULL,
  `Tanggal_Pemesanan` date DEFAULT NULL,
  `Waktu_Pemesanan` time DEFAULT NULL,
  `Jumlah_Orang` int(11) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesanansaya`
--

CREATE TABLE `pesanansaya` (
  `PesananSayaID` int(11) NOT NULL,
  `PaketID` int(11) DEFAULT NULL,
  `PemesananID` int(11) DEFAULT NULL,
  `NamaPemesan` varchar(50) DEFAULT NULL,
  `StatusPesanan` varchar(20) DEFAULT NULL,
  `BuktiDP` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `TestimonyID` int(11) NOT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `Testimonial` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`AboutID`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`BlogID`);

--
-- Indexes for table `detailpaket`
--
ALTER TABLE `detailpaket`
  ADD PRIMARY KEY (`DetailPaketID`),
  ADD KEY `PaketID` (`PaketID`);

--
-- Indexes for table `detailpemesanan`
--
ALTER TABLE `detailpemesanan`
  ADD PRIMARY KEY (`DetailPemesananID`),
  ADD KEY `PemesananID` (`PemesananID`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`GalleryID`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`PaketID`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`PemesananID`),
  ADD KEY `PaketID` (`PaketID`);

--
-- Indexes for table `pesanansaya`
--
ALTER TABLE `pesanansaya`
  ADD PRIMARY KEY (`PesananSayaID`),
  ADD KEY `PemesananID` (`PemesananID`),
  ADD KEY `PaketID` (`PaketID`);

--
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`TestimonyID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailpaket`
--
ALTER TABLE `detailpaket`
  ADD CONSTRAINT `detailpaket_ibfk_1` FOREIGN KEY (`PaketID`) REFERENCES `paket` (`PaketID`);

--
-- Constraints for table `detailpemesanan`
--
ALTER TABLE `detailpemesanan`
  ADD CONSTRAINT `detailpemesanan_ibfk_1` FOREIGN KEY (`PemesananID`) REFERENCES `pemesanan` (`PemesananID`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`PaketID`) REFERENCES `paket` (`PaketID`);

--
-- Constraints for table `pesanansaya`
--
ALTER TABLE `pesanansaya`
  ADD CONSTRAINT `pesanansaya_ibfk_3` FOREIGN KEY (`PemesananID`) REFERENCES `pemesanan` (`PemesananID`),
  ADD CONSTRAINT `pesanansaya_ibfk_4` FOREIGN KEY (`PaketID`) REFERENCES `paket` (`PaketID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
