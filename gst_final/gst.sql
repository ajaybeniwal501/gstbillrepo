-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 11, 2020 at 02:58 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gst`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_name` varchar(50) DEFAULT 'xyz',
  `state` varchar(50) DEFAULT 'xyz',
  `vendor_code` varchar(50) DEFAULT 'xyz',
  `contact_no` varchar(50) DEFAULT '123',
  `vat_number` varchar(50) DEFAULT 'xyz',
  `pan_number` varchar(50) DEFAULT 'xyz',
  `address` varchar(50) DEFAULT 'xyz',
  `fax_number` varchar(50) DEFAULT 'xyz',
  `email` varchar(50) DEFAULT 'abc@gmail.com',
  `cst_number` varchar(50) DEFAULT 'xyz',
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_name`, `state`, `vendor_code`, `contact_no`, `vat_number`, `pan_number`, `address`, `fax_number`, `email`, `cst_number`, `user_id`) VALUES
('Apple.inc', 'Harayana', 'ANCD 101', '9466020718', 'xyz', 'xyz', 'H.No 101,HR', 'xyz', 'abc@gmail.com', 'xyz', 17),
('dell.inc', 'delhi', 'hi Ajay', '123', 'xyz', 'xyz', 'jalandhar', 'xyz', 'abc@gmail.com', 'xyz', 18),
('orient', 'xyz', 'xyz', '123', 'xyz', 'xyz', 'xyz', 'xyz', 'abc@gmail.com', 'xyz', 19);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_order`
--

CREATE TABLE `invoice_order` (
  `order_id` int(255) NOT NULL,
  `order_date` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `order_receiver_name` varchar(250) NOT NULL,
  `order_receiver_address` text NOT NULL,
  `order_total_before_tax` decimal(10,2) NOT NULL,
  `order_total_tax` decimal(10,2) NOT NULL,
  `order_tax_per` varchar(250) NOT NULL,
  `order_total_after_tax` double(10,2) NOT NULL,
  `order_amount_paid` decimal(10,2) NOT NULL,
  `order_total_amount_due` decimal(10,2) NOT NULL,
  `note` text NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_order`
--

INSERT INTO `invoice_order` (`order_id`, `order_date`, `order_receiver_name`, `order_receiver_address`, `order_total_before_tax`, `order_total_tax`, `order_tax_per`, `order_total_after_tax`, `order_amount_paid`, `order_total_amount_due`, `note`, `user_id`) VALUES
(3, '2020-04-09 20:39:42', 'Ajay Beniwal', 'Ajay Beniwal, hisar, 9466020718', '30360.00', '0.00', '0', 30360.00, '5.00', '30355.00', 'gdfg', 0),
(4, '2020-04-09 20:39:42', 'Ajay', 'Ajay, new entry, 8168314612', '1156.00', '0.00', '0', 1156.00, '76.00', '1080.00', 'hi get', 0),
(5, '2020-04-09 20:39:42', 'Ajay', 'Ajay, new entry, 8168314612', '1156.00', '0.00', '0', 1156.00, '76.00', '1080.00', 'hi get', 0),
(6, '2020-04-09 20:39:42', 'dhoni', 'dhoni, 606, 8168314612', '80897.00', '0.00', '0', 80897.00, '123.00', '80774.00', 'last', 0),
(10, '2020-04-10 08:04:31', 'dhoni', 'dhoni, 606, 8168314612', '576.00', '28.00', '5', 604.00, '200.00', '404.00', 'good one ', 0),
(11, '2020-04-10 08:12:38', 'Ajay Beniwal', 'Ajay Beniwal, hisar, 9466020718', '65754.00', '3287.00', '5', 69041.00, '2000.00', '67041.00', 'top5 ', 0),
(12, '2020-04-10 09:29:58', 'msd', 'msd, H.no 606, 8168314612', '1000.00', '50.00', '5', 1050.00, '50.00', '1000.00', 'usr id', 17),
(13, '2020-04-10 09:33:50', 'ajay.beniwal6644', 'ajay.beniwal6644, Jalandhar, 8168314612', '30.00', '0.00', '0', 30.00, '0.00', '30.00', 'orient', 19),
(14, '2020-04-10 09:36:02', 'ajay.beniwal6644', 'ajay.beniwal6644, Jalandhar, 8168314612', '240000.00', '12000.00', '5', 252000.00, '25000.00', '227000.00', 'fansnsss', 19),
(15, '2020-04-10 09:38:32', 'ajay.beniwal6644', 'ajay.beniwal6644, Jalandhar, 8168314612', '4440.00', '1021.00', '23', 5461.00, '461.00', '5000.00', '20 wala', 19),
(16, '2020-04-10 09:40:06', 'ajay.beniwal6644', 'ajay.beniwal6644, Jalandhar, 8168314612', '144.00', '4.00', '3', 148.00, '1000.00', '-852.00', 'kjfsdkfjsdf', 19),
(18, '2020-04-10 12:18:00', 'msd', 'msd, H.no 606, 8168314612', '85104.00', '0.00', '0', 85104.00, '20000.00', '65104.00', 'lg and orient', 17),
(19, '2020-04-10 12:19:12', '', '', '6086.00', '0.00', '0', 6086.00, '2000.00', '4086.00', 'lg and orient', 17),
(20, '2020-04-10 12:20:00', 'Ajay', 'Ajay, new entry, 8168314612', '6608.00', '264.00', '4', 6872.00, '2000.00', '4872.00', 'lg andfdssgfgdg', 17),
(21, '2020-04-10 16:21:40', 'abc', 'abc, punjab, 987654321', '672.00', '33.00', '5', 705.00, '500.00', '205.00', 'Jalandhar\r\n', 18),
(22, '2020-04-11 08:02:57', 'Ajay Beniwal', 'Ajay Beniwal, hisar, 9466020718Ajay Beniwal, Hisar,Haryana, 987643242', '391524.00', '0.00', '0', 391524.00, '50000.00', '341524.00', 'nokia mobile', 18),
(23, '2020-04-11 08:04:25', 'Ajay Beniwal', 'Ajay Beniwal, hisar, 9466020718Ajay Beniwal, Hisar,Haryana, 987643242', '598.00', '0.00', '0', 598.00, '500.00', '98.00', 'nokia and note series', 18);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_order_item`
--

CREATE TABLE `invoice_order_item` (
  `order_item_id` int(255) NOT NULL,
  `orderid` int(11) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `order_item_quantity` varchar(200) NOT NULL,
  `order_item_price` varchar(200) NOT NULL,
  `order_item_final_amount` varchar(200) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_order_item`
--

INSERT INTO `invoice_order_item` (`order_item_id`, `orderid`, `item_name`, `order_item_quantity`, `order_item_price`, `order_item_final_amount`, `user_id`) VALUES
(1, 0, 'Samsung', '9', '7', '63', 0),
(2, 0, 'oppo Reno x', '', '', '0', 0),
(3, 0, '', '', '', '0', 0),
(4, 0, '', '', '', '0', 0),
(5, 0, '', '', '', '0', 0),
(6, 0, '', '', '', '0', 0),
(7, 0, '', '', '', '0', 0),
(8, 0, '', '', '', '0', 0),
(9, 0, '', '', '', '0', 0),
(10, 0, '', '', '', '0', 0),
(11, 0, 'oppo Reno x', '98', '4', '392', 0),
(12, 0, 'oppo Reno x', '67', '4', '268', 0),
(13, 0, 'oppo Reno x', '43', '3', '129', 0),
(14, 0, 'Apple', '32', '3', '96', 0),
(15, 0, '', '8', '2', '16', 0),
(16, 0, '', '', '', '0', 0),
(17, 0, '', '', '', '0', 0),
(18, 0, '', '', '', '0', 0),
(19, 0, '', '', '', '0', 0),
(20, 0, '', '', '', '0', 0),
(21, 0, '', '', '', '', 0),
(22, 0, '', '', '', '', 0),
(23, 0, '', '', '', '', 0),
(24, 0, '', '', '', '', 0),
(25, 0, '', '', '', '', 0),
(26, 0, '', '', '', '', 0),
(27, 0, '', '', '', '', 0),
(28, 0, '', '', '', '', 0),
(29, 0, '', '', '', '', 0),
(30, 0, '', '', '', '', 0),
(31, 0, 'oppo Reno x', '87', '978', '85086', 0),
(32, 0, '', '', '', '0', 0),
(33, 0, '', '', '', '0', 0),
(34, 0, '', '', '', '0', 0),
(35, 0, '', '', '', '0', 0),
(36, 0, '', '', '', '0', 0),
(37, 0, '', '', '', '0', 0),
(38, 0, '', '', '', '0', 0),
(39, 0, '', '', '', '0', 0),
(40, 0, '', '', '', '0', 0),
(41, 0, 'Apple', '12', '12', '144', 0),
(42, 0, 'oppo Reno x', '12', '12', '144', 0),
(43, 0, 'oppo Reno x', '12', '12', '144', 0),
(44, 0, '', '', '', '0', 0),
(45, 0, '', '', '', '0', 0),
(46, 0, '', '', '', '0', 0),
(47, 0, '', '', '', '0', 0),
(48, 0, '', '', '', '0', 0),
(49, 0, '', '', '', '0', 0),
(50, 0, '', '', '', '0', 0),
(51, 0, 'Apple', '12', '12', '144', 0),
(52, 0, 'oppo Reno x', '12', '12', '144', 0),
(53, 0, 'oppo Reno x', '12', '12', '144', 0),
(54, 0, '', '', '', '0', 0),
(55, 0, '', '', '', '0', 0),
(56, 0, '', '', '', '0', 0),
(57, 0, '', '', '', '0', 0),
(58, 0, '', '', '', '0', 0),
(59, 0, '', '', '', '0', 0),
(60, 0, '', '', '', '0', 0),
(61, 0, 'Apple', '12', '2', '24', 0),
(62, 0, 'Samsung', '', '', '0', 0),
(63, 0, '', '', '', '0', 0),
(64, 0, '', '', '', '0', 0),
(65, 0, '', '', '', '0', 0),
(66, 0, '', '', '', '0', 0),
(67, 0, '', '', '', '0', 0),
(68, 0, '', '', '', '0', 0),
(69, 0, '', '', '', '0', 0),
(70, 0, '', '', '', '0', 0),
(71, 0, 'Apple', '12', '12', '144', 0),
(72, 0, 'Apple', '1324', '23423', '31012052', 0),
(73, 0, '', '', '', '0', 0),
(74, 0, '', '', '', '0', 0),
(75, 0, '', '', '', '0', 0),
(76, 0, '', '', '', '0', 0),
(77, 0, '', '', '', '0', 0),
(78, 0, '', '', '', '0', 0),
(79, 0, '', '', '', '0', 0),
(80, 0, '', '', '', '0', 0),
(81, 0, 'Apple', '12', '12', '144', 0),
(82, 0, 'Apple', '1324', '23423', '31012052', 0),
(83, 0, '', '', '', '0', 0),
(84, 0, '', '', '', '0', 0),
(85, 0, '', '', '', '0', 0),
(86, 0, '', '', '', '0', 0),
(87, 0, '', '', '', '0', 0),
(88, 0, '', '', '', '0', 0),
(89, 0, '', '', '', '0', 0),
(90, 0, '', '', '', '0', 0),
(91, 0, 'nokia', '3', '34', '102', 0),
(92, 0, 'Apple', '34', '4', '136', 0),
(93, 0, '', '', '', '0', 0),
(94, 0, '', '', '', '0', 0),
(95, 0, '', '', '', '0', 0),
(96, 0, '', '', '', '0', 0),
(97, 0, '', '', '', '0', 0),
(98, 0, '', '', '', '0', 0),
(99, 0, '', '', '', '0', 0),
(100, 0, '', '', '', '0', 0),
(101, 0, 'Samsung', '345', '45', '15525', 0),
(102, 0, 'oppo Reno x', '345', '43', '14835', 0),
(103, 0, '', '', '', '0', 0),
(104, 0, '', '', '', '0', 0),
(105, 0, '', '', '', '0', 0),
(106, 0, '', '', '', '0', 0),
(107, 0, '', '', '', '0', 0),
(108, 0, '', '', '', '0', 0),
(109, 0, '', '', '', '0', 0),
(110, 0, '', '', '', '0', 0),
(111, 4, 'Apple', '34', '34', '1156', 0),
(112, 4, '', '', '', '0', 0),
(113, 4, '', '', '', '0', 0),
(114, 4, '', '', '', '0', 0),
(115, 4, '', '', '', '0', 0),
(116, 4, '', '', '', '0', 0),
(117, 4, '', '', '', '0', 0),
(118, 4, '', '', '', '0', 0),
(119, 4, '', '', '', '0', 0),
(120, 4, '', '', '', '0', 0),
(121, 5, 'Apple', '34', '34', '1156', 0),
(122, 5, '', '', '', '0', 0),
(123, 5, '', '', '', '0', 0),
(124, 5, '', '', '', '0', 0),
(125, 5, '', '', '', '0', 0),
(126, 5, '', '', '', '0', 0),
(127, 5, '', '', '', '0', 0),
(128, 5, '', '', '', '0', 0),
(129, 5, '', '', '', '0', 0),
(130, 5, '', '', '', '0', 0),
(131, 0, 'Apple', '1232', '21313', '26257616', 0),
(132, 0, 'Apple', '1232', '12312', '15168384', 0),
(133, 0, 'Samsung', '123123', '123123', '15159273129', 0),
(134, 0, '', '', '', '0', 0),
(135, 0, '', '', '', '0', 0),
(136, 0, '', '', '', '0', 0),
(137, 0, '', '', '', '0', 0),
(138, 0, '', '', '', '0', 0),
(139, 0, '', '', '', '0', 0),
(140, 0, '', '', '', '0', 0),
(141, 0, 'Apple', '1232', '21313', '26257616', 0),
(142, 0, 'Apple', '1232', '12312', '15168384', 0),
(143, 0, 'Samsung', '123123', '123123', '15159273129', 0),
(144, 0, '', '', '', '0', 0),
(145, 0, '', '', '', '0', 0),
(146, 0, '', '', '', '0', 0),
(147, 0, '', '', '', '0', 0),
(148, 0, '', '', '', '0', 0),
(149, 0, '', '', '', '0', 0),
(150, 0, '', '', '', '0', 0),
(151, 6, 'oppo Reno x', '3', '423', '1269', 0),
(152, 6, 'nokia', '34', '2342', '79628', 0),
(153, 6, '', '', '', '0', 0),
(154, 6, '', '', '', '0', 0),
(155, 6, '', '', '', '0', 0),
(156, 6, '', '', '', '0', 0),
(157, 6, '', '', '', '0', 0),
(158, 6, '', '', '', '0', 0),
(159, 6, '', '', '', '0', 0),
(160, 6, '', '', '', '0', 0),
(161, 7, 'oppo Reno x', '3', '423', '1269', 0),
(162, 7, 'nokia', '34', '2342', '79628', 0),
(163, 7, '', '', '', '0', 0),
(164, 7, '', '', '', '0', 0),
(165, 7, '', '', '', '0', 0),
(166, 7, '', '', '', '0', 0),
(167, 7, '', '', '', '0', 0),
(168, 7, '', '', '', '0', 0),
(169, 7, '', '', '', '0', 0),
(170, 7, '', '', '', '0', 0),
(171, 8, 'oppo Reno x', '12', '121', '1452', 0),
(172, 8, 'oppo Reno x', '12', '221', '2652', 0),
(173, 8, '', '', '', '0', 0),
(174, 8, '', '', '', '0', 0),
(175, 8, '', '', '', '0', 0),
(176, 8, '', '', '', '0', 0),
(177, 8, '', '', '', '0', 0),
(178, 8, '', '', '', '0', 0),
(179, 8, '', '', '', '0', 0),
(180, 8, '', '', '', '0', 0),
(181, 9, 'Ajay', '12', '12', '144', 0),
(182, 9, 'Beniwal', '12', '12', '144', 0),
(183, 0, 'Samsung', '12', '12', '144', 0),
(184, 0, '', '', '', '0', 0),
(185, 0, '', '23', '32', '736', 0),
(186, 0, '', '', '', '0', 0),
(187, 0, '', '', '', '0', 0),
(188, 0, '', '', '', '', 0),
(189, 0, '', '', '', '', 0),
(190, 0, '', '', '', '', 0),
(191, 0, '', '', '', '', 0),
(192, 0, '', '', '', '', 0),
(193, 0, '', '', '', '', 0),
(194, 0, '', '', '', '', 0),
(195, 0, '', '', '', '', 0),
(196, 0, '', '', '', '', 0),
(197, 0, '', '', '', '', 0),
(198, 0, '', '', '', '', 0),
(199, 0, '', '', '', '', 0),
(200, 0, '', '', '', '', 0),
(201, 0, '', '', '', '', 0),
(202, 0, '', '', '', '', 0),
(203, 0, '', '', '', '', 0),
(204, 0, '', '', '', '', 0),
(205, 0, '', '', '', '', 0),
(206, 0, '', '', '', '', 0),
(207, 0, '', '', '', '', 0),
(208, 0, '', '', '', '', 0),
(209, 0, '', '', '', '', 0),
(210, 0, '', '', '', '', 0),
(211, 0, '', '', '', '', 0),
(212, 0, '', '', '', '', 0),
(213, 0, '', '', '', '', 0),
(214, 0, '', '', '', '', 0),
(215, 0, '', '', '', '', 0),
(216, 0, '', '', '', '', 0),
(217, 0, '', '', '', '', 0),
(218, 0, '', '', '', '', 0),
(219, 0, '', '', '', '', 0),
(220, 0, '', '', '', '', 0),
(221, 0, '', '', '', '', 0),
(222, 0, '', '', '', '', 0),
(223, 0, '', '', '', '', 0),
(224, 0, '', '', '', '', 0),
(225, 0, '', '', '', '', 0),
(226, 0, '', '', '', '', 0),
(227, 0, '', '', '', '', 0),
(228, 0, '', '', '', '', 0),
(229, 0, '', '', '', '', 0),
(230, 0, '', '', '', '', 0),
(231, 0, '', '', '', '', 0),
(232, 0, '', '', '', '', 0),
(233, 0, '', '', '', '', 0),
(234, 0, '', '', '', '', 0),
(235, 0, '', '', '', '', 0),
(236, 0, '', '', '', '', 0),
(237, 0, '', '', '', '', 0),
(238, 0, '', '', '', '', 0),
(239, 0, '', '', '', '', 0),
(240, 0, '', '', '', '', 0),
(241, 0, '', '', '', '', 0),
(242, 0, '', '', '', '', 0),
(243, 0, '', '', '', '', 0),
(244, 0, '', '', '', '', 0),
(245, 0, '', '', '', '', 0),
(246, 0, '', '', '', '', 0),
(247, 0, '', '', '', '', 0),
(248, 0, '', '', '', '', 0),
(249, 0, '', '', '', '', 0),
(250, 0, '', '', '', '', 0),
(251, 0, '', '', '', '', 0),
(252, 0, '', '', '', '', 0),
(253, 0, '', '', '', '', 0),
(254, 0, '', '', '', '', 0),
(255, 0, '', '', '', '', 0),
(256, 0, '', '', '', '', 0),
(257, 0, '', '', '', '', 0),
(258, 10, 'oppo Reno x', '12', '12', '144', 0),
(259, 10, 'oppo Reno x', '12', '12', '144', 0),
(260, 10, 'Apple', '12', '12', '144', 0),
(261, 10, 'Apple', '12', '12', '144', 0),
(262, 10, 'Samsung', '', '', '0', 0),
(263, 10, '', '', '', '0', 0),
(264, 10, '', '', '', '0', 0),
(265, 10, '', '', '', '0', 0),
(266, 10, '', '', '', '0', 0),
(267, 10, '', '', '', '0', 0),
(268, 11, 'oppo Reno x', '12', '34', '408', 0),
(269, 11, 'nokia', '345', '56', '19320', 0),
(270, 11, 'Apple', '342', '5', '1710', 0),
(271, 11, 'Apple', '32', '432', '13824', 0),
(272, 11, 'nokia', '132', '231', '30492', 0),
(273, 12, 'LG LED', '2', '100', '200', 17),
(274, 12, 'LG LED', '2', '100', '200', 17),
(275, 12, 'LG LED', '2', '100', '200', 17),
(276, 12, 'Apple', '2', '100', '200', 17),
(277, 12, 'Samsung', '2', '100', '200', 17),
(278, 13, 'orient ', '2', '3', '6', 19),
(279, 13, 'hifi', '3', '2', '6', 19),
(280, 13, 'orient ', '2', '3', '6', 19),
(281, 13, 'hifi', '3', '2', '6', 19),
(282, 13, 'orient ', '2', '3', '6', 19),
(283, 14, 'hifi', '20000', '6', '120000', 19),
(284, 14, 'hifi', '20000', '6', '120000', 19),
(285, 14, '', '', '', '0', 19),
(286, 14, '', '', '', '0', 19),
(287, 14, '', '', '', '0', 19),
(288, 14, '', '', '', '0', 19),
(289, 14, '', '', '', '0', 19),
(290, 14, '', '', '', '0', 19),
(291, 14, '', '', '', '0', 19),
(292, 14, '', '', '', '0', 19),
(293, 0, 'hifi', '43', '234', '10062', 19),
(294, 0, 'hifi', '42', '342', '14364', 19),
(295, 0, '', '', '', '0', 19),
(296, 0, '', '', '', '0', 19),
(297, 0, '', '', '', '0', 19),
(298, 0, '', '', '', '0', 19),
(299, 0, '', '', '', '0', 19),
(300, 0, '', '', '', '0', 19),
(301, 0, '', '', '', '0', 19),
(302, 0, '', '', '', '0', 19),
(303, 0, '', '', '', '0', 19),
(304, 0, '', '', '', '0', 19),
(305, 0, '', '', '', '0', 19),
(306, 0, '', '', '', '0', 19),
(307, 0, '', '', '', '0', 19),
(308, 0, '', '', '', '0', 19),
(309, 0, '', '', '', '0', 19),
(310, 0, '', '', '', '0', 19),
(311, 0, '', '', '', '0', 19),
(312, 0, '', '', '', '0', 19),
(313, 15, 'hifi', '20', '20', '400', 19),
(314, 15, 'hifi', '202', '20', '4040', 19),
(315, 15, '', '', '', '0', 19),
(316, 15, '', '', '', '0', 19),
(317, 15, '', '', '', '0', 19),
(318, 15, '', '', '', '0', 19),
(319, 15, '', '', '', '0', 19),
(320, 15, '', '', '', '0', 19),
(321, 15, '', '', '', '0', 19),
(322, 15, '', '', '', '0', 19),
(323, 15, '', '', '', '0', 19),
(324, 15, '', '', '', '0', 19),
(325, 15, '', '', '', '0', 19),
(326, 15, '', '', '', '0', 19),
(327, 15, '', '', '', '0', 19),
(328, 15, '', '', '', '0', 19),
(329, 15, '', '', '', '0', 19),
(330, 15, '', '', '', '0', 19),
(331, 15, '', '', '', '0', 19),
(332, 15, '', '', '', '0', 19),
(333, 16, 'orient gyser', '12', '12', '144', 19),
(334, 16, '12', '12', '', '0', 19),
(335, 16, '12', '12', '', '0', 19),
(336, 16, '12', '12', '', '0', 19),
(337, 16, '12', '12', '', '0', 19),
(338, 17, 'samsung led', '12', '45', '540', 18),
(339, 17, 'somy led', '1', '54', '54', 18),
(340, 17, 'samsung movbile', '2', '45', '90', 18),
(341, 17, 'ok ji', '2', '3', '6', 18),
(342, 0, 'orient', '12', '12', '144', 17),
(343, 0, '12', '12', '', '0', 17),
(344, 0, '12', '12', '', '0', 17),
(345, 18, 'Samsung', '231', '132', '30492', 17),
(346, 18, 'LG LED', '123', '312', '38376', 17),
(347, 18, 'Apple', '123', '132', '16236', 17),
(348, 18, '', '', '', '0', 17),
(349, 18, '', '', '', '0', 17),
(350, 18, '', '', '', '0', 17),
(351, 18, '', '', '', '0', 17),
(352, 18, '', '', '', '0', 17),
(353, 18, '', '', '', '0', 17),
(354, 18, '', '', '', '0', 17),
(355, 18, '', '', '', '0', 17),
(356, 18, '', '', '', '0', 17),
(357, 18, '', '', '', '0', 17),
(358, 18, '', '', '', '0', 17),
(359, 18, '', '', '', '0', 17),
(360, 18, '', '', '', '0', 17),
(361, 18, '', '', '', '0', 17),
(362, 18, '', '', '', '0', 17),
(363, 18, '', '', '', '0', 17),
(364, 18, '', '', '', '0', 17),
(365, 19, 'orinet ', '12', '78', '936', 17),
(366, 19, 'lg', '34', '23', '782', 17),
(367, 19, 'refierjator', '56', '78', '4368', 17),
(368, 20, 'gfgd', '56', '6', '336', 17),
(369, 20, 'dfg', '56', '56', '3136', 17),
(370, 20, 'dfgdf', '56', '56', '3136', 17),
(371, 21, 'Orient Fan', '12', '34', '408', 18),
(372, 21, 'nokia', '3', '32', '96', 18),
(373, 21, 'oppo Reno x', '6', '23', '138', 18),
(374, 21, 'Samsung', '2', '7', '14', 18),
(375, 21, 'Orient Fan', '8', '2', '16', 18),
(376, 22, 'Nokia 3130', '12', '4', '48', 18),
(377, 22, 'oppo Reno x', '4', '4', '16', 18),
(378, 22, 'Samsung', '65', '4', '260', 18),
(379, 22, 'Orient Fan', '32', '4', '128', 18),
(380, 22, 'Nokia 3130', '8888', '44', '391072', 18),
(381, 23, 'nokia A7', '12', '23', '276', 18),
(382, 23, 'Nokia note 8', '14', '23', '322', 18);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `item_code` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_desc` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `ref` int(10) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `item_code`, `item_name`, `item_desc`, `user_id`, `ref`) VALUES
(3, '34g', 'Apple', 'good one and efficiect', 17, 3),
(4, '32113n', 'oppo Reno x', 'nice description', 18, 3),
(5, 'T3130', 'Samsung', 'Description galaxy Star', 18, 3),
(6, 'T3130', 'Samsung', 'Description galaxy Star', 17, 3),
(9, 'HGD', 'LG LED', 'LG life good', 17, 3),
(10, 'ORI', 'orient ', 'fan is good', 19, 3),
(11, 'HD', 'hifi', 'good sound', 19, 3),
(12, 'DS101', 'Orient Fan', 'Fats  but costly', 18, 3),
(13, 'NK', 'Nokia 3130', 'Good Mobile and efficient', 18, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `customer_no` varchar(150) NOT NULL,
  `email` varchar(120) NOT NULL,
  `contact_no` char(12) NOT NULL,
  `customer_gst` varchar(255) NOT NULL,
  `fax_number` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `address` varchar(200) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `name`, `customer_no`, `email`, `contact_no`, `customer_gst`, `fax_number`, `address`, `user_id`) VALUES
(13, 'Aj', 'dfdfsd', 'dsfsdd', '8168314612', 'dsfsdf', 'fdsfdfd', '606', 17),
(14, 'dhoni', 'dfdfsd', 'dsfsdd', '8168314612', 'dsfsdf', '4353454', '606', 18),
(15, 'Ajay', '564646', '5gdfgg', '8168314612', 'fghghfhghfg', 'ghfgh', 'new entry', 17),
(16, 'msd', 'ffgddfg', 'dfdfgf', '8168314612', 'dfgfgddgf', 'ghdfgf', 'H.no 606', 17),
(17, 'fresh', 'fdfdf', '546ghg', '8168314612', 'dfgf', '456ft', 'H.no 606', 18),
(28, 'Ajay Beniwal', '9466020718', 'ajay@gmail.com', '9466020718', 'NYF2', 'TGSj3', 'hisar', 17),
(30, 'ajay.beniwal6644', '5435', 'beniwal@gmail.com', '8168314612', 'retrtert', 'tterte', 'Jalandhar', 19),
(32, 'Ajay Beniwal', '76', 'ajay123@gmail.com', '987643242', 'GSTin No', 'fasrt', 'Hisar,Haryana', 18);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`, `created_at`) VALUES
(17, 'ajay', 'Ajay', 'ajay@gmail.com', '$2y$10$apd7ZDrME6Re6YyH5.ooMOONIRAN8IN1uRd1960tQNjnY9fQxpAyi', '2020-04-01 17:52:35'),
(18, 'ajay123', 'Beniwal', 'ajay@gmail.com', '$2y$10$apd7ZDrME6Re6YyH5.ooMOONIRAN8IN1uRd1960tQNjnY9fQxpAyi', '2020-04-02 10:04:21'),
(19, 'ajay12345', 'Ajay', 'ajay123@gmail.com', '$2y$10$ZBO84NP8FTXtpxRQEEO91.ucTHXyQafy52Jl8fDAab5dNkWcC04bm', '2020-04-10 08:48:30'),
(20, 'ajay1231', 'Ajay Beniwal', 'ajay@gmail.com', '$2y$10$9Lk6R4oddzhsnPuFCEro7.m90bEsSujFTKZkBXjZ0q7h.963Ggzf6', '2020-04-11 07:33:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `invoice_order`
--
ALTER TABLE `invoice_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `invoice_order_item`
--
ALTER TABLE `invoice_order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice_order`
--
ALTER TABLE `invoice_order`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `invoice_order_item`
--
ALTER TABLE `invoice_order_item`
  MODIFY `order_item_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=383;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
