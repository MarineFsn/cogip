-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 13 juil. 2023 à 15:15
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cogip`
--

-- --------------------------------------------------------

--
-- Structure de la table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type_id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `tva` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `companies`
--

INSERT INTO `companies` (`id`, `name`, `type_id`, `country`, `tva`, `created_at`, `updated_at`) VALUES
(1, 'Raviga', 2, 'United States', 'US456 654 321', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(2, 'Dunder Mifflin', 1, 'United States', 'US676 787 767', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(3, 'Pierre Cailloux', 2, 'France', 'FR676 676 676', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(4, 'Belgalol', 2, 'Belgium', 'BE0987 876 787', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(5, 'Jouet Jean-Michel', 1, 'France', 'FR 787 776 999', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(6, 'ABC Company', 2, 'United States', 'US123 456 789', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(7, 'Globex Corporation', 1, 'United States', 'US987 654 321', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(8, 'Les Fromages', 2, 'France', 'FR765 432 109', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(9, 'Swiss Watches', 1, 'Switzerland', 'SW765 432 109', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(10, 'Auto Italia', 2, 'Italy', 'IT654 321 098', '2023-07-04 00:00:00', '2023-07-04 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `company_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `company_id`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Peter Gregory', 1, 'peter.gregory@raviga.com', '555-4567', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(2, 'Cameron How', 2, 'cam.how@mifflin.net', '555-8765', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(3, 'Gavin Belson', 3, 'gavin@cailloux.com', '555-6354', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(4, 'Jian Yang', 5, 'Jian.Yan@jouet.com', '555-8764', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(5, 'Bertram Gilfoyle', 4, 'gilfoy@belgalol.be', '555-5434', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(6, 'John Smith', 1, 'john.smith@example.com', '555-1234', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(7, 'Jane Doe', 1, 'jane.doe@example.com', '555-4321', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(8, 'Michael Johnson', 1, 'michael.johnson@example.com', '555-5678', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(9, 'Sophie Martin', 2, 'sophie.martin@example.com', '555-8765', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(10, 'Emma Dubois', 2, 'emma.dubois@example.com', '555-7890', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(11, 'Thomas Leroy', 2, 'thomas.leroy@example.com', '555-2345', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(12, 'Marco Rossi', 3, 'marco.rossi@example.com', '555-5432', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(13, 'Giulia Bianchi', 3, 'giulia.bianchi@example.com', '555-9876', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(14, 'Lorenzo Ferrari', 3, 'lorenzo.ferrari@example.com', '555-8765', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(15, 'David Müller', 4, 'david.muller@example.com', '555-3456', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(16, 'Sabine Fischer', 4, 'sabine.fischer@example.com', '555-8901', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(17, 'Mark Weber', 4, 'mark.weber@example.com', '555-6789', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(18, 'Oliver Wilson', 5, 'oliver.wilson@example.com', '555-1234', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(19, 'Sophia Adams', 5, 'sophia.adams@example.com', '555-4321', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(20, 'William Johnson', 5, 'william.johnson@example.com', '555-5678', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(21, 'Isabella Thompson', 6, 'isabella.thompson@example.com', '555-8765', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(22, 'James Harris', 6, 'james.harris@example.com', '555-7890', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(23, 'Charlotte Martinez', 6, 'charlotte.martinez@example.com', '555-2345', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(24, 'Benjamin Scott', 7, 'benjamin.scott@example.com', '555-5432', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(25, 'Amelia Green', 7, 'amelia.green@example.com', '555-9876', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(26, 'Daniel Lee', 7, 'daniel.lee@example.com', '555-8765', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(27, 'Emily Turner', 8, 'emily.turner@example.com', '555-3456', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(28, 'Henry Clark', 8, 'henry.clark@example.com', '555-8901', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(29, 'Grace Walker', 8, 'grace.walker@example.com', '555-6789', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(30, 'Alexander Evans', 9, 'alexander.evans@example.com', '555-1234', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(31, 'Mia Hill', 9, 'mia.hill@example.com', '555-4321', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(32, 'Sebastian Wright', 9, 'sebastian.wright@example.com', '555-5678', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(33, 'Emma Lewis', 10, 'emma.lewis@example.com', '555-8765', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(34, 'Joseph Turner', 10, 'joseph.turner@example.com', '555-7890', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(35, 'Victoria Mitchell', 10, 'victoria.mitchell@example.com', '555-2345', '2023-07-04 00:00:00', '2023-07-04 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `id_company` int(11) NOT NULL,
  `due_date` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `invoices`
--

INSERT INTO `invoices` (`id`, `ref`, `id_company`, `due_date`, `created_at`, `updated_at`) VALUES
(1, 'F20220915-001', 5, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(2, 'F20220915-002', 2, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(3, 'F20220915-003', 3, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(4, 'F20220915-004', 4, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(5, 'F20220915-005', 1, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(6, 'F20220915-006', 10, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(7, 'F20220915-007', 1, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(8, 'F20220915-008', 1, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(9, 'F20220915-009', 1, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(10, 'F20220915-010', 2, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(11, 'F20220915-011', 2, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(12, 'F20220915-012', 2, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(13, 'F20220915-013', 3, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(14, 'F20220915-014', 3, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(15, 'F20220915-015', 3, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(16, 'F20220915-016', 4, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(17, 'F20220915-017', 4, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(18, 'F20220915-018', 4, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(19, 'F20220915-019', 5, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(20, 'F20220915-020', 5, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(21, 'F20220915-021', 5, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(22, 'F20220915-022', 6, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(23, 'F20220915-023', 6, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(24, 'F20220915-024', 6, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(25, 'F20220915-025', 6, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(26, 'F20220915-026', 7, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(27, 'F20220915-027', 7, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(28, 'F20220915-028', 7, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(29, 'F20220915-029', 7, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(30, 'F20220915-030', 8, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(31, 'F20220915-031', 8, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(32, 'F20220915-032', 8, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(33, 'F20220915-033', 8, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(34, 'F20220915-034', 9, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(35, 'F20220915-035', 9, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(36, 'F20220915-036', 9, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(37, 'F20220915-037', 9, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(38, 'F20220915-038', 10, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(39, 'F20220915-039', 10, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(40, 'F20220915-040', 10, '2023-07-20 00:00:00', '2023-07-04 00:00:00', '2023-07-04 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'create', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(2, 'update', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(3, 'delete', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(4, 'read', '2023-07-04 00:00:00', '2023-07-04 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(2, 'moderator', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(3, 'user', '2023-07-04 00:00:00', '2023-07-04 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `roles_permission`
--

CREATE TABLE `roles_permission` (
  `id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `roles_permission`
--

INSERT INTO `roles_permission` (`id`, `permission_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 1, 2),
(6, 4, 2),
(7, 4, 3);

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'client', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(2, 'supplier', '2023-07-04 00:00:00', '2023-07-04 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `role_id`, `last_name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Marine', 1, 'Fassin', 'marine.fassin@gmail.com', 'P@ssw0rd', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(2, 'Nikko', 2, 'Di Bernardo', 'nikko.dibernardo@gmail.com', 'P@ssw0rd', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(3, 'Loïc', 2, 'Lion', 'loic.lion@gmail.com', 'P@ssw0rd', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(4, 'Benjamin', 3, 'Mayeur', 'benjamin.mayeur@gmail.com', 'P@ssw0rd', '2023-07-04 00:00:00', '2023-07-04 00:00:00'),
(5, 'Noa', 3, 'Cayphas', 'noa.cayphas@gmail.com', 'P@ssw0rd', '2023-07-04 00:00:00', '2023-07-04 00:00:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_companies_type` (`type_id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_contacts_company` (`company_id`);

--
-- Index pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_invoices_companies` (`id_company`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles_permission`
--
ALTER TABLE `roles_permission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_roles_permission_role` (`role_id`),
  ADD KEY `fk_roles_permission_permission` (`permission_id`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users_role` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `roles_permission`
--
ALTER TABLE `roles_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `fk_companies_type` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`);

--
-- Contraintes pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `fk_contacts_company` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Contraintes pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `fk_invoices_companies` FOREIGN KEY (`id_company`) REFERENCES `companies` (`id`);

--
-- Contraintes pour la table `roles_permission`
--
ALTER TABLE `roles_permission`
  ADD CONSTRAINT `fk_roles_permission_permission` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `fk_roles_permission_role` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_role` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
