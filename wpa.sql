-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2017 at 04:14 နံနက်
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `photo1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `upload` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `price`, `photo1`, `photo2`, `photo3`, `user_id`, `upload`) VALUES
(7, 'Web Design', 'HTML, CSS, jQury', 10000, '1.jpg', '2.jpg', '3.jpg', 3, '3'),
(8, 'Web Development', 'PHP, jQuery, Ajax', 12000, 'boo2.jpeg', 'book1.jpeg', '', 3, '2'),
(9, 'PHP Development', 'PHP Basic, Advanced', 10000, 'book3.jpeg', 'images.jpeg', 'images.png', 7, '3'),
(10, 'Laravel', 'Laravel Framework', 10000, '5.jpg', '', '', 7, '1'),
(11, 'mySQL', 'Database ', 500, 'boo2.jpeg', 'images.png', '', 7, '2'),
(12, 'Cake', 'PHP Framework', 10000, 'boo2.jpeg', '', '', 8, '1'),
(13, 'Cake', 'PHP Framework', 10000, 'boo2.jpeg', '', '', 8, '1'),
(14, 'Professional Web Developer', 'HTML, CSS, JavaScript, jQuery, PHP', 10000, '4.jpg', '', '', 12, '1'),
(15, 'dfd', 'dfd', 0, '1.jpg', '2.jpg', '3.jpg', 13, '3'),
(16, 'dfd', 'dfd', 0, '4.jpg', '5.jpg', 'Screenshot from 2017-10-21 12-11-10.png', 13, '3'),
(17, 'df', 'dfd', 10000, '1.jpg', '2.jpg', 'Screenshot from 2017-10-21 12-11-10.png', 13, '3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `phone`, `address`, `password`) VALUES
(3, 'win', 'win@gmail.com', '12345', 'dddddddddd', '123'),
(7, 'nandar', 'nandar@gmail.com', '0998765', 'Toungoo', '123'),
(8, 'khin', 'khin@gmail.com', '3456', 'Bago', '123'),
(9, 'win', 'winwin@gmail.com', '12323', 'Toungoo', '123'),
(10, 'admin', '', '', '', '98754'),
(11, 'Nandar', 'nandar@gmail.com', '234545', 'Toungoo', '123'),
(12, 'Win Nandar Khin', 'winnandarkhin@gmail.com', '09973581645', '20/772, Toungoo, Bago', '12345'),
(13, 'win', 'win@gmail.com', '12345', 'toungoo', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
