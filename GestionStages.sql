-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 17, 2018 at 06:00 PM
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
  `region` set('Bas-Saint-Laurent','Saguenay-Lac-Saint-Jean','Capitale-Nationale','Mauricie','Estrie','Montréal','Outaouais','Abitibi-Témiscamingue','Côte-Nord','Nord-du-Québec','Gaspésie-Îles-de-la-Madeleine','Chaudières-Appalaches','Laval','Lanaudière','Laurentides','Montérégie','Centre-du-Québec') COLLATE utf8_unicode_ci NOT NULL,
  `precision_facilities` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `precision_task` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `other_remark` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_milieux` set('Public','Privé','Conventionné','Partenariat public/privé') COLLATE utf8_unicode_ci NOT NULL,
  `type_family` set('Orthopédie','Perte d''autonomie fonctionnelle','Mixte') COLLATE utf8_unicode_ci NOT NULL,
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
  `type_establishment` set('CHSLD','CLSC','Centre hospitalier','Centre réadapation','Clinique privée','Autre (précisez dans Remarques)') COLLATE utf8_unicode_ci NOT NULL,
  `type_client` enum('UTRF','Soins de clientèle hébergée et hôpital de jour','Soins de clientèle hébergée et externe','Soins de clientèle externe. hospitalisée et hébergée. rééducation et renforcement au travail','Soins de clientèle externe','Soins clientèle hospitalisée','Soins clientèle hébergée. soins de clientèle en convalescence','Soins clientèle hébergée et hospitalisée','Soins clientèle hébergée et externe','Soins clientèle hébergé et possibilité de Centre de jour','Soins clientèle externe. rééducation au travail','Soins clientèle externe et interne','Soins clientèle externe et hospitalisée','Soins clientèle externe et hébergée','Soins clientèle externe et à domicile','Soins clientèle externe','Soins clientèle à domicile et en hébergement. Centre de jour','Soins clientèle à domicile et clientèle externe','Soins clientèle à domicile','Recherche clinique','Principalement ortho/rhumato. un peu de perte d''autonomie','Perte d''autonomie. orthopédie/rhumatologie. neuro. cardiorespiratoire','Perte d''autonomie. orthopédie/rhumatologie. neuro','Perte d''autonomie. orthopédie/rhumatologie','Perte d''autonomie. orthopédie/rhumato. neuro','Perte d''autonomie. ortho/rhumato. cardiorespiratoire','Perte d''autonomie. ortho/rhumato','Perte d''autonomie. ortho. cardio. neuro','Perte d''autonomie. neurologie (cas séquélaires et évolutifs)','Perte d''autonomie. neuro et quelques cas ortho','Perte d''autonomie. cardiorespiratoire. palliatif','Perte d''autonomie un peu de neuro et d''ortho','Perte d''autonomie et ortho/rhumato','Perte d''autonomie','Perte autonomie fonctionnelle','Orthopédie/rhumatologie. Perte d''Autonomie','Orthopédie/rhumatologie principalement') COLLATE utf8_unicode_ci NOT NULL,
  `missions` set('UTRF','Soins de clientèle hébergée et hôpital de jour','Soins de clientèle hébergée et externe','Soins de clientèle externe. hospitalisée et hébergée. rééducation et renforcement au travail','Soins de clientèle externe','Soins clientèle hospitalisée','Soins clientèle hébergée. soins de clientèle en convalescence','Soins clientèle hébergée et hospitalisée','Soins clientèle hébergée et externe','Soins clientèle hébergée','Soins clientèle hébergé et possibilité de Centre de jour','Soins clientèle externe. rééducation au travail','Soins clientèle externe et interne','Soins clientèle externe et hospitalisée','Soins clientèle externe et hébergée','Soins clientèle externe et à domicile','Soins clientèle externe','Soins clientèle à domicile et en hébergement. Centre de jour','Soins clientèle à domicile et clientèle externe','Soins clientèle à domicile','Recherche clinique','Hôpital de jour','Centre de jour. soins de clientèle hébergée','Centre de jour et soins à domicile','Centre de jour et hôpital de jour','Centre de jour','CDJ et soins clientèle hébergée') COLLATE utf8_unicode_ci NOT NULL,
  `trp` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(11) NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `program` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `last_name`, `first_name`, `program`, `age`, `slug`, `created`, `modified`) VALUES
(0, 'Roy', 'Luc', 'Informatique', 22, 'Luc', '2018-09-10 20:12:46', '2018-09-10 20:12:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Candidatures`
--
ALTER TABLE `Candidatures`
  ADD PRIMARY KEY (`environment_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `Environments`
--
ALTER TABLE `Environments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Offers`
--
ALTER TABLE `Offers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `milieu_id` (`environment_id`),
  ADD KEY `milieu_id_2` (`environment_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Environments`
--
ALTER TABLE `Environments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Offers`
--
ALTER TABLE `Offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Candidatures`
--
ALTER TABLE `Candidatures`
  ADD CONSTRAINT `candidatures_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `candidatures_ibfk_2` FOREIGN KEY (`environment_id`) REFERENCES `offers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Environments`
--
ALTER TABLE `Environments`
  ADD CONSTRAINT `environments_ibfk_1` FOREIGN KEY (`id`) REFERENCES `Candidatures` (`environment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Offers`
--
ALTER TABLE `Offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`environment_id`) REFERENCES `Environments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
