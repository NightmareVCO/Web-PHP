-- Esta es la fuente de la base de datos, para usar 'source setup.sql'
DROP DATABASE IF EXISTS contacts_apps;

CREATE DATABASE contacts_apps;

USE contacts_apps;

CREATE TABLE contacts (
   idcontacto INT PRIMARY KEY AUTO_INCREMENT,
   name VARCHAR(255),
   phone_number VARCHAR(255)
);

CREATE TABLE users (
   iduser INT AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(255),
   email VARCHAR(255) UNIQUE,
   password VARCHAR(255)
);

-- Ejemplo de datos para los contactos
INSERT INTO contacts (name, phone_number)
VALUES ('Juan', '555-555-5555'),
   ('Pedro', '555-555-5556'),
   ('Ana', '555-555-5557'),
   ('Luis', '555-555-5558');

SELECT *
FROM contacts
SELECT *
FROM users