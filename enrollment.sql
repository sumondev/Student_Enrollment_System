-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2019 at 07:21 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_phone`, `created_at`, `updated_at`) VALUES
(101, 'sumon', 'sumon148889@gmail.com', '148889', '01963065605', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(20, '2018_12_30_172934_admin_tbl_table', 1),
(21, '2019_01_04_171742_student_tbl_table', 1),
(22, '2019_01_16_163414_create_teacher_tbl_table', 1),
(23, '2019_01_16_180245_teacher_password_to_teacher_tbl', 1),
(24, '2019_01_16_190005_teacher_email_to_teacher_tbl_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_fathername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_mothername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_addmissionyear` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`student_id`, `student_name`, `student_roll`, `student_fathername`, `student_mothername`, `student_email`, `student_phone`, `student_address`, `student_image`, `student_password`, `student_department`, `student_addmissionyear`) VALUES
(112, 'Abdur rahman arif', '123', 'asad', 'mukti', 'sumon148889@gmail.com', '01963065605', 'Bogra', 'image/IcLVsoSMNL0vmwdQqotE.png', '148889', '2', '2019-01-08'),
(113, 'Nadim', '102', 'Sadek', 'Nahar', 'nk48889@gmail.com', '01789147852', 'Dhaka', 'image/tI9qJ07zWDeWBUXd7oYg.png', '212222', '5', '2019-01-08'),
(114, 'afia', '123456', 'faez', 'Hena', 'cxvcx@gmail.com', '01771544531', 'Savar', 'image/7Q9jDw1pyKYuqvlpEhek.png', '148889ddfsd', '4', '2019-01-23'),
(115, 'Nafia Islam', '102', 'Sadek', 'dfgdf', 'dfgdf@gmail.com', '01771544531', 'pakuria', 'image/ytdMem0xmPBVKKO9OV2E.jpg', 'dfgdf', '2', '2019-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_tbl`
--

CREATE TABLE `teacher_tbl` (
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `teacher_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_tbl`
--

INSERT INTO `teacher_tbl` (`teacher_id`, `teacher_name`, `teacher_phone`, `teacher_department`, `teacher_address`, `teacher_image`, `created_at`, `updated_at`, `teacher_password`, `teacher_email`) VALUES
(4, 'Kashem Islam', '0196065605', '1', 'Bogra', 'image/CzJ9lmFWwNEW20l47phO.png', NULL, NULL, 'kasem', 'kasem@gmail.com'),
(5, 'Mamun hossain', '01847557858', '3', 'Dhanmondi', 'image/yVaaQ4XBqLtSZ1Kr9wNy.jpg', NULL, NULL, '12456666', 'kb@gmail.com'),
(6, 'Abdur Rashid', '0189562145', '4', 'Dhanmondi', 'image/3JrMmdsIZJzoM1TI8Kmo.jpg', NULL, NULL, 'rashid', 'rashid@gmail.com'),
(7, 'kader khan', '017851245', '2', 'mirpur-10', 'image/4EqoY7s8YbYQX0n42RFH.jpg', NULL, NULL, 'kader', 'kader@gamil.com'),
(8, 'Nayem Islam', '01741144512', '5', 'Kafrul', 'image/RhekV918IDHZWSfm1nKX.jpg', NULL, NULL, 'asdasdf', 'nayem@gmail.com'),
(9, 'mohaimenul Islam', '01521473118', '1', 'Chpai', 'image/pDsMJnfsbLEjZJztbFd3.jpg', NULL, NULL, 'mohaimen', 'mohaime@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher_tbl`
--
ALTER TABLE `teacher_tbl`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `teacher_tbl`
--
ALTER TABLE `teacher_tbl`
  MODIFY `teacher_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
