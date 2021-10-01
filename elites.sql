-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 08:02 PM
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
-- Database: `elites`
--

-- --------------------------------------------------------

--
-- Table structure for table `cantact`
--

CREATE TABLE `cantact` (
  `email` varchar(255) NOT NULL,
  `query_type` varchar(255) NOT NULL,
  `member` varchar(255) NOT NULL,
  `concern` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cantact`
--

INSERT INTO `cantact` (`email`, `query_type`, `member`, `concern`, `id`) VALUES
('some@gmail.com', 'web', '', 'dfgdg', 1),
('dgdfg@gmail.com', 'Web', '', '', 2),
('sfdkfgdkhgdkkgfjh@gmail.com', 'Web', '', '', 3),
('test1@gmail.com', 'Web', '', '', 4),
('test2@gmail.com', 'Web', '', '', 5),
('test4@gmail.com', 'Web', '', '', 6),
('test5@gmail.com', 'Web', 'yes', '', 7),
('some@gmail.com', 'web', 'yes', 'dgghdfgf', 8),
('test100@gmail.com', 'Web', 'yes', '', 9),
('test101@gmail.com', 'Web', 'yes', 'this is test 101', 10),
('tets102@gmail.com', 'Web', 'on', 'ok', 11),
('ok@gmail.com', 'Web', 'on', 'sfsf', 12),
('test300@gmail.com', 'Web', '', 'ok', 13),
('tets3001@gmail.com', 'Tech', 'no', 'ok', 14),
('test3002@gmail.com', 'Code', '', 'ok', 15),
('50@gmail.com', 'Web', 'no', 'ok', 16),
('51@gmail.com', 'Web', '', 'ok', 17),
('53@gmail.com', 'Tech', 'yes', 'ok', 18),
('thor83033@gmail.com', 'other', 'no', 'ok', 19);

-- --------------------------------------------------------

--
-- Table structure for table `categorier`
--

CREATE TABLE `categorier` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `categories_desc` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorier`
--

INSERT INTO `categorier` (`categories_id`, `categories_name`, `categories_desc`, `time`) VALUES
(1, 'JAVA', 'Java is a class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.', '0000-00-00 00:00:00'),
(2, 'PYTHON', 'Python is an interpreted, high-level and general-purpose programming language. Python\'s design philosophy emphasizes code readability with its notable use of significant whitespace.', '0000-00-00 00:00:00'),
(3, 'C LANGUAGE', 'C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, with a static type system. By design, C provides constructs that map efficiently to typical machine instructions', '0000-00-00 00:00:00'),
(4, 'FLASK', 'Flask is a micro web framework written in Python. It is classified as a microframework because it does not require particular tools or libraries. It has no database abstraction layer, form validation, or any other components where pre-existing third-party libraries provide common functions.', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `thread_id` int(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_by` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `comment_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`thread_id`, `comment`, `comment_by`, `time`, `comment_id`) VALUES
(9, 'First, your Scanner call will tokenize by whitespace as is. You could call Scanner.next() twice like', 'sumit@gmail.com', '2020-12-17 22:51:14', 8),
(9, 'Use sc.nextLine() instaed of sc.next(). next() can read the input only till the space', 'div@gmail.com', '2020-12-17 22:53:07', 9),
(10, ' unable to find what exactly causing this failure inside docker container. Could you please guide me what are the things I should try out with docker container to resolve or identify the cause of the issue?', 'hulk@gmail.com', '2020-12-17 22:56:34', 10),
(9, 'Use sc.nextLine() instaed of sc.next(). next() can read the input only till the space', 'hulk@gmail.com', '2020-12-17 22:57:48', 11);

-- --------------------------------------------------------

--
-- Table structure for table `eliteuser`
--

CREATE TABLE `eliteuser` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eliteuser`
--

INSERT INTO `eliteuser` (`user_id`, `email`, `pass`, `time`) VALUES
(1, 'thor83033@gmail.com', '$2y$10$Yf0.nVXqCAFR/pYM.DeHWePWW3m1HjqcQ0UZDmuNmH4cQYm72awey', '2020-11-08 07:28:00'),
(2, 'sumit@gmail.com', '$2y$10$Uv246rRUu5SlJZF146gLOuNQCYX0n2GMByV9vV2etjU5IkF9ZkkR2', '2020-12-17 07:57:56'),
(3, 'div@gmail.com', '$2y$10$dGLrzokHx3hMz54cDKx2meIVXiEmLNFKTUH9FmcDOtHp8vyHSx82K', '2020-12-17 22:52:53'),
(4, 'hulk@gmail.com', '$2y$10$FPbdLwnZxmcnT4t3OYMykOdsupKe2onyKpPoPKEBMFVLyZP4dWwjq', '2020-12-17 22:54:43');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_title` varchar(255) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int(255) NOT NULL,
  `thread_user_id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `thread_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `time`, `thread_id`) VALUES
('Exception in thread ”main“” error thrown when printing second word of a user input string', 'trying to print the second word of a user input string in Java. However, when running the code, I keep getting an Exception in thread \"main\" error.', 1, 2, '2020-12-17 22:50:23', 9),
('Build fails with proguard obfuscation inside docker container', 'If I run a build with proguard obfuscation inside docker container, it fails with an error -', 1, 3, '2020-12-17 22:53:54', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cantact`
--
ALTER TABLE `cantact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorier`
--
ALTER TABLE `categorier`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `eliteuser`
--
ALTER TABLE `eliteuser`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);
ALTER TABLE `threads` ADD FULLTEXT KEY `thread_title` (`thread_title`,`thread_desc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cantact`
--
ALTER TABLE `cantact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categorier`
--
ALTER TABLE `categorier`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `eliteuser`
--
ALTER TABLE `eliteuser`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
