-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 11 avr. 2022 à 09:27
-- Version du serveur :  8.0.28-0ubuntu0.20.04.3
-- Version de PHP : 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `riode_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin_infos`
--

CREATE TABLE `admin_infos` (
  `admin_id` int NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` text NOT NULL,
  `admin_password` text NOT NULL,
  `admin_addtime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admin_infos`
--

INSERT INTO `admin_infos` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_addtime`) VALUES
(1, 'Tunde', 'tunde@gmail.com', '1234', '2022-04-04 10:33:41'),
(2, 'Test', 'test@gmail.com', '1234', '2022-04-04 11:14:15'),
(3, 'dona', 'dona@gmail.com', '1234', '2022-04-04 13:36:10'),
(4, 'Jack', 'jack@gmail.com', '1234', '2022-04-04 15:54:41');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categorie` int NOT NULL,
  `nom_categorie` text NOT NULL,
  `image_categorie` text NOT NULL,
  `date_categorie` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contact_us`
--

CREATE TABLE `contact_us` (
  `id_contact` int NOT NULL,
  `name_contact` text NOT NULL,
  `mail_contact` text NOT NULL,
  `comment_contact` text NOT NULL,
  `comment_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact_us`
--

INSERT INTO `contact_us` (`id_contact`, `name_contact`, `mail_contact`, `comment_contact`, `comment_date`) VALUES
(19, 'Jessamine Rice', 'paxuny@mailinator.com', 'Est expedita velit e', '2022-04-03 15:16:14'),
(18, 'Jamal Love', 'sefuzoviha@mailinator.com', 'Corporis ipsa excep', '2022-04-03 15:13:30'),
(17, 'Brady Welch', 'debi@mailinator.com', 'Nemo ut aut magnam q', '2022-04-03 15:13:23'),
(20, 'Tatyana Woods', 'fukyvysat@mailinator.com', 'Est nobis laboris cu', '2022-04-03 15:17:25'),
(21, 'Uriel Howard', 'jyzep@mailinator.com', 'Enim enim officia de', '2022-04-03 15:19:02'),
(22, 'Jennifer Tate', 'lucakaboge@mailinator.com', 'Enim voluptate velit', '2022-04-03 15:19:34'),
(23, 'Macaulay Montoya', 'moryw@mailinator.com', 'Quia id anim animi ', '2022-04-03 15:29:27'),
(24, 'Rae Bailey', 'zoqata@mailinator.com', 'Consequatur volupta', '2022-04-03 15:30:10'),
(25, 'Renee Mack', 'somohob@mailinator.com', 'Voluptatem sed ex do', '2022-04-03 15:31:31'),
(26, 'Rashad Wyatt', 'kamilukako@mailinator.com', 'In accusamus volupta', '2022-04-03 15:32:05'),
(27, 'Karly Ewing', 'xokozo@mailinator.com', 'Veniam officia ipsa', '2022-04-03 15:32:25'),
(28, 'Byron Jefferson', 'gywevosof@mailinator.com', 'Quae quia in ut sint', '2022-04-05 16:36:07'),
(29, ' Tunde', 'test@gmail.com', 'Griojno', '2022-04-05 18:02:11'),
(30, 'Sheila Rosales', 'wadivi@mailinator.com', 'Fugiat doloribus lab', '2022-04-06 05:41:52'),
(31, 'Jolie Stone', 'wiruravaw@mailinator.com', 'Amet ratione aspern', '2022-04-06 05:42:58');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id_produits` int NOT NULL,
  `nom` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `descriptions` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `taille` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id_produits`, `nom`, `descriptions`, `taille`, `prix`) VALUES
(1, 'Womens\' Blue Fashion Jacket', 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus liberpuro ate vol faucibus adipiscing. Sed lectus te et vulputate aucibus adipiscing. Sed lectus. us adipiscing. Sed lectus.', 'M', 139),
(2, 'Dolore et aute cupid', 'Amet sequi nesciunt', 'L', 12),
(3, 'Dolore et aute cupid', 'Amet sequi nesciunt', 'L', 12),
(4, 'Consectetur incididu', 'Aut ducimus sunt vo', 'SXL', 13),
(5, 'Deleniti consequuntu', 'Ipsum praesentium at', 'XL', 67),
(6, 'Accusantium voluptat', 'Ea qui amet consequ', 'XL', 32143),
(7, 'Laborum eum deserunt', 'Adipisci aut dolor c', 'S', 5567);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `register_id` int NOT NULL,
  `register_name` text NOT NULL,
  `register_email` text NOT NULL,
  `register_password` text NOT NULL,
  `register_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code` varchar(100) NOT NULL,
  `verified` int DEFAULT '0' COMMENT '0 -> non vérifié, 1->vérifié'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`register_id`, `register_name`, `register_email`, `register_password`, `register_date`, `code`, `verified`) VALUES
(43, 'Tunde', 'test@gmail.com', '1234', '2022-04-06 18:02:41', '624dc7b13a2c3', 1),
(44, 'cuquluju@mailinator.com', 'pegelev@mailinator.com', '123456', '2022-04-08 07:45:47', '624fda1b7980c', 0),
(45, 'vacu@mailinator.com', 'jefepuv@mailinator.com', '123456', '2022-04-08 07:46:02', '624fda2aa6d99', 0),
(46, 'hemojab@mailinator.com', 'gorusasoxa@mailinator.com', '123456', '2022-04-08 07:46:07', '624fda2f4d7c2', 0),
(47, 'zytihiqexe@mailinator.com', 'hivi@mailinator.com', '123456', '2022-04-08 07:46:14', '624fda36e51b0', 0),
(48, 'keweqi@mailinator.com', 'pipe@mailinator.com', '123456', '2022-04-08 07:46:51', '624fda5bcc7a7', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin_infos`
--
ALTER TABLE `admin_infos`
  ADD PRIMARY KEY (`admin_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id_produits`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`register_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin_infos`
--
ALTER TABLE `admin_infos`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categorie` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id_contact` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id_produits` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `register_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
