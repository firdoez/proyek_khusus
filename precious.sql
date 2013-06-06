-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 06, 2013 at 06:24 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `precious`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `username`, `password`) VALUES
(1, 'daus', 'daus@a.aaaa', 'admin', 'admin'),
(2, 'Agus', 'zeo.shaman@yahoo.com', 'shaman', 'shaman'),
(3, 'o', 'o', 'o', 'o'),
(4, 'idus', 'idus', 'idus', 'idus'),
(5, 'mujib', 'mujib', 'mujib', 'mujib');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(26) NOT NULL,
  `email` varchar(26) NOT NULL,
  `web` varchar(26) NOT NULL,
  `komentar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `web`, `komentar`) VALUES
(20, '', '', '', ''),
(19, '', '', '', ''),
(15, 'aa', '', '', ''),
(14, 'a', '', '', ''),
(13, 'a', '', '', ''),
(12, 'a', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `kontak` varchar(25) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `alamat`, `kontak`, `jenis`, `detail`) VALUES
(3, 'a', 'as', 'asd', 'Photo', 'asdasd'),
(2, 'ahmad', 'jogja', '081238', 'PhotoVideo', 'acara nikahan');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(25) NOT NULL,
  `isi` text NOT NULL,
  `harga` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `judul`, `isi`, `harga`) VALUES
(1, 'Paket Prewedding', 'Photo 25 Gaya\r\nCetak 10R, 12 R, 20 R', 'Rp. 2.000.000,00'),
(3, 'aad', 'aaad', 'aaad');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(25) NOT NULL,
  `isi` text NOT NULL,
  `harga` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `judul`, `isi`, `harga`) VALUES
(1, 'video1', 'isi1', 'Rp. 2.500.000,00'),
(2, 'Video prewedd', 'aaa\r\naaa\r\naaa', 'Rp. 900.000,00'),
(3, 'asdf', 'asdf', 'asdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
