-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 16 juin 2019 à 16:16
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
-- Structure de la table `messagerie`
--

CREATE TABLE `messagerie` (
  `msg_id` int(11) NOT NULL,
  `msg_username` text NOT NULL,
  `msg_date` date NOT NULL,
  `msg_content` text NOT NULL,
  `msg_userphoto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messagerie`
--

INSERT INTO `messagerie` (`msg_id`, `msg_username`, `msg_date`, `msg_content`, `msg_userphoto`) VALUES
(1, 'Hubert Delabath', '2019-06-11', 'Das von uns verwendete Indische Lemongras ist eine sogenannte Wildsammlung, die in natürlicher Mischkultur wächst und aus Bhutan stammt. Lemongrasöl ist reich an verschiedenen Düften, die beleben und das Hautbild verfeinern.', './assets/users/hubert.jpg'),
(2, 'Jeanne Oseukourt', '2019-06-26', 'Some easings will result in negative values during the animation. Depending on the properties that are being animated, the actual value may be clamped at zero. ', './assets/users/jeanne.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messagerie`
--
ALTER TABLE `messagerie`
  ADD KEY `msg_id` (`msg_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messagerie`
--
ALTER TABLE `messagerie`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
