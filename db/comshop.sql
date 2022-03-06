CREATE TABLE customer (
  CID VARCHAR(30)  NOT NULL  ,
  FirstName VARCHAR(30)  NULL  ,
  LastName VARCHAR(30)  NULL  ,
  Address VARCHAR(30)  NULL  ,
  District VARCHAR(30) NULL  ,
  Zipcode INTEGER UNSIGNED  NULL  ,
  Balance INTEGER UNSIGNED  NULL    ,
PRIMARY KEY(CID));



CREATE TABLE product (
  PID INTEGER UNSIGNED  NOT NULL  ,
  Brand VARCHAR(30)  NULL  ,
  Spec VARCHAR(30)  NULL  ,
  ProductType VARCHAR(30)  NULL  ,
  Price INTEGER UNSIGNED  NULL  ,
  WarantyPeriod INTEGER UNSIGNED  NULL    ,
PRIMARY KEY(PID));



CREATE TABLE comtech (
  CTID INTEGER UNSIGNED  NOT NULL  ,
  FirstName VARCHAR(30)  NULL  ,
  LastName VARCHAR(30)  NULL  ,
  Address VARCHAR(30)  NULL  ,
  Zipcode INTEGER UNSIGNED  NULL    ,
PRIMARY KEY(CTID));



CREATE TABLE admin (
  id INT(11)  NOT NULL   AUTO_INCREMENT,
  username VARCHAR(30)  NULL  ,
  password  VARCHAR(30)  NULL  ,
  firstname VARCHAR(30)  NULL  ,
  lastname VARCHAR(30)  NULL  ,
  photo VARCHAR(100)  NULL  ,
  created_on DATE  NULL    ,
PRIMARY KEY(id));



CREATE TABLE casetype (
  CaseID INTEGER UNSIGNED  NOT NULL  ,
  CaseType VARCHAR(30)  NULL  ,
  FixTime INTEGER UNSIGNED  NULL    ,
PRIMARY KEY(CaseID));



CREATE TABLE iteminaccount (
  product_PID INTEGER UNSIGNED  NOT NULL  ,
  customer_CID VARCHAR(30)  NOT NULL  ,
  BoughtDate DATE  NULL  ,
  WarantyExpire INTEGER UNSIGNED  NULL    ,
INDEX iteminaccount_FKIndex1(customer_CID)  ,
INDEX iteminaccount_FKIndex2(product_PID),
  FOREIGN KEY(customer_CID)
    REFERENCES customer(CID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(product_PID)
    REFERENCES product(PID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE fixorder (
  OrderID INTEGER UNSIGNED  NOT NULL  ,
  casetype_CaseID INTEGER UNSIGNED  NOT NULL  ,
  comtech_CTID INTEGER UNSIGNED  NOT NULL  ,
  customer_CID VARCHAR(30)  NOT NULL  ,
  CaseDate DATE  NULL  ,
  Detail VARCHAR(30)  NULL  ,
  CaseType  VARCHAR(100)  NULL    ,
PRIMARY KEY(OrderID)  ,
INDEX fixorder_FKIndex1(customer_CID)  ,
INDEX fixorder_FKIndex2(comtech_CTID)  ,
INDEX fixorder_FKIndex3(casetype_CaseID),
  FOREIGN KEY(customer_CID)
    REFERENCES customer(CID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(comtech_CTID)
    REFERENCES comtech(CTID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(casetype_CaseID)
    REFERENCES casetype(CaseID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



