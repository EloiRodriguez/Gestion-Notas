USE bd_gestion_de_notas

CREATE TABLE tbl_administrador (
    id_admin INT (10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email_admin VARCHAR (50) NOT NULL,
    password_admin VARCHAR (50) NOT NULL
);

CREATE TABLE tbl_notas (
    id_nota INT (10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    asignatura VARCHAR (50) NOT NULL,
    id_alum INT (10) NOT NULL
);

CREATE TABLE tbl_alumnos (
    id_alum INT (10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom_alum VARCHAR (30) NOT NULL,
    prim_apellido VARCHAR (30) NOT NULL,
    segun_apellido VARCHAR (30) NOT NULL,
    grupo VARCHAR (50) NOT NULL,
    email_alum VARCHAR (50) NOT NULL,
    password_alum VARCHAR (50) NOT NULL
);


ALTER TABLE tbl_notas
ADD CONSTRAINT FK_nota_alum FOREIGN KEY (id_alum)
REFERENCES tbl_alumnos(id_alum);

INSERT INTO `tbl_administrador` (`id_admin`, `email_admin`, `password_admin`) VALUES (NULL, 'eloirodriguez@fje.edu', '81dc9bdb52d04dc20036dbd8313ed055');