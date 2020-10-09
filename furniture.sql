-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 10:26 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(2, 'Beds'),
(4, 'Sofas'),
(5, 'Wardrobes'),
(7, 'Table');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `enquiry_id` int(11) NOT NULL,
  `enquiry_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enquiry_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enquiry_telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enquiry_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enquiry_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Not Reviewed',
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`enquiry_id`, `enquiry_name`, `enquiry_address`, `enquiry_telephone`, `enquiry_description`, `enquiry_status`, `user_id`) VALUES
(1, 'Aayush', 'Chitwan', '9852234567', 'Hello, I\'d like to know if there is any tables in stock', 'Completed', 1),
(2, 'Salon', 'Pokhara', '9876544332', 'I\'d like to talk with you for business', 'Completed', 2),
(3, 'David James', 'Northampton', '9877233456', 'Great website!', 'Completed', 1),
(4, 'Bindu Khanal', 'Mustang', '011445678', 'Great functionality!', 'Completed', 1),
(5, 'Ashma Ojha', 'Pokhara', '1234445', 'They last long!', 'Completed', 2),
(6, 'Subesh Thapa', 'KAlankki', '9877656541', 'I need furniture worth only $399', 'Completed', 1),
(12, 'Sonam', 'Sakya', '123456789', 'Great', 'Completed', 1),
(13, 'Aayush Moktan', 'chitwan', '9877655443', 'Great collections!', 'Completed', 1);

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `furniture_id` int(11) NOT NULL,
  `furniture_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furniture_description` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furniture_price` decimal(5,2) DEFAULT NULL,
  `furniture_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `furniture_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`furniture_id`, `furniture_name`, `furniture_description`, `furniture_price`, `furniture_status`, `furniture_condition`, `category_id`, `user_id`) VALUES
(1, 'Four Poster', 'A beautiful four poster double.', '999.00', 'show', 'new', 2, 1),
(10, 'King', 'A king sized bed with a modern style', '659.00', 'show', 'new', 2, 1),
(11, 'Corner Sofa', 'A modern styled corner sofa', '699.00', 'show', 'new', 4, 1),
(13, 'Oak Wardrobe', 'An Oak Wardrobe, two drawers and space to hang all your clothes', '399.00', 'show', 'new', 5, 1),
(14, 'Two Storey', 'Wide bed', '123.00', 'show', 'new', 2, 1),
(17, 'Fancy Table', 'New fancy table', '987.00', 'show', 'second hand', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `furniture_images`
--

CREATE TABLE `furniture_images` (
  `furniture_id` int(11) NOT NULL,
  `image_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `furniture_images`
--

INSERT INTO `furniture_images` (`furniture_id`, `image_name`) VALUES
(1, '1.jpg'),
(10, '10.jpg'),
(11, '11.jpg'),
(13, '13.jpg'),
(14, '14.jpg'),
(17, 'table12.jpg'),
(17, 'table2123.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `update_id` int(11) NOT NULL,
  `update_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`update_id`, `update_title`, `update_date`, `update_description`, `update_image`) VALUES
(7, 'Sofa Offer', '2019-05-05 16:50:07', 'Bumper Discount on Sofa! 25%', 'sofa.jpg'),
(8, 'New Chair In!', '2019-05-05 16:51:01', 'New chairs made in Vietnam are imported', 'chair.jpg'),
(9, 'Glass Table', '2019-05-05 18:52:07', 'Heavy discount on glass table', 'glass_table.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_firstname`, `user_lastname`, `user_email`, `user_password`, `user_type`) VALUES
(1, 'admin', 'admin', '', '', '$2y$10$nzSqiVp0MuHTgAymoOa5cuMBocxjg/5dAlQTNkDzgfdcwH8/V4wWu', 'superadmin'),
(2, 'shreejan', 'Shreejan', 'Regmi', 'shreejan.regmi@gmail.com', '$2y$10$tdcgcRXzZIiNdC/OM681A.Fuet6kZ5T2MoeR0noCWjgM6k9HW2mt.', 'admin'),
(3, 'sujan', 'Sujan', 'Niraula', 'sujan@email.com', '$2y$10$y1dHy1oivFXpCZJJh7p8IOjBwj7HOflmldZmNHm.duJMl1ysdTJ8W', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`enquiry_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`furniture_id`),
  ADD KEY `categoryId` (`category_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `furniture_images`
--
ALTER TABLE `furniture_images`
  ADD PRIMARY KEY (`furniture_id`,`image_name`),
  ADD KEY `furniture_id` (`furniture_id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`update_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_username` (`user_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `furniture`
--
ALTER TABLE `furniture`
  MODIFY `furniture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `update_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD CONSTRAINT `fk_e_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `furniture`
--
ALTER TABLE `furniture`
  ADD CONSTRAINT `fk_f_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_f_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `furniture_images`
--
ALTER TABLE `furniture_images`
  ADD CONSTRAINT `fk_fi_furnitures` FOREIGN KEY (`furniture_id`) REFERENCES `furniture` (`furniture_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
