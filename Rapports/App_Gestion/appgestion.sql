-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 30 Mai 2017 à 15:33
-- Version du serveur :  5.7.18-0ubuntu0.16.04.1
-- Version de PHP :  7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `appgestion`
--

-- --------------------------------------------------------

--
-- Structure de la table `formateurs`
--

CREATE TABLE `formateurs` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `formateurs`
--

INSERT INTO `formateurs` (`ID`, `Nom`, `Mail`) VALUES
(1, 'BENUCCI_Corine', 'Corine.Salien-Benucci@ac-lyon.fr'),
(4, 'DUMAS_Patrick', 'patrick.dumas@ac-lyon.fr'),
(2, 'GUILLERM_Vincent', 'Vincent.Guillerm@ac-lyon.fr'),
(3, 'BROCQ_Raphaël', 'Raphael-Jacky-R.Brocq@ac-lyon.fr'),
(5, 'FAVEL-KAPOIAN_Valentine', 'valentine.favel-Kapoian@ac-lyon.fr'),
(6, 'FAVRAT_Virginie', 'Virginie.Favrat@ac-lyon.fr'),
(7, 'FERRE_Kedem', 'kedem.ferre@ac-lyon.fr'),
(8, 'FRAYSSINET_Cédric', 'cedric.frayssinet@ac-lyon.fr'),
(9, 'GANNE_Carine', 'carine.ganne@ac-lyon.fr'),
(10, 'JAMIN_Edwige', 'edwige.jamin@ac-lyon.fr'),
(11, 'LACOUR_François', 'Francois.Lacour@ac-lyon.fr'),
(12, 'MARCHAL_Denis', 'denis.marchal@ac-lyon.fr'),
(13, 'MERIAUX_Pascal', 'pascal.meriaux@ac-lyon.fr'),
(14, 'NOVALES_Christian', 'Christian.Novales@ac-lyon.fr'),
(15, 'PACCAUD_Philippe', 'philippe-guy.paccaud@ac-lyon.fr'),
(16, 'RUIVARD_Luc', 'luc.ruivard@ac-lyon.fr'),
(17, 'SIMON_Jean-François', 'Jean-Francois.Simon@ac-lyon.fr'),
(18, 'VILLENEUVE_Jean-Christophe', 'jean-chris.villeneuve@ac-lyon.fr');

-- --------------------------------------------------------

--
-- Structure de la table `materiel_libre`
--

CREATE TABLE `materiel_libre` (
  `ID` int(11) NOT NULL,
  `Modele` varchar(255) NOT NULL,
  `Ref` varchar(255) NOT NULL,
  `RefDane` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `materiel_libre`
--

INSERT INTO `materiel_libre` (`ID`, `Modele`, `Ref`, `RefDane`) VALUES
(1, 'Camera Flexible', '', ''),
(2, 'Camera Panasonic', 'VXF990', '16CAM02'),
(3, 'Camera SONY Handycam', 'P024455147', '16CAM01'),
(4, 'Chromecast1', '6517103SQD9L', 'CC7'),
(5, 'Chromecast2', '6518103SQD6L', 'CC8'),
(6, 'DONGLE1', '', 'DONGLE01'),
(7, 'DONGLE2', '', 'DONGLE02'),
(8, 'DONGLE3', '', 'DONGLE03'),
(9, 'DONGLE4', '', 'DONGLE04'),
(10, 'Microphone Shotgun', 'CG60', ''),
(11, 'Notebook PC', 'GL552VWDM881T', '16PC01'),
(12, 'PC HP ProBook 15\'', '5CG6505972', '16HP04'),
(13, 'PC HP ProBook 15\'', '5CG650597M', '16HP05'),
(14, 'Pied de camera', 'Manfrotto 290xtra', 'PIED01'),
(15, 'Pied de camera', 'Vanguard Altra263AP', 'PIED02'),
(16, 'Router Power Bank - Hoo Too', 'X000ERE4VD', 'RPB04'),
(17, 'Micro cravate1', '', '1'),
(18, 'Micro cravate2', '', '2'),
(19, 'Micro cravate3', '', '3'),
(20, 'Micro cravate4', '', '4'),
(21, 'Stereo', 'H2Next', ''),
(22, 'TV Apple', '', ''),
(23, 'TV Sony Bravia', '80cm', ''),
(24, 'Video Projecteur EPSON', 'portable', '');

-- --------------------------------------------------------

--
-- Structure de la table `materiel_pris`
--

CREATE TABLE `materiel_pris` (
  `ID` int(11) NOT NULL,
  `Modele` varchar(255) NOT NULL,
  `Ref` varchar(255) NOT NULL,
  `RefDane` varchar(255) NOT NULL,
  `Emprunteur` varchar(255) NOT NULL,
  `DateEmprunt` date NOT NULL,
  `DateRetour` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `materiel_pris`
--

INSERT INTO `materiel_pris` (`ID`, `Modele`, `Ref`, `RefDane`, `Emprunteur`, `DateEmprunt`, `DateRetour`) VALUES
(1, 'Camera Flexible', '', '', 'Moi', '2017-05-22', '2017-05-23');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `formateurs`
--
ALTER TABLE `formateurs`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `materiel_libre`
--
ALTER TABLE `materiel_libre`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `formateurs`
--
ALTER TABLE `formateurs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `materiel_libre`
--
ALTER TABLE `materiel_libre`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
