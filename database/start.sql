/* CATEGORY */
CREATE TABLE IF NOT EXISTS category(
    id INT AUTO_INCREMENT,
	label VARCHAR(50),
	comment VARCHAR(255),
	PRIMARY KEY (id)
) ENGINE=InnoDB;

/* REGION */
CREATE TABLE IF NOT EXISTS region(
    id INT AUTO_INCREMENT,
	label VARCHAR(50),
	comment VARCHAR(255),
	PRIMARY KEY (id)
) ENGINE=InnoDB;

/* AP */
CREATE TABLE IF NOT EXISTS ap(
    id INT AUTO_INCREMENT,
	link_photo VARCHAR(255),
	name VARCHAR(50),
	category_id INT,
	creation_date INT,
	region_id INT,
	district VARCHAR(100),
	commune VARCHAR(100),
	fokontany VARCHAR(100),
	area FLOAT,
	demography INT,
	vision VARCHAR(500),
	contact VARCHAR(500),
	mission VARCHAR(500),
	objectif VARCHAR(255),
	PRIMARY KEY (id),
	CONSTRAINT FK_category_id_ap FOREIGN KEY (category_id)
    REFERENCES category(id),
	CONSTRAINT FK_region_id_ap FOREIGN KEY (region_id)
    REFERENCES region(id)
) ENGINE=InnoDB;

/* LAYER */
CREATE TABLE IF NOT EXISTS layer(
    id INT AUTO_INCREMENT,
	ap_id INT,
	geojson VARCHAR(255),
	creation_date date,
	PRIMARY KEY (id),
	CONSTRAINT FK_ap_id_layer FOREIGN KEY (ap_id)
    REFERENCES ap(id)
) ENGINE=InnoDB;

/* GESTIONNAIRE */
CREATE TABLE IF NOT EXISTS gestionnaire(
    id INT AUTO_INCREMENT,
	label VARCHAR(50),
	comment VARCHAR(255),
	PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS association_ap_gestionnaire(
    id INT AUTO_INCREMENT,
	ap_id INT,
	gestionnaire_id INT,
	comment VARCHAR(255),
	PRIMARY KEY (id),
	CONSTRAINT FK_ap_id_association_ap_gestionnaire FOREIGN KEY (ap_id)
    REFERENCES ap(id),
	CONSTRAINT FK_gestionnaire_id_association_ap_gestionnaire FOREIGN KEY (gestionnaire_id)
    REFERENCES gestionnaire(id)
) ENGINE=InnoDB;

/* SUBSISTANCE */
CREATE TABLE IF NOT EXISTS subsistance(
    id INT AUTO_INCREMENT,
	label VARCHAR(50),
	comment VARCHAR(255),
	PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS association_ap_subsistance(
    id INT AUTO_INCREMENT,
	ap_id INT,
	subsistance_id INT,
	comment VARCHAR(255),
	PRIMARY KEY (id),
	CONSTRAINT FK_ap_id_association_ap_subsistance FOREIGN KEY (ap_id)
    REFERENCES ap(id),
	CONSTRAINT FK_subsistance_id_association_ap_subsistance FOREIGN KEY (subsistance_id)
    REFERENCES subsistance(id)
) ENGINE=InnoDB;

/* PRESSION */
CREATE TABLE IF NOT EXISTS pression(
    id INT AUTO_INCREMENT,
	label VARCHAR(50),
	comment VARCHAR(255),
	PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS problem(
    id INT AUTO_INCREMENT,
	label VARCHAR(50),
	comment VARCHAR(255),
	PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS association_ap_problem(
    id INT AUTO_INCREMENT,
	ap_id INT,
	problem_id INT,
	comment VARCHAR(255),
	PRIMARY KEY (id),
	CONSTRAINT FK_ap_id_association_ap_problem FOREIGN KEY (ap_id)
    REFERENCES ap(id),
	CONSTRAINT FK_problem_id_association_ap_problem FOREIGN KEY (problem_id)
    REFERENCES problem(id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS pression_cause(
    id INT AUTO_INCREMENT,
	id_ap INT,
	pression_id INT,
	subsistance_id INT,
	problem_id INT,
	comment VARCHAR(255),
	PRIMARY KEY (id),
	CONSTRAINT FK_pression_id_pression_cause FOREIGN KEY (pression_id)
    REFERENCES pression(id),
	CONSTRAINT FK_subsistance_id_pression_cause FOREIGN KEY (subsistance_id)
    REFERENCES subsistance(id),
	CONSTRAINT FK_problem_id_pression_cause FOREIGN KEY (problem_id)
    REFERENCES problem(id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS association_ap_pression(
    id INT AUTO_INCREMENT,
	ap_id INT,
	pression_id INT,
	comment VARCHAR(255),
	PRIMARY KEY (id),
	CONSTRAINT FK_ap_id_association_ap_pression FOREIGN KEY (ap_id)
    REFERENCES ap(id),
	CONSTRAINT FK_pression_id_association_ap_pression FOREIGN KEY (pression_id)
    REFERENCES pression(id)
) ENGINE=InnoDB;

/* CIBLE */
CREATE TABLE IF NOT EXISTS cible(
    id INT AUTO_INCREMENT,
	label VARCHAR(50),
	link_photo VARCHAR(255),
	comment VARCHAR(255),
	PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS association_ap_cible(
    id INT AUTO_INCREMENT,
	ap_id INT,
	cible_id INT,
	comment VARCHAR(255),
	PRIMARY KEY (id),
	CONSTRAINT FK_ap_id_association_ap_cible FOREIGN KEY (ap_id)
    REFERENCES ap(id),
	CONSTRAINT FK_cible_id_association_ap_cible FOREIGN KEY (cible_id)
    REFERENCES cible(id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS danger_cible(
    id INT AUTO_INCREMENT,
	cible_id INT,
	pression_id INT,
	comment VARCHAR(255),
	PRIMARY KEY (id),
	CONSTRAINT FK_cible_id_danger_cible FOREIGN KEY (cible_id)
    REFERENCES cible(id),
	CONSTRAINT FK_pression_id_danger_cible FOREIGN KEY (pression_id)
    REFERENCES pression(id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS activity(
    id INT AUTO_INCREMENT,
	label VARCHAR(50),
	comment VARCHAR(255),
	PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS association_activity_danger(
    id INT AUTO_INCREMENT,
	activity_id INT,
	danger_id INT,
	comment VARCHAR(255),
	PRIMARY KEY (id),
	CONSTRAINT FK_activity_id_association_activity_danger FOREIGN KEY (activity_id)
    REFERENCES activity(id),
	CONSTRAINT FK_danger_id_association_activity_danger FOREIGN KEY (danger_id)
    REFERENCES danger_cible(id)
) ENGINE=InnoDB;

/* INTRANT */
CREATE TABLE IF NOT EXISTS intrant(
    id INT AUTO_INCREMENT,
	label VARCHAR(100),
	comment VARCHAR(255),
	PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS association_ap_intrant(
    id INT AUTO_INCREMENT,
	ap_id INT,
	intrant_id INT,
	creation_date DATE,
	comment VARCHAR(255),
	PRIMARY KEY (id),
	CONSTRAINT FK_ap_id_intrant FOREIGN KEY (ap_id)
    REFERENCES ap(id),
	CONSTRAINT FK_ap_id_intrant_id FOREIGN KEY (intrant_id)
    REFERENCES intrant(id)
) ENGINE=InnoDB;

/* RH */
CREATE TABLE IF NOT EXISTS level(
    id INT AUTO_INCREMENT,
	label VARCHAR(50),
	comment VARCHAR(255),
	PRIMARY KEY (id)
) ENGINE=InnoDB;

/*CREATE TABLE IF NOT EXISTS repartition_level(
    id INT AUTO_INCREMENT,
	ap_id INT,
	level_id INT,
	nbr_man INT,
	nbr_women INT,
	comment VARCHAR(255),
	PRIMARY KEY (id),
	CONSTRAINT FK_level_id_repartition_level FOREIGN KEY (level_id)
    REFERENCES level(id),
	CONSTRAINT FK_ap_id_repartition_level FOREIGN KEY (ap_id)
    REFERENCES ap(id)
) ENGINE=InnoDB;*/

CREATE TABLE IF NOT EXISTS association_ap_level(
    id INT AUTO_INCREMENT,
	ap_id INT,
	level_id INT,
	nbr_man INT,
	nbr_women INT,
	comment VARCHAR(255),
	PRIMARY KEY (id),
	CONSTRAINT FK_ap_id_association_ap_level FOREIGN KEY (ap_id)
    REFERENCES ap(id),
	CONSTRAINT FK_level_id_repartition_level FOREIGN KEY (level_id)
    REFERENCES level(id)
) ENGINE=InnoDB;

/* PAG */
CREATE TABLE IF NOT EXISTS pag(
    id INT AUTO_INCREMENT,
	label VARCHAR(50),
	comment VARCHAR(255),
	PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS association_ap_pag(
    id INT AUTO_INCREMENT,
	ap_id INT,
	pag_id INT,
	comment VARCHAR(255),
	PRIMARY KEY (id),
	CONSTRAINT FK_ap_id_association_ap_pag FOREIGN KEY (ap_id)
    REFERENCES ap(id),
	CONSTRAINT FK_pag_id_repartition_pag FOREIGN KEY (pag_id)
    REFERENCES pag(id)
) ENGINE=InnoDB;

/*CREATE TABLE IF NOT EXISTS pag(
    id INT AUTO_INCREMENT,
	pag_date DATE,
	ap_id INT, 
	comment VARCHAR(255),
	PRIMARY KEY (id),
	CONSTRAINT FK_ap_id_pag FOREIGN KEY (ap_id)
    REFERENCES ap(id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS detail_pag(
    id INT AUTO_INCREMENT,
	pag_id INT,
	label VARCHAR(100),
	impact INT,
	comment VARCHAR(255),
	PRIMARY KEY (id),
	CONSTRAINT FK_pag_id_detail_pag FOREIGN KEY (pag_id)
    REFERENCES pag(id)
) ENGINE=InnoDB;*/


/* REALISATION */
CREATE TABLE IF NOT EXISTS realisation(
    id INT AUTO_INCREMENT,
	ap_id INT,
	date_realisation DATE,
	global_level FLOAT,
	comment VARCHAR(255),
	PRIMARY KEY (id),
	CONSTRAINT FK_ap_id_realisation FOREIGN KEY (ap_id)
    REFERENCES ap(id)
) ENGINE=InnoDB;