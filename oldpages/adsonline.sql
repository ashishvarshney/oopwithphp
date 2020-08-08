-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 06, 2020 at 12:59 PM
-- Server version: 5.7.26
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adsonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads_order_list`
--

DROP TABLE IF EXISTS `ads_order_list`;
CREATE TABLE IF NOT EXISTS `ads_order_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_id` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_json` text,
  `payment_mode` varchar(255) DEFAULT NULL,
  `cartamount` varchar(100) DEFAULT NULL,
  `payment_amount` varchar(100) DEFAULT NULL,
  `invoice_date` varchar(100) DEFAULT NULL,
  `status` enum('A','I') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads_order_list`
--

INSERT INTO `ads_order_list` (`id`, `invoice_id`, `user_id`, `order_json`, `payment_mode`, `cartamount`, `payment_amount`, `invoice_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'INV1593107201', 4, '[{\"product_id\":\"1\",\"product_name\":\"BL Bold Listings\",\"chk_category_book\":\"test\",\"chk_category_app\":\"Acoountant\",\"regular_product_price\":\"12.00\",\"product_price\":\"12.00\"},{\"product_id\":\"2\",\"product_name\":\"SBL Super Bold Listing\",\"chk_category_book\":\"Plumbing Contractors\",\"chk_category_app\":\"Plumbing Contractors\",\"regular_product_price\":\"18.00\",\"product_price\":\"18.00\"},{\"product_id\":\"8\",\"product_name\":\"OBC - Outside Back Cover \",\"chk_category_book\":\"Acoountant\",\"chk_category_app\":\"Acoountant\",\"regular_product_price\":\"450.00\",\"product_price\":\"450.00\"},{\"product_id\":\"6\",\"product_name\":\"SBL Super Bold Listing \",\"chk_category_book\":\"Acoountant\",\"chk_category_app\":\"Repair\",\"regular_product_price\":\"18.00\",\"product_price\":\"18.00\"}]', 'nomoney', '498', '6096', '2020-06-25', 'A', '2020-06-25 00:00:00', '2020-06-25 17:46:41'),
(2, 'INV1593110163', 7, '[{\"product_id\":\"1\",\"product_name\":\"BL Bold Listings                 \",\"chk_category_book\":\"Advertising Promotional Products\",\"chk_category_app\":\"Advertising Promotional Products\",\"regular_product_price\":\"12\",\"product_price\":\"12\"},{\"product_id\":\"20\",\"product_name\":\"OBC - Outside Back Cover      \",\"chk_category_book\":\"Accountants\",\"chk_category_app\":\"Accountants\",\"regular_product_price\":\"500\",\"product_price\":\"500\"}]', 'third', '512', '6144', '2020-06-25', 'A', '2020-06-25 00:00:00', '2020-06-25 18:36:03'),
(3, 'INV1593349675', 5, '[{\"product_id\":\"1\",\"product_name\":\"BL Bold Listings                 \",\"chk_category_book\":\"Advertising Promotional Products\",\"chk_category_app\":\"Advertising Promotional Products\",\"regular_product_price\":\"12\",\"product_price\":\"12\"},{\"product_id\":\"11\",\"product_name\":\"FP - Full Page (RASBL AD IN APP)    \",\"chk_category_book\":\"Appraisers\",\"chk_category_app\":\"Appraisers\",\"regular_product_price\":\"190\",\"product_price\":\"190\"},{\"product_id\":\"20\",\"product_name\":\"OBC - Outside Back Cover      \",\"chk_category_book\":\"Acupuncture\",\"chk_category_app\":\"Acupuncture\",\"regular_product_price\":\"500\",\"product_price\":\"500\"}]', 'monthly', '702', '8520', '2020-06-28', 'A', '2020-06-28 00:00:00', '2020-06-28 13:07:55'),
(4, 'INV1593442734', 7, '[{\"product_id\":\"6\",\"product_name\":\"TM Trade Mark  TM Comp    \",\"chk_category_book\":\"Air Conditioning Contractors\",\"chk_category_app\":\"Air Conditioning Contractors\",\"regular_product_price\":\"14\",\"product_price\":\"14\"},{\"product_id\":\"7\",\"product_name\":\"QC - Quarter Column  (RASBL AD IN APP)    \",\"chk_category_book\":\"Air Conditioning Contractors\",\"chk_category_app\":\"Air Conditioning Contractors\",\"regular_product_price\":\"45\",\"product_price\":\"45\"},{\"product_id\":\"6\",\"product_name\":\"TM Trade Mark  TM Comp    \",\"chk_category_book\":\"Heating Contractors\",\"chk_category_app\":\"Heating Contractors\",\"regular_product_price\":\"14\",\"product_price\":\"14\"},{\"product_id\":\"7\",\"product_name\":\"QC - Quarter Column  (RASBL AD IN APP)    \",\"chk_category_book\":\"Heating Contractors\",\"chk_category_app\":\"Heating Contractors\",\"regular_product_price\":\"45\",\"product_price\":\"45\"},{\"product_id\":\"1\",\"product_name\":\"BL Bold Listings                 \",\"chk_category_book\":\"Furnaces Heat\",\"chk_category_app\":\"Furnaces Heat\",\"regular_product_price\":\"12\",\"product_price\":\"12\"}]', 'third', '130', '1560', '2020-06-29', 'A', '2020-06-29 00:00:00', '2020-06-29 14:58:54'),
(5, 'INV1593443661', 7, '[{\"product_id\":\"6\",\"product_name\":\"TM Trade Mark  TM Comp    \",\"chk_category_book\":\"Air Conditioning Contractors\",\"chk_category_app\":\"\",\"regular_product_price\":\"14\",\"product_price\":\"14\"},{\"product_id\":\"9\",\"product_name\":\"HP - Half Page (RASBL AD IN APP)        \",\"chk_category_book\":\"Air Conditioning Contractors\",\"chk_category_app\":\"\",\"regular_product_price\":\"100\",\"product_price\":\"100\"},{\"product_id\":\"6\",\"product_name\":\"TM Trade Mark  TM Comp    \",\"chk_category_book\":\"Air Conditioning Contractors\",\"chk_category_app\":\"\",\"regular_product_price\":\"14\",\"product_price\":\"14\"},{\"product_id\":\"6\",\"product_name\":\"TM Trade Mark  TM Comp    \",\"chk_category_book\":\"Air Conditioning Contractors\",\"chk_category_app\":\"\",\"regular_product_price\":\"14\",\"product_price\":\"14\"},{\"product_id\":\"6\",\"product_name\":\"TM Trade Mark  TM Comp    \",\"chk_category_book\":\"Air Conditioning Contractors\",\"chk_category_app\":\"\",\"regular_product_price\":\"14\",\"product_price\":\"14\"}]', '', '156', '', '2020-06-29', 'A', '2020-06-29 00:00:00', '2020-06-29 15:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `ads_type_lists`
--

DROP TABLE IF EXISTS `ads_type_lists`;
CREATE TABLE IF NOT EXISTS `ads_type_lists` (
  `id` int(11) NOT NULL,
  `ad_title` varchar(255) DEFAULT NULL,
  `ad_price` varchar(100) DEFAULT NULL,
  `ad_type` enum('Book','App') DEFAULT NULL,
  `ad_format` enum('Regular','Premium') NOT NULL,
  `status` enum('A','I') NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads_type_lists`
--

INSERT INTO `ads_type_lists` (`id`, `ad_title`, `ad_price`, `ad_type`, `ad_format`, `status`, `updated_at`) VALUES
(1, 'BL Bold Listings                 ', '12', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(2, 'SBL Super Bold Listing', '18', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(3, '2HS 1-Inch Ad ', '24', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(4, '3HS 1 1-2 Inch Ad ', '28', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(5, '4HS 2 Inch Ad    ', '32', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(6, 'TM Trade Mark  TM Comp    ', '14', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(7, 'QC - Quarter Column  (RASBL AD IN APP)    ', '45', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(8, 'DQC - Double Quarter (RASBL AD IN APP)                    ', '65', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(9, 'HP - Half Page (RASBL AD IN APP)        ', '100', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(10, 'TP - 3/4 Page (RASBL AD IN APP)     ', '150', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(11, 'FP - Full Page (RASBL AD IN APP)    ', '190', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(12, 'BL Bold Listings', '12', 'App', 'Regular', 'A', '0000-00-00 00:00:00'),
(13, 'SBL Super Bold Listing ', '18', 'App', 'Regular', 'A', '0000-00-00 00:00:00'),
(14, 'TM Trade Mark  TM Comped  TBL', '14', 'App', 'Regular', 'A', '0000-00-00 00:00:00'),
(15, 'FS - Full Screen Ad', '45', 'App', 'Regular', 'A', '0000-00-00 00:00:00'),
(16, 'B-H Banner Ad under the heading of choice', '90', 'App', 'Regular', 'A', '0000-00-00 00:00:00'),
(17, 'B-MS - Banner Ad on the main Screen', '150', 'App', 'Regular', 'A', '0000-00-00 00:00:00'),
(18, 'VC - Video Commerical Available with a FS', '10', 'App', 'Regular', 'A', '0000-00-00 00:00:00'),
(19, 'SI-Special Insert Ad Available with a FS', '10', 'App', 'Regular', 'A', '0000-00-00 00:00:00'),
(20, 'OBC - Outside Back Cover      ', '500', 'Book', 'Premium', 'A', '0000-00-00 00:00:00'),
(21, 'HOBC - Half Outside Back Cover  ', '300', 'Book', 'Premium', 'A', '0000-00-00 00:00:00'),
(22, 'IBC - Inside Back Cover                 ', '200', 'Book', 'Premium', 'A', '0000-00-00 00:00:00'),
(23, 'HIBC - Half Inside Back Cover                ', '125', 'Book', 'Premium', 'A', '0000-00-00 00:00:00'),
(24, 'IFC - Inside Front Cover                        ', '400', 'Book', 'Premium', 'A', '0000-00-00 00:00:00'),
(25, 'HIFC - Half Inside Front Cover         ', '225', 'Book', 'Premium', 'A', '0000-00-00 00:00:00'),
(26, 'FC - Front Cover                        ', '350', 'Book', 'Premium', 'A', '0000-00-00 00:00:00'),
(27, 'EPHP - Emergency Page Half Page        ', '175', 'Book', 'Premium', 'A', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kc_categories`
--

DROP TABLE IF EXISTS `kc_categories`;
CREATE TABLE IF NOT EXISTS `kc_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(200) NOT NULL,
  `categoryDesc` varchar(500) NOT NULL,
  `categoryIconUrl` varchar(500) NOT NULL,
  `categorySetId` int(11) NOT NULL,
  `category_keywords` text,
  `status` enum('A','I') NOT NULL,
  `createdDate` date DEFAULT NULL,
  `updatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=382 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kc_categories`
--

INSERT INTO `kc_categories` (`id`, `categoryName`, `categoryDesc`, `categoryIconUrl`, `categorySetId`, `category_keywords`, `status`, `createdDate`, `updatedDate`) VALUES
(1, 'Abstractors', 'Abstractor', 'http://rdlincoln.us/eladmin/images/4566Abstracters.jpg', 1, 'Abstractor', 'A', '2020-01-16', '2020-01-27 12:12:23'),
(2, 'Accountants', 'Accountants', 'http://rdlincoln.us/eladmin/images/1495accountant.jpg', 17, 'Accountant,Bean counter', 'A', '2019-08-30', '2020-01-24 08:20:27'),
(3, 'Acupuncture', 'Acupuncture', 'http://rdlincoln.us/eladmin/images/6157acupunturists.jpg', 17, 'acupuncturist', 'A', '2020-01-24', '2020-01-24 08:27:02'),
(4, 'Advertising - Directories', 'Advertising - Directories', 'http://rdlincoln.us/eladmin/images/7970Advertising Directory & Guide.jpg', 17, 'advertise', 'A', '2019-09-04', '2020-01-27 11:55:18'),
(5, 'Advertising Promotional Products', 'Advertising Promotional Products', 'http://rdlincoln.us/eladmin/images/1239Advertising Promotional.jpg', 19, 'promotions', 'A', '2019-09-04', '2020-01-24 08:23:37'),
(6, 'Air Conditioning Contractors', 'Air Conditioning Contractors', 'http://rdlincoln.us/eladmin/images/9138Air Conditioner - icon.jpg', 17, 'Air repair,fix my air conditioner', 'A', '2019-08-30', '2020-01-24 08:31:57'),
(7, 'Air Duct Cleaning', 'Air Duct Cleaning', 'http://rdlincoln.us/eladmin/images/4201Air Duct Cleaning icon.jpg', 17, 'Air Duct,Duct cleaning,Air Duct Cleaner', 'A', '2019-08-30', '2020-01-24 08:29:21'),
(8, 'Aircraft Engines', 'Aircraft Engines', 'http://rdlincoln.us/eladmin/images/5644Aircraft Engines.jpg', 17, '', 'A', '2020-01-24', '2020-01-24 08:36:31'),
(9, 'Aircraft Servicing & Maintenance', 'Aircraft Servicing & Maintenance', 'http://www.rdlincoln.us/eladmin/images/5587Aircraft Service & Maintenance Icon.jpg', 13, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(10, 'Airports', 'Airports', 'http://rdlincoln.us/eladmin/images/5323Airports Icon.jpg', 0, NULL, 'A', '2019-08-30', '2019-08-18 17:57:08'),
(11, 'Alcohol Information & Treatment Centers', 'Alcohol Information & Treatment Centers', 'http://www.rdlincoln.us/eladmin/images/8912Alcohol Treatment Center wood sign.jpg', 0, 'Treatment Centers,Treatment Center,Alcohol Info,Alcohol Treatment,AA', 'A', '2019-09-04', '2020-01-24 08:38:47'),
(12, 'Animal Shelters', 'Animal Shelters', 'http://rdlincoln.us/eladmin/images/4107Animal Shelters.jpg', 20, 'adopt a pet,adopt a dog,adopt a cat,Rescue pet,Rescue dog,Rescue cat,cat rescue,Dog rescue,pet rescue', 'A', '2020-01-24', '2020-01-24 08:48:02'),
(13, 'Antiques & Collectibles - Dealers', 'Antiques & Collectibles - Dealers', 'http://www.rdlincoln.us/eladmin/images/1024Antique Dealers Icon.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(14, 'Antiques - Repairing & Restoring', 'Antiques - Repairing & Restoring', 'http://rdlincoln.us/eladmin/images/1664Antique Repairing.jpg', 17, 'Antique repair,Antique restoring', 'A', '2020-01-24', '2020-01-24 08:52:13'),
(15, 'Apartments', 'Apartments', 'http://www.rdlincoln.us/eladmin/images/4130Apartments Unfurinshed Icon.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(16, 'Appliance Household - Major', 'Appliance Household - Major', 'http://www.rdlincoln.us/eladmin/images/6514Appliances Household Major Dealers Icon.jpg', 31, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(17, 'Appliance Household - Major Repair & Service', 'Appliance Household - Major Repair & Service', 'http://www.rdlincoln.us/eladmin/images/2043Appliances Major Repair & Service Icon.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(18, 'Appraisers', 'Appraisers', 'http://www.rdlincoln.us/eladmin/images/8084Appraisers Icon.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(19, 'Archery Equipment & Supplies', 'Archery Equipment & Supplies', 'http://rdlincoln.us/eladmin/images/7600archery.jpg', 7, '', 'A', '2020-01-27', '2020-01-27 11:54:32'),
(20, 'Asphalt & Asphalt Products', 'Asphalt & Asphalt Products', 'http://rdlincoln.us/eladmin/images/1851Asphalt-Paving.jpg', 2, '', 'A', '2020-01-27', '2020-01-27 11:45:26'),
(21, 'Assisted Living', 'Assisted Living', 'http://www.rdlincoln.us/eladmin/images/9197Assisted Living Centers Icon.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(22, 'Associations', 'Associations', 'http://rdlincoln.us/eladmin/images/1276associations.jpg', 29, '', 'A', '2020-01-27', '2020-01-27 12:02:06'),
(23, 'Attorneys', 'Attorneys', 'http://www.rdlincoln.us/eladmin/images/4987Attorneys Icon.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(24, 'Auctioneers', 'Auctioneers', 'http://www.rdlincoln.us/eladmin/images/6432Auctioneers Icon.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(25, 'Audiologists', 'Audiologists', 'http://www.rdlincoln.us/eladmin/images/4369Audiologist.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(26, 'Auto Body Repairing & Serv', 'Auto Body Repairing & Serv', 'http://www.rdlincoln.us/eladmin/images/5955Auto Body Repairing & Painting Icon.jpg', 24, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(27, 'Auto Dealers - New Cars', 'Auto Dealers - New Cars', 'http://www.rdlincoln.us/eladmin/images/4562Auto Dealers New Cars Icon.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(28, 'Auto Dealers - Used Cars', 'Auto Dealers - Used Cars', 'http://www.rdlincoln.us/eladmin/images/3603Auto Dealers – Used Icon.jpeg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(29, 'Auto Detail & Clean Up Serv', 'Auto Detail & Clean Up Serv', 'http://www.rdlincoln.us/eladmin/images/9393Auto Detailing Icon.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(30, 'Auto Insurance', 'Auto Insurance', 'http://www.rdlincoln.us/eladmin/images/4155Auto-Insurance.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(31, 'Auto Parts & Supplies - New', 'Auto Parts & Supplies - New', 'http://www.rdlincoln.us/eladmin/images/9850Auto Parts – Used Icon.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(32, 'Auto Repair & Service', 'Auto Repair & Service', 'http://www.rdlincoln.us/eladmin/images/2715Auto Repairing & service.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(33, 'Backhoe Service', 'Backhoe Service', 'http://www.rdlincoln.us/eladmin/images/2358Backhoe Service.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(34, 'Bail Bonds', 'Bail Bonds', 'http://www.rdlincoln.us/eladmin/images/9792Bail Bonds Icon.png', 14, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(35, 'Bait & Tackle Supplies', 'Bait & Tackle Supplies', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(36, 'Bakery - Retail', 'Bakery - Retail', 'http://www.rdlincoln.us/eladmin/images/5275Bakers Retail Icon.jpg', 2, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(37, 'Banks', 'Banks', 'http://www.rdlincoln.us/eladmin/images/1092Banks Icon.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(38, 'Banquet Facilities', 'Banquet Facilities', 'http://www.rdlincoln.us/eladmin/images/6919banquet Facilities.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(39, 'Bar', 'Bar', 'http://www.rdlincoln.us/eladmin/images/8433Bars.jpg', 7, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(40, 'Barbers', 'Barbers', 'http://www.rdlincoln.us/eladmin/images/3710barber-shop.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(41, 'Beauty Salons', 'Beauty Salons', 'http://www.rdlincoln.us/eladmin/images/1656Beauty Salons Icon.jpg', 31, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(42, 'Bed & Breakfast Accommodations', 'Bed & Breakfast Accommodations', 'http://www.rdcushing.us/eladmin/images/noimage.png', 14, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(43, 'Blood Banks & Centers', 'Blood Banks & Centers', 'http://www.rdcushing.us/eladmin/images/noimage.png', 8, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(44, 'Bookkeeping Service', 'Bookkeeping Service', 'http://www.rdlincoln.us/eladmin/images/8366Bookkeeping Services Icon.jpg', 24, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(45, 'Building Contractors', 'Building Contractors', 'http://www.rdlincoln.us/eladmin/images/5289Building Contractors Icon.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(46, 'Buildings - Metal', 'Buildings - Metal', 'http://www.rdlincoln.us/eladmin/images/4690Buildings Metal Icon.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(47, 'Buildings - Portable', 'Buildings - Portable', 'http://www.rdlincoln.us/eladmin/images/5442Buildings - Portable.jpg', 22, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(48, 'Bulldozers', 'Bulldozers', 'http://www.rdlincoln.us/eladmin/images/8515bull-dozer-services.jpg', 13, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(49, 'Burglar Alarm Systems', 'Burglar Alarm Systems', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(50, 'Cabinets', 'Cabinets', 'http://www.rdlincoln.us/eladmin/images/5884Cabinet Makers Icon 1.jpg', 29, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(51, 'Cable Television', 'Cable Television', 'http://www.rdlincoln.us/eladmin/images/7456cable-tv.jpg', 29, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(52, 'Campgrounds & Recreational Vehicle Parks', 'Campgrounds & Recreational Vehicle Parks', 'http://www.rdcushing.us/eladmin/images/noimage.png', 29, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(53, 'Camps', 'Camps', 'http://www.rdcushing.us/eladmin/images/noimage.png', 29, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(54, 'Carpet & Rug Cleaners', 'Carpet & Rug Cleaners', 'http://www.rdlincoln.us/eladmin/images/1820carpet-Cleaning Icon.jpg', 29, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(55, 'Carpet & Rug Dealers - New', 'Carpet & Rug Dealers - New', 'http://www.rdlincoln.us/eladmin/images/8422Carpet & Rug Dealer Icon.jpg', 29, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(56, 'Carports', 'Carports', 'http://www.rdlincoln.us/eladmin/images/2347Carports.jpg', 29, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(57, 'Casinos', 'Casinos', 'http://www.rdlincoln.us/eladmin/images/6927Casinos.jpg', 29, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(58, 'Caterers', 'Caterers', 'http://www.rdlincoln.us/eladmin/images/9764Caterers Icon.jpg', 29, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(59, 'Cellular Telephone Sales & Service', 'Cellular Telephone Sales & Service', 'http://www.rdlincoln.us/eladmin/images/1350Cellular Telephone Equipment & Service Icon.jpg', 29, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(60, 'Chamber Of Commerce', 'Chamber Of Commerce', 'http://www.rdlincoln.us/eladmin/images/5795Chamber of Commerce.jpg', 29, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(61, 'Chemicals', 'Chemicals', 'http://www.rdlincoln.us/eladmin/images/3981Chemicals.jpg', 29, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(62, 'Child Care Facilities', 'Child Care Facilities', 'http://www.rdlincoln.us/eladmin/images/2132Child Care & Day Nurseries Icon.png', 29, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(63, 'Chiropractic Physicians - Dc', 'Chiropractic Physicians - Dc', 'http://www.rdlincoln.us/eladmin/images/9579Chirpopractors.jpg', 29, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(64, 'Churches', 'Churches', 'http://www.rdlincoln.us/eladmin/images/7926Church.jpg', 29, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(65, 'Churches - Assembly Of God', 'Churches - Assembly Of God', 'http://www.rdcushing.us/eladmin/images/noimage.png', 17, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(66, 'Churches - Baptist', 'Churches - Baptist', 'http://www.rdcushing.us/eladmin/images/noimage.png', 13, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(67, 'Churches - Catholic', 'Churches - Catholic', 'http://www.rdcushing.us/eladmin/images/noimage.png', 23, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(68, 'Churches - Christian', 'Churches - Christian', 'http://www.rdcushing.us/eladmin/images/noimage.png', 17, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(69, 'Churches - Church Of Christ', 'Churches - Church Of Christ', 'http://www.rdcushing.us/eladmin/images/noimage.png', 29, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(70, 'Churches - Church Of God', 'Churches - Church Of God', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(71, 'Churches - Church Of Nazarene', 'Churches - Church Of Nazarene', 'http://www.rdcushing.us/eladmin/images/noimage.png', 2, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(72, 'Churches - Interdenominational', 'Churches - Interdenominational', 'http://www.rdcushing.us/eladmin/images/noimage.png', 2, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(73, 'Churches - Jehovah\'s Witnesses', 'Churches - Jehovah\'s Witnesses', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(74, 'Churches - Lutheran', 'Churches - Lutheran', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(75, 'Churches Non-Denominational', 'Churches Non-Denominational', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(76, 'Churches - Presbyterian', 'Churches - Presbyterian', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(77, 'Churches - United Methodist', 'Churches - United Methodist', 'http://www.rdcushing.us/eladmin/images/noimage.png', 14, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(78, 'Churches - United Pentecostal', 'Churches - United Pentecostal', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(79, 'Cigar, Cigarette & Tobacco', 'Cigar, Cigarette & Tobacco', 'http://www.rdcushing.us/eladmin/images/noimage.png', 2, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(80, 'Civic Organizations', 'Civic Organizations', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(81, 'Cleaners', 'Cleaners', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(82, 'Clinics - Medical', 'Clinics - Medical', 'http://www.rdlincoln.us/eladmin/images/4168Clinics - Medical Icon.jpg', 2, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(83, 'Clothing - Resale', 'Clothing - Resale', 'http://www.rdlincoln.us/eladmin/images/3211Clothing - Resale.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(84, 'Clothing - Retail', 'Clothing - Retail', 'http://www.rdlincoln.us/eladmin/images/7418Clothing Retail Icon.jpg', 6, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(85, 'Clothing - Wholesale', 'Clothing - Wholesale', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(86, 'Coffee House', 'Coffee House', 'http://www.rdlincoln.us/eladmin/images/5817Coffee Shops Icon.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(87, 'Community Service Agencies', 'Community Service Agencies', 'http://www.rdlincoln.us/eladmin/images/1280Community Service Agencies.jpg', 13, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(88, 'Compressors - Air & Gas', 'Compressors - Air & Gas', 'http://www.rdcushing.us/eladmin/images/noimage.png', 13, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(89, 'Computer & Equipment Repair & Service', 'Computer & Equipment Repair & Service', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(90, 'Concrete Contractors', 'Concrete Contractors', 'http://www.rdlincoln.us/eladmin/images/4365Concrete Contractors Icon.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(91, 'Concrete - Ready Mixed', 'Concrete - Ready Mixed', 'http://www.rdlincoln.us/eladmin/images/2217Concrete Ready Mix Icon.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(92, 'Conference Center', 'Conference Center', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(93, 'Contact Lenses', 'Contact Lenses', 'http://www.rdlincoln.us/eladmin/images/4739Contact Lenses Icon.jpg', 29, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(94, 'Contractors Equipment & Supplies - Rentals', 'Contractors Equipment & Supplies - Rentals', 'http://www.rdlincoln.us/eladmin/images/8891Contractors Equip Renting Icon.jpg', 2, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(95, 'Contractors - General', 'Contractors - General', 'http://www.rdlincoln.us/eladmin/images/6890Contractors - General Icon.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(96, 'Convenience Stores', 'Convenience Stores', 'http://www.rdlincoln.us/eladmin/images/1230Convenience Stores Icon.jpg', 17, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(97, 'Copy & Duplicating Service', 'Copy & Duplicating Service', 'http://www.rdcushing.us/eladmin/images/noimage.png', 17, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(98, 'Copy Machines & Service', 'Copy Machines & Service', 'http://www.rdlincoln.us/eladmin/images/2664Copy Machine Sales & Service.jpg', 9, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(99, 'Counseling Services', 'Counseling Services', 'http://www.rdlincoln.us/eladmin/images/8398Counseling Icons.jpg', 31, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(100, 'Craft Supplies Retail', 'Craft Supplies Retail', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(101, 'Cranes', 'Cranes', 'http://www.rdcushing.us/eladmin/images/noimage.png', 17, NULL, 'I', '2019-09-04', '2019-08-18 17:57:08'),
(102, 'Credit Unions', 'Credit Unions', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(103, 'Cremation Services', 'Cremation Services', 'http://www.rdlincoln.us/eladmin/images/9097Cremation.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(104, 'Crisis Intervention', 'Crisis Intervention', 'http://www.rdcushing.us/eladmin/images/noimage.png', 9, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(105, 'Dairies', 'Dairies', 'http://www.rdcushing.us/eladmin/images/noimage.png', 20, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(106, 'Dance Instruction', 'Dance Instruction', 'http://www.rdlincoln.us/eladmin/images/2968Dance Instruction.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(107, 'Decks', 'Decks', 'http://www.rdlincoln.us/eladmin/images/4262Decks.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(108, 'Dentists', 'Dentists', 'http://www.rdlincoln.us/eladmin/images/2884Dentists Icon.jpg', 2, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(109, 'Dentures', 'Dentures', 'http://www.rdlincoln.us/eladmin/images/1156Dentures Icon.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(110, 'Department Stores', 'Department Stores', 'http://www.rdlincoln.us/eladmin/images/8868Department Stores.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(111, 'Diabetes Care / education', 'Diabetes Care / education', 'http://www.rdlincoln.us/eladmin/images/2834Diabetes Care Education.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(112, 'Disposal Contractors', 'Disposal Contractors', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(113, 'Dog & Cat Grooming & Supplies', 'Dog & Cat Grooming & Supplies', 'http://www.rdlincoln.us/eladmin/images/1468Dog & Cat Grooming Icon.jpg', 17, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(114, 'Door - Overhead Type', 'Door - Overhead Type', 'http://www.rdlincoln.us/eladmin/images/7525Doors Overhead Type Icon.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(115, 'Donuts', 'Donuts', 'http://www.rdlincoln.us/eladmin/images/3849donuts.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(116, 'Dozer Service', 'Dozer Service', 'http://www.rdlincoln.us/eladmin/images/2716Dozer Services.jpg', 8, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(117, 'Drilling Contractors', 'Drilling Contractors', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(118, 'Drones', 'Drones', 'http://www.rdlincoln.us/eladmin/images/4164Drones.jpg', 2, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(119, 'Drug Abuse & Addiction - Information & Treatment', 'Drug Abuse & Addiction - Information & Treatment', 'http://www.rdlincoln.us/eladmin/images/5213Drug Abuse & Addiction Information & Treatment.jpg', 8, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(120, 'Electric Companies', 'Electric Companies', 'http://www.rdlincoln.us/eladmin/images/1187Electric Companies Icon.jpg', 7, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(121, 'Electric Contractors', 'Electric Contractors', 'http://www.rdlincoln.us/eladmin/images/2839Electric Contractors.jpg', 0, 'electricians,electrician,electrical', 'A', '2019-09-04', '2020-01-24 08:17:51'),
(122, 'Electric Equipment & Supplies', 'Electric Equipment & Supplies', 'http://www.rdlincoln.us/eladmin/images/9964Electric Equipment & Supplies - Wholesale.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(123, 'Electric Equipment & Supplies Wholesale & Mfrs', 'Electric Equipment & Supplies Wholesale & Mfrs', 'http://www.rdlincoln.us/eladmin/images/9234Electronic Equipment & Supplies - Mfrs.jpg', 18, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(124, 'Elevators - Sales & Service', 'Elevators - Sales & Service', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(125, 'Emergency Medicine', 'Emergency Medicine', 'http://www.rdlincoln.us/eladmin/images/9310Emergency Medical Services.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(126, 'Employment Agencies', 'Employment Agencies', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(127, 'Environmental & Ecological', 'Environmental & Ecological', 'http://www.rdlincoln.us/eladmin/images/7532Environmental & Ecological.jpg', 18, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(128, 'Equipment Rental', 'Equipment Rental', 'http://www.rdlincoln.us/eladmin/images/1941Equipment Rental.jpg', 13, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(129, 'Excavating Contractors', 'Excavating Contractors', 'http://www.rdlincoln.us/eladmin/images/1849Excavating Contractors.jpg', 13, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(130, 'Farm Equipment & Supplies', 'Farm Equipment & Supplies', 'http://www.rdlincoln.us/eladmin/images/6078Farm Equipment Dealers.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(131, 'Feed Dealers', 'Feed Dealers', 'http://www.rdlincoln.us/eladmin/images/1787Feed Dealers.jpg', 17, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(132, 'Fence', 'Fence', 'http://www.rdlincoln.us/eladmin/images/8022Fence Contractors.jpg', 14, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(133, 'Fertilizer - Retail', 'Fertilizer - Retail', 'http://www.rdlincoln.us/eladmin/images/3453Fertilizer - Retail.jpg', 29, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(134, 'Festivals', 'Festivals', 'http://www.rdcushing.us/eladmin/images/noimage.png', 14, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(135, 'Financial / retirement planning', 'Financial / retirement planning', 'http://www.rdcushing.us/eladmin/images/noimage.png', 13, NULL, 'A', '2019-08-04', '2019-08-18 17:57:08'),
(136, 'Financial Services', 'Financial Services', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(137, 'Fire Alarm Systems', 'Fire Alarm Systems', 'http://www.rdlincoln.us/eladmin/images/7337Fire Department.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(138, 'Fishing Bait', 'Fishing Bait', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(139, 'Fitness Center', 'Fitness Center', 'http://www.rdlincoln.us/eladmin/images/5823Fitness Centers.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(140, 'Florists - Retail', 'Florists - Retail', 'http://www.rdlincoln.us/eladmin/images/6001Florists Retail.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(141, 'Fraternal Organizations', 'Fraternal Organizations', 'http://www.rdlincoln.us/eladmin/images/9235Fraternal Organizations.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(142, 'Funeral Homes & Directors', 'Funeral Homes & Directors', 'http://www.rdlincoln.us/eladmin/images/1532Funeral Directors.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(143, 'Furnaces Heat', 'Furnaces Heat', 'http://www.rdlincoln.us/eladmin/images/5526Furnaces.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(144, 'Furniture Dealers - Retail', 'Furniture Dealers - Retail', 'http://www.rdlincoln.us/eladmin/images/6786Furniture Dealers - Retail.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(145, 'Furniture Dealers - Used', 'Furniture Dealers - Used', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(146, 'Garage Doors & Openers', 'Garage Doors & Openers', 'http://www.rdlincoln.us/eladmin/images/4291Garage Doors & Openers.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(147, 'Garbage Collection', 'Garbage Collection', 'http://www.rdlincoln.us/eladmin/images/6461Garbage Collection.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(148, 'Garden Center', 'Garden Center', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(149, 'Gas Companies', 'Gas Companies', 'http://www.rdlincoln.us/eladmin/images/3288Gas Companies.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(150, 'Gas Plant Equipment', 'Gas Plant Equipment', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(151, 'Gas - Processors', 'Gas - Processors', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(152, 'General Contractors', 'General Contractors', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(153, 'Generators', 'Generators', 'http://www.rdlincoln.us/eladmin/images/5656Generators.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(154, 'Gift Shops', 'Gift Shops', 'http://www.rdlincoln.us/eladmin/images/9913Gift-Shops.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(155, 'Glass', 'Glass', 'http://www.rdlincoln.us/eladmin/images/3678Glass - Auto.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(156, 'Golf Courses - Public', 'Golf Courses - Public', 'http://www.rdlincoln.us/eladmin/images/4228Golf Courses.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(157, 'Grocers - Retail', 'Grocers - Retail', 'http://www.rdlincoln.us/eladmin/images/5346Grocers - Retail.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(158, 'Gutters & Downspouts', 'Gutters & Downspouts', 'http://www.rdlincoln.us/eladmin/images/5043Gutters & Downspouts.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(159, 'Hardware - Retail', 'Hardware - Retail', 'http://www.rdlincoln.us/eladmin/images/9688Hardware - Retail.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(160, 'Health Food Products-Retail', 'Health Food Products-Retail', 'http://www.rdlincoln.us/eladmin/images/9734Health Food Products - Retail.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(161, 'Hearing Aids & Assistive Devices', 'Hearing Aids & Assistive Devices', 'http://www.rdlincoln.us/eladmin/images/1660Hearing Aids & Assistive Devices.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(162, 'Heating Contractors', 'Heating Contractors', 'http://www.rdlincoln.us/eladmin/images/6478Heating Contractors.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(163, 'Home Builders', 'Home Builders', 'http://www.rdlincoln.us/eladmin/images/8684Home Builders.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(164, 'Home Decor', 'Home Decor', 'http://www.rdlincoln.us/eladmin/images/1478Home Decor.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(165, 'Home Health Care & Services', 'Home Health Care & Services', 'http://www.rdlincoln.us/eladmin/images/1173Home Health Care & Services.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(166, 'Homes - Residential Care Facility', 'Homes - Residential Care Facility', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(167, 'Horse Trailers', 'Horse Trailers', 'http://www.rdlincoln.us/eladmin/images/4975Horse Trailers.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(168, 'Hospice', 'Hospice', 'http://www.rdlincoln.us/eladmin/images/6167Hospices.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(169, 'Hospital Equipment', 'Hospital Equipment', 'http://www.rdlincoln.us/eladmin/images/6494Hospital Equipment & Supplies.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(170, 'Hospitalist', 'Hospitalist', 'http://www.rdlincoln.us/eladmin/images/3354Hospitalist.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(171, 'Hospitals', 'Hospitals', 'http://www.rdlincoln.us/eladmin/images/4075Hospitals.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(172, 'Insulation Contractors', 'Insulation Contractors', 'http://www.rdlincoln.us/eladmin/images/7895Insulation Contractors.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(173, 'Insurance', 'Insurance', 'http://www.rdlincoln.us/eladmin/images/4632Insurance Icon.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(174, 'Internet - Service Providers', 'Internet - Service Providers', 'http://www.rdlincoln.us/eladmin/images/4647Internet Service Providers.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(175, 'Investigators', 'Investigators', 'http://www.rdlincoln.us/eladmin/images/4818Investigators.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(176, 'Investment Securities', 'Investment Securities', 'http://www.rdlincoln.us/eladmin/images/8822Investment Securities.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(177, 'Iron Ornamental', 'Iron Ornamental', 'http://www.rdlincoln.us/eladmin/images/2939Iron Ornamental.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(178, 'Janitorial Service', 'Janitorial Service', 'http://www.rdlincoln.us/eladmin/images/7764Janitorial Service.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(179, 'Jewelers - Retail', 'Jewelers - Retail', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(180, 'Landfill Sanitary', 'Landfill Sanitary', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(181, 'Landscape Designer & Consultants', 'Landscape Designer & Consultants', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(182, 'Lawn & Garden Equipment & Supplies', 'Lawn & Garden Equipment & Supplies', 'http://www.rdlincoln.us/eladmin/images/8749Lawn & Garden Equipment & Supplies.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(183, 'Lawn Maintenance', 'Lawn Maintenance', 'http://www.rdlincoln.us/eladmin/images/4366Lawn Maintenance.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(184, 'Laundries', 'Laundries', 'http://www.rdcushing.us/eladmin/images/noimage.png', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(185, 'Liquor Stores', 'Liquor Stores', 'http://www.rdlincoln.us/eladmin/images/3040Liquor Stores.jpg', 2, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(186, 'Livestock Auction Market', 'Livestock Auction Market', 'http://www.rdlincoln.us/eladmin/images/2425Livestock Auction Market.jpg', 2, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(187, 'Livestock Dealers', 'Livestock Dealers', 'http://www.rdcushing.us/eladmin/images/noimage.png', 4, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(188, 'Loans', 'Loans', 'http://www.rdlincoln.us/eladmin/images/8201Loans.jpg', 17, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(189, 'Lodges', 'Lodges', 'http://www.rdlincoln.us/eladmin/images/2343Lodges.jpg', 23, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(190, 'Locks & Locksmiths', 'Locks & Locksmiths', 'http://www.rdlincoln.us/eladmin/images/2826Locks & Locksmiths.jpg', 13, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(191, 'Lumber - Retail', 'Lumber - Retail', 'http://www.rdlincoln.us/eladmin/images/3787Lumber - Retail.jpg', 17, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(192, 'Lumber - Wholesale', 'Lumber - Wholesale', 'http://www.rdcushing.us/eladmin/images/noimage.png', 14, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(193, 'Machine Shops', 'Machine Shops', 'http://www.rdlincoln.us/eladmin/images/5928Machine Shops.jpg', 31, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(194, 'Magnets & Magnetic Devices', 'Magnets & Magnetic Devices', 'http://www.rdcushing.us/eladmin/images/noimage.png', 31, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(195, 'Mainstreet Association', 'Mainstreet Association', 'http://www.rdcushing.us/eladmin/images/noimage.png', 31, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(196, 'Mammography', 'Mammography', 'http://www.rdlincoln.us/eladmin/images/4304Mammography.jpg', 31, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(197, 'Marketing', 'Marketing', 'http://www.rdlincoln.us/eladmin/images/3158Marketing.jpg', 31, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(198, 'Martial Arts Instruction', 'Martial Arts Instruction', 'http://www.rdcushing.us/eladmin/images/noimage.png', 31, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(199, 'Massage Therapy', 'Massage Therapy', 'http://www.rdlincoln.us/eladmin/images/9590Massage Therapy.jpg', 14, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(200, 'Mattresses - Retail', 'Mattresses - Retail', 'http://www.rdlincoln.us/eladmin/images/8652Mattresses - Retail.jpg', 7, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(201, 'Meat Processing', 'Meat Processing', 'http://www.rdlincoln.us/eladmin/images/8274Meat Processing.jpg', 8, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(202, 'Medical Equipment & Supplies', 'Medical Equipment & Supplies', 'http://www.rdlincoln.us/eladmin/images/1551Medical Equipment & Supplies.jpg', 17, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(203, 'Mental Health - Centers, Counselors', 'Mental Health - Centers, Counselors', 'http://www.rdlincoln.us/eladmin/images/1657Mental Health - Centers.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(204, 'Metal Fabricators', 'Metal Fabricators', 'http://www.rdlincoln.us/eladmin/images/7633Metal Fabricators.jpg', 14, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(205, 'Mobile Homes - Parks & Communities', 'Mobile Homes - Parks & Communities', 'http://www.rdlincoln.us/eladmin/images/4160Mobile Home - Parks.jpg', 14, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(206, 'Monuments', 'Monuments', 'http://www.rdlincoln.us/eladmin/images/4020Monuments.jpg', 18, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(207, 'Mortgages', 'Mortgages', 'http://www.rdlincoln.us/eladmin/images/3272Mortgages.jpg', 7, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(208, 'Motels', 'Motels', 'http://www.rdlincoln.us/eladmin/images/7687Motels.jpg', 31, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(209, 'Movers', 'Movers', 'http://www.rdlincoln.us/eladmin/images/3286Movers.jpg', 24, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(210, 'Movie Rentals', 'Movie Rentals', 'http://www.rdlincoln.us/eladmin/images/5500Movie Rentals.jpg', 15, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(211, 'Mowing Service', 'Mowing Service', 'http://www.rdcushing.us/eladmin/images/noimage.png', 29, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(212, 'Museums', 'Museums', 'http://www.rdlincoln.us/eladmin/images/4741Museums.jpg', 14, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(213, 'Nail Salons', 'Nail Salons', 'http://www.rdlincoln.us/eladmin/images/4599Nail Salons.jpg', 7, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(214, 'National Guard', 'National Guard', 'http://www.rdcushing.us/eladmin/images/noimage.png', 29, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(215, 'Newspapers', 'Newspapers', 'http://www.rdlincoln.us/eladmin/images/8130Newspapers.jpg', 2, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(216, 'Notary Public', 'Notary Public', 'http://www.rdcushing.us/eladmin/images/noimage.png', 14, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(217, 'Nurseries - Plants & Trees', 'Nurseries - Plants & Trees', 'http://www.rdlincoln.us/eladmin/images/9048Nurseries - Plants & Trees.jpg', 14, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(218, 'Nursing Homes', 'Nursing Homes', 'http://www.rdlincoln.us/eladmin/images/8797Nursing Homes.jpg', 13, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(219, 'Occupational Health Services', 'Occupational Health Services', 'http://www.rdcushing.us/eladmin/images/noimage.png', 17, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(220, 'Office Furniture', 'Office Furniture', 'http://www.rdcushing.us/eladmin/images/noimage.png', 14, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(221, 'Office Supplies', 'Office Supplies', 'http://www.rdlincoln.us/eladmin/images/3253Office Supplies.jpg', 14, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(222, 'Oil Change & Lubricating Serv', 'Oil Change & Lubricating Serv', 'http://www.rdlincoln.us/eladmin/images/8196Oil Change & Lubricating Serv.jpg', 14, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(223, 'Oil & Gas Exploration & Development', 'Oil & Gas Exploration & Development', 'http://www.rdlincoln.us/eladmin/images/2736Oil & Gas Explorations & Developments.jpg', 24, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(224, 'Oil Field Equipment', 'Oil Field Equipment', 'http://www.rdlincoln.us/eladmin/images/8174Oil Field Equipment.jpg', 14, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(225, 'Oil Field Service', 'Oil Field Service', 'http://www.rdlincoln.us/eladmin/images/8136Oil Field Service.jpg', 2, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(226, 'Oil Field Supplies', 'Oil Field Supplies', 'http://www.rdcushing.us/eladmin/images/noimage.png', 13, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(227, 'Oil Marketers', 'Oil Marketers', 'http://www.rdlincoln.us/eladmin/images/7554Oil Marketers.jpg', 9, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(228, 'Oil Operators', 'Oil Operators', 'http://www.rdcushing.us/eladmin/images/noimage.png', 2, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(229, 'Oil Producers', 'Oil Producers', 'http://www.rdlincoln.us/eladmin/images/8679Oil Producers.jpg', 18, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(230, 'Oil Royalties', 'Oil Royalties', 'http://www.rdcushing.us/eladmin/images/noimage.png', 20, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(231, 'Optometrists - O.D.', 'Optometrists - O.D.', 'http://www.rdlincoln.us/eladmin/images/7013Optometrist.jpg', 13, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(232, 'Paint Dealers - Retail', 'Paint Dealers - Retail', 'http://www.rdlincoln.us/eladmin/images/3294Paint Dealers - Retail.jpg', 14, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(233, 'Painting Contractors', 'Painting Contractors', 'http://www.rdcushing.us/eladmin/images/noimage.png', 14, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(234, 'Party Supply Rental', 'Party Supply Rental', 'http://www.rdlincoln.us/eladmin/images/4963Party Supply Rental.jpg', 2, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(235, 'Paving Contractors', 'Paving Contractors', 'http://www.rdlincoln.us/eladmin/images/7614Paving Contractors.jpg', 2, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(236, 'Pawnbrokers', 'Pawnbrokers', 'http://www.rdlincoln.us/eladmin/images/1137Pawnbrokers.jpg', 14, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(237, 'Pest Control Services', 'Pest Control Services', 'http://www.rdlincoln.us/eladmin/images/4687Pest Control.jpg', 25, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(238, 'Pet Foods & Supplies - Retail', 'Pet Foods & Supplies - Retail', 'http://www.rdcushing.us/eladmin/images/noimage.png', 8, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(239, 'Pet Grooming', 'Pet Grooming', 'http://www.rdcushing.us/eladmin/images/noimage.png', 8, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(240, 'Pharmacies', 'Pharmacies', 'http://www.rdlincoln.us/eladmin/images/9779Pharmacies.jpg', 14, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(241, 'Photo Finishing - Retail', 'Photo Finishing - Retail', 'http://www.rdcushing.us/eladmin/images/noimage.png', 8, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(242, 'Photographers - Portrait', 'Photographers - Portrait', 'http://www.rdcushing.us/eladmin/images/noimage.png', 18, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(243, 'Photography', 'Photography', 'http://www.rdlincoln.us/eladmin/images/1697Photography.jpg', 0, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(244, 'Physical Therapists', 'Physical Therapists', 'http://www.rdlincoln.us/eladmin/images/3806Physical Therapists.jpg', 33, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(245, 'Physicians - Chiropractic-Dc', 'Physicians - Chiropractic-Dc', 'http://www.rdcushing.us/eladmin/images/noimage.png', 8, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(246, 'Physicians & Surgeons - APRN', 'Physicians & Surgeons - APRN', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(247, 'Physicians & Surgeons', 'Physicians & Surgeons', 'http://www.rdlincoln.us/eladmin/images/1238Physicians & Surgeons.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(248, 'Physicians & Surgeons - Md Arthritis', 'Physicians & Surgeons - Md Arthritis', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(249, 'Physicians & Surgeons Cardiology', 'Physicians & Surgeons Cardiology', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(250, 'Physicians & Surgeons Cardiovascular', 'Physicians & Surgeons Cardiovascular', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(251, 'Physicians & Surgeons Ear Nose And Throat', 'Physicians & Surgeons Ear Nose And Throat', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(252, 'Physicians & Surgeons Endocrinology', 'Physicians & Surgeons Endocrinology', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(253, 'Physicians & Surgeons Family Practice', 'Physicians & Surgeons Family Practice', 'http://www.rdlincoln.us/eladmin/images/2158Physicians & Surgeons - D.O. Family Practice Icon.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(254, 'Physicians & Surgeons Internal Medicine', 'Physicians & Surgeons Internal Medicine', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(255, 'Physicians & Surgeons Obstetrics & Gynecology', 'Physicians & Surgeons Obstetrics & Gynecology', 'http://www.rdlincoln.us/eladmin/images/6428Physicians & Surgeons - M.D. Obstetrics & Gynecology Icons.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(256, 'Physicians & Surgeons Oncology', 'Physicians & Surgeons Oncology', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(257, 'Physicians & Surgeons Ophthalmology (Eye)', 'Physicians & Surgeons Ophthalmology (Eye)', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(258, 'Physicians & Surgeons Orthopedic Surgeons', 'Physicians & Surgeons Orthopedic Surgeons', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(259, 'Physicians & Surgeons Orthopedic Sports Medicine', 'Physicians & Surgeons Orthopedic Sports Medicine', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(260, 'Physicians & Surgeons Pain Management', 'Physicians & Surgeons Pain Management', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(261, 'Physicians & Surgeons Pediatrics (Infant/child/adolescent care)', 'Physicians & Surgeons Pediatrics (Infant/child/adolescent care)', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(262, 'Physicians & Surgeons Pulmonary Rehabilitation', 'Physicians & Surgeons Pulmonary Rehabilitation', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(263, 'Physicians & Surgeons Radiation Oncology', 'Physicians & Surgeons Radiation Oncology', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(264, 'Physicians & Surgeons Sleep Medicine', 'Physicians & Surgeons Sleep Medicine', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(265, 'Physicians & Surgeons Surgery', 'Physicians & Surgeons Surgery', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(266, 'Physicians & Surgeons Urgent Care Walk-In Clinic', 'Physicians & Surgeons Urgent Care Walk-In Clinic', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(267, 'Physicians & Surgeons Urology', 'Physicians & Surgeons Urology', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(268, 'Physicians & Surgeons Wound Care', 'Physicians & Surgeons Wound Care', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', NULL, '2019-08-18 17:57:08'),
(269, 'Piano Tuning & Repairing', 'Piano Tuning & Repairing', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(270, 'Pipe', 'Pipe', 'http://www.rdlincoln.us/eladmin/images/3741Pipe.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(271, 'Pipe Line Companies', 'Pipe Line Companies', 'http://www.rdlincoln.us/eladmin/images/6432Pipe Line Companies.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(272, 'Pizza', 'Pizza', 'http://www.rdlincoln.us/eladmin/images/8559Pizza.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(273, 'Plumbing Contractors', 'Plumbing Contractors', 'http://www.rdlincoln.us/eladmin/images/8547Plumbing Contractors.jpg', 1, 'Plumbers,Plumber,Plumbing', 'A', '2019-09-04', '2020-01-24 08:19:03'),
(274, 'Plumbing - Fixtures, Parts & Supplies - Retail', 'Plumbing - Fixtures, Parts & Supplies - Retail', 'http://www.rdlincoln.us/eladmin/images/1929Plumbing Fixtures, Parts & Supplies - Retail.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(275, 'Printers', 'Printers', 'http://www.rdlincoln.us/eladmin/images/2243Printers.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(276, 'Production', 'Production', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(277, 'Promotional Products', 'Promotional Products', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(278, 'Propane Gas', 'Propane Gas', 'http://www.rdlincoln.us/eladmin/images/5390Propane Gas.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(279, 'Propane Gas Equip & Supplies', 'Propane Gas Equip & Supplies', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(280, 'Pumps', 'Pumps', 'http://www.rdlincoln.us/eladmin/images/9875Pump Supplies.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(281, 'Race Track', 'Race Track', 'http://www.rdlincoln.us/eladmin/images/9734Race Tracks.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(282, 'Radio Communication Equipment & Systems', 'Radio Communication Equipment & Systems', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(283, 'Radiology & Lab Services', 'Radiology & Lab Services', 'http://www.rdlincoln.us/eladmin/images/2322Radiology & Lab Services.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(284, 'Railway', 'Railway', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(285, 'Railyards', 'Railyards', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(286, 'Ranches', 'Ranches', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(287, 'Real Estate', 'Real Estate', 'http://www.rdlincoln.us/eladmin/images/1206Real Estate.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(288, 'Real Estate Appraisers', 'Real Estate Appraisers', 'http://www.rdlincoln.us/eladmin/images/3325Real Estate Appraisers.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(289, 'Recording Service', 'Recording Service', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(290, 'Recycle Centers', 'Recycle Centers', 'http://www.rdlincoln.us/eladmin/images/7636Recycling center Icon.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(291, 'Refrigeration Equipment Comm & Indust', 'Refrigeration Equipment Comm & Indust', 'http://www.rdlincoln.us/eladmin/images/2126Refrigeration Equipment - Commercial & Industrial.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(292, 'Refrigeration Sales & Service', 'Refrigeration Sales & Service', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(293, 'Rehabilitation Services', 'Rehabilitation Services', 'http://www.rdlincoln.us/eladmin/images/7690Rehabilitation Services Icon.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(294, 'Rental Service Stores & Yards', 'Rental Service Stores & Yards', 'http://www.rdlincoln.us/eladmin/images/9162Rental Service Stores & Yards.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08');
INSERT INTO `kc_categories` (`id`, `categoryName`, `categoryDesc`, `categoryIconUrl`, `categorySetId`, `category_keywords`, `status`, `createdDate`, `updatedDate`) VALUES
(295, 'Restaurant Management', 'Restaurant Management', 'http://www.rdlincoln.us/eladmin/images/8041Restaurant Management.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(296, 'Restaurants', 'Restaurants', 'http://www.rdlincoln.us/eladmin/images/3998Restaurants.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(297, 'Retirement & Life Care Communities & Homes', 'Retirement & Life Care Communities & Homes', 'http://www.rdlincoln.us/eladmin/images/2589Retirement & Life Care Communities & Homes.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(298, 'Roofing Contractors', 'Roofing Contractors', 'http://www.rdlincoln.us/eladmin/images/4721Roofing Contractors.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(299, 'Roofing Supplies', 'Roofing Supplies', 'http://www.rdlincoln.us/eladmin/images/7262Roofing Supplies.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(300, 'Sand & Gravel', 'Sand & Gravel', 'http://www.rdlincoln.us/eladmin/images/2288Sand & Gravel.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(301, 'Sandblasting', 'Sandblasting', 'http://www.rdlincoln.us/eladmin/images/5391Sandblasting.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(302, 'Satellite Equipment & System', 'Satellite Equipment & System', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(303, 'Schools - Public', 'Schools - Public', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(304, 'Scrap Metals', 'Scrap Metals', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(305, 'Screen Printing', 'Screen Printing', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(306, 'Security Control Equip & Systems', 'Security Control Equip & Systems', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(307, 'Senior Citizens Services', 'Senior Citizens Services', 'http://www.rdlincoln.us/eladmin/images/5668Senior Citizens Services Organizations.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(308, 'Septic Tanks & Systems', 'Septic Tanks & Systems', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(309, 'Septic Tanks & Systems Cleaning & Repairing', 'Septic Tanks & Systems Cleaning & Repairing', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(310, 'Service Stations', 'Service Stations', 'http://www.rdlincoln.us/eladmin/images/8040Service Stations Icon.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(311, 'Sewing Machines-Dealers', 'Sewing Machines-Dealers', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(312, 'Sheet Metal Fabricators', 'Sheet Metal Fabricators', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(313, 'Shutters-Windows', 'Shutters-Windows', 'http://www.rdlincoln.us/eladmin/images/6014Shutters - Windows.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(314, 'Siding Contractors', 'Siding Contractors', 'http://www.rdlincoln.us/eladmin/images/8825Siding Contractors.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(315, 'Signs', 'Signs', 'http://www.rdlincoln.us/eladmin/images/3504Signs.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(316, 'Skating Rink', 'Skating Rink', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(317, 'Smoke Shop', 'Smoke Shop', 'http://www.rdlincoln.us/eladmin/images/7638Smoke Shops.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(318, 'Social Service & Welfare Organizations', 'Social Service & Welfare Organizations', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(319, 'Solar Screens', 'Solar Screens', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(320, 'Spas', 'Spas', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(321, 'Sporting Goods - Retail', 'Sporting Goods - Retail', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(322, 'Stables', 'Stables', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(323, 'Steel Distributors & Warehouses', 'Steel Distributors & Warehouses', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(324, 'Steel Fabricators', 'Steel Fabricators', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(325, 'Storage - Household & Commercial', 'Storage - Household & Commercial', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(326, 'Storm Shelters', 'Storm Shelters', 'http://www.rdlincoln.us/eladmin/images/2167Storm Shelters.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(327, 'Surveyors - Land', 'Surveyors - Land', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(328, 'Swimming Pool Contractors & Dealers - Sales, Service', 'Swimming Pool Contractors & Dealers - Sales, Service', 'http://www.rdlincoln.us/eladmin/images/4375Swimming Pool Contractors & Dealers.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(329, 'Swimming Pools - Public', 'Swimming Pools - Public', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(330, 'Tag Agency', 'Tag Agency', 'http://www.rdlincoln.us/eladmin/images/1754Tag Agency.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(331, 'Tanning Salons', 'Tanning Salons', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(332, 'Tax Return Preparation', 'Tax Return Preparation', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(333, 'Telephone Equipment & Systems - Repairs & Service', 'Telephone Equipment & Systems - Repairs & Service', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(334, 'Television - Radio Repairs & Service', 'Television - Radio Repairs & Service', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(335, 'Theatres', 'Theatres', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(336, 'Theatres -Live', 'Theatres -Live', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(337, 'Tire Dealers Retail', 'Tire Dealers Retail', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(338, 'Tobacco Dealers Retail', 'Tobacco Dealers Retail', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(339, 'Toilets - Portable', 'Toilets - Portable', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(340, 'Tractor Equipment & Parts Supplies', 'Tractor Equipment & Parts Supplies', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(341, 'Tractor Repair', 'Tractor Repair', 'http://www.rdlincoln.us/eladmin/images/6640Tractor Repair Icon.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(342, 'Trailer - Dealers', 'Trailer - Dealers', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(343, 'Transmissions - Auto', 'Transmissions - Auto', 'http://www.rdlincoln.us/eladmin/images/5874Transmission Auto Icon.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(344, 'Tree Service', 'Tree Service', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(345, 'Trophies', 'Trophies', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(346, 'Truck Accessories', 'Truck Accessories', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(347, 'Truck Service & Repair', 'Truck Service & Repair', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(348, 'Trucking', 'Trucking', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(349, 'Trucking - Dump', 'Trucking - Dump', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(350, 'Trucking - Heavy Hauling', 'Trucking - Heavy Hauling', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(351, 'Trucking - Liquid Or Dry Bulk', 'Trucking - Liquid Or Dry Bulk', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(352, 'Trucking - Transportation Brokers', 'Trucking - Transportation Brokers', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(353, 'Trucking - Renting & Leasing', 'Trucking - Renting & Leasing', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(354, 'Tuxedos Rental & Sales', 'Tuxedos Rental & Sales', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(355, 'Upholsterers', 'Upholsterers', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(356, 'Utility Companies', 'Utility Companies', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(357, 'Utility Contractors', 'Utility Contractors', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(358, 'Utility Underground Cable, Pipe & Wire Locating Service', 'Utility Underground Cable, Pipe & Wire Locating Service', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(359, 'Vending Machines', 'Vending Machines', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(360, 'Veterans & Military Organizations', 'Veterans & Military Organizations', 'http://www.rdlincoln.us/eladmin/images/8595Veterans & Military Organisations.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(361, 'Veterinarians', 'Veterinarians', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(362, 'Water Softening & Conditioning Sales & Service', 'Water Softening & Conditioning Sales & Service', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(363, 'Water Well Drilling & Service', 'Water Well Drilling & Service', 'http://www.rdlincoln.us/eladmin/images/2293Water Well Drilling Icon.jpg', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(364, 'Water Well Equipment & Supplies', 'Water Well Equipment & Supplies', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(365, 'Wedding Service & Supplies', 'Wedding Service & Supplies', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(366, 'Welding', 'Welding', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(367, 'Welding Equipment & Supplies', 'Welding Equipment & Supplies', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(368, 'Windows - Replacement', 'Windows - Replacement', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(369, 'Wineries', 'Wineries', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(370, 'Wrecker Service', 'Wrecker Service', 'http://www.rdcushing.us/eladmin/images/noimage.png', 1, NULL, 'A', '2019-09-04', '2019-08-18 17:57:08'),
(371, 'Rheem', 'Rheem', 'http://rdlincoln.us/eladmin/images/7275rheem.jpg', 0, NULL, 'A', '2019-09-20', '2019-09-20 16:36:15'),
(372, 'York', 'York', 'http://rdlincoln.us/eladmin/images/6100york-logo.jpg', 0, NULL, 'A', '2019-09-20', '2019-09-20 16:41:46'),
(373, 'Trane', 'Trane', 'http://rdlincoln.us/eladmin/images/8379Trane Logo use this one.jpg', 0, NULL, 'A', '2019-09-20', '2019-09-20 16:53:39'),
(374, 'Ruud', 'Ruud', 'http://rdlincoln.us/eladmin/images/4083512-RUUD.jpg', 0, NULL, 'A', '2019-09-20', '2019-09-20 16:59:46'),
(375, 'Energy Star', 'Energy Star', 'http://rdlincoln.us/eladmin/images/6397energy-star-logo-293x300.jpg', 0, NULL, 'A', '2019-09-20', '2019-09-20 17:05:49'),
(376, 'Napa', 'Napa', 'http://rdlincoln.us/eladmin/images/9986napa.png', 0, NULL, 'A', '2019-09-20', '2019-09-20 17:11:12'),
(377, 'Lift-Master', 'Lift-Master ', 'http://rdlincoln.us/eladmin/images/6522liftmaster.jpg', 0, NULL, 'A', '2019-09-20', '2019-09-20 17:22:13'),
(378, 'Remax', 'Remax', 'http://rdlincoln.us/eladmin/images/6381cropped-Webp.net-resizeimage-1.png', 0, NULL, 'A', '2019-09-21', '2019-09-21 06:01:23'),
(379, 'Do It Best', 'Do It Best', 'http://rdlincoln.us/eladmin/images/3598do_it_best_logo0.jpg', 0, NULL, 'A', '2019-09-21', '2019-09-21 06:07:18'),
(380, 'Raynor', 'Raynor', 'http://rdlincoln.us/eladmin/images/8897Raynor-logo.png', 0, NULL, 'A', '2019-09-21', '2019-09-21 06:15:23'),
(381, 'Sharp', 'Sharp', 'http://www.rdlincoln.us/eladmin/images/6393sharp.jpg', 0, NULL, 'A', '2019-09-26', '2019-09-26 14:24:45');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

DROP TABLE IF EXISTS `registered_users`;
CREATE TABLE IF NOT EXISTS `registered_users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(30) DEFAULT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `business_logo` varchar(255) DEFAULT NULL,
  `business_website` varchar(255) DEFAULT NULL,
  `business_number` varchar(30) DEFAULT NULL,
  `business_address` varchar(1000) DEFAULT NULL,
  `status` enum('A','I') NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `username`, `display_name`, `password`, `email`, `phone_number`, `business_name`, `business_logo`, `business_website`, `business_number`, `business_address`, `status`, `created_date`) VALUES
(1, 'kate_91', 'Kate Winslet', 'ad5611358209efdc202d35127a160748', 'kate@wince.com', '7830202020', NULL, NULL, NULL, NULL, NULL, 'A', '2020-06-07 17:47:15'),
(4, 'ashish', 'Ashish Varshney', '7b69ad8a8999d4ca7c42b8a729fb0ffd', 'ashish@gmail.com', '9808200926', 'RedLocal', 'download (1).png', 'www.abc.com', '9808200000', 'Preet Vihar', 'A', '2020-06-07 17:47:15'),
(5, 'sumit', 'sumit', '7225ff71e8821b24fd72b4c8fda95b9a', 'sumit@gmail.com', '9808200926', 'Ashish Test', 'newlogo.png', 'www.ab.com', '0121360555', 'Preet Vihar', 'A', '2020-06-07 17:47:15'),
(6, 'Cushing', 'Cushing', '21232f297a57a5a743894a0e4a801fc3', 'motherroadllc@yahoo.com', '9133876539', 'Red Directory ', '', '', '', '', 'A', '2020-06-16 19:02:20'),
(7, 'Dave', 'David Emerson', '083d9a270e6e16b2fbb08d35067aae5f', 'earthlocalllc@gmail.com', '913-387-6539', 'Earth Local LLC', 'Custom Dental logo.jpg', 'www.earthlocal.us', '913-335-0066', '11210 west 59th st shawnee ks 66203', 'A', '2020-06-17 10:52:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

DROP TABLE IF EXISTS `tbl_cart`;
CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `product_id`, `quantity`, `member_id`) VALUES
(27, 1, 1, 0),
(28, 1, 1, 0),
(29, 1, 1, 0),
(30, 2, 1, 0),
(31, 8, 1, 0),
(32, 1, 1, 0),
(33, 4, 1, 0),
(37, 1, 1, 6),
(38, 2, 1, 6),
(67, 1, 1, 0),
(68, 6, 1, 0),
(69, 7, 1, 0),
(70, 12, 1, 0),
(71, 14, 1, 0),
(72, 15, 1, 0),
(73, 6, 1, 0),
(74, 14, 1, 0),
(75, 1, 1, 0),
(76, 12, 1, 0),
(77, 1, 1, 0),
(78, 6, 1, 0),
(79, 7, 1, 0),
(80, 12, 1, 0),
(81, 14, 1, 0),
(82, 15, 1, 0),
(95, 1, 1, 5),
(96, 20, 1, 5),
(114, 1, 1, 4),
(115, 2, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `ad_type` enum('Book','App') DEFAULT NULL,
  `ad_format` enum('Regular','Premium') NOT NULL,
  `status` enum('A','I') NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `price`, `code`, `image`, `ad_type`, `ad_format`, `status`, `updated_at`) VALUES
(1, 'BL Bold Listings                 ', '12', '14', '', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(2, 'SBL Super Bold Listing', '18', '15', '', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(3, '2HS 1-Inch Ad ', '24', '16', '', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(4, '3HS 1 1-2 Inch Ad ', '28', '19', '', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(5, '4HS 2 Inch Ad    ', '32', '20', '', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(6, 'TM Trade Mark  TM Comp    ', '14', '17', '', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(7, 'QC - Quarter Column  (RASBL AD IN APP)    ', '45', '21', '', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(8, 'DQC - Double Quarter (RASBL AD IN APP)                    ', '65', '22', '', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(9, 'HP - Half Page (RASBL AD IN APP)        ', '100', '23', '', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(10, 'TP - 3/4 Page (RASBL AD IN APP)     ', '150', '24', '', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(11, 'FP - Full Page (RASBL AD IN APP)    ', '190', '25', '', 'Book', 'Regular', 'A', '0000-00-00 00:00:00'),
(12, 'BL Bold Listings', '12', '39', '', 'App', 'Regular', 'A', '0000-00-00 00:00:00'),
(13, 'SBL Super Bold Listing ', '18', '40', '', 'App', 'Regular', 'A', '0000-00-00 00:00:00'),
(14, 'TM Trade Mark  TM Comped  TBL', '14', '41', '', 'App', 'Regular', 'A', '0000-00-00 00:00:00'),
(15, 'FS - Full Screen Ad', '45', '26', '', 'App', 'Regular', 'A', '0000-00-00 00:00:00'),
(16, 'B-H Banner Ad under the heading of choice', '90', '27', '', 'App', 'Regular', 'A', '0000-00-00 00:00:00'),
(17, 'B-MS - Banner Ad on the main Screen', '150', '28', '', 'App', 'Regular', 'A', '0000-00-00 00:00:00'),
(18, 'VC - Video Commerical Available with a FS', '10', '29', '', 'App', 'Regular', 'A', '0000-00-00 00:00:00'),
(19, 'SI-Special Insert Ad Available with a FS', '10', '30', '', 'App', 'Regular', 'A', '0000-00-00 00:00:00'),
(20, 'OBC - Outside Back Cover      ', '500', '31', '', 'Book', 'Premium', 'A', '0000-00-00 00:00:00'),
(21, 'HOBC - Half Outside Back Cover  ', '300', '32', '', 'Book', 'Premium', 'A', '0000-00-00 00:00:00'),
(22, 'IBC - Inside Back Cover                 ', '200', '33', '', 'Book', 'Premium', 'A', '0000-00-00 00:00:00'),
(23, 'HIBC - Half Inside Back Cover                ', '125', '34', '', 'Book', 'Premium', 'A', '0000-00-00 00:00:00'),
(24, 'IFC - Inside Front Cover                        ', '400', '35', '', 'Book', 'Premium', 'A', '0000-00-00 00:00:00'),
(25, 'HIFC - Half Inside Front Cover         ', '225', '36', '', 'Book', 'Premium', 'A', '0000-00-00 00:00:00'),
(26, 'FC - Front Cover                        ', '350', '37', '', 'Book', 'Premium', 'A', '0000-00-00 00:00:00'),
(27, 'EPHP - Emergency Page Half Page        ', '175', '38', '', 'Book', 'Premium', 'A', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `variable_table`
--

DROP TABLE IF EXISTS `variable_table`;
CREATE TABLE IF NOT EXISTS `variable_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `variable_discount` varchar(20) NOT NULL,
  `handling_charge` varchar(20) NOT NULL,
  `no_money_handling_charge` varchar(20) NOT NULL,
  `monthly_charge` varchar(20) NOT NULL,
  `discount` varchar(20) NOT NULL,
  `status` enum('A','I') NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `variable_table`
--

INSERT INTO `variable_table` (`id`, `variable_discount`, `handling_charge`, `no_money_handling_charge`, `monthly_charge`, `discount`, `status`, `updated_at`) VALUES
(1, '16.6', '8.00', '10.00', '0.0', '', 'A', '2020-05-31 16:08:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
