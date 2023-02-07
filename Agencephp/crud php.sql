-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 07 fév. 2023 à 15:50
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `crud`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id` int(11) NOT NULL,
  `titre` varchar(225) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` varchar(225) NOT NULL,
  `superficie` int(11) NOT NULL,
  `adresse` varchar(225) NOT NULL,
  `montant` decimal(10,0) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id`, `titre`, `image`, `description`, `superficie`, `adresse`, `montant`, `date`, `type`) VALUES
(15, 'doha', 'uploads/T.jpg', 'nouvelle appartement', 70, 'mesnana doha', '1500', '2023-02-04', 'location'),
(16, 'narjis', 'images/image.jpg', 'nouvelle appartement', 100, 'mesnana narjis', '8000', '2023-02-03', 'vente');

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `titre` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `superficie` int(11) NOT NULL,
  `adresse` varchar(225) NOT NULL,
  `montant` decimal(10,0) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`id`, `titre`, `description`, `superficie`, `adresse`, `montant`, `date`, `image`) VALUES
(1, 'hfjhgdqdh', 'jntrhngtutynt', 55, 'hfvhnfuven', '555', '2023-03-03', ''),
(2, 'kjgjhunhungjk', 'jgfkjhiughuifgh', 66, 'kjguiutgguh', '66', '2023-02-17', ''),
(3, '', '', 0, '', '0', '0000-00-00', ''),
(4, 'hfjhgdqdh', 'jhjnfvhrfk', 5, 'hcjhnrjhn', '6', '2023-02-18', ''),
(5, 'hfjhgdqdh', 'HHJJHDJHDFJ', 999, 'hjdhfjhfjhdj', '899', '2023-02-09', ''),
(6, 'GYYTFY', 'IJIJIOJ', 33, 'UHUHH', '55', '2023-02-18', ''),
(7, 'hfjhgdqdh', 'gg', 66, 'HH', '66', '2023-02-18', ''),
(8, 'hfjhgdqdh', 'gg', 66, 'HH', '66', '2023-02-18', ''),
(9, 'hfjhgdqdh', 'GHFDFDDF', 55, 'YFHHJFDHFDG', '666', '2023-02-18', 'img/'),
(10, 'hfjhgdqdh', 'hhjhhjh', 44, 'HJHHHJ', '77', '2023-02-22', 'img/'),
(11, 'hfjhgdqdh', 'GHGHGHG', 66, 'GHFGHFH', '77', '2023-02-16', 'img/'),
(12, 'hfjhgdqdh', 'gfgffffffffff', 66, 'FGGGGGGGGGGGGGG', '88', '2023-02-16', '1675416014.'),
(13, 'kjgjhunhungjk', 'ggggggggggggggggggg', 555, 'FGGGGGGGGGGGGG', '888', '2023-02-18', 'uploads/'),
(14, 'hfjhgdqdh', 'gggggg', 33, 'HHHHHH', '77', '2023-02-14', 'uploads/'),
(15, 'hfjhgdqdh', 'GHHHHHHHH', 88, 'FGGGGGGGGGG', '555', '2023-02-10', 'uploads/');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
