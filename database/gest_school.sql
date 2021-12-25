create database if not exists gestschool_FKLN DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE gestschool_FKLN;

-- //............... cursus .............//
DROP TABLE IF EXISTS cursus ; 

CREATE TABLE IF NOT EXISTS cursus(
  id_cursus INTEGER PRIMARY KEY NOT NULL auto_increment,
  nom_cursus varchar(50) NOT NULL,
  frais_cursus INTEGER(50) NOT NULL
) ENGINE InnoDB;

INSERT INTO cursus(nom_cursus, frais_cursus) 
VALUES('Scientifique', 6000),
      ('Mathématique', 8000),
      ('Littérature', 3500),
      ('Science économique et sociale', 5000),
      ('Management et gestion', 4200);



-- //............... utilisateur ............//

DROP TABLE IF EXISTS utilisateur ; 

CREATE TABLE IF NOT EXISTS utilisateur(
  id_utilisateur INTEGER PRIMARY KEY NOT NULL auto_increment,
  nom varchar(50) NOT NULL,
  prenom varchar(50) NOT NULL,
  email varchar(200) NOT NULL,
  mot_de_passe varchar(200) NOT NULL,
  mobile varchar(50) NOT NULL,
  adresse varchar(200) NOT NULL,
  code_postal integer(5) NOT NULL,
  fonction    VARCHAR(50)NOT NULL
) ENGINE InnoDB;



INSERT INTO utilisateur(nom, prenom, email, mot_de_passe, mobile, adresse, code_postal, fonction) 
VALUES ('safar', 'fadi','fadi@gmail.com', 'fadi', '07.56.58.56', '10 av de titi', 79420, 'admin'),
       ('keita', 'karim','karim@gmail.com', 'karim', '07.78.58.56', '11 av de titi', 79420, 'admin'),
       ('slimane', 'nacera','nacera@gmail.com', 'nacera', '07.11.58.56', '13 av de titi', 79420, 'admin'),

      -- les professeur
      ('erlong', 'laina','laina@gmail.com', 'laina', '07.99.58.56', '12 av de titi', 79420, 'professeur'),
      ('Dulac','Jean','Jean@gmail.com', 'Jean', '07.12.58.56', '20 av de titi', 79420, 'professeur'),
      ('Lu','Ziao','Ziao@gmail.com', 'Ziao', '07.34.58.56', '21 av de titi', 79420, 'professeur'),
      ('Mango','Kylian','Kylian@gmail.com', 'Kylian', '07.56.58.56', '22 av de titi', 79420, 'professeur'),
      ('Talbi','Achraf','Achraf@gmail.com', 'Achraf', '07.78.58.56', '23 av de titi', 79420, 'professeur'),
      ('Orsoni','Francoise','Francoise@gmail.com', 'Francoise', '07.99.58.56', '24 av de titi', 79420, 'professeur'),


      --  les eleves
       ('Dubois','Martin','Martin@gmail.com', 'Martin', '07.11.11.56', '14 av de titi', 79420, 'etudiant'),
       ('Bourgeois','Samuel','Samuel@gmail.com', 'Samuel', '07.11.22.56', '15 av de titi', 79420, 'etudiant'),
       ('Mdou','Mamadou','Mamadou@gmail.com', 'Mamadou', '07.11.33.56', '16 av de titi', 79420, 'etudiant'),
       ('Bourass','Mohamed','Mohamed@gmail.com', 'Mohamed', '07.11.44.56', '17 av de titi', 79420, 'etudiant'),
       ('Wang','Yibo','Yibo@gmail.com', 'Yibo', '07.11.55.56', '18 av de titi', 79420, 'etudiant'),

      --  les parents
      ('Dubois','Francois', 'francois@gmail.com', 'francois','07-78-11-12', '3 Av du bonheur', 7501,'parent'),
      ('Bourgeois','Marie', 'Marie@gmail.com','Marie', '07-78-22-12','5 Av du bonheur', 7502, 'parent'),
      ('Mdou','Halim', 'Halim@gmail.com','Halim', '07-78-33-12', '6 Av du bonheur', 7503,'parent' ),
      ('Bourass','Samir', 'Samir@gmail.com','Samir', '07-78-44-12', '7 Av du bonheur', 7505, 'parent' ),
      ('Wang','Chang', 'Chang@gmail.com','Chang', '07-78-55-12', '8 Av du bonheur', 7506, 'parent');



-- //............... etudiant ............//

CREATE TABLE IF NOT EXISTS etudiant (
  id_etudiant INTEGER PRIMARY KEY NOT NULL auto_increment,
  nom varchar(50) NOT NULL,
  prenom varchar(50) NOT NULL,
  date_naissance DATE NOT NULL,
  cursus varchar(50),
  id_cursus INTEGER, 
  id_utilisateur INTEGER,
  FOREIGN KEY (id_cursus) REFERENCES cursus(id_cursus) 
  ON DELETE CASCADE,
  FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur) 
  ON DELETE CASCADE

) ENGINE InnoDB;

INSERT INTO etudiant(nom, prenom, date_naissance, cursus, id_cursus, id_utilisateur) 

VALUES('Dubois','Martin', '2015-11-11', 'Scientifique',1, 10),
      ('Bourgeois','Samuel', '2015-05-02', 'Science économique et sociale',4, 11),
      ('Mdou','Mamadou', '2015-02-07', 'Management et gestion',5, 12),
      ('Bourass','Mohamed', '2015-09-11', 'Mathématique',2, 13),
      ('Wang','Yibo', '2015-08-06', 'Mathématique',2, 14);



-- //............... professur ............//
DROP TABLE IF EXISTS professeur; 

CREATE TABLE IF NOT EXISTS professeur(
  id_professeur INTEGER PRIMARY KEY NOT NULL auto_increment,
  nom varchar(50) NOT NULL,
  prenom varchar(50) NOT NULL,
  matiere varchar(50),
  id_utilisateur INTEGER, 
  FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur) 
  ON DELETE CASCADE

) ENGINE InnoDB;

INSERT INTO professeur(nom, prenom, matiere, id_utilisateur) 
VALUES ('Dulac','Jean', 'Mathématique',5),
       ('Erlong','Laîna','Science économique et sociale',4),
       ('Lu','Ziao','Physique', 6),
       ('Mango','Kylian','Histoire', 7),
       ('Talbi','Achraf','Géographie', 8),
       ('Orsoni','Francoise','Francais', 9);


-- //............... cursus-professeur ............//

DROP TABLE IF EXISTS cursus_professeur ; 

CREATE TABLE IF NOT EXISTS cursus_professeur(
  id_cursus INTEGER,
  id_professeur INTEGER,
  FOREIGN KEY (id_cursus) REFERENCES cursus(id_cursus) 
  ON DELETE CASCADE,
  FOREIGN KEY (id_professeur) REFERENCES professeur(id_professeur) 
  ON DELETE CASCADE
) ENGINE InnoDB;

INSERT INTO cursus_professeur(id_cursus, id_professeur) 
VALUES (1, 1),
       (1, 2),
       (1, 3),
       (1, 4),
       (1, 5),
       (1, 6),
       (2, 1),
       (2, 2),
       (2, 3),
       (2, 4),
       (2, 5),
       (2, 6);

-- //............... matiere ............//
DROP TABLE IF EXISTS matiere ;

CREATE TABLE IF NOT EXISTS matiere (
  id_matiere INTEGER PRIMARY KEY NOT NULL auto_increment,
  matiere varchar(50) NOT NULL,
  id_cursus INTEGER (50),
  FOREIGN KEY (id_cursus) REFERENCES cursus(id_cursus) 
  ON DELETE CASCADE
) ENGINE InnoDB;


INSERT INTO matiere(matiere, id_cursus)

VALUES ('Mathématique', 1),
      --  ('Mathématique', 2),

       ('Science économique et sociale', 1),
      --  ('Science économique et sociale', 2),

       ('Physique', 1),
      --  ('Physique', 2),

       ('Histoire', 1),
      --  ('Histoire', 2),

       ('Géographie', 1),
      --  ('Géographie', 2),

       ('Francais', 1);
      --  ('Francais', 2);

-- //............... note ............//

DROP TABLE IF EXISTS note ; 

CREATE TABLE IF NOT EXISTS note (
  id_note INTEGER PRIMARY KEY NOT NULL auto_increment,
  id_matiere INTEGER ,
  -- matiere varchar(50) NOT NULL,
  note INTEGER(50) NOT NULL,
  appreciation varchar(50) NOT NULL,
  id_etudiant INTEGER (50),
  id_professeur INTEGER (50),
  id_cursus INTEGER (50),
  id_utilisateur integer,
  FOREIGN KEY (id_etudiant) REFERENCES etudiant(id_etudiant) 
  ON DELETE CASCADE,
  FOREIGN KEY (id_professeur) REFERENCES professeur(id_professeur) 
  ON DELETE CASCADE,
  FOREIGN KEY (id_cursus) REFERENCES cursus(id_cursus) 
  ON DELETE CASCADE,
  FOREIGN KEY (id_matiere) REFERENCES matiere(id_matiere) 
  ON DELETE CASCADE,
  FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur) 
  ON DELETE CASCADE


) ENGINE InnoDB;



INSERT INTO note(id_matiere, note, appreciation, id_etudiant, id_professeur, id_cursus, id_utilisateur) 
VALUES (1, 10,'Passable', 4, 1,1,13), 
       (1, 17,'Excellent', 5, 1, 2,14),

       (2, 11,'Passable', 4, 2, 1,13),
       (2, 14,'Bien', 5, 2, 2,14),

       (3, 13,'Bien', 4, 3, 1,13),
       (3, 15,'Tres bien', 5, 3, 2,14),

       (4, 9,'Peu mieux faire', 4, 4, 1,13),
       (4, 11,'Passable', 5, 4, 2,14),

       (5, 12,'Bien', 4, 5, 1,13),
       (5, 7,'Peu mieux faire', 5, 5, 2,14),

       (6, 15,'Bien', 4, 6, 1,13),
       (6, 13,'Bien', 5, 6, 2,14);


-- //............... Famille ............//
DROP TABLE IF EXISTS famille ; 


CREATE TABLE IF NOT EXISTS famille (

  id_famille INTEGER PRIMARY KEY NOT NULL auto_increment,
  nom_parent varchar(50) NOT NULL,
  prenom_parent varchar(50) NOT NULL,
  mobile varchar(50) NOT NULL,
  adresse varchar(200) NOT NULL,
  code_postal integer(5) NOT NULL,

  nom_enfant varchar(50) NOT NULL,
  prenom_enfant varchar(50) NOT NULL,
  dn_enfant DATE,
  id_cursus INTEGER (50) ,
  id_etudiant INTEGER (50) ,
  id_utilisateur INTEGER ,

  FOREIGN KEY (id_cursus) REFERENCES cursus(id_cursus) 
  ON DELETE CASCADE,
  FOREIGN KEY (id_etudiant) REFERENCES etudiant(id_etudiant) 
  ON DELETE CASCADE,
  FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur) 
  ON DELETE CASCADE

) ENGINE InnoDB;

INSERT INTO famille (nom_parent, prenom_parent, mobile, adresse, code_postal, nom_enfant, prenom_enfant, dn_enfant, id_cursus, id_etudiant,id_utilisateur)

VALUES('Dubois','Francois', '07-78-11-12', '3 Av du bonheur', 7501,'Dubois','Martin', '2015-11-11', 1,1,15),
      ('Bourgeois','Marie', '07-78-22-12','5 Av du bonheur', 7502,'Bourgeois','Samuel', '2015-05-02',  4,2,16),
      ('Mdou','Halim', '07-78-33-12', '6 Av du bonheur', 7503, 'Mdou','Mamadou', '2015-02-07',  5,3,17),
      ('Bourass','Samir', '07-78-44-12', '7 Av du bonheur', 7505, 'Bourass','Mohamed', '2015-09-11', 2,4,18),
      ('Wang','Chang', '07-78-55-12', '8 Av du bonheur', 7506, 'Wang','Yibo', '2015-08-06', 2,5,19);


-- CREATE TABLE IF NOT EXISTS famille (
--   -- //famille
--   id_famille INTEGER PRIMARY KEY NOT NULL auto_increment,
--   nom_parent varchar(50) NOT NULL,
--   prenom_parent varchar(50) NOT NULL,
--   mobile varchar(50) NOT NULL,
--   adresse varchar(200) NOT NULL,
--   code_postal integer(5) NOT NULL,
--   id_utilisateurfamille INTEGER,

--   FOREIGN KEY (id_utilisateurfamille) REFERENCES utilisateur(id_utilisateur) 
--   ON DELETE CASCADE,


--   -- enfant
--   id_etudiant INTEGER (50) ,
--   nom varchar(50) NOT NULL,
--   prenom varchar(50) NOT NULL,
--   date_naissance DATE,
--   id_utilisateur INTEGER ,
--   id_cursus INTEGER (50) ,
--   FOREIGN KEY (id_cursus) REFERENCES cursus(id_cursus) 
--   ON DELETE CASCADE,
--   FOREIGN KEY (id_etudiant) REFERENCES etudiant(id_etudiant) 
--   ON DELETE CASCADE

-- ) ENGINE InnoDB;

-- INSERT INTO famille (nom_parent, prenom_parent, mobile, adresse, code_postal, id_utilisateurfamille,id_etudiant,
--  nom, prenom, date_naissance,id_utilisateur, id_cursus)

-- VALUES('Dubois','Francois', '07-78-11-12', '3 Av du bonheur', 7501,15,1,'Dubois','Martin', '2015-11-11',10,1),
--       ('Bourgeois','Marie', '07-78-22-12','5 Av du bonheur', 7502,16,2,'Bourgeois','Samuel', '2015-05-02', 11,4),
--       ('Mdou','Halim', '07-78-33-12', '6 Av du bonheur', 7503,17, 3,'Mdou','Mamadou', '2015-02-07',  12,5),
--       ('Bourass','Samir', '07-78-44-12', '7 Av du bonheur', 7505,18,4, 'Bourass','Mohamed', '2015-09-11', 13,2),
--       ('Wang','Chang', '07-78-55-12', '8 Av du bonheur', 7506, 19,5,'Wang','Yibo', '2015-08-06',14,2);










  