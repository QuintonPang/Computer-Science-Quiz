-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2005 at 03:12 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuizsainskomputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `idguru` int(10) NOT NULL,
  `katalaluan` varchar(100) NOT NULL,
  `namaguru` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`idguru`, `katalaluan`, `namaguru`) VALUES
(1, 'wfa', 'afes'),
(2, 'oadjewi', 'ka');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `idkelas` int(10) NOT NULL,
  `namakelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`idkelas`, `namakelas`) VALUES
(1, '5 sapphire'),
(2, '5 ruby');

-- --------------------------------------------------------

--
-- Table structure for table `kuiz`
--

CREATE TABLE `kuiz` (
  `idkuiz` int(10) NOT NULL,
  `namakuiz` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuiz`
--

INSERT INTO `kuiz` (`idkuiz`, `namakuiz`) VALUES
(1, 'htmll'),
(2, 'phpp');

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `idmurid` int(10) NOT NULL,
  `katalaluan` varchar(100) NOT NULL,
  `namamurid` varchar(1000) NOT NULL,
  `idkelas` varchar(100) NOT NULL,
  `nokp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`idmurid`, `katalaluan`, `namamurid`, `idkelas`, `nokp`) VALUES
(1, 'naspfnro', 'quinton', '1', '0'),
(2, 'nodwadw', 'ali', '1', '0'),
(3, 'cakc', 'abu', '1', '0'),
(4, 'dawajdjwp', 'adkjjd', '1', '0'),
(5, 'wowwq', 'ojddqd', '2', '2147483647'),
(6, 'ewifewf', 'test', '2', '2147483647'),
(7, 'qqw', 'test', '2', '2147483647'),
(8, 'qwqad', 'test', '2', '2147483647'),
(9, 'l;amd', 'qrljdQ', '1', '2147483647'),
(10, 'swss', 'wefDE', '1', '2147483647'),
(11, 'sew', 'erferq', '2', '2147483647'),
(12, 'ascjsja', 'qiwqjwo', '2', '2147483647'),
(13, 'askclksa', 'dwqjd', '1', '2147483647');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `idpenilaian` int(10) NOT NULL,
  `peratus` int(5) NOT NULL,
  `idkuiz` int(3) NOT NULL,
  `idmurid` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`idpenilaian`, `peratus`, `idkuiz`, `idmurid`) VALUES
(2, 100, 1, 0),
(3, 50, 1, 0),
(4, 50, 1, 1),
(5, 50, 1, 2),
(6, 50, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `soalan`
--

CREATE TABLE `soalan` (
  `idsoalan` int(10) NOT NULL,
  `soalan` longtext NOT NULL,
  `jawapan` longtext NOT NULL,
  `idguru` int(10) NOT NULL,
  `idkuiz` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soalan`
--

INSERT INTO `soalan` (`idsoalan`, `soalan`, `jawapan`, `idguru`, `idkuiz`) VALUES
(4, 'rsmfo', 'hello', 2, 1),
(5, 'oifeasi', 'hello', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`idguru`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indexes for table `kuiz`
--
ALTER TABLE `kuiz`
  ADD PRIMARY KEY (`idkuiz`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`idmurid`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`idpenilaian`);

--
-- Indexes for table `soalan`
--
ALTER TABLE `soalan`
  ADD PRIMARY KEY (`idsoalan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `idguru` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `idkelas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kuiz`
--
ALTER TABLE `kuiz`
  MODIFY `idkuiz` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `murid`
--
ALTER TABLE `murid`
  MODIFY `idmurid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `idpenilaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `soalan`
--
ALTER TABLE `soalan`
  MODIFY `idsoalan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
