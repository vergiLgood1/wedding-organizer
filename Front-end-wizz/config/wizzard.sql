-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 04:08 AM
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
-- Database: `wizzard`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_paket`
--

CREATE TABLE `detail_paket` (
  `id_paket` varchar(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_paket`
--

INSERT INTO `detail_paket` (`id_paket`, `description`) VALUES
('P001', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac mauris sagittis, venenatis augue eget, molestie felis. Mauris vestibulum orci ac metus tempus viverra. Nunc diam arcu, ullamcorper a vestibulum sed, gravida quis neque. Curabitur sed condimentum nunc. Aliquam erat volutpat. Nulla a urna nunc. Proin malesuada orci et enim dapibus rutrum.\r\n\r\n'),
('P002', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac mauris sagittis, venenatis augue eget, molestie felis. Mauris vestibulum orci ac metus tempus viverra. Nunc diam arcu, ullamcorper a vestibulum sed, gravida quis neque. Curabitur sed condimentum nunc. Aliquam erat volutpat. Nulla a urna nunc. Proin malesuada orci et enim dapibus rutrum.\r\n\r\n'),
('P003', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac mauris sagittis, venenatis augue eget, molestie felis. Mauris vestibulum orci ac metus tempus viverra. Nunc diam arcu, ullamcorper a vestibulum sed, gravida quis neque. Curabitur sed condimentum nunc. Aliquam erat volutpat. Nulla a urna nunc. Proin malesuada orci et enim dapibus rutrum.\r\n\r\n'),
('P004', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac mauris sagittis, venenatis augue eget, molestie felis. Mauris vestibulum orci ac metus tempus viverra. Nunc diam arcu, ullamcorper a vestibulum sed, gravida quis neque. Curabitur sed condimentum nunc. Aliquam erat volutpat. Nulla a urna nunc. Proin malesuada orci et enim dapibus rutrum.\r\n\r\n'),
('P005', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac mauris sagittis, venenatis augue eget, molestie felis. Mauris vestibulum orci ac metus tempus viverra. Nunc diam arcu, ullamcorper a vestibulum sed, gravida quis neque. Curabitur sed condimentum nunc. Aliquam erat volutpat. Nulla a urna nunc. Proin malesuada orci et enim dapibus rutrum.\r\n\r\n'),
('P006', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac mauris sagittis, venenatis augue eget, molestie felis. Mauris vestibulum orci ac metus tempus viverra. Nunc diam arcu, ullamcorper a vestibulum sed, gravida quis neque. Curabitur sed condimentum nunc. Aliquam erat volutpat. Nulla a urna nunc. Proin malesuada orci et enim dapibus rutrum.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` varchar(11) NOT NULL,
  `nama_paket` varchar(255) DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `img_path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `harga`, `img_path`) VALUES
('P001', 'Paket bocil kematian', '25.00', 'package2.png'),
('P002', 'Paket bocil kehidupan', '25.00', 'package2.png'),
('P003', 'Paket amburadul', '25.00', 'package2.png'),
('P004', 'Paket terserah', '25.00', 'package2.png'),
('P005', 'Paket mati', '25.00', 'package2.png'),
('P006', 'Paket bismillah', '25.00', 'package2.png'),
('P007', 'Paket Duniawi', '25.00', 'package2.png'),
('P008', 'Paket Kimiawi', '2.50', 'package2.png');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `pemesanan_id` int(11) NOT NULL,
  `paket_id` varchar(11) DEFAULT NULL,
  `tanggal_pemesanan` date DEFAULT NULL,
  `tanggal_penggunaan` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_paket`
--
ALTER TABLE `detail_paket`
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`pemesanan_id`),
  ADD KEY `paket_id` (`paket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `pemesanan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_paket`
--
ALTER TABLE `detail_paket`
  ADD CONSTRAINT `detail_paket_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`paket_id`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
