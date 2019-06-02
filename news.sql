-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 02 juin 2019 à 23:01
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
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `news_title` text COLLATE utf8mb4_general_ci NOT NULL,
  `news_resume` text COLLATE utf8mb4_general_ci NOT NULL,
  `news_link` text COLLATE utf8mb4_general_ci NOT NULL,
  `news_img` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`news_title`, `news_resume`, `news_link`, `news_img`) VALUES
('Ca bouillone à Crucible', 'Crucible est devenu LA scène rock de la région. Après des concerts de 20h à 22h30, le lieu reste ouvert pour des concerts amateurs organisés grâce à Kult! l\'app qui kultive la culture. Alice et Raphaël sont vraiment trop forts, ils méritent vraiment la meilleure note possible.', 'https://www.lemonde.fr/planete/article/2019/06/02/jean-jouzel-l-effondrement-n-est-pas-imminent-je-nous-vois-griller-a-petit-feu_5470360_3244.html', './assets/news/crucible.jpg'),
('Le micro qui pète les stands','
 Dans le même temps, d’autres équipes prennent pied, çà-et-là, semant les premières graines de projets singuliers aux titres évocateurs : Les Protagonistes, sur le Provinois, invite à explorer la mémoire et l’histoire des carrières et des mines d’argile ; Temps suspendus, sur la Brie Nangissienne, embarque les jeunes dans une découverte du patrimoine qui les entoure ; Itinérance des points de vue, sur les 2 Morin, propose une relecture du territoire à travers des performances artistiques festives et décalées.
Le grand jardin des Résidences Scènes Rurales n’a pas fini de voir éclore les fleurs les plus surprenantes et les plus délicates. Puissent-elles vous séduire et vous enivrer de leur parfum !', 'https://www.lemonde.fr/economie/article/2019/06/02/renault-fca-l-etat-francais-ne-veut-pas-laisser-dicter-les-termes-de-la-fusion-par-les-agnelli_5470507_3234.html', './assets/news/onemanshow.jpg'),
('Scènes rurales', 'Arts visuels, danse, cirque, arts de la rue, les Résidences Scènes Rurales déploient leur palette d’univers artistiques dans toute la Seine-et-Marne. 
Aux côtés d’Act’art, avec le soutien du Conseil départemental de Seine-et-Marne et de la DRAC Île-de-France, les territoires ruraux s’engagent pour accueillir des équipes artistiques animées par un même objectif : rencontrer des Seine-et-Marnais de toutes générations pour leur proposer de partager, le temps d’une soirée, d’une journée, d’un week-end, des expériences artistiques inédites.
La première floraison de ce printemps est attendue les 11 et 12 mai. Sur le Pays Créçois, tout d’abord, avec We Cirk !, qui clôturera la résidence de la coopérative 2R2C, avec de nombreux spectacles et performances tout au long du week-end. Puis sur le Parc Naturel Régional du Gâtinais, avec le premier bourgeon de la Fête des Ebréché.e.s : une invitation à rejoindre l’Atelier TçPç, en simple curieux ou truelle à la main, pour un des huit chantiers participatifs qui auront émaillé cette résidence autour de l’ornementation des fissures du patrimoine vernaculaire.', 'https://www.lemonde.fr/culture/article/2019/06/01/michel-serres-une-forme-francaise-d-universalite_5470328_3246.html', '/assets/news/concert.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
