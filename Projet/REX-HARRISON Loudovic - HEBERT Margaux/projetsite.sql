-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 12 Décembre 2018 à 16:26
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `projetsite`
--
CREATE DATABASE IF NOT EXISTS `projetsite` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projetsite`;

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE IF NOT EXISTS `inscription` (
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse_po` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `tel` int(11) NOT NULL,
  `mot_de_passe` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`nom`, `prenom`, `date_naissance`, `adresse_po`, `email`, `tel`, `mot_de_passe`) VALUES
('segseth', 'sethsteh', '2018-12-12', '0', 'dhrhr', 567431267, 'ab1234iuyikyki'),
('Toto', 'dskhfsdh', '2222-05-25', '32767', 'tl@gmail.com', 2147483647, 'test2'),
('Jean', 'David', '1999-01-01', '0', 'J.P@gmail.com', 615439765, ''),
('Jiji', 'Tutu', '1999-01-01', '0', 'jiji.tutu@gmail.com', 646768905, ''),
('Jiji', 'Tutu', '1999-01-01', '0', 'Jiji.tu', 645762398, ''),
('qfrg', 'qgrrg', '2017-10-05', '0', 'qgrrg', 67556, ''),
('rrwhgx', 'wgrwrg', '2016-10-03', '0', 'whrrhe', 98076, ''),
('Toto', 'dskhfsdh', '2222-05-25', '32767', 'Juju@gmail.com', 2147483647, ''),
('yddruyduj', 'vgkjkgvkj', '2019-01-06', '0', 'xhhgxfh', 545475, 'xgxxgh'),
('sdgcfg', 'dgxdgdg', '2019-01-05', '0', 'xdggd', 67586, 'xdgxgdf'),
('Jhon', 'David', '1999-01-01', '0', 'Dave@gmail.com', 615439765, 'test'),
('louhd', 'halouloudo', '1999-05-12', '32767', 'loudovic46@gmail.com', 960366585, 'loudovic1212ab'),
('admin', 'admin', '2000-12-26', '11111', 'admin@admin.com', 666666666, 'admin'),
('qzdqz', 'qzdqzd', '2000-12-26', '11111', 'qzdzdq@zdzqd.com', 666666666, 'louis06'),
('qzdzqdqqdqz', 'qzdqzdqzqzddzqdqzqzdqdz', '2000-12-26', '11111', 'qzdzdq@zdzqdqzd.com', 666666666, 'louis26'),
('loudovic', 'loudovicr', '1999-02-12', '32767', 'louis75@gmail.com', 654578962, 'abcdefg1212'),
('sds', 'sdsds', '9157-02-12', '32767', 'louud45@gmail.com', 2147483647, 'abf456'),
('louhds', 'qsqsqsq', '1999-05-04', '32767', 'mama78@gmail.com', 645859886, 'abcde456789');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `nombre_personne` smallint(6) NOT NULL,
  `date_reservation` datetime NOT NULL,
  `menu` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`nombre_personne`, `date_reservation`, `menu`) VALUES
(32, '2019-05-06 15:00:00', 'Menu 3'),
(12, '2019-06-11 13:00:00', 'Menu 3'),
(6, '0000-00-00 00:00:00', 'Menu 3'),
(10, '2019-06-11 14:00:00', 'Menu 1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
