-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 02 juin 2019 à 14:38
-- Version du serveur :  8.0.15
-- Version de PHP :  7.2.17

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
-- Structure de la table `ev_cards`
--

CREATE TABLE `ev_cards` (
  `titre` text NOT NULL,
  `type` int(11) NOT NULL,
  `date` date NOT NULL,
  `heure` text NOT NULL,
  `lieu` text NOT NULL,
  `organisateur` text NOT NULL,
  `public` int(11) NOT NULL,
  `tags` text NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `ev_cards`
--

INSERT INTO `ev_cards` (`titre`, `type`, `date`, `heure`, `lieu`, `organisateur`, `public`, `tags`, `prix`) VALUES
('la vie est un caillou', 1, '2019-06-01', '20:50', 'crucible', 'jean delatouche', 3, 'théâtre&improvisation', 8),
('levez-vous', 1, '2019-06-02', '19:00', 'salle des fêtes, Grêges', 'matthieu blomet', 4, 'humour&stand-up', 4),
('les dames du chateau', 1, '2019-06-12', '19:30', 'salle De Funès, Fontenilles', 'anne bernadou', 4, 'théâtre&classique', 6),
('pipistrelle', 1, '2019-06-24', '18:00', 'salle festive, Frouzins', 'michel delon', 2, 'contemporain', 12);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
