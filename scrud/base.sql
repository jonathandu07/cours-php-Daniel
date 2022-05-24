CREATE DATABASE IF NOT EXISTS magasin;

USE magasin;

CREATE TABLE client(
    id_Client int NOT NULL,
    Nom VARCHAR(20) NOT NULL,
    Prenom VARCHAR(20) NOT NULL,
    Adresse VARCHAR(100) NOT NULL,
    Ville VARCHAR(25) NOT NULL,
    Age int(2) NOT NULL,
    Mail VARCHAR(25) NOT NULL,
    PRIMARY KEY(id_Client)
);

CREATE TABLE article(
    id_Article int NOT NULL,
    Designation VARCHAR(20) NOT NULL,
    Prix_Unitaire FLOAT(6) NOT NULL,
    Categorie VARCHAR(100) NOT NULL,
    PRIMARY KEY(id_Article)
);

INSERT INTO client VALUES(1, 'Buffat', 'Anthony', '26 Rue de Drome', 'Valence', '23', 'anthony92i@b20.fr');
INSERT INTO article VALUES(1, 'Tuff Asus', '1000', 'Ordinateur');