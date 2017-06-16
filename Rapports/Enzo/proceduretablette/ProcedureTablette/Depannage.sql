-- phpMyAdmin SQL Dump
-- version 4.6.4deb1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 23 Mai 2017 à 16:29
-- Version du serveur :  5.7.18-0ubuntu0.16.10.1
-- Version de PHP :  7.0.15-0ubuntu0.16.10.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Depannage`
--

-- --------------------------------------------------------

--
-- Structure de la table `Tablette`
--

CREATE TABLE `Tablette` (
  `id` int(5) NOT NULL,
  `titre` char(40) NOT NULL,
  `RNE` varchar(12) NOT NULL,
  `etablissement` char(30) NOT NULL,
  `Type de matériel` varchar(20) NOT NULL,
  `probleme` text NOT NULL,
  `resolution` text NOT NULL,
  `commentaire` text,
  `etat` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Tablette`
--

INSERT INTO `Tablette` (`id`, `titre`, `RNE`, `etablissement`, `Type de matériel`, `probleme`, `resolution`, `commentaire`, `etat`) VALUES
(1, 'Pronote hs', '', 'college georges charpack', '', 'Lors de louverture de pronote, page blanche', 'connecter la tablette en wifi', 'ras', 'résolu'),
(2, 'Wizbee ecran noir', '', 'College Val d\'Argent', '', 'Un écran noir apparait lors de l\'ouverture de wizbee', '', '', 'en cours'),
(3, 'Clavier hs', '', 'Collège Val d\'Argent', '', 'Manque de touches sur un clavier', 'Remplacement du clavier', NULL, 'résolu'),
(4, 'test1', '', 'test1', '', 'test1', 'test1', NULL, 'en cours'),
(5, 'test1', '', 'test1', '', 'test1', 'test1', NULL, 'en cours'),
(6, 'test1', '', 'test1', '', 'test1', 'test1', NULL, 'en cours'),
(7, 'test1', '', 'test1', '', 'test1', 'test1', NULL, 'en cours'),
(8, 'test1', '', 'test1', '', 'test1', 'test1', NULL, 'en cours'),
(9, 'test1', '', 'test1', '', 'test1', 'test1', NULL, 'en cours'),
(10, 'test1', '', 'test1', '', 'test1', 'test1', NULL, 'en cours'),
(11, 'test1', '', 'test1', '', 'test1', 'test1', NULL, 'en cours'),
(12, 'test1', '', 'test1', '', 'test1', 'test1', NULL, 'en cours'),
(13, 'test1', '', 'test1', '', 'test1', 'test1', NULL, 'en cours'),
(14, 'test1', '', 'test1', '', 'test1', 'test1', NULL, 'en cours'),
(15, 'test1', '', 'test1', '', 'test1', 'test1', NULL, 'en cours'),
(16, 'test1', '', 'test1', '', 'test1', 'test1', NULL, 'en cours'),
(17, 'test1', '', 'test1', '', 'test1', 'test1', NULL, 'en cours'),
(18, 'test1', '', 'test1', '', 'test1', 'test1', NULL, 'en cours'),
(19, 'test1', '', 'test1', '', 'test1', 'test1', NULL, 'en cours'),
(20, 'test1', '', 'test1', '', 'test1', 'test1', NULL, 'en cours'),
(21, 'test1', '', 'test1', '', 'test1', 'test1', NULL, 'en cours'),
(22, 'test1', '', 'test1', '', 'test1', 'test1', NULL, 'en cours'),
(23, 'test1', '', 'test1', '', 'test1', 'test1', NULL, 'en cours'),
(24, 'test1', '', 'test1', '', 'test1', 'test1', NULL, 'en cours');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Tablette`
--
ALTER TABLE `Tablette`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Tablette`
--
ALTER TABLE `Tablette`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
