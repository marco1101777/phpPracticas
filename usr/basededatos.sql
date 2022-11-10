CREATE DATABASE PORTAL;
USE PORTAL;

CREATE TABLE Usuarios (
    Id INT NOT NULL AUTO_INCREMENT,
    Nombres VARCHAR(50) NOT NULL,
    Apellido_paterno VARCHAR(50) NOT NULL,
    Apellido_materno VARCHAR(50) NOT NULL,
    Telefono VARCHAR(10) NOT NULL,
    Correo VARCHAR(50) NOT NULL,
    Usuario VARCHAR(50) NOT NULL ,
    Password VARCHAR(50) NOT NULL , 
    PRIMARY KEY (Id)

);
