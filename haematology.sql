-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2018 at 02:53 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haematology`
--

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `investigation_required` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clinical_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consultant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_1` date NOT NULL,
  `anisocytosis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_cells` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poikilocytosis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sickle_cells` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `microcytosis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `macrocytosis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `esr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hypochromia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nucleated_rbc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `polychromasia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `others` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blast` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promyel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `myel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metamyel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nelit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lymph` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eosin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `med_lab_scientist` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `haematologist` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_2` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `surname`, `firstname`, `age`, `sex`, `ward`, `hospital_number`, `investigation_required`, `clinical_details`, `consultant`, `date_1`, `anisocytosis`, `target_cells`, `poikilocytosis`, `sickle_cells`, `microcytosis`, `plai`, `macrocytosis`, `esr`, `hypochromia`, `nucleated_rbc`, `polychromasia`, `others`, `blast`, `promyel`, `myel`, `metamyel`, `nelit`, `lymph`, `mono`, `eosin`, `baso`, `lab_number`, `med_lab_scientist`, `haematologist`, `date_2`) VALUES
(1, 'doe', 'john', '33', 'm', 'ward 4', '2011', 'none', 'clinical details', 'Dr. Ali', '2018-04-16', 'qq', 'ww', '   eee', 'rr', 'tt', 'yy', 'uu', 'ii', 'oo', 'ssss', 'pp', 'hthuuu', 'dd', 'ff', ' gg', 'hh', 'jj', 'kk', 'll', 'zz', '  xx', '44', 'Dr Sola', 'Dr Feranmi', '2018-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
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
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
