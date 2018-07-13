-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 16 Février 2018 à 14:41
-- Version du serveur :  5.7.21-0ubuntu0.16.04.1
-- Version de PHP :  7.0.25-0ubuntu0.16.04.1

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
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `ID` int(11) NOT NULL,
  `Nom_Categorie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`ID`, `Nom_Categorie`) VALUES
(6, 'Autre'),
(1, 'Camera'),
(3, 'Micro'),
(2, 'Ordinateur'),
(5, 'Petit_materiel'),
(4, 'TV');

-- --------------------------------------------------------

--
-- Structure de la table `formateurs`
--

CREATE TABLE `formateurs` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `mdp` varchar(20) DEFAULT NULL,
  `rang` varchar(6) DEFAULT NULL,
  `premiere_connexion` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `formateurs`
--

INSERT INTO `formateurs` (`ID`, `Nom`, `Mail`, `mdp`, `rang`, `premiere_connexion`) VALUES
(1, 'BENUCCI_Corine', 'Corine.Salien-Benucci@ac-lyon.fr', 'CBenucci', 'admin', 1),
(3, 'BROCQ_Raphaël', 'Raphael-Jacky-R.Brocq@ac-lyon.fr', 'RBrocq', 'user', 1),
(4, 'DUMAS_Patrick', 'patrick.dumas@ac-lyon.fr', 'PDumas', 'user', 1),
(5, 'FAVEL-KAPOIAN_Valentine', 'valentine.favel-Kapoian@ac-lyon.fr', 'VFavelKapoian', 'user', 1),
(6, 'FAVRAT_Virginie', 'Virginie.Favrat@ac-lyon.fr', 'VFavrat', 'user', 1),
(7, 'FERRE_Kedem', 'kedem.ferre@ac-lyon.fr', 'KFerre', 'user', 1),
(8, 'FRAYSSINET_Cédric', 'cedric.frayssinet@ac-lyon.fr', 'CFrayssinet', 'user', 1),
(10, 'JAMIN_Edwige', 'edwige.jamin@ac-lyon.fr', 'EJamin', 'user', 1),
(11, 'LACOUR_François', 'Francois.Lacour@ac-lyon.fr', 'FLacour', 'user', 1),
(12, 'MARCHAL_Denis', 'denis.marchal@ac-lyon.fr', 'DMarchal', 'user', 1),
(13, 'MERIAUX_Pascal', 'pascal.meriaux@ac-lyon.fr', 'PMeriaux', 'user', 1),
(14, 'NOVALES_Christian', 'Christian.Novales@ac-lyon.fr', 'CNovales', 'user', 1),
(15, 'PACCAUD_Philippe', 'philippe-guy.paccaud@ac-lyon.fr', 'PPaccaud', 'user', 1),
(16, 'RUIVARD_Luc', 'luc.ruivard@ac-lyon.fr', 'LRuivard', 'user', 1),
(17, 'SIMON_Jean-François', 'Jean-Francois.Simon@ac-lyon.fr', 'JFSimon', 'user', 1),
(18, 'VILLENEUVE_Jean-Christophe', 'jean-chris.villeneuve@ac-lyon.fr', 'JCVilleneuve', 'user', 1),
(19, 'DANE_Secrétariat', 'dane@ac-lyon.fr', 'DSecretariat', 'admin', 1),
(29, 'ROLAND_Anna', 'anna.roland@ac-lyon.fr', 'ARoland', 'user', 1),
(31, 'FELGEROLLES_Hervé', 'herve.felgerolles@ac-lyon.fr', 'HFelgerolles', 'admin', 1),
(33, 'GEOFFRAY_Aurelien', 'aurelien.geoffray@ac-lyon.fr', '67f2083b05b', 'admin', 0);

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

CREATE TABLE `materiel` (
  `ID` int(11) NOT NULL,
  `Modele` varchar(255) NOT NULL,
  `Ref` varchar(255) NOT NULL,
  `RefDane` varchar(255) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `emprunte` tinyint(1) NOT NULL DEFAULT '0',
  `Emprunteur` varchar(255) DEFAULT NULL,
  `DateEmprunt` date DEFAULT NULL,
  `DateRetour` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `materiel`
--

INSERT INTO `materiel` (`ID`, `Modele`, `Ref`, `RefDane`, `categorie`, `emprunte`, `Emprunteur`, `DateEmprunt`, `DateRetour`) VALUES
(1, 'Camera Flexible', '', '16CAM04', 'Camera', 0, NULL, NULL, NULL),
(2, 'Camera Panasonic', 'VXF990', '16CAM02', 'Camera', 0, NULL, NULL, NULL),
(3, 'Camera SONY Handycam', 'P024455147', '16CAM01', 'Camera', 0, NULL, NULL, NULL),
(4, 'Chromecast1', '6517103SQD9L', 'CC7', 'Petit_materiel', 0, NULL, NULL, NULL),
(5, 'Chromecast2', '6518103SQD6L', 'CC8', 'Petit_materiel', 0, NULL, NULL, NULL),
(6, 'DONGLE1', '', 'DONGLE01', 'Petit_materiel', 0, NULL, NULL, NULL),
(7, 'DONGLE2', '', 'DONGLE02', 'Petit_materiel', 0, NULL, NULL, NULL),
(8, 'DONGLE3', '', 'DONGLE03', 'Petit_materiel', 0, NULL, NULL, NULL),
(9, 'DONGLE4', '', 'DONGLE04', 'Petit_materiel', 0, NULL, NULL, NULL),
(10, 'Microphone Shotgun', 'CG60', '', 'Micro', 0, NULL, NULL, NULL),
(11, 'Notebook PC', 'GL552VWDM881T', '16PC01', 'Ordinateur', 0, NULL, NULL, NULL),
(12, 'PC HP ProBook 15\'', '5CG6505972', '16HP04', 'Ordinateur', 0, NULL, NULL, NULL),
(13, 'PC HP ProBook 15\'', '5CG650597M', '16HP05', 'Ordinateur', 0, NULL, NULL, NULL),
(14, 'Pied de camera', 'Manfrotto 290xtra', 'PIED01', 'Camera', 0, NULL, NULL, NULL),
(15, 'Pied de camera', 'Vanguard Altra263AP', 'PIED02', 'Camera', 0, NULL, NULL, NULL),
(16, 'Router Power Bank - Hoo Too', 'X000ERE4VD', 'RPB04', 'Autre', 0, NULL, NULL, NULL),
(17, 'Micro cravate1', '', '1', 'Micro', 0, NULL, NULL, NULL),
(18, 'Micro cravate2', '', '2', 'Micro', 0, NULL, NULL, NULL),
(19, 'Micro cravate3', '', '3', 'Micro', 0, NULL, NULL, NULL),
(20, 'Micro cravate4', '', '4', 'Micro', 0, NULL, NULL, NULL),
(21, 'Stereo', 'H2Next', '', 'Autre', 0, NULL, NULL, NULL),
(22, 'TV Apple', '', '', 'TV', 0, NULL, NULL, NULL),
(23, 'TV Sony Bravia', '80cm', '', 'TV', 0, NULL, NULL, NULL),
(24, 'Video Projecteur EPSON', 'portable', '', 'Autre', 0, NULL, NULL, NULL),
(35, 'Micro cravate5', 'Shure', '5', 'Micro', 0, NULL, NULL, NULL),
(36, 'Camera Ricoh360', '', '17CAM03', 'Camera', 0, NULL, NULL, NULL),
(40, 'Pied de camera', 'ManfrottoXpro', 'PIED03', 'Camera', 0, NULL, NULL, NULL),
(41, 'Micro AZDEN', 'SGM-999+i', '17MICRO01', 'Micro', 0, NULL, NULL, NULL),
(50, 'Telecommande Targus1', '', '17TELE01', 'Autre', 0, NULL, NULL, NULL),
(51, 'Telecommande Targus2', '', '17TELE02', 'Autre', 0, NULL, NULL, NULL),
(52, 'Telecommande Targus3', '', '17TELE03', 'Autre', 0, NULL, NULL, NULL),
(54, 'ChromeBook Acer Spin 11 R751T-C8D8_2', 'NXGPZEF00174302DF57600', 'Chromebook02', 'Ordinateur', 0, NULL, NULL, NULL),
(55, 'ChromeBook Acer Spin 11 R751T-C8D8_1', 'NXGPZEF00174302D827600', 'Chromebook01', 'Ordinateur', 0, NULL, NULL, NULL),
(56, 'ChromeBook Acer Spin 11 R751T-C8D8_3', 'NXGPZEF00174302DA27600', 'Chromebook03', 'Ordinateur', 0, NULL, NULL, NULL),
(57, 'ChromeBook Acer Spin 11 R751T-C8D8_4', 'NXGPZEF00174302D577600', 'Chromebook04', 'Ordinateur', 0, NULL, NULL, NULL),
(58, 'ChromeBook Acer Spin 11 R751T-C8D8_5', 'NXGPZEF00174302D897600', 'Chromebook05', 'Ordinateur', 0, NULL, NULL, NULL),
(59, 'ChromeBook Acer Spin 11 R751T-C8D8_6', 'NXGPZEF00174302DF07600', 'Chromebook06', 'Ordinateur', 0, NULL, NULL, NULL),
(60, 'ChromeBook Acer Spin 11 R751T-C8D8_7', 'NXGPZEF00174302D737600', 'Chromebook07', 'Ordinateur', 0, NULL, NULL, NULL),
(61, 'Clef USB 16 Go_1', '', 'USB01', 'Petit_materiel', 0, NULL, NULL, NULL),
(62, 'Clef USB 16 Go_2', '', 'USB02', 'Petit_materiel', 0, NULL, NULL, NULL),
(63, 'Clef USB 16 Go_3', '', 'USB03', 'Petit_materiel', 0, NULL, NULL, NULL),
(64, 'Clef USB 16 Go_4', '', 'USB04', 'Petit_materiel', 0, NULL, NULL, NULL),
(65, 'Clef USB 16 Go_5', '', 'USB05', 'Petit_materiel', 0, NULL, NULL, NULL),
(66, 'Clef USB 16 Go_6', '', 'USB06', 'Petit_materiel', 0, NULL, NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Nom_Categorie` (`Nom_Categorie`);

--
-- Index pour la table `formateurs`
--
ALTER TABLE `formateurs`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Nom` (`Nom`);

--
-- Index pour la table `materiel`
--
ALTER TABLE `materiel`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`),
  ADD KEY `categorie` (`categorie`),
  ADD KEY `Emprunteur` (`Emprunteur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `formateurs`
--
ALTER TABLE `formateurs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `materiel`
--
ALTER TABLE `materiel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `materiel`
--
ALTER TABLE `materiel`
  ADD CONSTRAINT `materiel_ibfk_1` FOREIGN KEY (`Emprunteur`) REFERENCES `formateurs` (`Nom`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
