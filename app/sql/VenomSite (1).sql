-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Oct 21, 2023 at 08:03 PM
-- Server version: 11.1.2-MariaDB-1:11.1.2+maria~ubu2204
-- PHP Version: 8.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `VenomSite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `hashedPassword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `hashedPassword`) VALUES
(1, 'root', '$2y$10$02USLmEc14YYVqImfJ.8UuWyhetr728RBtXNPa5v.RAAGi5EmC8Q2');

-- --------------------------------------------------------

--
-- Table structure for table `ClassTypes`
--

CREATE TABLE `classTypes` (
  `id` int(11) NOT NULL,
  `classType` varchar(255) NOT NULL,
  `classCommonName` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `imgURL` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ClassTypes`
--

INSERT INTO `classTypes` (`id`, `classType`, `classCommonName`, `description`, `imgURL`) VALUES
(1, 'Reptilia', 'Reptiles', 'Reptiles, in common parlance, are a group of tetrapods with an ectothermic (&#039;cold-blooded&#039;) metabolism and amniotic development. Living reptiles comprise of four orders: Testudines (turtles), Crocodilia (crocodilians), Squamata (lizards and snakes), and Rhynchocephalia (the tuatara)', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/43/Reptiles_2021_collage.jpg/450px-Reptiles_2021_collage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fangTypes`
--

CREATE TABLE `fangTypes` (
  `id` int(11) NOT NULL,
  `fangType` varchar(35) NOT NULL,
  `fangCommonName` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fangTypes`
--

INSERT INTO `fangTypes` (`id`, `fangType`, `fangCommonName`, `description`) VALUES
(1, 'Solenogyphous', 'Front foldable fangs', 'Solenogyphous fangs are considered as the most advanced and most evolved fangs, and are found on vipers like rattlesnakes, puffadders and more. These fangs are at the front of the mount and fold to the roof of the mouth. Like most venomous teeth they are hollow so that venom can pass through the teeth and can be injected deeply inside its prey.'),
(2, 'Proteroglyphous', 'Front fixed fangs', 'Proteroglyphous fangs can only be found in the elapid family which contains venom snakes like mamba&#039;s, taipans, cobra&#039;s, sea snakes and more. These fangs are located at the front of the mouth and cannot be folded up against the roof of the mouth like solenogyphous fangs. Like most teeth are the proteroglyphous fangs hollow so that venom van be injected into its prey.'),
(3, 'Opisthoglyphous ', 'Rear mouth fangs', 'Opisthoglyphous fangs can only found with snakes in the Colubrids family. Many of these snakes are harmless except for some the boomslang which can be deadly. These fangs are located at the back of the mouth which makes injecting vemon into prey more difficult. Like most snake teeth are the opisthoglyphous fangs so the venom can be injected into its prey. ');

-- --------------------------------------------------------

--
-- Table structure for table `venomTypes`
--

CREATE TABLE `venomTypes` (
  `id` int(11) NOT NULL,
  `venomType` varchar(35) NOT NULL,
  `effect` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venomTypes`
--

INSERT INTO `venomTypes` (`id`, `venomType`, `effect`, `description`) VALUES
(1, 'Dendrotoxin', '', 'Dendrotoxin can only be found in the dendroaspis genus which are also known as the mamba&#039;s');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ClassTypes`
--
ALTER TABLE `classTypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fangTypes`
--
ALTER TABLE `fangTypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venomTypes`
--
ALTER TABLE `venomTypes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ClassTypes`
--
ALTER TABLE `classTypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fangTypes`
--
ALTER TABLE `fangTypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `venomTypes`
--
ALTER TABLE `venomTypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
