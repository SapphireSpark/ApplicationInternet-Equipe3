-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2018 at 08:23 PM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestio54_GestionStages`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidatures`
--

CREATE TABLE IF NOT EXISTS `candidatures` (
  `candidature_id` int(11) NOT NULL,
  `environment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `candidatures`
--

INSERT INTO `candidatures` (`candidature_id`, `environment_id`, `user_id`, `slug`, `created`, `modified`) VALUES
(1, 1, 9, 'Nom: Etudiant', '2018-11-07 16:42:34', '2018-11-07 16:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE IF NOT EXISTS `emails` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`email`, `password`, `id`) VALUES
('bibliofun123@gmail.com', 'biblio123', 1),
('progphp123@gmail.com', 'prog1234', 2);

-- --------------------------------------------------------

--
-- Table structure for table `environments`
--

CREATE TABLE IF NOT EXISTS `environments` (
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `environments`
--

INSERT INTO `environments` (`id`, `name`, `slug`, `created`, `modified`, `adress`, `city`, `province`, `zipcode`, `expectations`, `name_admin`, `title`, `telephone`, `fax`, `email`, `adress_admin`, `city_admin`, `province_admin`, `zipcode_admin`, `precision_facilities`, `precision_task`, `other_remark`, `profile`, `info_solicitation`, `info_contract`, `remark`, `other_info`, `date_invitation`, `date_lastcall`, `active`, `number_application`, `other_cegep`, `establishment_id`, `trp`, `region_id`) VALUES
(1, 'Biblio Fun DEUX', 'Biblio', '2018-09-24 19:35:21', '2018-11-05 21:49:36', '1800 7eme Rue', 'Trois-Riviere', 'Quebec', 'H0H0H0', 'mcmuffins@gmail.com', 'Billy McMuffins', 'Supreme Leader', 6666666, 5555555, 'mcmuffins@gmail.com', '1800 7eme Rue', 'Trois-Riviere', 'Quebec', 'H0H0H0', 'Repas fournis', 'PHP', 'Aucune', 'Huh', 'Trop de truc a rentrer', 'Pas appeller apres 17h00', 'Aucune', 'Encore', '2018-09-24', '2019-09-24', 1, 10, 1, 2, 'TRP', 6),
(3, 'Test32231', 'Biblio', '2018-09-24 20:03:40', '2018-11-05 21:49:56', '11e Rue de Rotterdam', 'Laval', 'Quebec', 'H7M1L2', 'mcmuffins@gmail.com', 'Billy McMuffins', 'Harry Potter', 6666666, 6666666, 'gmail@gmail.com', '1800 7eme Rue', 'Trois-Riviere', 'Quebec', 'H0H0H0', 'Repas fournis', 'PHP', 'Aucune', 'Huh', 'Trop de truc a rentrer', 'Pas appeller apres 17h00', 'Aucune', 'UTRF, Soins clientèle externe et interne', '2018-09-24', '2019-09-24', 1, 4, 1, 4, 'TRP', 1),
(4, 'TEST EMAIL', 'Biblio', '2018-10-22 20:08:37', '2018-10-22 20:08:37', '1800 7eme Rue', 'Trois-Riviere', 'Quebec', 'H0H0H0', 'bibliofun123@gmail.com', 'Billy McMuffins', 'Second Post', 6666666, 6666666, 'bibliofun123@gmail.com', '1800 7eme Rue', 'Trois-Riviere', 'Quebec', 'H0H0H0', 'Repas fournis', 'PHP', 'Aucune', 'Huh', 'Trop de truc a rentrer', 'Pas appeller apres 17h00', 'Aucune', 'UTRF, Soins clientèle externe et interne', '2018-10-22', '2018-10-22', 1, 33, 1, 1, 'TRP', 13);

-- --------------------------------------------------------

--
-- Table structure for table `establishments`
--

CREATE TABLE IF NOT EXISTS `establishments` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `establishments`
--

INSERT INTO `establishments` (`id`, `type`) VALUES
(1, 'CHSLD'),
(2, 'CLSC'),
(3, 'Centre hospitalier'),
(4, 'Centre réadapation'),
(5, 'Autre (précisez dans Remarques)');

-- --------------------------------------------------------

--
-- Table structure for table `milieuxStages`
--

CREATE TABLE IF NOT EXISTS `milieuxStages` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `id` int(11) NOT NULL,
  `environment_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `specalisation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jobs_open` int(11) NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `environment_id`, `name`, `specalisation`, `jobs_open`, `slug`, `created`, `modified`) VALUES
(1, 0, 'Biblio Fun', 'Test', 213, 'Bb', '2018-10-04 18:52:47', '2018-10-04 18:52:47'),
(2, 1, '12', '123', 123, '123', '2018-11-05 20:42:48', '2018-11-05 20:42:48'),
(3, 1, '123', '123', 123123, '123', '2018-11-05 20:42:54', '2018-11-05 20:42:54'),
(21, 1, 'test', 'test', 12, 'test', '2018-11-10 02:36:00', '2018-11-10 02:36:00'),
(22, 1, 'test', 'test', 3, 'test', '2018-11-10 03:39:28', '2018-11-10 03:39:28'),
(23, 1, 'test', 'test', 5, 'test', '2018-11-14 18:42:13', '2018-11-14 18:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `type`) VALUES
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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `last_name`, `first_name`, `email`, `password`, `program`, `age`, `slug`, `created`, `modified`, `role`) VALUES
(5, 'Bob', 'Bob', 'bob@bob.com', '$2y$10$a2fCqehL2X.JA8VE2q.4zODvVeWh9cVMYXl/LqUZf0Nz4NLck8Q5S', 'Dance', 22, 'Bob', '2018-09-24 20:24:21', '2018-09-24 20:24:21', 'Admin'),
(7, 'Boulay', 'Test', 'mcmuffins@gmail.com', '$2y$10$L9dl5x0.kv1uJmZy/8iHFeSCv5U5N.yfVwQwr8e7pvN0IyvQaXnxe', 'Informatique', 22, 'Biblio', '2018-10-04 18:54:25', '2018-10-04 18:54:25', 'Etudiant'),
(8, 'Admin', 'Admin', 'admin@admin.com', '$2y$10$MsOR.KjeAOmPEXWEix8q2.yiB.pfSnliUd5WP.xLTBUTOYPwv9nBC', 'Admin', 99, 'Admin', '2018-10-22 17:54:21', '2018-10-22 17:54:21', 'Admin'),
(9, 'Etudiant', 'Etudiant', 'etudiant@etudiant.com', '$2y$10$3Pg3SJwV7SjnIB5suHsjRuQhRTgjGIFMvbTaPW/pGKhRZcixjL8Ii', 'Etudiant', 99, 'Etudiant', '2018-11-05 21:07:15', '2018-11-05 21:07:15', 'Etudiant'),
(10, 'Milieux', 'Milieux', 'milieux@milieux.com', '$2y$10$GAXFTAqAwR/o/86lrgCQEeTXlRG/vjOTwhLsWSo14UikDiJwn2QdC', 'Milieux', 33, 'Milieux', '2018-11-05 21:07:38', '2018-11-05 21:07:45', 'Milieux'),
(12, 'schreyer', 'michel', 'michelschreyer18@gmail.com', '$2y$10$.PyBK8cfCPBm62QWSBUj0eR52LGnOsxsBCp3Q0ef4IQfKZoJpd0Ae', 'info', 20, '2', '2018-11-06 02:43:00', '2018-11-06 02:43:00', 'etudiant'),
(13, 'Admin', 'Admin', 'admin@administrateur.ca', '$2y$10$0JdHNDoVTkA8Kpjg3cIf1OCPU7C5dUaft7ol4fv.cy0rEJz9Krwwa', 'admin', 20, 'admin', '2018-11-06 02:45:03', '2018-11-06 02:45:03', 'admin'),
(14, 'coucou', 'admin', 'michel.schreyer21@gmail.com', '$2y$10$qF9xcxRjXvneuddoGhW9UOzsM7xtRQM7rYlsS3TIg8C0/3CKBx2OK', 'info', 20, 'test', '2018-11-14 18:35:20', '2018-11-14 18:35:20', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidatures`
--
ALTER TABLE `candidatures`
  ADD PRIMARY KEY (`candidature_id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `environments`
--
ALTER TABLE `environments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `establishmentd_id` (`establishment_id`),
  ADD KEY `region_id` (`region_id`);

--
-- Indexes for table `establishments`
--
ALTER TABLE `establishments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milieuxStages`
--
ALTER TABLE `milieuxStages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
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
-- AUTO_INCREMENT for table `candidatures`
--
ALTER TABLE `candidatures`
  MODIFY `candidature_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `environments`
--
ALTER TABLE `environments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `establishments`
--
ALTER TABLE `establishments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `environments`
--
ALTER TABLE `environments`
  ADD CONSTRAINT `environments_ibfk_2` FOREIGN KEY (`establishment_id`) REFERENCES `establishments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `regions_ibfk_2` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
