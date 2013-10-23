-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2013 at 07:11 PM
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
(1, 'Spring Lake', 'Random Description of something', 'img/fp2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Projects`
--

CREATE TABLE `Projects` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `limage` varchar(250) DEFAULT NULL,
  `simage` varchar(250) DEFAULT NULL,
  `ldescription` varchar(1500) DEFAULT NULL,
  `imagealt` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `Projects`
--

INSERT INTO `Projects` (`id`, `pname`, `description`, `limage`, `simage`, `ldescription`, `imagealt`) VALUES
(1, 'Project 1', 'A small game created to show my skills in Adobe Flash.', 'img/portfolio/p1l.jpg', 'img/portfolio/p1s.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n                                 Phasellus purus ante, tristique id nulla vitae, hendrerit varius magna.\n                                 Vestibulum libero eros, congue eget imperdiet vel, bibendum at velit. Nulla laoreet est nulla,\n                                 consequat tristique velit tristique non. In ac sollicitudin justo, eget ornare velit.\n                                 Aliquam scelerisque ligula eget lectus pretium vehicula. Curabitur lacinia a dolor id blandit.\n                                 Fusce ut sapien ligula. Donec venenatis mi tortor, in laoreet nulla volutpat et.\n                                 Quisque vitae posuere nunc. Nullam condimentum neque vel mattis tempus.\n                                 Cras cursus lacus in massa iaculis hendrerit et faucibus nisl. Duis libero orci,\n                                 faucibus et nibh non, consequat adipiscing lectus. Lorem ipsum dolor sit amet,\n                                 consectetur adipiscing elit. ', 'Image of a flash based game'),
(2, 'Project 2', 'An application I created using a movie database API. You can search for movies and get info.', 'img/portfolio/p2l.jpg', 'img/portfolio/p2s.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n                                 Phasellus purus ante, tristique id nulla vitae, hendrerit varius magna.\n                                 Vestibulum libero eros, congue eget imperdiet vel, bibendum at velit. Nulla laoreet est nulla,\n                                 consequat tristique velit tristique non. In ac sollicitudin justo, eget ornare velit.\n                                 Aliquam scelerisque ligula eget lectus pretium vehicula. Curabitur lacinia a dolor id blandit.\n                                 Fusce ut sapien ligula. Donec venenatis mi tortor, in laoreet nulla volutpat et.\n                                 Quisque vitae posuere nunc. Nullam condimentum neque vel mattis tempus.\n                                 Cras cursus lacus in massa iaculis hendrerit et faucibus nisl. Duis libero orci,\n                                 faucibus et nibh non, consequat adipiscing lectus. Lorem ipsum dolor sit amet,\n                                 consectetur adipiscing elit. ', 'Image of MediaZSearch application');
