-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 03:35 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi12`
--

-- --------------------------------------------------------

--
-- Table structure for table `bagian`
--

CREATE TABLE `bagian` (
  `id_bagian` int(15) NOT NULL,
  `bagian` varchar(30) DEFAULT NULL,
  `gaji` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bagian`
--

INSERT INTO `bagian` (`id_bagian`, `bagian`, `gaji`) VALUES
(1, 'PRODUKSI', '3000000'),
(2, 'SALES', '2800000'),
(3, 'MANDOR', '4000000'),
(4, 'ADMINISTRASI KANTOR', '3200000');

-- --------------------------------------------------------

--
-- Table structure for table `c1`
--

CREATE TABLE `c1` (
  `id_c1` int(10) NOT NULL,
  `jurusan` int(10) NOT NULL,
  `jenis` int(10) NOT NULL,
  `usia` int(10) NOT NULL,
  `penghasilan` int(10) NOT NULL,
  `sekolah` int(10) NOT NULL,
  `daerah` int(10) NOT NULL,
  `kelas` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `pekerjaan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c1`
--

INSERT INTO `c1` (`id_c1`, `jurusan`, `jenis`, `usia`, `penghasilan`, `sekolah`, `daerah`, `kelas`, `status`, `pekerjaan`) VALUES
(1, 1, 1, 19, 2, 2, 4, 2, 1, 2),
(2, 1, 2, 18, 2, 2, 1, 2, 1, 1),
(3, 3, 1, 18, 2, 1, 4, 2, 1, 1),
(4, 1, 2, 19, 1, 2, 1, 2, 1, 1),
(5, 1, 2, 18, 1, 2, 2, 2, 1, 1),
(6, 1, 1, 18, 1, 2, 3, 2, 1, 1),
(7, 1, 1, 18, 1, 2, 1, 2, 1, 1),
(8, 1, 1, 18, 1, 2, 1, 2, 1, 1),
(9, 3, 1, 18, 1, 3, 1, 2, 1, 1),
(10, 2, 2, 18, 1, 1, 4, 2, 1, 1),
(11, 1, 2, 19, 1, 2, 1, 2, 1, 1),
(12, 2, 2, 19, 1, 1, 4, 2, 1, 1),
(13, 1, 2, 19, 1, 2, 2, 2, 1, 1),
(14, 2, 2, 18, 1, 1, 1, 2, 1, 1),
(15, 1, 1, 18, 1, 2, 1, 2, 1, 2),
(16, 2, 2, 19, 1, 1, 2, 2, 1, 1),
(17, 2, 2, 18, 2, 1, 5, 1, 1, 1),
(18, 1, 1, 19, 2, 2, 2, 1, 1, 1),
(19, 3, 1, 18, 2, 1, 5, 1, 1, 1),
(20, 1, 1, 18, 2, 2, 3, 1, 1, 1),
(21, 2, 1, 18, 2, 1, 1, 1, 1, 1),
(22, 3, 1, 18, 2, 1, 3, 1, 1, 1),
(23, 2, 1, 18, 2, 1, 5, 1, 1, 1),
(24, 1, 1, 19, 1, 2, 1, 1, 1, 2),
(25, 1, 1, 18, 1, 2, 4, 1, 1, 1),
(26, 2, 1, 18, 1, 3, 2, 1, 1, 1),
(27, 1, 1, 18, 1, 2, 4, 1, 1, 1),
(28, 1, 2, 18, 1, 2, 2, 1, 1, 1),
(29, 3, 1, 18, 1, 3, 2, 1, 1, 1),
(30, 1, 2, 18, 1, 2, 1, 1, 1, 1),
(31, 3, 1, 18, 1, 1, 2, 1, 1, 1),
(32, 1, 2, 19, 1, 2, 4, 1, 1, 1),
(33, 3, 1, 19, 1, 1, 3, 1, 1, 1),
(34, 3, 1, 19, 1, 1, 1, 1, 1, 1),
(35, 1, 1, 18, 1, 2, 1, 1, 1, 1),
(36, 2, 1, 18, 1, 3, 2, 1, 1, 1),
(37, 3, 1, 18, 1, 3, 4, 1, 1, 1),
(38, 1, 1, 18, 1, 2, 5, 1, 1, 1),
(39, 1, 1, 19, 1, 2, 2, 1, 1, 1),
(40, 3, 1, 19, 1, 1, 1, 1, 1, 1),
(41, 1, 1, 18, 1, 1, 3, 1, 1, 1),
(42, 1, 2, 20, 1, 2, 3, 1, 1, 1),
(43, 3, 2, 19, 1, 2, 3, 1, 1, 1),
(44, 1, 2, 18, 1, 2, 2, 1, 1, 1),
(45, 3, 1, 18, 1, 1, 3, 1, 1, 1),
(46, 1, 1, 18, 1, 2, 3, 1, 1, 1),
(47, 3, 2, 19, 1, 1, 3, 1, 1, 2),
(48, 2, 1, 18, 1, 1, 3, 1, 1, 1),
(49, 2, 1, 18, 1, 1, 3, 1, 1, 1),
(50, 1, 1, 18, 1, 2, 3, 1, 1, 1),
(51, 2, 1, 19, 1, 1, 4, 1, 1, 2),
(52, 2, 2, 19, 1, 1, 2, 1, 1, 2),
(53, 1, 1, 18, 1, 2, 2, 1, 1, 1),
(54, 1, 2, 19, 1, 2, 2, 1, 1, 1),
(55, 2, 1, 19, 1, 3, 4, 1, 1, 1),
(56, 3, 1, 18, 1, 1, 2, 1, 1, 1),
(57, 2, 2, 18, 1, 3, 4, 1, 1, 2),
(58, 2, 1, 18, 2, 3, 4, 1, 2, 1),
(59, 2, 1, 18, 1, 1, 3, 1, 2, 3),
(60, 2, 2, 19, 1, 1, 3, 1, 2, 1),
(61, 2, 1, 18, 1, 3, 2, 1, 2, 1),
(62, 2, 1, 18, 1, 1, 1, 1, 2, 1),
(63, 2, 1, 18, 1, 3, 6, 1, 2, 1),
(64, 2, 1, 18, 1, 3, 2, 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `c2`
--

CREATE TABLE `c2` (
  `id_c2` int(10) NOT NULL,
  `jurusan` int(10) NOT NULL,
  `jenis` int(10) NOT NULL,
  `usia` int(10) NOT NULL,
  `penghasilan` int(10) NOT NULL,
  `sekolah` int(10) NOT NULL,
  `daerah` int(10) NOT NULL,
  `kelas` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `pekerjaan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c2`
--

INSERT INTO `c2` (`id_c2`, `jurusan`, `jenis`, `usia`, `penghasilan`, `sekolah`, `daerah`, `kelas`, `status`, `pekerjaan`) VALUES
(1, 2, 1, 21, 2, 1, 5, 2, 1, 2),
(2, 3, 1, 21, 1, 1, 5, 2, 1, 2),
(3, 1, 2, 22, 1, 2, 3, 2, 1, 1),
(4, 1, 2, 23, 1, 2, 2, 2, 1, 2),
(5, 3, 2, 23, 1, 1, 2, 2, 1, 2),
(6, 2, 1, 22, 1, 1, 6, 2, 1, 2),
(7, 1, 2, 22, 2, 2, 6, 2, 2, 2),
(8, 2, 2, 24, 1, 3, 6, 2, 2, 3),
(9, 1, 1, 26, 1, 2, 1, 2, 2, 3),
(10, 1, 2, 24, 1, 2, 7, 2, 2, 3),
(11, 3, 2, 25, 1, 3, 5, 2, 2, 2),
(12, 1, 2, 23, 1, 2, 3, 2, 2, 2),
(13, 2, 1, 21, 1, 3, 4, 2, 2, 2),
(14, 2, 2, 22, 1, 1, 5, 1, 1, 1),
(15, 1, 2, 27, 1, 2, 2, 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `c3`
--

CREATE TABLE `c3` (
  `id_c3` int(10) NOT NULL,
  `jurusan` int(10) NOT NULL,
  `jenis` int(10) NOT NULL,
  `usia` int(10) NOT NULL,
  `penghasilan` int(10) NOT NULL,
  `sekolah` int(10) NOT NULL,
  `daerah` int(10) NOT NULL,
  `kelas` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `pekerjaan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c3`
--

INSERT INTO `c3` (`id_c3`, `jurusan`, `jenis`, `usia`, `penghasilan`, `sekolah`, `daerah`, `kelas`, `status`, `pekerjaan`) VALUES
(1, 1, 1, 20, 1, 1, 15, 2, 1, 2),
(2, 1, 2, 21, 1, 2, 7, 2, 1, 2),
(3, 2, 2, 18, 1, 1, 8, 2, 1, 1),
(4, 3, 2, 18, 1, 1, 14, 2, 1, 1),
(5, 2, 1, 18, 1, 3, 11, 2, 1, 1),
(6, 3, 2, 21, 2, 1, 16, 2, 2, 3),
(7, 3, 1, 19, 1, 3, 10, 2, 2, 2),
(8, 3, 1, 21, 1, 3, 9, 2, 2, 2),
(9, 1, 2, 18, 2, 2, 9, 1, 1, 1),
(10, 2, 2, 19, 2, 3, 7, 1, 1, 1),
(11, 1, 1, 18, 2, 2, 7, 1, 1, 1),
(12, 2, 2, 20, 1, 1, 12, 1, 1, 1),
(13, 3, 1, 18, 1, 1, 9, 1, 1, 1),
(14, 3, 2, 20, 1, 1, 6, 1, 1, 1),
(15, 3, 1, 18, 1, 1, 6, 1, 1, 1),
(16, 3, 1, 18, 1, 3, 13, 1, 1, 1),
(17, 1, 2, 19, 1, 2, 9, 1, 1, 2),
(18, 3, 2, 19, 1, 1, 9, 1, 1, 1),
(19, 1, 2, 18, 1, 2, 8, 1, 1, 1),
(20, 3, 1, 19, 1, 1, 8, 1, 1, 1),
(21, 3, 1, 20, 1, 3, 11, 1, 1, 1),
(22, 2, 1, 18, 1, 1, 7, 1, 1, 1),
(23, 3, 1, 18, 1, 3, 8, 1, 1, 1),
(24, 1, 2, 19, 2, 2, 10, 1, 2, 2),
(25, 3, 1, 19, 1, 1, 8, 1, 2, 2),
(26, 2, 1, 23, 1, 1, 10, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `c4`
--

CREATE TABLE `c4` (
  `id_c4` int(10) NOT NULL,
  `jurusan` int(10) NOT NULL,
  `jenis` int(10) NOT NULL,
  `usia` int(10) NOT NULL,
  `penghasilan` int(10) NOT NULL,
  `sekolah` int(10) NOT NULL,
  `daerah` int(10) NOT NULL,
  `kelas` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `pekerjaan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c4`
--

INSERT INTO `c4` (`id_c4`, `jurusan`, `jenis`, `usia`, `penghasilan`, `sekolah`, `daerah`, `kelas`, `status`, `pekerjaan`) VALUES
(1, 1, 1, 20, 1, 2, 1, 2, 1, 2),
(2, 1, 2, 20, 1, 2, 2, 2, 1, 2),
(3, 1, 1, 20, 1, 2, 2, 2, 1, 2),
(4, 3, 1, 20, 1, 1, 1, 2, 1, 1),
(5, 1, 2, 23, 1, 2, 1, 2, 1, 1),
(6, 3, 2, 19, 1, 1, 1, 2, 1, 2),
(7, 3, 2, 19, 1, 1, 1, 2, 1, 1),
(8, 2, 2, 19, 1, 3, 1, 2, 1, 2),
(9, 2, 2, 22, 1, 1, 2, 2, 1, 2),
(10, 1, 2, 21, 1, 2, 2, 2, 1, 3),
(11, 1, 1, 20, 1, 2, 4, 2, 1, 2),
(12, 2, 1, 21, 1, 1, 2, 2, 1, 2),
(13, 2, 2, 19, 1, 1, 1, 2, 1, 2),
(14, 1, 2, 21, 1, 2, 1, 2, 1, 2),
(15, 2, 1, 20, 1, 1, 2, 2, 1, 2),
(16, 2, 1, 21, 1, 3, 3, 2, 1, 2),
(17, 2, 1, 20, 1, 1, 3, 2, 1, 2),
(18, 2, 1, 21, 2, 1, 1, 2, 2, 3),
(19, 1, 1, 20, 1, 2, 3, 2, 2, 3),
(20, 1, 2, 20, 1, 2, 1, 2, 2, 3),
(21, 2, 2, 21, 1, 3, 1, 2, 2, 2),
(22, 1, 2, 20, 1, 2, 4, 2, 2, 2),
(23, 2, 2, 23, 1, 2, 1, 2, 2, 3),
(24, 2, 2, 20, 1, 1, 2, 2, 2, 2),
(25, 2, 1, 20, 2, 1, 4, 1, 1, 2),
(26, 1, 1, 20, 2, 2, 1, 1, 1, 1),
(27, 2, 2, 19, 1, 1, 1, 1, 1, 2),
(28, 3, 1, 21, 1, 1, 2, 1, 1, 1),
(29, 3, 1, 19, 2, 2, 1, 1, 2, 3),
(30, 3, 1, 19, 2, 2, 1, 1, 2, 3),
(31, 2, 2, 21, 1, 3, 2, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `c5`
--

CREATE TABLE `c5` (
  `id_c5` int(10) NOT NULL,
  `jurusan` int(10) NOT NULL,
  `jenis` int(10) NOT NULL,
  `usia` int(10) NOT NULL,
  `penghasilan` int(10) NOT NULL,
  `sekolah` int(10) NOT NULL,
  `daerah` int(10) NOT NULL,
  `kelas` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `pekerjaan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c5`
--

INSERT INTO `c5` (`id_c5`, `jurusan`, `jenis`, `usia`, `penghasilan`, `sekolah`, `daerah`, `kelas`, `status`, `pekerjaan`) VALUES
(1, 2, 2, 27, 1, 1, 10, 2, 1, 2),
(2, 2, 2, 27, 1, 1, 2, 2, 2, 3),
(3, 3, 1, 26, 1, 3, 7, 2, 2, 3),
(4, 2, 2, 30, 1, 1, 11, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `centroid`
--

CREATE TABLE `centroid` (
  `id_centroid` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `centroid` varchar(15) NOT NULL,
  `jurusan` int(10) NOT NULL,
  `jenis` int(10) NOT NULL,
  `usia` int(10) NOT NULL,
  `penghasilan` int(10) NOT NULL,
  `sekolah` int(10) NOT NULL,
  `daerah` int(10) NOT NULL,
  `kelas` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `pekerjaan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `centroid`
--

INSERT INTO `centroid` (`id_centroid`, `nama`, `centroid`, `jurusan`, `jenis`, `usia`, `penghasilan`, `sekolah`, `daerah`, `kelas`, `status`, `pekerjaan`) VALUES
(1, 'centroid1', 'c1', 3, 1, 24, 1, 2, 1, 2, 1, 2),
(2, 'centroid2', 'c2', 2, 2, 27, 1, 2, 1, 2, 2, 3),
(3, 'centroid3', 'c3', 1, 1, 18, 1, 1, 3, 2, 1, 1),
(4, 'centroid4', 'c4', 1, 2, 19, 1, 1, 1, 2, 1, 2),
(7, 'centroid5', 'c5', 3, 2, 20, 1, 2, 4, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `centroid1`
--

CREATE TABLE `centroid1` (
  `id_centroid1` int(10) NOT NULL,
  `jurusan` int(10) NOT NULL,
  `jenis` int(10) NOT NULL,
  `usia` int(10) NOT NULL,
  `penghasilan` int(10) NOT NULL,
  `sekolah` int(10) NOT NULL,
  `daerah` int(10) NOT NULL,
  `kelas` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `pekerjaan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `centroid1`
--

INSERT INTO `centroid1` (`id_centroid1`, `jurusan`, `jenis`, `usia`, `penghasilan`, `sekolah`, `daerah`, `kelas`, `status`, `pekerjaan`) VALUES
(1, 1, 2, 19, 1, 2, 2, 2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `centroid2`
--

CREATE TABLE `centroid2` (
  `id_centroid2` int(10) NOT NULL,
  `jurusan` int(10) NOT NULL,
  `jenis` int(10) NOT NULL,
  `usia` int(10) NOT NULL,
  `penghasilan` int(10) NOT NULL,
  `sekolah` int(10) NOT NULL,
  `daerah` int(10) NOT NULL,
  `kelas` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `pekerjaan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `centroid2`
--

INSERT INTO `centroid2` (`id_centroid2`, `jurusan`, `jenis`, `usia`, `penghasilan`, `sekolah`, `daerah`, `kelas`, `status`, `pekerjaan`) VALUES
(1, 3, 1, 25, 1, 2, 4, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `centroid3`
--

CREATE TABLE `centroid3` (
  `id_centroid3` int(10) NOT NULL,
  `jurusan` int(10) NOT NULL,
  `jenis` int(10) NOT NULL,
  `usia` int(10) NOT NULL,
  `penghasilan` int(10) NOT NULL,
  `sekolah` int(10) NOT NULL,
  `daerah` int(10) NOT NULL,
  `kelas` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `pekerjaan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `centroid3`
--

INSERT INTO `centroid3` (`id_centroid3`, `jurusan`, `jenis`, `usia`, `penghasilan`, `sekolah`, `daerah`, `kelas`, `status`, `pekerjaan`) VALUES
(1, 1, 1, 21, 2, 3, 5, 2, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `centroid4`
--

CREATE TABLE `centroid4` (
  `id_centroid4` int(10) NOT NULL,
  `jurusan` int(10) NOT NULL,
  `jenis` int(10) NOT NULL,
  `usia` int(10) NOT NULL,
  `penghasilan` int(10) NOT NULL,
  `sekolah` int(10) NOT NULL,
  `daerah` int(10) NOT NULL,
  `kelas` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `pekerjaan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `centroid4`
--

INSERT INTO `centroid4` (`id_centroid4`, `jurusan`, `jenis`, `usia`, `penghasilan`, `sekolah`, `daerah`, `kelas`, `status`, `pekerjaan`) VALUES
(1, 2, 1, 20, 1, 1, 2, 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `centroid5`
--

CREATE TABLE `centroid5` (
  `id_centroid5` int(10) NOT NULL,
  `jurusan` int(10) NOT NULL,
  `jenis` int(10) NOT NULL,
  `usia` int(10) NOT NULL,
  `penghasilan` int(10) NOT NULL,
  `sekolah` int(10) NOT NULL,
  `daerah` int(10) NOT NULL,
  `kelas` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `pekerjaan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `centroid5`
--

INSERT INTO `centroid5` (`id_centroid5`, `jurusan`, `jenis`, `usia`, `penghasilan`, `sekolah`, `daerah`, `kelas`, `status`, `pekerjaan`) VALUES
(1, 1, 2, 27, 1, 1, 4, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `centroid_temp`
--

CREATE TABLE `centroid_temp` (
  `id_centroid` int(10) NOT NULL,
  `iterasi` int(10) NOT NULL,
  `c1` int(10) NOT NULL,
  `c2` int(10) NOT NULL,
  `c3` int(10) NOT NULL,
  `c4` int(10) NOT NULL,
  `c5` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `centroid_temp`
--

INSERT INTO `centroid_temp` (`id_centroid`, `iterasi`, `c1`, `c2`, `c3`, `c4`, `c5`) VALUES
(1, 1, 1, 0, 0, 0, 0),
(2, 1, 1, 0, 0, 0, 0),
(3, 1, 1, 0, 0, 0, 0),
(4, 1, 0, 1, 0, 0, 0),
(5, 1, 1, 0, 0, 0, 0),
(6, 1, 0, 0, 1, 0, 0),
(7, 1, 0, 0, 0, 1, 0),
(8, 1, 1, 0, 0, 0, 0),
(9, 1, 0, 0, 1, 0, 0),
(10, 1, 0, 0, 0, 0, 1),
(11, 1, 0, 0, 0, 1, 0),
(12, 1, 1, 0, 0, 0, 0),
(13, 1, 0, 1, 0, 0, 0),
(14, 1, 0, 0, 0, 1, 0),
(15, 1, 1, 0, 0, 0, 0),
(16, 1, 0, 0, 0, 1, 0),
(17, 1, 0, 0, 0, 1, 0),
(18, 1, 1, 0, 0, 0, 0),
(19, 1, 1, 0, 0, 0, 0),
(20, 1, 0, 1, 0, 0, 0),
(21, 1, 1, 0, 0, 0, 0),
(22, 1, 1, 0, 0, 0, 0),
(23, 1, 1, 0, 0, 0, 0),
(24, 1, 1, 0, 0, 0, 0),
(25, 1, 0, 0, 1, 0, 0),
(26, 1, 1, 0, 0, 0, 0),
(27, 1, 0, 0, 1, 0, 0),
(28, 1, 1, 0, 0, 0, 0),
(29, 1, 0, 0, 0, 1, 0),
(30, 1, 0, 0, 0, 1, 0),
(31, 1, 0, 0, 0, 1, 0),
(32, 1, 0, 0, 0, 1, 0),
(33, 1, 0, 1, 0, 0, 0),
(34, 1, 0, 0, 0, 1, 0),
(35, 1, 1, 0, 0, 0, 0),
(36, 1, 0, 0, 1, 0, 0),
(37, 1, 0, 0, 0, 1, 0),
(38, 1, 0, 0, 0, 1, 0),
(39, 1, 0, 0, 0, 1, 0),
(40, 1, 0, 0, 0, 1, 0),
(41, 1, 0, 0, 0, 1, 0),
(42, 1, 0, 1, 0, 0, 0),
(43, 1, 0, 1, 0, 0, 0),
(44, 1, 0, 0, 0, 1, 0),
(45, 1, 0, 0, 0, 1, 0),
(46, 1, 0, 1, 0, 0, 0),
(47, 1, 0, 0, 0, 1, 0),
(48, 1, 0, 0, 1, 0, 0),
(49, 1, 0, 0, 0, 0, 1),
(50, 1, 0, 1, 0, 0, 0),
(51, 1, 0, 0, 0, 0, 1),
(52, 1, 0, 1, 0, 0, 0),
(53, 1, 0, 0, 0, 1, 0),
(54, 1, 0, 1, 0, 0, 0),
(55, 1, 0, 0, 0, 1, 0),
(56, 1, 0, 1, 0, 0, 0),
(57, 1, 0, 0, 0, 1, 0),
(58, 1, 0, 0, 0, 1, 0),
(59, 1, 0, 0, 1, 0, 0),
(60, 1, 0, 1, 0, 0, 0),
(61, 1, 0, 0, 0, 1, 0),
(62, 1, 0, 1, 0, 0, 0),
(63, 1, 0, 0, 1, 0, 0),
(64, 1, 0, 0, 0, 1, 0),
(65, 1, 1, 0, 0, 0, 0),
(66, 1, 1, 0, 0, 0, 0),
(67, 1, 0, 0, 0, 1, 0),
(68, 1, 1, 0, 0, 0, 0),
(69, 1, 1, 0, 0, 0, 0),
(70, 1, 1, 0, 0, 0, 0),
(71, 1, 0, 0, 0, 1, 0),
(72, 1, 0, 0, 1, 0, 0),
(73, 1, 0, 0, 1, 0, 0),
(74, 1, 1, 0, 0, 0, 0),
(75, 1, 1, 0, 0, 0, 0),
(76, 1, 0, 0, 1, 0, 0),
(77, 1, 0, 1, 0, 0, 0),
(78, 1, 1, 0, 0, 0, 0),
(79, 1, 0, 0, 1, 0, 0),
(80, 1, 1, 0, 0, 0, 0),
(81, 1, 0, 0, 1, 0, 0),
(82, 1, 1, 0, 0, 0, 0),
(83, 1, 1, 0, 0, 0, 0),
(84, 1, 1, 0, 0, 0, 0),
(85, 1, 1, 0, 0, 0, 0),
(86, 1, 0, 0, 1, 0, 0),
(87, 1, 0, 0, 1, 0, 0),
(88, 1, 1, 0, 0, 0, 0),
(89, 1, 1, 0, 0, 0, 0),
(90, 1, 1, 0, 0, 0, 0),
(91, 1, 1, 0, 0, 0, 0),
(92, 1, 0, 0, 1, 0, 0),
(93, 1, 1, 0, 0, 0, 0),
(94, 1, 0, 0, 1, 0, 0),
(95, 1, 0, 0, 1, 0, 0),
(96, 1, 0, 0, 0, 1, 0),
(97, 1, 0, 0, 1, 0, 0),
(98, 1, 1, 0, 0, 0, 0),
(99, 1, 1, 0, 0, 0, 0),
(100, 1, 1, 0, 0, 0, 0),
(101, 1, 0, 0, 1, 0, 0),
(102, 1, 0, 0, 1, 0, 0),
(103, 1, 0, 0, 1, 0, 0),
(104, 1, 1, 0, 0, 0, 0),
(105, 1, 1, 0, 0, 0, 0),
(106, 1, 0, 0, 0, 1, 0),
(107, 1, 1, 0, 0, 0, 0),
(108, 1, 1, 0, 0, 0, 0),
(109, 1, 1, 0, 0, 0, 0),
(110, 1, 1, 0, 0, 0, 0),
(111, 1, 1, 0, 0, 0, 0),
(112, 1, 1, 0, 0, 0, 0),
(113, 1, 1, 0, 0, 0, 0),
(114, 1, 1, 0, 0, 0, 0),
(115, 1, 1, 0, 0, 0, 0),
(116, 1, 1, 0, 0, 0, 0),
(117, 1, 1, 0, 0, 0, 0),
(118, 1, 1, 0, 0, 0, 0),
(119, 1, 0, 0, 1, 0, 0),
(120, 1, 1, 0, 0, 0, 0),
(121, 1, 1, 0, 0, 0, 0),
(122, 1, 1, 0, 0, 0, 0),
(123, 1, 1, 0, 0, 0, 0),
(124, 1, 1, 0, 0, 0, 0),
(125, 1, 1, 0, 0, 0, 0),
(126, 1, 0, 0, 0, 1, 0),
(127, 1, 1, 0, 0, 0, 0),
(128, 1, 0, 0, 0, 1, 0),
(129, 1, 0, 0, 1, 0, 0),
(130, 1, 0, 0, 0, 1, 0),
(131, 1, 0, 1, 0, 0, 0),
(132, 1, 1, 0, 0, 0, 0),
(133, 1, 0, 0, 0, 0, 1),
(134, 1, 0, 0, 1, 0, 0),
(135, 1, 0, 0, 1, 0, 0),
(136, 1, 1, 0, 0, 0, 0),
(137, 1, 1, 0, 0, 0, 0),
(138, 1, 1, 0, 0, 0, 0),
(139, 1, 1, 0, 0, 0, 0),
(140, 1, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cluster`
--

CREATE TABLE `cluster` (
  `id_cluster` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_kelamin` int(10) NOT NULL,
  `jurusan_sekolah` int(10) NOT NULL,
  `usia_masuk` int(10) NOT NULL,
  `penghasilan_ortu` int(10) NOT NULL,
  `sekolah` int(10) NOT NULL,
  `daerah_asal` int(10) NOT NULL,
  `kelas` int(10) NOT NULL,
  `status_tes` int(10) NOT NULL,
  `pekerjaan_mahasiswa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daerah1`
--

CREATE TABLE `daerah1` (
  `id_daerah` int(25) NOT NULL,
  `daerah` varchar(70) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daerah1`
--

INSERT INTO `daerah1` (`id_daerah`, `daerah`, `jumlah`) VALUES
(1, 'manyar', 17),
(2, 'kebomas', 15),
(3, 'gresik', 15),
(4, 'cerme', 12),
(5, 'lamongan', 4),
(6, 'duduk sampean', 1);

-- --------------------------------------------------------

--
-- Table structure for table `daerah2`
--

CREATE TABLE `daerah2` (
  `id_daerah2` int(45) NOT NULL,
  `daerah` varchar(70) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daerah2`
--

INSERT INTO `daerah2` (`id_daerah2`, `daerah`, `jumlah`) VALUES
(1, 'lamongan', 4),
(2, 'manyar', 3),
(3, 'duduk sampean', 3),
(4, 'gresik', 2),
(5, 'menganti', 1),
(6, 'cerme', 1),
(7, 'kebomas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `daerah3`
--

CREATE TABLE `daerah3` (
  `id_daerah3` int(25) NOT NULL,
  `daerah` varchar(70) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daerah3`
--

INSERT INTO `daerah3` (`id_daerah3`, `daerah`, `jumlah`) VALUES
(1, 'sedayu', 5),
(2, 'balungpanggang', 5),
(3, 'menganti', 4),
(4, 'surabaya', 3),
(5, 'duduk sampean', 2),
(6, 'bungah', 2),
(7, 'benjeng', 1),
(8, 'jember', 1),
(9, 'singosari', 1),
(10, 'dawar', 1),
(11, 'wringinenom', 1);

-- --------------------------------------------------------

--
-- Table structure for table `daerah4`
--

CREATE TABLE `daerah4` (
  `id_daerah4` int(45) NOT NULL,
  `daerah` varchar(70) NOT NULL,
  `jumlah` int(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daerah4`
--

INSERT INTO `daerah4` (`id_daerah4`, `daerah`, `jumlah`) VALUES
(1, 'kebomas', 16),
(2, 'manyar', 9),
(3, 'cerme', 3),
(4, 'gresik', 3);

-- --------------------------------------------------------

--
-- Table structure for table `daerah5`
--

CREATE TABLE `daerah5` (
  `id_daerah5` int(45) NOT NULL,
  `daerah` varchar(70) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daerah5`
--

INSERT INTO `daerah5` (`id_daerah5`, `daerah`, `jumlah`) VALUES
(1, 'surabaya', 1),
(2, 'manyar', 1),
(3, 'menganti', 1),
(4, 'bungah', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_puskesmas`
--

CREATE TABLE `data_puskesmas` (
  `no_puskesmas` int(5) NOT NULL,
  `nama_puskesmas` varchar(45) NOT NULL,
  `jumlah_pasien_total` int(10) NOT NULL,
  `ketersedian_obat_total` int(10) NOT NULL,
  `jumlah_fasilitas_total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_puskesmas`
--

INSERT INTO `data_puskesmas` (`no_puskesmas`, `nama_puskesmas`, `jumlah_pasien_total`, `ketersedian_obat_total`, `jumlah_fasilitas_total`) VALUES
(2, 'sutanjung', 67, 678, 67),
(3, 'qwerty', 231, 65, 231);

-- --------------------------------------------------------

--
-- Table structure for table `gaji_karyawan`
--

CREATE TABLE `gaji_karyawan` (
  `id_gaji` int(15) NOT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `bulan` varchar(30) DEFAULT NULL,
  `alpha` int(10) DEFAULT NULL,
  `lembur` int(10) DEFAULT NULL,
  `makan` int(10) NOT NULL,
  `total_gaji` varchar(30) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gaji_karyawan`
--

INSERT INTO `gaji_karyawan` (`id_gaji`, `nik`, `bulan`, `alpha`, `lembur`, `makan`, `total_gaji`, `status`) VALUES
(3, 'INJ001', 'Januari', 5, 5, 0, '2800000', 'tervalidasi'),
(4, 'INJ001', 'Februari', 1, 9, 0, '3200000', 'tervalidasi'),
(5, 'INJ001', 'April', 4, 4, 0, '2840000', ''),
(6, 'INJ002', 'Februari', 0, 3, 0, '2090000', 'tervalidasi'),
(7, 'INJ003', 'Februari', 2, 5, 0, '2510000', 'tervalidasi'),
(8, 'INJ003', 'Maret', 0, 1, 0, '2530000', 'tervalidasi'),
(10, 'SAE000002', 'Februari', 1, 3, 0, '3020000', 'tervalidasi'),
(11, 'SAE000003', 'Februari', 1, 4, 0, '2850000', 'tervalidasi'),
(12, 'SAE000004', 'Maret', 1, 1, 0, '3960000', NULL),
(15, 'SAE000001', 'Desember', 4, 3, 0, '2810000', 'tervalidasi'),
(19, 'SAE000005', 'Juli', 1, 10, 10, '4060000', NULL),
(21, 'SAE000001', 'Januari', 1, 10, 10, '3060000', 'tervalidasi'),
(22, 'SAE000006', 'Oktober', 5, 12, 120000, '962596000', NULL),
(23, 'SAE000006', 'Oktober', 0, 0, 160000, '1283000000', NULL),
(24, 'SAE000006', 'Oktober', 0, 0, 160000, '1283000000', NULL),
(25, 'SAE000006', 'Oktober', 0, 0, 160000, '1283000000', NULL),
(26, 'SAE000006', 'Oktober', 0, 0, 160000, '3160000', NULL),
(27, 'SAE000010', 'Februari', 1, 54, 152000, '3484000', 'tervalidasi');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_centroid`
--

CREATE TABLE `hasil_centroid` (
  `nomor` int(10) NOT NULL,
  `c1a` varchar(10) NOT NULL,
  `c1b` varchar(10) NOT NULL,
  `c1c` varchar(10) NOT NULL,
  `c1d` varchar(10) NOT NULL,
  `c1e` varchar(10) NOT NULL,
  `c1f` varchar(10) NOT NULL,
  `c1g` varchar(10) NOT NULL,
  `c1h` varchar(10) NOT NULL,
  `c1i` varchar(10) NOT NULL,
  `c2a` varchar(10) NOT NULL,
  `c2b` varchar(10) NOT NULL,
  `c2c` varchar(10) NOT NULL,
  `c2d` varchar(10) NOT NULL,
  `c2e` varchar(10) NOT NULL,
  `c2f` varchar(10) NOT NULL,
  `c2g` varchar(10) NOT NULL,
  `c2h` varchar(10) NOT NULL,
  `c2i` varchar(10) NOT NULL,
  `c3a` varchar(10) NOT NULL,
  `c3b` varchar(10) NOT NULL,
  `c3c` varchar(10) NOT NULL,
  `c3d` varchar(10) NOT NULL,
  `c3e` varchar(10) NOT NULL,
  `c3f` varchar(10) NOT NULL,
  `c3g` varchar(10) NOT NULL,
  `c3h` varchar(10) NOT NULL,
  `c3i` varchar(10) NOT NULL,
  `c4a` varchar(10) NOT NULL,
  `c4b` varchar(10) NOT NULL,
  `c4c` varchar(10) NOT NULL,
  `c4d` varchar(10) NOT NULL,
  `c4e` varchar(10) NOT NULL,
  `c4f` varchar(10) NOT NULL,
  `c4g` varchar(10) NOT NULL,
  `c4h` varchar(10) NOT NULL,
  `c4i` varchar(10) NOT NULL,
  `c5a` varchar(10) NOT NULL,
  `c5b` varchar(10) NOT NULL,
  `c5c` varchar(10) NOT NULL,
  `c5d` varchar(10) NOT NULL,
  `c5e` varchar(10) NOT NULL,
  `c5f` varchar(10) NOT NULL,
  `c5g` varchar(10) NOT NULL,
  `c5h` varchar(10) NOT NULL,
  `c5i` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_centroid`
--

INSERT INTO `hasil_centroid` (`nomor`, `c1a`, `c1b`, `c1c`, `c1d`, `c1e`, `c1f`, `c1g`, `c1h`, `c1i`, `c2a`, `c2b`, `c2c`, `c2d`, `c2e`, `c2f`, `c2g`, `c2h`, `c2i`, `c3a`, `c3b`, `c3c`, `c3d`, `c3e`, `c3f`, `c3g`, `c3h`, `c3i`, `c4a`, `c4b`, `c4c`, `c4d`, `c4e`, `c4f`, `c4g`, `c4h`, `c4i`, `c5a`, `c5b`, `c5c`, `c5d`, `c5e`, `c5f`, `c5g`, `c5h`, `c5i`) VALUES
(1, '1.6623', '1.4416', '18.7792', '1.1558', '1.8701', '2.4156', '1.4156', '1.1169', '1.2857', '2.4000', '1.8000', '23.8000', '1.0000', '2.0000', '4.2000', '1.8000', '1.4000', '2.0000', '2.0526', '1.4474', '19.8421', '1.1842', '1.8684', '8.0526', '1.5000', '1.3421', '1.5789', '2.3000', '1.2500', '20.1000', '1.2000', '1.2500', '2.1000', '1.5000', '1.3500', '2.0500', '1.6000', '1.8000', '27.4000', '1.0000', '1.4000', '5.2000', '1.6000', '1.8000', '2.4000'),
(2, '1.6875', '1.3438', '18.4063', '1.1875', '1.8281', '2.6094', '1.2969', '1.1094', '1.1875', '1.6364', '1.8182', '23.2727', '1.0909', '1.9091', '4.1818', '1.9091', '1.5455', '2.0909', '2.2222', '1.4444', '19.0741', '1.1852', '1.8148', '9.3704', '1.2963', '1.2593', '1.3333', '2.0606', '1.4545', '20.3030', '1.1515', '1.5758', '1.9394', '1.7273', '1.3030', '2.0000', '2.0000', '1.8000', '27.4000', '1.0000', '1.6000', '6.4000', '1.6000', '1.8000', '2.4000'),
(3, '1.6875', '1.3438', '18.4063', '1.1875', '1.8281', '2.6094', '1.2969', '1.1094', '1.1875', '1.6364', '1.8182', '23.2727', '1.0909', '1.9091', '4.1818', '1.9091', '1.5455', '2.0909', '2.2222', '1.4444', '19.0741', '1.1852', '1.8148', '9.3704', '1.2963', '1.2593', '1.3333', '2.0606', '1.4545', '20.3030', '1.1515', '1.5758', '1.9394', '1.7273', '1.3030', '2.0000', '2.0000', '1.8000', '27.4000', '1.0000', '1.6000', '6.4000', '1.6000', '1.8000', '2.4000');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_mahasiswa`
--

CREATE TABLE `hasil_mahasiswa` (
  `id_hasil_mahasiswa` int(10) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `usia` int(10) NOT NULL,
  `jenis` varchar(23) NOT NULL,
  `jurusan` varchar(70) NOT NULL,
  `kelas` varchar(45) NOT NULL,
  `daerah` varchar(45) NOT NULL,
  `pekerjaan` varchar(70) NOT NULL,
  `penghasilan` varchar(45) NOT NULL,
  `sekolah` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_mahasiswa`
--

INSERT INTO `hasil_mahasiswa` (`id_hasil_mahasiswa`, `nama`, `usia`, `jenis`, `jurusan`, `kelas`, `daerah`, `pekerjaan`, `penghasilan`, `sekolah`, `status`) VALUES
(1, 'yunuar ratnar', 19, 'perempuan', 'kejuruan', 'sore', 'cerme', 'bekerja <2th', '<1 juta', 'smk', 'test'),
(2, 'Roisyah Zuliyanti', 18, 'laki-laki', 'kejuruan', 'sore', 'kebomas', 'belum bekerja', '<1 juta', 'smk', 'test'),
(3, 'Khusnul Muannimah', 18, 'perempuan', 'ipa', 'sore', 'cerme', 'belum bekerja', '<1 juta', 'sma', 'test'),
(4, 'Lasyana Kusumastuti', 21, 'perempuan', 'ips', 'sore', 'lamongan', 'bekerja <2th', '<1 juta', 'sma', 'test'),
(5, 'Moh Feryzaly', 19, 'laki-laki', 'kejuruan', 'sore', 'kebomas', 'belum bekerja', '>1 juta', 'smk', 'test'),
(6, 'Nanda Khoirunisa', 20, 'perempuan', 'kejuruan', 'sore', 'jember', 'bekerja <2th', '>1 juta', 'sma', 'test'),
(7, 'Ananda Syamduti', 20, 'perempuan', 'kejuruan', 'sore', 'kebomas', 'bekerja <2th', '>1 juta', 'smk', 'test'),
(8, 'allan yanwar P', 18, 'laki-laki', 'kejuruan', 'sore', 'manyar', 'belum bekerja', '>1 juta', 'smk', 'test'),
(9, 'Bagus Kurniawan', 21, 'laki-laki', 'kejuruan', 'sore', 'duduk sampean', 'bekerja <2th', '>1 juta', 'smk', 'test'),
(10, 'Misbakhul Ramadani', 27, 'laki-laki', 'ips', 'sore', 'surabaya', 'bekerja <2th', '>1 juta', 'sma', 'test'),
(11, 'M Misbachul', 20, 'laki-laki', 'kejuruan', 'sore', 'manyar', 'bekerja <2th', '>1 juta', 'smk', 'test'),
(12, 'Nur Rochma Yulia', 18, 'perempuan', 'kejuruan', 'sore', 'gresik', 'belum bekerja', '>1 juta', 'smk', 'test'),
(13, 'Tria Nurrohmah W', 21, 'perempuan', 'ipa', 'sore', 'lamongan', 'bekerja <2th', '>1 juta', 'sma', 'test'),
(14, 'Alfiatus Saadah', 20, 'perempuan', 'kejuruan', 'sore', 'manyar', 'bekerja <2th', '>1 juta', 'smk', 'test'),
(15, 'Siti Maarifah A', 18, 'perempuan', 'kejuruan', 'sore', 'kebomas', 'belum bekerja', '>1 juta', 'smk', 'test'),
(16, 'Siti Hajar Rahmawati', 20, 'perempuan', 'ipa', 'sore', 'kebomas', 'belum bekerja', '>1 juta', 'sma', 'test'),
(17, 'Rizki Taufikul HG', 23, 'laki-laki', 'kejuruan', 'sore', 'kebomas', 'belum bekerja', '>1 juta', 'smk', 'test'),
(18, 'Mahfirotun Nisa', 18, 'perempuan', 'kejuruan', 'sore', 'kebomas', 'belum bekerja', '>1 juta', 'smk', 'test'),
(19, 'Rafiqah Dwi Rahma', 18, 'perempuan', 'ipa', 'sore', 'kebomas', 'belum bekerja', '>1 juta', 'ma', 'test'),
(20, 'Eka Sadam Giri S', 22, 'laki-laki', 'kejuruan', 'sore', 'gresik', 'belum bekerja', '>1 juta', 'smk', 'test'),
(21, 'M Gerri Setra B', 18, 'laki-laki', 'ips', 'sore', 'cerme', 'belum bekerja', '>1 juta', 'sma', 'test'),
(22, 'M Hafidh Machrudin R', 19, 'laki-laki', 'kejuruan', 'sore', 'kebomas', 'belum bekerja', '>1 juta', 'smk', 'test'),
(23, 'Subekhan Fathur R', 19, 'laki-laki', 'ips', 'sore', 'cerme', 'belum bekerja', '>1 juta', 'sma', 'test'),
(24, 'Sholikhul Hadi', 19, 'laki-laki', 'kejuruan', 'sore', 'manyar', 'belum bekerja', '>1 juta', 'smk', 'test'),
(25, 'M Fakhrus Shobirin', 18, 'laki-laki', 'ips', 'sore', 'sedayu', 'belum bekerja', '>1 juta', 'sma', 'test'),
(26, 'Ziko Malifon AAB ', 18, 'laki-laki', 'ips', 'sore', 'kebomas', 'belum bekerja', '>1 juta', 'sma', 'test'),
(27, 'Fiki Cahyono ', 18, 'laki-laki', 'ipa', 'sore', 'dawar', 'belum bekerja', '>1 juta', 'sma', 'test'),
(28, 'Uzlifatul Fuaidah', 18, 'perempuan', 'kejuruan', 'sore', 'kebomas', 'bekerja <2th', '>1 juta', 'smk', 'test'),
(29, 'Abdur Rohman', 19, 'laki-laki', 'ipa', 'sore', 'kebomas', 'bekerja <2th', '>1 juta', 'sma', 'test'),
(30, 'Satria Yudha Prakosa', 19, 'laki-laki', 'ipa', 'sore', 'kebomas', 'belum bekerja', '>1 juta', 'sma', 'test'),
(31, 'M Fanani Wahyu R', 19, 'laki-laki', 'ips', 'sore', 'kebomas', 'bekerja <2th', '>1 juta', 'ma', 'test'),
(32, 'Fathul Barri', 22, 'laki-laki', 'ips', 'sore', 'manyar', 'bekerja <2th', '>1 juta', 'sma', 'test'),
(33, 'Lutfi Romadhoni', 23, 'laki-laki', 'kejuruan', 'sore', 'manyar', 'bekerja <2th', '>1 juta', 'smk', 'test'),
(34, 'M Zainulloh Zain', 21, 'laki-laki', 'kejuruan', 'sore', 'manyar', 'bekerja >2th', '>1 juta', 'smk', 'test'),
(35, 'Imanullah Ali Ubed', 19, 'laki-laki', 'ips', 'sore', 'manyar', 'belum bekerja', '>1 juta', 'sma', 'test'),
(36, 'Vindy Widia A', 18, 'perempuan', 'ips', 'sore', 'bungah', 'belum bekerja', '>1 juta', 'ma', 'test'),
(37, 'Rio Restu Y', 20, 'perempuan', 'kejuruan', 'sore', 'cerme', 'bekerja <2th', '>1 juta', 'smk', 'test'),
(38, 'Sulis Tiawati', 21, 'perempuan', 'ips', 'sore', 'manyar', 'bekerja <2th', '>1 juta', 'sma', 'test'),
(39, 'Moh Chanif Alfarizi', 19, 'laki-laki', 'ips', 'sore', 'kebomas', 'bekerja <2th', '>1 juta', 'sma', 'test'),
(40, 'Samsi Syahputra', 21, 'laki-laki', 'kejuruan', 'sore', 'kebomas', 'bekerja <2th', '>1 juta', 'smk', 'test'),
(41, 'Kazuesal Zabella', 20, 'perempuan', 'ips', 'sore', 'manyar', 'bekerja <2th', '>1 juta', 'sma', 'test'),
(42, 'Mohammad Ilham', 23, 'laki-laki', 'ipa', 'sore', 'manyar', 'bekerja <2th', '>1 juta', 'sma', 'test'),
(43, 'Siti Rohmawati', 22, 'perempuan', 'ips', 'sore', 'menganti', 'bekerja <2th', '>1 juta', 'sma', 'test'),
(44, 'Shufiyah Najati U', 21, 'perempuan', 'ips', 'sore', 'gresik', 'bekerja <2th', '>1 juta', 'ma', 'test'),
(45, 'Andryan Adi W', 20, 'perempuan', 'ips', 'sore', 'gresik', 'bekerja <2th', '>1 juta', 'sma', 'test'),
(46, 'dimas suyra T', 22, 'laki-laki', 'kejuruan', 'sore', 'menganti', 'bekerja <2th', '<1 juta', 'smk', 'bebas test'),
(47, 'Humada Alfian A', 21, 'perempuan', 'ips', 'sore', 'kebomas', 'bekerja >2th', '<1 juta', 'sma', 'bebas test'),
(48, 'Muhammad Ahyat D', 21, 'laki-laki', 'ipa', 'sore', 'benjeng', 'bekerja >2th', '<1 juta', 'sma', 'bebas test'),
(49, 'ahmad hadi yunus', 27, 'laki-laki', 'ips', 'sore', 'manyar', 'bekerja >2th', '>1 juta', 'sma', 'bebas test'),
(50, 'bagus hariyanto', 24, 'laki-laki', 'ips', 'sore', 'menganti', 'bekerja >2th', '>1 juta', 'ma', 'bebas test'),
(51, 'Siti Khodijah', 26, 'perempuan', 'ipa', 'sore', 'duduk sampean', 'bekerja >2th', '>1 juta', 'ma', 'bebas test'),
(52, 'Fransiska Saveria M J ', 26, 'perempuan', 'kejuruan', 'sore', 'kebomas', 'bekerja >2th', '>1 juta', 'smk', 'bebas test'),
(53, 'Chunaina', 20, 'perempuan', 'kejuruan', 'sore', 'gresik', 'bekerja >2th', '>1 juta', 'smk', 'bebas test'),
(54, 'M Edi Santoso', 24, 'laki-laki', 'kejuruan', 'sore', 'duduk sampean', 'bekerja >2th', '>1 juta', 'smk', 'bebas test'),
(55, 'Syahrul Ramadhan', 20, 'laki-laki', 'kejuruan', 'sore', 'kebomas', 'bekerja >2th', '>1 juta', 'smk', 'bebas test'),
(56, 'Eko Dharmawan N', 25, 'laki-laki', 'ipa', 'sore', 'lamongan', 'bekerja <2th', '>1 juta', 'ma', 'bebas test'),
(57, 'Achmad Fathoni ', 21, 'laki-laki', 'ips', 'sore', 'kebomas', 'bekerja <2th', '>1 juta', 'ma', 'bebas test'),
(58, 'Maulana Ashari', 20, 'laki-laki', 'kejuruan', 'sore', 'cerme', 'bekerja <2th', '>1 juta', 'smk', 'bebas test'),
(59, 'Madastya Fillah Q', 19, 'perempuan', 'ipa', 'sore', 'surabaya', 'bekerja <2th', '>1 juta', 'ma', 'bebas test'),
(60, 'Dimas Oki Santoso', 23, 'laki-laki', 'kejuruan', 'sore', 'gresik', 'bekerja <2th', '>1 juta', 'smk', 'bebas test'),
(61, 'M Ichlasul Amal', 23, 'laki-laki', 'ips', 'sore', 'kebomas', 'bekerja >2th', '>1 juta', 'smk', 'bebas test'),
(62, 'Fadhiyah Jayanti', 21, 'perempuan', 'ips', 'sore', 'cerme', 'bekerja <2th', '>1 juta', 'ma', 'bebas test'),
(63, 'Vivian Dewi S', 21, 'perempuan', 'ipa', 'sore', 'balungpanggang', 'bekerja <2th', '>1 juta', 'ma', 'bebas test'),
(64, 'Khoirul Alim', 20, 'laki-laki', 'ips', 'sore', 'manyar', 'bekerja <2th', '>1 juta', 'sma', 'bebas test'),
(65, 'riska dwi R', 18, 'laki-laki', 'ips', 'pagi', 'lamongan', 'belum bekerja', '<1 juta', 'sma', 'test'),
(66, 'yulianti alvia', 19, 'perempuan', 'kejuruan', 'pagi', 'manyar', 'belum bekerja', '<1 juta', 'smk', 'test'),
(67, 'Isnah Mahfiroh', 20, 'perempuan', 'ips', 'pagi', 'cerme', 'bekerja <2th', '<1 juta', 'sma', 'test'),
(68, 'Zuni Rezalina A', 18, 'perempuan', 'ipa', 'pagi', 'lamongan', 'belum bekerja', '<1 juta', 'sma', 'test'),
(69, 'Fira Dahlianti', 18, 'perempuan', 'kejuruan', 'pagi', 'gresik', 'belum bekerja', '<1 juta', 'smk', 'test'),
(70, 'Rustika Wati Ningsih', 18, 'perempuan', 'ips', 'pagi', 'kebomas', 'belum bekerja', '<1 juta', 'sma', 'test'),
(71, 'Jannah Annisa', 20, 'perempuan', 'kejuruan', 'pagi', 'kebomas', 'belum bekerja', '<1 juta', 'smk', 'test'),
(72, 'M Faisal S', 18, 'laki-laki', 'kejuruan', 'pagi', 'balungpanggang', 'belum bekerja', '<1 juta', 'smk', 'test'),
(73, 'Ahmad Dzul Faruk', 19, 'laki-laki', 'ips', 'pagi', 'duduk sampean', 'belum bekerja', '<1 juta', 'ma', 'test'),
(74, 'Karima Diva R', 18, 'perempuan', 'ipa', 'pagi', 'gresik', 'belum bekerja', '<1 juta', 'sma', 'test'),
(75, 'Delina Puspita S', 18, 'perempuan', 'ips', 'pagi', 'lamongan', 'belum bekerja', '<1 juta', 'sma', 'test'),
(76, 'Izzatu Mukhlishoti', 18, 'perempuan', 'kejuruan', 'pagi', 'duduk sampean', 'belum bekerja', '<1 juta', 'smk', 'test'),
(77, 'Imam Fakrudin', 22, 'laki-laki', 'ips', 'pagi', 'lamongan', 'belum bekerja', '>1 juta', 'sma', 'test'),
(78, 'Ananda Firdausi', 19, 'perempuan', 'kejuruan', 'pagi', 'kebomas', 'bekerja <2th', '>1 juta', 'smk', 'test'),
(79, 'moh endias H', 20, 'laki-laki', 'ips', 'pagi', 'singosari', 'belum bekerja', '>1 juta', 'sma', 'test'),
(80, 'hanafi nurul Q', 18, 'perempuan', 'kejuruan', 'pagi', 'cerme', 'belum bekerja', '>1 juta', 'smk', 'test'),
(81, 'ema eliyana', 18, 'perempuan', 'ipa', 'pagi', 'balungpanggang', 'belum bekerja', '>1 juta', 'sma', 'test'),
(82, 'zulfatun nimah', 18, 'perempuan', 'ips', 'pagi', 'manyar', 'belum bekerja', '>1 juta', 'ma', 'test'),
(83, 'maya firdausi', 18, 'perempuan', 'kejuruan', 'pagi', 'cerme', 'belum bekerja', '>1 juta', 'smk', 'test'),
(84, 'bagus sultan', 18, 'laki-laki', 'kejuruan', 'pagi', 'manyar', 'belum bekerja', '>1 juta', 'smk', 'test'),
(85, 'erni khofifah', 18, 'perempuan', 'ipa', 'pagi', 'manyar', 'belum bekerja', '>1 juta', 'ma', 'test'),
(86, 'moh benativ', 20, 'laki-laki', 'ipa', 'pagi', 'menganti', 'belum bekerja', '>1 juta', 'sma', 'test'),
(87, 'marisa dwi yanti', 18, 'perempuan', 'ipa', 'pagi', 'menganti', 'belum bekerja', '>1 juta', 'sma', 'test'),
(88, 'Alfian Zulkarnain Putra', 18, 'laki-laki', 'kejuruan', 'pagi', 'kebomas', 'belum bekerja', '>1 juta', 'smk', 'test'),
(89, 'Elisa Alfiyani', 18, 'perempuan', 'ipa', 'pagi', 'manyar', 'belum bekerja', '>1 juta', 'sma', 'test'),
(90, 'M Noval Alvian', 19, 'laki-laki', 'kejuruan', 'pagi', 'cerme', 'belum bekerja', '>1 juta', 'smk', 'test'),
(91, 'Anissah S', 19, 'perempuan', 'ipa', 'pagi', 'gresik', 'belum bekerja', '>1 juta', 'sma', 'test'),
(92, 'Nur Laili Khasana', 18, 'perempuan', 'ipa', 'pagi', 'wringinenom', 'belum bekerja', '>1 juta', 'ma', 'test'),
(93, 'Shinta Islami', 19, 'perempuan', 'ipa', 'pagi', 'kebomas', 'belum bekerja', '>1 juta', 'sma', 'test'),
(94, 'Joko Cahyono Putra', 19, 'laki-laki', 'kejuruan', 'pagi', 'balungpanggang', 'bekerja <2th', '>1 juta', 'smk', 'test'),
(95, 'M Nurdin Kurnia A', 19, 'laki-laki', 'ipa', 'pagi', 'balungpanggang', 'belum bekerja', '>1 juta', 'sma', 'test'),
(96, 'Moch Syaifuddin Aris', 19, 'laki-laki', 'ips', 'pagi', 'kebomas', 'bekerja <2th', '>1 juta', 'sma', 'test'),
(97, 'M Danial Ramadhoni', 18, 'laki-laki', 'kejuruan', 'pagi', 'sedayu', 'belum bekerja', '>1 juta', 'smk', 'test'),
(98, 'Suci Wulandari', 18, 'perempuan', 'kejuruan', 'pagi', 'kebomas', 'belum bekerja', '>1 juta', 'smk', 'test'),
(99, 'Alifiyah Indar Rahmah', 18, 'perempuan', 'ips', 'pagi', 'manyar', 'belum bekerja', '>1 juta', 'ma', 'test'),
(100, 'Yuliana Dewi', 18, 'perempuan', 'ipa', 'pagi', 'cerme', 'belum bekerja', '>1 juta', 'ma', 'test'),
(101, 'Anis Jihan Nita', 19, 'perempuan', 'ipa', 'pagi', 'sedayu', 'belum bekerja', '>1 juta', 'sma', 'test'),
(102, 'Mulyati Dian F', 20, 'perempuan', 'ipa', 'pagi', 'bungah', 'belum bekerja', '>1 juta', 'ma', 'test'),
(103, 'Shokhifatuz Zuhro', 18, 'perempuan', 'ips', 'pagi', 'duduk sampean', 'belum bekerja', '>1 juta', 'sma', 'test'),
(104, 'Zumrotul Maslihah', 18, 'perempuan', 'kejuruan', 'pagi', 'lamongan', 'belum bekerja', '>1 juta', 'smk', 'test'),
(105, 'Juliyanti Olyvia S', 19, 'perempuan', 'kejuruan', 'pagi', 'manyar', 'belum bekerja', '>1 juta', 'smk', 'test'),
(106, 'Selly Noveliyanti B', 21, 'perempuan', 'ipa', 'pagi', 'manyar', 'belum bekerja', '>1 juta', 'sma', 'test'),
(107, 'Palupi Adilia P', 19, 'perempuan', 'ipa', 'pagi', 'kebomas', 'belum bekerja', '>1 juta', 'sma', 'test'),
(108, 'Nurul Adniyah', 18, 'perempuan', 'kejuruan', 'pagi', 'gresik', 'belum bekerja', '>1 juta', 'sma', 'test'),
(109, 'Thezar Alfarozi', 20, 'laki-laki', 'kejuruan', 'pagi', 'gresik', 'belum bekerja', '>1 juta', 'smk', 'test'),
(110, 'A Jailani Strio W', 19, 'laki-laki', 'ipa', 'pagi', 'gresik', 'belum bekerja', '>1 juta', 'smk', 'test'),
(111, 'Moh Ivan Asyrofi', 18, 'laki-laki', 'kejuruan', 'pagi', 'manyar', 'belum bekerja', '>1 juta', 'smk', 'test'),
(112, 'Hikmah Anggun G', 18, 'perempuan', 'ipa', 'pagi', 'gresik', 'belum bekerja', '>1 juta', 'sma', 'test'),
(113, 'Azidatul Zulqoidah', 18, 'perempuan', 'kejuruan', 'pagi', 'gresik', 'belum bekerja', '>1 juta', 'smk', 'test'),
(114, 'Bagas Arista H', 19, 'laki-laki', 'ipa', 'pagi', 'gresik', 'bekerja <2th', '>1 juta', 'sma', 'test'),
(115, 'Siti Qozaemah', 18, 'perempuan', 'ips', 'pagi', 'gresik', 'belum bekerja', '>1 juta', 'sma', 'test'),
(116, 'Siti Qozaemah', 18, 'perempuan', 'ips', 'pagi', 'gresik', 'belum bekerja', '>1 juta', 'sma', 'test'),
(117, 'Sinta Dewi N T N', 18, 'perempuan', 'kejuruan', 'pagi', 'gresik', 'belum bekerja', '>1 juta', 'smk', 'test'),
(118, 'Nurul Arifin', 19, 'perempuan', 'ips', 'pagi', 'cerme', 'bekerja <2th', '>1 juta', 'sma', 'test'),
(119, 'Novia Candra L', 18, 'perempuan', 'ipa', 'pagi', 'sedayu', 'belum bekerja', '>1 juta', 'ma', 'test'),
(120, 'Imam Wahyu K', 19, 'laki-laki', 'ips', 'pagi', 'manyar', 'bekerja <2th', '>1 juta', 'sma', 'test'),
(121, 'Yessy Yustia W', 18, 'perempuan', 'kejuruan', 'pagi', 'manyar', 'belum bekerja', '>1 juta', 'smk', 'test'),
(122, 'Abdullah Muhammad', 19, 'laki-laki', 'kejuruan', 'pagi', 'manyar', 'belum bekerja', '>1 juta', 'smk', 'test'),
(123, 'Ana Zunaidatul I', 19, 'perempuan', 'ips', 'pagi', 'cerme', 'belum bekerja', '>1 juta', 'ma', 'test'),
(124, 'Arum Ariyaya', 18, 'perempuan', 'ipa', 'pagi', 'manyar', 'belum bekerja', '>1 juta', 'sma', 'test'),
(125, 'M Ivan Fatoni', 18, 'laki-laki', 'ips', 'pagi', 'cerme', 'bekerja <2th', '>1 juta', 'ma', 'test'),
(126, 'khusnul tohroh', 19, 'perempuan', 'ipa', 'pagi', 'kebomas', 'bekerja >2th', '<1 juta', 'smk', 'bebas test'),
(127, 'indah wahyu A', 18, 'perempuan', 'ips', 'pagi', 'cerme', 'belum bekerja', '<1 juta', 'ma', 'bebas test'),
(128, 'Kusnul Tohiroh', 19, 'perempuan', 'ipa', 'pagi', 'kebomas', 'bekerja >2th', '<1 juta', 'smk', 'bebas test'),
(129, 'Arief Khusnuddin', 19, 'laki-laki', 'kejuruan', 'pagi', 'surabaya', 'bekerja <2th', '<1 juta', 'smk', 'bebas test'),
(130, 'moh kharis', 21, 'laki-laki', 'ips', 'pagi', 'manyar', 'belum bekerja', '>1 juta', 'ma', 'bebas test'),
(131, 'Edi Eriyanto', 27, 'laki-laki', 'kejuruan', 'pagi', 'manyar', 'bekerja >2th', '>1 juta', 'smk', 'bebas test'),
(132, 'Fyary Setiawan', 18, 'perempuan', 'ips', 'pagi', 'gresik', 'bekerja >2th', '>1 juta', 'sma', 'bebas test'),
(133, 'Irgi Fatihul Inam', 30, 'laki-laki', 'ips', 'pagi', 'bungah', 'belum bekerja', '>1 juta', 'sma', 'bebas test'),
(134, 'Winda Rofiatun N', 19, 'perempuan', 'ipa', 'pagi', 'sedayu', 'bekerja <2th', '>1 juta', 'sma', 'bebas test'),
(135, 'Jauhariati Fatimi', 23, 'perempuan', 'ips', 'pagi', 'surabaya', 'belum bekerja', '>1 juta', 'sma', 'bebas test'),
(136, 'Muhammad Amrin', 19, 'laki-laki', 'ips', 'pagi', 'gresik', 'belum bekerja', '>1 juta', 'sma', 'bebas test'),
(137, 'Tutut Takhiyatul', 18, 'perempuan', 'ips', 'pagi', 'manyar', 'belum bekerja', '>1 juta', 'ma', 'bebas test'),
(138, 'Assyifa Kartika Y', 18, 'perempuan', 'ips', 'pagi', 'kebomas', 'belum bekerja', '>1 juta', 'sma', 'bebas test'),
(139, 'Deasy Afrilia', 18, 'perempuan', 'ips', 'pagi', 'menganti', 'belum bekerja', '>1 juta', 'ma', 'bebas test'),
(140, 'Maudy Annastasia', 18, 'perempuan', 'ips', 'pagi', 'manyar', 'bekerja <2th', '>1 juta', 'ma', 'bebas test');

-- --------------------------------------------------------

--
-- Table structure for table `import_data`
--

CREATE TABLE `import_data` (
  `id_import` int(20) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `usia` int(25) NOT NULL,
  `jenis` varchar(70) NOT NULL,
  `jurusan` varchar(70) NOT NULL,
  `kelas` varchar(70) NOT NULL,
  `daerah` varchar(70) NOT NULL,
  `pekerjaan` varchar(70) NOT NULL,
  `penghasilan_ortu` varchar(70) NOT NULL,
  `sekolah` varchar(70) NOT NULL,
  `status` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inisial_daerah`
--

CREATE TABLE `inisial_daerah` (
  `id_inisial_daerah` int(10) NOT NULL,
  `daerah` varchar(25) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `inisial` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inisial_daerah`
--

INSERT INTO `inisial_daerah` (`id_inisial_daerah`, `daerah`, `jumlah`, `inisial`) VALUES
(1, 'kebomas', 32, 1),
(2, 'manyar', 30, 2),
(3, 'gresik', 20, 3),
(4, 'cerme', 16, 4),
(5, 'lamongan', 8, 5),
(6, 'duduk sampean', 6, 6),
(7, 'menganti', 6, 7),
(8, 'sedayu', 5, 8),
(9, 'balungpanggang', 5, 9),
(10, 'surabaya', 4, 10),
(11, 'bungah', 3, 11),
(12, 'singosari', 1, 12),
(13, 'wringinenom', 1, 13),
(14, 'jember', 1, 14),
(15, 'dawar', 1, 15),
(16, 'benjeng', 1, 16);

-- --------------------------------------------------------

--
-- Table structure for table `inisial_jenis`
--

CREATE TABLE `inisial_jenis` (
  `id_inisial_jenis` int(10) NOT NULL,
  `jenis` varchar(24) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `inisial` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inisial_jenis`
--

INSERT INTO `inisial_jenis` (`id_inisial_jenis`, `jenis`, `jumlah`, `inisial`) VALUES
(1, 'perempuan', 78, 1),
(2, 'laki-laki', 62, 2);

-- --------------------------------------------------------

--
-- Table structure for table `inisial_jurusan`
--

CREATE TABLE `inisial_jurusan` (
  `id_inisial_jurusan` int(10) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `inisial` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inisial_jurusan`
--

INSERT INTO `inisial_jurusan` (`id_inisial_jurusan`, `jurusan`, `jumlah`, `inisial`) VALUES
(1, 'kejuruan', 53, 1),
(2, 'ips', 50, 2),
(3, 'ipa', 37, 3);

-- --------------------------------------------------------

--
-- Table structure for table `inisial_kelas`
--

CREATE TABLE `inisial_kelas` (
  `id_inisial_kelas` int(10) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `inisial` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inisial_kelas`
--

INSERT INTO `inisial_kelas` (`id_inisial_kelas`, `kelas`, `jumlah`, `inisial`) VALUES
(1, 'pagi', 76, 1),
(2, 'sore', 64, 2);

-- --------------------------------------------------------

--
-- Table structure for table `inisial_pekerjaan`
--

CREATE TABLE `inisial_pekerjaan` (
  `id_inisial_pekerjaan` int(10) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `inisial` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inisial_pekerjaan`
--

INSERT INTO `inisial_pekerjaan` (`id_inisial_pekerjaan`, `pekerjaan`, `jumlah`, `inisial`) VALUES
(1, 'belum bekerja', 82, 1),
(2, 'bekerja <2th', 43, 2),
(3, 'bekerja >2th', 15, 3);

-- --------------------------------------------------------

--
-- Table structure for table `inisial_penghasilan`
--

CREATE TABLE `inisial_penghasilan` (
  `id_inisial_penghasilan` int(10) NOT NULL,
  `penghasilan` varchar(11) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `inisial` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inisial_penghasilan`
--

INSERT INTO `inisial_penghasilan` (`id_inisial_penghasilan`, `penghasilan`, `jumlah`, `inisial`) VALUES
(1, '>1 juta', 117, 1),
(2, '<1 juta', 23, 2);

-- --------------------------------------------------------

--
-- Table structure for table `inisial_sekolah`
--

CREATE TABLE `inisial_sekolah` (
  `id_inisial_sekolah` int(10) NOT NULL,
  `sekolah` varchar(25) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `inisial` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inisial_sekolah`
--

INSERT INTO `inisial_sekolah` (`id_inisial_sekolah`, `sekolah`, `jumlah`, `inisial`) VALUES
(1, 'sma', 59, 1),
(2, 'smk', 55, 2),
(3, 'ma', 26, 3);

-- --------------------------------------------------------

--
-- Table structure for table `inisial_status`
--

CREATE TABLE `inisial_status` (
  `id_inisial_status` int(10) NOT NULL,
  `status` varchar(25) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `inisial` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inisial_status`
--

INSERT INTO `inisial_status` (`id_inisial_status`, `status`, `jumlah`, `inisial`) VALUES
(1, 'test', 106, 1),
(2, 'bebas test', 34, 2);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(7) NOT NULL,
  `id_peserta` int(7) NOT NULL,
  `tgl_tes` date NOT NULL,
  `benar` int(7) NOT NULL,
  `salah` int(7) NOT NULL,
  `total_nilai` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id_jawaban`, `id_peserta`, `tgl_tes`, `benar`, `salah`, `total_nilai`) VALUES
(1, 7, '2017-11-25', 2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_detail`
--

CREATE TABLE `jawaban_detail` (
  `id_jawaban_detail` int(7) NOT NULL,
  `id_jawaban` int(7) NOT NULL,
  `id_soal` int(7) NOT NULL,
  `id_jenistrening` int(7) NOT NULL,
  `jawaban` varchar(9) NOT NULL,
  `kunci` varchar(9) NOT NULL,
  `nilai` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban_detail`
--

INSERT INTO `jawaban_detail` (`id_jawaban_detail`, `id_jawaban`, `id_soal`, `id_jenistrening`, `jawaban`, `kunci`, `nilai`) VALUES
(1, 1, 1, 1, 'A', 'A', 1),
(2, 1, 2, 1, 'A', 'A', 1),
(3, 1, 4, 2, 'B', 'E', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jenistrening`
--

CREATE TABLE `jenistrening` (
  `id_jenistrening` int(25) NOT NULL,
  `jenistrening` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenistrening`
--

INSERT INTO `jenistrening` (`id_jenistrening`, `jenistrening`) VALUES
(1, 'K3'),
(2, 'Pemadam Kebakaran'),
(3, 'Bluldoser'),
(4, 'Floklip');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id_jenis` int(11) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id_jenis`, `jenis_kelamin`) VALUES
(1, 'laki-laki'),
(2, 'perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan1`
--

CREATE TABLE `jurusan1` (
  `id_jurusan1` int(45) NOT NULL,
  `jurusan` varchar(70) NOT NULL,
  `jumlah` int(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan1`
--

INSERT INTO `jurusan1` (`id_jurusan1`, `jurusan`, `jumlah`) VALUES
(1, 'kejuruan', 28),
(2, 'ips', 22),
(3, 'ipa', 14);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan2`
--

CREATE TABLE `jurusan2` (
  `id_jurusan2` int(45) NOT NULL,
  `jurusan` varchar(70) NOT NULL,
  `jumlah` int(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan2`
--

INSERT INTO `jurusan2` (`id_jurusan2`, `jurusan`, `jumlah`) VALUES
(1, 'kejuruan', 7),
(2, 'ips', 5),
(3, 'ipa', 3);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan3`
--

CREATE TABLE `jurusan3` (
  `id_jurusan3` int(25) NOT NULL,
  `jurusan` varchar(45) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan3`
--

INSERT INTO `jurusan3` (`id_jurusan3`, `jurusan`, `jumlah`) VALUES
(1, 'ipa', 13),
(2, 'kejuruan', 7),
(3, 'ips', 6);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan4`
--

CREATE TABLE `jurusan4` (
  `id_jurusan4` int(45) NOT NULL,
  `jurusan` varchar(45) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan4`
--

INSERT INTO `jurusan4` (`id_jurusan4`, `jurusan`, `jumlah`) VALUES
(1, 'ips', 14),
(2, 'kejuruan', 11),
(3, 'ipa', 6);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan5`
--

CREATE TABLE `jurusan5` (
  `id_jurusan5` int(45) NOT NULL,
  `jurusan` varchar(70) NOT NULL,
  `jumlah` int(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan5`
--

INSERT INTO `jurusan5` (`id_jurusan5`, `jurusan`, `jumlah`) VALUES
(1, 'ips', 3),
(2, 'ipa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan_sekolah`
--

CREATE TABLE `jurusan_sekolah` (
  `id_jurusan` int(10) NOT NULL,
  `jurusan_sekolah` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan_sekolah`
--

INSERT INTO `jurusan_sekolah` (`id_jurusan`, `jurusan_sekolah`) VALUES
(1, 'ipa'),
(2, 'ips'),
(3, 'kejuruan');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(15) NOT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text,
  `bagian` varchar(30) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat` varchar(45) NOT NULL,
  `status` varchar(24) NOT NULL,
  `jenis_kelamin` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nik`, `nama`, `alamat`, `bagian`, `tgl_lahir`, `tempat`, `status`, `jenis_kelamin`) VALUES
(31, 'SAE000001', 'Mat', 'Jl. Veteran Madya No.16', 'PRODUKSI', '2017-03-23', 'njknjk', 'Menikah', 'Laki-Laki'),
(32, 'SAE000002', 'Kharis', 'Jl. Veteran Madya Barat No.26.', 'PRODUKSI', '2017-03-17', 'kk', 'Menikah', 'Laki-Laki'),
(33, 'SAE000003', 'Ridwan', 'Jl. Veteran Madya ', 'SALES', '1993-06-17', 'gresik', 'Menikah', 'Laki-Laki'),
(34, 'SAE000004', 'Gunawan ', 'Jl. Veteran Madya ', 'MANDOR', '1997-06-18', 'gresik', 'Menikah', 'Laki-Laki'),
(36, 'SAE000006', 'surya', 'Jl. Madya Veteran', 'PRODUKSI', '1994-04-14', 'gresik', 'Menikah', 'Laki-Laki'),
(37, 'SAE000007', 'SUSWINTO', 'JL. MADYA VETERAN', 'SALES', '1995-06-14', 'gresik', 'Menikah', 'Laki-Laki'),
(38, 'SAE000008', 'umam', 'gresik', 'PRODUKSI', '2017-10-14', 'gresik', 'Belum Menikah', 'Laki-Laki'),
(39, 'SAE000009', 'skljkj', 'kjkljkl', 'MANDOR', '2017-10-11', 'jkjk', 'Menikah', 'Perempuan'),
(40, 'SAE000010', 'hjgjhjk', 'fghghf', 'PRODUKSI', '2017-10-02', 'gfghfg', 'Menikah', 'Laki-Laki'),
(41, 'SAE000011', 'lkjkjkl', 'kljkljkl', 'PRODUKSI', '1899-12-12', 'kljklj', 'Belum Menikah', 'Perempuan'),
(42, 'SAE000012', 'rudi', 'gresik', 'MANDOR', '2017-10-27', 'gresik', 'Belum Menikah', 'Laki-Laki'),
(43, 'SAE000013', 'zanu', 'blora', 'PRODUKSI', '2017-10-11', 'blora', 'Belum Menikah', 'Laki-Laki'),
(44, 'SAE000014', 'chakim', 'gresik', 'PRODUKSI', '2017-11-10', 'gresik', 'Belum Menikah', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(10) NOT NULL,
  `kelas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
(1, 'sore'),
(2, 'pagi');

-- --------------------------------------------------------

--
-- Table structure for table `kelas1`
--

CREATE TABLE `kelas1` (
  `id_kelas1` int(45) NOT NULL,
  `kelas` varchar(45) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas1`
--

INSERT INTO `kelas1` (`id_kelas1`, `kelas`, `jumlah`) VALUES
(1, 'pagi', 48),
(2, 'sore', 16);

-- --------------------------------------------------------

--
-- Table structure for table `kelas2`
--

CREATE TABLE `kelas2` (
  `id_kelas2` int(45) NOT NULL,
  `kelas` varchar(70) NOT NULL,
  `jumlah` int(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas2`
--

INSERT INTO `kelas2` (`id_kelas2`, `kelas`, `jumlah`) VALUES
(1, 'sore', 13),
(2, 'pagi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kelas3`
--

CREATE TABLE `kelas3` (
  `id_kelas3` int(45) NOT NULL,
  `kelas` varchar(45) NOT NULL,
  `jumlah` int(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas3`
--

INSERT INTO `kelas3` (`id_kelas3`, `kelas`, `jumlah`) VALUES
(1, 'pagi', 18),
(2, 'sore', 8);

-- --------------------------------------------------------

--
-- Table structure for table `kelas4`
--

CREATE TABLE `kelas4` (
  `id_kelas4` int(45) NOT NULL,
  `kelas` varchar(45) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas4`
--

INSERT INTO `kelas4` (`id_kelas4`, `kelas`, `jumlah`) VALUES
(1, 'sore', 24),
(2, 'pagi', 7);

-- --------------------------------------------------------

--
-- Table structure for table `kelas5`
--

CREATE TABLE `kelas5` (
  `id_kelas5` int(45) NOT NULL,
  `kelas` varchar(70) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas5`
--

INSERT INTO `kelas5` (`id_kelas5`, `kelas`, `jumlah`) VALUES
(1, 'sore', 3),
(2, 'pagi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kota_asal`
--

CREATE TABLE `kota_asal` (
  `id_kota` int(10) NOT NULL,
  `kota_asal` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota_asal`
--

INSERT INTO `kota_asal` (`id_kota`, `kota_asal`) VALUES
(4, 'lamongan'),
(5, 'kebomas'),
(6, 'manyar'),
(7, 'jember'),
(8, 'cerme'),
(9, 'menganti'),
(10, 'singosari'),
(11, 'balungpanggang'),
(12, 'duduk sampean'),
(13, 'surabaya'),
(14, 'gresik'),
(15, 'benjeng'),
(16, 'sedayu'),
(17, 'wringinenom'),
(18, 'dawar'),
(19, 'bungah');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(10) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `usia_masuk` int(10) NOT NULL,
  `id_jenis` int(10) NOT NULL,
  `id_jurusan` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `id_kota` int(10) NOT NULL,
  `id_pekerjaan` int(10) NOT NULL,
  `id_penghasilan` int(10) NOT NULL,
  `id_sekolah` int(10) NOT NULL,
  `id_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama`, `usia_masuk`, `id_jenis`, `id_jurusan`, `id_kelas`, `id_kota`, `id_pekerjaan`, `id_penghasilan`, `id_sekolah`, `id_status`) VALUES
(26, 'Moh Feryzaly', 19, 1, 3, 1, 5, 1, 2, 1, 1),
(28, 'Imam Fakrudin', 22, 1, 2, 2, 4, 1, 2, 2, 1),
(29, 'Nanda Khoirunisa', 20, 2, 3, 1, 7, 2, 2, 2, 1),
(30, 'Ananda Firdausi', 19, 2, 3, 2, 5, 2, 2, 1, 1),
(31, 'Ananda Syamduti', 20, 2, 3, 1, 5, 2, 2, 1, 1),
(33, 'yunuar ratnar', 19, 2, 3, 1, 8, 2, 1, 1, 1),
(35, 'ahmad hadi yunus', 27, 1, 2, 1, 6, 3, 2, 2, 2),
(36, 'bagus hariyanto', 24, 1, 2, 1, 9, 3, 2, 3, 2),
(37, 'moh endias H', 20, 1, 2, 2, 10, 1, 2, 2, 1),
(38, 'dimas suyra T', 22, 1, 3, 1, 9, 2, 1, 1, 2),
(40, 'hanafi nurul Q', 18, 2, 3, 2, 8, 1, 2, 1, 1),
(43, 'ema eliyana', 18, 2, 1, 2, 11, 1, 2, 2, 1),
(46, 'zulfatun nimah', 18, 2, 2, 2, 6, 1, 2, 3, 1),
(49, 'maya firdausi', 18, 2, 3, 2, 8, 1, 2, 1, 1),
(50, 'bagus sultan', 18, 1, 3, 2, 6, 1, 2, 1, 1),
(51, 'riska dwi R', 18, 1, 2, 2, 4, 1, 1, 2, 1),
(52, 'erni khofifah', 18, 2, 1, 2, 6, 1, 2, 3, 1),
(53, 'allan yanwar P', 18, 1, 3, 1, 6, 1, 2, 1, 1),
(58, 'moh kharis', 21, 1, 2, 2, 6, 1, 2, 3, 2),
(61, 'khusnul tohroh', 19, 2, 1, 2, 5, 3, 1, 1, 2),
(62, 'moh benativ', 20, 1, 1, 2, 9, 1, 2, 2, 1),
(63, 'marisa dwi yanti', 18, 2, 1, 2, 9, 1, 2, 2, 1),
(64, 'yulianti alvia', 19, 2, 3, 2, 6, 1, 1, 1, 1),
(69, 'indah wahyu A', 18, 2, 2, 2, 8, 1, 1, 3, 2),
(71, 'Bagus Kurniawan', 21, 1, 3, 1, 12, 2, 2, 1, 1),
(72, 'Misbakhul Ramadani', 27, 1, 2, 1, 13, 2, 2, 2, 1),
(73, 'M Misbachul', 20, 1, 3, 1, 6, 2, 2, 1, 1),
(74, 'Nur Rochma Yulia', 18, 2, 3, 1, 14, 1, 2, 1, 1),
(75, 'Tria Nurrohmah W', 21, 2, 1, 1, 4, 2, 2, 2, 1),
(76, 'Alfiatus Saadah', 20, 2, 3, 1, 6, 2, 2, 1, 1),
(77, 'Humada Alfian A', 21, 2, 2, 1, 5, 3, 1, 2, 2),
(78, 'Alfian Zulkarnain Putra', 18, 1, 3, 2, 5, 1, 2, 1, 1),
(79, 'Elisa Alfiyani', 18, 2, 1, 2, 6, 1, 2, 2, 1),
(80, 'Siti Maarifah A', 18, 2, 3, 1, 5, 1, 2, 1, 1),
(81, 'Siti Hajar Rahmawati', 20, 2, 1, 1, 5, 1, 2, 2, 1),
(82, 'Siti Khodijah', 26, 2, 1, 1, 12, 3, 2, 3, 2),
(83, 'Rizki Taufikul HG', 23, 1, 3, 1, 5, 1, 2, 1, 1),
(84, 'Mahfirotun Nisa', 18, 2, 3, 1, 5, 1, 2, 1, 1),
(85, 'Isnah Mahfiroh', 20, 2, 2, 2, 8, 2, 1, 2, 1),
(87, 'M Noval Alvian', 19, 1, 3, 2, 8, 1, 2, 1, 1),
(88, 'Rafiqah Dwi Rahma', 18, 2, 1, 1, 5, 1, 2, 3, 1),
(90, 'Eka Sadam Giri S', 22, 1, 3, 1, 14, 1, 2, 1, 1),
(91, 'M Gerri Setra B', 18, 1, 2, 1, 8, 1, 2, 2, 1),
(92, 'M Hafidh Machrudin R', 19, 1, 3, 1, 5, 1, 2, 1, 1),
(93, 'Subekhan Fathur R', 19, 1, 2, 1, 8, 1, 2, 2, 1),
(94, 'Anissah S', 19, 2, 1, 2, 14, 1, 2, 2, 1),
(95, 'Sholikhul Hadi', 19, 1, 3, 1, 6, 1, 2, 1, 1),
(97, 'M Fakhrus Shobirin', 18, 1, 2, 1, 16, 1, 2, 2, 1),
(98, 'Nur Laili Khasana', 18, 2, 1, 2, 17, 1, 2, 3, 1),
(99, 'Ziko Malifon AAB ', 18, 1, 2, 1, 5, 1, 2, 2, 1),
(100, 'Shinta Islami', 19, 2, 1, 2, 5, 1, 2, 2, 1),
(101, 'Joko Cahyono Putra', 19, 1, 3, 2, 11, 2, 2, 1, 1),
(102, 'Fiki Cahyono ', 18, 1, 1, 1, 18, 1, 2, 2, 1),
(104, 'Uzlifatul Fuaidah', 18, 2, 3, 1, 5, 2, 2, 1, 1),
(105, 'M Nurdin Kurnia A', 19, 1, 1, 2, 11, 1, 2, 2, 1),
(106, 'Abdur Rohman', 19, 1, 1, 1, 5, 2, 2, 2, 1),
(107, 'Moch Syaifuddin Aris', 19, 1, 2, 2, 5, 2, 2, 2, 1),
(110, 'Muhammad Ahyat D', 21, 1, 1, 1, 15, 3, 1, 2, 2),
(112, 'Fransiska Saveria M J ', 26, 2, 3, 1, 5, 3, 2, 1, 2),
(113, 'Chunaina', 20, 2, 3, 1, 14, 3, 2, 1, 2),
(115, 'M Edi Santoso', 24, 1, 3, 1, 12, 3, 2, 1, 2),
(116, 'Syahrul Ramadhan', 20, 1, 3, 1, 5, 3, 2, 1, 2),
(117, 'Roisyah Zuliyanti', 18, 1, 3, 1, 5, 1, 1, 1, 1),
(118, 'Eko Dharmawan N', 25, 1, 1, 1, 4, 2, 2, 3, 2),
(120, 'Achmad Fathoni ', 21, 1, 2, 1, 5, 2, 2, 3, 2),
(121, 'Zuni Rezalina A', 18, 2, 1, 2, 4, 1, 1, 2, 1),
(122, 'Fira Dahlianti', 18, 2, 3, 2, 14, 1, 1, 1, 1),
(123, 'Rustika Wati Ningsih', 18, 2, 2, 2, 5, 1, 1, 2, 1),
(124, 'Khusnul Muannimah', 18, 2, 1, 1, 8, 1, 1, 2, 1),
(125, 'Jannah Annisa', 20, 2, 3, 2, 5, 1, 1, 1, 1),
(126, 'M Faisal S', 18, 1, 3, 2, 11, 1, 1, 1, 1),
(127, 'Ahmad Dzul Faruk', 19, 1, 2, 2, 12, 1, 1, 3, 1),
(128, 'Karima Diva R', 18, 2, 1, 2, 14, 1, 1, 2, 1),
(129, 'Delina Puspita S', 18, 2, 2, 2, 4, 1, 1, 2, 1),
(131, 'M Danial Ramadhoni', 18, 1, 3, 2, 16, 1, 2, 1, 1),
(132, 'Suci Wulandari', 18, 2, 3, 2, 5, 1, 2, 1, 1),
(134, 'Alifiyah Indar Rahmah', 18, 2, 2, 2, 6, 1, 2, 3, 1),
(135, 'Yuliana Dewi', 18, 2, 1, 2, 8, 1, 2, 3, 1),
(138, 'Anis Jihan Nita', 19, 2, 1, 2, 16, 1, 2, 2, 1),
(139, 'Mulyati Dian F', 20, 2, 1, 2, 19, 1, 2, 3, 1),
(140, 'Shokhifatuz Zuhro', 18, 2, 2, 2, 12, 1, 2, 2, 1),
(141, 'Zumrotul Maslihah', 18, 2, 3, 2, 4, 1, 2, 1, 1),
(142, 'Juliyanti Olyvia S', 19, 2, 3, 2, 6, 1, 2, 1, 1),
(143, 'Satria Yudha Prakosa', 19, 1, 1, 1, 5, 1, 2, 2, 1),
(148, 'Izzatu Mukhlishoti', 18, 2, 3, 2, 12, 1, 1, 1, 1),
(149, 'Selly Noveliyanti B', 21, 2, 1, 2, 6, 1, 2, 2, 1),
(150, 'Palupi Adilia P', 19, 2, 1, 2, 5, 1, 2, 2, 1),
(151, 'Nurul Adniyah', 18, 2, 3, 2, 14, 1, 2, 2, 1),
(152, 'Thezar Alfarozi', 20, 1, 3, 2, 14, 1, 2, 1, 1),
(153, 'A Jailani Strio W', 19, 1, 1, 2, 14, 1, 2, 1, 1),
(154, 'Moh Ivan Asyrofi', 18, 1, 3, 2, 6, 1, 2, 1, 1),
(155, 'Hikmah Anggun G', 18, 2, 1, 2, 14, 1, 2, 2, 1),
(156, 'Azidatul Zulqoidah', 18, 2, 3, 2, 14, 1, 2, 1, 1),
(157, 'Bagas Arista H', 19, 1, 1, 2, 14, 2, 2, 2, 1),
(158, 'Kusnul Tohiroh', 19, 2, 1, 2, 5, 3, 1, 1, 2),
(159, 'Arief Khusnuddin', 19, 1, 3, 2, 13, 2, 1, 1, 2),
(160, 'Edi Eriyanto', 27, 1, 3, 2, 6, 3, 2, 1, 2),
(161, 'Fyary Setiawan', 18, 2, 2, 2, 14, 3, 2, 2, 2),
(162, 'Irgi Fatihul Inam', 30, 1, 2, 2, 19, 1, 2, 2, 2),
(163, 'Winda Rofiatun N', 19, 2, 1, 2, 16, 2, 2, 2, 2),
(164, 'Jauhariati Fatimi', 23, 2, 2, 2, 13, 1, 2, 2, 2),
(166, 'M Fanani Wahyu R', 19, 1, 2, 1, 5, 2, 2, 3, 1),
(167, 'Maulana Ashari', 20, 1, 3, 1, 8, 2, 2, 1, 2),
(168, 'Fathul Barri', 22, 1, 2, 1, 6, 2, 2, 2, 1),
(169, 'Lutfi Romadhoni', 23, 1, 3, 1, 6, 2, 2, 1, 1),
(171, 'Muhammad Amrin', 19, 1, 2, 2, 14, 1, 2, 2, 2),
(172, 'Madastya Fillah Q', 19, 2, 1, 1, 13, 2, 2, 3, 2),
(173, 'Siti Qozaemah', 18, 2, 2, 2, 14, 1, 2, 2, 1),
(174, 'Siti Qozaemah', 18, 2, 2, 2, 14, 1, 2, 2, 1),
(175, 'Sinta Dewi N T N', 18, 2, 3, 2, 14, 1, 2, 1, 1),
(176, 'Dimas Oki Santoso', 23, 1, 3, 1, 14, 2, 2, 1, 2),
(177, 'M Zainulloh Zain', 21, 1, 3, 1, 6, 3, 2, 1, 1),
(178, 'M Ichlasul Amal', 23, 1, 2, 1, 5, 3, 2, 1, 2),
(179, 'Nurul Arifin', 19, 2, 2, 2, 8, 2, 2, 2, 1),
(180, 'Tutut Takhiyatul', 18, 2, 2, 2, 6, 1, 2, 3, 2),
(181, 'Imanullah Ali Ubed', 19, 1, 2, 1, 6, 1, 2, 2, 1),
(182, 'Assyifa Kartika Y', 18, 2, 2, 2, 5, 1, 2, 2, 2),
(183, 'Lasyana Kusumastuti', 21, 2, 2, 1, 4, 2, 1, 2, 1),
(184, 'Vindy Widia A', 18, 2, 2, 1, 19, 1, 2, 3, 1),
(185, 'Novia Candra L', 18, 2, 1, 2, 16, 1, 2, 3, 1),
(186, 'Rio Restu Y', 20, 2, 3, 1, 8, 2, 2, 1, 1),
(187, 'Imam Wahyu K', 19, 1, 2, 2, 6, 2, 2, 2, 1),
(188, 'Deasy Afrilia', 18, 2, 2, 2, 9, 1, 2, 3, 2),
(189, 'Fadhiyah Jayanti', 21, 2, 2, 1, 8, 2, 2, 3, 2),
(190, 'Vivian Dewi S', 21, 2, 1, 1, 11, 2, 2, 3, 2),
(191, 'Yessy Yustia W', 18, 2, 3, 2, 6, 1, 2, 1, 1),
(192, 'Sulis Tiawati', 21, 2, 2, 1, 6, 2, 2, 2, 1),
(193, 'Abdullah Muhammad', 19, 1, 3, 2, 6, 1, 2, 1, 1),
(194, 'Moh Chanif Alfarizi', 19, 1, 2, 1, 5, 2, 2, 2, 1),
(195, 'Samsi Syahputra', 21, 1, 3, 1, 5, 2, 2, 1, 1),
(196, 'Kazuesal Zabella', 20, 2, 2, 1, 6, 2, 2, 2, 1),
(197, 'Mohammad Ilham', 23, 1, 1, 1, 6, 2, 2, 2, 1),
(198, 'Ana Zunaidatul I', 19, 2, 2, 2, 8, 1, 2, 3, 1),
(199, 'Siti Rohmawati', 22, 2, 2, 1, 9, 2, 2, 2, 1),
(200, 'Maudy Annastasia', 18, 2, 2, 2, 6, 2, 2, 3, 2),
(201, 'Shufiyah Najati U', 21, 2, 2, 1, 14, 2, 2, 3, 1),
(202, 'Andryan Adi W', 20, 2, 2, 1, 14, 2, 2, 2, 1),
(203, 'Arum Ariyaya', 18, 2, 1, 2, 6, 1, 2, 2, 1),
(204, 'Khoirul Alim', 20, 1, 2, 1, 6, 2, 2, 2, 2),
(205, 'M Ivan Fatoni', 18, 1, 2, 2, 8, 2, 2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `maxdaerah`
--

CREATE TABLE `maxdaerah` (
  `id_maxdaerah` int(60) NOT NULL,
  `daerah` varchar(70) NOT NULL,
  `jumlah` int(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxdaerah`
--

INSERT INTO `maxdaerah` (`id_maxdaerah`, `daerah`, `jumlah`) VALUES
(1, 'manyar', 17);

-- --------------------------------------------------------

--
-- Table structure for table `maxdaerah2`
--

CREATE TABLE `maxdaerah2` (
  `id_maxdaerah2` int(45) NOT NULL,
  `daerah` varchar(70) NOT NULL,
  `jumlah` int(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxdaerah2`
--

INSERT INTO `maxdaerah2` (`id_maxdaerah2`, `daerah`, `jumlah`) VALUES
(1, 'lamongan', 4);

-- --------------------------------------------------------

--
-- Table structure for table `maxdaerah3`
--

CREATE TABLE `maxdaerah3` (
  `id_maxdaerah3` int(45) NOT NULL,
  `daerah` varchar(70) NOT NULL,
  `jumlah` int(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxdaerah3`
--

INSERT INTO `maxdaerah3` (`id_maxdaerah3`, `daerah`, `jumlah`) VALUES
(1, 'balungpanggang', 5);

-- --------------------------------------------------------

--
-- Table structure for table `maxdaerah4`
--

CREATE TABLE `maxdaerah4` (
  `id_maxdaerah4` int(45) NOT NULL,
  `daerah` varchar(70) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxdaerah4`
--

INSERT INTO `maxdaerah4` (`id_maxdaerah4`, `daerah`, `jumlah`) VALUES
(1, 'kebomas', 16);

-- --------------------------------------------------------

--
-- Table structure for table `maxdaerah5`
--

CREATE TABLE `maxdaerah5` (
  `id_maxdaerah5` int(45) NOT NULL,
  `daerah` varchar(70) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxdaerah5`
--

INSERT INTO `maxdaerah5` (`id_maxdaerah5`, `daerah`, `jumlah`) VALUES
(1, 'surabaya', 1);

-- --------------------------------------------------------

--
-- Table structure for table `maxjurusan1`
--

CREATE TABLE `maxjurusan1` (
  `id_maxjurusan1` int(45) NOT NULL,
  `jurusan` varchar(45) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxjurusan1`
--

INSERT INTO `maxjurusan1` (`id_maxjurusan1`, `jurusan`, `jumlah`) VALUES
(1, 'kejuruan', 28);

-- --------------------------------------------------------

--
-- Table structure for table `maxjurusan2`
--

CREATE TABLE `maxjurusan2` (
  `id_maxjurusan2` int(45) NOT NULL,
  `jurusan` varchar(45) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxjurusan2`
--

INSERT INTO `maxjurusan2` (`id_maxjurusan2`, `jurusan`, `jumlah`) VALUES
(1, 'kejuruan', 7);

-- --------------------------------------------------------

--
-- Table structure for table `maxjurusan3`
--

CREATE TABLE `maxjurusan3` (
  `id_maxjurusan3` int(45) NOT NULL,
  `jurusan` varchar(45) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxjurusan3`
--

INSERT INTO `maxjurusan3` (`id_maxjurusan3`, `jurusan`, `jumlah`) VALUES
(1, 'ipa', 13);

-- --------------------------------------------------------

--
-- Table structure for table `maxjurusan4`
--

CREATE TABLE `maxjurusan4` (
  `id_maxjurusan4` int(45) NOT NULL,
  `jurusan` varchar(70) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxjurusan4`
--

INSERT INTO `maxjurusan4` (`id_maxjurusan4`, `jurusan`, `jumlah`) VALUES
(1, 'ips', 14);

-- --------------------------------------------------------

--
-- Table structure for table `maxjurusan5`
--

CREATE TABLE `maxjurusan5` (
  `id_maxjurusan5` int(45) NOT NULL,
  `jurusan` varchar(70) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxjurusan5`
--

INSERT INTO `maxjurusan5` (`id_maxjurusan5`, `jurusan`, `jumlah`) VALUES
(1, 'ips', 3);

-- --------------------------------------------------------

--
-- Table structure for table `maxsekolah1`
--

CREATE TABLE `maxsekolah1` (
  `id_maxsekolah1` int(45) NOT NULL,
  `sekolah` varchar(45) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxsekolah1`
--

INSERT INTO `maxsekolah1` (`id_maxsekolah1`, `sekolah`, `jumlah`) VALUES
(1, 'smk', 28);

-- --------------------------------------------------------

--
-- Table structure for table `maxsekolah2`
--

CREATE TABLE `maxsekolah2` (
  `id_maxsekolah2` int(45) NOT NULL,
  `sekolah` varchar(25) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxsekolah2`
--

INSERT INTO `maxsekolah2` (`id_maxsekolah2`, `sekolah`, `jumlah`) VALUES
(1, 'smk', 7);

-- --------------------------------------------------------

--
-- Table structure for table `maxsekolah3`
--

CREATE TABLE `maxsekolah3` (
  `id_maxsekolah3` int(45) NOT NULL,
  `sekolah` varchar(25) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxsekolah3`
--

INSERT INTO `maxsekolah3` (`id_maxsekolah3`, `sekolah`, `jumlah`) VALUES
(1, 'sma', 13);

-- --------------------------------------------------------

--
-- Table structure for table `maxsekolah4`
--

CREATE TABLE `maxsekolah4` (
  `id_maxsekolah4` int(45) NOT NULL,
  `sekolah` varchar(25) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxsekolah4`
--

INSERT INTO `maxsekolah4` (`id_maxsekolah4`, `sekolah`, `jumlah`) VALUES
(1, 'smk', 14);

-- --------------------------------------------------------

--
-- Table structure for table `maxsekolah5`
--

CREATE TABLE `maxsekolah5` (
  `id_maxsekolah5` int(45) NOT NULL,
  `sekolah` varchar(25) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxsekolah5`
--

INSERT INTO `maxsekolah5` (`id_maxsekolah5`, `sekolah`, `jumlah`) VALUES
(1, 'sma', 3);

-- --------------------------------------------------------

--
-- Table structure for table `maxusia1`
--

CREATE TABLE `maxusia1` (
  `id_maxusia1` int(45) NOT NULL,
  `usia` int(25) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxusia1`
--

INSERT INTO `maxusia1` (`id_maxusia1`, `usia`, `jumlah`) VALUES
(1, 18, 43);

-- --------------------------------------------------------

--
-- Table structure for table `maxusia2`
--

CREATE TABLE `maxusia2` (
  `id_maxusia2` int(45) NOT NULL,
  `usia` int(25) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxusia2`
--

INSERT INTO `maxusia2` (`id_maxusia2`, `usia`, `jumlah`) VALUES
(1, 22, 4);

-- --------------------------------------------------------

--
-- Table structure for table `maxusia3`
--

CREATE TABLE `maxusia3` (
  `id_maxusia3` int(45) NOT NULL,
  `usia` int(45) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxusia3`
--

INSERT INTO `maxusia3` (`id_maxusia3`, `usia`, `jumlah`) VALUES
(1, 18, 11);

-- --------------------------------------------------------

--
-- Table structure for table `maxusia4`
--

CREATE TABLE `maxusia4` (
  `id_maxusia4` int(45) NOT NULL,
  `usia` int(25) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxusia4`
--

INSERT INTO `maxusia4` (`id_maxusia4`, `usia`, `jumlah`) VALUES
(1, 20, 13);

-- --------------------------------------------------------

--
-- Table structure for table `maxusia5`
--

CREATE TABLE `maxusia5` (
  `id_maxusia5` int(45) NOT NULL,
  `usia` int(25) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxusia5`
--

INSERT INTO `maxusia5` (`id_maxusia5`, `usia`, `jumlah`) VALUES
(1, 27, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mindaerah1`
--

CREATE TABLE `mindaerah1` (
  `id_mindaerah1` int(45) NOT NULL,
  `daerah` varchar(70) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_profil`
--

CREATE TABLE `nilai_profil` (
  `id_nilai_profil` int(10) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `jurusan_sekolah` int(10) NOT NULL,
  `jenis_kelamin` int(10) NOT NULL,
  `usia_masuk` int(10) NOT NULL,
  `penghasilan_ortu` int(10) NOT NULL,
  `sekolah` int(10) NOT NULL,
  `kota_asal` int(10) NOT NULL,
  `kelas` int(10) NOT NULL,
  `gelombang` int(10) NOT NULL,
  `pekerjaan_mahasiswa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_profil`
--

INSERT INTO `nilai_profil` (`id_nilai_profil`, `nama`, `jurusan_sekolah`, `jenis_kelamin`, `usia_masuk`, `penghasilan_ortu`, `sekolah`, `kota_asal`, `kelas`, `gelombang`, `pekerjaan_mahasiswa`) VALUES
(1, 'Ananda alisandari J', 1, 1, 18, 1, 1, 2, 1, 1, 1),
(2, 'Edi Ariyanto', 1, 2, 27, 1, 1, 1, 2, 1, 3),
(3, 'Abdur Rohman', 2, 2, 19, 1, 2, 2, 1, 1, 2),
(4, 'Rizqi Taufiqul H G', 1, 2, 23, 1, 1, 1, 1, 1, 1),
(5, 'Ahmad Hadi Yunus', 3, 2, 27, 1, 2, 1, 1, 1, 3),
(6, 'Satria Yudha Prakosa', 2, 2, 19, 1, 2, 1, 2, 1, 1),
(7, 'Alifia Syafitri', 2, 1, 18, 1, 2, 2, 2, 1, 1),
(8, 'Fransiska Saveria M J', 1, 1, 22, 1, 1, 3, 1, 1, 3),
(9, 'Alvian Zulkarnain P', 1, 2, 18, 1, 1, 1, 1, 1, 1),
(10, 'Isnah Mahfiroh', 3, 1, 20, 1, 3, 1, 2, 1, 2),
(11, 'Cahyaning Sekar K', 3, 1, 18, 2, 2, 1, 2, 1, 1),
(12, 'Izza Mukhlishati', 1, 1, 18, 1, 1, 1, 2, 2, 1),
(13, 'Selly Novianti B', 2, 1, 21, 1, 2, 2, 2, 2, 1),
(14, 'Palupi Adelia P', 2, 1, 19, 1, 2, 1, 2, 2, 1),
(15, 'Moh Gerni Setya B', 3, 2, 18, 1, 2, 2, 1, 2, 1),
(16, 'Guntur Mulya P', 1, 2, 19, 1, 1, 2, 1, 3, 2),
(17, 'Suci Nurwahyuni', 1, 1, 19, 1, 1, 3, 1, 3, 2),
(18, 'Fathul Jamil', 2, 2, 21, 2, 3, 3, 1, 3, 2),
(19, 'Nur Khasanah', 3, 1, 21, 2, 3, 1, 1, 3, 2),
(20, 'Zamrotul Maslihah', 1, 1, 18, 1, 1, 3, 2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_profil_mahasiswa`
--

CREATE TABLE `nilai_profil_mahasiswa` (
  `id_nilai_profil_mahasiswa` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jurusan` int(10) NOT NULL,
  `jenis` int(10) NOT NULL,
  `usia` int(10) NOT NULL,
  `penghasilan` int(10) NOT NULL,
  `sekolah` int(10) NOT NULL,
  `daerah` int(10) NOT NULL,
  `kelas` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `pekerjaan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_profil_mahasiswa`
--

INSERT INTO `nilai_profil_mahasiswa` (`id_nilai_profil_mahasiswa`, `nama`, `jurusan`, `jenis`, `usia`, `penghasilan`, `sekolah`, `daerah`, `kelas`, `status`, `pekerjaan`) VALUES
(1, 'yunuar ratnar', 1, 1, 19, 2, 2, 4, 2, 1, 2),
(2, 'Roisyah Zuliyanti', 1, 2, 18, 2, 2, 1, 2, 1, 1),
(3, 'Khusnul Muannimah', 3, 1, 18, 2, 1, 4, 2, 1, 1),
(4, 'Lasyana Kusumastuti', 2, 1, 21, 2, 1, 5, 2, 1, 2),
(5, 'Moh Feryzaly', 1, 2, 19, 1, 2, 1, 2, 1, 1),
(6, 'Nanda Khoirunisa', 1, 1, 20, 1, 1, 14, 2, 1, 2),
(7, 'Ananda Syamduti', 1, 1, 20, 1, 2, 1, 2, 1, 2),
(8, 'allan yanwar P', 1, 2, 18, 1, 2, 2, 2, 1, 1),
(9, 'Bagus Kurniawan', 1, 2, 21, 1, 2, 6, 2, 1, 2),
(10, 'Misbakhul Ramadani', 2, 2, 27, 1, 1, 10, 2, 1, 2),
(11, 'M Misbachul', 1, 2, 20, 1, 2, 2, 2, 1, 2),
(12, 'Nur Rochma Yulia', 1, 1, 18, 1, 2, 3, 2, 1, 1),
(13, 'Tria Nurrohmah W', 3, 1, 21, 1, 1, 5, 2, 1, 2),
(14, 'Alfiatus Saadah', 1, 1, 20, 1, 2, 2, 2, 1, 2),
(15, 'Siti Maarifah A', 1, 1, 18, 1, 2, 1, 2, 1, 1),
(16, 'Siti Hajar Rahmawati', 3, 1, 20, 1, 1, 1, 2, 1, 1),
(17, 'Rizki Taufikul HG', 1, 2, 23, 1, 2, 1, 2, 1, 1),
(18, 'Mahfirotun Nisa', 1, 1, 18, 1, 2, 1, 2, 1, 1),
(19, 'Rafiqah Dwi Rahma', 3, 1, 18, 1, 3, 1, 2, 1, 1),
(20, 'Eka Sadam Giri S', 1, 2, 22, 1, 2, 3, 2, 1, 1),
(21, 'M Gerri Setra B', 2, 2, 18, 1, 1, 4, 2, 1, 1),
(22, 'M Hafidh Machrudin R', 1, 2, 19, 1, 2, 1, 2, 1, 1),
(23, 'Subekhan Fathur R', 2, 2, 19, 1, 1, 4, 2, 1, 1),
(24, 'Sholikhul Hadi', 1, 2, 19, 1, 2, 2, 2, 1, 1),
(25, 'M Fakhrus Shobirin', 2, 2, 18, 1, 1, 8, 2, 1, 1),
(26, 'Ziko Malifon AAB ', 2, 2, 18, 1, 1, 1, 2, 1, 1),
(27, 'Fiki Cahyono ', 3, 2, 18, 1, 1, 15, 2, 1, 1),
(28, 'Uzlifatul Fuaidah', 1, 1, 18, 1, 2, 1, 2, 1, 2),
(29, 'Abdur Rohman', 3, 2, 19, 1, 1, 1, 2, 1, 2),
(30, 'Satria Yudha Prakosa', 3, 2, 19, 1, 1, 1, 2, 1, 1),
(31, 'M Fanani Wahyu R', 2, 2, 19, 1, 3, 1, 2, 1, 2),
(32, 'Fathul Barri', 2, 2, 22, 1, 1, 2, 2, 1, 2),
(33, 'Lutfi Romadhoni', 1, 2, 23, 1, 2, 2, 2, 1, 2),
(34, 'M Zainulloh Zain', 1, 2, 21, 1, 2, 2, 2, 1, 3),
(35, 'Imanullah Ali Ubed', 2, 2, 19, 1, 1, 2, 2, 1, 1),
(36, 'Vindy Widia A', 2, 1, 18, 1, 3, 11, 2, 1, 1),
(37, 'Rio Restu Y', 1, 1, 20, 1, 2, 4, 2, 1, 2),
(38, 'Sulis Tiawati', 2, 1, 21, 1, 1, 2, 2, 1, 2),
(39, 'Moh Chanif Alfarizi', 2, 2, 19, 1, 1, 1, 2, 1, 2),
(40, 'Samsi Syahputra', 1, 2, 21, 1, 2, 1, 2, 1, 2),
(41, 'Kazuesal Zabella', 2, 1, 20, 1, 1, 2, 2, 1, 2),
(42, 'Mohammad Ilham', 3, 2, 23, 1, 1, 2, 2, 1, 2),
(43, 'Siti Rohmawati', 2, 1, 22, 1, 1, 7, 2, 1, 2),
(44, 'Shufiyah Najati U', 2, 1, 21, 1, 3, 3, 2, 1, 2),
(45, 'Andryan Adi W', 2, 1, 20, 1, 1, 3, 2, 1, 2),
(46, 'dimas suyra T', 1, 2, 22, 2, 2, 7, 2, 2, 2),
(47, 'Humada Alfian A', 2, 1, 21, 2, 1, 1, 2, 2, 3),
(48, 'Muhammad Ahyat D', 3, 2, 21, 2, 1, 16, 2, 2, 3),
(49, 'ahmad hadi yunus', 2, 2, 27, 1, 1, 2, 2, 2, 3),
(50, 'bagus hariyanto', 2, 2, 24, 1, 3, 7, 2, 2, 3),
(51, 'Siti Khodijah', 3, 1, 26, 1, 3, 6, 2, 2, 3),
(52, 'Fransiska Saveria M J ', 1, 1, 26, 1, 2, 1, 2, 2, 3),
(53, 'Chunaina', 1, 1, 20, 1, 2, 3, 2, 2, 3),
(54, 'M Edi Santoso', 1, 2, 24, 1, 2, 6, 2, 2, 3),
(55, 'Syahrul Ramadhan', 1, 2, 20, 1, 2, 1, 2, 2, 3),
(56, 'Eko Dharmawan N', 3, 2, 25, 1, 3, 5, 2, 2, 2),
(57, 'Achmad Fathoni ', 2, 2, 21, 1, 3, 1, 2, 2, 2),
(58, 'Maulana Ashari', 1, 2, 20, 1, 2, 4, 2, 2, 2),
(59, 'Madastya Fillah Q', 3, 1, 19, 1, 3, 10, 2, 2, 2),
(60, 'Dimas Oki Santoso', 1, 2, 23, 1, 2, 3, 2, 2, 2),
(61, 'M Ichlasul Amal', 2, 2, 23, 1, 2, 1, 2, 2, 3),
(62, 'Fadhiyah Jayanti', 2, 1, 21, 1, 3, 4, 2, 2, 2),
(63, 'Vivian Dewi S', 3, 1, 21, 1, 3, 9, 2, 2, 2),
(64, 'Khoirul Alim', 2, 2, 20, 1, 1, 2, 2, 2, 2),
(65, 'riska dwi R', 2, 2, 18, 2, 1, 5, 1, 1, 1),
(66, 'yulianti alvia', 1, 1, 19, 2, 2, 2, 1, 1, 1),
(67, 'Isnah Mahfiroh', 2, 1, 20, 2, 1, 4, 1, 1, 2),
(68, 'Zuni Rezalina A', 3, 1, 18, 2, 1, 5, 1, 1, 1),
(69, 'Fira Dahlianti', 1, 1, 18, 2, 2, 3, 1, 1, 1),
(70, 'Rustika Wati Ningsih', 2, 1, 18, 2, 1, 1, 1, 1, 1),
(71, 'Jannah Annisa', 1, 1, 20, 2, 2, 1, 1, 1, 1),
(72, 'M Faisal S', 1, 2, 18, 2, 2, 9, 1, 1, 1),
(73, 'Ahmad Dzul Faruk', 2, 2, 19, 2, 3, 6, 1, 1, 1),
(74, 'Karima Diva R', 3, 1, 18, 2, 1, 3, 1, 1, 1),
(75, 'Delina Puspita S', 2, 1, 18, 2, 1, 5, 1, 1, 1),
(76, 'Izzatu Mukhlishoti', 1, 1, 18, 2, 2, 6, 1, 1, 1),
(77, 'Imam Fakrudin', 2, 2, 22, 1, 1, 5, 1, 1, 1),
(78, 'Ananda Firdausi', 1, 1, 19, 1, 2, 1, 1, 1, 2),
(79, 'moh endias H', 2, 2, 20, 1, 1, 12, 1, 1, 1),
(80, 'hanafi nurul Q', 1, 1, 18, 1, 2, 4, 1, 1, 1),
(81, 'ema eliyana', 3, 1, 18, 1, 1, 9, 1, 1, 1),
(82, 'zulfatun nimah', 2, 1, 18, 1, 3, 2, 1, 1, 1),
(83, 'maya firdausi', 1, 1, 18, 1, 2, 4, 1, 1, 1),
(84, 'bagus sultan', 1, 2, 18, 1, 2, 2, 1, 1, 1),
(85, 'erni khofifah', 3, 1, 18, 1, 3, 2, 1, 1, 1),
(86, 'moh benativ', 3, 2, 20, 1, 1, 7, 1, 1, 1),
(87, 'marisa dwi yanti', 3, 1, 18, 1, 1, 7, 1, 1, 1),
(88, 'Alfian Zulkarnain Putra', 1, 2, 18, 1, 2, 1, 1, 1, 1),
(89, 'Elisa Alfiyani', 3, 1, 18, 1, 1, 2, 1, 1, 1),
(90, 'M Noval Alvian', 1, 2, 19, 1, 2, 4, 1, 1, 1),
(91, 'Anissah S', 3, 1, 19, 1, 1, 3, 1, 1, 1),
(92, 'Nur Laili Khasana', 3, 1, 18, 1, 3, 13, 1, 1, 1),
(93, 'Shinta Islami', 3, 1, 19, 1, 1, 1, 1, 1, 1),
(94, 'Joko Cahyono Putra', 1, 2, 19, 1, 2, 9, 1, 1, 2),
(95, 'M Nurdin Kurnia A', 3, 2, 19, 1, 1, 9, 1, 1, 1),
(96, 'Moch Syaifuddin Aris', 2, 2, 19, 1, 1, 1, 1, 1, 2),
(97, 'M Danial Ramadhoni', 1, 2, 18, 1, 2, 8, 1, 1, 1),
(98, 'Suci Wulandari', 1, 1, 18, 1, 2, 1, 1, 1, 1),
(99, 'Alifiyah Indar Rahmah', 2, 1, 18, 1, 3, 2, 1, 1, 1),
(100, 'Yuliana Dewi', 3, 1, 18, 1, 3, 4, 1, 1, 1),
(101, 'Anis Jihan Nita', 3, 1, 19, 1, 1, 8, 1, 1, 1),
(102, 'Mulyati Dian F', 3, 1, 20, 1, 3, 11, 1, 1, 1),
(103, 'Shokhifatuz Zuhro', 2, 1, 18, 1, 1, 6, 1, 1, 1),
(104, 'Zumrotul Maslihah', 1, 1, 18, 1, 2, 5, 1, 1, 1),
(105, 'Juliyanti Olyvia S', 1, 1, 19, 1, 2, 2, 1, 1, 1),
(106, 'Selly Noveliyanti B', 3, 1, 21, 1, 1, 2, 1, 1, 1),
(107, 'Palupi Adilia P', 3, 1, 19, 1, 1, 1, 1, 1, 1),
(108, 'Nurul Adniyah', 1, 1, 18, 1, 1, 3, 1, 1, 1),
(109, 'Thezar Alfarozi', 1, 2, 20, 1, 2, 3, 1, 1, 1),
(110, 'A Jailani Strio W', 3, 2, 19, 1, 2, 3, 1, 1, 1),
(111, 'Moh Ivan Asyrofi', 1, 2, 18, 1, 2, 2, 1, 1, 1),
(112, 'Hikmah Anggun G', 3, 1, 18, 1, 1, 3, 1, 1, 1),
(113, 'Azidatul Zulqoidah', 1, 1, 18, 1, 2, 3, 1, 1, 1),
(114, 'Bagas Arista H', 3, 2, 19, 1, 1, 3, 1, 1, 2),
(115, 'Siti Qozaemah', 2, 1, 18, 1, 1, 3, 1, 1, 1),
(116, 'Siti Qozaemah', 2, 1, 18, 1, 1, 3, 1, 1, 1),
(117, 'Sinta Dewi N T N', 1, 1, 18, 1, 2, 3, 1, 1, 1),
(118, 'Nurul Arifin', 2, 1, 19, 1, 1, 4, 1, 1, 2),
(119, 'Novia Candra L', 3, 1, 18, 1, 3, 8, 1, 1, 1),
(120, 'Imam Wahyu K', 2, 2, 19, 1, 1, 2, 1, 1, 2),
(121, 'Yessy Yustia W', 1, 1, 18, 1, 2, 2, 1, 1, 1),
(122, 'Abdullah Muhammad', 1, 2, 19, 1, 2, 2, 1, 1, 1),
(123, 'Ana Zunaidatul I', 2, 1, 19, 1, 3, 4, 1, 1, 1),
(124, 'Arum Ariyaya', 3, 1, 18, 1, 1, 2, 1, 1, 1),
(125, 'M Ivan Fatoni', 2, 2, 18, 1, 3, 4, 1, 1, 2),
(126, 'khusnul tohroh', 3, 1, 19, 2, 2, 1, 1, 2, 3),
(127, 'indah wahyu A', 2, 1, 18, 2, 3, 4, 1, 2, 1),
(128, 'Kusnul Tohiroh', 3, 1, 19, 2, 2, 1, 1, 2, 3),
(129, 'Arief Khusnuddin', 1, 2, 19, 2, 2, 10, 1, 2, 2),
(130, 'moh kharis', 2, 2, 21, 1, 3, 2, 1, 2, 1),
(131, 'Edi Eriyanto', 1, 2, 27, 1, 2, 2, 1, 2, 3),
(132, 'Fyary Setiawan', 2, 1, 18, 1, 1, 3, 1, 2, 3),
(133, 'Irgi Fatihul Inam', 2, 2, 30, 1, 1, 11, 1, 2, 1),
(134, 'Winda Rofiatun N', 3, 1, 19, 1, 1, 8, 1, 2, 2),
(135, 'Jauhariati Fatimi', 2, 1, 23, 1, 1, 10, 1, 2, 1),
(136, 'Muhammad Amrin', 2, 2, 19, 1, 1, 3, 1, 2, 1),
(137, 'Tutut Takhiyatul', 2, 1, 18, 1, 3, 2, 1, 2, 1),
(138, 'Assyifa Kartika Y', 2, 1, 18, 1, 1, 1, 1, 2, 1),
(139, 'Deasy Afrilia', 2, 1, 18, 1, 3, 7, 1, 2, 1),
(140, 'Maudy Annastasia', 2, 1, 18, 1, 3, 2, 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan1`
--

CREATE TABLE `pekerjaan1` (
  `id_pekerjaan1` int(60) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan1`
--

INSERT INTO `pekerjaan1` (`id_pekerjaan1`, `pekerjaan`, `jumlah`) VALUES
(1, 'belum bekerja', 55),
(2, 'bekerja <2th', 8),
(3, 'bekerja >2th', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan2`
--

CREATE TABLE `pekerjaan2` (
  `id_pekerjaan2` int(45) NOT NULL,
  `pekerjaan` varchar(70) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan2`
--

INSERT INTO `pekerjaan2` (`id_pekerjaan2`, `pekerjaan`, `jumlah`) VALUES
(1, 'bekerja <2th', 9),
(2, 'bekerja >2th', 4),
(3, 'belum bekerja', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan3`
--

CREATE TABLE `pekerjaan3` (
  `id_pekerjaan3` int(45) NOT NULL,
  `pekerjaan` varchar(70) NOT NULL,
  `jumlah` int(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan3`
--

INSERT INTO `pekerjaan3` (`id_pekerjaan3`, `pekerjaan`, `jumlah`) VALUES
(1, 'belum bekerja', 18),
(2, 'bekerja <2th', 7),
(3, 'bekerja >2th', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan4`
--

CREATE TABLE `pekerjaan4` (
  `id_pekerjaan4` int(45) NOT NULL,
  `pekerjaan` varchar(70) NOT NULL,
  `jumlah` int(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan4`
--

INSERT INTO `pekerjaan4` (`id_pekerjaan4`, `pekerjaan`, `jumlah`) VALUES
(1, 'bekerja <2th', 18),
(2, 'bekerja >2th', 7),
(3, 'belum bekerja', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan5`
--

CREATE TABLE `pekerjaan5` (
  `id_pekerjaan5` int(45) NOT NULL,
  `pekerjaan` varchar(45) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan5`
--

INSERT INTO `pekerjaan5` (`id_pekerjaan5`, `pekerjaan`, `jumlah`) VALUES
(1, 'bekerja >2th', 2),
(2, 'belum bekerja', 1),
(3, 'bekerja <2th', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan_mahasiswa`
--

CREATE TABLE `pekerjaan_mahasiswa` (
  `id_pekerjaan` int(10) NOT NULL,
  `pekerjaan_mahasiswa` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan_mahasiswa`
--

INSERT INTO `pekerjaan_mahasiswa` (`id_pekerjaan`, `pekerjaan_mahasiswa`) VALUES
(1, 'belum bekerja'),
(2, 'bekerja <2th'),
(3, 'bekerja >2th');

-- --------------------------------------------------------

--
-- Table structure for table `penghasilan_ortu`
--

CREATE TABLE `penghasilan_ortu` (
  `id_penghasilan` int(10) NOT NULL,
  `penghasilan_ortu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penghasilan_ortu`
--

INSERT INTO `penghasilan_ortu` (`id_penghasilan`, `penghasilan_ortu`) VALUES
(1, '<1 juta'),
(2, '>1 juta');

-- --------------------------------------------------------

--
-- Table structure for table `perhitungan_centroid`
--

CREATE TABLE `perhitungan_centroid` (
  `id_perhitungan` int(10) NOT NULL,
  `no` int(10) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `c1` varchar(10) NOT NULL,
  `c2` varchar(10) NOT NULL,
  `c3` varchar(10) NOT NULL,
  `c4` varchar(10) NOT NULL,
  `c5` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perhitungan_centroid`
--

INSERT INTO `perhitungan_centroid` (`id_perhitungan`, `no`, `nama`, `c1`, `c2`, `c3`, `c4`, `c5`) VALUES
(1, 1, 'yunuar ratnar', '2.17561090', '4.52905003', '5.67829801', '2.88814752', '8.94874292'),
(2, 2, 'Roisyah Zuliyanti', '2.21126272', '6.37917660', '8.62504888', '3.11043343', '11.0670682'),
(3, 3, 'Khusnul Muannimah', '2.41393513', '5.78896313', '5.72701216', '3.58560959', '9.99399819'),
(4, 4, 'Lasyana Kusumastuti', '3.89493039', '2.93313726', '5.03895508', '3.35871942', '6.77347768'),
(5, 5, 'Moh Feryzaly', '2.10999592', '5.50729463', '8.52136540', '2.31771356', '10.1823376'),
(6, 6, 'Nanda Khoirunisa', '12.5914686', '11.4003199', '5.99550400', '13.1348085', '11.4751906'),
(7, 7, 'Ananda Syamduti', '2.63668026', '4.71587682', '8.58415216', '1.63548040', '9.31020944'),
(8, 8, 'allan yanwar P', '1.43034360', '5.87469950', '7.61715618', '2.84587353', '10.5678758'),
(9, 9, 'Bagus Kurniawan', '5.30462843', '3.72506298', '3.49368978', '5.28081396', '6.59393660'),
(10, 10, 'Misbakhul Ramadani', '11.4406417', '7.00416263', '8.07957104', '10.5187925', '3.80525951'),
(11, 11, 'M Misbachul', '2.24625974', '4.02982558', '7.61958452', '1.37367978', '8.73384222'),
(12, 12, 'Nur Rochma Yulia', '1.23072451', '5.63780934', '6.64598136', '3.02145596', '10.2215458'),
(13, 13, 'Tria Nurrohmah W', '4.02125388', '3.08420074', '5.03160693', '3.38567513', '6.77347768'),
(14, 14, 'Alfiatus Saadah', '2.17561090', '4.10802802', '7.61228404', '1.34014780', '8.76812408'),
(15, 15, 'Siti Maarifah A', '1.98803491', '6.36491117', '8.58199675', '2.98107298', '11.0489818'),
(16, 16, 'Siti Hajar Rahmawati', '2.86936976', '5.06891450', '8.54956538', '1.89314451', '9.41700589'),
(17, 17, 'Rizki Taufikul HG', '5.02012776', '3.48549770', '9.38194373', '3.30874540', '7.24430811'),
(18, 18, 'Mahfirotun Nisa', '1.98803491', '6.36491117', '8.58199675', '2.98107298', '11.0489818'),
(19, 19, 'Rafiqah Dwi Rahma', '2.55853137', '6.56873612', '8.61000977', '3.23925858', '11.1301392'),
(20, 20, 'Eka Sadam Giri S', '3.81794222', '2.22865300', '7.18939971', '2.60695150', '6.68430998'),
(21, 21, 'M Gerri Setra B', '1.97217717', '5.50729463', '5.63246556', '3.37220938', '9.86306240'),
(22, 22, 'M Hafidh Machrudin R', '2.10999592', '5.50729463', '8.52136540', '2.31771356', '10.1823376'),
(23, 23, 'Subekhan Fathur R', '2.01912922', '4.55904531', '5.52959929', '2.78671780', '8.91515563'),
(24, 24, 'Sholikhul Hadi', '1.49441721', '4.99666831', '7.54141023', '2.11966887', '9.68916921'),
(25, 25, 'M Fakhrus Shobirin', '5.56904685', '6.69894724', '2.18207889', '6.62243128', '9.69948452'),
(26, 26, 'Ziko Malifon AAB ', '2.13210760', '6.35775858', '8.54090559', '2.82987564', '10.9854449'),
(27, 27, 'Fiki Cahyono ', '11.5467087', '11.3323207', '4.98721047', '12.3880021', '12.2588743'),
(28, 28, 'Uzlifatul Fuaidah', '2.13945853', '6.27138694', '8.60139920', '2.80834402', '10.9672238'),
(29, 29, 'Abdur Rohman', '2.64259017', '5.60545218', '8.52571805', '2.06905682', '10.1034647'),
(30, 30, 'Satria Yudha Prakosa', '2.52156356', '5.70989441', '8.50614297', '2.29804180', '10.1921538'),
(31, 31, 'M Fanani Wahyu R', '2.45883769', '5.48247154', '8.53657239', '2.25809569', '10.1331140'),
(32, 32, 'Fathul Barri', '3.96253489', '2.77382303', '8.05896198', '1.92494055', '7.06257743'),
(33, 33, 'Lutfi Romadhoni', '4.85879437', '2.36712784', '8.52135366', '3.01147740', '6.39374694'),
(34, 34, 'M Zainulloh Zain', '3.44355671', '3.39297719', '7.95256363', '1.81135202', '7.91707016'),
(35, 35, 'Imanullah Ali Ubed', '1.58571208', '5.05094983', '7.48719362', '1.87707116', '9.64779767'),
(36, 36, 'Vindy Widia A', '8.52836929', '8.81958583', '2.48368039', '9.53026737', '10.7182088'),
(37, 37, 'Rio Restu Y', '2.50911992', '3.48549770', '5.69783014', '2.45731482', '7.95487272'),
(38, 38, 'Sulis Tiawati', '3.03346053', '3.44614193', '7.74492532', '1.10471541', '7.89176786'),
(39, 39, 'Moh Chanif Alfarizi', '2.31479649', '5.44921042', '8.49307178', '1.84450431', '10.0538549'),
(40, 40, 'Samsi Syahputra', '3.38406306', '4.00720528', '8.75503674', '1.77758154', '8.50176452'),
(41, 41, 'Kazuesal Zabella', '2.23930409', '4.17388239', '7.55857581', '0.90906333', '8.72238499'),
(42, 42, 'Mohammad Ilham', '5.05114668', '2.80640236', '8.50613121', '2.99636382', '6.40936814'),
(43, 43, 'Siti Rohmawati', '5.14918273', '2.62223077', '4.67680107', '4.48321270', '5.59285258'),
(44, 44, 'Shufiyah Najati U', '3.10977214', '2.97924390', '6.85447797', '2.00957611', '7.48865809'),
(45, 45, 'Andryan Adi W', '2.18990475', '3.74935917', '6.58720489', '1.39556302', '8.26317130'),
(46, 46, 'dimas suyra T', '5.28691619', '2.53406673', '4.88973090', '4.71707495', '5.64623768'),
(47, 47, 'Humada Alfian A', '3.93088829', '4.33415438', '8.89770017', '2.04699686', '8.52525659'),
(48, 48, 'Muhammad Ahyat D', '13.9322389', '12.2238166', '7.32965676', '14.2118962', '11.6653332'),
(49, 49, 'ahmad hadi yunus', '8.94678058', '4.54909817', '11.0462965', '6.86071396', '4.52548339'),
(50, 50, 'bagus hariyanto', '7.02104570', '2.49793799', '6.42206106', '5.83686526', '3.77888872'),
(51, 51, 'Siti Khodijah', '9.20671943', '4.48875196', '7.72334566', '7.92249936', '2.54558441'),
(52, 52, 'Fransiska Saveria M J ', '8.09213709', '4.43782539', '11.1181504', '6.03595859', '5.78619045'),
(53, 53, 'Chunaina', '2.81437076', '3.77352543', '6.85717641', '2.07634201', '8.28733974'),
(54, 54, 'M Edi Santoso', '7.49049282', '3.15707051', '5.96456773', '6.51636372', '3.69864840'),
(55, 55, 'Syahrul Ramadhan', '3.26660111', '4.72549407', '8.75292341', '2.03955783', '9.25634917'),
(56, 56, 'Eko Dharmawan N', '7.39603155', '2.63948749', '7.61955827', '5.93469427', '3.32866339'),
(57, 57, 'Achmad Fathoni ', '3.63343953', '4.10800367', '8.77827251', '2.06905682', '8.51351866'),
(58, 58, 'Maulana Ashari', '2.71832353', '3.37954053', '5.74959723', '2.55409399', '7.87908624'),
(59, 59, 'Madastya Fillah Q', '7.75696350', '7.48716863', '2.03265056', '8.38877798', '9.35307436'),
(60, 60, 'Dimas Oki Santoso', '4.91632818', '1.46584249', '7.70415915', '3.25333615', '5.69912273'),
(61, 61, 'M Ichlasul Amal', '5.37195335', '3.37954053', '9.47231061', '3.19696671', '7.01997150'),
(62, 62, 'Fadhiyah Jayanti', '3.49758242', '2.72420524', '5.97699492', '2.74838064', '7.04840407'),
(63, 63, 'Vivian Dewi S', '7.26388895', '5.68599104', '2.75246586', '7.35108129', '7.18888030'),
(64, 64, 'Khoirul Alim', '2.47145358', '4.08581622', '7.59767519', '1.14516206', '8.65332306'),
(65, 65, 'riska dwi R', '2.80882231', '5.70991192', '4.71233151', '4.20054712', '9.73036484'),
(66, 66, 'yulianti alvia', '1.46276546', '5.21914688', '7.54876601', '2.35660691', '9.78161540'),
(67, 67, 'Isnah Mahfiroh', '2.60685304', '3.78556392', '5.64558839', '2.49407220', '7.97997493'),
(68, 68, 'Zuni Rezalina A', '3.03349350', '5.91326426', '4.75925081', '4.29329665', '9.81223725'),
(69, 69, 'Fira Dahlianti', '1.31661794', '5.78111530', '6.66267726', '3.20636806', '10.2800778'),
(70, 70, 'Rustika Wati Ningsih', '2.11004332', '6.53405649', '8.54740126', '3.01144419', '11.0670682'),
(71, 71, 'Jannah Annisa', '2.55849229', '5.00576609', '8.57767266', '2.19690604', '9.46995248'),
(72, 72, 'M Faisal S', '6.53705459', '7.38940418', '2.01436548', '7.68758714', '10.0139902'),
(73, 73, 'Ahmad Dzul Faruk', '4.72513310', '5.54022510', '2.88393278', '5.65489134', '8.76812408'),
(74, 74, 'Karima Diva R', '1.90779527', '5.97443672', '6.64319714', '3.19217733', '10.2898007'),
(75, 75, 'Delina Puspita S', '2.75265014', '5.76537025', '4.70051787', '4.18970120', '9.76114747'),
(76, 76, 'Izzatu Mukhlishoti', '4.56708690', '6.32193753', '3.07051596', '5.89623576', '9.72008230'),
(77, 77, 'Imam Fakrudin', '4.47371018', '2.36712784', '5.38364823', '3.81098361', '5.87196730'),
(78, 78, 'Ananda Firdausi', '2.08769797', '5.53200634', '8.51049166', '2.17609653', '10.1331140'),
(79, 79, 'moh endias H', '9.59727476', '8.66884618', '3.01570361', '10.1776223', '9.45938687'),
(80, 80, 'hanafi nurul Q', '1.69990670', '5.58923019', '5.65869846', '3.56440684', '9.94384231'),
(81, 81, 'ema eliyana', '6.61073996', '7.52954807', '1.74861897', '7.63021599', '10.0039992'),
(82, 82, 'zulfatun nimah', '1.51528308', '6.07253606', '7.57815731', '3.03146765', '10.6433077'),
(83, 83, 'maya firdausi', '1.69990670', '5.58923019', '5.65869846', '3.56440684', '9.94384231'),
(84, 84, 'bagus sultan', '1.28050100', '5.94392919', '7.59036681', '2.92465316', '10.5773342'),
(85, 85, 'erni khofifah', '1.98017242', '6.21312274', '7.61472706', '3.17310512', '10.6901824'),
(86, 86, 'moh benativ', '4.12861754', '4.36551190', '3.75431329', '4.44247635', '7.69935062'),
(87, 87, 'marisa dwi yanti', '3.78923248', '6.06505517', '3.77889776', '4.98563899', '9.66850557'),
(88, 88, 'Alfian Zulkarnain Putra', '1.96430212', '6.37917660', '8.56472231', '3.07122062', '11.0308657'),
(89, 89, 'Elisa Alfiyani', '1.79818876', '6.18379286', '7.56592812', '2.89340563', '10.6150836'),
(90, 90, 'M Noval Alvian', '1.84105481', '4.58886633', '5.56631550', '3.03150064', '8.97106459'),
(91, 91, 'Anissah S', '1.78943645', '5.03292104', '6.50801569', '2.42631328', '9.33166651'),
(92, 92, 'Nur Laili Khasana', '10.5600323', '10.5642460', '4.10308034', '11.5065979', '11.7677525'),
(93, 93, 'Shinta Islami', '2.37480163', '5.83587990', '8.47560430', '2.37583588', '10.2313244'),
(94, 94, 'Joko Cahyono Putra', '6.55137259', '6.56185143', '1.61656064', '7.33457538', '8.92636544'),
(95, 95, 'M Nurdin Kurnia A', '6.64843461', '6.81999224', '1.42150213', '7.39629611', '9.03769882'),
(96, 96, 'Moch Syaifuddin Aris', '2.22532757', '5.52377535', '8.46905356', '1.96387274', '10.0637965'),
(97, 97, 'M Danial Ramadhoni', '5.50698491', '6.71927780', '2.27351453', '6.72910069', '9.75089739'),
(98, 98, 'Suci Wulandari', '1.88310456', '6.42886414', '8.55822810', '3.05636976', '11.0580287'),
(99, 99, 'Alifiyah Indar Rahmah', '1.51528308', '6.07253606', '7.57815731', '3.03146765', '10.6433077'),
(100, 100, 'Yuliana Dewi', '2.34168375', '5.82028300', '5.70109360', '3.78298772', '10.0339423'),
(101, 101, 'Anis Jihan Nita', '5.66639945', '6.20582744', '1.91056753', '6.44150573', '8.83628881'),
(102, 102, 'Mulyati Dian F', '8.73651434', '7.95233891', '2.45366426', '9.32455876', '9.08185003'),
(103, 103, 'Shokhifatuz Zuhro', '4.52929164', '6.30032492', '2.82553858', '5.75317270', '9.62704523'),
(104, 104, 'Zumrotul Maslihah', '2.58280522', '5.64587408', '4.72017672', '4.22210802', '9.75089739'),
(105, 105, 'Juliyanti Olyvia S', '1.23072451', '5.14016480', '7.50694800', '2.20376862', '9.73036484'),
(106, 106, 'Selly Noveliyanti B', '3.12980555', '3.95007521', '7.73295986', '1.88515149', '8.07960395'),
(107, 107, 'Palupi Adilia P', '2.37480163', '5.83587990', '8.47560430', '2.37583588', '10.2313244'),
(108, 108, 'Nurul Adniyah', '1.32841364', '5.78111530', '6.66267726', '3.12015963', '10.2410936'),
(109, 109, 'Thezar Alfarozi', '1.94825122', '3.85692808', '6.60124748', '2.11253311', '8.39523674'),
(110, 110, 'A Jailani Strio W', '1.69064568', '4.88627610', '6.46806526', '2.41379289', '9.28870281'),
(111, 111, 'Moh Ivan Asyrofi', '1.28050100', '5.94392919', '7.59036681', '2.92465316', '10.5773342'),
(112, 112, 'Hikmah Anggun G', '1.73628419', '5.90556468', '6.59564009', '3.08107061', '10.2410936'),
(113, 113, 'Azidatul Zulqoidah', '1.05284510', '5.70991192', '6.61526026', '3.09577068', '10.2313244'),
(114, 114, 'Bagas Arista H', '2.03457190', '4.84892712', '6.54208440', '2.23114234', '9.20217365'),
(115, 115, 'Siti Qozaemah', '1.17884809', '5.75747290', '6.55338601', '2.93499508', '10.1921538'),
(116, 116, 'Siti Qozaemah', '1.17884809', '5.75747290', '6.55338601', '2.93499508', '10.1921538'),
(117, 117, 'Sinta Dewi N T N', '1.05284510', '5.70991192', '6.61526026', '3.09577068', '10.2313244'),
(118, 118, 'Nurul Arifin', '1.99581632', '4.58886633', '5.51282761', '2.67009291', '8.85889383'),
(119, 119, 'Novia Candra L', '5.71036625', '6.95854109', '2.35356502', '6.84074529', '9.87319603'),
(120, 120, 'Imam Wahyu K', '1.65326429', '5.01482743', '7.48225021', '1.72568715', '9.56451776'),
(121, 121, 'Yessy Yustia W', '1.15207761', '5.99722387', '7.58303819', '2.90905416', '10.6056588'),
(122, 122, 'Abdullah Muhammad', '1.35169627', '5.07788284', '7.51435082', '2.22431925', '9.69948452'),
(123, 123, 'Ana Zunaidatul I', '2.01143799', '4.75427115', '5.54965479', '3.13467640', '9.04875682'),
(124, 124, 'Arum Ariyaya', '1.79818876', '6.18379286', '7.56592812', '2.89340563', '10.6150836'),
(125, 125, 'M Ivan Fatoni', '2.18995041', '5.50729463', '5.69135030', '3.53881281', '9.86306240'),
(126, 126, 'khusnul tohroh', '3.10478386', '5.79680034', '8.65933417', '2.56592988', '10.1626768'),
(127, 127, 'indah wahyu A', '2.29448966', '5.73373300', '5.74959723', '3.81093113', '10.0039992'),
(128, 128, 'Kusnul Tohiroh', '3.10478386', '5.79680034', '8.65933417', '2.56592988', '10.1626768'),
(129, 129, 'Arief Khusnuddin', '7.62285266', '7.37709253', '1.99586280', '8.36709006', '9.28870281'),
(130, 130, 'moh kharis', '3.15466049', '3.67588006', '7.78308861', '2.20381400', '8.04238770'),
(131, 131, 'Edi Eriyanto', '8.90828169', '4.57898397', '11.0647217', '6.96373435', '4.63465209'),
(132, 132, 'Fyary Setiawan', '2.32827893', '5.71785748', '6.78933489', '3.00136571', '10.0836501'),
(133, 133, 'Irgi Fatihul Inam', '14.3868579', '9.74512669', '11.1281026', '13.3714919', '5.53895296'),
(134, 134, 'Winda Rofiatun N', '5.78915216', '6.10241708', '2.11307082', '6.39429403', '8.69942526'),
(135, 135, 'Jauhariati Fatimi', '8.80773993', '6.14697439', '4.18349953', '8.65023676', '5.97327380'),
(136, 136, 'Muhammad Amrin', '1.63422239', '4.78285419', '6.51085772', '2.34375684', '9.21303424'),
(137, 137, 'Tutut Takhiyatul', '1.75421857', '6.06503868', '7.60985337', '3.09577068', '10.6150836'),
(138, 138, 'Assyifa Kartika Y', '2.14673771', '6.46410815', '8.53872755', '2.96070872', '10.9945441'),
(139, 139, 'Deasy Afrilia', '3.76856508', '5.94392919', '3.86609212', '5.10574148', '9.66850557'),
(140, 140, 'Maudy Annastasia', '1.92413170', '5.96681608', '7.63172774', '2.92981162', '10.5299572');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(25) NOT NULL,
  `nik` varchar(60) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `tempat` varchar(45) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `lulusan` varchar(60) NOT NULL,
  `perusahaan` text NOT NULL,
  `jenistreining` varchar(45) NOT NULL,
  `bulan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tgl_lahir`, `alamat`, `lulusan`, `perusahaan`, `jenistreining`, `bulan`) VALUES
(6, 'BSK000001', 'UMAM', 'Laki-Laki', 'gresik', '2017-11-03', 'gresik', 'gresik', 'gresik', 'K3', 'januari'),
(7, 'BSK000002', 'CHAKIM', 'Pilih Jenis Kelamin', 'GRESIK', '2017-11-03', 'GRESIK', 'S1', 'GRESIK', 'K3', 'maret'),
(12, 'BSK000006', 'eka', 'Laki-Laki', 'gresik', '2017-11-25', 'gresik', 's1', '', '', 'januari'),
(13, 'BSK000007', 'rohman', 'Laki-Laki', 'rohman', '2017-11-25', 'gresik', 's1', 'gresik', 'K3', 'januari');

-- --------------------------------------------------------

--
-- Table structure for table `potongan`
--

CREATE TABLE `potongan` (
  `id_potongan` int(15) NOT NULL,
  `nama_potongan` varchar(60) NOT NULL,
  `potongan` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `potongan`
--

INSERT INTO `potongan` (`id_potongan`, `nama_potongan`, `potongan`) VALUES
(1, 'Makan Per Hari', 8000),
(2, 'Jam Lembur', 8000),
(3, 'Tidak Masuk Sehari', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(10) NOT NULL,
  `sekolah` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `sekolah`) VALUES
(1, 'smk'),
(2, 'sma'),
(3, 'ma');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah1`
--

CREATE TABLE `sekolah1` (
  `id_sekolah1` int(45) NOT NULL,
  `sekolah` varchar(45) NOT NULL,
  `jumlah` int(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah1`
--

INSERT INTO `sekolah1` (`id_sekolah1`, `sekolah`, `jumlah`) VALUES
(1, 'smk', 28),
(2, 'sma', 25),
(3, 'ma', 11);

-- --------------------------------------------------------

--
-- Table structure for table `sekolah2`
--

CREATE TABLE `sekolah2` (
  `id_sekolah2` int(45) NOT NULL,
  `sekolah` varchar(70) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah2`
--

INSERT INTO `sekolah2` (`id_sekolah2`, `sekolah`, `jumlah`) VALUES
(1, 'smk', 7),
(2, 'sma', 5),
(3, 'ma', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sekolah3`
--

CREATE TABLE `sekolah3` (
  `id_sekolah3` int(45) NOT NULL,
  `sekolah` varchar(60) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah3`
--

INSERT INTO `sekolah3` (`id_sekolah3`, `sekolah`, `jumlah`) VALUES
(1, 'sma', 13),
(2, 'ma', 7),
(3, 'smk', 6);

-- --------------------------------------------------------

--
-- Table structure for table `sekolah4`
--

CREATE TABLE `sekolah4` (
  `id_sekolah4` int(45) NOT NULL,
  `sekolah` varchar(70) NOT NULL,
  `jumlah` int(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah4`
--

INSERT INTO `sekolah4` (`id_sekolah4`, `sekolah`, `jumlah`) VALUES
(1, 'smk', 14),
(2, 'sma', 13),
(3, 'ma', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sekolah5`
--

CREATE TABLE `sekolah5` (
  `id_sekolah5` int(45) NOT NULL,
  `sekolah` varchar(45) NOT NULL,
  `jumlah` int(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah5`
--

INSERT INTO `sekolah5` (`id_sekolah5`, `sekolah`, `jumlah`) VALUES
(1, 'sma', 3),
(2, 'ma', 1);

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(45) NOT NULL,
  `jenistrening` varchar(10) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(200) NOT NULL,
  `b` varchar(200) NOT NULL,
  `c` varchar(200) NOT NULL,
  `d` varchar(200) NOT NULL,
  `e` varchar(200) NOT NULL,
  `kunci` varchar(10) NOT NULL,
  `status` enum('tampil','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `jenistrening`, `soal`, `a`, `b`, `c`, `d`, `e`, `kunci`, `status`) VALUES
(1, 'K3', '5 x 4 =', '45', '778', '656', '45', '20', 'A', 'tampil'),
(2, 'K3', 'saya ', 'hkjhjk', 'kkjk', 'kjjk', 'jkhjkh', 'jkhjk', 'A', 'tampil'),
(4, 'Pemadam', 'api ', 'yoi', 'iyo pi', 'yo\'se', 'igk', 'padamkan', 'E', 'tampil');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'test'),
(2, 'bebas test');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(15) NOT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `bagian` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `nik`, `username`, `password`, `bagian`) VALUES
(1, '', 'Staff Admin', '96d02fb19d339c27eafbf4db5f8586b4', 'hrd'),
(2, '', 'Kabiro PMB', '73a8fbc7222eb11b655d8847552c5b91', 'direktur');

-- --------------------------------------------------------

--
-- Table structure for table `usia1`
--

CREATE TABLE `usia1` (
  `id_usia1` int(45) NOT NULL,
  `usia` int(45) NOT NULL,
  `jumlah` int(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usia1`
--

INSERT INTO `usia1` (`id_usia1`, `usia`, `jumlah`) VALUES
(1, 18, 43),
(2, 19, 20),
(3, 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usia2`
--

CREATE TABLE `usia2` (
  `id_usia2` int(45) NOT NULL,
  `usia` int(25) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usia2`
--

INSERT INTO `usia2` (`id_usia2`, `usia`, `jumlah`) VALUES
(1, 22, 4),
(2, 21, 3),
(3, 23, 3),
(4, 24, 2),
(5, 26, 1),
(6, 25, 1),
(7, 27, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usia3`
--

CREATE TABLE `usia3` (
  `id_usia3` int(25) NOT NULL,
  `usia` int(25) NOT NULL,
  `jumlah` int(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usia3`
--

INSERT INTO `usia3` (`id_usia3`, `usia`, `jumlah`) VALUES
(1, 18, 11),
(2, 19, 7),
(3, 20, 4),
(4, 21, 3),
(5, 23, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usia4`
--

CREATE TABLE `usia4` (
  `id_usia4` int(45) NOT NULL,
  `usia` int(25) NOT NULL,
  `jumlah` int(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usia4`
--

INSERT INTO `usia4` (`id_usia4`, `usia`, `jumlah`) VALUES
(1, 20, 13),
(2, 21, 8),
(3, 19, 7),
(4, 23, 2),
(5, 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usia5`
--

CREATE TABLE `usia5` (
  `id_usia5` int(45) NOT NULL,
  `usia` int(45) NOT NULL,
  `jumlah` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usia5`
--

INSERT INTO `usia5` (`id_usia5`, `usia`, `jumlah`) VALUES
(1, 27, 2),
(2, 26, 1),
(3, 30, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`id_bagian`);

--
-- Indexes for table `c1`
--
ALTER TABLE `c1`
  ADD PRIMARY KEY (`id_c1`);

--
-- Indexes for table `c2`
--
ALTER TABLE `c2`
  ADD PRIMARY KEY (`id_c2`);

--
-- Indexes for table `c3`
--
ALTER TABLE `c3`
  ADD PRIMARY KEY (`id_c3`);

--
-- Indexes for table `c4`
--
ALTER TABLE `c4`
  ADD PRIMARY KEY (`id_c4`);

--
-- Indexes for table `c5`
--
ALTER TABLE `c5`
  ADD PRIMARY KEY (`id_c5`);

--
-- Indexes for table `centroid`
--
ALTER TABLE `centroid`
  ADD PRIMARY KEY (`id_centroid`);

--
-- Indexes for table `centroid1`
--
ALTER TABLE `centroid1`
  ADD PRIMARY KEY (`id_centroid1`);

--
-- Indexes for table `centroid2`
--
ALTER TABLE `centroid2`
  ADD PRIMARY KEY (`id_centroid2`);

--
-- Indexes for table `centroid3`
--
ALTER TABLE `centroid3`
  ADD PRIMARY KEY (`id_centroid3`);

--
-- Indexes for table `centroid4`
--
ALTER TABLE `centroid4`
  ADD PRIMARY KEY (`id_centroid4`);

--
-- Indexes for table `centroid5`
--
ALTER TABLE `centroid5`
  ADD PRIMARY KEY (`id_centroid5`);

--
-- Indexes for table `centroid_temp`
--
ALTER TABLE `centroid_temp`
  ADD PRIMARY KEY (`id_centroid`);

--
-- Indexes for table `cluster`
--
ALTER TABLE `cluster`
  ADD PRIMARY KEY (`id_cluster`);

--
-- Indexes for table `daerah1`
--
ALTER TABLE `daerah1`
  ADD PRIMARY KEY (`id_daerah`);

--
-- Indexes for table `daerah2`
--
ALTER TABLE `daerah2`
  ADD PRIMARY KEY (`id_daerah2`);

--
-- Indexes for table `daerah3`
--
ALTER TABLE `daerah3`
  ADD PRIMARY KEY (`id_daerah3`);

--
-- Indexes for table `daerah4`
--
ALTER TABLE `daerah4`
  ADD PRIMARY KEY (`id_daerah4`);

--
-- Indexes for table `daerah5`
--
ALTER TABLE `daerah5`
  ADD PRIMARY KEY (`id_daerah5`);

--
-- Indexes for table `data_puskesmas`
--
ALTER TABLE `data_puskesmas`
  ADD PRIMARY KEY (`no_puskesmas`);

--
-- Indexes for table `gaji_karyawan`
--
ALTER TABLE `gaji_karyawan`
  ADD PRIMARY KEY (`id_gaji`);

--
-- Indexes for table `hasil_centroid`
--
ALTER TABLE `hasil_centroid`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `hasil_mahasiswa`
--
ALTER TABLE `hasil_mahasiswa`
  ADD PRIMARY KEY (`id_hasil_mahasiswa`);

--
-- Indexes for table `import_data`
--
ALTER TABLE `import_data`
  ADD PRIMARY KEY (`id_import`);

--
-- Indexes for table `inisial_daerah`
--
ALTER TABLE `inisial_daerah`
  ADD PRIMARY KEY (`id_inisial_daerah`);

--
-- Indexes for table `inisial_jenis`
--
ALTER TABLE `inisial_jenis`
  ADD PRIMARY KEY (`id_inisial_jenis`);

--
-- Indexes for table `inisial_jurusan`
--
ALTER TABLE `inisial_jurusan`
  ADD PRIMARY KEY (`id_inisial_jurusan`);

--
-- Indexes for table `inisial_kelas`
--
ALTER TABLE `inisial_kelas`
  ADD PRIMARY KEY (`id_inisial_kelas`);

--
-- Indexes for table `inisial_pekerjaan`
--
ALTER TABLE `inisial_pekerjaan`
  ADD PRIMARY KEY (`id_inisial_pekerjaan`);

--
-- Indexes for table `inisial_penghasilan`
--
ALTER TABLE `inisial_penghasilan`
  ADD PRIMARY KEY (`id_inisial_penghasilan`);

--
-- Indexes for table `inisial_sekolah`
--
ALTER TABLE `inisial_sekolah`
  ADD PRIMARY KEY (`id_inisial_sekolah`);

--
-- Indexes for table `inisial_status`
--
ALTER TABLE `inisial_status`
  ADD PRIMARY KEY (`id_inisial_status`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `jawaban_detail`
--
ALTER TABLE `jawaban_detail`
  ADD PRIMARY KEY (`id_jawaban_detail`);

--
-- Indexes for table `jenistrening`
--
ALTER TABLE `jenistrening`
  ADD PRIMARY KEY (`id_jenistrening`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `jurusan1`
--
ALTER TABLE `jurusan1`
  ADD PRIMARY KEY (`id_jurusan1`);

--
-- Indexes for table `jurusan2`
--
ALTER TABLE `jurusan2`
  ADD PRIMARY KEY (`id_jurusan2`);

--
-- Indexes for table `jurusan3`
--
ALTER TABLE `jurusan3`
  ADD PRIMARY KEY (`id_jurusan3`);

--
-- Indexes for table `jurusan4`
--
ALTER TABLE `jurusan4`
  ADD PRIMARY KEY (`id_jurusan4`);

--
-- Indexes for table `jurusan5`
--
ALTER TABLE `jurusan5`
  ADD PRIMARY KEY (`id_jurusan5`);

--
-- Indexes for table `jurusan_sekolah`
--
ALTER TABLE `jurusan_sekolah`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kelas1`
--
ALTER TABLE `kelas1`
  ADD PRIMARY KEY (`id_kelas1`);

--
-- Indexes for table `kelas2`
--
ALTER TABLE `kelas2`
  ADD PRIMARY KEY (`id_kelas2`);

--
-- Indexes for table `kelas3`
--
ALTER TABLE `kelas3`
  ADD PRIMARY KEY (`id_kelas3`);

--
-- Indexes for table `kelas4`
--
ALTER TABLE `kelas4`
  ADD PRIMARY KEY (`id_kelas4`);

--
-- Indexes for table `kelas5`
--
ALTER TABLE `kelas5`
  ADD PRIMARY KEY (`id_kelas5`);

--
-- Indexes for table `kota_asal`
--
ALTER TABLE `kota_asal`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `maxdaerah`
--
ALTER TABLE `maxdaerah`
  ADD PRIMARY KEY (`id_maxdaerah`);

--
-- Indexes for table `maxdaerah2`
--
ALTER TABLE `maxdaerah2`
  ADD PRIMARY KEY (`id_maxdaerah2`);

--
-- Indexes for table `maxdaerah3`
--
ALTER TABLE `maxdaerah3`
  ADD PRIMARY KEY (`id_maxdaerah3`);

--
-- Indexes for table `maxdaerah4`
--
ALTER TABLE `maxdaerah4`
  ADD PRIMARY KEY (`id_maxdaerah4`);

--
-- Indexes for table `maxdaerah5`
--
ALTER TABLE `maxdaerah5`
  ADD PRIMARY KEY (`id_maxdaerah5`);

--
-- Indexes for table `maxjurusan1`
--
ALTER TABLE `maxjurusan1`
  ADD PRIMARY KEY (`id_maxjurusan1`);

--
-- Indexes for table `maxjurusan2`
--
ALTER TABLE `maxjurusan2`
  ADD PRIMARY KEY (`id_maxjurusan2`);

--
-- Indexes for table `maxjurusan3`
--
ALTER TABLE `maxjurusan3`
  ADD PRIMARY KEY (`id_maxjurusan3`);

--
-- Indexes for table `maxjurusan4`
--
ALTER TABLE `maxjurusan4`
  ADD PRIMARY KEY (`id_maxjurusan4`);

--
-- Indexes for table `maxjurusan5`
--
ALTER TABLE `maxjurusan5`
  ADD PRIMARY KEY (`id_maxjurusan5`);

--
-- Indexes for table `maxsekolah1`
--
ALTER TABLE `maxsekolah1`
  ADD PRIMARY KEY (`id_maxsekolah1`);

--
-- Indexes for table `maxsekolah2`
--
ALTER TABLE `maxsekolah2`
  ADD PRIMARY KEY (`id_maxsekolah2`);

--
-- Indexes for table `maxsekolah3`
--
ALTER TABLE `maxsekolah3`
  ADD PRIMARY KEY (`id_maxsekolah3`);

--
-- Indexes for table `maxsekolah4`
--
ALTER TABLE `maxsekolah4`
  ADD PRIMARY KEY (`id_maxsekolah4`);

--
-- Indexes for table `maxsekolah5`
--
ALTER TABLE `maxsekolah5`
  ADD PRIMARY KEY (`id_maxsekolah5`);

--
-- Indexes for table `maxusia1`
--
ALTER TABLE `maxusia1`
  ADD PRIMARY KEY (`id_maxusia1`);

--
-- Indexes for table `maxusia2`
--
ALTER TABLE `maxusia2`
  ADD PRIMARY KEY (`id_maxusia2`);

--
-- Indexes for table `maxusia3`
--
ALTER TABLE `maxusia3`
  ADD PRIMARY KEY (`id_maxusia3`);

--
-- Indexes for table `maxusia4`
--
ALTER TABLE `maxusia4`
  ADD PRIMARY KEY (`id_maxusia4`);

--
-- Indexes for table `maxusia5`
--
ALTER TABLE `maxusia5`
  ADD PRIMARY KEY (`id_maxusia5`);

--
-- Indexes for table `mindaerah1`
--
ALTER TABLE `mindaerah1`
  ADD PRIMARY KEY (`id_mindaerah1`);

--
-- Indexes for table `nilai_profil`
--
ALTER TABLE `nilai_profil`
  ADD PRIMARY KEY (`id_nilai_profil`);

--
-- Indexes for table `nilai_profil_mahasiswa`
--
ALTER TABLE `nilai_profil_mahasiswa`
  ADD PRIMARY KEY (`id_nilai_profil_mahasiswa`);

--
-- Indexes for table `pekerjaan1`
--
ALTER TABLE `pekerjaan1`
  ADD PRIMARY KEY (`id_pekerjaan1`);

--
-- Indexes for table `pekerjaan2`
--
ALTER TABLE `pekerjaan2`
  ADD PRIMARY KEY (`id_pekerjaan2`);

--
-- Indexes for table `pekerjaan3`
--
ALTER TABLE `pekerjaan3`
  ADD PRIMARY KEY (`id_pekerjaan3`);

--
-- Indexes for table `pekerjaan4`
--
ALTER TABLE `pekerjaan4`
  ADD PRIMARY KEY (`id_pekerjaan4`);

--
-- Indexes for table `pekerjaan5`
--
ALTER TABLE `pekerjaan5`
  ADD PRIMARY KEY (`id_pekerjaan5`);

--
-- Indexes for table `pekerjaan_mahasiswa`
--
ALTER TABLE `pekerjaan_mahasiswa`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `penghasilan_ortu`
--
ALTER TABLE `penghasilan_ortu`
  ADD PRIMARY KEY (`id_penghasilan`);

--
-- Indexes for table `perhitungan_centroid`
--
ALTER TABLE `perhitungan_centroid`
  ADD PRIMARY KEY (`id_perhitungan`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `potongan`
--
ALTER TABLE `potongan`
  ADD PRIMARY KEY (`id_potongan`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `sekolah1`
--
ALTER TABLE `sekolah1`
  ADD PRIMARY KEY (`id_sekolah1`);

--
-- Indexes for table `sekolah2`
--
ALTER TABLE `sekolah2`
  ADD PRIMARY KEY (`id_sekolah2`);

--
-- Indexes for table `sekolah3`
--
ALTER TABLE `sekolah3`
  ADD PRIMARY KEY (`id_sekolah3`);

--
-- Indexes for table `sekolah4`
--
ALTER TABLE `sekolah4`
  ADD PRIMARY KEY (`id_sekolah4`);

--
-- Indexes for table `sekolah5`
--
ALTER TABLE `sekolah5`
  ADD PRIMARY KEY (`id_sekolah5`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `usia1`
--
ALTER TABLE `usia1`
  ADD PRIMARY KEY (`id_usia1`);

--
-- Indexes for table `usia2`
--
ALTER TABLE `usia2`
  ADD PRIMARY KEY (`id_usia2`);

--
-- Indexes for table `usia3`
--
ALTER TABLE `usia3`
  ADD PRIMARY KEY (`id_usia3`);

--
-- Indexes for table `usia4`
--
ALTER TABLE `usia4`
  ADD PRIMARY KEY (`id_usia4`);

--
-- Indexes for table `usia5`
--
ALTER TABLE `usia5`
  ADD PRIMARY KEY (`id_usia5`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bagian`
--
ALTER TABLE `bagian`
  MODIFY `id_bagian` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `c1`
--
ALTER TABLE `c1`
  MODIFY `id_c1` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `c2`
--
ALTER TABLE `c2`
  MODIFY `id_c2` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `c3`
--
ALTER TABLE `c3`
  MODIFY `id_c3` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `c4`
--
ALTER TABLE `c4`
  MODIFY `id_c4` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `c5`
--
ALTER TABLE `c5`
  MODIFY `id_c5` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `centroid`
--
ALTER TABLE `centroid`
  MODIFY `id_centroid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `centroid1`
--
ALTER TABLE `centroid1`
  MODIFY `id_centroid1` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `centroid2`
--
ALTER TABLE `centroid2`
  MODIFY `id_centroid2` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `centroid3`
--
ALTER TABLE `centroid3`
  MODIFY `id_centroid3` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `centroid4`
--
ALTER TABLE `centroid4`
  MODIFY `id_centroid4` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `centroid5`
--
ALTER TABLE `centroid5`
  MODIFY `id_centroid5` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `centroid_temp`
--
ALTER TABLE `centroid_temp`
  MODIFY `id_centroid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `cluster`
--
ALTER TABLE `cluster`
  MODIFY `id_cluster` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daerah1`
--
ALTER TABLE `daerah1`
  MODIFY `id_daerah` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `daerah2`
--
ALTER TABLE `daerah2`
  MODIFY `id_daerah2` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `daerah3`
--
ALTER TABLE `daerah3`
  MODIFY `id_daerah3` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `daerah4`
--
ALTER TABLE `daerah4`
  MODIFY `id_daerah4` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `daerah5`
--
ALTER TABLE `daerah5`
  MODIFY `id_daerah5` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_puskesmas`
--
ALTER TABLE `data_puskesmas`
  MODIFY `no_puskesmas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gaji_karyawan`
--
ALTER TABLE `gaji_karyawan`
  MODIFY `id_gaji` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `hasil_centroid`
--
ALTER TABLE `hasil_centroid`
  MODIFY `nomor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hasil_mahasiswa`
--
ALTER TABLE `hasil_mahasiswa`
  MODIFY `id_hasil_mahasiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `import_data`
--
ALTER TABLE `import_data`
  MODIFY `id_import` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inisial_daerah`
--
ALTER TABLE `inisial_daerah`
  MODIFY `id_inisial_daerah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `inisial_jenis`
--
ALTER TABLE `inisial_jenis`
  MODIFY `id_inisial_jenis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inisial_jurusan`
--
ALTER TABLE `inisial_jurusan`
  MODIFY `id_inisial_jurusan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inisial_kelas`
--
ALTER TABLE `inisial_kelas`
  MODIFY `id_inisial_kelas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inisial_pekerjaan`
--
ALTER TABLE `inisial_pekerjaan`
  MODIFY `id_inisial_pekerjaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inisial_penghasilan`
--
ALTER TABLE `inisial_penghasilan`
  MODIFY `id_inisial_penghasilan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inisial_sekolah`
--
ALTER TABLE `inisial_sekolah`
  MODIFY `id_inisial_sekolah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inisial_status`
--
ALTER TABLE `inisial_status`
  MODIFY `id_inisial_status` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jawaban_detail`
--
ALTER TABLE `jawaban_detail`
  MODIFY `id_jawaban_detail` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenistrening`
--
ALTER TABLE `jenistrening`
  MODIFY `id_jenistrening` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jurusan1`
--
ALTER TABLE `jurusan1`
  MODIFY `id_jurusan1` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jurusan2`
--
ALTER TABLE `jurusan2`
  MODIFY `id_jurusan2` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jurusan3`
--
ALTER TABLE `jurusan3`
  MODIFY `id_jurusan3` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jurusan4`
--
ALTER TABLE `jurusan4`
  MODIFY `id_jurusan4` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jurusan5`
--
ALTER TABLE `jurusan5`
  MODIFY `id_jurusan5` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jurusan_sekolah`
--
ALTER TABLE `jurusan_sekolah`
  MODIFY `id_jurusan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas1`
--
ALTER TABLE `kelas1`
  MODIFY `id_kelas1` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas2`
--
ALTER TABLE `kelas2`
  MODIFY `id_kelas2` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas3`
--
ALTER TABLE `kelas3`
  MODIFY `id_kelas3` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas4`
--
ALTER TABLE `kelas4`
  MODIFY `id_kelas4` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas5`
--
ALTER TABLE `kelas5`
  MODIFY `id_kelas5` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kota_asal`
--
ALTER TABLE `kota_asal`
  MODIFY `id_kota` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `maxdaerah`
--
ALTER TABLE `maxdaerah`
  MODIFY `id_maxdaerah` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maxdaerah2`
--
ALTER TABLE `maxdaerah2`
  MODIFY `id_maxdaerah2` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maxdaerah3`
--
ALTER TABLE `maxdaerah3`
  MODIFY `id_maxdaerah3` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maxdaerah4`
--
ALTER TABLE `maxdaerah4`
  MODIFY `id_maxdaerah4` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maxdaerah5`
--
ALTER TABLE `maxdaerah5`
  MODIFY `id_maxdaerah5` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maxjurusan1`
--
ALTER TABLE `maxjurusan1`
  MODIFY `id_maxjurusan1` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maxjurusan2`
--
ALTER TABLE `maxjurusan2`
  MODIFY `id_maxjurusan2` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maxjurusan3`
--
ALTER TABLE `maxjurusan3`
  MODIFY `id_maxjurusan3` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maxjurusan4`
--
ALTER TABLE `maxjurusan4`
  MODIFY `id_maxjurusan4` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maxjurusan5`
--
ALTER TABLE `maxjurusan5`
  MODIFY `id_maxjurusan5` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maxsekolah1`
--
ALTER TABLE `maxsekolah1`
  MODIFY `id_maxsekolah1` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maxsekolah2`
--
ALTER TABLE `maxsekolah2`
  MODIFY `id_maxsekolah2` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maxsekolah3`
--
ALTER TABLE `maxsekolah3`
  MODIFY `id_maxsekolah3` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maxsekolah4`
--
ALTER TABLE `maxsekolah4`
  MODIFY `id_maxsekolah4` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maxsekolah5`
--
ALTER TABLE `maxsekolah5`
  MODIFY `id_maxsekolah5` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maxusia1`
--
ALTER TABLE `maxusia1`
  MODIFY `id_maxusia1` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maxusia2`
--
ALTER TABLE `maxusia2`
  MODIFY `id_maxusia2` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maxusia3`
--
ALTER TABLE `maxusia3`
  MODIFY `id_maxusia3` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maxusia4`
--
ALTER TABLE `maxusia4`
  MODIFY `id_maxusia4` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maxusia5`
--
ALTER TABLE `maxusia5`
  MODIFY `id_maxusia5` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mindaerah1`
--
ALTER TABLE `mindaerah1`
  MODIFY `id_mindaerah1` int(45) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_profil`
--
ALTER TABLE `nilai_profil`
  MODIFY `id_nilai_profil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nilai_profil_mahasiswa`
--
ALTER TABLE `nilai_profil_mahasiswa`
  MODIFY `id_nilai_profil_mahasiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `pekerjaan1`
--
ALTER TABLE `pekerjaan1`
  MODIFY `id_pekerjaan1` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pekerjaan2`
--
ALTER TABLE `pekerjaan2`
  MODIFY `id_pekerjaan2` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pekerjaan3`
--
ALTER TABLE `pekerjaan3`
  MODIFY `id_pekerjaan3` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pekerjaan4`
--
ALTER TABLE `pekerjaan4`
  MODIFY `id_pekerjaan4` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pekerjaan5`
--
ALTER TABLE `pekerjaan5`
  MODIFY `id_pekerjaan5` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pekerjaan_mahasiswa`
--
ALTER TABLE `pekerjaan_mahasiswa`
  MODIFY `id_pekerjaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penghasilan_ortu`
--
ALTER TABLE `penghasilan_ortu`
  MODIFY `id_penghasilan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `perhitungan_centroid`
--
ALTER TABLE `perhitungan_centroid`
  MODIFY `id_perhitungan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `potongan`
--
ALTER TABLE `potongan`
  MODIFY `id_potongan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sekolah1`
--
ALTER TABLE `sekolah1`
  MODIFY `id_sekolah1` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sekolah2`
--
ALTER TABLE `sekolah2`
  MODIFY `id_sekolah2` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sekolah3`
--
ALTER TABLE `sekolah3`
  MODIFY `id_sekolah3` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sekolah4`
--
ALTER TABLE `sekolah4`
  MODIFY `id_sekolah4` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sekolah5`
--
ALTER TABLE `sekolah5`
  MODIFY `id_sekolah5` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `usia1`
--
ALTER TABLE `usia1`
  MODIFY `id_usia1` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usia2`
--
ALTER TABLE `usia2`
  MODIFY `id_usia2` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usia3`
--
ALTER TABLE `usia3`
  MODIFY `id_usia3` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usia4`
--
ALTER TABLE `usia4`
  MODIFY `id_usia4` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usia5`
--
ALTER TABLE `usia5`
  MODIFY `id_usia5` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
