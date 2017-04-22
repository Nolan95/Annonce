-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2017 at 11:12 AM
-- Server version: 5.7.12-log
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `annonce`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonces`
--

CREATE TABLE `annonces` (
  `idAce` int(11) NOT NULL,
  `titreAce` varchar(255) DEFAULT NULL,
  `dateAce` date DEFAULT NULL,
  `libelleAce` longtext,
  `idCat` int(11) NOT NULL,
  `idUsers` int(11) NOT NULL,
  `statutAce` varchar(255) DEFAULT NULL,
  `prixAce` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `idCat` int(11) NOT NULL,
  `tituleCat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `idCom` int(11) NOT NULL,
  `contenuCom` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `emailUser` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `idMedias` int(11) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `idAce` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `idnewsletters` int(11) NOT NULL,
  `emailUser` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sous_categories`
--

CREATE TABLE `sous_categories` (
  `id` int(20) NOT NULL,
  `sous_cat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `typeCompte` varchar(255) NOT NULL,
  `confirmationToken` varchar(60) DEFAULT NULL,
  `confirmedAt` datetime DEFAULT NULL,
  `nomAb` varchar(255) DEFAULT NULL,
  `prenomAb` varchar(255) DEFAULT NULL,
  `emailAb` varchar(255) DEFAULT NULL,
  `telephoneAb` int(50) DEFAULT NULL,
  `resetToken` varchar(60) DEFAULT NULL,
  `resetAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `username`, `password`, `typeCompte`, `confirmationToken`, `confirmedAt`, `nomAb`, `prenomAb`, `emailAb`, `telephoneAb`, `resetToken`, `resetAt`) VALUES
(32, 'Navid500', '$2y$10$4/oByhPLpJvbxMIJ9mfBBOHCCPeECvawG.ejXdFyPjmF2ZdEyz0/O', 'particulier', NULL, '2016-09-24 01:46:35', 'Ross', 'nolan', 'nolannross2016@gmail.com', 5788888, NULL, NULL),
(33, 'sadate95', '$2y$10$44auRKAZe9RUynNkMERREuC4uE9csd1hFPsZdlG81uxVAf/QnFH6u', 'particulier', NULL, '2016-09-24 01:53:38', 'kache', 'aminou', 'aminoukache@gmail.com', 5788888, 'hsZDdbN3LXjPLTBiPX7tuX1pjf2qCJYhJ1WuR5tLsqelnQ6fpYwOaeUFqEEt', '2016-10-05 13:39:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`idAce`,`idCat`),
  ADD KEY `fk_Annonces_Categories_idx` (`idCat`),
  ADD KEY `fk_Annonces_Users1_idx` (`idUsers`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idCat`);

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`idCom`);

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`idMedias`),
  ADD KEY `fk_Medias_Annonces1_idx` (`idAce`);

  ALTER TABLE `sous_categories`
    ADD KEY `fk_Categories_Sous_categories` (`idAce`);
--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`idnewsletters`);

--
-- Indexes for table `sous_categories`
--
ALTER TABLE `sous_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `idAce` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `idCat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `idCom` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
  MODIFY `idMedias` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `idnewsletters` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sous_categories`
--
ALTER TABLE `sous_categories`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
