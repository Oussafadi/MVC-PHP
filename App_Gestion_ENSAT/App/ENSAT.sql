-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 06:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `eleves`
--

CREATE TABLE `eleves` (
  `id` int(11) NOT NULL,
  `CNE` varchar(10) NOT NULL,
  `Nom` varchar(15) NOT NULL,
  `Prenom` varchar(15) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Ville` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eleves`
--

INSERT INTO `eleves` (`id`, `CNE`, `Nom`, `Prenom`, `Adresse`, `Ville`, `Email`, `Photo`) VALUES
(1, '139022035', 'ABASSI', 'Yasser', 'ENSAT BP 1818', 'Tanger', 'yasser.abassi@etu.uae.ac.ma', '/photos/photo.jpg'),
(2, '142034631', 'ALAMI-OUAHABI', 'Louay', 'ENSAT BP1818', 'Tanger', 'louay.alamiouahabi@etu.uae.ac.ma', '/photos/photo.jpg\r\n'),
(6, '185054115', 'AMAATI', 'Zakariae', 'ENSAT BP1818', 'Tanger', 'zakariae.amaati@etu.uae.ac.ma', '/photos/photo.jpg'),
(7, '142034631', 'AMAMI', 'Yassir', 'ENSAT BP1818', 'Tanger', 'yassir.amami@etu.uae.ac.ma', '/photos/photo.jpg'),
(8, '349022035', 'ASSADI', 'Mouad', 'ENSAT BP1818', 'Tanger', 'mouad.assadi@etu.uae.ac.ma', '/photos/photo.jpg'),
(9, '172034631', 'ATYQ', 'Amine', 'ENSAT BP1818', 'Tanger', 'yassine.belafki@etu.uae.ac.ma', '/photos/photo.jpg'),
(10, '185054115', 'BELAFKI', 'Yassine', 'ENSAT BP1818', 'Tanger', 'omar.belkentaoui@etu.uae.ac.ma', '/photos/photo.jpg'),
(14, '1052568560', 'BENAFITOU', 'Asmae', 'ENSAT BP 1818', 'Tanger', 'asmae.benafitou@etu.uae.ac.ma', '/photos/photo2.png'),
(16, '1234567', 'testmodifier', 'testmodifier', 'test', 'testmodifi', 'test@testmodifier', './photos/photo2.png'),
(17, '123456', 'Testajouter', 'testajouetr', 'testajout', 'testajout', 'ajout@test', './photos/photo2.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user` varchar(10) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `passwd`, `role`) VALUES
(1, 'kamechnoue', '123456', 'admin'),
(2, 'fadil', '123', 'eleve');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eleves`
--
ALTER TABLE `eleves`
  ADD PRIMARY KEY (`id`,`CNE`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eleves`
--
ALTER TABLE `eleves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
