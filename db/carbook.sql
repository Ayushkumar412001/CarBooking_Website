-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3325
-- Generation Time: Aug 19, 2022 at 05:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinfo`
--

CREATE TABLE `bookinfo` (
  `sno` int(11) NOT NULL,
  `car_id` int(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `pnumber` varchar(12) NOT NULL,
  `p_location` varchar(200) NOT NULL,
  `d_location` varchar(200) NOT NULL,
  `p_date` date NOT NULL,
  `d_date` date NOT NULL,
  `p_time` time NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookinfo`
--

INSERT INTO `bookinfo` (`sno`, `car_id`, `user_name`, `pnumber`, `p_location`, `d_location`, `p_date`, `d_date`, `p_time`, `time`) VALUES
(1, 6, 'ayush', '9876543210', 'abc', 'abc', '2022-07-17', '2022-07-18', '12:00:00', '2022-07-16 17:15:10'),
(2, 6, 'ayush', '9876543210', 'abc', 'abc', '2022-07-17', '2022-07-18', '12:00:00', '2022-07-16 17:16:17'),
(3, 6, 'ayush', '9876543210', 'abc', 'abc', '2022-07-17', '2022-07-18', '12:00:00', '2022-07-16 17:17:55'),
(4, 6, 'ayush', '9876543210', 'abc', 'abc', '2022-07-17', '2022-07-18', '12:00:00', '2022-07-16 17:18:20'),
(5, 6, 'ayush', '9876543210', 'abc', 'abc', '2022-07-17', '2022-07-18', '12:00:00', '2022-07-16 17:18:48');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sno` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(80) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `name`, `email`, `subject`, `message`, `time`) VALUES
(1, 'Ayush Kumar', 'ayushkumar412001@gmail.com', 'hello', 'hoooi\r\n', '2022-02-07 04:04:01'),
(2, 'Ayush Kumar', 'ayushkumar412001@gmail.com', 'hello', 'abcd', '2022-02-22 13:55:12'),
(3, 'Ayush Kumar', 'ayushkumar412001@gmail.com', '12', '12', '2022-07-16 10:14:50'),
(4, 'Ayush Kumar', 'ayushkumar412001@gmail.com', '111111111111111111111111111111', '2222222222222222222', '2022-07-16 10:15:15'),
(5, 'akash', 'ayushkumar412001@gmail.com', 'qwe', 'qweqwe', '2022-07-16 10:16:01'),
(6, 'Ayush Kumar', 'ayushkumar412001@gmail.com', 'abcd', '12', '2022-07-16 11:03:54'),
(7, 'Ayush Kumar', 'ayushkumar412001@gmail.com', '123', '123', '2022-07-17 12:40:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(500) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `user_name`, `user_email`, `user_pass`, `timestamp`) VALUES
(1, 'Ayush Kumar', 'ayush8987408380@gmail.com', '$2y$10$4woKLFnPHAEo/IgDL8J43e4jbDYWrf9cVwlJBVTFuk8sm3dBPr9ei', '2021-12-03 18:23:08'),
(2, 'reshu', 'ayushkumar412001@gmail.com', '$2y$10$UQYyQzww1kfnnJ30V./oN.no6CCG5EMX/rl5D2F.qxci/RVI3PLEi', '2021-12-03 18:27:50'),
(3, 'Aman', 'aman34@gmail.com', '$2y$10$UbG7jPTuCQeSflIMjzvNJ.RztSH0DxZ/9h1pYyb4omnQ1On0eW28q', '2021-12-04 17:36:00'),
(4, 'Sneha', 'snehasharma@gmail.com', '$2y$10$WiPL7ca15odm1sT4xyz/nerZ1JVlhylNdgmHuC8Vk4HS4tDW/IV3C', '2021-12-05 11:19:57'),
(5, 'abcd', 'abcd@gmail.com', '$2y$10$AlqApbVlbEzFxB9/xZPqP.h/swfB5Ssr2dMm.ximFNSXRno/wTIoS', '2022-03-13 13:32:46'),
(6, 'asdasdaasd', 'akjhsdka@kajhs.com', '$2y$10$V2ftBNLeziey4zYPVJq9ruD78p47eLBKS.NCIzarjcXL8Og.NkZXG', '2022-03-13 14:05:00'),
(7, '123123123', 'asdh@kahskjd.com', '$2y$10$vvkFmmGiatMfqKlZwfv4u.fSDHpljPXaBXvjXxIlkv0hhVKYvw8oe', '2022-03-13 14:06:16'),
(8, 'Ayush', 'AAAA@gmail.com', '$2y$10$zO1wh21W3HeS733RqF0tG.T1T.gxZOYDpObFYwpH6x7FHKqqZ.Sqm', '2022-07-16 15:07:51'),
(9, 'Nitesh', 'Nitesh@gmail.com', '$2y$10$WqYZ//1gtgHjHHJGoHQSdOh2tOnJffw8e/fmwXhgDldrjy9YPc/1O', '2022-07-16 15:24:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinfo`
--
ALTER TABLE `bookinfo`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinfo`
--
ALTER TABLE `bookinfo`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
