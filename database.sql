-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 17, 2013 at 11:06 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `chrisnolandspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `FeaturedProject`
--

CREATE TABLE `FeaturedProject` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `fp` varchar(100) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `FeaturedProject`
--

INSERT INTO `FeaturedProject` (`id`, `pname`, `description`, `fp`) VALUES
(1, 'Eclipse', 'This project was an assignment for a course over javascript at <strong>Full Sail University</strong>. In it I had to take a pre-made store page and add it’s functionality, this included: adding items to the cart by dragging them, being able to add to the quantity of the item, deleting items one by one, and finally adding a way to clear the entire cart. This was the final project in the javascript course.', 'img/fp1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Projects`
--

CREATE TABLE `Projects` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pname` varchar(30) DEFAULT NULL,
  `description` int(50) DEFAULT NULL,
  `limage` int(100) DEFAULT NULL,
  `simage` int(100) DEFAULT NULL,
  `ldescription` int(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
