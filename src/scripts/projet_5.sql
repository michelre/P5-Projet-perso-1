-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 29 juil. 2018 à 09:21
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet 5`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date_creation` date NOT NULL,
  `recette_id` int(11) ,
 FOREIGN KEY(recette_id)REFERENCES`recette`(id),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

DROP TABLE IF EXISTS `recette`;
CREATE TABLE IF NOT EXISTS `recette` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `name` VARCHAR (255) NOT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`id`,`name`, `content`, `type_id`) VALUES
(1, 'PAIN SALADES SAUCE MIEL CHEVRE VIANDE 15%','LE CHEVRE', 2 , 2,'PAIN BRIOCHE SAUCE AU GOUT FUME SALADE,TOMATES OIGNONS ROUGES EN RONDELLE FROMAGE MAIGRE VIANDE 15%','LE COMPLETS ', 2 , 3 ,'PAIN COMPLETS SAUCE AVOCAT CONCOMBRE VIANDE 15%' , 'LE LIGHT ', 2 , 4,'PAIN ITALIEN SAUCE POIVRE PARMESAN 2 X VIANDE 15% SALADE' ,'LE GOURMANDS', 2 , 5 , ' PAIN SALADE SAUCE CESAR TOMATE POULET ','LE CESARS', 1 , 6 , 'PAIN BACON SAUCE POIVRE OIGNONS FRITS FROMAGE  POULET SALADE' ,1 ,'LE BACON ', 7 , 'PAIN SAUCE PIMENT MAYO SALADE POULET' ,'LE PIMENT',1 , 8 , 'PAIN TOAST SAUCE CITRONNE TOMATE SALADE POULET AU FOUR ','LE BRAISE', 1 , 8 ,' PAIN SAUCE CHEDDAR (FAIBLE CALORIE) POULET POIVRON SALADE ','LE COLORE',1);

-- --------------------------------------------------------

--
-- Structure de la table `type_recette`
--

DROP TABLE IF EXISTS `type_recette`;
CREATE TABLE IF NOT EXISTS `type_recette` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type_recette`
--

INSERT INTO `type_recette` (`id`, `name`) VALUES
(1, 'Burger Poulet',2 'Burger Boeuf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
