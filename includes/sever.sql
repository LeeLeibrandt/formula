-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 21, 2020 at 12:29 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `formula`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `quantity`, `img`, `date_added`) VALUES
(1, 'TEAM RAIN JACKET', 'Team rain jacket comfort warm ', 500, 1, 'img/h1.png', '2020-07-18 18:16:19'),
(2, 'TEAM BLACK HOODIE', 'Team hoodie made 100% cotton warm comfy.', 450, 1, 'img/h2.png', '2020-07-18 18:18:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Lee Leibrandt', 'leeleibrandt@gmail.com', '$2y$10$Z5HW7kdPGlMzQRKFxHt3V.ztuXjk.4v.9aEGcvshnCN83j5ZPAHaq'),
(2, 'Bobby Boy', 'bobby@gmail.com', '$2y$10$PnCAfoBRFem9.B53h04w9uJoYjGZXqD0fWijqfxaS.EHIR94h1r0q'),
(3, 'john', 'john@gmail.com', '$2y$10$B.B9REIZ89kdQpQlnYsU2eU6Ots0QK1g9LVUig.udsqlyC/Hrtg/C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
