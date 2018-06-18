-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 20 Avril 2017 à 08:34
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `labo_devweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `admins`
--

INSERT INTO `admins` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'Jallet', 'Benoit', 'bjallet@gmail.com', '0b36e58acc0a3c7f807b049c935f3b94');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `texte` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `texte`) VALUES
(9, 'Mettre un site en ligne', '<iframe src="//slides.com/y2school_web/mettre-en-place-un-site-en-ligne/embed" width="100%" height="500" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'),
(6, 'Introduction SQL', '<iframe src="//slides.com/y2school_web/sql/embed" width="100%" height="500" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'),
(7, 'BDD - PDO - Include', '<iframe src="//slides.com/y2school_web/bdd-pdo-include/embed" width="100%" height="500" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'),
(8, 'Framework CSS', '<iframe src="//slides.com/y2school_web/framework-css/embed" width="100%" height="500" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'),
(1, 'HTML', '<iframe src="//slides.com/y2school_web/html/embed" width="100%" height="500" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'),
(2, 'CSS', '<iframe src="//slides.com/y2school_web/css-3/embed" width="100%" height="100%" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'),
(3, 'Introduction à Git', '<iframe src="//slides.com/y2school_web/git/embed" width="100%" height="500" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'),
(4, 'Bases de PHP', '<iframe src="//slides.com/y2school_web/php-bases/embed" width="100%" height="500" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'),
(5, 'Les formulaires', '<iframe src="//slides.com/y2school_web/formulaire/embed" width="100%" height="500" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `commentaire` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_article`, `user`, `commentaire`) VALUES
(31, 8, 'Rémi Mafat', 'J\'avoue que c\'est plus joli que Bootstrap. Mais bon...'),
(30, 2, 'Rémi Mafat', 'Moi j\'utilise déjà Bootstrap bande de noobz ;-)'),
(29, 8, 'Aldric Pouget', 'Eh ouai tête de gland !'),
(28, 4, 'Aldric Pouget', 'Alors là je suis perdu moi.'),
(27, 2, 'Aldric Pouget', 'Mouais....'),
(26, 1, 'Aldric Pouget', 'Carrément !'),
(25, 8, 'Simon Toulouze', 'Ah c\'est ça le cours où j\'étais parti en concert en Allemagne ? Ok... Bon je verrai plus tard !'),
(23, 4, 'Simon Toulouze', 'Je suis un dieu du PHP !!! :-D'),
(24, 5, 'Simon Toulouze', 'Les formulaires ? Ah... mouais...'),
(21, 2, 'Simon Toulouze', 'Moi ce que j\'aime c\'est les jolis CSS. <3'),
(22, 3, 'Simon Toulouze', 'J\'ai rien compris à ce cours. On l\'a fait au moins ?'),
(20, 1, 'Simon Toulouze', 'Trop facile ce cours !!!'),
(32, 7, 'Rémi Mafat', 'Pourquoi on n\'a pas appris ça en cours nous ?'),
(34, 1, 'Benoit Jallet', 'Salut');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'Capot', 'Pauline', 'pcapot@ynov.com', 'ea33803f90c77f6cab6b04f9ef52beb1'),
(2, 'Bourdin', 'Bastien', 'bastien.bourdin@ynov.com', 'e409f05a10574adb8d47dcb631f8e3bb'),
(3, 'Toulouze', 'Simon', 'simon.toulouze@ynov.com', 'b30bd351371c686298d32281b337e8e9'),
(16, 'Mafat', 'Rémi', 'remi.mafat@ynov.com', 'f1067e7173c7b9e6714ec7c88cf04bb1'),
(17, 'Capot', 'Pauline', 'pcapot@ynov.com', 'ea33803f90c77f6cab6b04f9ef52beb1'),
(15, 'Pouget', 'Aldric', 'aldric.pouget@ynov.com', '489e2f8cd846ad4410ab6d85c4515f50');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
