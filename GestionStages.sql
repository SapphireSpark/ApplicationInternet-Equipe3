-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 24, 2018 at 08:34 PM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `GestionStages`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admins`
--

CREATE TABLE IF NOT EXISTS `Admins` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Candidatures`
--

CREATE TABLE IF NOT EXISTS `Candidatures` (
  `environment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Emails`
--

CREATE TABLE IF NOT EXISTS `Emails` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Emails`
--

INSERT INTO `Emails` (`email`, `password`, `id`) VALUES
('bibliofun123@gmail.com', 'biblio123', 1),
('progphp123@gmail.com', 'prog1234', 2);

-- --------------------------------------------------------

--
-- Table structure for table `Environments`
--

CREATE TABLE IF NOT EXISTS `Environments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `adress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `expectations` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_admin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` int(9) NOT NULL,
  `fax` int(9) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adress_admin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city_admin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `province_admin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode_admin` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `precision_facilities` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `precision_task` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `other_remark` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info_solicitation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info_contract` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remark` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `other_info` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_invitation` date NOT NULL,
  `date_lastcall` date NOT NULL,
  `active` tinyint(1) NOT NULL,
  `number_application` int(11) NOT NULL,
  `other_cegep` tinyint(1) NOT NULL,
  `establishment_id` int(11) NOT NULL,
  `trp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `region_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Environments`
--

INSERT INTO `Environments` (`id`, `name`, `slug`, `created`, `modified`, `adress`, `city`, `province`, `zipcode`, `expectations`, `name_admin`, `title`, `telephone`, `fax`, `email`, `adress_admin`, `city_admin`, `province_admin`, `zipcode_admin`, `precision_facilities`, `precision_task`, `other_remark`, `profile`, `info_solicitation`, `info_contract`, `remark`, `other_info`, `date_invitation`, `date_lastcall`, `active`, `number_application`, `other_cegep`, `establishment_id`, `trp`, `region_id`) VALUES
(1, 'Biblio Fun', 'Biblio', '2018-09-24 19:35:21', '2018-09-24 19:36:45', '1800 7eme Rue', 'Trois-Riviere', 'Quebec', 'H0H0H0', 'mcmuffins@gmail.com', 'Billy McMuffins', 'Supreme Leader', 6666666, 5555555, 'mcmuffins@gmail.com', '1800 7eme Rue', 'Trois-Riviere', 'Quebec', 'H0H0H0', 'Repas fournis', 'PHP', 'Aucune', 'Huh', 'Trop de truc a rentrer', 'Pas appeller apres 17h00', 'Aucune', 'Encore', '2018-09-24', '2019-09-24', 1, 10, 1, 2, 'TRP', 6),
(3, 'Test', 'Biblio', '2018-09-24 20:03:40', '2018-09-24 20:03:40', '11e Rue de Rotterdam', 'Laval', 'Quebec', 'H7M1L2', 'mcmuffins@gmail.com', 'Billy McMuffins', 'Harry Potter', 6666666, 6666666, 'gmail@gmail.com', '1800 7eme Rue', 'Trois-Riviere', 'Quebec', 'H0H0H0', 'Repas fournis', 'PHP', 'Aucune', 'Huh', 'Trop de truc a rentrer', 'Pas appeller apres 17h00', 'Aucune', 'UTRF, Soins clientèle externe et interne', '2018-09-24', '2019-09-24', 1, 4, 1, 4, 'TRP', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Establishments`
--

CREATE TABLE IF NOT EXISTS `Establishments` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Establishments`
--

INSERT INTO `Establishments` (`id`, `type`) VALUES
(1, 'CHSLD'),
(2, 'CLSC'),
(3, 'Centre hospitalier'),
(4, 'Centre réadapation'),
(5, 'Autre (précisez dans Remarques)');

-- --------------------------------------------------------

--
-- Table structure for table `MilieuxStages`
--

CREATE TABLE IF NOT EXISTS `MilieuxStages` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Offers`
--

CREATE TABLE IF NOT EXISTS `Offers` (
  `id` int(11) NOT NULL,
  `environment_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `specalisation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jobs_open` int(11) NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Regions`
--

CREATE TABLE IF NOT EXISTS `Regions` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Regions`
--

INSERT INTO `Regions` (`id`, `type`) VALUES
(1, 'Bas-Saint-Laurent'),
(2, 'Saguenay-Lac-Saint-Jean'),
(3, 'Capitale-Nationale'),
(4, 'Mauricie'),
(5, 'Estrie'),
(6, 'Montréal'),
(7, 'Outaouais'),
(8, 'Abitibi-Témiscamingue'),
(9, 'Côte-Nord'),
(10, 'Nord-du-Québec'),
(11, 'Gaspésie-Îles-de-la-Madeleine'),
(12, 'Chaudières-Appalaches'),
(13, 'Laval'),
(14, 'Lanaudière'),
(15, 'Laurentides'),
(16, 'Montérégie'),
(17, 'Centre-du-Québec');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(11) NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `program` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `last_name`, `first_name`, `email`, `password`, `program`, `age`, `slug`, `created`, `modified`, `role`) VALUES
(1, 'Roy', 'Luc', 'gmail@gmail.com', 'Admin', 'Informatique', 22, 'Luc', '2018-09-10 20:12:46', '2018-09-10 20:12:46', ''),
(3, 'Tremblay', 'Bob', '', '', 'Informatique', 55, 'Tremblay', '2018-09-24 17:33:05', '2018-09-24 17:33:05', ''),
(4, 'McMuffins', 'Billy', '', '', 'Dance', 222, 'Billy', '2018-09-24 17:51:04', '2018-09-24 17:51:04', ''),
(5, 'Bob', 'Bob', 'bob@bob.com', '$2y$10$a2fCqehL2X.JA8VE2q.4zODvVeWh9cVMYXl/LqUZf0Nz4NLck8Q5S', 'Dance', 22, 'Bob', '2018-09-24 20:24:21', '2018-09-24 20:24:21', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admins`
--
ALTER TABLE `Admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Candidatures`
--
ALTER TABLE `Candidatures`
  ADD PRIMARY KEY (`environment_id`,`user_id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`);

--
-- Indexes for table `Emails`
--
ALTER TABLE `Emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Environments`
--
ALTER TABLE `Environments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `establishmentd_id` (`establishment_id`),
  ADD KEY `region_id` (`region_id`);

--
-- Indexes for table `Establishments`
--
ALTER TABLE `Establishments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `MilieuxStages`
--
ALTER TABLE `MilieuxStages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Offers`
--
ALTER TABLE `Offers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `milieu_id` (`environment_id`),
  ADD KEY `milieu_id_2` (`environment_id`);

--
-- Indexes for table `Regions`
--
ALTER TABLE `Regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Emails`
--
ALTER TABLE `Emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Environments`
--
ALTER TABLE `Environments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Establishments`
--
ALTER TABLE `Establishments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Offers`
--
ALTER TABLE `Offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Regions`
--
ALTER TABLE `Regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Candidatures`
--
ALTER TABLE `Candidatures`
  ADD CONSTRAINT `environements_ibfk_3` FOREIGN KEY (`environment_id`) REFERENCES `Environments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `Users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Environments`
--
ALTER TABLE `Environments`
  ADD CONSTRAINT `environments_ibfk_2` FOREIGN KEY (`establishment_id`) REFERENCES `Establishments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `regions_ibfk_2` FOREIGN KEY (`region_id`) REFERENCES `Regions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Offers`
--
ALTER TABLE `Offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`environment_id`) REFERENCES `Environments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
