-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2016 at 09:28 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simrsh_rekammedis`
--

-- --------------------------------------------------------

--
-- Table structure for table `antri`
--

CREATE TABLE IF NOT EXISTS `antri` (
  `No_Antrian` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `No_RM` varchar(50) NOT NULL,
  `Nama Pasien` text NOT NULL,
  `Nama Pemilik` text NOT NULL,
  `Status` text NOT NULL,
  PRIMARY KEY (`No_RM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antri`
--

INSERT INTO `antri` (`No_Antrian`, `Tanggal`, `No_RM`, `Nama Pasien`, `Nama Pemilik`, `Status`) VALUES
(1, '2016-02-01', '123456', 'Meong', 'Nadia', 'Penanganan Dokter'),
(2, '2016-02-01', '34567', 'Gukguk', 'Dian', 'Dalam Antrian');

-- --------------------------------------------------------

--
-- Table structure for table `tindakan_table`
--

CREATE TABLE IF NOT EXISTS `tindakan_table` (
  `anamnesis` varchar(200) NOT NULL,
  `keadaan_umum` varchar(200) NOT NULL,
  `frek_nafas` int(20) NOT NULL,
  `frek_pulsus` int(20) NOT NULL,
  `temperatur_tubuh` int(20) NOT NULL,
  `kulit_rambut` varchar(200) NOT NULL,
  `selaput_lendir` varchar(200) NOT NULL,
  `kelenjar_limfe` varchar(200) NOT NULL,
  `pernafasan` varchar(200) NOT NULL,
  `peredaran_darah` varchar(200) NOT NULL,
  `pencernaan` varchar(200) NOT NULL,
  `kelamin_perkencingan` varchar(200) NOT NULL,
  `syaraf` varchar(200) NOT NULL,
  `anggota_gerak` varchar(200) NOT NULL,
  `berat_badan` int(20) NOT NULL,
  `lain_lain` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
