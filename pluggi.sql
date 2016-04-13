-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 13 Avril 2016 à 13:22
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `pluggi`
--

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

CREATE TABLE IF NOT EXISTS `billets` (
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `date_creation` datetime NOT NULL,
  `resolu` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `billets`
--

INSERT INTO `billets` (`titre`, `contenu`, `id`, `id_user`, `date_creation`, `resolu`) VALUES
('', 'jj', 1, 6, '2016-03-16 15:01:40', '1'),
('', 'tac', 2, 6, '2016-03-16 18:26:09', '1'),
('Je suis trop cool', 'Et toc =D', 3, 6, '2016-03-18 18:02:18', NULL),
('', 'lll', 4, 6, '2016-03-26 12:12:07', '1'),
('coucou', 'voila', 5, 6, '2016-03-26 12:57:48', NULL),
('jj', 'll', 6, 6, '2016-03-26 12:58:53', NULL),
('b', 'k\r\n', 7, 6, '2016-04-10 12:16:18', NULL),
('voila', 'test', 8, 6, '2016-04-10 12:37:37', NULL),
('', '', 9, 6, '2016-04-10 12:37:56', '1'),
('', '', 10, 6, '2016-04-10 12:38:55', '1'),
('test de helene@test.fr', 'Voila ', 11, 19, '2016-04-13 12:22:03', NULL),
('on test a nouveau', '', 12, 19, '2016-04-13 12:22:39', NULL),
('toujours', '', 13, 19, '2016-04-13 12:22:59', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL,
  `auteur` int(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL,
  `billet` int(11) NOT NULL AUTO_INCREMENT,
  `photo` text NOT NULL,
  `like` int(11) NOT NULL,
  `compteur` int(11) NOT NULL,
  PRIMARY KEY (`billet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `auteur`, `commentaire`, `date_commentaire`, `billet`, `photo`, `like`, `compteur`) VALUES
(0, 0, '', '2016-03-16 18:04:39', 1, '', 0, 0),
(1, 6, 'y', '2016-03-16 18:05:15', 2, '', 0, -1),
(1, 0, 'coucou', '2016-03-16 18:08:08', 3, 'gecko-L.jpg.jpg', 0, 0),
(1, 6, 'Coucou', '2016-03-16 20:00:55', 4, '', 0, 0),
(2, 0, '', '2016-03-18 18:03:00', 5, '002PascalBARIL.jpg', 0, 0),
(2, 6, '', '2016-03-18 18:03:56', 6, '', 0, 0),
(2, 6, '', '2016-03-18 18:05:17', 7, '', 0, 0),
(2, 6, 'kk', '2016-03-18 18:09:18', 8, '', 0, 0),
(3, 6, 'uu', '2016-03-26 12:11:53', 9, '', 0, 0),
(5, 6, 'jj', '2016-03-26 12:58:41', 10, '', 0, 0),
(6, 6, 'jj', '2016-03-26 13:02:38', 11, '', 0, 0),
(7, 6, 'nnn\r\n', '2016-04-13 11:44:30', 12, '', 0, 0),
(10, 6, 'voila', '2016-04-13 11:49:13', 13, '', 0, 8),
(10, 19, 'test ', '2016-04-13 12:21:43', 14, '', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id_page` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_page`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `page`
--

INSERT INTO `page` (`id_page`, `page_name`) VALUES
(1, 'index'),
(2, 'membre'),
(3, 'accueil'),
(4, 'application'),
(5, 'video'),
(6, 'forum'),
(7, 'commentaire_resolu'),
(8, 'commentaires'),
(9, 'recherche_sujet'),
(10, 'nouveau_sujet'),
(11, 'nouveau_sujet_traitement'),
(12, 'commentaires_traitement'),
(13, '');

-- --------------------------------------------------------

--
-- Structure de la table `page_profile`
--

CREATE TABLE IF NOT EXISTS `page_profile` (
  `id_page` int(11) NOT NULL AUTO_INCREMENT,
  `id_profile` int(11) NOT NULL,
  PRIMARY KEY (`id_page`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `page_profile`
--

INSERT INTO `page_profile` (`id_page`, `id_profile`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2);

-- --------------------------------------------------------

--
-- Structure de la table `pluggi_profile`
--

CREATE TABLE IF NOT EXISTS `pluggi_profile` (
  `pluggi_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `pluggi_number` int(11) NOT NULL,
  PRIMARY KEY (`pluggi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `pluggi_profile`
--

INSERT INTO `pluggi_profile` (`pluggi_id`, `user_id`, `pluggi_number`) VALUES
(1, 18, 12),
(2, 17, 3),
(3, 19, 1);

-- --------------------------------------------------------

--
-- Structure de la table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id_profile` int(11) NOT NULL AUTO_INCREMENT,
  `profile_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_profile`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `profile`
--

INSERT INTO `profile` (`id_profile`, `profile_name`) VALUES
(1, 'ALL'),
(2, 'STUDENT'),
(3, 'TEACHER');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id_user`, `name`, `first_name`, `email`, `number`, `password`) VALUES
(1, 'kklklk', 'k', 'helene_sita@hotmail.fr', 0, 'ratata'),
(2, 'k', 'l', 'helene.mazars@isen-lille.fr', 0, 'ratata'),
(3, 'l', 'j', 'g@isen-lille.fr', 0, 'ratata'),
(4, 'k', 'm', 'i@isen-lille.fr', 0, 'ratata'),
(5, 'k', 'm', 'p@isen-lille.fr', 0, 'k'),
(6, 'k', 'm', 'h@isen-lille.fr', 2, 'ratata'),
(7, 'kjlkjlkj', 'l', 'g@isen-lillek.fr', 0, 'u'),
(8, 'f', 'f', 'g@isen-lilled.fr', 12, '"'),
(9, 'h', 'e', '3@i.fr', 3, '3'),
(10, 'h', 'e', 'g3@i.fr', 3, 'k'),
(11, 'e', 'd', 'gz@i.f', 3, 'r'),
(12, 'e', 'd', 'ghz@i.f', 3, 'k'),
(13, 'd', 'f', 'J@t.fr', 3, 'j'),
(14, 'd', 's', 's@i.fr', 3, 'd'),
(15, 'a', 's', 'd@i.fr', 3, 'd'),
(16, 'f', 'e', 're@i.T', 3, 'j'),
(17, 'j', 'e', 'z3@i.fr', 3, '3'),
(18, 'j', 'l', 'ert@i.fr', 12, '"'),
(19, 'MAZARS', 'HÃ©lÃ¨ne', 'helene@test.fr', 1, 'mouton');

-- --------------------------------------------------------

--
-- Structure de la table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_profile` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `user_profile`
--

INSERT INTO `user_profile` (`id_user`, `id_profile`) VALUES
(1, 1),
(2, 1),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
