-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 10 Juillet 2017 à 10:10
-- Version du serveur :  5.7.18-0ubuntu0.16.04.1
-- Version de PHP :  7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `becode`
--

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `idStudent` tinyint(3) UNSIGNED NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `datenaissance` date NOT NULL,
  `genre` varchar(10) NOT NULL,
  `school` tinyint(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `students`
--

INSERT INTO `students` (`idStudent`, `nom`, `prenom`, `datenaissance`, `genre`, `school`) VALUES
(1, 'Safia', 'Bihmedn', '1990-11-17', 'F', 2),
(2, 'Estelle', 'Desmeurs', '1991-08-28', 'F', 2),
(3, 'Jimmy', 'Riguelle', '1977-09-05', 'M', 2),
(4, 'Daniela', 'Santos', '1984-05-29', 'F', 2),
(5, 'Gabriele', 'Virga', '1994-10-09', 'M', 2),
(6, 'Kreshnik', 'Ibërdemaj', '1985-07-30', 'M', 2),
(7, 'Dan', 'Jansoone', '1993-10-18', 'M', 2),
(8, 'Jayce Marcel', 'Kaje Banziziki', '1992-03-01', 'M', 2),
(9, 'Eric', 'Nsukami Zaki Mbambu', '1978-05-16', 'M', 2),
(10, 'David', 'Vandervaeren', '1988-11-22', 'M', 2),
(11, 'Habib', 'El Maaza Gomez', '1972-01-27', 'M', 2),
(12, 'Ludovic', 'Patho', '1984-06-24', 'M', 2),
(13, 'Santiago', 'Astete', '2017-04-24', 'M', 2),
(14, 'Nadia', 'Nachit', '1982-03-30', 'F', 2),
(15, 'Hugo', 'Barcelona', '1989-05-31', 'M', 2),
(16, 'Miriam', 'Azzouz', '1980-01-03', 'F', 1),
(17, 'Nadia', 'Benazouz', '1981-08-25', 'F', 1),
(18, 'Victor', 'Lanckriet', '1996-05-09', 'M', 1),
(19, 'Gary', 'Luypaert', '1989-07-21', 'M', 1),
(20, 'Michael', 'Mesmeaker', '1993-04-07', 'M', 1),
(21, 'Juan Pablo', 'Quintero Torres', '1991-01-25', 'M', 1),
(22, 'Thomas', 'Tonneau', '1993-10-03', 'M', 1),
(23, 'Claudy', 'Via', '1960-11-29', 'M', 1),
(24, 'Gilles', 'Youtou', '1978-12-28', 'M', 1),
(25, 'Adrian', 'Zochowski', '1996-03-18', 'M', 1),
(26, 'Maria', 'Pedro Miala', '1980-08-23', 'F', 1),
(27, 'salvatore', 'saia', '1978-06-20', 'M', 2),
(28, 'Thomas', 'Demilito', '1989-03-10', 'M', 2),
(29, 'geoffrey', 'marique', '1990-11-09', 'M', 2),
(30, 'Khaled', 'Nzisabira', '1995-01-26', 'M', 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`idStudent`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `idStudent` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
