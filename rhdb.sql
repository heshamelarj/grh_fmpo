-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2016 at 10:28 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rhdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `compte`
--

CREATE TABLE IF NOT EXISTS `compte` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `LOG_IN` varchar(100) DEFAULT NULL,
  `PASS_WORD` varchar(100) DEFAULT NULL,
  `PPR` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `PPR` (`PPR`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `compte`
--

INSERT INTO `compte` (`ID`, `LOG_IN`, `PASS_WORD`, `PPR`) VALUES
(6, 'admin', 'admin', 2);

-- --------------------------------------------------------

--
-- Table structure for table `conge`
--

CREATE TABLE IF NOT EXISTS `conge` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DATE_DEBUT` date NOT NULL,
  `DATE_FINE` date NOT NULL,
  `NBR_JOURS` int(11) NOT NULL,
  `DATE_REPRISE` date NOT NULL,
  `ANNEE` int(11) NOT NULL,
  `PPR` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `PPR` (`PPR`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `conge`
--

INSERT INTO `conge` (`ID`, `DATE_DEBUT`, `DATE_FINE`, `NBR_JOURS`, `DATE_REPRISE`, `ANNEE`, `PPR`) VALUES
(2, '0000-00-00', '0000-00-00', 1, '0000-00-00', 2012, 1),
(3, '2016-04-15', '2016-04-15', 0, '2016-04-15', 2016, 251122),
(4, '2016-04-15', '2016-04-22', 2, '2016-04-23', 2016, 251122),
(5, '2016-04-16', '2016-04-16', 0, '2016-04-16', 2016, 251122),
(6, '2016-04-16', '2016-04-16', 0, '2016-04-16', 2016, 251122),
(7, '2016-04-16', '2016-04-16', 1, '2016-04-16', 2016, 251122);

-- --------------------------------------------------------

--
-- Table structure for table `fonctionnaire`
--

CREATE TABLE IF NOT EXISTS `fonctionnaire` (
  `PPR` int(11) NOT NULL,
  `FONCTION` varchar(50) DEFAULT NULL,
  `DIPLOME` varchar(100) DEFAULT NULL,
  `PB` varchar(100) DEFAULT NULL,
  `DATE_OPT_DIP` date DEFAULT NULL,
  `LIEU_OPT` varchar(100) DEFAULT NULL,
  `DATE_RECRUTE` date DEFAULT NULL,
  `TYPE_F` int(11) NOT NULL,
  PRIMARY KEY (`PPR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fonctionnaire`
--

INSERT INTO `fonctionnaire` (`PPR`, `FONCTION`, `DIPLOME`, `PB`, `DATE_OPT_DIP`, `LIEU_OPT`, `DATE_RECRUTE`, `TYPE_F`) VALUES
(1, 'fonction1', 'diplome1', 'PB1', '0000-00-00', 'LIEU', '0000-00-00', 1),
(2, 'foncton2', 'diplome2', 'PB2', '0000-00-00', 'HERE', '0000-00-00', 2),
(3, 'foncton3', 'diplome3', 'PB3', '0000-00-00', 'HERE', '0000-00-00', 2),
(4, 'fonction', 'diplome', 'pb', '0000-00-00', 'oujda', '0000-00-00', 2),
(5, 'fonction', 'diplome', 'pb', '0000-00-00', 'oujda', '0000-00-00', 2),
(7, 'ghha', NULL, NULL, NULL, NULL, NULL, 0),
(8, 'QN', NULL, NULL, NULL, NULL, NULL, 0),
(11, 'HEAD OF EVERY THING', 'TDI', 'AG', '2016-03-17', 'JERADA', '2016-03-23', 2),
(18, 'qsd', NULL, NULL, NULL, NULL, NULL, 0),
(121, 'HEAD OF EVERY THING', 'TDI', 'AG', '2016-03-16', 'JERADA', '2016-03-22', 2),
(12342, 'TDI', 'TSDI', 'GH', '0000-00-00', 'JERADA', '0000-00-00', 1),
(12345, 'TDI', 'TSDI', 'GH', '0000-00-00', 'JERADA', '0000-00-00', 1),
(25112, 'TDI', 'TSDI', 'GH', '0000-00-00', 'JERADA', '0000-00-00', 1),
(101010, 'TDI', 'TSDI', 'GH', '2016-04-12', 'JERADA', '2016-04-05', 1),
(123452, 'TDI', 'TSDI', 'GH', '0000-00-00', 'JERADA', '0000-00-00', 1),
(251122, 'TDI', 'TSDI', 'GH', '0000-00-00', 'JERADA', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `GRADE` varchar(200) DEFAULT NULL,
  `DATE_NM_GRD` date DEFAULT NULL,
  `CATEGORIE` varchar(200) DEFAULT NULL,
  `DATE_NM_CAT` date DEFAULT NULL,
  `ECHELON` varchar(100) DEFAULT NULL,
  `DATE_EFFECT_ECH` date DEFAULT NULL,
  `PPR` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `PPR` (`PPR`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`ID`, `GRADE`, `DATE_NM_GRD`, `CATEGORIE`, `DATE_NM_CAT`, `ECHELON`, `DATE_EFFECT_ECH`, `PPR`) VALUES
(1, 'GRADE 1', '0000-00-00', 'cat1', '0000-00-00', '1', '0000-00-00', 1),
(2, 'grad2', '0000-00-00', 'cat2', '0000-00-00', '2', '0000-00-00', 2),
(3, 'Engenres HEAD CHEF', '0000-00-00', '1', '0000-00-00', '1', '0000-00-00', 123452),
(4, 'Engenres HEAD CHEF', '0000-00-00', '1', '0000-00-00', '1', '0000-00-00', 25112),
(5, 'Engenres HEAD CHEF', '0000-00-00', '1', '0000-00-00', '1', '0000-00-00', 251122),
(6, 'Engenres HEAD CHEF', '0000-00-00', '1', '0000-00-00', '1', '0000-00-00', 12342),
(7, 'Engenres HEAD CHEF', '0000-00-00', '1', '0000-00-00', '1', '0000-00-00', 1),
(8, 'Engenres HEAD CHEF', '2016-04-04', '1', '2016-04-03', '1', '2016-04-12', 101010),
(9, 'Engenres HEAD CHEF', '2016-04-04', '1', '2016-04-03', '1', '2016-04-12', 101010),
(12, 'CEO', '2016-03-24', 'A', '2016-03-10', '615', '2016-03-10', 11),
(13, 'CEO', '2016-03-07', 'A', '2016-03-23', '615', '2016-03-08', 121),
(14, 'CEO', '2016-03-07', 'A', '2016-03-23', '615', '2016-03-08', 121);

-- --------------------------------------------------------

--
-- Table structure for table `info_personnel`
--

CREATE TABLE IF NOT EXISTS `info_personnel` (
  `CIN` varchar(10) NOT NULL,
  `NOM_FR` varchar(50) CHARACTER SET utf8 NOT NULL,
  `NOM_AR` varchar(50) CHARACTER SET utf8 NOT NULL,
  `PRENOM_FR` varchar(50) CHARACTER SET utf8 NOT NULL,
  `PRENOM_AR` varchar(50) CHARACTER SET utf8 NOT NULL,
  `SEXE` char(1) CHARACTER SET utf8 NOT NULL,
  `DATE_NAISSANCE` date NOT NULL,
  `LIEU_NAISSANCE` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `ADRESSE` varchar(200) CHARACTER SET utf8 NOT NULL,
  `VILLE` varchar(100) CHARACTER SET utf8 COLLATE utf8_sinhala_ci NOT NULL,
  `TELL` varchar(100) CHARACTER SET utf8 NOT NULL,
  `FIX` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `FAX` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `EMAIL` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `PPR` int(11) NOT NULL,
  `SITUATION_FM` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`CIN`),
  KEY `PPR` (`PPR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_personnel`
--

INSERT INTO `info_personnel` (`CIN`, `NOM_FR`, `NOM_AR`, `PRENOM_FR`, `PRENOM_AR`, `SEXE`, `DATE_NAISSANCE`, `LIEU_NAISSANCE`, `ADRESSE`, `VILLE`, `TELL`, `FIX`, `FAX`, `EMAIL`, `PPR`, `SITUATION_FM`) VALUES
('', 'sdq', 'dqs', 'qsd', 'qsd', '', '0000-00-00', NULL, '', '', '', NULL, NULL, NULL, 18, ''),
('FH1212z', 'Hicham EL-ARGEOUNI', 'EL-ARGEOUNI', 'Hicham', 'AHMAD', 'm', '2016-03-08', 'NYC', 'G27', 'JERADA', '+212615108154', 'fsdfsd', '+212615108154', 'hicham.elarg@gmail.com', 121, 'celb'),
('FH12312z', 'Hicham EL-ARGEOUNI', 'EL-ARGEOUNI', 'Hicham', 'AHMAD', 'm', '2016-03-10', 'JERADA', 'G27', 'JERADA', '+212615108154', 'fsdfsd', '+212615108154', 'hicham.elarg@gmail.com', 11, 'celb'),
('FH1234', 'ELARJUNE', 'العرجوني', 'HESHAM', '   هشام', 'm', '0000-00-00', 'JERADA', 'G 27', 'JERADA', '0635781978', '051261721', '051617271', 'hicham.elrag@gmail.com', 251122, 'Célébataire'),
('FH12341', 'ELARJUNE', 'العرجوني', 'HESHAM', '   هشام', 'm', '2016-04-11', 'JERADA', 'G 27', 'JERADA', '0635781978', '051261721', '051617271', 'hicham.elrag@gmail.com', 101010, 'Célébataire');

-- --------------------------------------------------------

--
-- Table structure for table `type_conge`
--

CREATE TABLE IF NOT EXISTS `type_conge` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `typee` varchar(200) DEFAULT NULL,
  `IDCNG` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `IDCNG` (`IDCNG`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `type_conge`
--

INSERT INTO `type_conge` (`ID`, `typee`, `IDCNG`) VALUES
(1, 'ADMINISTRATIV', 4),
(2, 'MALADE', 3),
(3, 'ADMINSTRATIV', 6),
(4, 'ADMINISTRATIV', 7);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `compte_ibfk_1` FOREIGN KEY (`PPR`) REFERENCES `fonctionnaire` (`PPR`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `conge`
--
ALTER TABLE `conge`
  ADD CONSTRAINT `conge_ibfk_1` FOREIGN KEY (`PPR`) REFERENCES `fonctionnaire` (`PPR`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grade`
--
ALTER TABLE `grade`
  ADD CONSTRAINT `grade_ibfk_1` FOREIGN KEY (`PPR`) REFERENCES `fonctionnaire` (`PPR`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `info_personnel`
--
ALTER TABLE `info_personnel`
  ADD CONSTRAINT `info_personnel_ibfk_1` FOREIGN KEY (`PPR`) REFERENCES `fonctionnaire` (`PPR`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `type_conge`
--
ALTER TABLE `type_conge`
  ADD CONSTRAINT `type_conge_ibfk_1` FOREIGN KEY (`IDCNG`) REFERENCES `conge` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
