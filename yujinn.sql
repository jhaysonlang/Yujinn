-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2017 at 05:03 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yujinn`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `txnid` varchar(255) NOT NULL,
  `payment_amount` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `itemid` varchar(255) NOT NULL,
  `createdtime` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addguest`
--

CREATE TABLE `tbl_addguest` (
  `addguest_id` int(30) NOT NULL,
  `rcode` varchar(255) NOT NULL,
  `checkin` varchar(255) DEFAULT NULL,
  `checkout` varchar(255) DEFAULT NULL,
  `nights` varchar(11) NOT NULL,
  `arrivaltime` varchar(30) NOT NULL,
  `roomtype` varchar(255) NOT NULL,
  `roomrates` varchar(255) NOT NULL,
  `numberofrooms` varchar(11) NOT NULL,
  `salutation` varchar(255) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `modeofpayment` varchar(255) NOT NULL,
  `guestType` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `emailaddress` varchar(30) NOT NULL,
  `contact` bigint(30) NOT NULL,
  `request` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `subTotal` int(255) NOT NULL,
  `totalcost` int(255) NOT NULL,
  `reservation_date` varchar(255) NOT NULL,
  `expiry_date` varchar(255) NOT NULL,
  `reservation_time` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_addguest`
--

INSERT INTO `tbl_addguest` (`addguest_id`, `rcode`, `checkin`, `checkout`, `nights`, `arrivaltime`, `roomtype`, `roomrates`, `numberofrooms`, `salutation`, `firstname`, `lastname`, `modeofpayment`, `guestType`, `address`, `emailaddress`, `contact`, `request`, `status`, `discount`, `subTotal`, `totalcost`, `reservation_date`, `expiry_date`, `reservation_time`, `image`) VALUES
(691, '604BB2F', '09/09/2016', '09/10/2016', '1', '1:00PM', 'Soloroom', '900', '1', 'Mr.', 'Marlow', 'Osayan', '', '', '', 'angielethfdc@gmail.com', 9351293929, '', 'No Show', '0', 900, 900, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '08:41 PM', 'Koala.jpg'),
(692, 'D5DC0F2', '09/15/2016', '09/17/2016', '2', '1:00PM', 'Sixbedroom', '3300', '1', 'Ms.', 'Angieleth', 'Hiniyel', '', '', '910 Craig St. Sampaloc, Manila', 'angielethfdc@gmail.com', 9351293929, '', 'No Show', '0', 6600, 6600, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '08:43 PM', ''),
(693, '4A38EF6', '09/12/2016', '09/13/2016', '1', '1:00PM', 'Soloroom', '900', '1', 'Ms.', 'Claire', 'Cornejo', '', '', '', 'klengcornejo@gmail.com', 9065780870, '', 'No Show', '0', 900, 900, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '08:44 PM', ''),
(694, 'E852DC5', '09/28/2016', '09/29/2016', '1', '1:00PM', 'Sixbedroom', '3300', '1', 'Ms.', 'Clariza', 'Cornejo', '', '', '', 'klengcornejo@gmail.com', 9065780870, '', 'No Show', '0', 3300, 3300, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '08:47 PM', ''),
(695, '729831B', '09/30/2016', '10/01/2016', '1', '1:00PM', 'Eightbedroom', '4400', '1', 'Mr.', 'Joshua', 'Dela Cruz', '', '', '', 'joshuafdc@gmail.com', 9090909090, '', 'No Show', '0', 4400, 4400, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '08:54 PM', ''),
(696, 'DD72EA9', '10/14/2016', '10/15/2016', '1', '1:00PM', 'Soloroom', '900', '1', 'Mrs.', 'Claire', 'Navarro', '', '', '', 'cornejo_claire@yahoo.com', 9090909090, '', 'No Show', '0', 900, 900, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '08:55 PM', ''),
(697, '9A60102', '10/30/2016', '10/31/2016', '1', '1:00PM', 'Sixbedroom', '3300', '1', 'Ms.', 'Jairah', 'Magnaye', '', '', '', 'jairah.magnaye01@gmail.com', 9080908090, '', 'No Show', '0', 3300, 3300, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '08:59 PM', ''),
(698, '016E198', '09/11/2016', '09/12/2016', '1', '1:00PM', 'Soloroom', '900', '2', 'Ms.', 'Jai', 'Iraham', '', '', '', 'jairah.magnaye01@gmail.com', 9070080907, '', 'No Show', '0', 1800, 1800, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '09:00 PM', ''),
(699, '01E9B12', '09/25/2016', '09/27/2016', '2', '1:00PM', 'Doubleroom', '1300', '2', 'Ms.', 'Lotty', 'Hiniyel', '', '', 'camp avejar nasugbu, batangas', 'angielethdelacruz69@yahoo.com', 9023456789, '', 'No Show', '0', 5200, 5200, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '09:05 PM', ''),
(700, 'B195D74', '09/30/2016', '10/02/2016', '2', '1:00PM', 'Soloroom', '900', '3', 'Mr.', 'Joshua', 'Ferrer', '', '', '920 basilio st. sampaloc manila', 'angielethfdc@gmail.com', 8070650384, '', 'No Show', '0', 5400, 5400, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '09:08 PM', ''),
(701, 'D4AC4C8', '10/09/2016', '10/11/2016', '2', '1:00PM', 'Doubleroom', '1300', '2', 'Ms.', 'Reinando', 'Pameroyan', '', '', '910 Puso St. Makati8 City', 'angielethfdc@gmail.com', 9000000000, '', 'No Show', '0', 5200, 5200, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '09:12 PM', ''),
(702, '579B04D', '09/22/2016', '09/23/2016', '1', '1:00PM', ' Doubleroom Eightbedroom', ' 1300 4400', ' 2 1', 'Mr.', 'Jefferson', 'Nucom', '', '', 'Banilad Nasugbu, Batangas', 'nucomjefferson@gmail.com', 9000000000, '', 'No Show', '0', 7000, 7000, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '09:15 PM', ''),
(703, 'D769023', '11/02/2016', '11/03/2016', '1', '1:00PM', 'Soloroom', '900', '1', 'Mr.', 'Jeff', 'Nucom', '', '', 'Banilad Nasugbu, Batangas', 'nucomjefferson@gmail.com', 9888888888, '', 'No Show', '0', 900, 900, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '09:17 PM', ''),
(704, 'EA2C4F1', '10/19/2016', '10/20/2016', '1', '1:00PM', 'Sixbedroom', '3300', '1', 'Mr.', 'Joshua', 'Ferrer', '', '', 'Cammp Avejar, Nasugbu Batangas', 'joshuafdc@yahoo.com', 9123456789, '', 'No Show', '0', 3300, 3300, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '09:21 PM', ''),
(705, '2F66EBE', '10/22/2016', '10/23/2016', '1', '1:00PM', 'Soloroom', '900', '1', 'Mr.', 'Josh', 'Dela Cruz', '', '', 'Balayan Batangas', 'joshuafdc@yahoo.com', 9098765432, '', 'No Show', '0', 900, 900, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '09:22 PM', ''),
(706, '7E59331', '10/28/2016', '10/29/2016', '1', '1:00PM', ' Doubleroom Sixbedroom', ' 1300 3300', ' 1 1', 'Ms.', 'Angieleth', 'Dela Cruz', '', '', '910 Craig St. Sampaloc, Manila', 'afdc09067043310@yahoo.com', 9351293929, '', 'No Show', '0', 4600, 4600, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '09:24 PM', ''),
(707, '79A5269', '09/16/2016', '09/17/2016', '1', '1:00PM', 'Eightbedroom', '4400', '1', 'Mr.', 'Neil', 'Dellupac', '', '', 'LUMABANGAN NASUGBU BATANGAS', 'spootnackrepublic@gmail.com', 9000000000, '', 'No Show', '0', 4400, 4400, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '09:28 PM', ''),
(708, 'F434776', '11/21/2016', '11/23/2016', '2', '1:00PM', ' Doubleroom Sixbedroom', ' 1300 3300', ' 1 1', 'Mr.', 'Neil', 'Dellupac', '', '', 'Ramos Subdivision, Brgy. 3, Nasugbu, Batangas address ', 'spootnackrepublic@gmail.com', 9111111111, '', 'No Show', '0', 9200, 9200, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '09:30 PM', ''),
(709, '83531DE', '11/13/2016', '11/14/2016', '1', '1:00PM', 'Sixbedroom', '3300', '1', 'Mr.', 'Jonar', 'Ruiz', '', '', 'Lumbangan Nas. Bats.\r\n', 'jonarruiz2@gmail.com', 9843567824, '', 'No Show', '0', 3300, 3300, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '09:32 PM', ''),
(710, '2D633F0', '09/11/2016', '09/12/2016', '1', '1:00PM', 'Soloroom', '900', '1', 'Ms.', 'Jairahh', 'Magnaye', '', '', 'Brgy Bucana Nasugbu, batangas', 'jairah.magnaye01@gmail.com', 9000000000, '', 'No Show', '0', 900, 900, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '09:44 PM', ''),
(711, 'CF4677B', '09/11/2016', '09/12/2016', '1', '1:00PM', 'Soloroom', '900', '1', 'Mr.', 'Jason', 'Landayan', '', '', 'ja', 'jasonmarklandayan@yahoo.com', 9095547383, '', 'No Show', '0', 900, 900, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '09:51 PM', ''),
(712, '1A54A98', '11/27/2016', '11/28/2016', '1', '1:00PM', 'Doubleroom', '1300', '2', 'Mr.', 'Charles', 'Angsioco', '', '', 'acm woodstock Nasugbu, Batangas', 'angsioco060797@gmail.com', 9123456789, '', 'No Show', '0', 2600, 2600, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '09:52 PM', ''),
(713, '4EA475F', '10/03/2016', '10/04/2016', '1', '1:00PM', ' Soloroom Eightbedroom', ' 900 4400', ' 1 1', 'Mr.', 'Charles', 'Angsioco', '', '', 'acm woodstock Nasugbu, Batangas', 'angsioco060797@gmail.com', 9678967890, '', 'No Show', '0', 5300, 5300, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '09:57 PM', ''),
(714, 'A1A8979', '09/27/2016', '09/29/2016', '2', '1:00PM', ' Soloroom Doubleroom', ' 900 1300', ' 1 1', 'Mr.', 'Neil ', 'Dellupac', '', '', 'Ramos Subdivision, Brgy. 3, Nasugbu, Batangas address ', 'spootnackrepublic@gmail.com', 9000000000, '', 'No Show', '0', 4400, 4400, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '10:07 PM', ''),
(715, 'F2A8A32', '11/18/2016', '11/19/2016', '1', '1:00PM', ' Doubleroom Sixbedroom', ' 1300 3300', ' 1 1', 'Ms.', 'Ahlexzha', 'Leynes', '', '', 'Brgy 8 Concepcion St. Nasugbu Batangas', 'leynesahlexzha@gmail.com', 9123453523, '', 'No Show', '0', 4600, 4600, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '10:30 PM', ''),
(716, '452D0B9', '09/25/2016', '09/26/2016', '1', '1:00PM', ' Soloroom Doubleroom', ' 900 1300', ' 1 1', 'Mr.', 'Odjie', 'Magnaye', '', '', 'Brgy Bucana Nasugbu, Batangas', 'odjie.magnaye@gmail.com', 9724734763, '', 'No Show', '0', 2200, 2200, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '10:31 PM', ''),
(718, 'C94BAE7', '09/11/2016', '09/12/2016', '1', '1:00PM', 'Soloroom', '900', '1', 'Ms.', 'Justine', 'Landayan', '', '', 'Cubao, Quezon City\r\nRizal', 'jasonmarklandayan@yahoo.com', 9095547383, '', 'No Show', '0', 900, 900, 'Sat, Sep 10, 2016', 'Tue, Sep 13, 2016', '10:59 PM', ''),
(719, '964580A', '07/01/2017', '07/02/2017', '1', '1:00PM', 'Soloroom', '900', '1', 'Mr.', 'Jason', 'Landayan', '', '', 'Cubao, Quezon City', 'jasonmarklandayan@yahoo.com', 9095547383, '', 'No Show', '0', 900, 900, 'Sun, Sep 11, 2016', 'Wed, Sep 14, 2016', '06:17 AM', ''),
(720, '663431C', '05/04/2018', '05/05/2018', '1', '1:00PM', 'Eightbedroom', '4400', '1', 'Ms.', 'Jm', 'Vibanco', '', '', 'Craig', 'jasonmarklandayan@yahoo.com', 9090909090, '', 'No Show', '0', 4400, 4400, 'Sun, Sep 11, 2016', 'Wed, Sep 14, 2016', '06:25 AM', ''),
(721, '8F46696', '09/12/2016', '09/13/2016', '1', '1:00PM', 'Soloroom', '900', '1', 'Ms.', 'Shirley', 'De Leon', '', '', '', 'jhkjh@yy', 657575875, '', 'No Show', '0', 900, 900, 'Sun, Sep 11, 2016', 'Wed, Sep 14, 2016', '09:42 AM', ''),
(722, 'D0BD277', '12/01/2016', '09/11/2016', '1', '10:16', ' Soloroom Doubleroom', ' 900 1300', ' 2 2', 'Mr.', 'Mike', 'Dela Cruz', '', 'Senior Citizen', 'Cubao, Quezon City\r\nRizal', 'angielethfdc@gmail.com', 8999999999, '', 'Checked Out', '0', 4400, 3520, 'Sun, Sep 11, 2016', 'Wed, Sep 14, 2016', '09:48 AM', ''),
(723, 'DA6D546', '09/16/2016', '09/17/2016', '1', '1:00PM', 'Soloroom', '900', '1', 'Mr.', 'Mike', 'Dela Cruz', '', '', 'Cubao, Quezon City\r\nRizal', 'angielethfdc@gmail.com', 8999999999, '', 'No Show', '0', 900, 900, 'Sun, Sep 11, 2016', 'Wed, Sep 14, 2016', '09:48 AM', ''),
(724, '88B3840', '09/11/2016', '09/11/2016', '1', '10:30', 'Eightbedroom', '4400', '2', 'Mr.', 'Brian', 'Chan', 'Full Payment', 'Senior Citizen', '', 'none', 9095547383, '', 'Checked Out', '0', 8800, 7040, '', '', '', ''),
(725, '01E5B5A', '09/13/2016', '09/11/2016', '1', '10:29', 'Sixbedroom', '3300', '4', 'Mr.', 'Jayson', 'Landayan', 'Full Payment', 'Regular', '', 'none', 9095547383, '', 'Checked Out', '0', 13200, 13200, '', '', '', ''),
(726, 'AA7A75C', '09/11/2016', '09/11/2016', '1', '10:46', 'Soloroom', '900', '1', 'Mr.', 'Marlow', 'Osayan', 'Full Payment', 'Regular', '', 'none', 8888, '', 'Checked Out', '0', 900, 900, '', '', '', ''),
(727, '14464E0', '09/08/2016', '09/09/2016', '1', '11:06', 'Soloroom', '900', '1', 'Mr.', 'Erick', 'Jusayan', 'Full Payment', 'Regular', '', 'none', 9166451965, '', 'No Show', '0', 900, 900, '', '', '', ''),
(728, '8136B6B', '09/10/2016', '09/11/2016', '1', '13:16', 'Soloroom', '900', '1', 'Ms.', 'Kei', 'Almaida', 'Full Payment', 'Regular', '', 'none', 9095547383, '', 'No Show', '0', 900, 900, '', '', '', ''),
(729, '01A7D7B', '01/03/2017', '01/04/2017', '1', '1:00PM', 'Soloroom', '900', '1', 'Mr.', 'Asdsl;adka;lskd', 'Sdfl;skfs;l', '', '', 'd', 'jasonmarklandayan@yahoo.com', 9095547383, '', 'No Show', '0', 900, 900, 'Sun, Sep 11, 2016', 'Wed, Sep 14, 2016', '02:51 PM', ''),
(730, 'F806C0F', '09/24/2016', '09/25/2016', '1', '22:26', 'Soloroom', '900', '1', 'Mr.', 'Brian', 'Chan', 'Full Payment', 'Senior Citizen', '', 'brianrenzochan@gmail.com', 9166451965, '', 'Arrived', '0', 900, 720, '', '', '', ''),
(731, '15BFD97', '10/24/2016', '10/26/2016', '2', '1:00PM', ' Doubleroom Eightbedroom', ' 1300 4400', ' 2 1', 'Mr.', 'Akjsdajksd', 'Jhasdashdas', '', '', 'hjasdgjadkasd 23', 'asdasdasd@yahoo.com', 9069591418, '', 'Pending', '0', 14000, 14000, 'Sun, Oct 23, 2016', 'Wed, Oct 26, 2016', '11:40 AM', ''),
(732, '955D8DD', '10/28/2016', '10/25/2016', '1', '21:27', 'Soloroom', '900', '1', 'Ms.', 'Jessel May', 'Espinola', '', '', '1315A Castanos St. Sampaloc, Manila', 'jesselespinola@yahoo.com', 9174465255, '', 'Checked Out', '0', 900, 900, 'Tue, Oct 25, 2016', 'Fri, Oct 28, 2016', '09:13 PM', ''),
(733, '4B18960', '11/19/2016', '11/20/2016', '1', '1:00PM', 'Soloroom', '900', '1', 'Mr.', 'Sad', 'Dsa', '', '', 'asdasd', 'jason.labdayan@wideout.com', 123, '', 'No Show', '0', 900, 900, 'Fri, Nov 18, 2016', 'Mon, Nov 21, 2016', '09:20 AM', ''),
(734, '3A9DFA6', '11/19/2016', '11/20/2016', '1', '1:00PM', 'Soloroom', '900', '2', 'Mr.', 'Asd', 'Asd', '', '', 'asd', 'jason.landayan@wideout.com', 12312, '', 'No Show', '0', 1800, 1800, 'Fri, Nov 18, 2016', 'Mon, Nov 21, 2016', '10:49 AM', ''),
(735, '4B51D56', '02/10/2017', '02/11/2017', '1', '1:00pm', 'Soloroom', '900', '1', 'Ms.', 'Asd', 'Dsa', '', '', '', 'jason.landayan@wideout.com', 1231, '', 'Reserved', '0', 900, 900, 'Thu, Feb 09, 2017', 'Sun, Feb 12, 2017', '11:43 AM', 'Lighthouse.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_id`
--

CREATE TABLE `tbl_admin_id` (
  `position` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_id`
--

INSERT INTO `tbl_admin_id` (`position`, `username`, `password`, `admin_id`, `firstname`, `lastname`, `status`) VALUES
('Admin', 'Jason', '12345', 25, 'Jason', 'Landayan', 'Active'),
('Admin', 'Bea', '12345', 30, 'Bea', 'Espinas', 'Active'),
('Admin', 'Samplee', '12345', 31, 'Sample', 'Sample', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dailysales`
--

CREATE TABLE `tbl_dailysales` (
  `sales_id` int(225) NOT NULL,
  `date` varchar(255) NOT NULL,
  `receptionist` varchar(255) NOT NULL,
  `guestname` varchar(255) NOT NULL,
  `roomtype` varchar(255) NOT NULL,
  `roomrates` double(16,2) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dailysales`
--

INSERT INTO `tbl_dailysales` (`sales_id`, `date`, `receptionist`, `guestname`, `roomtype`, `roomrates`, `total`) VALUES
(11, '08/25/2016', 'BrianChan', 'Mr. Dsa Landayan', 'Eightbedroom', 4400.00, '2080'),
(12, '08/26/2016', '', 'Mr. Jason Landayan', 'Doubleroom', 1300.00, '6240'),
(13, '08/28/2016', '', 'Mr. Jason Landayan', 'Doubleroom', 1300.00, '1300.00'),
(14, '08/31/2016', '', 'Mr. Jason Landayan', 'Soloroom', 900.00, '720'),
(20, '09/03/2016', '', 'Mr. Brian Chan', 'Soloroom', 900.00, '900'),
(21, '09/06/2016', 'JasonLandayan', 'Ms. Kei Almaida', 'Doubleroom', 1300.00, '2600'),
(22, '09/07/2016', '', 'Ms. Brian Chan', 'Soloroom', 900.00, '900'),
(23, '09/09/2016', '', 'Mr. Brian Chan', ' Soloroom Doubleroom', 900.00, '2200'),
(24, '09/09/2016', '', 'Mr. Justine Landayan', 'Eightbedroom', 4400.00, '4400'),
(25, '09/10/2016', 'JasonLandayan', 'Mr. Jay Ruiz', 'Soloroom', 900.00, '900'),
(26, '09/10/2016', 'JasonLandayan', 'Mr. Brian Chan', 'Doubleroom', 1300.00, '1300'),
(27, '09/10/2016', '', 'Mr. Brian Chan', 'Soloroom', 900.00, '1800'),
(28, '09/10/2016', '', 'Mr. Brian Chan', 'Soloroom', 900.00, '5040'),
(30, '09/11/2016', '', 'Mr. Mike Dela Cruz', ' Soloroom Doubleroom', 900.00, '3520'),
(31, '09/11/2016', '', 'Mr. Jayson Landayan', 'Sixbedroom', 3300.00, '13200'),
(32, '09/11/2016', '', 'Mr. Brian Chan', 'Eightbedroom', 4400.00, '7040'),
(33, '09/11/2016', '', 'Mr. Marlow Osayan', 'Soloroom', 900.00, '900'),
(34, '09/11/2016', '', 'Mr. Marlow Osayan', 'Soloroom', 900.00, '900'),
(35, '09/11/2016', '', 'Mr. Erick Jusayan', 'Soloroom', 900.00, '900'),
(36, '09/11/2016', '', 'Ms. Kei Almaida', 'Soloroom', 900.00, '900'),
(37, '09/24/2016', '', 'Mr. Brian Chan', 'Soloroom', 900.00, '720'),
(38, '10/25/2016', '', 'Ms. Jessel May Espinola', 'Soloroom', 900.00, '900');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deposit_account`
--

CREATE TABLE `tbl_deposit_account` (
  `deposit_id` int(11) NOT NULL,
  `bankname` varchar(255) NOT NULL,
  `accountnumber` varchar(255) NOT NULL,
  `accountname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_deposit_account`
--

INSERT INTO `tbl_deposit_account` (`deposit_id`, `bankname`, `accountnumber`, `accountname`) VALUES
(1, 'BDO', '12345678910', 'Yujinn');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `login_date` varchar(255) NOT NULL,
  `login_time` varchar(255) NOT NULL,
  `logout_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `position`, `name`, `login_date`, `login_time`, `logout_time`) VALUES
(12, 'Receptionist', 'Brian Chan', 'Fri, Aug 19, 2016', '12:53:AM', '12:54:AM'),
(13, 'Receptionist', 'Brian Chan', 'Fri, Aug 19, 2016', '12:54:AM', '12:56:AM'),
(14, 'Receptionist', 'Brian Chan', 'Fri, Aug 19, 2016', '12:56:AM', '12:57:AM'),
(15, 'Receptionist', 'Brian Chan', 'Fri, Aug 19, 2016', '12:58 AM', '12:58:AM'),
(16, 'Receptionist', 'Brian Chan', 'Fri, Aug 19, 2016', '12:58 AM', '12:59 AM'),
(17, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '03:10 PM', ''),
(18, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '03:10 PM', '03:11 PM'),
(19, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '03:11 PM', ''),
(20, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '03:11 PM', ''),
(21, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '03:13 PM', ''),
(22, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '03:14 PM', ''),
(23, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '03:20 PM', ''),
(24, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '03:21 PM', ''),
(25, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '03:21 PM', '03:57 PM'),
(26, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '03:57 PM', '03:58 PM'),
(27, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '03:58 PM', ''),
(28, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '03:58 PM', ''),
(29, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '03:58 PM', ''),
(30, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '05:58 PM', ''),
(31, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '05:58 PM', ''),
(32, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '06:12 PM', ''),
(33, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '06:12 PM', ''),
(34, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '06:18 PM', ''),
(35, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '06:18 PM', ''),
(36, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '06:20 PM', ''),
(37, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '06:20 PM', ''),
(38, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '06:24 PM', ''),
(39, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '06:24 PM', ''),
(40, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '06:26 PM', ''),
(41, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '06:26 PM', ''),
(42, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '06:26 PM', ''),
(43, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '06:28 PM', ''),
(44, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '06:28 PM', ''),
(45, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '06:54 PM', ''),
(46, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '06:54 PM', '07:02 PM'),
(47, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '06:54 PM', ''),
(48, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '06:54 PM', ''),
(49, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '06:54 PM', '05:46 PM'),
(50, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '06:54 PM', '06:54 PM'),
(51, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '06:54 PM', ''),
(52, 'Receptionist', 'Brian Chan', 'Mon, Aug 22, 2016', '06:54 PM', '06:56 PM'),
(53, 'Receptionist', 'Brian Chan', '', '', '06:57 PM'),
(54, 'Receptionist', 'Brian Chan', '', '', '07:01 PM'),
(55, 'Receptionist', ' ', '', '', '07:04 PM'),
(56, 'Receptionist', ' ', '', '', '07:06 PM'),
(57, 'Receptionist', ' ', '', '07:06:PM', '07:07 PM'),
(58, 'Receptionist', ' ', 'Wed, Aug 24, 2016', '07:07:PM', ''),
(59, 'Receptionist', ' ', 'Wed, Aug 24, 2016', '07:07:PM', '07:09 PM'),
(60, 'Receptionist', ' ', 'Wed, Aug 24, 2016', '07:10:PM', ''),
(61, 'Receptionist', ' ', 'Wed, Aug 24, 2016', '07:11:PM', '07:12 PM'),
(62, 'Receptionist', ' ', 'Wed, Aug 24, 2016', '07:13:PM', '07:13 PM'),
(63, 'Receptionist', ' ', 'Wed, Aug 24, 2016', '07:15:PM', ''),
(64, 'Receptionist', ' ', 'Wed, Aug 24, 2016', '07:15:PM', '07:16 PM'),
(65, 'Receptionist', ' ', 'Wed, Aug 24, 2016', '07:43:PM', '07:43 PM'),
(66, 'Receptionist', ' ', 'Wed, Aug 24, 2016', '07:44:PM', ''),
(67, 'Receptionist', ' ', 'Wed, Aug 24, 2016', '07:45:PM', ''),
(68, 'Receptionist', ' ', 'Wed, Aug 24, 2016', '07:46:PM', '07:46 PM'),
(69, 'Receptionist', ' ', 'Wed, Aug 24, 2016', '07:50:PM', '07:50 PM'),
(70, 'Receptionist', ' ', 'Wed, Aug 24, 2016', '07:57:PM', '07:57 PM'),
(71, 'Receptionist', ' ', 'Wed, Aug 24, 2016', '08:07:PM', '08:07 PM'),
(72, 'Receptionist', 'Jason Landayan', 'Wed, Aug 24, 2016', '08:15:PM', '08:15 PM'),
(73, 'Receptionist', ' ', 'Wed, Aug 24, 2016', '08:16:PM', ''),
(74, 'Receptionist', ' ', 'Wed, Aug 24, 2016', '08:16:PM', ''),
(75, 'Receptionist', ' ', 'Wed, Aug 24, 2016', '08:16:PM', ''),
(76, 'Receptionist', ' ', 'Wed, Aug 24, 2016', '08:16:PM', '08:16 PM'),
(77, 'Receptionist', 'Jason Landayan', 'Wed, Aug 24, 2016', '08:18:PM', ''),
(78, 'Receptionist', 'Brian Chan', 'Wed, Aug 24, 2016', '08:18:PM', ''),
(79, 'Receptionist', 'Brian Chan', 'Wed, Aug 24, 2016', '08:20:PM', '08:20 PM'),
(80, 'Receptionist', 'Brian Chan', 'Wed, Aug 24, 2016', '08:20:PM', '08:20 PM'),
(81, 'Receptionist', 'Brian Chan', 'Wed, Aug 24, 2016', '08:22:PM', '08:22 PM'),
(82, 'Receptionist', 'Brian Chan', 'Wed, Aug 24, 2016', '08:24:PM', '08:24 PM'),
(83, 'Receptionist', 'Brian Chan', 'Thu, Aug 25, 2016', '02:08:PM', ''),
(84, 'Receptionist', 'Brian Chan', 'Thu, Aug 25, 2016', '02:08:PM', '02:09 PM'),
(85, 'Receptionist', 'Brian Chan', 'Thu, Aug 25, 2016', '02:11:PM', ''),
(86, 'Receptionist', 'Brian Chan', 'Thu, Aug 25, 2016', '02:11:PM', '02:12 PM'),
(87, 'Receptionist', 'Brian Chan', 'Thu, Aug 25, 2016', '02:19:PM', '02:20 PM'),
(88, 'Receptionist', 'Brian Chan', 'Thu, Aug 25, 2016', '02:22:PM', '02:24 PM'),
(89, 'Receptionist', 'Brian Chan', 'Thu, Aug 25, 2016', '02:53:PM', ''),
(90, 'Receptionist', 'Brian Chan', 'Thu, Aug 25, 2016', '02:53:PM', ''),
(91, 'Receptionist', 'Brian Chan', 'Thu, Aug 25, 2016', '02:53:PM', ''),
(92, 'Receptionist', 'Brian Chan', 'Thu, Aug 25, 2016', '02:53:PM', ''),
(93, 'Receptionist', 'Brian Chan', 'Thu, Aug 25, 2016', '02:53:PM', '02:55 PM'),
(94, 'Receptionist', 'Brian Chan', 'Thu, Aug 25, 2016', '04:16:PM', '04:16 PM'),
(95, 'Receptionist', 'Brian Chan', 'Fri, Aug 26, 2016', '10:37:PM', ''),
(96, 'Receptionist', 'Brian Chan', 'Fri, Aug 26, 2016', '10:37:PM', ''),
(115, 'Receptionist', 'Brian Chan', 'Fri, Aug 26, 2016', '11:06:PM', '11:06 PM'),
(116, 'Receptionist', 'Brian Chan', 'Fri, Aug 26, 2016', '11:08:PM', '11:08 PM'),
(117, 'Receptionist', 'Brian Chan', 'Sun, Aug 28, 2016', '12:33:PM', ''),
(118, 'Receptionist', 'Brian Chan', 'Sun, Aug 28, 2016', '12:33:PM', '09:07 PM'),
(119, '', ' ', '', '', ''),
(120, '', ' ', '', '', '09:41 PM'),
(121, '', 'Jason Landayan', '', '', '09:57 PM'),
(122, '', ' ', '', '', '10:04 PM'),
(123, '', ' ', '', '', ''),
(124, '', ' ', '', '', ''),
(125, '', ' ', '', '', ''),
(126, '', ' ', '', '', ''),
(127, '', ' ', '', '', ''),
(128, '', ' ', '', '', ''),
(129, '', ' ', '', '', ''),
(130, '', ' ', '', '', ''),
(131, '', ' ', '', '', ''),
(132, '', ' ', '', '', ''),
(133, '', ' ', '', '', ''),
(134, '', ' ', '', '', ''),
(135, '', ' ', '', '', ''),
(136, '', ' ', '', '', ''),
(137, '', ' ', '', '', ''),
(138, '', ' ', '', '', ''),
(139, '', ' ', '', '', '09:02 PM'),
(140, '', ' ', '', '', ''),
(141, '', ' ', '', '', ''),
(142, '', ' ', '', '', ''),
(143, '', ' ', '', '', ''),
(144, '', ' ', '', '', ''),
(145, '', ' ', '', '', ''),
(146, '', ' ', '', '', ''),
(147, '', ' ', '', '', ''),
(148, '', ' ', '', '', ''),
(149, '', ' ', '', '', ''),
(150, '', ' ', '', '', ''),
(151, '', ' ', '', '', ''),
(152, '', ' ', '', '', ''),
(153, '', ' ', '', '', ''),
(154, '', ' ', '', '', ''),
(155, '', ' ', '', '', ''),
(156, '', ' ', '', '', ''),
(157, 'Receptionist', 'Brian Chan', '', '', ''),
(158, 'Receptionist', ' ', '', '', ''),
(159, '', ' ', '', '', ''),
(160, 'Receptionist', ' ', '', '', ''),
(161, 'Receptionist', ' ', '', '', ''),
(162, 'Receptionist', ' ', '', '', ''),
(163, '', ' ', '', '', ''),
(164, 'Receptionist', ' ', '', '', ''),
(165, 'Receptionist', ' ', '', '', ''),
(166, 'Receptionist', ' ', '', '', ''),
(167, 'Receptionist', ' ', '', '', ''),
(168, 'Receptionist', ' ', '', '', ''),
(169, 'Receptionist', ' ', '', '', ''),
(170, 'Receptionist', ' ', '', '', ''),
(171, 'Receptionist', ' ', '', '', ''),
(172, 'Receptionist', ' ', '', '', ''),
(173, 'Receptionist', ' ', '', '', ''),
(174, 'Receptionist', ' ', '', '', ''),
(175, 'Receptionist', ' ', '', '', ''),
(176, 'Receptionist', ' ', '', '', ''),
(177, 'Receptionist', ' ', '', '', ''),
(178, '', ' ', '', '', ''),
(179, '', ' ', '', '', ''),
(180, '', ' ', '', '', ''),
(181, '', ' ', '', '', ''),
(182, '', ' ', '', '', ''),
(183, 'Receptionist', ' ', '', '', ''),
(184, 'Receptionist', ' ', '', '', ''),
(185, 'Receptionist', ' ', '', '', ''),
(186, 'Receptionist', ' ', '', '', ''),
(187, 'Receptionist', ' ', '', '', ''),
(188, 'Receptionist', ' ', '', '', ''),
(189, 'Receptionist', ' ', '', '', ''),
(190, 'Receptionist', ' ', '', '', ''),
(191, 'Receptionist', ' ', '', '', ''),
(192, 'Receptionist', ' ', '', '', ''),
(193, 'Receptionist', ' ', '', '', ''),
(194, 'Receptionist', ' ', '', '', ''),
(195, 'Receptionist', ' ', '', '', ''),
(196, 'Receptionist', ' ', '', '', ''),
(197, 'Receptionist', ' ', '', '', ''),
(198, 'Receptionist', ' ', '', '', ''),
(199, 'Receptionist', ' ', '', '', ''),
(200, 'Receptionist', ' ', '', '', ''),
(201, 'Receptionist', ' ', '', '', ''),
(202, 'Receptionist', ' ', '', '', ''),
(203, 'Receptionist', ' ', '', '', ''),
(204, 'Receptionist', ' ', '', '', ''),
(205, 'Receptionist', ' ', '', '', ''),
(206, 'Receptionist', ' ', '', '', ''),
(207, 'Receptionist', ' ', '', '', ''),
(208, 'Receptionist', ' ', '', '', ''),
(209, 'Receptionist', ' ', '', '', ''),
(210, 'Receptionist', ' ', '', '', ''),
(211, 'Receptionist', ' ', '', '', ''),
(212, 'Receptionist', ' ', '', '', ''),
(213, 'Receptionist', ' ', '', '', ''),
(214, 'Receptionist', ' ', '', '', ''),
(215, 'Receptionist', ' ', '', '', ''),
(216, 'Receptionist', ' ', '', '', ''),
(217, 'Receptionist', ' ', '', '', ''),
(218, 'Receptionist', ' ', '', '', ''),
(219, 'Receptionist', ' ', '', '', ''),
(220, 'Receptionist', ' ', '', '', ''),
(221, 'Receptionist', ' ', '', '', ''),
(222, 'Receptionist', ' ', '', '', ''),
(223, 'Receptionist', ' ', '', '', ''),
(224, 'Receptionist', ' ', '', '', ''),
(225, 'Receptionist', ' ', '', '', ''),
(226, 'Receptionist', ' ', '', '', ''),
(227, 'Receptionist', ' ', '', '', ''),
(228, 'Receptionist', ' ', '', '', ''),
(229, 'Receptionist', ' ', '', '', ''),
(230, 'Receptionist', ' ', '', '', ''),
(231, 'Receptionist', ' ', '', '', ''),
(232, 'Receptionist', ' ', '', '', ''),
(233, 'Receptionist', ' ', '', '', ''),
(234, 'Receptionist', ' ', '', '', ''),
(235, 'Receptionist', ' ', '', '', ''),
(236, 'Receptionist', ' ', '', '', ''),
(237, 'Receptionist', ' ', '', '', ''),
(238, 'Receptionist', ' ', '', '', ''),
(239, 'Receptionist', ' ', '', '', ''),
(240, 'Receptionist', ' ', '', '', ''),
(241, 'Receptionist', ' ', '', '', ''),
(242, 'Receptionist', ' ', '', '', ''),
(243, 'Receptionist', 'Jason Landayan', '', '', ''),
(244, 'Receptionist', 'Jason Landayan', '', '', ''),
(245, 'Receptionist', 'Jason Landayan', '', '', ''),
(246, 'Receptionist', 'Jason Landayan', '', '', ''),
(247, 'Receptionist', ' ', '', '', ''),
(248, 'Receptionist', ' ', '', '', ''),
(249, '', ' ', '', '', ''),
(250, 'Receptionist', ' ', '', '', ''),
(251, 'Receptionist', ' ', '', '', ''),
(252, 'Receptionist', ' ', '', '', ''),
(253, 'Receptionist', ' ', '', '', ''),
(254, 'Receptionist', ' ', '', '', ''),
(255, 'Receptionist', ' ', '', '', ''),
(256, 'Receptionist', ' ', '', '', ''),
(257, 'Receptionist', ' ', '', '', ''),
(258, 'Receptionist', ' ', '', '', ''),
(259, 'Receptionist', ' ', '', '', ''),
(260, 'Receptionist', ' ', '', '', ''),
(261, 'Receptionist', ' ', '', '', ''),
(262, 'Receptionist', ' ', '', '', ''),
(263, 'Receptionist', ' ', '', '', ''),
(264, 'Receptionist', ' ', '', '', ''),
(265, '', ' ', '', '', ''),
(266, '', ' ', '', '', ''),
(267, '', ' ', '', '', ''),
(268, '', ' ', '', '', ''),
(269, '', ' ', '', '', ''),
(270, '', ' ', '', '', ''),
(271, '', ' ', '', '', ''),
(272, '', ' ', '', '', ''),
(273, '', ' ', '', '', ''),
(274, '', ' ', '', '', ''),
(275, '', ' ', '', '', ''),
(276, '', ' ', '', '', ''),
(277, '', ' ', '', '', ''),
(278, '', ' ', '', '', ''),
(279, '', ' ', '', '', ''),
(280, '', ' ', '', '', ''),
(281, '', ' ', '', '', ''),
(282, '', ' ', '', '', ''),
(283, '', ' ', '', '', ''),
(284, '', ' ', '', '', ''),
(285, '', ' ', '', '', ''),
(286, '', 'Jason Landayan', '', '', ''),
(287, 'Receptionist', 'Jason Landayan', '', '', ''),
(288, 'Receptionist', 'Jason Landayan', '', '', ''),
(289, 'Receptionist', 'Jason Landayan', '', '', ''),
(290, 'Receptionist', 'Jason Landayan', '', '', ''),
(291, 'Receptionist', 'Jason Landayan', '', '', ''),
(292, '', ' ', '', '', ''),
(293, 'Receptionist', ' ', '', '', ''),
(294, 'Receptionist', 'Jason Landayan', '', '', ''),
(295, 'Receptionist', 'Jason Landayan', '', '', ''),
(296, 'Receptionist', 'Jason Landayan', '', '', ''),
(297, 'Receptionist', ' ', '', '', ''),
(298, '', ' ', '', '', ''),
(299, 'Receptionist', ' ', '', '', ''),
(300, 'Receptionist', ' ', '', '', ''),
(301, 'Receptionist', ' ', '', '', ''),
(302, '', ' ', '', '', ''),
(303, 'Receptionist', ' ', '', '', ''),
(304, 'Receptionist', ' ', '', '', ''),
(305, 'Receptionist', ' ', '', '', ''),
(306, 'Receptionist', ' ', '', '', ''),
(307, 'Receptionist', ' ', '', '', ''),
(308, 'Receptionist', ' ', '', '', ''),
(309, 'Receptionist', ' ', '', '', ''),
(310, 'Receptionist', ' ', '', '', ''),
(311, 'Receptionist', ' ', '', '', ''),
(312, 'Receptionist', ' ', '', '', ''),
(313, 'Receptionist', ' ', '', '', ''),
(314, 'Receptionist', ' ', '', '', ''),
(315, 'Receptionist', ' ', '', '', ''),
(316, 'Receptionist', ' ', '', '', ''),
(317, 'Receptionist', ' ', '', '', ''),
(318, 'Receptionist', ' ', '', '', ''),
(319, 'Receptionist', ' ', '', '', ''),
(320, 'Receptionist', ' ', '', '', ''),
(321, 'Receptionist', ' ', '', '', ''),
(322, '', ' ', '', '', ''),
(323, 'Receptionist', ' ', '', '', ''),
(324, 'Receptionist', ' ', '', '', ''),
(325, 'Receptionist', ' ', '', '', ''),
(326, 'Receptionist', ' ', '', '', ''),
(327, 'Receptionist', ' ', '', '', ''),
(328, 'Receptionist', ' ', '', '', ''),
(329, 'Receptionist', ' ', '', '', ''),
(330, 'Receptionist', ' ', '', '', ''),
(331, 'Receptionist', ' ', '', '', ''),
(332, 'Receptionist', ' ', '', '', ''),
(333, 'Receptionist', ' ', '', '', ''),
(334, 'Receptionist', ' ', '', '', ''),
(335, 'Receptionist', ' ', '', '', ''),
(336, 'Receptionist', ' ', '', '', ''),
(337, 'Receptionist', ' ', '', '', ''),
(338, 'Receptionist', ' ', '', '', ''),
(339, 'Receptionist', ' ', '', '', ''),
(340, 'Receptionist', ' ', '', '', ''),
(341, 'Receptionist', ' ', '', '', ''),
(342, 'Receptionist', ' ', '', '', ''),
(343, 'Receptionist', ' ', '', '', ''),
(344, 'Receptionist', ' ', '', '', ''),
(345, 'Receptionist', ' ', '', '', ''),
(346, 'Receptionist', ' ', '', '', ''),
(347, 'Receptionist', ' ', '', '', ''),
(348, 'Receptionist', ' ', '', '', ''),
(349, '', ' ', '', '', ''),
(350, 'Receptionist', ' ', '', '', ''),
(351, 'Receptionist', ' ', '', '', ''),
(352, 'Receptionist', ' ', '', '', ''),
(353, 'Receptionist', ' ', '', '', ''),
(354, 'Receptionist', ' ', '', '', ''),
(355, 'Receptionist', ' ', '', '', ''),
(356, 'Receptionist', ' ', '', '', ''),
(357, 'Receptionist', ' ', '', '', ''),
(358, 'Receptionist', ' ', '', '', ''),
(359, 'Receptionist', ' ', '', '', ''),
(360, 'Receptionist', ' ', '', '', ''),
(361, 'Receptionist', ' ', '', '', ''),
(362, 'Receptionist', ' ', '', '', ''),
(363, 'Receptionist', ' ', '', '', ''),
(364, 'Receptionist', ' ', '', '', ''),
(365, 'Receptionist', ' ', '', '', ''),
(366, 'Receptionist', ' ', '', '', ''),
(367, 'Receptionist', ' ', '', '', ''),
(368, 'Receptionist', 'Jason Landayan', '', '', ''),
(369, 'Receptionist', ' ', '', '', ''),
(370, 'Receptionist', ' ', '', '', ''),
(371, 'Receptionist', ' ', '', '', ''),
(372, 'Receptionist', ' ', '', '', ''),
(373, 'Receptionist', ' ', '', '', ''),
(374, 'Receptionist', 'Jason Landayan', '', '', ''),
(375, 'Receptionist', ' ', '', '', ''),
(376, 'Receptionist', ' ', '', '', ''),
(377, 'Receptionist', ' ', '', '', ''),
(378, 'Receptionist', ' ', '', '', ''),
(379, 'Receptionist', ' ', '', '', ''),
(380, 'Receptionist', ' ', '', '', ''),
(381, 'Receptionist', ' ', '', '', ''),
(382, '', ' ', '', '', ''),
(383, 'Receptionist', ' ', '', '', ''),
(384, 'Receptionist', ' ', '', '', ''),
(385, 'Receptionist', ' ', '', '', ''),
(386, '', ' ', '', '', ''),
(387, '', ' ', '', '', ''),
(388, 'Receptionist', ' ', '', '', ''),
(389, '', ' ', '', '', ''),
(390, 'Receptionist', ' ', '', '', ''),
(391, 'Receptionist', ' ', '', '', ''),
(392, 'Receptionist', ' ', '', '', ''),
(393, 'Receptionist', ' ', '', '', ''),
(394, 'Receptionist', ' ', '', '', ''),
(395, 'Receptionist', ' ', '', '', ''),
(396, 'Receptionist', ' ', '', '', ''),
(397, 'Receptionist', ' ', '', '', ''),
(398, 'Receptionist', ' ', '', '', ''),
(399, 'Receptionist', ' ', '', '', ''),
(400, 'Receptionist', ' ', '', '', ''),
(401, '', ' ', '', '', ''),
(402, '', ' ', '', '', ''),
(403, '', ' ', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_receptionist_id`
--

CREATE TABLE `tbl_receptionist_id` (
  `receptionist_id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `position` varchar(255) NOT NULL,
  `login_date` varchar(255) NOT NULL,
  `login_time` varchar(255) NOT NULL,
  `logout_time` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_receptionist_id`
--

INSERT INTO `tbl_receptionist_id` (`receptionist_id`, `username`, `password`, `firstname`, `lastname`, `position`, `login_date`, `login_time`, `logout_time`, `status`) VALUES
(28, 'Brian', '12345', 'Brian', 'Chan', 'Receptionist', 'Mon, Jan 16, 2017', '10:46:AM', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `room_id` int(30) NOT NULL,
  `roomrates` varchar(255) NOT NULL,
  `roomstatus` varchar(255) NOT NULL,
  `capacity` int(255) NOT NULL,
  `roomName` varchar(30) NOT NULL,
  `roomnumber` varchar(30) NOT NULL,
  `category` varchar(255) NOT NULL,
  `addguest_id` int(255) NOT NULL,
  `guestName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`room_id`, `roomrates`, `roomstatus`, `capacity`, `roomName`, `roomnumber`, `category`, `addguest_id`, `guestName`) VALUES
(58, '3300', 'Available', 6, 'Dorm Type (6 Pax Room)', '3-1', 'Sixbedroom', 0, ' '),
(59, '4400', 'Available', 8, 'Dorm Type (8 Pax Room)', '3-2', 'Eightbedroom', 0, ' '),
(61, '3300', 'Available', 6, 'Dorm Type (6 Pax Room)', '3-3', 'Sixbedroom', 0, ' '),
(62, '3300', 'Available', 6, 'Dorm Type (6 Pax Room)', '3-4', 'Sixbedroom', 0, ' '),
(63, '4400', 'Available', 8, 'Dorm Type (8 Pax Room)', '3-5', 'Eightbedroom', 0, ' '),
(64, '3300', 'Available', 6, 'Dorm Type (6 Pax Room)', '3-6', 'Sixbedroom', 0, ' '),
(65, '900', 'Occupied', 1, 'Solo Room', '4-1', 'Soloroom', 727, 'Mr. Erick Jusayan'),
(66, '900', 'Occupied', 1, 'Solo Room', '4-2', 'Soloroom', 728, 'Ms. Kei Almaida'),
(67, '900', 'Occupied', 1, 'Solo Room', '4-3', 'Soloroom', 730, 'Mr. Brian Chan'),
(68, '900', 'Available', 1, 'Solo Room', '4-4', 'Soloroom', 0, ' '),
(69, '900', 'Available', 1, 'Solo Room', '4-5', 'Soloroom', 0, ' '),
(70, '900', 'Available', 1, 'Solo Room', '4-6', 'Soloroom', 0, ' '),
(71, '1300', 'Available', 2, 'Double Room', '4-7', 'Doubleroom', 0, ' '),
(72, '1300', 'Available', 2, 'Double Room', '4-8', 'Doubleroom', 0, ' '),
(73, '1300', 'Available', 2, 'Double Room', '4-9', 'Doubleroom', 0, ''),
(74, '1300', 'Available', 2, 'Double Room', '4-10', 'Doubleroom', 0, ''),
(75, '1300', 'Available', 2, 'Double Room', '5-1', 'Doubleroom', 0, ''),
(76, '1300', 'Available', 2, 'Double Room', '5-2', 'Doubleroom', 0, ''),
(77, '900', 'Available', 1, 'Solo Room', '5-3', 'Soloroom', 0, ' '),
(78, '900', 'Available', 1, 'Solo Room', '5-4', 'Soloroom', 0, ''),
(79, '900', 'Available', 1, 'Solo Room', '5-5', 'Soloroom', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_online`
--

CREATE TABLE `tbl_room_online` (
  `room_online_id` int(255) NOT NULL,
  `roomtype` varchar(255) NOT NULL,
  `roomrates` int(255) NOT NULL,
  `capacity` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room_online`
--

INSERT INTO `tbl_room_online` (`room_online_id`, `roomtype`, `roomrates`, `capacity`, `category`, `image`) VALUES
(1, 'Solo Room', 900, 1, 'Soloroom', ''),
(2, 'Double Room', 1300, 2, 'Doubleroom', ''),
(3, 'Dorm Type (6 Pax Room)', 3300, 6, 'Sixbedroom', ''),
(4, 'Dorm Type (8 Pax Room)', 4400, 8, 'Eightbedroom', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_addguest`
--
ALTER TABLE `tbl_addguest`
  ADD PRIMARY KEY (`addguest_id`);

--
-- Indexes for table `tbl_admin_id`
--
ALTER TABLE `tbl_admin_id`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_dailysales`
--
ALTER TABLE `tbl_dailysales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `tbl_deposit_account`
--
ALTER TABLE `tbl_deposit_account`
  ADD PRIMARY KEY (`deposit_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_receptionist_id`
--
ALTER TABLE `tbl_receptionist_id`
  ADD PRIMARY KEY (`receptionist_id`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `tbl_room_online`
--
ALTER TABLE `tbl_room_online`
  ADD PRIMARY KEY (`room_online_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_addguest`
--
ALTER TABLE `tbl_addguest`
  MODIFY `addguest_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=736;
--
-- AUTO_INCREMENT for table `tbl_admin_id`
--
ALTER TABLE `tbl_admin_id`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tbl_dailysales`
--
ALTER TABLE `tbl_dailysales`
  MODIFY `sales_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `tbl_deposit_account`
--
ALTER TABLE `tbl_deposit_account`
  MODIFY `deposit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=404;
--
-- AUTO_INCREMENT for table `tbl_receptionist_id`
--
ALTER TABLE `tbl_receptionist_id`
  MODIFY `receptionist_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `room_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `tbl_room_online`
--
ALTER TABLE `tbl_room_online`
  MODIFY `room_online_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
