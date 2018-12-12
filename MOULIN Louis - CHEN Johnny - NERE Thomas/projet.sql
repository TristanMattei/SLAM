-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 12 Décembre 2018 à 22:42
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `projet`
--
CREATE DATABASE IF NOT EXISTS `projet` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projet`;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Menus');

-- --------------------------------------------------------

--
-- Structure de la table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prenom` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mdp` varchar(16) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date_naissance` date NOT NULL,
  `postale` int(5) NOT NULL,
  `mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `telephone` int(10) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `information`
--

INSERT INTO `information` (`id`, `nom`, `prenom`, `mdp`, `date_naissance`, `postale`, `mail`, `telephone`) VALUES
(1, 'admin', 'admin', 'admin', '0001-01-01', 0, 'admin@admin.com', 0000000000),
(2, 'Moulin', 'Louis', 'cmonmdp', '2000-12-26', 93290, 'l.moulin@lprs.fr', 0659737458),
(3, 'Mattei', 'Tristan', 'mrmattei', '1992-04-05', 93000, 't.mattei@lprs.fr', 0669584736),
(4, 'Curtis', 'Jacques', 'jacko', '2000-10-06', 93250, 'j.curtis@lprs.fr', 0647587412),
(5, 'Trump', 'Donald', 'america', '1995-05-05', 92050, 'd.trump@america.com', 0606060606);

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `category` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Contenu de la table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `price`, `image`, `category`) VALUES
(1, 'Menu Enfant', 'Plat: Steak Hache, Dessert: Gauffre', 8, 'm1.png', 1),
(4, 'Menu Vegetarien', 'Entree: Veloute de brocoli, Plat: Salade de lentille, Dessert: Liegeois', 16, 'm4.png', 1),
(39, 'Menu Pizza', 'Entree: Carpaccio, Plat: Pizza 4 fromages', 15, 'm3.png', 1),
(40, 'Menu Tradizione', 'Entree: Tomate Mozarella, Plat: Spaguetti au pesto, Dessert: GÃ©noise Italienne', 18, 'm2.png', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` smallint(6) unsigned NOT NULL,
  `date` date NOT NULL,
  `menu` varchar(12) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
