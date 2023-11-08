-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : mar. 17 oct. 2023 à 14:27
-- Version du serveur : 10.10.2-MariaDB
-- Version de PHP : 8.0.26

--
-- GSBCR0 - Théo Leclerc Gallois/Tanghy Noquet [SIO2]
--
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gsbcr0`
--
DROP DATABASE IF EXISTS `gsbcr0`;
CREATE DATABASE IF NOT EXISTS `gsb_medicaments` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
USE `gsb_medicaments`;

-- --------------------------------------------------------

--
-- Structure de la table `collaborateur`
--

DROP TABLE IF EXISTS `collaborateur`;
CREATE TABLE IF NOT EXISTS `collaborateur` (
  `COL_MATRICULE` varchar(10) NOT NULL,
  `COL_NOM` varchar(25) DEFAULT NULL,
  `COL_PRENOM` varchar(50) DEFAULT NULL,
  `COL_ADRESSE` varchar(50) DEFAULT NULL,
  `COL_CP` varchar(5) DEFAULT NULL,
  `COL_VILLE` varchar(30) DEFAULT NULL,
  `COL_DATEEMBAUCHE` datetime DEFAULT NULL,
  `SEC_CODE` varchar(1) DEFAULT NULL,
  `HAB_ID` varchar(5) DEFAULT NULL,
  `REG_CODE` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`COL_MATRICULE`),
  KEY `COLLABORATEUR_HABILITATION0_FK` (`HAB_ID`),
  KEY `COLLABORATEUR_SECTEUR0_FK` (`SEC_CODE`),
  KEY `COLLABORATEUR_REGION0_FK` (`REG_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Déchargement des données de la table `collaborateur`
--

INSERT INTO `collaborateur` (`COL_MATRICULE`, `COL_NOM`, `COL_PRENOM`, `COL_ADRESSE`, `COL_CP`, `COL_VILLE`, `COL_DATEEMBAUCHE`, `SEC_CODE`, `HAB_ID`, `REG_CODE`) VALUES
('a131', 'Villechalane', 'Louis', '8 cours Lafontaine', '29000', 'BREST', '1992-12-11 00:00:00', 'E', '2', 'BN'),
('a17', 'Andre', 'David', '1 r Aimon de Chissée', '38100', 'GRENOBLE', '1991-08-26 00:00:00', NULL, '1', 'RA'),
('a55', 'Bedos', 'Christian', '1 r Bénédictins', '65000', 'TARBES', '1987-07-17 00:00:00', NULL, '2', 'RO'),
('a93', 'Tusseau', 'Louis', '22 r Renou', '86000', 'POITIERS', '1999-01-02 00:00:00', NULL, '2', 'PC'),
('b13', 'Bentot', 'Pascal', '11 av 6 Juin', '67000', 'STRASBOURG', '1996-03-11 00:00:00', NULL, '3', 'AL'),
('b16', 'Bioret', 'Luc', '1 r Linne', '35000', 'RENNES', '1997-03-21 00:00:00', NULL, NULL, NULL),
('b19', 'Bunisset', 'Francis', '10 r Nicolas Chorier', '85000', 'LA ROCHE SUR YON', '1999-01-31 00:00:00', NULL, NULL, NULL),
('b25', 'Bunisset', 'Denise', '1 r Lionne', '49100', 'ANGERS', '1994-07-03 00:00:00', NULL, NULL, NULL),
('b28', 'Cacheux', 'Bernard', '114 r Authie', '34000', 'MONTPELLIER', '2000-08-02 00:00:00', NULL, NULL, NULL),
('b34', 'Cadic', 'Eric', '123 r Caponière', '41000', 'BLOIS', '1993-12-06 00:00:00', 'P', NULL, NULL),
('b4', 'Charoze', 'Catherine', '100 pl Géants', '33000', 'BORDEAUX', '1997-09-25 00:00:00', NULL, NULL, NULL),
('b50', 'Clepkens', 'Christophe', '12 r Fédérico Garcia Lorca', '13000', 'MARSEILLE', '1998-01-18 00:00:00', NULL, NULL, NULL),
('b59', 'Cottin', 'Vincenne', '36 sq Capucins', '5000', 'GAP', '1995-10-21 00:00:00', NULL, NULL, NULL),
('c14', 'Daburon', 'François', '13 r Champs Elysées', '6000', 'NICE', '1989-02-01 00:00:00', 'S', NULL, NULL),
('c3', 'De', 'Philippe', '13 r Charles Peguy', '10000', 'TROYES', '1992-05-05 00:00:00', NULL, NULL, NULL),
('c54', 'Debelle', 'Michel', '181 r Caponière', '88000', 'EPINAL', '1991-04-09 00:00:00', NULL, NULL, NULL),
('d13', 'Debelle', 'Jeanne', '134 r Stalingrad', '44000', 'NANTES', '1991-12-05 00:00:00', NULL, NULL, NULL),
('d51', 'Debroise', 'Michel', '2 av 6 Juin', '70000', 'VESOUL', '1997-11-18 00:00:00', 'E', NULL, NULL),
('e22', 'Desmarquest', 'Nathalie', '14 r Fédérico Garcia Lorca', '54000', 'NANCY', '1989-03-24 00:00:00', NULL, NULL, NULL),
('e24', 'Desnost', 'Pierre', '16 r Barral de Montferrat', '55000', 'VERDUN', '1993-05-17 00:00:00', 'E', NULL, NULL),
('e39', 'Dudouit', 'Frédéric', '18 quai Xavier Jouvin', '75000', 'PARIS', '1988-04-26 00:00:00', NULL, NULL, NULL),
('e49', 'Duncombe', 'Claude', '19 av Alsace Lorraine', '9000', 'FOIX', '1996-02-19 00:00:00', NULL, NULL, NULL),
('e5', 'Enault-Pascreau', 'Céline', '25B r Stalingrad', '40000', 'MONT DE MARSAN', '1990-11-27 00:00:00', 'S', NULL, NULL),
('e52', 'Eynde', 'Valérie', '3 r Henri Moissan', '76000', 'ROUEN', '1991-10-31 00:00:00', NULL, NULL, NULL),
('f21', 'Finck', 'Jacques', 'rte Montreuil Bellay', '74000', 'ANNECY', '1993-06-08 00:00:00', NULL, NULL, NULL),
('f39', 'Frémont', 'Fernande', '4 r Jean Giono', '69000', 'LYON', '1997-02-15 00:00:00', NULL, NULL, NULL),
('f4', 'Gest', 'Alain', '30 r Authie', '46000', 'FIGEAC', '1994-05-03 00:00:00', NULL, NULL, NULL),
('g19', 'Gheysen', 'Galassus', '32 bd Mar Foch', '75000', 'PARIS', '1996-01-18 00:00:00', NULL, NULL, NULL),
('g30', 'Girard', 'Yvon', '31 av 6 Juin', '80000', 'AMIENS', '1999-03-27 00:00:00', 'N', NULL, NULL),
('g53', 'Gombert', 'Luc', '32 r Emile Gueymard', '56000', 'VANNES', '1985-10-02 00:00:00', NULL, NULL, NULL),
('g7', 'Guindon', 'Caroline', '40 r Mar Montgomery', '87000', 'LIMOGES', '1996-01-13 00:00:00', NULL, NULL, NULL),
('h13', 'Guindon', 'François', '44 r Picotière', '19000', 'TULLE', '1993-05-08 00:00:00', NULL, NULL, NULL),
('h30', 'Igigabel', 'Guy', '33 gal Arlequin', '94000', 'CRETEIL', '1998-04-26 00:00:00', NULL, NULL, NULL),
('h35', 'Jourdren', 'Pierre', '34 av Jean Perrot', '15000', 'AURRILLAC', '1993-08-26 00:00:00', NULL, NULL, NULL),
('h40', 'Juttard', 'Pierre-Raoul', '34 cours Jean Jaurès', '8000', 'SEDAN', '1992-11-01 00:00:00', NULL, NULL, NULL),
('j45', 'Labouré-Morel', 'Saout', '38 cours Berriat', '52000', 'CHAUMONT', '1998-02-25 00:00:00', 'N', NULL, NULL),
('j50', 'Landré', 'Philippe', '4 av Gén Laperrine', '59000', 'LILLE', '1992-12-16 00:00:00', NULL, NULL, NULL),
('j8', 'Langeard', 'Hugues', '39 av Jean Perrot', '93000', 'BAGNOLET', '1998-06-18 00:00:00', 'P', NULL, NULL),
('k4', 'Lanne', 'Bernard', '4 r Bayeux', '30000', 'NIMES', '1996-11-21 00:00:00', NULL, NULL, NULL),
('k53', 'Le', 'Noël', '4 av Beauvert', '68000', 'MULHOUSE', '1983-03-23 00:00:00', NULL, NULL, NULL),
('l14', 'Le', 'Jean', '39 r Raspail', '53000', 'LAVAL', '1995-02-02 00:00:00', NULL, NULL, NULL),
('l23', 'Leclercq', 'Servane', '11 r Quinconce', '18000', 'BOURGES', '1995-06-05 00:00:00', NULL, NULL, NULL),
('l46', 'Lecornu', 'Jean-Bernard', '4 bd Mar Foch', '72000', 'LA FERTE BERNARD', '1997-01-24 00:00:00', NULL, NULL, NULL),
('l56', 'Lecornu', 'Ludovic', '4 r Abel Servien', '25000', 'BESANCON', '1996-02-27 00:00:00', NULL, NULL, NULL),
('m35', 'Lejard', 'Agnès', '4 r Anthoard', '82000', 'MONTAUBAN', '1987-10-06 00:00:00', NULL, NULL, NULL),
('m45', 'Lesaulnier', 'Pascal', '47 r Thiers', '57000', 'METZ', '1990-10-13 00:00:00', NULL, NULL, NULL),
('n42', 'Letessier', 'Stéphane', '5 chem Capuche', '27000', 'EVREUX', '1996-03-06 00:00:00', NULL, NULL, NULL),
('n58', 'Loirat', 'Didier', 'Les Pêchers cité Bourg la Croix', '45000', 'ORLEANS', '1992-08-30 00:00:00', NULL, NULL, NULL),
('n59', 'Maffezzoli', 'Thibaud', '5 r Chateaubriand', '2000', 'LAON', '1994-12-19 00:00:00', NULL, NULL, NULL),
('o26', 'Mancini', 'Anne', '5 r D Agier', '48000', 'MENDE', '1995-01-05 00:00:00', NULL, NULL, NULL),
('p32', 'Marcouiller', 'Gérard', '7 pl St Gilles', '91000', 'ISSY LES MOULINEAUX', '1992-12-24 00:00:00', NULL, NULL, NULL),
('p40', 'Michel', 'Jean-Claude', '5 r Gabriel Péri', '61000', 'FLERS', '1992-12-14 00:00:00', 'O', NULL, NULL),
('p41', 'Montecot', 'Françoise', '6 r Paul Valéry', '17000', 'SAINTES', '1998-07-27 00:00:00', NULL, NULL, NULL),
('p42', 'Notini', 'Veronique', '5 r Lieut Chabal', '60000', 'BEAUVAIS', '1994-12-12 00:00:00', NULL, NULL, NULL),
('p49', 'Onfroy', 'Den', '5 r Sidonie Jacolin', '37000', 'TOURS', '1977-10-03 00:00:00', NULL, NULL, NULL),
('p6', 'Pascreau', 'Charles', '57 bd Mar Foch', '64000', 'PAU', '1997-03-30 00:00:00', NULL, NULL, NULL),
('p7', 'Pernot', 'Claude-Noël', '6 r Alexandre 1 de Yougoslavie', '11000', 'NARBONNE', '1990-03-01 00:00:00', NULL, NULL, NULL),
('p8', 'Perrier', 'Maître', '6 r Aubert Dubayet', '71000', 'CHALON SUR SAONE', '1991-06-23 00:00:00', NULL, NULL, NULL),
('q17', 'Petit', 'Jean-Louis', '7 r Ernest Renan', '50000', 'SAINT LO', '1997-09-06 00:00:00', NULL, NULL, NULL),
('r24', 'Piquery', 'Patrick', '9 r Vaucelles', '14000', 'CAEN', '1984-07-29 00:00:00', 'O', NULL, NULL),
('r58', 'Quiquandon', 'Joël', '7 r Ernest Renan', '29000', 'QUIMPER', '1990-06-30 00:00:00', NULL, NULL, NULL),
('s10', 'Retailleau', 'Josselin', '88Bis r Saumuroise', '39000', 'DOLE', '1995-11-14 00:00:00', NULL, NULL, NULL),
('s21', 'Retailleau', 'Pascal', '32 bd Ayrault', '23000', 'MONTLUCON', '1992-09-25 00:00:00', NULL, NULL, NULL),
('t43', 'Souron', 'Maryse', '7B r Gay Lussac', '21000', 'DIJON', '1995-03-09 00:00:00', NULL, NULL, NULL),
('t47', 'Tiphagne', 'Patrick', '7B r Gay Lussac', '62000', 'ARRAS', '1997-08-29 00:00:00', NULL, NULL, NULL),
('t55', 'Tréhet', 'Alain', '7D chem Barral', '12000', 'RODEZ', '1994-11-29 00:00:00', NULL, NULL, NULL),
('t60', 'Tusseau', 'Josselin', '63 r Bon Repos', '28000', 'CHARTRES', '1991-03-29 00:00:00', NULL, '1', 'CE'),
('zzz', 'swiss', 'bourdin', NULL, NULL, NULL, '2003-06-18 00:00:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `dosage`
--

DROP TABLE IF EXISTS `dosage`;
CREATE TABLE IF NOT EXISTS `dosage` (
  `DOS_CODE` varchar(10) NOT NULL,
  `DOS_QUANTITE` varchar(10) DEFAULT NULL,
  `DOS_UNITE` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`DOS_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

DROP TABLE IF EXISTS `etat`;
CREATE TABLE IF NOT EXISTS `etat` (
  `ID_ETAT` varchar(5) NOT NULL,
  `LIBELLE_ETAT` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_ETAT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

DROP TABLE IF EXISTS `famille`;
CREATE TABLE IF NOT EXISTS `famille` (
  `FAM_CODE` varchar(3) NOT NULL,
  `FAM_LIBELLE` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`FAM_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Déchargement des données de la table `famille`
--

INSERT INTO `famille` (`FAM_CODE`, `FAM_LIBELLE`) VALUES
('AA', 'Antalgiques en association'),
('AAA', 'Antalgiques antipyrétiques en association'),
('AAC', 'Antidépresseur action centrale'),
('AAH', 'Antivertigineux antihistaminique H1'),
('ABA', 'Antibiotique antituberculeux'),
('ABC', 'Antibiotique antiacnéique local'),
('ABP', 'Antibiotique de la famille des béta-lactamines (pénicilline A)'),
('AFC', 'Antibiotique de la famille des cyclines'),
('AFM', 'Antibiotique de la famille des macrolides'),
('AH', 'Antihistaminique H1 local'),
('AIM', 'Antidépresseur imipraminique (tricyclique)'),
('AIN', 'Antidépresseur inhibiteur sélectif de la recapture de la sérotonine'),
('ALO', 'Antibiotique local (ORL)'),
('ANS', 'Antidépresseur IMAO non sélectif'),
('AO', 'Antibiotique ophtalmique'),
('AP', 'Antipsychotique normothymique'),
('AUM', 'Antibiotique urinaire minute'),
('CRT', 'Corticoïde, antibiotique et antifongique à  usage local'),
('HYP', 'Hypnotique antihistaminique'),
('PSA', 'Psychostimulant, antiasthénique');

-- --------------------------------------------------------

--
-- Structure de la table `formuler`
--

DROP TABLE IF EXISTS `formuler`;
CREATE TABLE IF NOT EXISTS `formuler` (
  `MED_DEPOTLEGAL` varchar(10) NOT NULL,
  `PRE_CODE` varchar(2) NOT NULL,
  PRIMARY KEY (`MED_DEPOTLEGAL`,`PRE_CODE`),
  KEY `FORMULER_PRESENTATION` (`PRE_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Structure de la table `habilitation`
--

DROP TABLE IF EXISTS `habilitation`;
CREATE TABLE IF NOT EXISTS `habilitation` (
  `HAB_ID` varchar(5) NOT NULL,
  `HAB_LIB` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`HAB_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Déchargement des données de la table `habilitation`
--

INSERT INTO `habilitation` (`HAB_ID`, `HAB_LIB`) VALUES
('1', 'Visiteur'),
('2', 'Délégué Régional'),
('3', 'Responsable Secteur');

-- --------------------------------------------------------

--
-- Structure de la table `interagir`
--

DROP TABLE IF EXISTS `interagir`;
CREATE TABLE IF NOT EXISTS `interagir` (
  `MED_DEPOTLEGAL_Perturbateur` varchar(10) NOT NULL,
  `MED_DEPOTLEGAL_Perturbé` varchar(10) NOT NULL,
  PRIMARY KEY (`MED_DEPOTLEGAL_Perturbateur`,`MED_DEPOTLEGAL_Perturbé`),
  KEY `INTERAGIR_MEDICAMENT_Perturbé` (`MED_DEPOTLEGAL_Perturbé`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `LOG_ID` int(11) NOT NULL,
  `LOG_LOGIN` varchar(50) NOT NULL,
  `LOG_MOTDEPASSE` varchar(255) NOT NULL,
  `COL_MATRICULE` varchar(10) NOT NULL,
  PRIMARY KEY (`LOG_ID`),
  UNIQUE KEY `COL_MATRICULE` (`COL_MATRICULE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`LOG_ID`, `LOG_LOGIN`, `LOG_MOTDEPASSE`, `COL_MATRICULE`) VALUES
(1, 'villou', '6cf17e0501b8078722f316f094e230341b4f1b2d4d14cc082c41494d6b462024f031beff6fc25145ed02a58181fc90a7fca58f0d879b349638df19dca85efa7f', 'a131'),
(2, 'anddav', 'ff781e873746adf59e3165b217034477ca29d4f2322720e05492ea90d21010378252a85f2d66025874647c6d162d45df2766e8003f33c885bbc3c4dbbe92141f', 'a17'),
(3, 'bedchr', 'dbb65dd51a8348771883fae9cd7cc40ce1cf33e3756b4ca798bfcdcc37499b7e7236af7bd16d469bdaf8b039f3d5f414cb8a840d3675862675c0dc4a18fb5946', 'a55'),
(4, 'tuslou', 'd0f2a12b1928e2a54043a3e360b2f9ed7df27b780f668b066ed9de61e0007898a07ff05fbf2f062348d55cb4bf824c8c96e9102050271204713f228034ce709c', 'a93'),
(67, 'tusjos', 'd49fe42f1ce6ebd4d2f147ed3e14fc5816c6ef735c2a3cd7b60e143cafa30db0d835fe37bac1340b7fc6f7cb6f34b307ba869cdf341c2c09e216b21021104d84', 't60');

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

DROP TABLE IF EXISTS `medicament`;
CREATE TABLE IF NOT EXISTS `medicament` (
  `MED_DEPOTLEGAL` varchar(10) NOT NULL,
  `MED_NOMCOMMERCIAL` varchar(25) DEFAULT NULL,
  `FAM_CODE` varchar(3) DEFAULT NULL,
  `MED_COMPOSITION` varchar(255) DEFAULT NULL,
  `MED_EFFETS` varchar(255) DEFAULT NULL,
  `MED_CONTREINDIC` varchar(255) DEFAULT NULL,
  `MED_PRIXECHANTILLON` float DEFAULT NULL,
  PRIMARY KEY (`MED_DEPOTLEGAL`),
  KEY `FAM_CODE` (`FAM_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Déchargement des données de la table `medicament`
--

INSERT INTO `medicament` (`MED_DEPOTLEGAL`, `MED_NOMCOMMERCIAL`, `FAM_CODE`, `MED_COMPOSITION`, `MED_EFFETS`, `MED_CONTREINDIC`, `MED_PRIXECHANTILLON`) VALUES
('3MYC7', 'TRIMYCINE', 'CRT', 'Triamcinolone (acétonide) + Néomycine + Nystatine', 'Ce médicament est un corticoïde à  activité forte ou très forte associé à  un antibiotique et un antifongique, utilisé en application locale dans certaines atteintes cutanées surinfectées.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, d\'infections de la peau ou de parasitisme non traités, d\'acné. Ne pas appliquer sur une plaie, ni sous un pansement occlusif.', 78.99),
('ADIMOL9', 'ADIMOL', 'ABP', 'Amoxicilline + Acide clavulanique', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines ou aux céphalosporines.', 40.99),
('AMOPIL7', 'AMOPIL', 'ABP', 'Amoxicilline', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines. Il doit être administré avec prudence en cas d\'allergie aux céphalosporines.', 29.99),
('AMOX45', 'AMOXAR', 'ABP', 'Amoxicilline', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'La prise de ce médicament peut rendre positifs les tests de dépistage du dopage.', 24.99),
('AMOXIG12', 'AMOXI Gé', 'ABP', 'Amoxicilline', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines. Il doit être administré avec prudence en cas d\'allergie aux céphalosporines.', 25.99),
('APATOUX22', 'APATOUX Vitamine C', 'ALO', 'Tyrothricine + Tétracaïne + Acide ascorbique (Vitamine C)', 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, en cas de phénylcétonurie et chez l\'enfant de moins de 6 ans.', 89.99),
('BACTIG10', 'BACTIGEL', 'ABC', 'Erythromycine', 'Ce médicament est utilisé en application locale pour traiter l\'acné et les infections cutanées bactériennes associées.', 'Ce médicament est contre-indiqué en cas d\'allergie aux antibiotiques de la famille des macrolides ou des lincosanides.', 46.99),
('BACTIV13', 'BACTIVIL', 'AFM', 'Erythromycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).', 34.99),
('BITALV', 'BIVALIC', 'AAA', 'Dextropropoxyphène + Paracétamol', 'Ce médicament est utilisé pour traiter les douleurs d\'intensité modérée ou intense.', 'Ce médicament est contre-indiqué en cas d\'allergie aux médicaments de cette famille, d\'insuffisance hépatique ou d\'insuffisance rénale.', 87.99),
('CARTION6', 'CARTION', 'AAA', 'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol', 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.', 'Ce médicament est contre-indiqué en cas de troubles de la coagulation (tendances aux hémorragies), d\'ulcère gastroduodénal, maladies graves du foie.', 50.99),
('CLAZER6', 'CLAZER', 'AFM', 'Clarithromycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques. Il est également utilisé dans le traitement de l\'ulcère gastro-duodénal, en association avec d\'autres médicaments.', 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).', 46.99),
('DEPRIL9', 'DEPRAMIL', 'AIM', 'Clomipramine', 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères, certaines douleurs rebelles, les troubles obsessionnels compulsifs et certaines énurésies chez l\'enfant.', 'Ce médicament est contre-indiqué en cas de glaucome ou d\'adénome de la prostate, d\'infarctus récent, ou si vous avez reà§u un traitement par IMAO durant les 2 semaines précédentes ou en cas d\'allergie aux antidépresseurs imipraminiques.', 96.99),
('DIMIRTAM6', 'DIMIRTAM', 'AAC', 'Mirtazapine', 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères.', 'La prise de ce produit est contre-indiquée en cas de d\'allergie à  l\'un des constituants.', 74.99),
('DOLRIL7', 'DOLORIL', 'AAA', 'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol', 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.', 'Ce médicament est contre-indiqué en cas d\'allergie au paracétamol ou aux salicylates.', 22.99),
('DORNOM8', 'NORMADOR', 'HYP', 'Doxylamine', 'Ce médicament est utilisé pour traiter l\'insomnie chez l\'adulte.', 'Ce médicament est contre-indiqué en cas de glaucome, de certains troubles urinaires (rétention urinaire) et chez l\'enfant de moins de 15 ans.', 79.99),
('EQUILARX6', 'EQUILAR', 'AAH', 'Méclozine', 'Ce médicament est utilisé pour traiter les vertiges et pour prévenir le mal des transports.', 'Ce médicament ne doit pas être utilisé en cas d\'allergie au produit, en cas de glaucome ou de rétention urinaire.', 66.99),
('EVILR7', 'EVEILLOR', 'PSA', 'Adrafinil', 'Ce médicament est utilisé pour traiter les troubles de la vigilance et certains symptomes neurologiques chez le sujet agé.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants.', 41.99),
('INSXT5', 'INSECTIL', 'AH', 'Diphénydramine', 'Ce médicament est utilisé en application locale sur les piqûres d\'insecte et l\'urticaire.', 'Ce médicament est contre-indiqué en cas d\'allergie aux antihistaminiques.', 19.99),
('JOVAI8', 'JOVENIL', 'AFM', 'Josamycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).', 63.99),
('LIDOXY23', 'LIDOXYTRACINE', 'AFC', 'Oxytétracycline +Lidocaïne', 'Ce médicament est utilisé en injection intramusculaire pour traiter certaines infections spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants. Il ne doit pas être associé aux rétinoïdes.', 74.99),
('LITHOR12', 'LITHORINE', 'AP', 'Lithium', 'Ce médicament est indiqué dans la prévention des psychoses maniaco-dépressives ou pour traiter les états maniaques.', 'Ce médicament ne doit pas être utilisé si vous êtes allergique au lithium. Avant de prendre ce traitement, signalez à  votre médecin traitant si vous souffrez d\'insuffisance rénale, ou si vous avez un régime sans sel.', 84.99),
('PARMOL16', 'PARMOCODEINE', 'AA', 'Codéine + Paracétamol', 'Ce médicament est utilisé pour le traitement des douleurs lorsque des antalgiques simples ne sont pas assez efficaces.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, chez l\'enfant de moins de 15 Kg, en cas d\'insuffisance hépatique ou respiratoire, d\'asthme, de phénylcétonurie et chez la femme qui allaite.', 54.99),
('PHYSOI8', 'PHYSICOR', 'PSA', 'Sulbutiamine', 'Ce médicament est utilisé pour traiter les baisses d\'activité physique ou psychique, souvent dans un contexte de dépression.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants.', 67.99),
('PIRIZ8', 'PIRIZAN', 'ABA', 'Pyrazinamide', 'Ce médicament est utilisé, en association à  d\'autres antibiotiques, pour traiter la tuberculose.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, d\'insuffisance rénale ou hépatique, d\'hyperuricémie ou de porphyrie.', 72.99),
('POMDI20', 'POMADINE', 'AO', 'Bacitracine', 'Ce médicament est utilisé pour traiter les infections oculaires de la surface de l\'oeil.', 'Ce médicament est contre-indiqué en cas d\'allergie aux antibiotiques appliqués localement.', 46.99),
('TROXT21', 'TROXADET', 'AIN', 'Paroxétine', 'Ce médicament est utilisé pour traiter la dépression et les troubles obsessionnels compulsifs. Il peut également être utilisé en prévention des crises de panique avec ou sans agoraphobie.', 'Ce médicament est contre-indiqué en cas d\'allergie au produit.', 37.99),
('TXISOL22', 'TOUXISOL Vitamine C', 'ALO', 'Tyrothricine + Acide ascorbique (Vitamine C)', 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants et chez l\'enfant de moins de 6 ans.', 57.99),
('URIEG6', 'URIREGUL', 'AUM', 'Fosfomycine trométamol', 'Ce médicament est utilisé pour traiter les infections urinaires simples chez la femme de moins de 65 ans.', 'La prise de ce médicament est contre-indiquée en cas d\'allergie à  l\'un des constituants et d\'insuffisance rénale.', 42.99);

-- --------------------------------------------------------

--
-- Structure de la table `motif_visite`
--

DROP TABLE IF EXISTS `motif_visite`;
CREATE TABLE IF NOT EXISTS `motif_visite` (
  `MOT_CODE` int(11) NOT NULL,
  `MOT_DESI` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`MOT_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Déchargement des données de la table `motif_visite`
--

INSERT INTO `motif_visite` (`MOT_CODE`, `MOT_DESI`) VALUES
(1, 'Actualisation annuelle'),
(2, 'Rapport Annuel'),
(3, 'Baisse activité');

-- --------------------------------------------------------

--
-- Structure de la table `offrir`
--

DROP TABLE IF EXISTS `offrir`;
CREATE TABLE IF NOT EXISTS `offrir` (
  `COL_MATRICULE` varchar(10) NOT NULL,
  `RAP_NUM` int(11) NOT NULL,
  `MED_DEPOTLEGAL` varchar(10) NOT NULL,
  `OFF_QTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`COL_MATRICULE`,`RAP_NUM`,`MED_DEPOTLEGAL`),
  KEY `OFFRIR_MEDICAMENT` (`MED_DEPOTLEGAL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Déchargement des données de la table `offrir`
--

INSERT INTO `offrir` (`COL_MATRICULE`, `RAP_NUM`, `MED_DEPOTLEGAL`, `OFF_QTE`) VALUES
('a17', 4, '3MYC7', 3),
('a17', 4, 'AMOX45', 12);

-- --------------------------------------------------------

--
-- Structure de la table `posseder`
--

DROP TABLE IF EXISTS `posseder`;
CREATE TABLE IF NOT EXISTS `posseder` (
  `PRA_NUM` int(11) NOT NULL,
  `SPE_CODE` varchar(5) NOT NULL,
  `POS_DIPLOME` varchar(10) DEFAULT NULL,
  `POS_COEFPRESCRIPTION` float DEFAULT NULL,
  PRIMARY KEY (`PRA_NUM`,`SPE_CODE`),
  KEY `POSSEDER_SPECIALITE` (`SPE_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Structure de la table `praticien`
--

DROP TABLE IF EXISTS `praticien`;
CREATE TABLE IF NOT EXISTS `praticien` (
  `PRA_NUM` int(11) NOT NULL,
  `PRA_NOM` varchar(25) DEFAULT NULL,
  `PRA_PRENOM` varchar(30) DEFAULT NULL,
  `PRA_ADRESSE` varchar(50) DEFAULT NULL,
  `PRA_CP` varchar(5) DEFAULT NULL,
  `PRA_VILLE` varchar(25) DEFAULT NULL,
  `PRA_COEFNOTORIETE` float DEFAULT NULL,
  `PRA_COEFCONFIANCE` float DEFAULT NULL,
  `TYP_CODE` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`PRA_NUM`),
  KEY `PRATICIEN_TYPE_PRATICIEN_FK` (`TYP_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Déchargement des données de la table `praticien`
--

INSERT INTO `praticien` (`PRA_NUM`, `PRA_NOM`, `PRA_PRENOM`, `PRA_ADRESSE`, `PRA_CP`, `PRA_VILLE`, `PRA_COEFNOTORIETE`, `PRA_COEFCONFIANCE`, `TYP_CODE`) VALUES
(1, 'Notini', 'Alain', '114 r Authie', '85000', 'LA ROCHE SUR YON', 290.03, NULL, 'MH'),
(2, 'Gosselin', 'Albert', '13 r Devon', '41000', 'BLOIS', 307.49, NULL, 'MV'),
(3, 'Delahaye', 'André', '36 av 6 Juin', '25000', 'BESANCON', 185.79, NULL, 'PS'),
(4, 'Leroux', 'André', '47 av Robert Schuman', '60000', 'BEAUVAIS', 172.04, NULL, 'PH'),
(5, 'Desmoulins', 'Anne', '31 r St Jean', '30000', 'NIMES', 94.75, NULL, 'PO'),
(6, 'Mouel', 'Anne', '27 r Auvergne', '80000', 'AMIENS', 45.2, NULL, 'MH'),
(7, 'Desgranges-Lentz', 'Antoine', '1 r Albert de Mun', '29000', 'MORLAIX', 20.07, NULL, 'MV'),
(8, 'Marcouiller', 'Arnaud', '31 r St Jean', '68000', 'MULHOUSE', 396.52, NULL, 'PS'),
(9, 'Dupuy', 'Benoit', '9 r Demolombe', '34000', 'MONTPELLIER', 395.66, NULL, 'PH'),
(10, 'Lerat', 'Bernard', '31 r St Jean', '59000', 'LILLE', 257.79, NULL, 'PO'),
(11, 'Marçais-Lefebvre', 'Bertrand', '86Bis r Basse', '67000', 'STRASBOURG', 450.96, NULL, 'MH'),
(12, 'Boscher', 'Bruno', '94 r Falaise', '10000', 'TROYES', 356.14, NULL, 'MV'),
(13, 'Morel', 'Catherine', '21 r Chateaubriand', '75000', 'PARIS', 379.57, NULL, 'PS'),
(14, 'Guivarch', 'Chantal', '4 av Gén Laperrine', '45000', 'ORLEANS', 114.56, NULL, 'PH'),
(15, 'Bessin-Grosdoit', 'Christophe', '92 r Falaise', '6000', 'NICE', 222.06, NULL, 'PO'),
(16, 'Rossa', 'Claire', '14 av Thiès', '6000', 'NICE', 529.78, NULL, 'MH'),
(17, 'Cauchy', 'Denis', '5 av Ste Thérèse', '11000', 'NARBONNE', 458.82, NULL, 'MV'),
(18, 'Gaffé', 'Dominique', '9 av 1ère Armée Française', '35000', 'RENNES', 213.4, NULL, 'PS'),
(19, 'Guenon', 'Dominique', '98 bd Mar Lyautey', '44000', 'NANTES', 175.89, NULL, 'PH'),
(20, 'Prévot', 'Dominique', '29 r Lucien Nelle', '87000', 'LIMOGES', 151.36, NULL, 'PO'),
(21, 'Houchard', 'Eliane', '9 r Demolombe', '49100', 'ANGERS', 436.96, NULL, 'MH'),
(22, 'Desmons', 'Elisabeth', '51 r Bernières', '29000', 'QUIMPER', 281.17, NULL, 'MV'),
(23, 'Flament', 'Elisabeth', '11 r Pasteur', '35000', 'RENNES', 315.6, NULL, 'PS'),
(24, 'Goussard', 'Emmanuel', '9 r Demolombe', '41000', 'BLOIS', 40.72, NULL, 'PH'),
(25, 'Desprez', 'Eric', '9 r Vaucelles', '33000', 'BORDEAUX', 406.85, NULL, 'PO'),
(26, 'Coste', 'Evelyne', '29 r Lucien Nelle', '19000', 'TULLE', 441.87, NULL, 'MH'),
(27, 'Lefebvre', 'Frédéric', '2 pl Wurzburg', '55000', 'VERDUN', 573.63, NULL, 'MV'),
(28, 'Lemée', 'Frédéric', '29 av 6 Juin', '56000', 'VANNES', 326.4, NULL, 'PS'),
(29, 'Martin', 'Frédéric', 'Bât A 90 r Bayeux', '70000', 'VESOUL', 506.06, NULL, 'PH'),
(30, 'Marie', 'Frédérique', '172 r Caponière', '70000', 'VESOUL', 313.31, NULL, 'PO'),
(31, 'Rosenstech', 'Geneviève', '27 r Auvergne', '75000', 'PARIS', 366.82, NULL, 'MH'),
(32, 'Pontavice', 'Ghislaine', '8 r Gaillon', '86000', 'POITIERS', 265.58, NULL, 'MV'),
(33, 'Leveneur-Mosquet', 'Guillaume', '47 av Robert Schuman', '64000', 'PAU', 184.97, NULL, 'PS'),
(34, 'Blanchais', 'Guy', '30 r Authie', '8000', 'SEDAN', 502.48, NULL, 'PH'),
(35, 'Leveneur', 'Hugues', '7 pl St Gilles', '62000', 'ARRAS', 7.39, NULL, 'PO'),
(36, 'Mosquet', 'Isabelle', '22 r Jules Verne', '76000', 'ROUEN', 77.1, NULL, 'MH'),
(37, 'Giraudon', 'Jean-Christophe', '1 r Albert de Mun', '38100', 'VIENNE', 92.62, NULL, 'MV'),
(38, 'Marie', 'Jean-Claude', '26 r Hérouville', '69000', 'LYON', 120.1, NULL, 'PS'),
(39, 'Maury', 'Jean-François', '5 r Pierre Girard', '71000', 'CHALON SUR SAONE', 13.73, NULL, 'PH'),
(40, 'Dennel', 'Jean-Louis', '7 pl St Gilles', '28000', 'CHARTRES', 550.69, NULL, 'PO'),
(41, 'Ain', 'Jean-Pierre', '4 résid Olympia', '2000', 'LAON', 5.59, NULL, 'MH'),
(42, 'Chemery', 'Jean-Pierre', '51 pl Ancienne Boucherie', '14000', 'CAEN', 396.58, NULL, 'MV'),
(43, 'Comoz', 'Jean-Pierre', '35 r Auguste Lechesne', '18000', 'BOURGES', 340.35, NULL, 'PS'),
(44, 'Desfaudais', 'Jean-Pierre', '7 pl St Gilles', '29000', 'BREST', 71.76, NULL, 'PH'),
(45, 'Phan', 'JérÃ´me', '9 r Clos Caillet', '79000', 'NIORT', 451.61, NULL, 'PO'),
(46, 'Riou', 'Line', '43 bd Gén Vanier', '77000', 'MARNE LA VALLEE', 193.25, NULL, 'MH'),
(47, 'Chubilleau', 'Louis', '46 r Eglise', '17000', 'SAINTES', 202.07, NULL, 'MV'),
(48, 'Lebrun', 'Lucette', '178 r Auge', '54000', 'NANCY', 410.41, NULL, 'PS'),
(49, 'Goessens', 'Marc', '6 av 6 Juin', '39000', 'DOLE', 548.57, NULL, 'PH'),
(50, 'Laforge', 'Marc', '5 résid Prairie', '50000', 'SAINT LO', 265.05, NULL, 'PO'),
(51, 'Millereau', 'Marc', '36 av 6 Juin', '72000', 'LA FERTE BERNARD', 430.42, NULL, 'MH'),
(52, 'Dauverne', 'Marie-Christine', '69 av Charlemagne', '21000', 'DIJON', 281.05, NULL, 'MV'),
(53, 'Vittorio', 'Myriam', '3 pl Champlain', '94000', 'BOISSY SAINT LEGER', 356.23, NULL, 'PS'),
(54, 'Lapasset', 'Nhieu', '31 av 6 Juin', '52000', 'CHAUMONT', 107, NULL, 'PH'),
(55, 'Plantet-Besnier', 'Nicole', '10 av 1ère Armée Française', '86000', 'CHATELLEREAULT', 369.94, NULL, 'PO'),
(56, 'Chubilleau', 'Pascal', '3 r Hastings', '15000', 'AURRILLAC', 290.75, NULL, 'MH'),
(57, 'Robert', 'Pascal', '31 r St Jean', '93000', 'BOBIGNY', 162.41, NULL, 'MV'),
(58, 'Jean', 'Pascale', '114 r Authie', '49100', 'SAUMUR', 375.52, NULL, 'PS'),
(59, 'Chanteloube', 'Patrice', '14 av Thiès', '13000', 'MARSEILLE', 478.01, NULL, 'PH'),
(60, 'Lecuirot', 'Patrice', 'résid St Pères 55 r Pigacière', '54000', 'NANCY', 239.66, NULL, 'PO'),
(61, 'Gandon', 'Patrick', '47 av Robert Schuman', '37000', 'TOURS', 599.06, NULL, 'MH'),
(62, 'Mirouf', 'Patrick', '22 r Puits Picard', '74000', 'ANNECY', 458.42, NULL, 'MV'),
(63, 'Boireaux', 'Philippe', '14 av Thiès', '10000', 'CHALON EN CHAMPAGNE', 454.48, NULL, 'PS'),
(64, 'Cendrier', 'Philippe', '7 pl St Gilles', '12000', 'RODEZ', 164.16, NULL, 'PH'),
(65, 'Duhamel', 'Philippe', '114 r Authie', '34000', 'MONTPELLIER', 98.62, NULL, 'PO'),
(66, 'Grigy', 'Philippe', '15 r Mélingue', '44000', 'CLISSON', 285.1, NULL, 'MH'),
(67, 'Linard', 'Philippe', '1 r Albert de Mun', '81000', 'ALBI', 486.3, NULL, 'MV'),
(68, 'Lozier', 'Philippe', '8 r Gaillon', '31000', 'TOULOUSE', 48.4, NULL, 'PS'),
(69, 'Dechâtre', 'Pierre', '63 av Thiès', '23000', 'MONTLUCON', 253.75, NULL, 'PH'),
(70, 'Goessens', 'Pierre', '22 r Jean Romain', '40000', 'MONT DE MARSAN', 426.19, NULL, 'PO'),
(71, 'Leménager', 'Pierre', '39 av 6 Juin', '57000', 'METZ', 118.7, NULL, 'MH'),
(72, 'Née', 'Pierre', '39 av 6 Juin', '82000', 'MONTAUBAN', 72.54, NULL, 'MV'),
(73, 'Guyot', 'Pierre-Laurent', '43 bd Gén Vanier', '48000', 'MENDE', 352.31, NULL, 'PS'),
(74, 'Chauchard', 'Roger', '9 r Vaucelles', '13000', 'MARSEILLE', 552.19, NULL, 'PH'),
(75, 'Mabire', 'Roland', '11 r Boutiques', '67000', 'STRASBOURG', 422.39, NULL, 'PO'),
(76, 'Leroy', 'Soazig', '45 r Boutiques', '61000', 'ALENCON', 570.67, NULL, 'MH'),
(77, 'Guyot', 'Stéphane', '26 r Hérouville', '46000', 'FIGEAC', 28.85, NULL, 'MV'),
(78, 'Delposen', 'Sylvain', '39 av 6 Juin', '27000', 'DREUX', 292.01, NULL, 'PS'),
(79, 'Rault', 'Sylvie', '15 bd Richemond', '2000', 'SOISSON', 526.6, NULL, 'PH'),
(80, 'Renouf', 'Sylvie', '98 bd Mar Lyautey', '88000', 'EPINAL', 425.24, NULL, 'PO'),
(81, 'Alliet-Grach', 'Thierry', '14 av Thiès', '7000', 'PRIVAS', 451.31, NULL, 'MH'),
(82, 'Bayard', 'Thierry', '92 r Falaise', '42000', 'SAINT ETIENNE', 271.71, NULL, 'MV'),
(83, 'Gauchet', 'Thierry', '7 r Desmoueux', '38100', 'GRENOBLE', 406.1, NULL, 'PS'),
(84, 'Bobichon', 'Tristan', '219 r Caponière', '9000', 'FOIX', 218.36, NULL, 'PH'),
(85, 'Duchemin-Laniel', 'Véronique', '130 r St Jean', '33000', 'LIBOURNE', 265.61, NULL, 'PO'),
(86, 'Laurent', 'Younès', '34 r Demolombe', '53000', 'MAYENNE', 496.1, NULL, 'MH');

-- --------------------------------------------------------

--
-- Structure de la table `prescrire`
--

DROP TABLE IF EXISTS `prescrire`;
CREATE TABLE IF NOT EXISTS `prescrire` (
  `MED_DEPOTLEGAL` varchar(10) NOT NULL,
  `TIN_CODE` varchar(5) NOT NULL,
  `DOS_CODE` varchar(10) NOT NULL,
  `PRE_POSOLOGIE` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`MED_DEPOTLEGAL`,`TIN_CODE`,`DOS_CODE`),
  KEY `PRESCRIRE_TYPE_INDIVIDU` (`TIN_CODE`),
  KEY `PRESCRIRE_DOSAGE` (`DOS_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

DROP TABLE IF EXISTS `presentation`;
CREATE TABLE IF NOT EXISTS `presentation` (
  `PRE_CODE` varchar(2) NOT NULL,
  `PRE_LIBELLE` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`PRE_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Structure de la table `rapport_visite`
--

DROP TABLE IF EXISTS `rapport_visite`;
CREATE TABLE IF NOT EXISTS `rapport_visite` (
  `COL_MATRICULE` varchar(10) NOT NULL,
  `RAP_NUM` int(11) NOT NULL,
  `PRA_NUM` int(11) NOT NULL,
  `RAP_DATE` datetime DEFAULT NULL,
  `RAP_BILAN` varchar(255) DEFAULT NULL,
  `RAP_MOTIF_AUTRE` varchar(255) DEFAULT NULL,
  `DATE_VISITE` date DEFAULT NULL,
  `ID_ETAT` varchar(5) DEFAULT NULL,
  `PRA_NUM_REMPLACANT` int(11) DEFAULT NULL,
  `MOT_CODE` int(11) DEFAULT NULL,
  `MED_DEPOTLEGAL_Presente1` varchar(10) DEFAULT NULL,
  `MED_DEPOTLEGAL_Presente2` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`COL_MATRICULE`,`RAP_NUM`),
  KEY `RAPPORT_VISITE_PRATICIEN` (`PRA_NUM`),
  KEY `RAPPORT_VISITE_ETAT` (`ID_ETAT`),
  KEY `RAPPORT_VISITE_PRATICIEN1` (`PRA_NUM_REMPLACANT`),
  KEY `RAPPORT_VISITE_MOTIF_VISITE` (`MOT_CODE`),
  KEY `MED_DEPOTLEGAL_Presente1` (`MED_DEPOTLEGAL_Presente1`),
  KEY `MED_DEPOTLEGAL_Presente2` (`MED_DEPOTLEGAL_Presente2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Déchargement des données de la table `rapport_visite`
--

INSERT INTO `rapport_visite` (`COL_MATRICULE`, `RAP_NUM`, `PRA_NUM`, `RAP_DATE`, `RAP_BILAN`, `RAP_MOTIF_AUTRE`, `DATE_VISITE`, `ID_ETAT`, `PRA_NUM_REMPLACANT`, `MOT_CODE`, `MED_DEPOTLEGAL_Presente1`, `MED_DEPOTLEGAL_Presente2`) VALUES
('a131', 3, 23, '2002-04-18 00:00:00', 'Médecin curieux, à recontacer en décembre pour réunion', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('a131', 7, 41, '2003-03-23 00:00:00', 'RAS\r\nChangement de tel : 05 89 89 89 89', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('a17', 4, 4, '2003-05-21 00:00:00', 'Changement de direction, redéfinition de la politique médicamenteuse, recours au générique', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `REG_CODE` varchar(2) NOT NULL,
  `SEC_CODE` varchar(1) NOT NULL,
  `REG_NOM` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`REG_CODE`),
  KEY `REGION_SECTEUR` (`SEC_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`REG_CODE`, `SEC_CODE`, `REG_NOM`) VALUES
('AL', 'E', 'Alsace Lorraine'),
('AQ', 'S', 'Aquitaine'),
('AU', 'P', 'Auvergne'),
('BG', 'O', 'Bretagne'),
('BN', 'O', 'Basse Normandie'),
('BO', 'E', 'Bourgogne'),
('CA', 'N', 'Champagne Ardennes'),
('CE', 'P', 'Centre'),
('FC', 'E', 'Franche Comté'),
('HN', 'N', 'Haute Normandie'),
('IF', 'P', 'Ile de France'),
('LG', 'S', 'Languedoc'),
('LI', 'P', 'Limousin'),
('MP', 'S', 'Midi Pyrénée'),
('NP', 'N', 'Nord Pas de Calais'),
('PA', 'S', 'Provence Alpes Cote Azur'),
('PC', 'O', 'Poitou Charente'),
('PI', 'N', 'Picardie'),
('PL', 'O', 'Pays de Loire'),
('RA', 'E', 'Rhone Alpes'),
('RO', 'S', 'Roussilon'),
('VD', 'O', 'Vendée');

-- --------------------------------------------------------

--
-- Structure de la table `secteur`
--

DROP TABLE IF EXISTS `secteur`;
CREATE TABLE IF NOT EXISTS `secteur` (
  `SEC_CODE` varchar(1) NOT NULL,
  `SEC_LIBELLE` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`SEC_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Déchargement des données de la table `secteur`
--

INSERT INTO `secteur` (`SEC_CODE`, `SEC_LIBELLE`) VALUES
('E', 'Est'),
('N', 'Nord'),
('O', 'Ouest'),
('P', 'Paris centre'),
('S', 'Sud');

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

DROP TABLE IF EXISTS `specialite`;
CREATE TABLE IF NOT EXISTS `specialite` (
  `SPE_CODE` varchar(5) NOT NULL,
  `SPE_LIBELLE` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`SPE_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Déchargement des données de la table `specialite`
--

INSERT INTO `specialite` (`SPE_CODE`, `SPE_LIBELLE`) VALUES
('ACP', 'anatomie et cytologie pathologiques'),
('AMV', 'angéiologie, médecine vasculaire'),
('ARC', 'anesthésiologie et réanimation chirurgicale'),
('BM', 'biologie médicale'),
('CAC', 'cardiologie et affections cardio-vasculaires'),
('CCT', 'chirurgie cardio-vasculaire et thoracique'),
('CG', 'chirurgie générale'),
('CMF', 'chirurgie maxillo-faciale'),
('COM', 'cancérologie, oncologie médicale'),
('COT', 'chirurgie orthopédique et traumatologie'),
('CPR', 'chirurgie plastique reconstructrice et esthétique'),
('CU', 'chirurgie urologique'),
('CV', 'chirurgie vasculaire'),
('DN', 'diabétologie-nutrition, nutrition'),
('DV', 'dermatologie et vénéréologie'),
('EM', 'endocrinologie et métabolismes'),
('ETD', 'évaluation et traitement de la douleur'),
('GEH', 'gastro-entérologie et hépatologie (appareil digestif)'),
('GMO', 'gynécologie médicale, obstétrique'),
('GO', 'gynécologie-obstétrique'),
('HEM', 'maladies du sang (hématologie)'),
('MBS', 'médecine et biologie du sport'),
('MDT', 'médecine du travail'),
('MMO', 'médecine manuelle - ostéopathie'),
('MN', 'médecine nucléaire'),
('MPR', 'médecine physique et de réadaptation'),
('MTR', 'médecine tropicale, pathologie infectieuse et tropicale'),
('NEP', 'néphrologie'),
('NRC', 'neurochirurgie'),
('NRL', 'neurologie'),
('ODM', 'orthopédie dento maxillo-faciale'),
('OPH', 'ophtalmologie'),
('ORL', 'oto-rhino-laryngologie'),
('PEA', 'psychiatrie de l\'enfant et de l\'adolescent'),
('PME', 'pédiatrie maladies des enfants'),
('PNM', 'pneumologie'),
('PSC', 'psychiatrie'),
('RAD', 'radiologie (radiodiagnostic et imagerie médicale)'),
('RDT', 'radiothérapie (oncologie option radiothérapie)'),
('RGM', 'reproduction et gynécologie médicale'),
('RHU', 'rhumatologie'),
('STO', 'stomatologie'),
('SXL', 'sexologie'),
('TXA', 'toxicomanie et alcoologie');

-- --------------------------------------------------------

--
-- Structure de la table `travailler`
--

DROP TABLE IF EXISTS `travailler`;
CREATE TABLE IF NOT EXISTS `travailler` (
  `COL_MATRICULE` varchar(10) NOT NULL,
  `REG_CODE` varchar(2) NOT NULL,
  PRIMARY KEY (`COL_MATRICULE`,`REG_CODE`),
  KEY `TRAVAILLER_REGION` (`REG_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Déchargement des données de la table `travailler`
--

INSERT INTO `travailler` (`COL_MATRICULE`, `REG_CODE`) VALUES
('a131', 'BN'),
('a17', 'RA'),
('a55', 'MP'),
('a93', 'PC'),
('b13', 'AL'),
('b16', 'BG'),
('b19', 'PL'),
('b28', 'LG'),
('b34', 'CE'),
('b4', 'AQ'),
('b50', 'PA'),
('b59', 'RA'),
('c14', 'PA'),
('c3', 'CA'),
('c54', 'AL'),
('d13', 'PL'),
('d51', 'FC'),
('e22', 'AL'),
('e24', 'AL'),
('e39', 'IF'),
('e49', 'MP'),
('e5', 'AQ'),
('e52', 'HN'),
('f21', 'RA'),
('f39', 'RA'),
('f4', 'MP'),
('g19', 'IF'),
('g30', 'PI'),
('g53', 'BG'),
('g7', 'LI'),
('h13', 'LI'),
('h30', 'IF'),
('h35', 'AU'),
('h40', 'CA'),
('j45', 'CA'),
('j50', 'NP'),
('j8', 'IF'),
('k4', 'LG'),
('k53', 'AL'),
('l14', 'PL'),
('l23', 'PC'),
('l46', 'PL'),
('l56', 'FC'),
('m35', 'MP'),
('m45', 'AL'),
('n42', 'HN'),
('n58', 'CE'),
('n59', 'PI'),
('o26', 'LG'),
('p32', 'IF'),
('p40', 'BN'),
('p41', 'PC'),
('p42', 'PI'),
('p49', 'CE'),
('p6', 'AQ'),
('p7', 'RO'),
('p8', 'BO'),
('q17', 'BN'),
('r24', 'BN'),
('r58', 'BG'),
('s10', 'FC'),
('s21', 'LI'),
('t43', 'BO'),
('t47', 'PI'),
('t55', 'MP'),
('t60', 'CE');

-- --------------------------------------------------------

--
-- Structure de la table `type_individu`
--

DROP TABLE IF EXISTS `type_individu`;
CREATE TABLE IF NOT EXISTS `type_individu` (
  `TIN_CODE` varchar(5) NOT NULL,
  `TIN_LIBELLE` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`TIN_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Structure de la table `type_praticien`
--

DROP TABLE IF EXISTS `type_praticien`;
CREATE TABLE IF NOT EXISTS `type_praticien` (
  `TYP_CODE` varchar(3) NOT NULL,
  `TYP_LIBELLE` varchar(25) DEFAULT NULL,
  `TYP_LIEU` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`TYP_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Déchargement des données de la table `type_praticien`
--

INSERT INTO `type_praticien` (`TYP_CODE`, `TYP_LIBELLE`, `TYP_LIEU`) VALUES
('MH', 'Médecin Hospitalier', 'Hopital ou clinique'),
('MV', 'Médecine de Ville', 'Cabinet'),
('PH', 'Pharmacien Hospitalier', 'Hopital ou clinique'),
('PO', 'Pharmacien Officine', 'Pharmacie'),
('PS', 'Personnel de santé', 'Centre paramédical');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `collaborateur`
--
ALTER TABLE `collaborateur`
  ADD CONSTRAINT `COLLABORATEUR_HABILITATION0_FK` FOREIGN KEY (`HAB_ID`) REFERENCES `habilitation` (`HAB_ID`),
  ADD CONSTRAINT `COLLABORATEUR_REGION0_FK` FOREIGN KEY (`REG_CODE`) REFERENCES `region` (`REG_CODE`),
  ADD CONSTRAINT `COLLABORATEUR_SECTEUR0_FK` FOREIGN KEY (`SEC_CODE`) REFERENCES `secteur` (`SEC_CODE`);

--
-- Contraintes pour la table `formuler`
--
ALTER TABLE `formuler`
  ADD CONSTRAINT `FORMULER_MEDICAMENT` FOREIGN KEY (`MED_DEPOTLEGAL`) REFERENCES `medicament` (`MED_DEPOTLEGAL`),
  ADD CONSTRAINT `FORMULER_PRESENTATION` FOREIGN KEY (`PRE_CODE`) REFERENCES `presentation` (`PRE_CODE`);

--
-- Contraintes pour la table `interagir`
--
ALTER TABLE `interagir`
  ADD CONSTRAINT `INTERAGIR_MEDICAMENT_Perturbateur` FOREIGN KEY (`MED_DEPOTLEGAL_Perturbateur`) REFERENCES `medicament` (`MED_DEPOTLEGAL`),
  ADD CONSTRAINT `INTERAGIR_MEDICAMENT_Perturbé` FOREIGN KEY (`MED_DEPOTLEGAL_Perturbé`) REFERENCES `medicament` (`MED_DEPOTLEGAL`);

--
-- Contraintes pour la table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `LOGIN_COLLABORATEUR` FOREIGN KEY (`COL_MATRICULE`) REFERENCES `collaborateur` (`COL_MATRICULE`);

--
-- Contraintes pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD CONSTRAINT `MEDICAMENT_FAMILLE` FOREIGN KEY (`FAM_CODE`) REFERENCES `famille` (`FAM_CODE`);

--
-- Contraintes pour la table `offrir`
--
ALTER TABLE `offrir`
  ADD CONSTRAINT `OFFRIR_MEDICAMENT` FOREIGN KEY (`MED_DEPOTLEGAL`) REFERENCES `medicament` (`MED_DEPOTLEGAL`),
  ADD CONSTRAINT `OFFRIR_RAPPORT_VISITE` FOREIGN KEY (`COL_MATRICULE`,`RAP_NUM`) REFERENCES `rapport_visite` (`COL_MATRICULE`, `RAP_NUM`);

--
-- Contraintes pour la table `posseder`
--
ALTER TABLE `posseder`
  ADD CONSTRAINT `POSSEDER_PRATICIEN` FOREIGN KEY (`PRA_NUM`) REFERENCES `praticien` (`PRA_NUM`),
  ADD CONSTRAINT `POSSEDER_SPECIALITE` FOREIGN KEY (`SPE_CODE`) REFERENCES `specialite` (`SPE_CODE`);

--
-- Contraintes pour la table `praticien`
--
ALTER TABLE `praticien`
  ADD CONSTRAINT `PRATICIEN_TYPE_PRATICIEN_FK` FOREIGN KEY (`TYP_CODE`) REFERENCES `type_praticien` (`TYP_CODE`);

--
-- Contraintes pour la table `prescrire`
--
ALTER TABLE `prescrire`
  ADD CONSTRAINT `PRESCRIRE_DOSAGE` FOREIGN KEY (`DOS_CODE`) REFERENCES `dosage` (`DOS_CODE`),
  ADD CONSTRAINT `PRESCRIRE_MEDICAMENT` FOREIGN KEY (`MED_DEPOTLEGAL`) REFERENCES `medicament` (`MED_DEPOTLEGAL`),
  ADD CONSTRAINT `PRESCRIRE_TYPE_INDIVIDU` FOREIGN KEY (`TIN_CODE`) REFERENCES `type_individu` (`TIN_CODE`);

--
-- Contraintes pour la table `rapport_visite`
--
ALTER TABLE `rapport_visite`
  ADD CONSTRAINT `MED_DEPOTLEGAL_Presente1` FOREIGN KEY (`MED_DEPOTLEGAL_Presente1`) REFERENCES `medicament` (`MED_DEPOTLEGAL`),
  ADD CONSTRAINT `MED_DEPOTLEGAL_Presente2` FOREIGN KEY (`MED_DEPOTLEGAL_Presente2`) REFERENCES `medicament` (`MED_DEPOTLEGAL`),
  ADD CONSTRAINT `RAPPORT_VISITE_COLLABORATEUR` FOREIGN KEY (`COL_MATRICULE`) REFERENCES `collaborateur` (`COL_MATRICULE`),
  ADD CONSTRAINT `RAPPORT_VISITE_ETAT` FOREIGN KEY (`ID_ETAT`) REFERENCES `etat` (`ID_ETAT`),
  ADD CONSTRAINT `RAPPORT_VISITE_MOTIF_VISITE` FOREIGN KEY (`MOT_CODE`) REFERENCES `motif_visite` (`MOT_CODE`),
  ADD CONSTRAINT `RAPPORT_VISITE_PRATICIEN` FOREIGN KEY (`PRA_NUM`) REFERENCES `praticien` (`PRA_NUM`),
  ADD CONSTRAINT `RAPPORT_VISITE_PRATICIEN1` FOREIGN KEY (`PRA_NUM_REMPLACANT`) REFERENCES `praticien` (`PRA_NUM`);

--
-- Contraintes pour la table `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `REGION_SECTEUR` FOREIGN KEY (`SEC_CODE`) REFERENCES `secteur` (`SEC_CODE`);

--
-- Contraintes pour la table `travailler`
--
ALTER TABLE `travailler`
  ADD CONSTRAINT `TRAVAILLER_COLLABORATEUR` FOREIGN KEY (`COL_MATRICULE`) REFERENCES `collaborateur` (`COL_MATRICULE`),
  ADD CONSTRAINT `TRAVAILLER_REGION` FOREIGN KEY (`REG_CODE`) REFERENCES `region` (`REG_CODE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
