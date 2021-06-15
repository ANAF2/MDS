-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 08:44 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobId` int(11) NOT NULL,
  `employer` varchar(45) NOT NULL,
  `job_title` varchar(45) NOT NULL,
  `description` varchar(500) NOT NULL,
  `skills` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobId`, `employer`, `job_title`, `description`, `skills`) VALUES
(1, 'Microsoft', 'dev', 'Hello.', 'c++; python; java; node.js'),
(3, 'Zoom', 'dev', 'Descriere', 'java; haskell; teamwork'),
(6, 'Tremend', 'Tehnical supprt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'HTML; Haskell; Linux; GIT'),
(7, 'Twitter', 'Software engineer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'Java; Python; SQL; Linux; GIT'),
(8, 'Uber', 'Web developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'PHP; HTML; SQL; NodeJS; GIT; CSS'),
(9, 'Oracle', 'Tehnical supprt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'HTML; Haskell; Linux; GIT'),
(10, 'Google', 'Java developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'Java; SQL; Linux; GIT'),
(11, 'Oracle', 'Python developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'Python; SQL; Linux; GIT'),
(12, 'Tremend', 'Web developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'PHP; HTML; SQL; NodeJS; GIT; CSS'),
(13, 'Google', 'Software engineer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'Java; Python; SQL; Linux; GIT'),
(14, 'Adobe', 'Front-end engineer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'PHP; HTML; SQL; NodeJS; GIT; CSS'),
(15, 'Twitter', 'SQL database developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'SQL; NodeJS; Linux; GIT'),
(16, 'HP', 'Web developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'PHP; HTML; SQL; NodeJS; GIT; CSS'),
(17, 'HP', 'SQL database developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'SQL; NodeJS; Linux; GIT'),
(18, 'Tremend', 'Tehnical supprt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'HTML; Haskell; Linux; GIT'),
(19, 'HP', 'Web developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'PHP; HTML; SQL; NodeJS; GIT; CSS'),
(20, 'Tremend', 'SQL database developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'SQL; NodeJS; Linux; GIT'),
(21, 'HP', 'Python developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'Python; SQL; Linux; GIT'),
(22, 'Amazon', 'Web developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'PHP; HTML; SQL; NodeJS; GIT; CSS'),
(23, 'Facebook', 'Java developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'Java; SQL; Linux; GIT'),
(24, 'Tremend', 'SQL database developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'SQL; NodeJS; Linux; GIT'),
(25, 'Uber', 'Software engineer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'Java; Python; SQL; Linux; GIT'),
(26, 'Oracle', 'Front-end engineer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'PHP; HTML; SQL; NodeJS; GIT; CSS'),
(27, 'Uber', 'Web developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'PHP; HTML; SQL; NodeJS; GIT; CSS'),
(28, 'Amazon', 'Web developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'PHP; HTML; SQL; NodeJS; GIT; CSS'),
(29, 'Google', 'Front-end engineer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'PHP; HTML; SQL; NodeJS; GIT; CSS'),
(30, 'Google', 'Tehnical supprt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'HTML; Haskell; Linux; GIT'),
(31, 'Facebook', 'Tehnical supprt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'HTML; Haskell; Linux; GIT'),
(32, 'Amazon', 'Tehnical supprt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'HTML; Haskell; Linux; GIT'),
(33, 'Oracle', 'Software engineer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'Java; Python; SQL; Linux; GIT'),
(34, 'HP', 'Front-end engineer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'PHP; HTML; SQL; NodeJS; GIT; CSS'),
(35, 'Twitter', 'Python developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'Python; SQL; Linux; GIT'),
(36, 'Oracle', 'Web developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum posuere nisl vel faucibus. Curabitur sit amet dui ac elit dignissim scelerisque sodales sed ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dapibus eros. Nulla placerat neque faucibus, pulvinar orci eu, pellentesque libero. Praesent pulvinar laoreet lacus, ut vulputate urna placerat id. Nunc sollicitudin fermentum mauris tempor finibus. Sed et congue felis. Ut leo nulla, condimentum nec placera', 'PHP; HTML; SQL; NodeJS; GIT; CSS');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userRole` varchar(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `username`, `password`, `userRole`, `firstname`, `lastname`, `email`, `phone_number`, `path`) VALUES
(1, 'mihai', '$2y$10$YdHVrIMvo9K140V.aVGFJeox.Pq1fZXDU/3f/P6/JhjLkRPCqsqOK', '', 'Mihai', 'Radulescu', 'mihai@mail.ro', '0123456789', '1_Radulescu_Mihai_bPw3t.json'),
(2, 'test', '$2y$10$VbZMa.w5wrH1zyGzyx1YselwIcPWYG1FPapNSwWFgAWOPr8o18IBu', '', 'First', 'Last', 'test@mail.com', '123654789', '2_Last_First_n6mWi.json'),
(3, 'nanu', '$2y$10$HHRmsVenGt/S5inw8FFhKuNGCwQWHTl9HHfNAjzj281frGaXTs3pe', '', 'Robert', 'Nanu', 'mail@mail.com', '123456789', '3_Nanu_Robert_cqtDU.json');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
