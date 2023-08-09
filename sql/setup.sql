-- Esta es la fuente de la base de datos, para usar 'source setup.sql'
DROP DATABASE IF EXISTS contacts_apps;

CREATE DATABASE contacts_apps;

USE contacts_apps;

CREATE TABLE users (
   iduser INT AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(255),
   email VARCHAR(255) UNIQUE,
   password VARCHAR(255)
);

CREATE TABLE contacts (
   idcontacto INT PRIMARY KEY AUTO_INCREMENT,
   iduser INT NOT NULL,
   name VARCHAR(255),
   phone_number VARCHAR(255),
   FOREIGN KEY (iduser) REFERENCES users(iduser)
);

-- Ejemplo de datos para los contactos
INSERT INTO users (name, email, password)
VALUES ('Juan', 'juan@me.com', '123456'),
   ('Pedro', 'pedro@me.com', '123456'),
   ('Ana', 'ana@me.com', '123456'),
   ('Luis', 'luis@me.com', '123456');

INSERT INTO contacts (name, phone_number, iduser)
VALUES ('Juan', '555-555-5555', 1),
   ('Pedro', '555-555-5556', 1),
   ('Ana', '555-555-5557', 1),
   ('Luis', '555-555-5558', 2);