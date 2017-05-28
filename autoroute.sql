-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 22 Mai 2017 à 16:57
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `autoroute`
--

-- --------------------------------------------------------

--
-- Structure de la table `gerer`
--

CREATE TABLE `gerer` (
  `CodE` int(11) NOT NULL,
  `CodT` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `peage`
--

CREATE TABLE `peage` (
  `Nom` varchar(100) NOT NULL,
  `CodT` varchar(100) NOT NULL,
  `PgDuKm` int(11) NOT NULL,
  `PgAuKm` int(11) NOT NULL,
  `Tarif` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `registre`
--

CREATE TABLE `registre` (
  `CodT` varchar(100) NOT NULL,
  `IdRegistre` int(11) NOT NULL,
  `Descriptif` varchar(250) NOT NULL,
  `DateDebut` int(11) NOT NULL,
  `DatreFin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sca`
--

CREATE TABLE `sca` (
  `CodE` int(11) NOT NULL,
  `CodT` int(11) NOT NULL,
  `Nom` int(11) NOT NULL,
  `CA` int(11) NOT NULL,
  `DateFin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sorties`
--

CREATE TABLE `sorties` (
  `Numero` int(100) NOT NULL,
  `Libelle` varchar(100) NOT NULL,
  `CodT` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sortir`
--

CREATE TABLE `sortir` (
  `Libelle` varchar(100) NOT NULL,
  `CodP` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `troncons`
--

CREATE TABLE `troncons` (
  `CodT` varchar(100) NOT NULL,
  `CodA` varchar(100) NOT NULL,
  `DuKm` int(4) NOT NULL,
  `AuKm` int(4) NOT NULL,
  `IdRegistre` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `CodP` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Numero` int(11) NOT NULL,
  `Libelle` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `gerer`
--
ALTER TABLE `gerer`
  ADD PRIMARY KEY (`CodE`,`CodT`,`Nom`);

--
-- Index pour la table `peage`
--
ALTER TABLE `peage`
  ADD PRIMARY KEY (`Nom`);

--
-- Index pour la table `registre`
--
ALTER TABLE `registre`
  ADD PRIMARY KEY (`IdRegistre`);

--
-- Index pour la table `sca`
--
ALTER TABLE `sca`
  ADD PRIMARY KEY (`CodE`);

--
-- Index pour la table `sorties`
--
ALTER TABLE `sorties`
  ADD PRIMARY KEY (`Numero`);

--
-- Index pour la table `sortir`
--
ALTER TABLE `sortir`
  ADD PRIMARY KEY (`Libelle`,`CodP`);

--
-- Index pour la table `troncons`
--
ALTER TABLE `troncons`
  ADD PRIMARY KEY (`CodT`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`CodP`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
