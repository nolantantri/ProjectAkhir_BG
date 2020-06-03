-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2020 at 07:00 PM
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
-- Table structure for table `gambar_properti`
--

CREATE TABLE `gambar_properti` (
  `idgambar` int(11) NOT NULL,
  `extension` varchar(5) NOT NULL,
  `idproperti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gambar_properti`
--

INSERT INTO `gambar_properti` (`idgambar`, `extension`, `idproperti`) VALUES
(1, 'jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `point_of_interest`
--

CREATE TABLE `point_of_interest` (
  `idpoi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_pointofinterest` enum('mall','sekolah','pasar','tempat wisata','restoran') NOT NULL,
  `geom` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `point_of_interest`
--

INSERT INTO `point_of_interest` (`idpoi`, `nama`, `jenis_pointofinterest`, `geom`) VALUES
(1, 'Universitas Surabaya', 'sekolah', 'POINT(112.76817144381619 -7.320250475843466)');

-- --------------------------------------------------------

--
-- Table structure for table `properti`
--

CREATE TABLE `properti` (
  `idproperti` int(11) NOT NULL,
  `kategori_transaksi` enum('jual','beli') NOT NULL,
  `jenis_property` enum('rumah','ruko','gudang','kantor','tanah') NOT NULL,
  `harga` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `luastanah` double NOT NULL,
  `luasbangunan` double NOT NULL,
  `geom` varchar(10000) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `properti`
--

INSERT INTO `properti` (`idproperti`, `kategori_transaksi`, `jenis_property`, `harga`, `alamat`, `luastanah`, `luasbangunan`, `geom`, `keterangan`) VALUES
(1, 'jual', 'rumah', '250000000', 'Jl. Tenggilis Mejoyo', 500, 150, 'POLYGON((112.76487556974143 -7.319819605450348,112.76488375512402 -7.320347319027945,112.76608700636336 -7.320436624340843,112.76613611865884 -7.319917029542438,112.76487556974143 -7.319819605450348))', 'Rumah dijual daerah surbaya selatan');

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
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `nama`, `password`, `salt`) VALUES
(1, 'admin', 'Super Admin', 'e81d6f4cce4e86f23d5c40c6ad36bd35', 'btgobgrstP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar_properti`
--
ALTER TABLE `gambar_properti`
  ADD PRIMARY KEY (`idgambar`),
  ADD KEY `fk_gambar_property_property_idx` (`idproperti`);

--
-- Indexes for table `point_of_interest`
--
ALTER TABLE `point_of_interest`
  ADD PRIMARY KEY (`idpoi`);

--
-- Indexes for table `properti`
--
ALTER TABLE `properti`
  ADD PRIMARY KEY (`idproperti`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `point_of_interest`
--
ALTER TABLE `point_of_interest`
  MODIFY `idpoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `properti`
--
ALTER TABLE `properti`
  MODIFY `idproperti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gambar_properti`
--
ALTER TABLE `gambar_properti`
  ADD CONSTRAINT `fk_gambar_property_property` FOREIGN KEY (`idproperti`) REFERENCES `properti` (`idproperti`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
