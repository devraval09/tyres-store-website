-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 13, 2023 at 12:15 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

DROP TABLE IF EXISTS `add_to_cart`;
CREATE TABLE IF NOT EXISTS `add_to_cart` (
  `atc_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `product_id` int(5) NOT NULL,
  PRIMARY KEY (`atc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_to_cart`
--

INSERT INTO `add_to_cart` (`atc_id`, `user_id`, `qty`, `product_id`) VALUES
(1, 1, '1', 1),
(2, 4, '1', 3),
(3, 9, '1', 6),
(4, 8, '1', 10),
(5, 2, '1', 11);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ad_id` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `email`, `password`) VALUES
(1, 'suhasi@gmail.com', '123456'),
(2, 'kavan@gmail.com', '123456'),
(3, 'gunjan@gmail.com', '123456'),
(4, 'admn@demo.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `com_id` int(5) NOT NULL AUTO_INCREMENT,
  `comp_name` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`com_id`, `comp_name`, `logo`) VALUES
(1, 'Apple', 'icon/'),
(2, 'Samsung', 'samsung.jpg'),
(3, 'one +', 'icon/');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(5) NOT NULL AUTO_INCREMENT,
  `product_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_id`, `user_id`, `qty`, `name`, `email`, `address`, `city`) VALUES
(1, 2, 4, '1', 'davda suhasi', 'suhasidavda@gmail.com', 'dajipara,luharseri,wadhwancity', 'surendranagar'),
(2, 6, 2, '1', 'vadhecha kavan', 'kavan@gmail.com', 'dalmil road,surendranagar', 'ahemdabad'),
(3, 5, 1, '1', 'parmar utsav', 'utsav7@gmail.com', 'satyam socity,udhna,surat', 'surat'),
(4, 11, 9, '1', 'pithva meet', 'meet@gmail.com', 'shivam socity,ahemdabad', 'vadodra');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `photo` mediumtext NOT NULL,
  `com_id` int(5) NOT NULL,
  `detail` mediumtext NOT NULL,
  `price` varchar(10) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `title`, `photo`, `com_id`, `detail`, `price`) VALUES
(2, 'Apple IPhone XR', 'product/i phone xr.jpg', 1, '64 GB ROM\r\n15.49 cm (6.1 inch) Display\r\n12MP Rear Camera | 7MP Front Camera\r\nA12 Bionic Chip Processor\r\niOS 13 Compatible', '36999'),
(3, 'Apple IPhone XS Max', 'product/i phone xs.jpg', 1, '64 GB ROM\r\n16.51 cm (6.5 inch) Super Retina HD Display\r\n12MP + 12MP | 7MP Front Camera\r\nA12 Bionic Chip Processor\r\niOS 13 Compatible', '1,09,990'),
(4, 'Apple IPhone 13 Mini', 'product/i phone 13mini.jpg', 1, '256 GB ROM\r\n13.72 cm (5.4 inch) Super Retina XDR Display\r\n12MP + 12MP | 12MP Front Camera\r\nA15 Bionic Chip Processor', '71,999'),
(5, 'Apple 14 Plus', 'product/i phone 14 plus.jpg', 1, '128 GB ROM\r\n17.02 cm (6.7 inch) Super Retina XDR Display\r\n12MP + 12MP | 12MP Front Camera\r\nA15 Bionic Chip, 6 Core Processor Processor', '76,999'),
(7, 'SAMSUNG S22 Plus 5G', 'product/samsung S22 plus.jpg', 2, '8 GB RAM | 128 GB ROM\r\n16.76 cm (6.6 inch) Full HD+ Display\r\n50MP + 12MP + 10MP | 10MP Front Camera\r\n4500 mAh Lithium-ion Battery\r\nQualcomm Snapdragon 8 Gen 1 Processor\r\n1 Year Manufacturer Warranty for Device and 6 Months Manufacturer Warranty for In-Box Accessories', '59,999'),
(6, 'samsung S23utra', 'product/samsung s23 ultra.jpg', 2, '12 GB RAM | 512 GB ROM\r\n17.27 cm (6.8 inch) Quad HD+ Display\r\n200MP + 10MP + 12MP + 10MP | 12MP Front Camera\r\n5000 mAh Battery\r\nQualcomm Snapdragon 8 Gen 2 Processor\r\n1 Year Manufacturer Warranty for Device and 6 Months Manufacturer Warranty for In-Box Accessories', '1,24,999'),
(8, 'SAMSUNG Z Fold 5 ', 'product/samsung Z fold 5.jpg', 2, '12 GB RAM | 512 GB ROM\r\n15.75 cm (6.2 inch) Display\r\n50MP + 12MP + 10MP\r\n4400 mAh Battery\r\nSnapdragon 8 Gen 2 Processor\r\n1 Year Manufacturer Warranty for Device and 6 Months Manufacturer Warranty for In-Box Accessories', '1,64,999'),
(9, 'SAMSUNG Z Flip 5 ', 'product/samsung Z flip 5.jpg', 2, '8 GB RAM | 256 GB ROM\r\n17.02 cm (6.7 inch) Display\r\n12MP + 12MP | 10MP Front Camera\r\n3700 mAh Battery\r\nSnapdragon 8 Gen 2 Processor\r\n1 Year Manufacturer Warranty for Device and 6 Months Manufacturer Warranty for In-Box Accessories', '99,999'),
(10, 'SAMSUNG S21 FE 5G', 'product/samsng s21 fe 5g.jpg', 2, '8 GB RAM | 128 GB ROM\r\n16.26 cm (6.4 inch) Full HD+ Display\r\n12MP + 12MP + 8MP (OIS) | 32MP Front Camera\r\n4500 mAh Lithium-ion Battery\r\n1 Year Manufacturer Warranty for Device and 6 Months Manufacturer Warranty for In-Box Accessories', '39,999'),
(11, 'OnePlus 11 5G', 'product/one plus 11 5g.jpg', 3, '16 GB RAM | 256 GB ROM\r\n17.02 cm (6.7 inch) Display\r\n50MP Rear Camera\r\n5000 mAh Battery\r\ndomestic warranty of 12 months on phone & 6 months on accessories', '60,980'),
(12, 'OnePlus 10R 5G', 'product/oneplus 10r 5g.jpg', 3, '12 GB RAM | 256 GB ROM\r\n17.02 cm (6.7 inch) Display\r\n50MP Rear Camera\r\n5000 mAh Battery\r\n12 months', '36,900'),
(13, 'OnePlus Nord 3 ', 'product/oneplus nord 3.jpg', 3, '16 GB RAM | 256 GB ROM\r\n17.12 cm (6.74 inch) Display\r\n50MP Rear Camera\r\n5000 mAh Battery\r\nDomestic 1 Year of Device & 6 Months for In-Box Accessories', '37,380'),
(14, 'OnePlus 9 Pro 5G', 'product/one plus 9 pro 5g.jpg', 3, '8 GB RAM | 128 GB ROM\r\n17.02 cm (6.7 inch) Display\r\n48MP Rear Camera\r\n4500 mAh Battery\r\n1 Year Manufacturer Warranty for Handset and 6 Months Warranty for In the Box Accessories', '49,999'),
(15, 'OnePlus Nord CE 3 Lite', 'product/oneplus  nord CE 3 lite.jpg', 3, '8 GB RAM | 128 GB ROM\r\n17.07 cm (6.72 inch) Display\r\n108MP Rear Camera\r\n5000 mAh Battery\r\nDomestic Warranty of 12 months on phone & 6 months on accessories\r\n', '19,999');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `r_id` int(5) NOT NULL AUTO_INCREMENT,
  `product_id` int(5) NOT NULL,
  `msg` mediumtext NOT NULL,
  `date` varchar(50) NOT NULL,
  `user_id` int(5) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`r_id`, `product_id`, `msg`, `date`, `user_id`) VALUES
(1, 1, 'The camera is great,the display is glorious,and perfomance and battery life are up there with the best', '', 2),
(2, 6, 'Brilliant display\r\nBuilt-in s pen\r\nGreat performance\r\nImproved cameras\r\nLong battery life', '', 1),
(3, 8, 'NFC and 5G enabled smartphone.\r\n3X optical zoom and ultrawide cameras are present.\r\nstereo speakers are present.\r\nthe latest android 13 os with one5.1.1 support.\r\n', '', 5),
(4, 4, 'minor update over i phone 12  mini.\r\nno high refresh rate.\r\nsmaller notch is not small.\r\nthe charger is not bundled.', '', 7),
(5, 11, 'no ip rating.\r\nmacro shooting can be cumbersome.\r\ncan throttle under load', '', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `contact_no`, `address`) VALUES
(1, 'davda suhasi', 'suhasi11@gmail.com', '123456', '9979001572', 'dajipara,luharseri,wadhwancity,surendranagar'),
(2, 'vadecha kavan', 'kavan88@gmail.com', '123456', '9824921402', 'darmil road,surendreanagar'),
(3, 'chauhan gunjan', 'gunjan18@gmail.com', '123456', '9425086199', 'sarda socity,near bus station,surendranagar'),
(4, 'parmar utsav', 'utsav7@gmail.com', '123456', '8140611118', 'satyam socity,udhna,surat'),
(5, 'davda nidhi', 'nidhi@gmail.com', '123456', '9279001572', 'luharseri,surendranagar'),
(6, 'vadecha kirit', 'kirirt@gmail.com', '123456', '9378981402', 'kunthunath dearasar,surendreanagar'),
(7, 'rana vibhu', 'vibhu@gmail.com', '123456', '9425086567', 'bus stand,surendranagar'),
(8, 'parmar yash', 'yash@gmail.com', '123456', '9762711118', 'patravari,surat'),
(9, 'pithva meet', 'meet@gmail.com', '123456', '9765686567', 'bhaktinanadan circle,surendranagar'),
(10, 'pithva karan', 'karan@gmail.com', '123456', '9768765676', 'bramhakumari circle,surendranagar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
