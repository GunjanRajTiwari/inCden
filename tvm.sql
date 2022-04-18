-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2020 at 03:53 PM
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
-- Database: `tvm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ano` int(10) NOT NULL,
  `ausername` varchar(128) NOT NULL,
  `apassword` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ano`, `ausername`, `apassword`) VALUES
(1, 'Minhaj', '$2y$10$m8tE2HzBVR3oZgXy0d5.UerjqG7Z9j4mDK0IEYD1AmmQK1Z/Bv3w2'),
(13, 'Krinza', '$2y$10$zvqCNJrUF1wzbQWpYrXHn.ZGhhPQYaTYiKE3BK5HvXVTqm1LM38aK');

-- --------------------------------------------------------

--
-- Table structure for table `hostname`
--

CREATE TABLE `hostname` (
  `ino` int(10) NOT NULL,
  `idata` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hostname`
--

INSERT INTO `hostname` (`ino`, `idata`) VALUES
(1, 'RPS'),
(2, 'IR Wallet'),
(3, 'RPS Application Server');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `rid` int(10) NOT NULL,
  `vuln` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `vdate` datetime DEFAULT NULL,
  `senofk` int(10) NOT NULL,
  `synofk` int(10) NOT NULL,
  `inofk` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`rid`, `vuln`, `status`, `vdate`, `senofk`, `synofk`, `inofk`) VALUES
(1, 'User credentials are sent in clear text', 1, '2019-07-02 13:17:37', 5, 1, 1),
(2, 'At least one improperly configured Windows service may have a privilege escalation vulnerability.', 1, '2019-07-03 07:46:19', 3, 1, 3),
(3, 'HTTP.sys remote code execution vulnerability', 1, '2019-07-03 09:47:31', 4, 1, 1),
(4, 'Cookie(s) without HttpOnly flag set', 1, '2019-07-03 09:49:35', 1, 1, 1),
(5, 'Possible sensitive directories', 0, '2019-07-03 09:50:06', 2, 1, 1),
(6, 'The remote service supports the use of the RC4 cipher.', 1, '2019-07-03 12:10:13', 1, 1, 3),
(7, 'HTTP.sys remote code execution vulnerability', 0, NULL, 4, 1, 1),
(8, 'Validate incoming content-types', 0, NULL, 5, 1, 2),
(9, 'Input Validation', 0, NULL, 5, 1, 2),
(10, 'User credentials are sent in clear text', 1, NULL, 5, 1, 1),
(11, 'Cookie(s) without HttpOnly flag set', 1, NULL, 1, 1, 1),
(12, 'Microsoft IIS version disclosure', 1, NULL, 1, 1, 1),
(13, 'Possible sensitive directories', 0, NULL, 2, 1, 1),
(14, 'Clickjacking: X-Frame-Options header missing', 1, NULL, 1, 1, 1),
(15, 'OPTIONS method is enabled', 1, NULL, 1, 1, 1),
(16, 'Web server default welcome page', 0, NULL, 2, 1, 1),
(17, 'Change of Amount during Traffic Interception', 0, NULL, 5, 1, 2),
(18, 'Microsoft IIS tilde directory enumeration', 0, NULL, 4, 1, 1),
(19, 'An unsupported software framework is installed on the remote Windows\nhost.', 0, NULL, 4, 1, 3),
(20, 'The version of the .NET Framework installed on the remote host is\naffected by a denial of service vulnerability.', 0, NULL, 4, 1, 3),
(21, 'The version of the .NET Framework installed on the remote host is\naffected by a denial of service vulnerability.', 0, NULL, 4, 1, 3),
(22, 'The version of the .NET Framework installed on the remote host is\naffected by a denial of service vulnerability.', 0, NULL, 4, 1, 3),
(23, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(24, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(25, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(26, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(27, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(28, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(29, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(30, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(31, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(32, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(33, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(34, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(35, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(36, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(37, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(38, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(39, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(40, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(41, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(42, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(43, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(44, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(45, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(46, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(47, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(48, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(49, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(50, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(51, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(52, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(53, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(54, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(55, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(56, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(57, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(58, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(59, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(60, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(61, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(62, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(63, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(64, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(65, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(66, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(67, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(68, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(69, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(70, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(71, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(72, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(73, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(74, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(75, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(76, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(77, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(78, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(79, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(80, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(81, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(82, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(83, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(84, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(85, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(86, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(87, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(88, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(89, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(90, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(91, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(92, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(93, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(94, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(95, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(96, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(97, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(98, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(99, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(100, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(101, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(102, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(103, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(104, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(105, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(106, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(107, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(108, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(109, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(110, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(111, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(112, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(113, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(114, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(115, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(116, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(117, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(118, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(119, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(120, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(121, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(122, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(123, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(124, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(125, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(126, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(127, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(128, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(129, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(130, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(131, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(132, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(133, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(134, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(135, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(136, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(137, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(138, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(139, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(140, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(141, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(142, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(143, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(144, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(145, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(146, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(147, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(148, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(149, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(150, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(151, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(152, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(153, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(154, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(155, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(156, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(157, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(158, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(159, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(160, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(161, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(162, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(163, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(164, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(165, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(166, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(167, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(168, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(169, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(170, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(171, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(172, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(173, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(174, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(175, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(176, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(177, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(178, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(179, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(180, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(181, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(182, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(183, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(184, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(185, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(186, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(187, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(188, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(189, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(190, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(191, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(192, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(193, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(194, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(195, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(196, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(197, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(198, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(199, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(200, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(201, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(202, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(203, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(204, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(205, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(206, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(207, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(208, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(209, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(210, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(211, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(212, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(213, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(214, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(215, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(216, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(217, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(218, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(219, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(220, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(221, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(222, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(223, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(224, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(225, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(226, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(227, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(228, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(229, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(230, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(231, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 4, 1, 3),
(232, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(233, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(234, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(235, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(236, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(237, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(238, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(239, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(240, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(241, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(242, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(243, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(244, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(245, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(246, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(247, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(248, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(249, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(250, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(251, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(252, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(253, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(254, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(255, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(256, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(257, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(258, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(259, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(260, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(261, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(262, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(263, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(264, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(265, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(266, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(267, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(268, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(269, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(270, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(271, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(272, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(273, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(274, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(275, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(276, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(277, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(278, 'Compliance checks for Windows systems.', 0, NULL, 5, 1, 3),
(279, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(280, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(281, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(282, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(283, 'Compliance checks for Windows systems.', 0, NULL, 3, 1, 3),
(284, 'An SSL certificate in the certificate chain has been signed using a\nweak hash algorithm.', 1, NULL, 5, 1, 3),
(285, 'The remote service supports the use of 5 strength SSL ciphers.', 1, NULL, 5, 1, 3),
(286, 'The SSL certificate for this service cannot be trusted.', 1, NULL, 5, 1, 3),
(287, 'Arbitrary code can be executed on the remote host through the\nMicrosoft Foundation Class library.', 1, NULL, 3, 1, 3),
(288, 'The SSL certificate chain for this service ends in an unrecognized\nself-signed certificate.', 1, NULL, 5, 1, 3),
(289, 'Signing is not required on the remote SMB server.', 1, NULL, 5, 1, 3),
(290, 'At least one improperly configured Windows service may have a\nprivilege escalation vulnerability.', 1, NULL, 3, 1, 3),
(291, 'The remote service supports the use of the RC4 cipher.', 1, NULL, 1, 1, 3),
(292, 'The remote service supports the use of the RC4 cipher.', 1, NULL, 1, 1, 3),
(293, 'The .NET Framework installed on the remote Windows host is affected by\na privilege escalation vulnerability.', 1, NULL, 3, 1, 3),
(294, 'The version of the .NET Framework installed on the remote host is\naffected by a security feature bypass vulnerability.', 1, NULL, 5, 1, 3),
(295, 'The version of the .NET Framework installed on the remote host is\naffected by a denial of service vulnerability.', 1, NULL, 5, 1, 3),
(296, 'The remote host is affected by a remote information disclosure\nvulnerability.', 1, NULL, 5, 1, 3),
(297, 'The version of the .NET Framework installed on the remote host is\naffected by a privilege elevation vulnerability.', 0, NULL, 3, 1, 3),
(298, 'The remote Windows host is affected by a remote code execution\nvulnerability.', 0, NULL, 3, 1, 3),
(299, 'The version of the .NET Framework installed on the remote host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(300, 'The version of the .NET Framework installed on the remote host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(301, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(302, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(303, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(304, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(305, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(306, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(307, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(308, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(309, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(310, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(311, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(312, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(313, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(314, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(315, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(316, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(317, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(318, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(319, 'The version of the .NET Framework installed on the remote host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(320, 'The version of the .NET Framework installed on the remote host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(321, 'The version of the .NET Framework installed on the remote host is\naffected by multiple vulnerabilities.', 0, NULL, 5, 1, 3),
(322, 'The version of the .NET Framework installed on the remote host is\naffected by multiple vulnerabilities.', 0, NULL, 5, 1, 3),
(323, 'The version of the .NET Framework installed on the remote host is\naffected by multiple vulnerabilities.', 0, NULL, 5, 1, 3),
(324, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(325, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(326, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(327, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(328, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(329, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(330, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(331, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(332, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(333, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(334, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(335, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 1, NULL, 3, 1, 3),
(336, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(337, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(338, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(339, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(340, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(341, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(342, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(343, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(344, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(345, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(346, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(347, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(348, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(349, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(350, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(351, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(352, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(353, 'The remote host has a web browser installed that is affected by\nmultiple vulnerabilities.', 0, NULL, 3, 1, 3),
(354, 'The remote host is affected by multiple remote code execution\nvulnerabilities.', 0, NULL, 3, 1, 3),
(355, 'The remote host is affected by multiple remote code execution\nvulnerabilities.', 0, NULL, 3, 1, 3),
(356, 'The remote host is affected by multiple remote code execution\nvulnerabilities.', 0, NULL, 3, 1, 3),
(357, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(358, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(359, 'The remote Windows host is affected by a security feature bypass\nvulnerability.', 0, NULL, 5, 1, 3),
(360, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(361, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(362, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(363, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(364, 'The remote Windows host is affected by an information disclosure\nvulnerability.', 0, NULL, 5, 1, 3),
(365, 'The remote Windows host is affected by an information disclosure\nvulnerability.', 0, NULL, 5, 1, 3),
(366, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(367, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(368, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(369, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(370, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(371, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(372, 'The remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(373, 'The remote Windows host has a software framework installed that is\naffected by an arbitrary code execution vulnerability.', 0, NULL, 3, 1, 3),
(374, 'The remote Windows host has a software framework installed that is\naffected by a security feature bypass vulnerability.', 0, NULL, 5, 1, 3),
(375, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(376, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(377, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(378, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(379, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(380, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(381, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(382, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(383, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(384, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(385, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(386, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(387, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(388, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(389, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(390, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(391, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(392, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(393, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(394, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(395, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(396, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(397, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(398, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(399, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(400, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(401, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(402, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(403, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(404, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(405, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(406, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(407, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(408, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(409, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(410, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(411, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(412, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(413, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(414, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(415, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(416, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(417, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(418, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(419, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(420, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(421, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(422, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(423, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(424, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(425, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(426, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(427, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(428, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(429, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(430, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(431, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(432, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(433, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(434, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3);
INSERT INTO `register` (`rid`, `vuln`, `status`, `vdate`, `senofk`, `synofk`, `inofk`) VALUES
(435, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(436, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(437, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(438, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(439, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(440, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(441, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(442, 'The remote Windows host has a software framework installed that is\naffected by a security feature bypass vulnerability.', 0, NULL, 3, 1, 3),
(443, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(444, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(445, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(446, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(447, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(448, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(449, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(450, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(451, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(452, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(453, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(454, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(455, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(456, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(457, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(458, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(459, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(460, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(461, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(462, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(463, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(464, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(465, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(466, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(467, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(468, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(469, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(470, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(471, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(472, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(473, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(474, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(475, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(476, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(477, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(478, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(479, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(480, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(481, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(482, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(483, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(484, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(485, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(486, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(487, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(488, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(489, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(490, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(491, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(492, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(493, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(494, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(495, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(496, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(497, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(498, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(499, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(500, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(501, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(502, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(503, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(504, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(505, 'The Internet Explorer installation on the remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(506, 'The Internet Explorer installation on the remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(507, 'The Internet Explorer installation on the remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(508, 'The Internet Explorer installation on the remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(509, 'The Internet Explorer installation on the remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(510, 'The Internet Explorer installation on the remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(511, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(512, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(513, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(514, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(515, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(516, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(517, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(518, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(519, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(520, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(521, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(522, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(523, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(524, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(525, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(526, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(527, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(528, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(529, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(530, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(531, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(532, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(533, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(534, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(535, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(536, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(537, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(538, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(539, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(540, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(541, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(542, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(543, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(544, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(545, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(546, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(547, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(548, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(549, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(550, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(551, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(552, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(553, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(554, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(555, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(556, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(557, 'The Microsoft .NET Framework installation on the remote host is affected by multiple vulnerabilities.', 1, NULL, 3, 1, 3),
(558, 'The Microsoft .NET Framework installation on the remote host is affected by multiple vulnerabilities.', 1, NULL, 3, 1, 3),
(559, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(560, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(561, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(562, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(563, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(564, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(565, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(566, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(567, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(568, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(569, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(570, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(571, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(572, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(573, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(574, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(575, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(576, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(577, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(578, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(579, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(580, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(581, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(582, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(583, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(584, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(585, 'The Microsoft .NET Framework installation on the remote host is missing a security update.', 1, NULL, 5, 1, 3),
(586, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(587, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(588, 'The Microsoft .NET Framework installation on the remote host is\nmissing a security update.', 1, NULL, 5, 1, 3),
(589, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(590, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(591, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(592, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(593, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(594, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(595, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(596, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(597, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(598, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(599, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(600, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(601, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(602, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(603, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(604, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(605, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(606, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(607, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(608, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(609, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(610, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(611, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(612, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(613, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(614, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(615, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(616, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(617, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(618, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(619, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(620, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(621, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(622, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(623, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(624, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(625, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(626, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(627, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(628, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(629, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(630, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(631, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(632, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(633, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(634, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(635, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(636, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(637, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(638, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(639, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(640, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(641, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(642, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(643, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(644, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(645, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(646, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(647, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(648, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(649, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(650, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(651, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(652, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(653, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(654, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(655, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(656, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(657, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(658, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(659, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(660, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(661, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(662, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(663, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(664, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(665, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(666, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(667, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(668, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(669, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(670, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(671, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(672, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(673, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(674, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(675, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(676, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(677, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(678, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(679, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(680, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(681, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(682, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(683, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(684, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(685, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(686, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(687, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(688, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(689, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(690, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(691, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(692, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(693, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(694, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(695, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(696, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(697, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(698, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(699, 'The Internet Explorer installation on the remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(700, 'The Internet Explorer installation on the remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(701, 'The remote Windows host has a browser plugin installed that is\naffected by multiple vulnerabilities.', 0, NULL, 5, 1, 3),
(702, 'The remote Windows host has a browser plugin installed that is\naffected by multiple vulnerabilities.', 0, NULL, 5, 1, 3),
(703, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(704, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(705, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(706, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(707, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(708, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(709, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(710, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(711, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(712, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(713, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(714, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(715, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(716, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(717, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(718, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(719, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(720, 'The Internet Explorer installation on the remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(721, 'The Internet Explorer installation on the remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(722, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 5, 1, 3),
(723, 'The remote Windows host has a browser plugin installed that is\naffected by an arbitrary code execution vulnerability.', 0, NULL, 3, 1, 3),
(724, 'The remote Windows host has a browser plugin installed that is\naffected by an arbitrary code execution vulnerability.', 0, NULL, 3, 1, 3),
(725, 'The remote Windows host has a browser plugin installed that is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(726, 'The remote Windows host has a browser plugin installed that is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(727, 'The remote Windows host has a browser plugin installed that is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(728, 'The remote Windows host has a browser plugin installed that is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(729, 'The Internet Explorer installation on the remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(730, 'The Internet Explorer installation on the remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(731, 'The Internet Explorer installation on the remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(732, 'The Internet Explorer installation on the remote host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(733, 'The Microsoft .NET Framework installation on the remote host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(734, 'The Microsoft .NET Framework installation on the remote host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(735, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(736, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(737, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(738, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(739, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(740, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(741, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(742, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(743, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(744, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(745, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(746, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(747, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(748, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(749, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(750, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(751, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(752, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(753, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(754, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(755, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(756, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(757, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(758, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(759, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(760, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(761, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(762, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(763, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(764, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(765, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(766, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(767, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(768, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(769, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(770, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(771, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(772, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(773, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(774, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(775, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(776, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(777, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(778, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(779, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(780, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(781, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(782, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(783, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(784, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(785, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(786, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(787, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(788, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(789, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(790, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(791, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(792, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(793, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(794, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(795, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(796, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(797, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(798, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(799, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(800, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(801, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(802, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(803, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(804, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(805, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(806, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(807, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(808, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(809, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(810, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(811, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(812, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(813, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(814, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(815, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(816, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(817, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(818, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(819, 'The version of Adobe Reader installed on the remote Windows host is\naffected by an information disclosure vulnerability.', 0, NULL, 3, 1, 3),
(820, 'The Internet Explorer installation on the remote host is affected by a remote code execution vulnerability.', 0, NULL, 3, 1, 3),
(821, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(822, 'The version of Adobe Reader installed on the remote Windows host is\naffected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(823, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(824, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(825, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(826, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(827, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(828, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(829, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(830, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(831, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(832, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(833, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(834, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(835, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(836, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(837, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(838, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(839, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(840, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3);
INSERT INTO `register` (`rid`, `vuln`, `status`, `vdate`, `senofk`, `synofk`, `inofk`) VALUES
(841, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(842, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(843, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(844, 'The remote Windows host is affected by multiple vulnerabilities.', 0, NULL, 3, 1, 3),
(845, 'The Microsoft .NET Framework installation on the remote host is\nmissing a security update.', 1, NULL, 5, 1, 3),
(846, 'The Internet Explorer installation on the remote host is\nmissing a security update.', 0, NULL, 3, 1, 3),
(855, 'Error344', 1, '2019-12-04 08:55:21', 1, 2, 2),
(856, 'a', 0, '2019-12-04 10:22:43', 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `reid` int(4) UNSIGNED ZEROFILL NOT NULL,
  `prefix` varchar(60) NOT NULL,
  `premonth` varchar(60) NOT NULL,
  `reno` varchar(60) NOT NULL,
  `cname` varchar(60) NOT NULL,
  `cemail` varchar(60) NOT NULL,
  `bunit` varchar(60) NOT NULL,
  `bcountry` varchar(60) NOT NULL,
  `iname` varchar(60) NOT NULL,
  `idate` varchar(60) NOT NULL,
  `ireportdate` varchar(60) NOT NULL,
  `iseverity` varchar(60) NOT NULL,
  `istatus` tinyint(1) DEFAULT NULL,
  `idetails` text DEFAULT NULL,
  `rootcause` text DEFAULT NULL,
  `implications` text DEFAULT NULL,
  `risks` text DEFAULT NULL,
  `mitigating` text DEFAULT NULL,
  `comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`reid`, `prefix`, `premonth`, `reno`, `cname`, `cemail`, `bunit`, `bcountry`, `iname`, `idate`, `ireportdate`, `iseverity`, `istatus`, `idetails`, `rootcause`, `implications`, `risks`, `mitigating`, `comments`) VALUES
(0019, 'SECINC-', 'Nov-', 'SECINC-Nov-0019', 'pojajsdlkjp', 'laksdjliqjwd@gmail.com', 'qweasd', 'Pakistan', 'poqwekjasd', '01/Jan/1970', '19/Nov/2019', 'High', 1, 'jasjhqwkdjnas', 'asodkqpwodkasd', 'alsdjqlwkdjas', 'asldkjqlwkjd', 'alskdnqliwjd', 'qpwodkasldkj'),
(0020, 'SECINC-', 'Nov-', 'SECINC-Nov-0020', 'Minhaj Ansari', 'minhaj111ansari@gmal.com', 'Allied Bank Limited', 'Pakistan', 'Production HSM Crashed', '05/Nov/2019', '19/Nov/2019', 'Severe Security Incident', 0, 'A malicious activity was detected on the network, which caused intrusion in Bank Payment\r\nGateway servers AS02 & AS03. Bank Information Security team at 21:00hrs on 8th May,\r\n2018, informed the Crisis Management Team that the intruder has been ejected.\r\n\r\nIt was further informed that during initial investigations it was revealed that the intruder obtained\r\nthe â€œHashed Passwordsâ€ of the user-ID existing on the servers, traversed through the directories\r\nand executed â€œReverse Shell Scriptsâ€. Information Security team is presently engaged in detailed\r\ninvestigations, and will share the report on completion.', 'Following are the findings related to the case:\r\n\r\nHowever, from the investigations made so far it is considered that:\r\n1. There was lapse in Operating System Patch Management helped the intruder in exploiting an\r\nOperating System vulnerability OR\r\n2. Administratorâ€™s password was compromised\r\nFurther details will be shared on completion of the investigation.', 'The above illegal activity leads to impact in the following services:\r\n1. â€œHashed Passwordsâ€ can help the intruder regain the access to the servers.\r\n2. The â€œDirectory traversingâ€ creates high chances of exposure/compromise of the Payment\r\nGateway Application and APIs residing on the servers, leading to compromise of information/data\r\nflowing through the APIs/Application.\r\n3. â€œReverse Shell Scriptsâ€ are run to open the back door on the Operating System.', 'Risk to Bank\r\n1. Huge reputational risk\r\n2. Loss of confidence of the Merchants\r\n3. Loss of confidence of the partner banks\r\nCompromise of customersâ€™ information including but not limited to:\r\n1. Credit card data exposure\r\n2. Personal information exposure\r\n3. Internet Banking Transactions (IBFT)\r\n4. Modification into merchantsâ€™ on the fly data\r\n5. Illegal transactions\r\nSystems related risks include:\r\n1. Exposure of the application architecture\r\n2. Exposure of the system network architecture\r\n3. APIâ€™s Source Code\r\n4. Breach of SSL Private Key\r\n5. Opening of backdoor', 'Action(s) taken / to be taken Timeline\r\n1. Measuring the Risk magnitude\r\nin discussions with the Technology Team Within 1-hour\r\n20:19 hours\r\n2. Crisis Management Team con-call to upraise on the issues and discuss the incident and plan a\r\nway-forward. Within 2-hours\r\n22:30 hours\r\n3. Aligning the vendor fresh application installation Within 3-hours\r\n23:00 hours\r\n4. Shutdown the infected servers causing business downtime Within 5-hours\r\n01:00 hours\r\n5. Fresh Server preparation start Within 5-hours\r\n01:00-hours\r\n6. New machines provided to Ops team Within 15-hours\r\n11:30 hours\r\n7. Operating System hardening & penetration testing performed Within 16-hours\r\n12:45 hours\r\n8. Payment Gateway up and running Within 19-hours\r\n15:15 hours\r\n9. Full Scope Payment Gateway penetration testing Business and Technology to share\r\n10. IP Scheme changing Business and Technology to share\r\n11. Raising the DR of Payment Gateway on existing machines Business and Technology to share\r\n12. Raising a proper DR of Payment Gateway Business and Technology to share', 'The Competitorâ€™s Systems couldnâ€™t manage the traffic load of traffic and crashed at 02:00-hours.'),
(0021, 'SECINC-', 'Dec-', 'SECINC-Dec-0021', 'Krinza Momin', 'krinza@gmail.com', 'FAST NUCES', 'Pakistan', 'Error411', '16/Nov/2019', '04/Dec/2019', 'Critical', 1, 'Pokerface', 'Level', 'Project is Done', 'No Risk', 'No Measures', '');

-- --------------------------------------------------------

--
-- Table structure for table `severity`
--

CREATE TABLE `severity` (
  `seno` int(10) NOT NULL,
  `sedata` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `severity`
--

INSERT INTO `severity` (`seno`, `sedata`) VALUES
(4, 'Critical'),
(3, 'High'),
(2, 'Informational'),
(1, 'Low'),
(5, 'Medium');

-- --------------------------------------------------------

--
-- Table structure for table `system`
--

CREATE TABLE `system` (
  `syno` int(10) NOT NULL,
  `sydata` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `system`
--

INSERT INTO `system` (`syno`, `sydata`) VALUES
(1, 'RPS'),
(2, 'TERP');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uno` int(10) NOT NULL,
  `uusername` varchar(60) NOT NULL,
  `upassword` varchar(60) NOT NULL,
  `accept` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uno`, `uusername`, `upassword`, `accept`) VALUES
(1, 'Anusha', '$2y$10$Vb/CRmQ2PYfSw..sbPcBTeSYywrDeXWo03tvhtsRjQzMb/FCWITzK', 1),
(7, 'Moiz', '$2y$10$LIt5iGVeIfBBGF2r1oOxGeA1facsfrjSrYBrMti9q4NOi20.N0i9u', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ano`),
  ADD UNIQUE KEY `ausername` (`ausername`);

--
-- Indexes for table `hostname`
--
ALTER TABLE `hostname`
  ADD PRIMARY KEY (`ino`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `senofk` (`senofk`),
  ADD KEY `synofk` (`synofk`),
  ADD KEY `inofk` (`inofk`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`reid`);

--
-- Indexes for table `severity`
--
ALTER TABLE `severity`
  ADD PRIMARY KEY (`seno`),
  ADD UNIQUE KEY `sedata` (`sedata`);

--
-- Indexes for table `system`
--
ALTER TABLE `system`
  ADD PRIMARY KEY (`syno`),
  ADD UNIQUE KEY `sydata` (`sydata`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uno`),
  ADD UNIQUE KEY `uusername` (`uusername`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ano` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hostname`
--
ALTER TABLE `hostname`
  MODIFY `ino` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `rid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=857;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `reid` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `severity`
--
ALTER TABLE `severity`
  MODIFY `seno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `system`
--
ALTER TABLE `system`
  MODIFY `syno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_1` FOREIGN KEY (`senofk`) REFERENCES `severity` (`seno`),
  ADD CONSTRAINT `register_ibfk_2` FOREIGN KEY (`synofk`) REFERENCES `system` (`syno`),
  ADD CONSTRAINT `register_ibfk_3` FOREIGN KEY (`inofk`) REFERENCES `hostname` (`ino`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
