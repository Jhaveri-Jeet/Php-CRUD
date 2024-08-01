DROP DATABASE IF EXISTS `UserDetailsDB`;

CREATE DATABASE `UserDetailsDB`;

USE `UserDetailsDB`;

CREATE TABLE
    `Users` (
        `Id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        `Username` VARCHAR(250) NOT NULL,
        `Password` VARCHAR(250) NOT NULL
    );

CREATE TABLE
    `UserDetails` (
        `Id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        `UserId` INT NOT NULL,
        `FirstName` VARCHAR(250) NOT NULL,
        `LastName` VARCHAR(250) NOT NULL,
        `Email` VARCHAR(250) NOT NULL,
        `PhoneNumber` VARCHAR(250) NOT NULL,
        FOREIGN KEY (`UserId`) REFERENCES `Users` (`Id`)
    );