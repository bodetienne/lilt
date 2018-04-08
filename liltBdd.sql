-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 04 avr. 2018 à 11:11
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lilt`
--

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

CREATE TABLE `artiste` (
  `idArtiste` int(11) NOT NULL,
  `nomArtiste` varchar(25) COLLATE utf8_bin NOT NULL,
  `idUtilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `artiste`
--

INSERT INTO `artiste` (`idArtiste`, `nomArtiste`, `idUtilisateur`) VALUES
(11, 'Emma', 31),
(12, 'yoshi', 31),
(13, 'Emma', 32),
(14, 'Maron', 32),
(15, 'Marie', 32),
(16, 'Poula', 32),
(17, 'Jimmy', 32),
(18, 'Me', 32),
(19, 'Cris taxi', 32),
(20, 'Sam Tim', 32),
(21, 'Ed sheeran', 32),
(22, 'Sam smith', 32),
(23, 'Cart', 32),
(24, 'Ariana Grande', 32),
(25, 'Coley', 32);

-- --------------------------------------------------------

--
-- Structure de la table `chanson`
--

CREATE TABLE `chanson` (
  `idChanson` int(11) NOT NULL,
  `nomChanson` varchar(25) COLLATE utf8_bin NOT NULL,
  `tag` varchar(25) COLLATE utf8_bin NOT NULL,
  `fichierMp3` varchar(200) COLLATE utf8_bin NOT NULL,
  `jaime` varchar(1024) COLLATE utf8_bin DEFAULT NULL,
  `idArtiste` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `chanson`
--

INSERT INTO `chanson` (`idChanson`, `nomChanson`, `tag`, `fichierMp3`, `jaime`, `idArtiste`) VALUES
(12, 'Love yourself', 'Pop', 'lecteur/music/Justin Bieber - Love Yourself (Cover by Jasmine Thompson).mp3', '', 11),
(14, 'yo', 'Pop', 'lecteur/music/6 am - J Balvin Ft Farruko.mp3', '', 12),
(15, 'Hot', 'Soul', 'lecteur/music/Drake - Hotline Bling (Audio).mp3', NULL, 11),
(16, 'Bouh', 'No tag', 'lecteur/music/Avicii - For a Better Day (HQ Audio).mp3', NULL, 13),
(17, 'Lily', 'No tag', 'lecteur/music/AaRON-U-Turn (Lili) New version.mp3', NULL, 13),
(18, 'Please', 'Rap', 'lecteur/music/5 Seconds Of Summer - Amnesia.mp3', NULL, 14),
(19, 'wild', 'Rap', 'lecteur/music/Alessia Cara - Wild Things (Official Audio).mp3', NULL, 15),
(20, 'James is in here', 'Reggae', 'lecteur/music/Ariana Grande - Problem ft. Iggy Azalea.mp3', NULL, 16),
(21, 'Cool', 'Rock', 'lecteur/music/Alonzo - Binta .mp3', NULL, 17),
(22, 'You', 'No tag', 'lecteur/music/Alessia Cara - Seventeen (Official Audio).mp3', NULL, 18),
(24, 'Liar liar', 'Party Song', 'lecteur/music/Cris Cab - Liar Liar.mp3', NULL, 19),
(25, 'Lol', 'Sad Songs', 'lecteur/music/Timbaland - Apologize Ft Onerepublic.mp3', NULL, 20),
(26, 'Do your thing', 'Party Songs', 'lecteur/music/Calvin Harris - Summer ( Audio ).mp3', NULL, 15),
(27, 'Perfect', 'Sad Songs', 'lecteur/music/Ed Sheeran - Perfect [Official Audio].mp3', NULL, 21),
(28, 'I\'m not the only one', 'Sad Songs', 'lecteur/music/Sam Smith - I\'m Not The Only One.mp3', NULL, 22),
(29, 'Bomba', 'Rock', 'lecteur/music/Afasi & Filthy - Bomfallarella.mp3', NULL, 23),
(30, 'Focus', 'Soul', 'lecteur/music/Ariana Grande - Focus.mp3', NULL, 24),
(31, 'Bruxelles', 'Reggae', 'lecteur/music/Boulevard des airs - Bruxelles .mp3', NULL, 15),
(32, 'Grenade', 'Sad Songs', 'lecteur/music/Bruno Mars - Grenade (Lyrics).mp3', NULL, 25),
(33, 'Ho hey', 'Reggae', 'lecteur/music/BigFlo et Oli - Comme d\'Hab (Lyrics) Vidéo non-officielle.mp3', NULL, 15);

-- --------------------------------------------------------

--
-- Structure de la table `playlist`
--

CREATE TABLE `playlist` (
  `idPlaylist` int(11) NOT NULL,
  `nomPlaylist` varchar(25) COLLATE utf8_bin NOT NULL,
  `idUtilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `tropheeargent`
--

CREATE TABLE `tropheeargent` (
  `idArgent` int(11) NOT NULL,
  `imageArgent` varchar(25) COLLATE utf8_bin NOT NULL,
  `dateArgent` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `tropheebronze`
--

CREATE TABLE `tropheebronze` (
  `idBronze` int(11) NOT NULL,
  `imageBronze` varchar(25) COLLATE utf8_bin NOT NULL,
  `dateBronze` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `tropheeor`
--

CREATE TABLE `tropheeor` (
  `idOr` int(11) NOT NULL,
  `imageOr` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `dateOr` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUtilisateur` int(11) NOT NULL,
  `nom_utilisateur` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `email_utilisateur` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `mdp_utilisateur` char(100) COLLATE utf8_bin DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `description` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `citation` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `age` decimal(10,0) DEFAULT NULL,
  `follower` decimal(10,0) DEFAULT NULL,
  `following` decimal(10,0) DEFAULT NULL,
  `facebook` varchar(200) COLLATE utf8_bin NOT NULL,
  `instagram` varchar(200) COLLATE utf8_bin NOT NULL,
  `twitter` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtilisateur`, `nom_utilisateur`, `email_utilisateur`, `mdp_utilisateur`, `avatar`, `description`, `citation`, `age`, `follower`, `following`, `facebook`, `instagram`, `twitter`) VALUES
(28, 'marv99', 'emma.herve44@hotmail.fr', '883d18999757720e89720925d885da918401477f', NULL, 'Play piano and sing sometimes', 'Fume la vie avant qu\'elle ne te fume', '18', NULL, NULL, '', '', ''),
(31, 'emma', 'emma.herve@my-digital-school.org', '883d18999757720e89720925d885da918401477f', 'Images/image-profil/Capture.PNG', 'I love pizza', 'Living young and wild and free', '18', NULL, NULL, 'https://www.facebook.com/emma.herve.16', 'https://www.instagram.com/emmahrve/?hl=fr', 'https://twitter.com/EmmaHerve'),
(32, 'emma99', 'emma.herve44@hotmailr', '883d18999757720e89720925d885da918401477f', 'Images/image-profil/pots cactus.jpg', 'Je chante à ma manière', 'Living young and wild and free', '22', NULL, NULL, '', '', ''),
(33, 'le patron', 'lepatron@gmail.com', '05805a4c3e1acc27042d0b14848cd39be92b8bcf', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artiste`
--
ALTER TABLE `artiste`
  ADD PRIMARY KEY (`idArtiste`);

--
-- Index pour la table `chanson`
--
ALTER TABLE `chanson`
  ADD PRIMARY KEY (`idChanson`);

--
-- Index pour la table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`idPlaylist`);

--
-- Index pour la table `tropheeargent`
--
ALTER TABLE `tropheeargent`
  ADD PRIMARY KEY (`idArgent`);

--
-- Index pour la table `tropheebronze`
--
ALTER TABLE `tropheebronze`
  ADD PRIMARY KEY (`idBronze`);

--
-- Index pour la table `tropheeor`
--
ALTER TABLE `tropheeor`
  ADD PRIMARY KEY (`idOr`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUtilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `artiste`
--
ALTER TABLE `artiste`
  MODIFY `idArtiste` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `chanson`
--
ALTER TABLE `chanson`
  MODIFY `idChanson` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `idPlaylist` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tropheeargent`
--
ALTER TABLE `tropheeargent`
  MODIFY `idArgent` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tropheebronze`
--
ALTER TABLE `tropheebronze`
  MODIFY `idBronze` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tropheeor`
--
ALTER TABLE `tropheeor`
  MODIFY `idOr` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
