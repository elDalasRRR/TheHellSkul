-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 29 Novembre 2018 à 22:27
-- Version du serveur :  5.7.24-0ubuntu0.18.04.1
-- Version de PHP :  7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `thefacebook`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `member_since` varchar(255) DEFAULT NULL,
  `last_update` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `home_town` varchar(255) DEFAULT NULL,
  `high_school` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `screenname` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `looking_for` varchar(255) DEFAULT NULL,
  `interested_in` varchar(255) DEFAULT NULL,
  `relationship` varchar(255) DEFAULT NULL,
  `political_view` varchar(255) DEFAULT NULL,
  `interests` varchar(255) DEFAULT NULL,
  `favourite_music` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `member_since`, `last_update`, `status`, `sex`, `birthday`, `home_town`, `high_school`, `password`, `screenname`, `mobile`, `looking_for`, `interested_in`, `relationship`, `political_view`, `interests`, `favourite_music`, `picture`) VALUES
(1, 'dupont@example.com', 'Dupont', '04/04/2004', '05/05/2005', 'Sinlge', 'Male', NULL, 'Paris', 'Carnot', 'secret', 'dupont', '5551234', 'Friendship', 'Woman', 'Single', 'Democrat', 'Computer Science', 'Hip Hop', NULL),
(2, 'durand@example.com', 'Durand', '04/04/2004', '05/05/2005', 'Student', 'Male', NULL, 'Paris', 'Carnot', 'secret', 'durand', '5551234', 'Friendship', 'Woman', 'Single', 'Democrat', 'Reading', 'Hip Hop', NULL),
(3, 'zuck@facebook.com', 'Mark Zuckerberg', '04/04/2004', '05/05/2005', 'Student', 'Male', '14/05/1984', 'San Francisco, CA', 'MIT', 'thefakebook', 'zuck', '5551234', 'Friendship', 'Woman', 'Single', 'Liberal', 'Traveling, Reading', 'Hip Hop', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
