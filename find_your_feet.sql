-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 14, 2016 at 08:52 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `find_your_feet`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyID` int(11) NOT NULL,
  `companyTitle` varchar(255) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `companyDescription` text NOT NULL,
  `companyLinks` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyID`, `companyTitle`, `img_name`, `img_path`, `companyDescription`, `companyLinks`, `created_date`) VALUES
(1, 'Fountain Art', 'Fountain_Art.png', 'img/', 'Fountain Art is an accepted company employing over sixty people, and has a branches in most Australian', 'http://www.findyourfeet.com/fountainart.html', '2016-08-30 04:41:29'),
(2, 'Valley View', 'Valley_View.png', 'img/', 'You should access to computer that meets or exceeds the following specifications please read to find more', 'http://www.findyourfeet.com/bsbhrm402a/home.htm', '2016-08-30 04:34:36'),
(3, 'Star Industries', 'Star_Industries.png', 'img/', 'STAR products will be the first choice for buyers, designers and architects building a high quality homes', 'http://www.findyourfeet.com/star/', '2016-08-30 04:26:26'),
(4, 'Bushland Blooms', 'Bushland_Blooms.png', 'img/', 'Welcome to Bushland Blooms Intranet. The information on this Intranet will help you carry out your work', 'http://www.findyourfeet.com/bushland/intranet/', '2016-08-28 06:45:55'),
(5, 'Accove Pty Ltd', 'Accove_Pty_Ltd.png', 'img/', 'Accove is committed to the plan for the OH&S Act 2009 and associated health', 'http://www.findyourfeet.com/Accove/', '2016-08-30 04:15:14'),
(6, 'Arachnoid Web Services', 'Arachnoid_Web_Services.png', 'img/', 'You can find out about how to use this Toolbox by clicking on the About this Toolbox', 'http://www.findyourfeet.com/Arachnoid/shared_files/enter.html', '2016-08-28 06:46:02'),
(7, 'CoffeeVille', 'CoffeeVille.png', 'img/', 'We only serve certified fair trade coffee, and we strive to locally source organic ingredients and products', 'http://simulations.ibsa.org.au/coffeeville/', '2016-08-28 06:46:05'),
(8, 'Australian Hardware', 'Australian_Hardware.png', 'img/', 'Australian Hardware provides a wide range of products at competitive prices for the purpose of home improvement', 'http://simulations.ibsa.org.au/australian_hardware/', '2016-08-28 06:46:07'),
(9, 'Useful E.g. of workplace documents', 'More_useful_examp_es_of_workplace_documents.png', 'img/', 'Useful examples of workplace documents, Courier Consignment Note, Purchase Order, Tax Invoice etc.', 'http://www.findyourfeet.com/moredocs.html', '2016-08-30 03:59:38'),
(10, 'Training Videos', 'Training_Videos.png', 'img/', 'Check out Typing Skills, Customer Service, Occupational Health & Safety Phone Skills etc.', 'http://www.findyourfeet.com/videos/', '2016-08-30 03:17:38'),
(11, 'WHS Templates', 'WHS_Templates.png', 'img/', 'check out Action Plan, Change Implications Matrix, Communication Log, Emergency Situations Register etc.', 'http://www.findyourfeet.com/whs/', '2016-08-28 06:46:14'),
(12, 'Human Resources Templates', 'Human_Resources_Templates.png', 'img/', 'Useful Human Resources Templates Letter of first or second warning template, Exit Interview Template etc.', 'http://www.findyourfeet.com/hrm/', '2016-08-28 06:46:17'),
(13, 'www.thedesk.org.au', 'www.thedesk.org.au.png', 'img/', 'Thedesk aims to support Australian tertiary students to achieve mental and physical health and wellbeing ', 'https://www.thedesk.org.au/', '2016-08-28 06:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `fullName`, `email`, `password`, `created_date`) VALUES
(4, 'Kewal', 'kewal@me.com', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00'),
(7, 'John', 'john@me.com', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;