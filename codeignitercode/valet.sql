-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2016 at 01:20 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `valet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `name`, `image`, `username`, `password`, `last_login`, `created`) VALUES
(10, 'admin@gmail.com', 'admin', '', 'admin', '7d18a1099cc7585e5bf7721152a49c53', 0, 1374328474),
(11, 'dhakalneil@gmail.com', 'Neil', 'IMG_7338.JPG', 'neil', 'a68287fce2224e1c36c44b135fab7a2d', 0, 1395643429),
(12, 'binu@gmail.com', 'Binod', 'Binayak_Shrestha_(Jazz).jpg', 'Binod', 'e5616928ded572238a0ab00dfe4b16b0', 0, 1395643509),
(13, 'shree@gmail.com', 'Shree Raj Karki', 'shreeraj_karki.JPG', 'shree', 'd13b184586a55e4c0110f9fcd8da25bf', 0, 1395643376);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cars`
--

DROP TABLE IF EXISTS `tbl_cars`;
CREATE TABLE IF NOT EXISTS `tbl_cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `made` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `plate_number` varchar(255) NOT NULL,
  `unite_no` varchar(255) NOT NULL,
  `parking_spot` varchar(255) NOT NULL,
  `visitor` int(11) NOT NULL DEFAULT '0' COMMENT '1=visitor; 0=non-visitor',
  `created_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cars`
--

INSERT INTO `tbl_cars` (`id`, `made`, `model`, `color`, `plate_number`, `unite_no`, `parking_spot`, `visitor`, `created_date`) VALUES
(1, 'Toyota', 'Corolla LX', 'Red', 'CFX 285', '834', '555', 0, ''),
(2, 'Ford', 'Escape', 'Black', 'JA 20155', '837', '8263', 1, ''),
(3, 'Toyota', 'Escape', 'White', 'JA 20192', '738', '7349', 0, ''),
(4, 'Toyotaa', 'Corolla LX', 'Blue', 'JA 20172', '834', '20012', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parking`
--

DROP TABLE IF EXISTS `tbl_parking`;
CREATE TABLE IF NOT EXISTS `tbl_parking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `car_id` varchar(255) NOT NULL,
  `ticket_no` varchar(255) NOT NULL,
  `parking_spot` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_requests`
--

DROP TABLE IF EXISTS `tbl_requests`;
CREATE TABLE IF NOT EXISTS `tbl_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `car_id` varchar(255) NOT NULL,
  `request_date` varchar(255) NOT NULL,
  `request_time` varchar(255) NOT NULL,
  `request_timestamp` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0=requested;1=accept; 2=cancle',
  `updated_date_time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_requests`
--

INSERT INTO `tbl_requests` (`id`, `car_id`, `request_date`, `request_time`, `request_timestamp`, `status`, `updated_date_time`) VALUES
(1, '1', 'November 8, 2016', '8:54 am', '1478595288', 1, '1478596659'),
(2, '3', 'November 8, 2016', '9:03 am', '1478595837', 0, '1478597855'),
(3, '2', '', '', '', 1, '1478616590');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unite_no` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `unite_no`, `password`, `name`, `email`, `contact_no`, `created_date`) VALUES
(1, '536', '9d942eba7b252c3e0f9157fa0bae6efa', 'Nil Mani Dhakal', 'dhakalneil@gmail.com', '9843930701', ''),
(2, '738', 'bd26f2d60280db750b6331d34effcc1d', 'Shailesh Lamichhane', 'sanushailesh@gmail.com', '32454234234', ''),
(3, '834', '5641c3df5e6cfbb3fdb036fe0081df4e', 'Bishwambar Khadka', 'bishwambar@gmail.com', '83272392', ''),
(4, '837', '539a193602d43edc7a5ecd45fa43734d', 'Bimal Kharel', 'bimal@gmail.com', '932832932', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
