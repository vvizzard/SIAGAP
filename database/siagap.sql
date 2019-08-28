-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 20 Juin 2019 à 14:21
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `siagap`
--

-- --------------------------------------------------------

--
-- Structure de la table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `label` varchar(50) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ap`
--

CREATE TABLE `ap` (
  `id` int(11) NOT NULL,
  `link_photo` varchar(255) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `creation_date` int(11) DEFAULT NULL,
  `region_id` int(11) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `commune` varchar(100) DEFAULT NULL,
  `fokontany` varchar(100) DEFAULT NULL,
  `area` float DEFAULT NULL,
  `demography` int(11) DEFAULT NULL,
  `vision` varchar(512) DEFAULT NULL,
  `mission` varchar(512) DEFAULT NULL,
  `objectif` varchar(255) DEFAULT NULL,
  `contact` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ap`
--

INSERT INTO `ap` (`id`, `link_photo`, `name`, `category_id`, `creation_date`, `region_id`, `district`, `commune`, `fokontany`, `area`, `demography`, `vision`, `mission`, `objectif`, `contact`) VALUES
(1, NULL, 'Ambodivahibe', 5, 2015, 1, 'Diego II', 'Ramena, Mahavanona', '4 Fokontany (Ambodivahibe, Ivovona, Ambavarano, Ampondrahazo)', 23794, 1850, '', 'Conserving and protecting unique biodiversity and natural resources in and around the new protected area', '1- Manage marine resources using legal tools \n2- Ensure effective management of the new protected area through formal structures composed of fishing communities \n3- Develop tourism that will contribute to the sustainable financing of the NAP \n4 – Improve ', 'RAZAFIMANDIMBY Yacinthe \nyrazafimandimby@conservation.org \n034 02 330 06'),
(2, NULL, 'Ampasindava', 5, 2015, NULL, NULL, NULL, NULL, 92595, NULL, ' Conservation de\npaysages terrestres ou marins\net où les interactions harmonieuses Homme/Nature\ncontribuent à maintenir la biodiversité', 'Assurer la conservation de paysages terrestres ou marins et à des fins récréatives, et où les interactions harmonieuses Homme/Nature contribuent à maintenir la\nbiodiversité', 'Conservation les cibles', 'MASAHODY Abdou Andrianjafy\nabdoumasahody@gmail.com\n032 05 431 47'),
(3, NULL, 'Analamerana', 4, 1956, NULL, NULL, NULL, NULL, 34700, NULL, '', '', '', 'RAKOTOARIMANANA Justin\nRakjustin27@gmail.com\n032 09 400 65'),
(4, NULL, 'Andrafiamena', 5, 2015, NULL, NULL, NULL, NULL, 73319, NULL, 'Restauration des ponts biologiques\nforestiers, la revitalisation des forêts-galeries et la constitution de reboisements pare-feu au\nniveau des marges forestières.', 'La gestion des ressources naturelles sera ainsi centrale dans la stratégie d’aménagement et de\ndéveloppement du territoire de la Andrafiamena Andavakoera avec comme objectif prioritaire\nla conservation et la valorisation du patrimoine naturel, culturel et paysager en Paysage\nHarmonieux Protégé (cat. V).', '1. Conforter la richesse et l’originalité des habitats naturels et de la biodiversité de l’Aire Protégée\n2. Transcrire l’esprit de partenariat pour une bonne gouvernance des actions de gestion durable de l’Aire Protégée\n3. Conjuguer l’évolution des activi', 'HOSNAH Hortensia Bezara\nh.bezara@fanamby.org.mg\n032 67 630 63'),
(5, NULL, 'Ankarana', 4, 1956, NULL, NULL, NULL, NULL, 12825, NULL, '', 'Respecter et faire respecter le statut de la Réserve Spéciale suivant les clauses respectives lors de sa mise en place par la mise en œuvre d’une gestion efficace qui garantie la survie de la biodiversité intrinsèque de l’AP', '1.Suppression d’exploitation de saphir dans AP\n2.Limites AP stables et perceptibles\n3.Pression coupe réduite au faible (actuellement Haut)\n4.Points de feu insignifiant par rapport à la vulnerabilité de l’écosystème\n5.Augmentation de 25% de recettes propre', 'SALO Nicolas\nsalonicolas@gmail.com\n032 21 554 23 / 032 09 400 77'),
(6, NULL, 'Ankarea', 5, 2015, NULL, NULL, NULL, NULL, 135566, NULL, '', 'Assurer la protection et le maintien à long terme de la biodiversité, du patrimoine culturel et des services écologiques et promouvoir un développement socio-économique durable pour contribuer à la réduction de la pauvreté en faveur de la population locale.', '1.Intégrité écologique du paysage naturel de l’Aire Protégée Ankarea\n2.Amélioration des conditions et le niveau de vie des communautés riveraines grâce à la promotion de leur développement socio-économique\n3.Mise en place et la pérennisation d’un système ', 'SANTISY Andriamiravo Abdoul\nsantisy@wcsmad.org\n032 11 879 01'),
(7, NULL, 'Ankivonjy', 5, 2015, NULL, NULL, NULL, NULL, 139409, NULL, '', 'Assurer la protection et le maintien à long terme de la biodiversité, du patrimoine culturel et des services écologiques et promouvoir un développement socio-économique durable pour contribuer à la réduction de la pauvreté en faveur de la population locale.', '1.Intégrité écologique du paysage naturel del’Aire Protégée Ankivonjy.\n2.Amélioration des conditions et le niveau de vie des communautés riveraines grâce à la promotion de leur développement socio-économique.\n3.mise en place et la pérennisation d’un systè', ''),
(8, NULL, 'COMATSA', 6, 2015, NULL, NULL, NULL, NULL, 225349, NULL, 'Une aire protégée aménagée dans le but\nde développement durable', 'Assurer la conservation de la biodiversité dans un contexte d’utilisation planifiée de l’espace et d’une gestion durable des ressources naturelles.', '1.Assurer la protection et le maintien à long terme de la diversité biologique et des autres valeurs naturelles du site\n2. Promouvoir les utilisations rationnelles de gestion des ressources naturelles afin d’assurer une productivité durable dans l’intérêt', 'RAFANOMEZANTSOA Andrianasolo Rasandy\nfrasandy@wwf.mg\n034 49 840 04'),
(9, NULL, 'Galoko kalobinono', 5, 2015, NULL, NULL, NULL, NULL, 74205, NULL, 'Gestion pérenne des ressources naturelles de l’Aire Protégée', 'Développer un sous-réseau d’Aires Protégées de ressources naturelles gérées dans les paysages écologiques sous-représentés', '1. Conserver les habitats terrestres et gérer durablement les ressources naturelles\n2. Promouvoir le développement économique de la région\n3. Assurer la participation actives des parties prennantes régionales et locales', 'FAHARIDINI\nfaharidinidiego@yahoo.fr\n032 05 431 46/032 05 125 16'),
(10, NULL, 'Manongarivo', 4, 1956, NULL, NULL, NULL, NULL, 37635, NULL, 'Une gestion durable de l’AP afin de préserver les biodiversités', 'Preserver les biodiversités en faunistique et floristique dans les AP', 'Réduire les préssions à 50% par cible de conservation dans les AP en 2019', 'ANDRIAMANIRY Charles Marie\ntst@parcs-madagascar.com ; manirimeva@yahoo.fr\n032 02 835 30 / 032 09 400 80'),
(11, NULL, 'Montagne d\'Ambre', 1, 1958, NULL, NULL, NULL, NULL, 30538, NULL, 'Faire de MNP une Institution pérenne de notoriété reconnue tant sur le plan national qu’international par les investisseurs, les partenaires techniques et par ses clients                        ', 'Etablir, conserver et de gérer durablement un réseau national de Parcs et Réserves représentatif\nde la diversité biologique et du patrimoine naturel propres à Madagascar                        ', '1-Maintien de l’intégrité écologique de l’AP\n2-Maintien de l’intégrité de la population de lémuriens\n3-Autofinancement charges fixes en 2017\n4-Zero defrichement a l’intérieur                        ', 'VENTY Odile\nventyodile@yahoo.fr\n032 09 400 72    \n                \n            '),
(12, NULL, 'Montagne des français', 5, 2015, NULL, NULL, NULL, NULL, 6049, NULL, 'Conservation de la biodiversité unique et des valeurs culturelles, historiques et sociales pour le bien être de la communauté et le développement durable de la région de DIANA', 'Les structures et le système de gestion assurent la conservation de la valeure culturelle et naturelle d’Ambohitr’Antsingy MDF', '1. Les processus de pérennisation sont identifiés et mis en oeuvre\n2. La richesse unique en biodiversité de l’AP est sauvegardée et sa viabilité assurée grâce à la maîtrise des risques\n3. Les patrimoines culturels, traditionnels et historiques sont valori', 'RAHAROSOA Ny Anjatahiana\nnyanjatahiana@yahoo.fr\n032 25 847 84'),
(13, NULL, 'Nosy Hara', 2, 2011, NULL, NULL, NULL, NULL, 125471, NULL, 'Le réseau d’AP devra constituer un levier d’incitations économiques auprès des populations locales, attirer l’investissement et assurer la pérennité financière à tous les niveaux de gestion.', 'Conserver et gérer de manière durable les Parcs et Réserves de Madagascar', '1. Réduction des pressions sur les cible de conservation et maintien de l’intégrité écologique de la population\n2. Elaboration et mise en oeuvre d’un Plan d’aménagement et de gestion', 'BAKARIZAFY Hervé\nherve_bakarizafy@yahoo.fr\n033 49 400 85'),
(14, NULL, 'Oronjia', 5, 2015, NULL, NULL, NULL, NULL, 1648, NULL, 'Restaurer la forêt Oronjia et utiliser rationnellement les ressources naturelles et culturelles', 'Instauration d’un équilibre harmonieux entre la conservation de la biodiversité et les pratiques traditionnelles de la population locale', '', 'RAZAFITSALAMA  Lalao Jérémi Jean Francois Regis\njeremie.razafitsalama@mobot-mg.org\n034 11 639 30'),
(15, NULL, 'Tsaratanana', 1, 1927, NULL, NULL, NULL, NULL, 108610, NULL, 'Une gestion durable de l’AP afin de préserver les biodiversités', 'Preserver les biodiversités en faunistique et floristique dans les AP', '1. Conserver les habitats terrestres et gérer durablement les ressources naturelles\n2. Réduire les pressions par cible de conservation dans l’AP\n3. Assurer la participation actives des parties prennantes régionales et locales', 'ANDRIAMANIRY Charles Marie\ntst@parcs-madagascar.com ; manirimeva@yahoo.fr\n032 02 835 30 / 032 09 400 80');

-- --------------------------------------------------------

--
-- Structure de la table `association_activity_danger`
--

CREATE TABLE `association_activity_danger` (
  `id` int(11) NOT NULL,
  `activity_id` int(11) DEFAULT NULL,
  `danger_id` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `association_ap_cible`
--

CREATE TABLE `association_ap_cible` (
  `id` int(11) NOT NULL,
  `ap_id` int(11) DEFAULT NULL,
  `cible_id` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

CREATE TABLE `stat_ap_cible` (
  `id` int NOT NULL primary key auto_increment,
  `association_ap_cible_id` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `year` varchar(4) DEFAULT NULL,
  `fiabilite` int(1) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  FOREIGN KEY (association_ap_cible_id) REFERENCES association_ap_cible(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `stat_ap_menace` (
  `id` int NOT NULL primary key auto_increment, 
  `association_ap_pression_id` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `year` varchar(4) DEFAULT NULL,
  `fiabilite` int(1) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  FOREIGN KEY (association_ap_pression_id) REFERENCES association_ap_pression(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `cc_historique_temperature` (
  `id` int NOT NULL primary key auto_increment, 
  `ap_id` int(11) DEFAULT NULL,
  `ap_label` varchar(30) DEFAULT NULL,
  `january` float DEFAULT NULL,
  `february` float DEFAULT NULL,
  `march` float DEFAULT NULL,
  `april` float DEFAULT NULL,
  `may` float DEFAULT NULL,
  `june` float DEFAULT NULL,
  `july` float DEFAULT NULL,
  `august` float DEFAULT NULL,
  `septembre` float DEFAULT NULL,
  `october` float DEFAULT NULL,
  `november` float DEFAULT NULL,
  `december` float DEFAULT NULL,
  FOREIGN KEY (ap_id) REFERENCES ap(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `cc_projection_temperature` (
  `id` int NOT NULL primary key auto_increment, 
  `ap_id` int(11) DEFAULT NULL,
  `ap_label` varchar(30) DEFAULT NULL,
  `january` float DEFAULT NULL,
  `february` float DEFAULT NULL,
  `march` float DEFAULT NULL,
  `april` float DEFAULT NULL,
  `may` float DEFAULT NULL,
  `june` float DEFAULT NULL,
  `july` float DEFAULT NULL,
  `august` float DEFAULT NULL,
  `septembre` float DEFAULT NULL,
  `october` float DEFAULT NULL,
  `november` float DEFAULT NULL,
  `december` float DEFAULT NULL,
  FOREIGN KEY (ap_id) REFERENCES ap(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `cc_historique_precipitation` (
  `id` int NOT NULL primary key auto_increment, 
  `ap_id` int(11) DEFAULT NULL,
  `ap_label` varchar(30) DEFAULT NULL,
  `january` float DEFAULT NULL,
  `february` float DEFAULT NULL,
  `march` float DEFAULT NULL,
  `april` float DEFAULT NULL,
  `may` float DEFAULT NULL,
  `june` float DEFAULT NULL,
  `july` float DEFAULT NULL,
  `august` float DEFAULT NULL,
  `septembre` float DEFAULT NULL,
  `october` float DEFAULT NULL,
  `november` float DEFAULT NULL,
  `december` float DEFAULT NULL,
  FOREIGN KEY (ap_id) REFERENCES ap(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `cc_projection_precipitation` (
  `id` int NOT NULL primary key auto_increment, 
  `ap_id` int(11) DEFAULT NULL,
  `ap_label` varchar(30) DEFAULT NULL,
  `january` float DEFAULT NULL,
  `february` float DEFAULT NULL,
  `march` float DEFAULT NULL,
  `april` float DEFAULT NULL,
  `may` float DEFAULT NULL,
  `june` float DEFAULT NULL,
  `july` float DEFAULT NULL,
  `august` float DEFAULT NULL,
  `septembre` float DEFAULT NULL,
  `october` float DEFAULT NULL,
  `november` float DEFAULT NULL,
  `december` float DEFAULT NULL,
  FOREIGN KEY (ap_id) REFERENCES ap(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `accessibilite` (
  `id` int(11) NOT NULL primary key auto_increment,
  `label` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `association_ap_accessibilite` (
  `id` int(11) NOT NULL primary key auto_increment,
  `ap_id` int(11) DEFAULT NULL,
  `accessibilite_id` int(11) DEFAULT NULL,
  `note` int(1) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  FOREIGN KEY (ap_id) REFERENCES ap(id),
  FOREIGN KEY (accessibilite_id) REFERENCES accessibilite(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `photos` (
  `id` int(11) NOT NULL primary key auto_increment,
  `path` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `ap_id` int DEFAULT NULL,
  `cible_id` int DEFAULT NULL,
  `date` date,
  FOREIGN KEY (ap_id) REFERENCES ap(id),
  FOREIGN KEY (cible_id) REFERENCES cible(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `ci_sessions` (
	`id` varchar(40) NOT NULL,
	`ip_address` varchar(45) NOT NULL,
	`timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
	`data` blob NOT NULL,
	PRIMARY KEY (id),
	KEY `ci_sessions_timestamp` (`timestamp`)
);

CREATE TABLE IF NOT EXISTS `utilisateur` (
	`id` int NOT NULL PRIMARY KEY auto_increment,
	`nom` varchar(100) NOT NULL,
	`email` varchar(100) NOT NULL,
	`password` varchar(255) NOT NULL,
	`ap_id` int DEFAULT NULL,
	`lvl_id` int DEFAULT NULL,
	FOREIGN KEY (ap_id) REFERENCES ap(id),
	FOREIGN KEY (lvl_id) REFERENCES lvl_user(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `lvl_user` (
	`id` int NOT NULL PRIMARY KEY auto_increment,
	`label` varchar(100) NOT NULL,
	`lvl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `link_ext` (
	`id` int NOT NULL PRIMARY KEY auto_increment,
	`label` varchar(255) NOT NULL,
	`link` varchar(255) NOT NULL,
	`ap_id` int NOT NULL,
	`comment` varchar(255),
	FOREIGN KEY (ap_id) REFERENCES ap(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `pag_d` (
	`id` int NOT NULL PRIMARY KEY auto_increment,
	`date` date,
	`path` varchar(255) NOT NULL,
	`ap_id` int NOT NULL,
	`comment` varchar(255),
	FOREIGN KEY (ap_id) REFERENCES ap(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE ap
	ADD COLUMN nom_complet varchar(255),
	ADD COLUMN gestion_interne varchar(255),
	ADD COLUMN protection varchar(255),
	ADD COLUMN relation varchar(255),
	ADD COLUMN tourisme varchar(255),
	ADD COLUMN suivie varchar(255),
	ADD COLUMN impact varchar(255);
	
ALTER TABLE ap
	ADD COLUMN subsistance varchar(2048),
	ADD COLUMN pression varchar(2048);
	
ALTER TABLE ap
	ADD COLUMN probleme varchar(2048);
	
ALTER TABLE ap
	ADD COLUMN comm_temperature varchar(2048),
	ADD COLUMN comm_adaptation_cc varchar(2048),
	ADD COLUMN comm_tendance_cible varchar(2048),
	ADD COLUMN comm_tendance_menace varchar(2048),
	ADD COLUMN comm_precipitation varchar(2048);
	
CREATE TABLE IF NOT EXISTS `category_cible` (
	`id` int NOT NULL PRIMARY KEY auto_increment,
	`label` varchar(255) NOT NULL,
	`comment` varchar(255)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE cible 
	ADD COLUMN category_id INTEGER,
	ADD FOREIGN KEY (category_id) REFERENCES category_cible(id);
	
INSERT INTO category_cible (label) VALUES
	('Primates'),
	('Carnivores'),
	('Oiseaux'),
	('Amphibiens et reptiles'),
	('Poissons/requins/raies'),
	('Plantes et essences forestières'),
	('Forêts et mangroves'),
	('Lac et marais'),
	('Récifs coralliens et herbiers marins');	
--
-- Structure de la table `association_ap_gestionnaire`
--

CREATE TABLE `association_ap_gestionnaire` (
  `id` int(11) NOT NULL,
  `ap_id` int(11) DEFAULT NULL,
  `gestionnaire_id` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `association_ap_level`
--

CREATE TABLE `association_ap_level` (
  `id` int(11) NOT NULL,
  `ap_id` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `association_ap_pression`
--

CREATE TABLE `association_ap_pression` (
  `id` int(11) NOT NULL,
  `ap_id` int(11) DEFAULT NULL,
  `pression_id` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `association_ap_pression`
--

INSERT INTO `association_ap_pression` (`id`, `ap_id`, `pression_id`, `comment`) VALUES
(6, 1, 10, ''),
(7, 1, 9, ''),
(8, 1, 8, ''),
(9, 1, 6, '');

-- --------------------------------------------------------

--
-- Structure de la table `association_ap_problem`
--

CREATE TABLE `association_ap_problem` (
  `id` int(11) NOT NULL,
  `ap_id` int(11) DEFAULT NULL,
  `problem_id` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `association_ap_problem`
--

INSERT INTO `association_ap_problem` (`id`, `ap_id`, `problem_id`, `comment`) VALUES
(1, 1, 3, ''),
(2, 1, 2, ''),
(3, 1, 1, '');

-- --------------------------------------------------------

--
-- Structure de la table `association_ap_subsistance`
--

CREATE TABLE `association_ap_subsistance` (
  `id` int(11) NOT NULL,
  `ap_id` int(11) DEFAULT NULL,
  `subsistance_id` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `association_ap_subsistance`
--

INSERT INTO `association_ap_subsistance` (`id`, `ap_id`, `subsistance_id`, `comment`) VALUES
(18, 14, 7, ''),
(19, 14, 6, ''),
(20, 14, 5, ''),
(21, 14, 3, ''),
(22, 15, 6, ''),
(23, 15, 5, ''),
(79, 11, 6, ''),
(80, 11, 5, ''),
(81, 11, 1, ''),
(95, 1, 7, ''),
(96, 1, 6, ''),
(97, 1, 5, '');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `label` varchar(50) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `label`, `comment`) VALUES
(1, 'Catégorie I', NULL),
(2, 'Catégorie II', NULL),
(3, 'Catégorie III', NULL),
(4, 'Catégorie IV', NULL),
(5, 'Catégorie V', NULL),
(6, 'Catégorie VI', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `cible`
--

CREATE TABLE `cible` (
  `id` int(11) NOT NULL,
  `label` varchar(50) DEFAULT NULL,
  `link_photo` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cible`
--

INSERT INTO `cible` (`id`, `label`, `link_photo`, `comment`) VALUES
(1, 'Tortue', NULL, NULL),
(2, 'Lémurien', NULL, NULL),
(3, 'Poisson', NULL, NULL),
(4, 'Réptile', NULL, NULL),
(5, 'Plante', NULL, NULL),
(6, 'Forêt', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `danger_cible`
--

CREATE TABLE `danger_cible` (
  `id` int(11) NOT NULL,
  `cible_id` int(11) DEFAULT NULL,
  `pression_id` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `detail_intrant`
--

CREATE TABLE `detail_intrant` (
  `id` int(11) NOT NULL,
  `intrant_id` int(11) DEFAULT NULL,
  `label` varchar(100) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `detail_pag`
--

CREATE TABLE `detail_pag` (
  `id` int(11) NOT NULL,
  `pag_id` int(11) DEFAULT NULL,
  `label` varchar(100) DEFAULT NULL,
  `impact` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `gestionnaire`
--

CREATE TABLE `gestionnaire` (
  `id` int(11) NOT NULL,
  `label` varchar(50) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `gestionnaire`
--

INSERT INTO `gestionnaire` (`id`, `label`, `comment`) VALUES
(1, 'WWF', NULL),
(2, 'WWF', NULL),
(3, 'MNP', NULL),
(4, 'DURRELL', NULL),
(5, 'FAMELONA', NULL),
(6, 'MBG', NULL),
(7, 'SAGE', NULL),
(8, 'ASSOCIATION', NULL),
(9, 'WCS', NULL),
(10, 'FANAMBY', NULL),
(11, 'CI', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `intrant`
--

CREATE TABLE `intrant` (
  `id` int(11) NOT NULL,
  `ap_id` int(11) DEFAULT NULL,
  `creation_date` date DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `layer`
--

CREATE TABLE `layer` (
  `id` int(11) NOT NULL,
  `ap_id` int(11) DEFAULT NULL,
  `geojson` varchar(255) DEFAULT NULL,
  `creation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `label` varchar(50) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pag`
--

CREATE TABLE `pag` (
  `id` int(11) NOT NULL,
  `pag_date` date DEFAULT NULL,
  `ap_id` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pression`
--

CREATE TABLE `pression` (
  `id` int(11) NOT NULL,
  `label` varchar(50) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pression`
--

INSERT INTO `pression` (`id`, `label`, `comment`) VALUES
(1, 'Surexploitation', NULL),
(2, 'Chasse', NULL),
(3, 'Occupation illicite', NULL),
(4, 'Divagation de bétail', NULL),
(5, 'Défriche', NULL),
(6, 'Coupe', NULL),
(7, 'Feu', NULL),
(8, 'Pêche destructive', '          '),
(9, 'Braconnage', ''),
(10, 'Destruction d\'habitats', '');

-- --------------------------------------------------------

--
-- Structure de la table `pression_cause`
--

CREATE TABLE `pression_cause` (
  `id` int(11) NOT NULL,
  `pression_id` int(11) DEFAULT NULL,
  `subsistance_id` int(11) DEFAULT NULL,
  `problem_id` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `problem`
--

CREATE TABLE `problem` (
  `id` int(11) NOT NULL,
  `label` varchar(50) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `problem`
--

INSERT INTO `problem` (`id`, `label`, `comment`) VALUES
(1, 'Manque d\'opportunités', '          '),
(2, 'Aléas climatique', ''),
(3, 'Accès limité', '');

-- --------------------------------------------------------

--
-- Structure de la table `realisation`
--

CREATE TABLE `realisation` (
  `id` int(11) NOT NULL,
  `ap_id` int(11) DEFAULT NULL,
  `date_realisation` date DEFAULT NULL,
  `global_level` float DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `label` varchar(50) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `region`
--

INSERT INTO `region` (`id`, `label`, `comment`) VALUES
(1, 'Diana', NULL),
(2, 'SAVA', NULL),
(3, 'Analamanga', NULL),
(5, 'Vakinakaratra', ''),
(6, 'Bongolava', ''),
(7, 'Itasy', ''),
(8, 'Toamasina', ''),
(9, 'Vangaindrano', ''),
(10, 'Analanjirofo', '');

-- --------------------------------------------------------

--
-- Structure de la table `repartition_level`
--

CREATE TABLE `repartition_level` (
  `id` int(11) NOT NULL,
  `level_id` int(11) DEFAULT NULL,
  `nbr_man` int(11) DEFAULT NULL,
  `nbr_women` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `subsistance`
--

CREATE TABLE `subsistance` (
  `id` int(11) NOT NULL,
  `label` varchar(50) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `subsistance`
--

INSERT INTO `subsistance` (`id`, `label`, `comment`) VALUES
(1, 'Artisanat', NULL),
(2, 'Transport', NULL),
(3, 'Tourisme', NULL),
(4, 'Bois-énergie', NULL),
(5, 'Elevage', NULL),
(6, 'Agriculture', NULL),
(7, 'Pêche', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ap`
--
ALTER TABLE `ap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_category_id_ap` (`category_id`),
  ADD KEY `FK_region_id_ap` (`region_id`);

--
-- Index pour la table `association_activity_danger`
--
ALTER TABLE `association_activity_danger`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_activity_id_association_activity_danger` (`activity_id`),
  ADD KEY `FK_danger_id_association_activity_danger` (`danger_id`);

--
-- Index pour la table `association_ap_cible`
--
ALTER TABLE `association_ap_cible`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ap_id_association_ap_cible` (`ap_id`),
  ADD KEY `FK_cible_id_association_ap_cible` (`cible_id`);

--
-- Index pour la table `association_ap_gestionnaire`
--
ALTER TABLE `association_ap_gestionnaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ap_id_association_ap_gestionnaire` (`ap_id`),
  ADD KEY `FK_gestionnaire_id_association_ap_gestionnaire` (`gestionnaire_id`);

--
-- Index pour la table `association_ap_level`
--
ALTER TABLE `association_ap_level`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ap_id_association_ap_level` (`ap_id`),
  ADD KEY `FK_level_id_association_ap_level` (`level_id`);

--
-- Index pour la table `association_ap_pression`
--
ALTER TABLE `association_ap_pression`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ap_id_association_ap_pression` (`ap_id`),
  ADD KEY `FK_pression_id_association_ap_pression` (`pression_id`);

--
-- Index pour la table `association_ap_problem`
--
ALTER TABLE `association_ap_problem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ap_id_association_ap_problem` (`ap_id`),
  ADD KEY `FK_problem_id_association_ap_problem` (`problem_id`);

--
-- Index pour la table `association_ap_subsistance`
--
ALTER TABLE `association_ap_subsistance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ap_id_association_ap_subsistance` (`ap_id`),
  ADD KEY `FK_subsistance_id_association_ap_subsistance` (`subsistance_id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cible`
--
ALTER TABLE `cible`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `danger_cible`
--
ALTER TABLE `danger_cible`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_cible_id_danger_cible` (`cible_id`),
  ADD KEY `FK_pression_id_danger_cible` (`pression_id`);

--
-- Index pour la table `detail_intrant`
--
ALTER TABLE `detail_intrant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_intrant_id_detail_intrant` (`intrant_id`);

--
-- Index pour la table `detail_pag`
--
ALTER TABLE `detail_pag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_pag_id_detail_pag` (`pag_id`);

--
-- Index pour la table `gestionnaire`
--
ALTER TABLE `gestionnaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `intrant`
--
ALTER TABLE `intrant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ap_id_intrant` (`ap_id`);

--
-- Index pour la table `layer`
--
ALTER TABLE `layer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ap_id_layer` (`ap_id`);

--
-- Index pour la table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pag`
--
ALTER TABLE `pag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ap_id_pag` (`ap_id`);

--
-- Index pour la table `pression`
--
ALTER TABLE `pression`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pression_cause`
--
ALTER TABLE `pression_cause`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_pression_id_pression_cause` (`pression_id`),
  ADD KEY `FK_subsistance_id_pression_cause` (`subsistance_id`),
  ADD KEY `FK_problem_id_pression_cause` (`problem_id`);

--
-- Index pour la table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `realisation`
--
ALTER TABLE `realisation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ap_id_realisation` (`ap_id`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `repartition_level`
--
ALTER TABLE `repartition_level`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_level_id_repartition_level` (`level_id`);

--
-- Index pour la table `subsistance`
--
ALTER TABLE `subsistance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ap`
--
ALTER TABLE `ap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `association_activity_danger`
--
ALTER TABLE `association_activity_danger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `association_ap_cible`
--
ALTER TABLE `association_ap_cible`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `association_ap_gestionnaire`
--
ALTER TABLE `association_ap_gestionnaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `association_ap_level`
--
ALTER TABLE `association_ap_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `association_ap_pression`
--
ALTER TABLE `association_ap_pression`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `association_ap_problem`
--
ALTER TABLE `association_ap_problem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `association_ap_subsistance`
--
ALTER TABLE `association_ap_subsistance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `cible`
--
ALTER TABLE `cible`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `danger_cible`
--
ALTER TABLE `danger_cible`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `detail_intrant`
--
ALTER TABLE `detail_intrant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `detail_pag`
--
ALTER TABLE `detail_pag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `gestionnaire`
--
ALTER TABLE `gestionnaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `intrant`
--
ALTER TABLE `intrant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `layer`
--
ALTER TABLE `layer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pag`
--
ALTER TABLE `pag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pression`
--
ALTER TABLE `pression`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `pression_cause`
--
ALTER TABLE `pression_cause`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `problem`
--
ALTER TABLE `problem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `realisation`
--
ALTER TABLE `realisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `repartition_level`
--
ALTER TABLE `repartition_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `subsistance`
--
ALTER TABLE `subsistance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `ap`
--
ALTER TABLE `ap`
  ADD CONSTRAINT `FK_category_id_ap` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `FK_region_id_ap` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`);

--
-- Contraintes pour la table `association_activity_danger`
--
ALTER TABLE `association_activity_danger`
  ADD CONSTRAINT `FK_activity_id_association_activity_danger` FOREIGN KEY (`activity_id`) REFERENCES `activity` (`id`),
  ADD CONSTRAINT `FK_danger_id_association_activity_danger` FOREIGN KEY (`danger_id`) REFERENCES `danger_cible` (`id`);

--
-- Contraintes pour la table `association_ap_cible`
--
ALTER TABLE `association_ap_cible`
  ADD CONSTRAINT `FK_ap_id_association_ap_cible` FOREIGN KEY (`ap_id`) REFERENCES `ap` (`id`),
  ADD CONSTRAINT `FK_cible_id_association_ap_cible` FOREIGN KEY (`cible_id`) REFERENCES `cible` (`id`);

--
-- Contraintes pour la table `association_ap_gestionnaire`
--
ALTER TABLE `association_ap_gestionnaire`
  ADD CONSTRAINT `FK_ap_id_association_ap_gestionnaire` FOREIGN KEY (`ap_id`) REFERENCES `ap` (`id`),
  ADD CONSTRAINT `FK_gestionnaire_id_association_ap_gestionnaire` FOREIGN KEY (`gestionnaire_id`) REFERENCES `gestionnaire` (`id`);

--
-- Contraintes pour la table `association_ap_level`
--
ALTER TABLE `association_ap_level`
  ADD CONSTRAINT `FK_ap_id_association_ap_level` FOREIGN KEY (`ap_id`) REFERENCES `ap` (`id`),
  ADD CONSTRAINT `FK_level_id_association_ap_level` FOREIGN KEY (`level_id`) REFERENCES `repartition_level` (`id`);

--
-- Contraintes pour la table `association_ap_pression`
--
ALTER TABLE `association_ap_pression`
  ADD CONSTRAINT `FK_ap_id_association_ap_pression` FOREIGN KEY (`ap_id`) REFERENCES `ap` (`id`),
  ADD CONSTRAINT `FK_pression_id_association_ap_pression` FOREIGN KEY (`pression_id`) REFERENCES `pression` (`id`);

--
-- Contraintes pour la table `association_ap_problem`
--
ALTER TABLE `association_ap_problem`
  ADD CONSTRAINT `FK_ap_id_association_ap_problem` FOREIGN KEY (`ap_id`) REFERENCES `ap` (`id`),
  ADD CONSTRAINT `FK_problem_id_association_ap_problem` FOREIGN KEY (`problem_id`) REFERENCES `problem` (`id`);

--
-- Contraintes pour la table `association_ap_subsistance`
--
ALTER TABLE `association_ap_subsistance`
  ADD CONSTRAINT `FK_ap_id_association_ap_subsistance` FOREIGN KEY (`ap_id`) REFERENCES `ap` (`id`),
  ADD CONSTRAINT `FK_subsistance_id_association_ap_subsistance` FOREIGN KEY (`subsistance_id`) REFERENCES `subsistance` (`id`);

--
-- Contraintes pour la table `danger_cible`
--
ALTER TABLE `danger_cible`
  ADD CONSTRAINT `FK_cible_id_danger_cible` FOREIGN KEY (`cible_id`) REFERENCES `cible` (`id`),
  ADD CONSTRAINT `FK_pression_id_danger_cible` FOREIGN KEY (`pression_id`) REFERENCES `pression` (`id`);

--
-- Contraintes pour la table `detail_intrant`
--
ALTER TABLE `detail_intrant`
  ADD CONSTRAINT `FK_intrant_id_detail_intrant` FOREIGN KEY (`intrant_id`) REFERENCES `intrant` (`id`);

--
-- Contraintes pour la table `detail_pag`
--
ALTER TABLE `detail_pag`
  ADD CONSTRAINT `FK_pag_id_detail_pag` FOREIGN KEY (`pag_id`) REFERENCES `pag` (`id`);

--
-- Contraintes pour la table `intrant`
--
ALTER TABLE `intrant`
  ADD CONSTRAINT `FK_ap_id_intrant` FOREIGN KEY (`ap_id`) REFERENCES `ap` (`id`);

--
-- Contraintes pour la table `layer`
--
ALTER TABLE `layer`
  ADD CONSTRAINT `FK_ap_id_layer` FOREIGN KEY (`ap_id`) REFERENCES `ap` (`id`);

--
-- Contraintes pour la table `pag`
--
ALTER TABLE `pag`
  ADD CONSTRAINT `FK_ap_id_pag` FOREIGN KEY (`ap_id`) REFERENCES `ap` (`id`);

--
-- Contraintes pour la table `pression_cause`
--
ALTER TABLE `pression_cause`
  ADD CONSTRAINT `FK_pression_id_pression_cause` FOREIGN KEY (`pression_id`) REFERENCES `pression` (`id`),
  ADD CONSTRAINT `FK_problem_id_pression_cause` FOREIGN KEY (`problem_id`) REFERENCES `problem` (`id`),
  ADD CONSTRAINT `FK_subsistance_id_pression_cause` FOREIGN KEY (`subsistance_id`) REFERENCES `subsistance` (`id`);

--
-- Contraintes pour la table `realisation`
--
ALTER TABLE `realisation`
  ADD CONSTRAINT `FK_ap_id_realisation` FOREIGN KEY (`ap_id`) REFERENCES `ap` (`id`);

--
-- Contraintes pour la table `repartition_level`
--
ALTER TABLE `repartition_level`
  ADD CONSTRAINT `FK_level_id_repartition_level` FOREIGN KEY (`level_id`) REFERENCES `level` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
