-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 10, 2021 at 04:44 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocs`
--

-- --------------------------------------------------------

--
-- Table structure for table `approved_forms`
--

CREATE TABLE `approved_forms` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `status` enum('approve','disapprove') NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deparments`
--

CREATE TABLE `deparments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dept_chairman_id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deparments`
--

INSERT INTO `deparments` (`id`, `name`, `dept_chairman_id`, `added_by`, `added_on`, `status`, `updated_by`, `updated_on`) VALUES
(1, 'BSEE', 1, 0, '0000-00-00 00:00:00', 1, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `departments_role`
--

CREATE TABLE `departments_role` (
  `id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department_form`
--

CREATE TABLE `department_form` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `status` enum('approve','disapprove') DEFAULT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department_form`
--

INSERT INTO `department_form` (`id`, `user_id`, `dept_id`, `form_id`, `status`, `description`) VALUES
(1, 1, 1, 1, NULL, ''),
(2, 2, 1, 4, 'approve', 'Approved'),
(3, 2, 1, 5, 'approve', 'Approved From Department Chairman'),
(4, 4, 1, 6, 'approve', 'Approved form deparment');

-- --------------------------------------------------------

--
-- Table structure for table `final_form`
--

CREATE TABLE `final_form` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `status` enum('approve','disapprove') DEFAULT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `final_form`
--

INSERT INTO `final_form` (`id`, `user_id`, `dept_id`, `form_id`, `status`, `description`) VALUES
(1, 2, 1, 4, NULL, ''),
(2, 4, 1, 6, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `form_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `form_status` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`form_id`, `dept_id`, `user_id`, `form_status`, `added_by`, `added_on`, `updated_by`, `updated_on`) VALUES
(1, 1, 1, 1, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(5, 1, 2, 1, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(6, 1, 4, 1, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `form_status`
--

CREATE TABLE `form_status` (
  `id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `form_status` enum('approve','cancel') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `status` enum('approve','disapprove') DEFAULT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `form_id`, `user_id`, `dept_id`, `status`, `description`) VALUES
(1, 4, 2, 1, 'approve', 'approved'),
(2, 6, 4, 1, 'approve', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `provost`
--

CREATE TABLE `provost` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `status` enum('approve','disapprove') DEFAULT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provost`
--

INSERT INTO `provost` (`id`, `user_id`, `form_id`, `dept_id`, `status`, `description`) VALUES
(1, 2, 4, 1, 'approve', 'Approved'),
(2, 2, 5, 1, NULL, ''),
(3, 4, 6, 1, 'approve', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `name`) VALUES
(1, 'provost'),
(2, 'admin'),
(4, 'chairman'),
(5, 'library'),
(6, 'sports');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `status` enum('approve','disapprove') DEFAULT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `user_id`, `dept_id`, `form_id`, `status`, `description`) VALUES
(1, 2, 1, 4, 'approve', 'approved'),
(2, 4, 1, 6, 'approve', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `students_form`
--

CREATE TABLE `students_form` (
  `id` int(11) NOT NULL,
  `form_file` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `status` enum('approve','cancel') NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `father_name`, `email`, `user_role_id`, `password`, `username`) VALUES
(1, 'Sikander Ahmad', 'Masood Ahmad', 'sikanderahmad930@gmail.com', 2, '3d186804534370c3c817db0563f0e461', 'sikander'),
(2, 'Rubab', 'Arif Ahmad', 'Rubab@gmail.com', 2, '4297f44b13955235245b2497399d7a93', 'rubab'),
(4, 'Jenny Doe khan', 'JOhn Killer', 'abasc@gmail.com', 1, '4297f44b13955235245b2497399d7a93', 'jenny'),
(5, 'Ahsan khan', 'wali khan', '', 0, 'd41d8cd98f00b204e9800998ecf8427e', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approved_forms`
--
ALTER TABLE `approved_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deparments`
--
ALTER TABLE `deparments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments_role`
--
ALTER TABLE `departments_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_form`
--
ALTER TABLE `department_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `final_form`
--
ALTER TABLE `final_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `form_status`
--
ALTER TABLE `form_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provost`
--
ALTER TABLE `provost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_form`
--
ALTER TABLE `students_form`
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
-- AUTO_INCREMENT for table `approved_forms`
--
ALTER TABLE `approved_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deparments`
--
ALTER TABLE `deparments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments_role`
--
ALTER TABLE `departments_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department_form`
--
ALTER TABLE `department_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `final_form`
--
ALTER TABLE `final_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `form_status`
--
ALTER TABLE `form_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `provost`
--
ALTER TABLE `provost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students_form`
--
ALTER TABLE `students_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
