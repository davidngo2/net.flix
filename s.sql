DROP DATABASE IF EXISTS netflix;

CREATE DATABASE netflix;

USE netflix;

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    gebruikernaam VARCHAR(255) NOT NULL,
    wachtwoord VARCHAR(255) NOT NULL,
    start_date DATE NOT NULL,
    subscribsie VARCHAR(255) NOT NULL,
    eind_date DATE NOT NULL
);