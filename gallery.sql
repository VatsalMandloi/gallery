-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 12:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `date`, `name`, `email`, `message`) VALUES
(11, '2021-03-25 13:45:09', 'Vatsal Mandloi', 'vatsalmandloi297@gmail.com', 'test1'),
(12, '2021-03-26 08:14:20', 'vatsal mandloi', 'vatsalmandloi247@gmail.com', 'hiii');

-- --------------------------------------------------------

--
-- Table structure for table `pic`
--

CREATE TABLE `pic` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pic`
--

INSERT INTO `pic` (`id`, `image`, `category`) VALUES
(1, '/gallery/img/a.jpg', 'red'),
(2, '/gallery/img/b.jpg', 'yellow'),
(3, '/gallery/img/c.jpg', 'red'),
(4, '/gallery/img/d.jpg', 'orange'),
(5, '/gallery/img/e.jpg', 'red'),
(6, '/gallery/img/f.jpg', 'yellow'),
(7, '/gallery/img/g.jpg', 'orange'),
(8, '/gallery/img/h.jpg', 'orange'),
(9, '/gallery/img/i.jpg', 'yellow'),
(10, '/gallery/img/j.jpg', 'red'),
(11, '/gallery/img/k.jpg', 'orange'),
(12, '/gallery/img/l.jpg', 'red');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`) VALUES
(8, 'vatsal mandloi', 'vatsalmandloi247@gmail.com', '550e1bafe077ff0b0b67f4e32f29d751', '9165071129', 'machalpur'),
(10, 'Vatsal Mandloi', 'vatsalmandloi@gmail.com', '70873e8580c9900986939611618d7b1e', '1234567890', 'dfgfdgss'),
(11, 'Vatsal Mandloi', 'vatsal@gmail.com', '550e1bafe077ff0b0b67f4e32f29d751', '1234567890', 'cdscsaf'),
(12, 'vatsal', 'v@gmail.com', '550e1bafe077ff0b0b67f4e32f29d751', '1111111111', 'zirapur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pic`
--
ALTER TABLE `pic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pic`
--
ALTER TABLE `pic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
