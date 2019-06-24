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
-- Structure de la table `evenements`
--

CREATE TABLE `evenements` (
  `event_id` int(11) NOT NULL,
  `event_titre` text NOT NULL,
  `event_type` int(11) NOT NULL,
  `event_date` date NOT NULL,
  `event_heure` text NOT NULL,
  `event_lieu` text NOT NULL,
  `event_organisateur` text NOT NULL,
  `event_public` int(11) NOT NULL,
  `event_tags` text NOT NULL,
  `event_prix` float NOT NULL,
  `event_description` text NOT NULL,
  `event_image` text NOT NULL,
  `event_fav` int(11) NOT NULL,
  `my_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`event_id`, `event_titre`, `event_type`, `event_date`, `event_heure`, `event_lieu`, `event_organisateur`, `event_public`, `event_tags`, `event_prix`, `event_description`, `event_image`, `event_fav`, `my_event`) VALUES
(1, 'La vie en prose', 1, '2019-06-01', '20:50', 'Crucible', 'jean delatouche', 3, 'théâtre&improvisation', 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.', '/assets/events/rock.jpg', 1, 0),
(2, 'levez-vous', 1, '2019-06-02', '19:00', 'salle des fêtes, Grêges', 'matthieu blomet', 4, 'humour&stand-up', 4, '\nUt velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus aliquam, nunc turpis ullamcorper nibh, in tempus sapien eros vitae ligula. Pellentesque rhoncus nunc et augue. Integer id felis. Curabitur aliquet pellentesque diam. Integer quis metus vitae elit lobortis egestas. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi vel erat non mauris convallis vehicula. Nulla et sapien. Integer tortor tellus, aliquam faucibus, convallis id, congue eu, quam. Mauris ullamcorper felis vitae erat. Proin feugiat, augue non elementum posuere, metus purus iaculis lectus, et tristique ligula justo vitae magna.', '/assets/events/stand-up.jpg', 0, 0),
(3, 'les dames du chateau', 1, '2019-06-12', '19:30', 'salle De Funès, Fontenilles', 'anne bernadou', 4, 'théâtre&classique', 6, 'Aliquam convallis sollicitudin purus. Praesent aliquam, enim at fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean suscipit nulla in justo. Suspendisse cursus rutrum augue. Nulla tincidunt tincidunt mi. Curabitur iaculis, lorem vel rhoncus faucibus, felis magna fermentum augue, et ultricies lacus lorem varius purus. Curabitur eu amet.', 'assets/events/castle.jpg', 1, 0),
(6, 'atelier créatif', 0, '2019-06-19', '20:00', 'Salle commune, Fontenilles', 'Michel Delpuech', 4, 'art&sculpture', 0, 'C\'est super trop cool, on fait des trucs et des choses. On s\'amuse à fond les ballons, c\'est vraiment l\'éclate. On fait parfois des goûters tous ensembles, et on grignote régulièrement. Il nous arrive aussi de parler, et dialoguer entre participants.', './assets/events/default.jpg', 1, 0),
(14, 'sporose', 1, '2019-06-05', '19:25', 'Soisson', 'Christian Draque', 3, 'Danse contemporaine', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', './assets/events/sporose.jpg', 1, 0),
(15, 'brise-vent', 1, '2019-06-30', '21:00', 'Crucible', 'Elise Fonti', 4, 'musique&pop', 12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', './assets/events/brise-vent.jpg', 1, 0),
(16, 'levez-vous', 0, '2019-07-16', '20:00', 'gymnase Lafrenière, Estarvielle', 'Julien Castillon', 2, 'stand-up&humour', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', './assets/events/levez-vous.jpg', 1, 1),
(17, 'zbradaraldjan', 0, '2019-07-03', '16:00', 'Ecole de musique, Bordères', 'Eric Chevron', 1, 'Eveil&comédie', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis teur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', './assets/events/zbradaraldjan.jpg', 1, 0),
(18, '36e dessous', 1, '2019-07-06', '20:30', 'Le Quattorza, Génos', 'Les Fumigènes', 4, 'danse&théâtre', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', './assets/events/36e_dessous.jpg', 0, 0),
(19, 'improvisation théâtrale', 0, '2019-07-09', '21:00', 'salle festive, Padoue', 'Marie Lambert', 2, 'improvisation&théâtre', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dosint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', './assets/events/improtheatrale.jpg', 0, 0),
(20, 'blues d\'un soir', 0, '2019-06-30', '22:00', 'Vieux Pigeonnier, Fontenilles', 'Louis de Funis', 3, 'musique&blues', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in ent, sunt in culpa qui officia deserunt mollit anim id est laborum', './assets/events/bluesdunsoir.jpg', 0, 0),
(21, 'speech\'up', 0, '2019-07-11', '20:00', 'salle commune, plaisance', 'Mathilde Cagnard', 4, 'prise de parole&humour', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', './assets/events/speech-up.jpg', 0, 0),
(22, 'mysantropia', 1, '2019-07-17', '21:20', 'Cinéma Utopia, Tournefeuille', 'Marc Serré', 2, 'humour&théâtre', 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', './assets/events/mysantropia.jpg', 1, 0),
(23, 'La pêche aux moules', 1, '2019-07-03', '05:00', 'Toulouse', 'moi', 4, 'théâtre', 0, 'Une super description d ateliertropgéniale', './assets/events/default1.jpg', 0, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`event_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
