CREATE DATABASE guvi;

USE guvi;

CREATE TABLE login (
  id INT NOT NULL AUTO_INCREMENT,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE profile (
  email VARCHAR(255) NOT NULL,
  name VARCHAR(255) NOT NULL,
  gender VARCHAR(10) NOT NULL,
  date_of_birth DATE NOT NULL,
  PRIMARY KEY (email),
  FOREIGN KEY (email) REFERENCES login(email)
);
