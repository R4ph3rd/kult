-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 16 juin 2019 à 16:31
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
-- Structure de la table `moi`
--

CREATE TABLE `moi` (
  `profil_username` text NOT NULL,
  `profil_photo` text NOT NULL,
  `profil_type` text NOT NULL,
  `profil_mesevents` text NOT NULL,
  `profil_socials` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `moi`
--

INSERT INTO `moi` (`profil_username`, `profil_photo`, `profil_type`, `profil_mesevents`, `profil_socials`) VALUES
('', '', '', '', ''),
('Gaspard Balthazar', './assets/users/moi/default.svg', 'particulier', '2', 'twitter&&https://twitter.com/r4ph3rd\r\nfacebook&&\r\nlinkedin&&\r\ninstagram&&\r\nweb&&\r\nmail&&contact@raphaelperraud.com\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
