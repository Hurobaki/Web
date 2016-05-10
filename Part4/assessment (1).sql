-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 09 Mai 2016 à 16:06
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `assessment`
--

-- --------------------------------------------------------

--
-- Structure de la table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `car_id` int(3) NOT NULL AUTO_INCREMENT,
  `make` varchar(25) NOT NULL,
  `model` varchar(25) NOT NULL,
  `year` int(4) NOT NULL,
  `cc` int(11) NOT NULL,
  `colour` varchar(20) NOT NULL,
  `picture` text NOT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `cars`
--

INSERT INTO `cars` (`car_id`, `make`, `model`, `year`, `cc`, `colour`, `picture`) VALUES
(1, 'Ford', 'Mustang GT', 1967, 0, 'Black', 'mustang-1967.jpg'),
(2, 'Lamborghini', 'Aventador LP 700-4', 2015, 0, 'Black', 'lamborghini-700LP.jpg'),
(3, 'Maserati', 'Alfieri', 2016, 0, 'Silver', 'maserati-alfieri.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `forename` varchar(25) NOT NULL,
  `surename` varchar(25) NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `postal` varchar(15) NOT NULL,
  `country` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `forename`, `surename`, `login`, `password`, `birth_date`, `address`, `city`, `postal`, `country`) VALUES
(23, 'Myriam', 'Lasla', 'KatBlacK', '84cb15079fe0d9e19e01a8526f9602be9fa10e3c', '1995-11-18', 'Address', 'City', 'Postal', 'France'),
(26, 'admin', 'admin', 'admin', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', '1994-10-12', 'admin', 'admin', '66666', 'France'),
(27, 'Stéphane', 'Gateau', 'Zarakaï', '2629bd9820932015240a92995d4719cfb5dbc2c1', '1994-05-12', '5 rue Guynemer', 'villejuif', '60340', 'France'),
(28, 'Gougam', 'william', 'raty', '786a2c01d0a302f981d748c288b92bda6d953361', '0095-06-24', 'DSD', 'DSD', 'test', 'Bahrain'),
(29, 'Alex', 'Guerreiro', 'Alexou', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '1995-09-12', 'Address', 'City', '75000', 'France'),
(30, 'Manu', 'Reva', 'Nunu', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '1995-10-14', 'Address', 'City', '60000', 'France'),
(31, 'Test/Test', 'Lol_', 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2910-12-12', 'address', 'test', '40000', 'France');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
