CREATE DATABASE IF NOT EXISTS Gestion;
USE Gestion;

CREATE TABLE client(
	Client_Int_Id INT(5) NOT NULL,
  	Client_Vch_Nom VARCHAR(25) NOT NULL,
  	Client_Vch_Prenom VARCHAR(25) NOT NULL,
  	Client_Vch_Cp VARCHAR(25) NOT NULL,
  	Client_Vch_Ville VARCHAR(25) NOT NULL,
  	PRIMARY KEY(Client_Int_Id)
);

INSERT INTO client(Client_Int_Id,Client_Vch_Nom,Client_Vch_Prenom,Client_Vch_Cp,Client_Vch_Ville)
VALUES(1,'Beauchemin','Noël',2600,'Valence'),
(2,'Lapointe','Aubrey','06200','Nice'),
(3,'Daigle','Marsilius','93390','Clichy-Sous-Bois'),
(4,'Giguère','Étienne','30900','Nîmes'),
(5,'Généreux','Sydney','65000','Tarbes');

-- Table commande

CREATE TABLE commande(
	Cde_Int_IdCe INT(5) NOT NULL,
  	Cde_Dte_Date date NOT NULL,
  	Cde_Dte_Qte INT(5) NOT NULL,
  	Cde_float_Prix float(10) NOT NULL,
  	Cde_Int_IdCe_Client_Int_Id INT(5) NOT NULL,
  	PRIMARY KEY(Cde_Int_IdCe),
  	FOREIGN KEY(Cde_Int_IdCe_Client_Int_Id) REFERENCES client(client_Int_Id)
);

INSERT INTO commande(Cde_Int_IdCe,Cde_Dte_Date,Cde_Dte_Qte,Cde_float_Prix,Cde_Int_IdCe_Client_Int_Id)
VALUES(1,'12/09/2021',10,250,1),
(2,'12/12/2021',50,50,1),
(3,'12/04/2022',100,25,2),
(4,'12/02/2022',100,2500,2),
(5,'12/06/2022',250,20,3),
(6,'12/05/2022',1,2500,3),
(7,'12/03/2022',10,250,4);

