-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2020 at 06:10 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_agenproperti`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar_property`
--

CREATE TABLE `gambar_property` (
  `idgambar` int(11) NOT NULL,
  `namagambar` varchar(45) NOT NULL,
  `extension` varchar(5) NOT NULL,
  `property_idproperty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `point_of_interest`
--

CREATE TABLE `point_of_interest` (
  `idPOI` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_pointofinterest` enum('mall','sekolah','pasar','tempat wisata','restoran') NOT NULL,
  `geom` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `idproperty` int(11) NOT NULL,
  `kategori_transaksi` enum('jual','beli') NOT NULL,
  `jenis_property` enum('rumah','ruko','gudang','kantor','tanah') NOT NULL,
  `harga` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelurahan` varchar(45) NOT NULL,
  `kecamatan` varchar(45) NOT NULL,
  `luastanah` double NOT NULL,
  `luasbangunan` double NOT NULL,
  `geom` varchar(10000) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `salt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar_property`
--
ALTER TABLE `gambar_property`
  ADD PRIMARY KEY (`idgambar`),
  ADD KEY `fk_gambar_property_property_idx` (`property_idproperty`);

--
-- Indexes for table `point_of_interest`
--
ALTER TABLE `point_of_interest`
  ADD PRIMARY KEY (`idPOI`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`idproperty`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar_property`
--
ALTER TABLE `gambar_property`
  MODIFY `idgambar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `point_of_interest`
--
ALTER TABLE `point_of_interest`
  MODIFY `idPOI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `idproperty` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gambar_property`
--
ALTER TABLE `gambar_property`
  ADD CONSTRAINT `fk_gambar_property_property` FOREIGN KEY (`property_idproperty`) REFERENCES `property` (`idproperty`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
