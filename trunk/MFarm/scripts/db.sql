-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.5.27 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para mfarm
CREATE DATABASE IF NOT EXISTS `mfarm` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci */;
USE `mfarm`;


-- Volcando estructura para tabla mfarm.cerdaaudit
CREATE TABLE IF NOT EXISTS `cerdaaudit` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `IdCerda` int(10) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Peso` double NOT NULL,
  `IdEstado` int(10) NOT NULL,
  `Observaciones` varchar(30000) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_cerdaaudit_cerdas` (`IdCerda`),
  KEY `FK_cerdaaudit_estados` (`IdEstado`),
  CONSTRAINT `FK_cerdaaudit_cerdas` FOREIGN KEY (`IdCerda`) REFERENCES `cerdas` (`Id`),
  CONSTRAINT `FK_cerdaaudit_estados` FOREIGN KEY (`IdEstado`) REFERENCES `estados` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mfarm.cerdacelos
CREATE TABLE IF NOT EXISTS `cerdacelos` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `IdServicio` int(10) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Observaciones` varchar(30000) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_cerdacelos_servicios` (`IdServicio`),
  CONSTRAINT `FK_cerdacelos_servicios` FOREIGN KEY (`IdServicio`) REFERENCES `servicios` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mfarm.cerdas
CREATE TABLE IF NOT EXISTS `cerdas` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Numero` int(10) NOT NULL,
  `Peso` double NOT NULL,
  `IdEstado` int(10) NOT NULL,
  `Modified_On` datetime NOT NULL,
  `Created_On` datetime NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_cerdas_estados` (`IdEstado`),
  CONSTRAINT `FK_cerdas_estados` FOREIGN KEY (`IdEstado`) REFERENCES `estados` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mfarm.destetes
CREATE TABLE IF NOT EXISTS `destetes` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `IdCerda` int(10) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Lechones` int(10) NOT NULL,
  `Dias` int(10) NOT NULL,
  `PesoTotal` int(10) NOT NULL,
  `Observaciones` varchar(30000) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_destetes_cerdas` (`IdCerda`),
  CONSTRAINT `FK_destetes_cerdas` FOREIGN KEY (`IdCerda`) REFERENCES `cerdas` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mfarm.estados
CREATE TABLE IF NOT EXISTS `estados` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `CanDelete` char(1) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mfarm.lactanciaaudit
CREATE TABLE IF NOT EXISTS `lactanciaaudit` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `IdCerda` int(10) NOT NULL,
  `IdParto` int(10) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Adoptados` int(10) NOT NULL,
  `Muertos` int(10) NOT NULL,
  `Total` int(10) NOT NULL,
  `Observaciones` varchar(30000) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_lactanciaaudit_cerdas` (`IdCerda`),
  KEY `FK_lactanciaaudit_partos` (`IdParto`),
  CONSTRAINT `FK_lactanciaaudit_cerdas` FOREIGN KEY (`IdCerda`) REFERENCES `cerdas` (`Id`),
  CONSTRAINT `FK_lactanciaaudit_partos` FOREIGN KEY (`IdParto`) REFERENCES `partos` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mfarm.partos
CREATE TABLE IF NOT EXISTS `partos` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `IdCerda` int(10) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Vivos` int(10) NOT NULL,
  `Muertos` int(10) NOT NULL,
  `Momificados` int(10) NOT NULL,
  `Observaciones` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_partos_cerdas` (`IdCerda`),
  CONSTRAINT `FK_partos_cerdas` FOREIGN KEY (`IdCerda`) REFERENCES `cerdas` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mfarm.servicios
CREATE TABLE IF NOT EXISTS `servicios` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `IdCerda` int(10) NOT NULL,
  `FechaServicio` datetime NOT NULL,
  `Macho` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `ProbableFechaCelo21` date NOT NULL,
  `ProbableFechaCelo42` date NOT NULL,
  `ProbableFechaParto` date NOT NULL,
  `Observaciones` varchar(30000) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_servicios_cerdas` (`IdCerda`),
  CONSTRAINT `FK_servicios_cerdas` FOREIGN KEY (`IdCerda`) REFERENCES `cerdas` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla mfarm.users
CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Password` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- La exportación de datos fue deseleccionada.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
