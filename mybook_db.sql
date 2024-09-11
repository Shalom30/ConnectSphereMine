-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2024 at 04:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybook_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `contentid` bigint(20) NOT NULL,
  `likes` text NOT NULL,
  `following` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `type`, `contentid`, `likes`, `following`) VALUES
(1, 'user', 5256108158865, '[]', '[]'),
(2, 'user', 1707, '', '[]'),
(3, 'user', 123564510774149447, '[]', ''),
(4, 'user', 7126, '', '[]'),
(5, 'post', 7467208, '[{\"userid\":\"7126\",\"date\":\"2024-08-28 23:15:44\"}]', ''),
(6, 'user', 669311469326593, '', '[]'),
(7, 'post', 125782164049, '[{\"userid\":\"669311469326593\",\"date\":\"2024-08-28 23:24:33\"}]', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(19) NOT NULL,
  `postid` bigint(19) NOT NULL,
  `comments` int(11) NOT NULL,
  `userid` bigint(19) NOT NULL,
  `post` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `likes` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `has_image` tinyint(1) NOT NULL,
  `is_profile_image` tinyint(1) NOT NULL,
  `is_cover_image` tinyint(1) NOT NULL,
  `parent` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `postid`, `comments`, `userid`, `post`, `image`, `likes`, `date`, `has_image`, `is_profile_image`, `is_cover_image`, `parent`) VALUES
(9, 880741, 0, 5256108158865, 'now let me try posting with an image', 'uploads/5256108158865/xqoFu0VhrDg1zCL.jpg', 0, '2024-08-24 02:23:04', 1, 0, 0, 0),
(10, 130969750100082533, 0, 5256108158865, 'thank God is working some more', '', 0, '2024-08-27 13:53:26', 0, 0, 0, 0),
(11, 7029, 0, 5256108158865, '', 'uploads/5256108158865/3pURJiwMVP1nvZB.jpg', 0, '2024-08-27 14:46:47', 1, 1, 0, 0),
(13, 7467208, 0, 5256108158865, '', 'uploads/5256108158865/7ku204MeQ55GWaa.jpg', 1, '2024-08-28 21:16:28', 1, 0, 1, 0),
(17, 4946808470, 0, 1707, 'my name is ruth', '', 0, '2024-08-24 02:28:01', 0, 0, 0, 0),
(26, 82632083459346, 0, 5256108158865, 'MY OTHER COMMENTS TRY', '', 0, '2024-08-27 10:37:48', 0, 0, 0, 7467208),
(27, 38164338606, 0, 5256108158865, 'second comment', '', 0, '2024-08-27 10:48:05', 0, 0, 0, 7467208),
(28, 1973961114202257036, 0, 5256108158865, 'third post', '', 0, '2024-08-27 10:48:33', 0, 0, 0, 7467208),
(29, 30910561023, 0, 5256108158865, 'last try', '', 0, '2024-08-27 10:49:13', 0, 0, 0, 7467208),
(33, 8030351, 0, 123564510774149447, 'hello guy my name is John', '', 0, '2024-08-27 12:24:30', 0, 0, 0, 0),
(37, 7787162466, 0, 123564510774149447, 'i love nature', 'uploads/123564510774149447/MQk0jQFqk8jWXf.jpg', 0, '2024-08-27 13:11:18', 1, 0, 0, 0),
(39, 47860013, 0, 123564510774149447, '', 'uploads/123564510774149447/BbxSS6tMOBFbd0.jpg', 0, '2024-08-27 12:25:09', 1, 1, 0, 0),
(40, 268291168203561, 0, 123564510774149447, '', 'uploads/123564510774149447/F6On378OT64vOC.jpg', 0, '2024-08-27 12:40:10', 1, 0, 1, 0),
(41, 33700, 0, 14628025, 'hello pipo', '', 0, '2024-08-27 13:40:51', 0, 0, 0, 0),
(44, 1539, 0, 7126, 'hello my name is Jannet', '', 0, '2024-08-28 21:09:52', 0, 0, 0, 0),
(45, 79268229746877117, 0, 7126, 'this is a mountain', 'uploads/7126/aUTYY3yhJXT9KiR.jpg', 0, '2024-08-28 21:12:08', 1, 0, 0, 0),
(46, 677760831650409, 0, 7126, '', 'uploads/7126/Honf1uJrKZwuVdh.jpg', 0, '2024-08-28 21:12:53', 1, 1, 0, 0),
(47, 8361286, 0, 7126, '', 'uploads/7126/Jz9ucXxJ64P5IKw.jpg', 0, '2024-08-28 21:13:18', 1, 0, 1, 0),
(50, 27680723165502, 0, 669311469326593, '', 'uploads/669311469326593/MvPA3Yo9k1CZOv.jpg', 0, '2024-08-28 21:22:14', 1, 1, 0, 0),
(51, 99459590675025690, 0, 669311469326593, '', 'uploads/669311469326593/2WbdAHyggmgL5Vx.jpg', 0, '2024-08-28 21:22:25', 1, 0, 1, 0),
(52, 2871366, 0, 669311469326593, 'this is a comment', '', 0, '2024-08-28 21:24:11', 0, 0, 0, 125782164049),
(53, 725131, 0, 669311469326593, '', 'uploads/669311469326593/Jhpoe7s2v2qA66R.jpg', 0, '2024-09-04 02:27:18', 1, 1, 0, 0),
(54, 457275672698673993, 0, 669311469326593, '', 'uploads/669311469326593/ID2SOTlA1DB2vf.jpg', 0, '2024-09-04 02:27:44', 1, 1, 0, 0),
(55, 998419726395507310, 0, 669311469326593, '', 'uploads/669311469326593/gsUNgJMH9A9h7QR.jpg', 0, '2024-09-04 02:28:04', 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(19) NOT NULL,
  `userid` bigint(19) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `url_address` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `profile_image` varchar(1000) NOT NULL,
  `cover_image` varchar(1000) NOT NULL,
  `likes` int(11) NOT NULL,
  `about` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userid`, `first_name`, `last_name`, `gender`, `email`, `password`, `url_address`, `date`, `profile_image`, `cover_image`, `likes`, `about`) VALUES
(1, 5256108158865, 'Shalom', 'Wepngong', 'Male', 'shalomwepngong@gmail.com', 'b335d50551bb20cfb0c784617ebe1e9eb7931a0d', 'shalom.wepngong', '2024-09-04 02:14:36', 'uploads/5256108158865/3pURJiwMVP1nvZB.jpg', 'uploads/5256108158865/7ku204MeQ55GWaa.jpg', 0, 'Hey there! my name is Shalom'),
(2, 1707, 'Wepngong', 'Ruth', 'Female', 'wepngongruth@gmail.com', 'b69f673cb3a23c41a5673e788cdfbc767a959e52', 'wepngong.ruth', '2024-08-27 14:46:13', '', '', 0, 'hey my name is ruth!'),
(3, 123564510774149447, 'John', 'Paul', 'Male', 'johnpaul@gmail.com', 'a51dda7c7ff50b61eaea0444371f4a6a9301e501', 'john.paul', '2024-09-04 02:33:19', 'uploads/123564510774149447/BbxSS6tMOBFbd0.jpg', 'uploads/123564510774149447/F6On378OT64vOC.jpg', 0, 'Hello Guy my name is John paul!!\r\nHey there i am using my app'),
(4, 14628025, 'Elizabeth', 'Wepngong', 'Female', 'wepngongelizabeth@gmail.com', '3ca62a2ad87376be2697209a1770e1afdbbba220', 'elizabeth.wepngong', '2024-08-27 13:41:06', '', '', 0, ''),
(5, 7126, 'Wepngong', 'Jannet', 'Female', 'jannetwepngong@gmail.com', '3469c63eff97aceafa1d4a024e31363587a38b99', 'wepngong.jannet', '2024-08-28 21:13:18', 'uploads/7126/Honf1uJrKZwuVdh.jpg', 'uploads/7126/Jz9ucXxJ64P5IKw.jpg', 0, 'Hey! there i am using watzapp'),
(6, 669311469326593, 'Samuel', 'Wepngong', 'Male', 'sammuelwepngong@gmail.com', '82d4fc9ccdf93583454f1799e20d9c6e30954b2d', 'sammuel.wepngong', '2024-09-04 02:28:04', 'uploads/669311469326593/ID2SOTlA1DB2vf.jpg', 'uploads/669311469326593/gsUNgJMH9A9h7QR.jpg', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contentid` (`contentid`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postid` (`postid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `likes` (`likes`),
  ADD KEY `date` (`date`),
  ADD KEY `has_image` (`has_image`),
  ADD KEY `is_profile_image` (`is_profile_image`),
  ADD KEY `is_cover_image` (`is_cover_image`),
  ADD KEY `post` (`post`(768)),
  ADD KEY `comments` (`comments`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `first_name` (`first_name`),
  ADD KEY `last_name` (`last_name`),
  ADD KEY `gender` (`gender`),
  ADD KEY `email` (`email`),
  ADD KEY `url_address` (`url_address`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
