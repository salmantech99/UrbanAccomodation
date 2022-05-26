-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2019 at 06:21 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `username` varchar(191) NOT NULL,
  `dob` varchar(191) NOT NULL,
  `email_address` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `mobile_number` varchar(191) NOT NULL,
  `country` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `dob`, `email_address`, `password`, `mobile_number`, `country`) VALUES
(1, 'ahmed javed', '22-08-1998', 'mahmedjaved17@gmail.com', 'ahmedcui', '03364646305', 'pakistan'),
(2, 'salman sajid', '12-05-1998', 'salmansajid348@gmail.com', 'salmancui', '03055454048', 'pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `airline`
--

CREATE TABLE `airline` (
  `id` int(11) NOT NULL,
  `flight_id` int(191) NOT NULL,
  `thumb` varchar(191) NOT NULL,
  `latadesi` varchar(191) NOT NULL,
  `digit` int(3) NOT NULL,
  `country` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airline`
--

INSERT INTO `airline` (`id`, `flight_id`, `thumb`, `latadesi`, `digit`, `country`) VALUES
(10, 10, 'airblue-01-2021_(1).png', 'air', 789, 'SLOVENIA'),
(12, 12, '7816dccc59759008e38a50e6cda25a7b.png', 'eit', 615, 'SENEGAL'),
(13, 13, 'pia-pakistan-international-airlines-logo-256678A383-seeklogo_com.png', 'pia', 522, 'YEMEN'),
(14, 14, 'Qatar_Airways_Logo-500x500_(1).png', 'qat', 345, 'LIBYAN ARAB JAMAHIRI'),
(15, 15, 'Swiss_International_Airlines_logo_2011_(1).png', 'swi', 666, 'LUXEMBOURG'),
(17, 16, '432646.jpg', '345', 543, 'BELIZE');

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `id` int(11) NOT NULL,
  `code` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `citycode` int(191) NOT NULL,
  `cityname` varchar(191) NOT NULL,
  `countryname` varchar(191) NOT NULL,
  `countrycode` int(255) NOT NULL,
  `timezone` int(191) NOT NULL,
  `lat` int(191) NOT NULL,
  `lon` int(191) NOT NULL,
  `city` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`id`, `code`, `name`, `citycode`, `cityname`, `countryname`, `countrycode`, `timezone`, `lat`, `lon`, `city`) VALUES
(2, 5, 'Allama Iqbal International Airport', 345, 'Lahore', 'Pakistan', 5400, 345, 33434, 54354, 'Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `booking_car`
--

CREATE TABLE `booking_car` (
  `id` int(11) NOT NULL,
  `car_id` int(191) NOT NULL,
  `book_pickup` varchar(191) NOT NULL,
  `book_dropoff` varchar(191) NOT NULL,
  `book_dropoff_place` varchar(191) NOT NULL,
  `book_pickupdate` varchar(191) NOT NULL,
  `book_pickuptime` varchar(191) NOT NULL,
  `book_dropoffdate` varchar(191) NOT NULL,
  `book_dropofftime` varchar(191) NOT NULL,
  `price` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_car`
--

INSERT INTO `booking_car` (`id`, `car_id`, `book_pickup`, `book_dropoff`, `book_dropoff_place`, `book_pickupdate`, `book_pickuptime`, `book_dropoffdate`, `book_dropofftime`, `price`) VALUES
(36, 11, '1', '1500', 'sheikhupura', '09/01/2021', '10:00', '09/01/2021', '10:00', 1500),
(37, 11, '1', '1500', 'sheikhupura', '09/01/2021', '10:00', '09/01/2021', '10:00', 1500),
(38, 11, '1', '400', 'liberty main market', '09/01/2021', '10:00', '09/01/2021', '10:00', 400),
(39, 11, '1', '400', 'liberty main market', '09/01/2021', '10:00', '09/01/2021', '10:00', 400);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `status` varchar(191) NOT NULL,
  `Car_name` varchar(191) NOT NULL,
  `Car_Description` varchar(1000) NOT NULL,
  `stars` int(6) NOT NULL,
  `passenger` varchar(191) NOT NULL,
  `car_doors` varchar(191) NOT NULL,
  `car_image` varchar(191) NOT NULL,
  `transmission` varchar(191) NOT NULL,
  `baggage` varchar(191) NOT NULL,
  `airport_pickup` varchar(191) NOT NULL,
  `milage` varchar(191) NOT NULL,
  `pick_up` varchar(191) NOT NULL,
  `car_type` varchar(191) NOT NULL,
  `pickup_location1` varchar(191) NOT NULL,
  `dropoff_location1` varchar(191) NOT NULL,
  `dropoff_location2` varchar(191) NOT NULL,
  `dropoff_location3` varchar(191) NOT NULL,
  `dropoff_location4` varchar(191) NOT NULL,
  `dropoff_location5` varchar(191) NOT NULL,
  `dropoff_location6` varchar(191) NOT NULL,
  `dropoff_location7` varchar(191) NOT NULL,
  `dropoff_location8` varchar(191) NOT NULL,
  `dropoff_location9` varchar(191) NOT NULL,
  `dropoff_location10` varchar(191) NOT NULL,
  `price1` int(191) NOT NULL,
  `price2` int(191) NOT NULL,
  `price3` int(191) NOT NULL,
  `price4` int(191) NOT NULL,
  `price5` int(191) NOT NULL,
  `price6` int(191) NOT NULL,
  `price7` int(191) NOT NULL,
  `price8` int(191) NOT NULL,
  `price9` int(191) NOT NULL,
  `price10` int(191) NOT NULL,
  `featured` varchar(191) NOT NULL,
  `featured_from` varchar(191) NOT NULL,
  `featured_to` varchar(191) NOT NULL,
  `deposit` varchar(191) NOT NULL,
  `deposit_price` varchar(191) NOT NULL,
  `vat_tax` varchar(191) NOT NULL,
  `vat_tax_detail` varchar(191) NOT NULL,
  `related` varchar(191) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_keywords` varchar(191) NOT NULL,
  `meta_description` varchar(191) NOT NULL,
  `policy_options` varchar(191) NOT NULL,
  `policy_and_terms` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `status`, `Car_name`, `Car_Description`, `stars`, `passenger`, `car_doors`, `car_image`, `transmission`, `baggage`, `airport_pickup`, `milage`, `pick_up`, `car_type`, `pickup_location1`, `dropoff_location1`, `dropoff_location2`, `dropoff_location3`, `dropoff_location4`, `dropoff_location5`, `dropoff_location6`, `dropoff_location7`, `dropoff_location8`, `dropoff_location9`, `dropoff_location10`, `price1`, `price2`, `price3`, `price4`, `price5`, `price6`, `price7`, `price8`, `price9`, `price10`, `featured`, `featured_from`, `featured_to`, `deposit`, `deposit_price`, `vat_tax`, `vat_tax_detail`, `related`, `meta_title`, `meta_keywords`, `meta_description`, `policy_options`, `policy_and_terms`) VALUES
(11, 'Enabled', 'Mehran', '<p>The&nbsp;<strong>Suzuki Mehran</strong>&nbsp;is a globally retired small car manufactured and marketed by&nbsp;<a href=\"https://en.wikipedia.org/wiki/Pak_Suzuki_Motors\">Pak Suzuki Motors</a>,of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Suzuki\">Suzuki</a>&nbsp;in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Pakistan\">Pakistan</a>.</p>\r\n', 3, '4', '2', 'mehran3.jpg', 'auto', 'x1', 'yes', ' 20 km', '143 km/hour', 'fullsize', 'kalma chownk', 'liberty main market', 'iqbal town', 'samnabad', 'sabzazar', 'chuburgi', 'sheikhupura', 'pak arab society', 'johar town', 'shadbagh', 'yateem khana', 400, 200, 600, 500, 700, 1500, 300, 350, 340, 470, 'no', '09/01/2021', '09/01/2021', 'fixed', '1000', '', '1000', 'SUZUKI', 'mehran 2021', 'mh2', 'its passenger A/C vent has been removed, headlights and tail-lights, bumpers and front grill have been renewed', 'Cash', 'The suspension system is based on a low cost obsolete earlier leaf sprung rigid axle instead of shock absorbers.'),
(13, 'Enabled', 'Cultus', 'Grey Colour Cultus Car with buffers and lcd ', 3, '5', '4', 'Slide_suzuki-cultus-vxri-cng-2010-156677715.JPG', 'manual', 'x4', 'yes', '34 KMPH', '142 ph', 'standard', 'Gulberg', 'pak arab society', 'kalma chownk', 'shadman', 'krishan nagar', '', '', '', '', '', '', 200, 100, 400, 400, 0, 0, 0, 0, 0, 0, 'yes', '01/06/2019', '01/07/2019', 'percentage', '5', 'percentage', '5', 'corolla', 'cultus345', 'cul5647', 'its a good quality car', 'Cash', 'payment should be in cash');

-- --------------------------------------------------------

--
-- Table structure for table `car_extra`
--

CREATE TABLE `car_extra` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `thumb` varchar(191) NOT NULL,
  `status` varchar(191) NOT NULL,
  `price` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_extra`
--

INSERT INTO `car_extra` (`id`, `name`, `thumb`, `status`, `price`) VALUES
(6, 'zohaib', '666135210.jpg', 'Yes', 1500),
(7, 'zohaib', '432642.jpg', 'Yes', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `car_settings`
--

CREATE TABLE `car_settings` (
  `id` int(11) NOT NULL,
  `target` varchar(191) NOT NULL,
  `header_title` varchar(191) NOT NULL,
  `feature_cars` varchar(191) NOT NULL,
  `display_order` varchar(191) NOT NULL,
  `listing_cars` varchar(191) NOT NULL,
  `display_order1` varchar(255) NOT NULL,
  `car_result` varchar(191) NOT NULL,
  `display_order2` varchar(191) NOT NULL,
  `related_cars` varchar(191) NOT NULL,
  `minimum_price` varchar(191) NOT NULL,
  `maximum_price` int(191) NOT NULL,
  `check_in` int(191) NOT NULL,
  `check_out` int(191) NOT NULL,
  `meta_keywords` varchar(191) NOT NULL,
  `meta_description` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_settings`
--

INSERT INTO `car_settings` (`id`, `target`, `header_title`, `feature_cars`, `display_order`, `listing_cars`, `display_order1`, `car_result`, `display_order2`, `related_cars`, `minimum_price`, `maximum_price`, `check_in`, `check_out`, `meta_keywords`, `meta_description`) VALUES
(1, 'blank', '', '', 'oldf', '6', 'az', 'CaeciliaLTPro-45Light', 'ol', 'corolla', '500', 1000, 23, 34, 'tryrtyrt', 'rtyrtytr'),
(2, 'blank', 'hello', 'gdhgf', 'ol', '6', 'oldf', 'CaeciliaLTPro-45Light', 'az', 'dfgdfgfd', '500', 1000, 0, 0, 'tryrtyrt', 'EWEF');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `iso` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `nicename` varchar(191) NOT NULL,
  `iso3` varchar(191) NOT NULL,
  `numcode` int(191) NOT NULL,
  `phonecode` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(2, 'zha', 'zoha', 'cuto', 'zha', 921, 923);

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` int(11) NOT NULL,
  `status` varchar(191) NOT NULL,
  `total_hours` int(191) NOT NULL,
  `vat_tax` int(191) NOT NULL,
  `deposit` int(191) NOT NULL,
  `price_adults` int(191) NOT NULL,
  `price_child` int(191) NOT NULL,
  `price_infant` int(191) NOT NULL,
  `departure_city` varchar(191) NOT NULL,
  `departure_airline` varchar(191) NOT NULL,
  `departure_flightno` int(191) NOT NULL,
  `departure_date` varchar(191) NOT NULL,
  `departure_time` varchar(191) NOT NULL,
  `arrival_city` varchar(191) NOT NULL,
  `arrival_airline` varchar(191) NOT NULL,
  `arrival_flightno` int(191) NOT NULL,
  `arrival_date` varchar(191) NOT NULL,
  `arrival_time` varchar(191) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `status`, `total_hours`, `vat_tax`, `deposit`, `price_adults`, `price_child`, `price_infant`, `departure_city`, `departure_airline`, `departure_flightno`, `departure_date`, `departure_time`, `arrival_city`, `arrival_airline`, `arrival_flightno`, `arrival_date`, `arrival_time`, `description`) VALUES
(10, 'Enabled', 5, 10, 10, 150, 350, 450, 'pakistan', 'shaheen', 642, '10/01/2021', '5:30 PM', 'sharjah dubai', 'shaheen', 643, '10/01/2021', '10:30 PM', '<p><em>Shaheen Air</em>&nbsp;International Limited (SAI) is established as a public limited company under the Companies Ordinance, 1984. It is mandated to carry on business of&nbsp;<em>air</em>&nbsp;transportation of passenger and cargo. It commenced its&'),
(11, 'Enabled', 5, 5, 10, 200, 300, 400, 'lahore', 'airblue', 622, '10/03/2021', '3:45 Am', 'islamabad', 'airblue', 623, '10/03/2021', '8:45 Am', '<p><em>Airblue</em>&nbsp;Limited (styled as&nbsp;<em>airblue</em>) is a private Pakistani low-cost airline with its head office on the 12th floor of the Islamabad Stock Exchange (ISE) Towers</p>\r\n'),
(12, 'Enabled', 8, 5, 10, 400, 800, 1200, 'dubai', 'eithad airline', 822, '10/04/2021', '5:30 PM', 'england', 'eithad', 823, '10/04/2021', '1:30 Am', '<p><em>Etihad Airways</em>&nbsp;(Arabic ???? ??????? ??????? sharikat alitti??d li??ayar?n) is a flag carrier and the second-largest&nbsp;<em>airline</em>&nbsp;of the United Arab Emirates (after Emirates). Its head office is in Khalifa City, Abu Dhabi, ne'),
(13, 'Enabled', 5, 5, 10, 3500, 6000, 7000, 'islamabad', 'PIA', 522, '10/06/2021', '3:45 Am', 'lahore', 'PIA', 523, '10/06/2021', '8:45 Am', '<p>The airline was founded on 29 October 1946 as&nbsp;<a href=\"https://en.wikipedia.org/wiki/Orient_Airways\">Orient Airways</a>, initially based in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Calcutta\">Calcutta</a>,&nbsp;<a href=\"https://en.wikipedia.org/'),
(14, 'Enabled', 10, 5, 10, 6777, 65756, 34543, 'singapore', 'qatar airline', 922, '10/07/2021', '6:30 Am', 'malaysia', 'qatar airline', 923, '10/07/2021', '4:30 Pm', '<p>We connect more than 150 destinations on the map every day, with a fleet of the latest-generation aircraft, and an unrivalled level of service from our home and hub, the Five-star airport, Hamad International Airport in Doha, the State of&nbsp;<em>Qata'),
(15, 'Enabled', 3, 5, 10, 300, 600, 900, 'karachi', 'swiss airline', 222, '10/03/2021', '3:45 Am', 'islamabad', 'swiss', 223, '10/03/2021', '6:45 Am', '<p><strong>Swiss</strong>&nbsp;International&nbsp;<strong>Air</strong>&nbsp;Lines AG (short&nbsp;<strong>Swiss</strong>, stylised as&nbsp;<strong>SWISS</strong>) is the national&nbsp;<strong>airline</strong>&nbsp;of<strong>Switzerland</strong>&nbsp;operat'),
(16, 'Enabled', 4, 10, 10, 200, 300, 400, 'lahore', 'pia', 432, '11/09/2021', '2:00 Am', 'dubai', 'pia', 433, '11/09/2021', '6:00 Am', '<p>fgghhgfhgfvfhgrvfghfcvggfcfgcdgfcd</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `flight_settings`
--

CREATE TABLE `flight_settings` (
  `id` int(11) NOT NULL,
  `testing_mode` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight_settings`
--

INSERT INTO `flight_settings` (`id`, `testing_mode`) VALUES
(1, 'off');

-- --------------------------------------------------------

--
-- Table structure for table `flight_slider`
--

CREATE TABLE `flight_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `price` int(191) NOT NULL,
  `thumb` varchar(191) NOT NULL,
  `status` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight_slider`
--

INSERT INTO `flight_slider` (`id`, `title`, `price`, `thumb`, `status`) VALUES
(4, 'flight slider', 1500, '640083929.jpg', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `status` varchar(191) NOT NULL,
  `hotel_name` varchar(191) NOT NULL,
  `hotel_description` varchar(250) NOT NULL,
  `stars` int(5) NOT NULL,
  `hotel_type` varchar(191) NOT NULL,
  `hotel_image` varchar(255) NOT NULL,
  `location` varchar(191) NOT NULL,
  `price1` int(191) NOT NULL,
  `airport_pickup` varchar(191) NOT NULL,
  `featured` varchar(191) NOT NULL,
  `featured_from` varchar(191) NOT NULL,
  `featured_to` varchar(191) NOT NULL,
  `vat_tax` varchar(191) NOT NULL,
  `vat_tax_detail` varchar(191) NOT NULL,
  `related` varchar(191) NOT NULL,
  `address_location` varchar(191) NOT NULL,
  `latitude` int(191) NOT NULL,
  `longitude` int(191) NOT NULL,
  `add_hotel` varchar(191) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_keywords` varchar(191) NOT NULL,
  `meta_descriptions` varchar(191) NOT NULL,
  `hotel_email` varchar(191) NOT NULL,
  `hotel_website` varchar(191) NOT NULL,
  `hotel_phone_number` varchar(191) NOT NULL,
  `policy_checkin` varchar(191) NOT NULL,
  `policy_checkout` varchar(191) NOT NULL,
  `payment_option` varchar(191) NOT NULL,
  `policy_and_terms` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `status`, `hotel_name`, `hotel_description`, `stars`, `hotel_type`, `hotel_image`, `location`, `price1`, `airport_pickup`, `featured`, `featured_from`, `featured_to`, `vat_tax`, `vat_tax_detail`, `related`, `address_location`, `latitude`, `longitude`, `add_hotel`, `meta_title`, `meta_keywords`, `meta_descriptions`, `hotel_email`, `hotel_website`, `hotel_phone_number`, `policy_checkin`, `policy_checkout`, `payment_option`, `policy_and_terms`) VALUES
(13, 'Enabled', 'cine star', '<p>come and enjoy the service of our hotel feel relxed and enjoy your holidays in less payment</p>\r\n', 4, 'Apartment', 'picjumbo-high-quality-hd-banner-images-stock-photos-free-laptop-man-hand-download.jpg', 'gulberg', 1500, 'Yes', 'No', '08/05/2021', '10/13/2021', 'Fixed', '10%', 'Monal Resturant', 'gulberg3 lahore main ', 345, 545, '', 'cine', 'cin2012', 'enjouy your tour', 'cine@star.com', 'www.cinestar.com', '03164774149', '2-09-2021', '6-10-2021', 'Cash', 'Accepted Only money'),
(14, 'Enabled', 'Pearl Continental ', '<p>come and enjoy the service of our hotel you will get everything of your desire.</p>\r\n', 5, 'Apartment', 'PCHL_Exterior_th.jpg', 'lahore', 30000, 'Yes', 'No', '08/01/2021', '09/26/2021', 'Fixed', '5%', 'green valley', 'gulberg 3 gt road', 45, 65756, '', 'PC', 'P123', 'enjour our services', 'pearl@continental.com', 'www.pearlcontinental.com', '03164774149', '09/01/2021', '08/04/2021', 'Pay on Arrival', 'Accepted Only Money'),
(15, 'Enabled', 'Mughal E Azam Fort', '<p>A good place to dine in with cultural and traditional touch. Ambience is fine. The place is a bit congested and needs wider space. Over all it is fine.........</p>\r\n', 4, 'Apartment', '4b6b04621f53476299c0ccdf61d273486.jpg', 'lahore', 3400, 'Yes', 'No', '09/01/2021', '09/25/2021', 'Fixed', '5%', 'green valley', 'gulberg 3 gt road', 45, 54, '', 'five star', 'ghffgh', 'A good place to dine in with cultural and traditional touch. Ambience is fine. The place is a bit congested and needs wider space. Over all it is fine.', 'mughal-e-azam-fort@gmail.com', 'www.mughal-e-azam-fort.com', '03164774149', '09/01/2021', '09/15/2021', 'Cash', 'A good place to dine in with cultural and traditional touch. Ambience is fine. The place is a bit congested and needs wider space. Over all it is fine.'),
(16, 'Enabled', 'Avari Lahore Hotel', '<p>A great hotel for party and wedding ceremonies.Seperate Rooms are available for Kids......</p>\r\n', 4, 'Apartment', '1102375671.jpg', 'lahore', 1200, 'Yes', 'No', '09/03/2021', '09/05/2021', 'Fixed', '5%', 'green valley', 'gulberg 3 gt road', 45, 54, '', 'five star', 'tyujii8', 'A great hotel for party and wedding ceremonies.Seperate Rooms are available for Kids.', 'avari@gmail.com', 'www.avarihotel.com', '0429876543', '09/01/2021', '09/13/2021', 'Cash', 'A great hotel for party and wedding ceremonies.Seperate Rooms are available for Kids.');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_booking_order`
--

CREATE TABLE `hotel_booking_order` (
  `id` int(11) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `phone_number` int(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `coupun_code` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_booking_order`
--

INSERT INTO `hotel_booking_order` (`id`, `first_name`, `last_name`, `phone_number`, `email`, `coupun_code`) VALUES
(1, 'zohaib', 'rajpoot', 2147483647, 'buttzohaib46@yahoo.com', 445666),
(2, 'zohaib', 'rajpoot', 2147483647, 'buttzohaib46@yahoo.com', 445666),
(3, 'zohaib', 'rajpoot', 2147483647, 'buttzohaib46@yahoo.com', 445666),
(4, 'zohaib', 'rajpoot', 2147483647, 'buttzohaib46@yahoo.com', 445666),
(5, 'zohaib', 'rajpoot', 2147483647, 'buttzohaib46@yahoo.com', 445666);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_extra`
--

CREATE TABLE `hotel_extra` (
  `id` int(11) NOT NULL,
  `thumb` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `status` varchar(191) NOT NULL,
  `price` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_extra`
--

INSERT INTO `hotel_extra` (`id`, `thumb`, `name`, `status`, `price`) VALUES
(10, '18498920.jpg', 'zohaib', 'Yes', 1500),
(11, '426xNx430x430-Village-Restaurant-Dinner-for-10-Children_jpg_pagespeed_ic_9Vz5yR-xgx.jpg', 'zohaib', 'No', 150);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_settings`
--

CREATE TABLE `hotel_settings` (
  `id` int(11) NOT NULL,
  `target` varchar(191) NOT NULL,
  `header_title` varchar(191) NOT NULL,
  `home_features` varchar(191) NOT NULL,
  `display_order1` varchar(191) NOT NULL,
  `listing_hotels` varchar(191) NOT NULL,
  `display_order2` varchar(255) NOT NULL,
  `search_hotels` varchar(191) NOT NULL,
  `display_order3` varchar(191) NOT NULL,
  `related_hotels` varchar(191) NOT NULL,
  `minimum_price` varchar(191) NOT NULL,
  `maximum_price` varchar(191) NOT NULL,
  `check_in` int(191) NOT NULL,
  `check_out` int(191) NOT NULL,
  `meta_keywords` varchar(191) NOT NULL,
  `meta_descriptions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_settings`
--

INSERT INTO `hotel_settings` (`id`, `target`, `header_title`, `home_features`, `display_order1`, `listing_hotels`, `display_order2`, `search_hotels`, `display_order3`, `related_hotels`, `minimum_price`, `maximum_price`, `check_in`, `check_out`, `meta_keywords`, `meta_descriptions`) VALUES
(1, 'Blank', 'hello', '8', 'az', '7', 'az', '6', 'oldf', '5', '50', '100', 23, 34, 'gfhf', ''),
(2, 'Blank', 'hello', '8', 'az', '7', 'az', '6', 'oldf', '5', '50', '100', 23, 34, 'gfhf', ''),
(3, 'Blank', 'hello', '8', 'az', '7', 'oldf', '6', 'az', '5', '500', '1000', 23, 34, 'gfhf', 'uiuoiuo');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `status` varchar(191) NOT NULL,
  `room_type` varchar(191) NOT NULL,
  `hotel_id` int(191) NOT NULL,
  `price` int(191) NOT NULL,
  `quantity` int(255) NOT NULL,
  `minimum_stay` int(255) NOT NULL,
  `max_adults` int(191) NOT NULL,
  `max_children` int(191) NOT NULL,
  `extra_beds` int(191) NOT NULL,
  `extra_bed_charges` int(191) NOT NULL,
  `amnesty` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `status`, `room_type`, `hotel_id`, `price`, `quantity`, `minimum_stay`, `max_adults`, `max_children`, `extra_beds`, `extra_bed_charges`, `amnesty`) VALUES
(8, 'enabled', 'Superior Double', 13, 14000, 1, 1, 1, 1, 1, 1, ''),
(22, 'enabled', 'Superior Tripple', 14, 15000, 1, 5, 1, 4, 2, 3500, ''),
(23, 'disabled', 'Double or Twin Rooms', 15, 1500, 1, 1, 1, 1, 1, 1009, ''),
(24, 'disabled', 'One-Bedroom Apartment', 16, 1200, 1, 1, 1, 1, 1, 200, 'on'),
(25, 'enabled', 'One-Bedroom Apartment', 13, 1500000, 1, 1, 1, 1, 1, 155, 'on'),
(26, 'disabled', 'One-Bedroom Apartment', 13, 15000, 1, 4, 1, 5, 6, 45666, 'on'),
(27, 'enabled', 'Studio Apartment with Creek View', 17, 3432, 1, 3, 1, 3, 2, 434324, ''),
(28, 'enabled', 'Double or Twin Rooms', 14, 1200, 1, 1, 1, 1, 1, 1200, '');

-- --------------------------------------------------------

--
-- Table structure for table `travo_car_booking`
--

CREATE TABLE `travo_car_booking` (
  `id` int(50) NOT NULL,
  `car_id` int(191) NOT NULL,
  `car_name` varchar(191) NOT NULL,
  `car_booking_pickup` varchar(191) NOT NULL,
  `car_booking_dropoff` varchar(191) NOT NULL,
  `car_book_pickupdate` varchar(191) NOT NULL,
  `car_book_pickuptime` varchar(191) NOT NULL,
  `car_book_dropoffdate` varchar(191) NOT NULL,
  `car_book_dropofftime` varchar(191) NOT NULL,
  `car_booking_price` varchar(191) NOT NULL,
  `car_booking_tax` varchar(191) NOT NULL,
  `total_price` varchar(191) NOT NULL,
  `car_booking_deposit` varchar(191) NOT NULL,
  `car_type` varchar(191) NOT NULL,
  `customer_name` varchar(191) NOT NULL,
  `phone_number` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `address` varchar(250) NOT NULL,
  `coupon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travo_car_booking`
--

INSERT INTO `travo_car_booking` (`id`, `car_id`, `car_name`, `car_booking_pickup`, `car_booking_dropoff`, `car_book_pickupdate`, `car_book_pickuptime`, `car_book_dropoffdate`, `car_book_dropofftime`, `car_booking_price`, `car_booking_tax`, `total_price`, `car_booking_deposit`, `car_type`, `customer_name`, `phone_number`, `email`, `address`, `coupon`) VALUES
(1, 11, 'Mehran', 'kalma chownk', 'liberty main market', '12/06/2021', '04:00', '12/06/2021', '06:00', '400', '40', '440', '44', 'fullsize', 'zahid elahi', '03064704770', 'zahidelahi2@gmail.com', 'outfal road santnagar lahore', '678899');

-- --------------------------------------------------------

--
-- Table structure for table `travo_contact`
--

CREATE TABLE `travo_contact` (
  `id` int(50) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_subject` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_comment` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travo_contact`
--

INSERT INTO `travo_contact` (`id`, `contact_name`, `contact_subject`, `contact_email`, `contact_comment`) VALUES
(6, 'zohaib wahab', 'Deals', 'buttzohaib46@yahoo.com', 'tour deal prices are so high'),
(7, 'asad shafiq', 'Deals', 'asadextremist@gmail.com', 'please make your deals in less price');

-- --------------------------------------------------------

--
-- Table structure for table `travo_flight_booking_passenger`
--

CREATE TABLE `travo_flight_booking_passenger` (
  `id` int(50) NOT NULL,
  `flight_id` int(191) NOT NULL,
  `airline_id` int(191) NOT NULL,
  `flight_departure` varchar(191) NOT NULL,
  `flight_dep_date` varchar(191) NOT NULL,
  `flight_arrival` varchar(191) NOT NULL,
  `flight_arr_date` varchar(191) NOT NULL,
  `flight_dep_time` varchar(191) NOT NULL,
  `flight_arr_time` varchar(191) NOT NULL,
  `flight_hours` varchar(191) NOT NULL,
  `flight_price_adult` varchar(191) NOT NULL,
  `flight_price_child` varchar(191) NOT NULL,
  `flight_price_infant` varchar(191) NOT NULL,
  `flight_total_pass_price` varchar(191) NOT NULL,
  `flight_tax_price` varchar(191) NOT NULL,
  `flight_total_price` varchar(191) NOT NULL,
  `flight_deposit_price` varchar(191) NOT NULL,
  `title` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `dob` varchar(191) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(191) NOT NULL,
  `type` varchar(191) NOT NULL,
  `nationality` varchar(191) NOT NULL,
  `passport_issue_country` varchar(191) NOT NULL,
  `passport_expiry` varchar(191) NOT NULL,
  `passport_number` varchar(191) NOT NULL,
  `meal_preference` varchar(191) NOT NULL,
  `special_assistance` varchar(191) NOT NULL,
  `flayer_number` varchar(191) NOT NULL,
  `flayer-number` varchar(191) NOT NULL,
  `telephone_code` varchar(191) NOT NULL,
  `telephone_area_code` varchar(191) NOT NULL,
  `telephone_number` varchar(191) NOT NULL,
  `mobile_code` varchar(191) NOT NULL,
  `mobile_number` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `travo_hotel_order`
--

CREATE TABLE `travo_hotel_order` (
  `id` int(50) NOT NULL,
  `hotel_id` int(191) NOT NULL,
  `room_id` int(50) NOT NULL,
  `hotel_name` varchar(191) NOT NULL,
  `hotel_location` varchar(191) NOT NULL,
  `tax` varchar(191) NOT NULL,
  `total_price` varchar(191) NOT NULL,
  `deposit_now` varchar(191) NOT NULL,
  `customer_name` varchar(191) NOT NULL,
  `phone_number` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `coupun_code` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travo_hotel_order`
--

INSERT INTO `travo_hotel_order` (`id`, `hotel_id`, `room_id`, `hotel_name`, `hotel_location`, `tax`, `total_price`, `deposit_now`, `customer_name`, `phone_number`, `email`, `address`, `coupun_code`) VALUES
(1, 13, 25, 'cine star', 'gulberg', '150000', '1650000', '165000', 'asad shafiq', '03143456789', 'asad.extremist@gmail.com', 'office # 1208 12th Floor Al Hafeez Heights Gulberg 3 Lahore', '65744578'),
(2, 14, 28, 'Pearl Continental ', 'lahore', '120', '1320', '132', 'zahid elahi', '03064704770', 'zahidilahi2@gmail.com', 'House # 68/2 Street # 55-A Out Fall Road Sanat Nagar Lahore, House # 68/2 Street # 55-A Out Fall Road Sanat Nagar Lahore', '678899');

-- --------------------------------------------------------

--
-- Table structure for table `travo_register`
--

CREATE TABLE `travo_register` (
  `id` int(50) NOT NULL,
  `register_name` varchar(50) NOT NULL,
  `register_email` varchar(60) NOT NULL,
  `register_password` varchar(50) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `phone_number` varchar(191) NOT NULL,
  `address1` varchar(191) NOT NULL,
  `address2` varchar(191) NOT NULL,
  `city` varchar(191) NOT NULL,
  `region` varchar(191) NOT NULL,
  `postal_code` varchar(191) NOT NULL,
  `country` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travo_register`
--

INSERT INTO `travo_register` (`id`, `register_name`, `register_email`, `register_password`, `confirm_password`, `phone_number`, `address1`, `address2`, `city`, `region`, `postal_code`, `country`) VALUES
(2, 'tehseen basharat', 'tehseen.xpertcoders@gmail.com', 'tehseen@123', 'tehseen@123', '03164311685', 'office # 1208 floor # 12th Al Hafeez Heights Gulberg 3 Lahore ', 'office # 1208 floor # 12th Al Hafeez Heights Gulberg 3 Lahore ', 'Lahore', 'islam', '5200', 'Pakistan'),
(3, 'Muhammad Jawad', 'jawad@xpertcoders.com', 'jawad@123', 'jawad@123', '03204311567', 'hjgjhsdhjvafghjhagdhjgs', 'hygewuihyewuihfbdjksb', 'lahore', 'islam', '5200', 'pakistan'),
(4, 'Zohaib Wahab', 'buttzohaib46@yahoo.com', 'zohaibwahab', 'zohaibwahab', '03164311685', 'office # 815 8th Floor Al Hafeez Heights Gulberg 3 Lahore', 'office # 815 8th Floor Al Hafeez Heights Gulberg 3 Lahore', 'Lahore', 'Islam', '54000', 'Pakistan'),
(5, 'Zahid Ilahi', 'zahidilahi2@gmail.com', '12345678', '12345678', '03064704770', 'House # 68/2 Street # 55-A Out Fall Road Sanat Nagar Lahore ', 'House # 68/2 Street # 55-A Out Fall Road Sanat Nagar Lahore ', 'Lahore', 'Islam', '53000', 'Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Name` varchar(191) NOT NULL,
  `Email` varchar(191) NOT NULL,
  `Password` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `Email`, `Password`) VALUES
(1, 'zohaib', 'buttzohaib46@yahoo.com', 'zobi@wahab'),
(2, 'asad', 'asadextremist@yahoo.com', 'asad@123');

-- --------------------------------------------------------

--
-- Table structure for table `user_travo_car_order`
--

CREATE TABLE `user_travo_car_order` (
  `id` int(11) NOT NULL,
  `car_id` int(191) NOT NULL,
  `car_name` varchar(191) NOT NULL,
  `car_booking_pickup` varchar(191) NOT NULL,
  `car_booking_dropoff` varchar(191) NOT NULL,
  `car_book_pickupdate` varchar(191) NOT NULL,
  `car_book_pickuptime` varchar(191) NOT NULL,
  `car_book_dropoffdate` varchar(191) NOT NULL,
  `car_book_dropofftime` varchar(191) NOT NULL,
  `car_booking_price` varchar(191) NOT NULL,
  `car_booking_tax` varchar(191) NOT NULL,
  `total_price` varchar(191) NOT NULL,
  `car_booking_deposit` varchar(191) NOT NULL,
  `car_type` varchar(191) NOT NULL,
  `user_name` varchar(191) NOT NULL,
  `phone_number` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_travo_car_order`
--

INSERT INTO `user_travo_car_order` (`id`, `car_id`, `car_name`, `car_booking_pickup`, `car_booking_dropoff`, `car_book_pickupdate`, `car_book_pickuptime`, `car_book_dropoffdate`, `car_book_dropofftime`, `car_booking_price`, `car_booking_tax`, `total_price`, `car_booking_deposit`, `car_type`, `user_name`, `phone_number`, `email`, `address`) VALUES
(1, 11, 'Mehran', 'kalma chownk', 'iqbal town', '11/17/2021', '10:00', '11/18/2021', '10:00', '200', '20', '220', '22', 'fullsize', 'Zohaib Wahab', '03164311685', 'buttzohaib46@yahoo.com', 'office # 815 8th Floor Al Hafeez Heights Gulberg 3 Lahore'),
(2, 11, 'Mehran', 'kalma chownk', 'samnabad', '12/13/2021', '05:30', '12/14/2021', '06:00', '600', '60', '660', '66', 'fullsize', 'Zohaib Wahab', '03164311685', 'buttzohaib46@yahoo.com', 'office # 815 8th Floor Al Hafeez Heights Gulberg 3 Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `user_travo_contact`
--

CREATE TABLE `user_travo_contact` (
  `id` int(11) NOT NULL,
  `contact_name` varchar(191) NOT NULL,
  `contact_subject` varchar(191) NOT NULL,
  `contact_email` varchar(191) NOT NULL,
  `contact_comment` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_travo_contact`
--

INSERT INTO `user_travo_contact` (`id`, `contact_name`, `contact_subject`, `contact_email`, `contact_comment`) VALUES
(1, 'zohaib wahab', 'i want this booking', 'buttzohaib46@yahoo.com', 'your service is best ');

-- --------------------------------------------------------

--
-- Table structure for table `user_travo_flight_order`
--

CREATE TABLE `user_travo_flight_order` (
  `id` int(11) NOT NULL,
  `flight_id` int(191) NOT NULL,
  `airline_id` int(191) NOT NULL,
  `flight_departure` varchar(191) NOT NULL,
  `flight_dep_date` varchar(191) NOT NULL,
  `flight_arrival` varchar(191) NOT NULL,
  `flight_arr_date` varchar(191) NOT NULL,
  `flight_dep_time` varchar(191) NOT NULL,
  `flight_arr_time` varchar(191) NOT NULL,
  `flight_hours` varchar(191) NOT NULL,
  `flight_price_adult` varchar(191) NOT NULL,
  `flight_price_child` varchar(191) NOT NULL,
  `flight_price_infant` varchar(191) NOT NULL,
  `flight_total_pass_price` varchar(191) NOT NULL,
  `flight_tax_price` varchar(191) NOT NULL,
  `flight_total_price` varchar(191) NOT NULL,
  `flight_deposit_price` varchar(191) NOT NULL,
  `user_name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone_number` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_travo_flight_order`
--

INSERT INTO `user_travo_flight_order` (`id`, `flight_id`, `airline_id`, `flight_departure`, `flight_dep_date`, `flight_arrival`, `flight_arr_date`, `flight_dep_time`, `flight_arr_time`, `flight_hours`, `flight_price_adult`, `flight_price_child`, `flight_price_infant`, `flight_total_pass_price`, `flight_tax_price`, `flight_total_price`, `flight_deposit_price`, `user_name`, `email`, `phone_number`, `address`) VALUES
(1, 13, 13, 'islamabad', '10/06/2021', 'lahore', '10/06/2021', '3:45 Am', '8:45 Am', '5', '3500', '6000', '7000', '16500', '1650', '18150', '1815', 'Zohaib Wahab', 'buttzohaib46@yahoo.com', '03164311685', 'office # 815 8th Floor Al Hafeez Heights Gulberg 3 Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `user_travo_hotel_order`
--

CREATE TABLE `user_travo_hotel_order` (
  `id` int(11) NOT NULL,
  `hotel_id` int(191) NOT NULL,
  `room_id` int(191) NOT NULL,
  `hotel_name` varchar(191) NOT NULL,
  `hotel_location` varchar(191) NOT NULL,
  `tax` varchar(191) NOT NULL,
  `total_price` varchar(191) NOT NULL,
  `deposit_now` varchar(191) NOT NULL,
  `user_name` varchar(191) NOT NULL,
  `phone_number` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_travo_hotel_order`
--

INSERT INTO `user_travo_hotel_order` (`id`, `hotel_id`, `room_id`, `hotel_name`, `hotel_location`, `tax`, `total_price`, `deposit_now`, `user_name`, `phone_number`, `email`, `address`) VALUES
(1, 16, 24, 'Avari Lahore Hotel', 'lahore', '120', '1320', '132', 'Zohaib Wahab', '03164311685', 'buttzohaib46@yahoo.com', 'office # 815 8th Floor Al Hafeez Heights Gulberg 3 Lahore'),
(2, 13, 25, 'cine star', 'gulberg', '150000', '1650000', '165000', 'Zohaib Wahab', '03164311685', 'buttzohaib46@yahoo.com', 'office # 815 8th Floor Al Hafeez Heights Gulberg 3 Lahore'),
(3, 14, 22, 'Pearl Continental ', 'lahore', '1500', '16500', '1650', 'Zahid Ilahi', '03064704770', 'zahidilahi2@gmail.com', 'House # 68/2 Street # 55-A Out Fall Road Sanat Nagar Lahore ');

-- --------------------------------------------------------

--
-- Table structure for table `user_travo_vacation_order`
--

CREATE TABLE `user_travo_vacation_order` (
  `id` int(11) NOT NULL,
  `vacation_id` int(191) NOT NULL,
  `vacation_name` varchar(191) NOT NULL,
  `vacation_location` varchar(191) NOT NULL,
  `vacation_type` varchar(191) NOT NULL,
  `vacation_date` varchar(191) NOT NULL,
  `vacation_adult_quantity` varchar(191) NOT NULL,
  `vacation_child_quantity` varchar(191) NOT NULL,
  `vacation_infant_quantity` varchar(191) NOT NULL,
  `vacation_price` varchar(191) NOT NULL,
  `vacation_tax` varchar(191) NOT NULL,
  `vacation_days` varchar(191) NOT NULL,
  `vacation_nights` varchar(191) NOT NULL,
  `vacation_total_price` varchar(191) NOT NULL,
  `vacation_deposit` varchar(191) NOT NULL,
  `user_name` varchar(191) NOT NULL,
  `phone_number` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_travo_vacation_order`
--

INSERT INTO `user_travo_vacation_order` (`id`, `vacation_id`, `vacation_name`, `vacation_location`, `vacation_type`, `vacation_date`, `vacation_adult_quantity`, `vacation_child_quantity`, `vacation_infant_quantity`, `vacation_price`, `vacation_tax`, `vacation_days`, `vacation_nights`, `vacation_total_price`, `vacation_deposit`, `user_name`, `phone_number`, `email`, `address`) VALUES
(1, 5, 'Hong Kong Island Tour', 'Bangkok (Bangkok)', 'Family', '11/17/2021', '600', '300', '400', '1300', '130', '6', '7', '1430', '143', 'Zohaib Wahab', '03164311685', 'buttzohaib46@yahoo.com', 'office # 815 8th Floor Al Hafeez Heights Gulberg 3 Lahore'),
(2, 6, 'BIG BUS TOUR OF DUBAI', 'DUBAI', 'Discovery Tours', '', '200', '200', '300', '700', '70', '9', '8', '770', '77', 'Zohaib Wahab', '03164311685', 'buttzohaib46@yahoo.com', 'office # 815 8th Floor Al Hafeez Heights Gulberg 3 Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `vacation`
--

CREATE TABLE `vacation` (
  `id` int(11) NOT NULL,
  `status` varchar(191) NOT NULL,
  `vacation_name` varchar(191) NOT NULL,
  `vacation_description` varchar(250) NOT NULL,
  `adult_quantity` int(191) NOT NULL,
  `child_quantity` int(191) NOT NULL,
  `infant_quantity` int(191) NOT NULL,
  `adult_price` int(191) NOT NULL,
  `child_price` int(191) NOT NULL,
  `infant_price` int(191) NOT NULL,
  `stars` int(5) NOT NULL,
  `total_days` int(191) NOT NULL,
  `total_nights` int(191) NOT NULL,
  `vacation_type` varchar(191) NOT NULL,
  `vacational_place_image` varchar(191) NOT NULL,
  `featured` varchar(191) NOT NULL,
  `featured_from` varchar(191) NOT NULL,
  `featured_to` varchar(191) NOT NULL,
  `location1` varchar(191) NOT NULL,
  `location2` varchar(191) NOT NULL,
  `location3` varchar(191) NOT NULL,
  `location4` varchar(191) NOT NULL,
  `location5` varchar(191) NOT NULL,
  `location6` varchar(191) NOT NULL,
  `location7` varchar(191) NOT NULL,
  `location8` varchar(191) NOT NULL,
  `location9` varchar(191) NOT NULL,
  `location10` varchar(191) NOT NULL,
  `deposit` varchar(191) NOT NULL,
  `deposit_percent` varchar(191) NOT NULL,
  `vat_tax` varchar(191) NOT NULL,
  `vat_tax_detail` varchar(191) NOT NULL,
  `related_vacation` varchar(191) NOT NULL,
  `map_address_location` varchar(191) NOT NULL,
  `map_address_latitude` varchar(191) NOT NULL,
  `map_address_longitude` varchar(191) NOT NULL,
  `inclusions` varchar(191) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_keywords` varchar(191) NOT NULL,
  `meta_descriptions` varchar(191) NOT NULL,
  `vacational_operator_email` varchar(191) NOT NULL,
  `operators_website` varchar(191) NOT NULL,
  `operators_phone_number` varchar(191) NOT NULL,
  `operators_address` varchar(191) NOT NULL,
  `payment_option` varchar(191) NOT NULL,
  `policy_and_terms` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacation`
--

INSERT INTO `vacation` (`id`, `status`, `vacation_name`, `vacation_description`, `adult_quantity`, `child_quantity`, `infant_quantity`, `adult_price`, `child_price`, `infant_price`, `stars`, `total_days`, `total_nights`, `vacation_type`, `vacational_place_image`, `featured`, `featured_from`, `featured_to`, `location1`, `location2`, `location3`, `location4`, `location5`, `location6`, `location7`, `location8`, `location9`, `location10`, `deposit`, `deposit_percent`, `vat_tax`, `vat_tax_detail`, `related_vacation`, `map_address_location`, `map_address_latitude`, `map_address_longitude`, `inclusions`, `meta_title`, `meta_keywords`, `meta_descriptions`, `vacational_operator_email`, `operators_website`, `operators_phone_number`, `operators_address`, `payment_option`, `policy_and_terms`) VALUES
(5, 'Enabled', 'Hong Kong Island Tour', '<p>Experience hospitality at the city, from its stunning to vibrant culture, architecture and exquisite cuisines.</p>\r\n\r\n<p>Take a weekend trip on the occasion&nbsp;and create a memorable experience with your loved one. If you are a sun and sea lover', 2, 3, 4, 200, 300, 400, 2, 6, 7, 'Family', '91.jpg', 'Yes', '10/06/2021', 'featured_to', 'Bangkok (Bangkok)', 'Bangkok (Bangkok)', 'Bangkok (Bangkok)', 'Bangkok (Bangkok)', 'Bangkok (Bangkok)', 'Bangkok (Bangkok)', 'Bangkok (Bangkok)', 'Bangkok (Bangkok)', 'Bangkok (Bangkok)', 'Bangkok (Bangkok)', 'Fixed', '10%', 'Fixed', '10%', '6 Days Around Thailand', 'Malaysia, Myanmar, Cambodia, Laos', '675', '575', '', 'bangkok', 'bangkok.com', 'After breakfast, check out from your hotel and spend the day shopping and exploring the city on your own. In the evening, transfer to the airport and board your flight and return home with gr', 'asad.xpertcoders@gmail.com', 'www.asad@info.com', '2147483647', 'Bangkok is the capital city of Thailand. It has a population of 5,104,476, and is located on a latitue of 13.75 and longitude of 100.5.', 'Paypal', 'Prices include return economy-class flights from on Qatar Airways. Prices are quoted on a twin-sharing basis in a standard room with inclusions listed above. Additional options are available '),
(6, 'Enabled', 'BIG BUS TOUR OF DUBAI', '<p>Take a weekend trip on the occasion&nbsp;and create a memorable experience with your loved one. If you are a sun and sea lover, this paradise offers you an array of splendid sandy beaches, where you can spend time relaxing or go on a refreshing ya', 1, 2, 3, 100, 200, 300, 4, 9, 8, 'Discovery Tours', '132.jpg', 'Yes', '10/12/2021', '10/31/2021', 'DUBAI', 'DUBAI', 'DUBAI', 'DUBAI', 'DUBAI', 'DUBAI', 'DUBAI', 'DUBAI', 'DUBAI', 'DUBAI', 'Percentage', '10%', 'Percentage', '5%', '6 Days Around Thailand', 'Malaysia, Myanmar, Cambodia, Laos', '45', '54', '', 'DUBAI TOUR', 'UAE', 'Arrive to the city and transfer to your hotel. Check in and spend the day at leisure.', 'zohaib.xpertcoders@gmail.com', 'www.info@xpertcoders.com', '2147483647', 'house# 47 street #15 new shalimar colony multan road lahore.', 'American Express', 'Prices include return economy-class flights from on Qatar Airways. Prices are quoted on a twin-sharing basis in a standard room with inclusions listed above. Additional options are available ');

-- --------------------------------------------------------

--
-- Table structure for table `vacation_booking`
--

CREATE TABLE `vacation_booking` (
  `id` int(11) NOT NULL,
  `vacation_id` int(191) NOT NULL,
  `date` varchar(191) NOT NULL,
  `adult_quantity` int(191) NOT NULL,
  `child_quantity` int(191) NOT NULL,
  `infant_quantity` varchar(191) NOT NULL,
  `total_price` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacation_booking`
--

INSERT INTO `vacation_booking` (`id`, `vacation_id`, `date`, `adult_quantity`, `child_quantity`, `infant_quantity`, `total_price`) VALUES
(1, 6, '10/13/2021', 300, 0, '0', 300),
(2, 5, '10/06/2021', 200, 900, '0', 1100),
(8, 6, '10/12/2021', 100, 600, '300', 1000),
(9, 6, '10/12/2021', 100, 600, '300', 1000),
(10, 5, '10/06/2021', 400, 600, '800', 1800),
(11, 5, '10/06/2021', 400, 600, '800', 1800),
(12, 6, '10/12/2021', 500, 600, '300', 1400);

-- --------------------------------------------------------

--
-- Table structure for table `vacation_extras`
--

CREATE TABLE `vacation_extras` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `thumb` varchar(191) NOT NULL,
  `status` varchar(191) NOT NULL,
  `price` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacation_extras`
--

INSERT INTO `vacation_extras` (`id`, `name`, `thumb`, `status`, `price`) VALUES
(3, 'bangkok', '131.jpg', 'Yes', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `vacation_order`
--

CREATE TABLE `vacation_order` (
  `id` int(11) NOT NULL,
  `vacation_id` int(191) NOT NULL,
  `vacation_name` varchar(191) NOT NULL,
  `vacation_location` varchar(191) NOT NULL,
  `vacation_type` varchar(191) NOT NULL,
  `vacation_date` varchar(191) NOT NULL,
  `vacation_adult_quantity` varchar(191) NOT NULL,
  `vacation_child_quantity` varchar(191) NOT NULL,
  `vacation_infant_quantity` varchar(191) NOT NULL,
  `vacation_price` varchar(191) NOT NULL,
  `vacation_tax` varchar(191) NOT NULL,
  `vacation_days` varchar(191) NOT NULL,
  `vacation_nights` varchar(191) NOT NULL,
  `vacation_total_price` varchar(191) NOT NULL,
  `vacation_deposit` varchar(191) NOT NULL,
  `customer_name` varchar(191) NOT NULL,
  `phone_number` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `coupon` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vacation_settings`
--

CREATE TABLE `vacation_settings` (
  `id` int(11) NOT NULL,
  `target` varchar(191) NOT NULL,
  `header_title` varchar(191) NOT NULL,
  `home_features_vacation` varchar(191) NOT NULL,
  `display_order` varchar(191) NOT NULL,
  `listing_vacation` varchar(191) NOT NULL,
  `display_order1` varchar(191) NOT NULL,
  `search_vacation_result` varchar(191) NOT NULL,
  `display_order2` varchar(191) NOT NULL,
  `related_vacation` varchar(191) NOT NULL,
  `minimum_price` varchar(191) NOT NULL,
  `maximum_price` varchar(191) NOT NULL,
  `meta_keywords` varchar(191) NOT NULL,
  `meta_description` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacation_settings`
--

INSERT INTO `vacation_settings` (`id`, `target`, `header_title`, `home_features_vacation`, `display_order`, `listing_vacation`, `display_order1`, `search_vacation_result`, `display_order2`, `related_vacation`, `minimum_price`, `maximum_price`, `meta_keywords`, `meta_description`) VALUES
(1, 'Self', 'Vacation Listing', '8', 'newf', '8', 'za', '8', 'az', '8', '70', '8000', 'thailand', 'Prices include return economy-class flights from on Qatar Airways. Prices are quoted on a twin-sharing basis in a standard room with inclusions listed above. Additional options are available ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airline`
--
ALTER TABLE `airline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_car`
--
ALTER TABLE `booking_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_extra`
--
ALTER TABLE `car_extra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_settings`
--
ALTER TABLE `car_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight_settings`
--
ALTER TABLE `flight_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight_slider`
--
ALTER TABLE `flight_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_booking_order`
--
ALTER TABLE `hotel_booking_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_extra`
--
ALTER TABLE `hotel_extra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_settings`
--
ALTER TABLE `hotel_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travo_car_booking`
--
ALTER TABLE `travo_car_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travo_contact`
--
ALTER TABLE `travo_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travo_flight_booking_passenger`
--
ALTER TABLE `travo_flight_booking_passenger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travo_hotel_order`
--
ALTER TABLE `travo_hotel_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travo_register`
--
ALTER TABLE `travo_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_travo_car_order`
--
ALTER TABLE `user_travo_car_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_travo_contact`
--
ALTER TABLE `user_travo_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_travo_flight_order`
--
ALTER TABLE `user_travo_flight_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_travo_hotel_order`
--
ALTER TABLE `user_travo_hotel_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_travo_vacation_order`
--
ALTER TABLE `user_travo_vacation_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacation`
--
ALTER TABLE `vacation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacation_booking`
--
ALTER TABLE `vacation_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacation_extras`
--
ALTER TABLE `vacation_extras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacation_order`
--
ALTER TABLE `vacation_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacation_settings`
--
ALTER TABLE `vacation_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `airline`
--
ALTER TABLE `airline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `airport`
--
ALTER TABLE `airport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking_car`
--
ALTER TABLE `booking_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `car_extra`
--
ALTER TABLE `car_extra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `car_settings`
--
ALTER TABLE `car_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `flight_settings`
--
ALTER TABLE `flight_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `flight_slider`
--
ALTER TABLE `flight_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hotel_booking_order`
--
ALTER TABLE `hotel_booking_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hotel_extra`
--
ALTER TABLE `hotel_extra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hotel_settings`
--
ALTER TABLE `hotel_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `travo_car_booking`
--
ALTER TABLE `travo_car_booking`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `travo_contact`
--
ALTER TABLE `travo_contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `travo_flight_booking_passenger`
--
ALTER TABLE `travo_flight_booking_passenger`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `travo_hotel_order`
--
ALTER TABLE `travo_hotel_order`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `travo_register`
--
ALTER TABLE `travo_register`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_travo_car_order`
--
ALTER TABLE `user_travo_car_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_travo_contact`
--
ALTER TABLE `user_travo_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_travo_flight_order`
--
ALTER TABLE `user_travo_flight_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_travo_hotel_order`
--
ALTER TABLE `user_travo_hotel_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_travo_vacation_order`
--
ALTER TABLE `user_travo_vacation_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vacation`
--
ALTER TABLE `vacation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vacation_booking`
--
ALTER TABLE `vacation_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vacation_extras`
--
ALTER TABLE `vacation_extras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vacation_order`
--
ALTER TABLE `vacation_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vacation_settings`
--
ALTER TABLE `vacation_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
