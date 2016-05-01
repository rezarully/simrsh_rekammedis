-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2016 at 09:45 AM
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
-- Table structure for table `inpurminap`
--

CREATE TABLE IF NOT EXISTS `inpurminap` (
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `no_registrasi` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `no_rm` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nama_pemilik` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nama_hewan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `diagnosa` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `signalemen_ttl` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `signalemen_kelamin` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nama_mahasiswa` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `semester_mahasiswa` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `rencana_pengobatan` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `pengobatan` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `ket_pengobatan` varchar(250) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inputrm`
--

CREATE TABLE IF NOT EXISTS `inputrm` (
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `no_registrasi` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `no_rm` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nama_pemilik` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nama_hewan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `jenis_hewan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `signalemen_ttl` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `signalemen_kelamin` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nama_tenagamedis` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nama_koas` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `anamnesis` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `keadaan_umum` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `frek_nafas` int(11) DEFAULT NULL,
  `frek_pulsus` int(11) DEFAULT NULL,
  `temperatur_tubuh` int(11) DEFAULT NULL,
  `kulit_rambut` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `selaput_lendir` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `kelenjar_limfe` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `pernafasan` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `peredaran_darah` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `pencernaan` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `kelamin_perkencingan` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `syaraf` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `anggota_gerak` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `lain_anamnesis` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `id_lab` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ket_lab` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `diagnosis` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `prognosis` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `id_obat` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `bentuk_sediaan` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `jumlah_obat` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `dosis_obat` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `petunjuk_obat` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `id_tindakan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `qty_tindakan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ket_tindakan` varchar(250) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `inputrm`
--

INSERT INTO `inputrm` (`waktu`, `no_registrasi`, `no_rm`, `nama_pemilik`, `nama_hewan`, `jenis_hewan`, `signalemen_ttl`, `signalemen_kelamin`, `username`, `nama_tenagamedis`, `nama_koas`, `anamnesis`, `keadaan_umum`, `frek_nafas`, `frek_pulsus`, `temperatur_tubuh`, `kulit_rambut`, `selaput_lendir`, `kelenjar_limfe`, `pernafasan`, `peredaran_darah`, `pencernaan`, `kelamin_perkencingan`, `syaraf`, `anggota_gerak`, `berat_badan`, `lain_anamnesis`, `id_lab`, `ket_lab`, `diagnosis`, `prognosis`, `id_obat`, `bentuk_sediaan`, `jumlah_obat`, `dosis_obat`, `petunjuk_obat`, `id_tindakan`, `qty_tindakan`, `ket_tindakan`) VALUES
('2016-04-29 09:11:48', 'zx', 'zd', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2016-04-29 16:04:42', 'hai', 'coba', 'aja', 'dulu', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, '', 'feses', '', '', '', NULL, '', '', '', '', '1', '', ''),
('0000-00-00 00:00:00', 'gue', 'suka', 'elu', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, '', 'feses', '', '', '', NULL, '', '', '', '', '1', '', ''),
('2016-03-31 17:00:00', '', '', '', '', '', '', '', 'sdfsdf', 'hg', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, '', 'feses', '', '', '', NULL, '', '', '', '', '1', '', ''),
('0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, '', 'feses', '', '', '', NULL, '', '', '', '', '1', '', ''),
('0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, '', 'feses', '', '', '', NULL, '', '', '', '', '1', '', ''),
('0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, '', 'feses', '', '', '', NULL, '', '', '', '', '1', '', ''),
('0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, '', 'feses', '', '', '', NULL, '', '', '', '', '1', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
