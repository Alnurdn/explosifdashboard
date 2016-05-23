-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2015 at 06:01 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `explosif`
--

-- --------------------------------------------------------

--
-- Table structure for table `bisnis`
--

CREATE TABLE IF NOT EXISTS `bisnis` (
  `tim` varchar(30) DEFAULT NULL,
  `ketua` varchar(50) DEFAULT NULL,
  `anggota1` varchar(50) DEFAULT NULL,
  `anggota2` varchar(50) DEFAULT NULL,
  `univ` varchar(30) DEFAULT NULL,
  `cp` varchar(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `id` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bisnis`
--

INSERT INTO `bisnis` (`tim`, `ketua`, `anggota1`, `anggota2`, `univ`, `cp`, `email`, `id`) VALUES
('ubur2', 'ketua', 'satu', 'dua', 'univ', 'cp', 'email', 3),
('tim', 'ket', '1', '22', 'uni2', 'cp', 'bit_chocovanila@yaho', 4);

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE IF NOT EXISTS `software` (
  `tim` varchar(30) DEFAULT NULL,
  `ketua` varchar(50) DEFAULT NULL,
  `anggota1` varchar(50) DEFAULT NULL,
  `anggota2` varchar(50) DEFAULT NULL,
  `anggota3` varchar(50) DEFAULT NULL,
  `univ` varchar(30) DEFAULT NULL,
  `cp` varchar(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `id` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`tim`, `ketua`, `anggota1`, `anggota2`, `anggota3`, `univ`, `cp`, `email`, `id`) VALUES
('tim', 'nama2', '12', '2', '32', 'uni', '444444', 'andhikarosyadi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tubes`
--

CREATE TABLE IF NOT EXISTS `tubes` (
  `matkul` varchar(10) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `tim` varchar(30) DEFAULT NULL,
  `ketua` varchar(50) DEFAULT NULL,
  `nimketua` varchar(10) DEFAULT NULL,
  `anggota1` varchar(50) DEFAULT NULL,
  `anggota2` varchar(50) DEFAULT NULL,
  `anggota3` varchar(50) DEFAULT NULL,
  `nimanggota1` varchar(10) DEFAULT NULL,
  `nimanggota2` varchar(10) DEFAULT NULL,
  `nimanggota3` varchar(10) DEFAULT NULL,
  `cp` varchar(15) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tubes`
--

INSERT INTO `tubes` (`matkul`, `kelas`, `tim`, `ketua`, `nimketua`, `anggota1`, `anggota2`, `anggota3`, `nimanggota1`, `nimanggota2`, `nimanggota3`, `cp`, `email`, `id`) VALUES
(NULL, 'IF 38-02', 'kura2 ninja', 'sapi', '1111', 'kucing', 'kelinci', 'ayam', '222', '333', '444', '90000', 'bla@bla.bla', 1),
(NULL, 'IF 37-07', 'meong', 'moo', '222', 'ciit', 'gukguk', 'ssst', '111', '22', '44', '22', 'com@com.com', 2),
('PBO', 'IF 37-07', 'meong', 'moo', '222', 'ciit', 'gukguk', 'ssst', '111', '22', '44', '22', 'com@com.com', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
