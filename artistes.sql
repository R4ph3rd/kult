-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 24 juin 2019 à 20:19
-- Version du serveur :  10.3.12-MariaDB
-- Version de PHP :  7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `kult`
--

-- --------------------------------------------------------

--
-- Structure de la table `artistes`
--

CREATE TABLE `artistes` (
  `artiste_name` text NOT NULL,
  `artiste_photo` text NOT NULL,
  `artiste_tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `artistes`
--

INSERT INTO `artistes` (`artiste_name`, `artiste_photo`, `artiste_tags`) VALUES
('Sanioloco', './assets/artistes/sanioloco.jpg', 'Humour&stand-up'),
('René Coty', './assets/artistes/coty.jpg', 'Danse'),
('Louise Cartier', './assets/artistes/louise_cartier.jpg', 'Danse'),
('Masse Ponk', './assets/artistes/massive_ponk.jpg', 'musique&métal'),
('Yseult Martel', './assets/artistes/yseult_martel.jpg', 'musique&pop'),
('Orson McGregor', './assets/artistes/orso_mcgregor.jpg', 'théâtre&impro'),
('Hubert de Labath', './assets/artistes/oss.jpg', 'Humour&stand-up'),
('Mélissandre Jabert', './assets/artistes/melissandre_jabert.jpg', 'stand-up'),
('Blossom', './assets/artistes/blossom.jpg', 'Comédie'),
('Yolande Artois', './assets/artistes/yolande_artois.jpg', 'théâtre'),
('Karadoc', './assets/artistes/karadoc.jpg', 'Théâtre');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
