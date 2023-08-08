-- Esta es la fuente de la base de datos, para usar 'source setup.sql'
DROP DATABASE IF EXISTS contacts_apps;
CREATE DATABASE contacts_apps;
USE contacts_apps;
CREATE TABLE contacts (
   idcontacto int PRIMARY KEY AUTO_INCREMENT,
   name string,
   phone_number string
);