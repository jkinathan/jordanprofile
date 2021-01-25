-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 23, 2021 at 01:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `author` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `photo`, `author`, `description`, `is_deleted`) VALUES
(1, 'Flutter in Action', 'flutter.png', 'Eric Windmill', 'Flutter in action teaches you how to build mobile cross platform applications', 0),
(2, 'Django3 by Example', 'django.jpg', 'Antonio Mele', 'Build Powerful and reliable Python web Applications from scratch', 0),
(3, 'React', 'react.jpg', 'Lionel Lopez', 'Quickstart Step-By_step Guide to learning React Javascript Library', 0),
(4, 'JumpStart Vue.js', 'vue.png', 'Nilson Jacques', 'Build your own sophisticated web applications using vue.js', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`firstname`, `lastname`, `country`, `message`, `is_deleted`) VALUES
('jordan', 'kinobe', 'Uganda', 'Testing', 0),
('fefee', 'hvjk', 'Rwanda', 'hvhjvhbhk', 0),
('Testname', 'secondName', 'Rwanda', 'I am here by testing my contact us page sending data successfully to the database', 0),
('hg', 'hj', 'Rwanda', 'ggjhghj', 0);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `about` varchar(250) NOT NULL,
  `course` varchar(100) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `year` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `photo` varchar(180) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `about`, `course`, `institution`, `year`, `address`, `photo`, `is_deleted`) VALUES
(1, 'Experienced junior developer with a demonstrated history of working in the computer software industry.', 'Bachelor of Science in Computer Science', 'Uganda Christian University', 'Second year first semester.', 'Entebbe, Kiwafu close', 'profile.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `name`, `description`, `url`, `is_deleted`) VALUES
(1, 'project1.png', 'Tubayo', 'Tours and Travel company', 'https://tubayo.com/', 0),
(2, 'project2.png', 'Solar Movie App', 'Movie application', 'https://solarmovies.com', 0),
(3, 'project3.png', 'United Diesel', 'Hardware web application', 'bhumphrey.pythonanywhere.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
