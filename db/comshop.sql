SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE admin (
  id int(11) NOT NULL,
  username varchar(30) NOT NULL,
  password INT(60) NOT NULL,
  firstname varchar(30) NOT NULL,
  lastname varchar(30) NOT NULL,
  photo varchar(200) NOT NULL,
  created_on date NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE Customer(
	id int(11) NOT NULL AUTO_INCREMENT,
	CID VARCHAR(5) NOT NULL,
    FirstName VARCHAR(30),
    LastName VARCHAR(30),
    Address VARCHAR(50),
    District VARCHAR(30),
    Zipcode CHAR(5),
    Balance INT(7),
    PRIMARY KEY(id)
);

CREATE TABLE ComTech(
	id int(11) NOT NULL AUTO_INCREMENT,
	CTID VARCHAR(5) NOT NULL,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    Address VARCHAR(50),
    Zipcode CHAR(5),
    PRIMARY KEY(id)
);

CREATE TABLE Product(
	id int(11) NOT NULL AUTO_INCREMENT,
	PID VARCHAR(5) NOT NULL,
    Brand VARCHAR(20),
    Spec VARCHAR(30),
    ProductType VARCHAR(30),
    Price CHAR(7),
    WaratyPeriod INT(3),
    PRIMARY KEY(id)
);

CREATE TABLE ItemInAccount(
	id int(11) NOT NULL AUTO_INCREMENT,
	PID VARCHAR(5) NOT NULL,
    CID VARCHAR(5) NOT NULL,
    BoughtDate Date,
    WarantyExpire Date,
    PRIMARY KEY(id)
);

CREATE TABLE CaseType(
	id int(11) NOT NULL AUTO_INCREMENT,
	CaseID VARCHAR(4) NOT NULL,
    CaseType VARCHAR(30),
	FixTime INT(2),
    PRIMARY KEY(id)
);

CREATE TABLE FixOrder(
	id int(11) NOT NULL AUTO_INCREMENT,
	OrderID INT(5) NOT NULL,
	CID VARCHAR(5) NOT NULL,
    CaseID VARCHAR(4) NOT NULL,
    CTID VARCHAR(5) NOT NULL,
    CaseDate Date,
    CaseType VARCHAR(20),
    Detail VARCHAR(150),
    PRIMARY KEY(id)
);



    
    