CREATE DATABASE AppLab;

USE AppLab;

CREATE TABLE Proyectos (
Id INT NOT NULL AUTO_INCREMENT,
Nombre_Proyecto VARCHAR(50),
Fecha_Inicio DATE NOT NULL,
Fecha_Fin DATE NOT NULL,
Presupuesto DECIMAL,
PRIMARY KEY (Id)
);

CREATE TABLE Equipos (
Id INT NOT NULL AUTO_INCREMENT,
Nombre_Equipo VARCHAR(50) NOT NULL,
Id_Proyectos INT,
PRIMARY KEY(Id),
KEY Id_Proyectos(Id_Proyectos),
CONSTRAINT Id_Proyectos_FK
FOREIGN KEY (Id_Proyectos)
REFERENCES Proyectos (Id)
);

CREATE TABLE Programadores (
Id INT NOT NULL AUTO_INCREMENT,
Nombre VARCHAR(50) NOT NULL,
Nivel VARCHAR(50) NOT NULL,
Id_Equipos INT,
PRIMARY KEY(Id),
KEY Id_Equipos(Id_Equipos),
CONSTRAINT Id_Equipos_FK
FOREIGN KEY (Id_Equipos)
REFERENCES Equipos (Id)
);


