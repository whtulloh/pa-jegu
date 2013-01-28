-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 28, 2013 at 05:06 
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cocobeanbags_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `diskon` int(5) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `stok` int(4) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `rating` double NOT NULL,
  `rated_by` int(11) NOT NULL,
  `sell_count` int(11) NOT NULL,
  `publish` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama`, `deskripsi`, `diskon`, `harga`, `total_harga`, `stok`, `created_date`, `updated_date`, `rating`, `rated_by`, `sell_count`, `publish`) VALUES
(1, 'Bean Bag C', 'sdfasdfasdfa', 11, 20000, 17800, 10, '2013-01-23 20:48:22', '2013-01-23 20:48:22', 5, 2, 0, 1),
(2, 'Bean Bag A', 'asdfasdfasdfa', 5, 500000, 475000, 5, '2013-01-23 20:49:00', '2013-01-23 20:49:00', 4.5, 2, 0, 1),
(3, 'Bean Bag B', 'aadsfasdfasdfa', 0, 300000, 300000, 20, '2013-01-23 20:49:24', '2013-01-23 20:49:24', 4.33, 3, 0, 1),
(4, 'Bean Bag D', 'asdfasdfasdfasdf', 10, 100000, 90000, 10, '2013-01-23 20:57:18', '2013-01-23 20:57:18', 0, 0, 0, 1),
(5, 'Nami', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed \r\nturpis turpis, eu mattis sem. Sed tristique porta cursus. Class aptent \r\ntaciti sociosqu ad litora torquent per conubia nostra, per inceptos \r\nhimenaeos.', 5, 500000, 475000, 10, '2013-01-23 21:32:40', '2013-01-23 21:32:40', 0, 0, 0, 1),
(6, 'Luffy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed \r\nturpis turpis, eu mattis sem. Sed tristique porta cursus. Class aptent \r\ntaciti sociosqu ad litora torquent per conubia nostra, per inceptos \r\nhimenaeos.', 20, 600000, 480000, 20, '2013-01-23 21:33:25', '2013-01-23 21:33:25', 0, 0, 0, 1),
(7, 'Daun', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed \r\nturpis turpis, eu mattis sem. Sed tristique porta cursus. Class aptent \r\ntaciti sociosqu ad litora torquent per conubia nostra, per inceptos \r\nhimenaeos.', 10, 400000, 360000, 0, '2013-01-23 21:34:04', '2013-01-23 21:34:04', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `barang_kategori`
--

CREATE TABLE IF NOT EXISTS `barang_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `barang_kategori`
--

INSERT INTO `barang_kategori` (`id`, `id_barang`, `id_kategori`, `created_date`, `updated_date`) VALUES
(1, 1, 1, '0000-00-00', '0000-00-00'),
(2, 1, 2, '0000-00-00', '0000-00-00'),
(3, 2, 1, '0000-00-00', '0000-00-00'),
(4, 2, 5, '0000-00-00', '0000-00-00'),
(5, 1, 1, '0000-00-00', '0000-00-00'),
(6, 2, 2, '0000-00-00', '0000-00-00'),
(7, 2, 5, '0000-00-00', '0000-00-00'),
(8, 3, 5, '0000-00-00', '0000-00-00'),
(9, 4, 2, '0000-00-00', '0000-00-00'),
(10, 4, 5, '0000-00-00', '0000-00-00'),
(11, 5, 6, '0000-00-00', '0000-00-00'),
(12, 6, 1, '0000-00-00', '0000-00-00'),
(13, 6, 6, '0000-00-00', '0000-00-00'),
(14, 7, 1, '0000-00-00', '0000-00-00'),
(15, 7, 7, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('7ae57cb9a7380314915b27f5dd70b0f9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:15.0) Gecko/20100101 Firefox/15.0.1', 1359314710, ''),
('c2c5deb431f1e546b290c6296bf4de21', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:15.0) Gecko/20100101 Firefox/15.0.1', 1359315940, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:13:"administrator";s:8:"username";s:13:"administrator";s:5:"email";s:15:"admin@admin.com";s:7:"user_id";s:1:"1";s:14:"old_last_login";s:10:"1359262620";}'),
('d32475cfedf383715006c3d4ec256eff', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:15.0) Gecko/20100101 Firefox/15.0.1', 1359312065, '');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
  `id_gambar` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `primary` int(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id_gambar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_barang`, `nama`, `thumbnail`, `primary`, `created_date`, `updated_date`) VALUES
(1, 1, '1.jpg', '1_thumb.jpg', 0, '2013-01-23 20:36:42', '2013-01-23 20:36:42'),
(2, 2, '2.jpg', '2_thumb.jpg', 0, '2013-01-23 20:37:16', '2013-01-23 20:37:16'),
(3, 1, '11.jpg', '11_thumb.jpg', 1, '2013-01-23 20:48:22', '2013-01-23 20:48:22'),
(4, 2, '21.jpg', '21_thumb.jpg', 1, '2013-01-23 20:49:00', '2013-01-23 20:49:00'),
(5, 3, '3.jpg', '3_thumb.jpg', 1, '2013-01-23 20:49:24', '2013-01-23 20:49:24'),
(6, 4, '4.jpg', '4_thumb.jpg', 1, '2013-01-23 20:57:19', '2013-01-23 20:57:19'),
(7, 4, '41.jpg', '41_thumb.jpg', 0, '2013-01-23 20:57:19', '2013-01-23 20:57:19'),
(8, 5, '5.jpg', '5_thumb.jpg', 1, '2013-01-23 21:32:41', '2013-01-23 21:32:41'),
(9, 6, '6.jpg', '6_thumb.jpg', 1, '2013-01-23 21:33:26', '2013-01-23 21:33:26'),
(10, 7, '7.jpg', '7_thumb.jpg', 1, '2013-01-23 21:34:05', '2013-01-23 21:34:05');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(0, 'owner', 'Pemilik Usaha'),
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `level` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`, `level`, `parent_id`, `deskripsi`, `created_date`, `updated_date`) VALUES
(1, 'Bean Bag', 0, 0, 'Tipe Barang Bean Bag', '2013-01-27', '2013-01-27'),
(2, 'Carpet', 0, 0, 'Tipe Barang Karpet', '2013-01-27', '2013-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `login_attempts`
--


-- --------------------------------------------------------

--
-- Table structure for table `ukuran_barang`
--

CREATE TABLE IF NOT EXISTS `ukuran_barang` (
  `id_barang` int(11) NOT NULL,
  `lebar` int(11) NOT NULL,
  `panjang` int(11) NOT NULL,
  `tinggi` int(11) NOT NULL,
  `berat` double NOT NULL,
  KEY `id_barang` (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukuran_barang`
--

INSERT INTO `ukuran_barang` (`id_barang`, `lebar`, `panjang`, `tinggi`, `berat`) VALUES
(1, 45, 45, 45, 2),
(2, 50, 50, 50, 3.5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '\0\0', 'administrator', '$2a$08$SecrWCYNWAc/azsxUE4cCu4vpNAiceeCpBNWCYbvo29qLTfsIBWvq', '9462e8eee0', 'admin@admin.com', '', NULL, NULL, 'e88cddc73b508b39f02123389a4c32ca5b99f5b6', 1268889823, 1359315325, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '\0\0', 'cobacoba', '$2a$08$8CvxyrGqYStQ96eGUdGPI.XWp86Dv24rw/MnJ8dO0Y/f.llpdxWGG', '88bb8de088', 'coba@coba.com', '9c70f5e29df7dd43dd4c80d9a6d01724b63bbd82', NULL, NULL, NULL, 1357719344, 1357719344, 0, 'Coba', 'Bacoba', NULL, '12345'),
(3, '\0\0', 'lumping', '$2a$08$VtvVsm2AGcxwvq0j6VEp/e8F5Y/eTKmIYD/hDFOm2iNV6OD2MQAqq', 'b70c14b4eb', 'lumping@mail.com', NULL, NULL, NULL, NULL, 1357722661, 1357722661, 1, 'Kuda', 'Lumping', NULL, '1234567'),
(4, '\0\0', 'mimin', '$2a$08$3oLp2Ir8fLz7pRRibdoKUuR.lvump2NfYbZIb4OUn3K03H8ukxFoe', '26b4ec7ee7', 'mimin@mimin.com', NULL, NULL, NULL, NULL, 1357722887, 1357782872, 1, 'mimin', 'mimin', NULL, '12345667'),
(5, '\0\0', 'pejuang', '$2a$08$O/v70cOe0KgJME9YPt25IOaDqJnf/y0MDWK9uOzkjxMCZeFUC52rK', 'ed9423add5', 'pejuang@mail.com', NULL, NULL, NULL, NULL, 1357782347, 1357782775, 1, 'Pejuang', 'EmpatLima', NULL, '2345676');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 3, 2),
(6, 4, 1),
(7, 5, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ukuran_barang`
--
ALTER TABLE `ukuran_barang`
  ADD CONSTRAINT `ukuran_barang_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE;
