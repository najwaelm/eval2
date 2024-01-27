-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 26 jan. 2024 à 15:13
-- Version du serveur :  8.0.35-0ubuntu0.20.04.1
-- Version de PHP : 8.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `module6`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int NOT NULL,
  `prenom` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `cv` text COLLATE utf8mb4_general_ci NOT NULL,
  `dt_naissance` date NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `dt_mis_a_jour` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `prenom`, `nom`, `email`, `cv`, `dt_naissance`, `isAdmin`, `dt_mis_a_jour`) VALUES
(1, 'Najwa', 'EL MERNISSI', 'najwaelmernissi@gmail.com', 'hahahahahahhahahahaha', '1996-03-25', 1, '2024-01-26 15:01:38'),
(2, 'Djidji', 'Louni', 'djidji.louni@gmail.com', 'Djidji baby baby', '1989-08-02', 1, '2024-01-26 15:03:23'),
(3, 'Hadjer', 'Soumar', 'hadjer.soumar@gmail.com', 'FAUX FAUX FAUX!!!!\r\n', '2021-05-28', 1, '2024-01-26 15:04:10'),
(4, 'Marizia', 'Gomez', 'marizia.gomez@gmail.com', 'lovely lovely!!!', '1970-12-17', 0, '2024-01-26 15:04:58'),
(5, 'Namjoon', 'Kim', 'namjoon.kim@naver.kr', 'rm', '1994-09-12', 0, '2024-01-26 15:06:23'),
(6, 'Jimin', 'Park', 'jimin.park@naver.kr', 'hihihi', '1995-04-03', 0, '2024-01-26 15:07:02'),
(7, 'Taehyung', 'Kim', 'taehyung.kim@naver.kr', 'hahaha', '1995-12-30', 0, '2024-01-26 15:08:28'),
(8, 'Jungkook', 'Jeong', 'jungkook.jeong@naver.kr', 'yoyoyo', '1997-09-24', 0, '2024-01-26 15:08:28'),
(9, 'jin', 'kim', 'jin.kim@naver.kr', 'hihihihi', '1991-12-17', 0, '2024-01-26 15:09:42'),
(10, 'yongi', 'min', 'yongi.min@naver.kr', 'yoyoyoyooyyo', '1993-09-24', 0, '2024-01-26 15:09:42');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
