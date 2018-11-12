-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema webflix
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema webflix
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `webflix` DEFAULT CHARACTER SET utf8 ;
USE `webflix` ;

-- -----------------------------------------------------
-- Table `webflix`.`Film`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `webflix`.`Film` (
  `idFilm` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `video_link` VARCHAR(45) NOT NULL,
  `cover` VARCHAR(45) NOT NULL,
  `release_at` DATE NOT NULL,
  `categorie_id` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idFilm`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webflix`.`Category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `webflix`.`Category` (
  `idCategory` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `Film_idFilm` INT NOT NULL,
  PRIMARY KEY (`idCategory`, `Film_idFilm`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webflix`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `webflix`.`User` (
  `idUser` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `token` VARCHAR(45) NULL,
  `token_expiration` DATETIME NULL,
  PRIMARY KEY (`idUser`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
