drop database if exists VentePC;
CREATE DATABASE VentePC;
USE VentePC;


CREATE TABLE Vendeurs (
    idVendeur INT AUTO_INCREMENT PRIMARY KEY,
    mail VARCHAR(100) NOT NULL UNIQUE,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    tel VARCHAR(20),
    pwd VARCHAR(255) NOT NULL
);


CREATE TABLE PC (
    idPC INT AUTO_INCREMENT PRIMARY KEY,
    marque VARCHAR(50) NOT NULL,
    ram VARCHAR(20) NOT NULL,
    stockage VARCHAR(20) NOT NULL,
    prix DECIMAL(10, 2) NOT NULL,
    photo Text, 
    idVendeur INT,
    FOREIGN KEY (idVendeur) REFERENCES Vendeurs(idVendeur)
);