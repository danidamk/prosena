CREATE DATABASE prosena;
USE prosena;

CREATE TABLE documento(
    iddocum INT(11) AUTO_INCREMENT PRIMARY KEY,
    nomdocu VARCHAR (16) NOT NULL,
    fechsub VARCHAR(60) NOT NULL,
    idaspi VARCHAR(100) NOT NULL,
    tipof TEXT(50) NOT NULL 
);

CREATE TABLE docxusu(
    iddocum INT(11) NOT NULL,
    idusu INT(10)NOT NULL
);

CREATE TABLE usuario(
    idusu INT(11) AUTO_INCREMENT PRIMARY KEY,
    nomusu VARCHAR (50) NOT NULL,
    contra INT(10) NOT NULL,
    idpef INT(30) NOT NULL
);
CREATE TABLE aspirante(
    idaspi INT (11) AUTO_INCREMENT PRIMARY KEY,
    nomreg VARCHAR(11),
    nomcen VARCHAR(11),
    numfic INT (30),
    nivform VARCHAR(30),
    horario VARCHAR(20),
    ti INT (30),
    idact INT (20)
);

CREATE TABLE perfil(
    idper INT(30) AUTO_INCREMENT PRIMARY KEY,
    tipopef TEXT(20)
);
CREATE TABLE acta(
    idact INT(30) AUTO_INCREMENT PRIMARY,
    tipof TEXT (20),
    fechgen TEXT (30),
    idfich INT(30),
);
CREATE TABLE ficha(
    idfich INT(30)
);
CREATE TABLE pagxper(
    idpag INT(30),
    idusu INT(20),
    idper INT(20)
);
CREATE TABLE modulo(
    idmod INT(30),
    nommod VARCHAR(20),
    actmod VARCHAR(20),
    idpag INT (30)
);
CREATE TABLE pagina(
    idpag INT(20),
    idmod INT(30),
    rutpag VARCHAR(20),
    nompag VARCHAR(30),
    ordpag INT(20)
)
ALTER TABLE usuario
ADD PRIMARY KEY (id);
ALTER TABLE idusu AUTO_INCREMENT = 1;



