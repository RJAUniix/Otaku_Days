-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 30 mai 2023 à 06:53
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `otaku_days`
--

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

DROP TABLE IF EXISTS `participants`;
CREATE TABLE IF NOT EXISTS `participants` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `pseudo` varchar(20) NOT NULL,
  `score` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `participants`
--

INSERT INTO `participants` (`id`, `nom`, `prenom`, `pseudo`, `score`) VALUES
(37, 'RABE', 'Andréas', 'Andréas', 9),
(38, 'RABESON', 'Johanne Andréas', 'andreas', 10),
(36, 'RABESON', 'Johanne Andréas', 'Andréas', 1),
(35, 'RABESON', 'Johanne Andréas', 'gy', 1),
(34, 'RABESON ', 'Jovial Ritch', 'Andréas', 0),
(33, 'RABESON ', 'Jovial Ritch', 'Andréas', 0),
(32, 'RABESON', 'Johanne Andréas', 'andreass', 1),
(31, 'RABESON', 'Johanne Andréas', 'andreass', 1),
(30, 'RABESON', 'Jovial Ritchi', 'sdfdsf', 6),
(29, 'RABESON', 'Johanne Andréas', 'sdf', 0),
(28, 'RABESON', 'Johanne Andréas', 'andreas', 0),
(39, 'jhj', 'hjkh', 'giu', 0),
(40, 'RABESON', 'Jovial Ritchi', 'Andréas', 0),
(41, 'RABESON ', 'Johanne Andréas', 'Andréas', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
