DROP DATABASE IF EXISTS netflix;

CREATE DATABASE netflix;

USE netflix;

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    gebruikernaam VARCHAR(255) UNIQUE NOT NULL,
    wachtwoord VARCHAR(255) NOT NULL
);


CREATE TABLE `netflix`.`films` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `name` VARCHAR(100) NOT NULL ,
    `duur` TIME NOT NULL ,
    `sumary` TEXT NOT NULL ,
    `foto` TEXT NOT NULL ,
    `video_link` TEXT NOT NULL ,
    PRIMARY KEY (`id`));