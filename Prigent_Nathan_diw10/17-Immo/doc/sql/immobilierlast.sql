-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 02 nov. 2018 à 17:29
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
-- Base de données :  `immobilier`
--

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

CREATE TABLE `logement` (
  ` id_logement` int(11) NOT NULL,
  `titre` varchar(45) DEFAULT NULL,
  `adresse` varchar(45) DEFAULT NULL,
  `ville` varchar(45) DEFAULT NULL,
  `cp` varchar(45) DEFAULT NULL,
  `surface` varchar(45) DEFAULT NULL,
  `prix` varchar(45) DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `logement`
--

INSERT INTO `logement` (` id_logement`, `titre`, `adresse`, `ville`, `cp`, `surface`, `prix`, `photo`, `type`, `description`) VALUES
(18, 'La belle barak', 'La rue ou il y a la maison', 'La ville', '59410', '42', '45', 'img/maison/immo3.jpg', '1', 'Buisson, Au dernier étage d\'une résidence de standing, appartement 2 chambres de 97 m2 habitables. Il se compose d\'un beau séjour avec '),
(19, 'La belle barak', 'La rue ou il y a la maison', 'La ville', '59410', '42', '45', 'img/maison/immo4.jpg', '1', 'ST MAUR   Aux pieds du tram et des commerces, résidence avec ascenseur, magnifique appartement T4 de 150 m2 environ, c'),
(20, 'Une maison', '45 rue des données', 'Leberg', '59610', '456', '123000', 'img/maison/immo5.jpg', '1', 'Exclusivité, Dans une résidence récente et sécurisée (accès aux personnes à mobilité réduite), étage élevé pour cet appartement F4 de 118 m2 habitables.'),
(21, 'La belle barak', '45 rue des données', 'Leberg', '59610', '789', '522', 'img/maison/immo5.jpg', 'Appartement', 'dence avec ascenseur, magnifique appartement T4 de 150 m2 environ, comprenant une vaste pièce de vie très lumineuse, cuisine équipée, '),
(22, 'La belle barak', 'La rue ou il y a la maison', 'La ville', '59410', '789', '45', 'img/maison/immo4.jpg', 'Appartement', 'dence avec ascenseur, magnifique appartement T4 de 150 m2 environ, comprenant une vaste pièce de vie très lumineuse, cuisine équipée, ');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `logement`
--
ALTER TABLE `logement`
  ADD PRIMARY KEY (` id_logement`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `logement`
--
ALTER TABLE `logement`
  MODIFY ` id_logement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
