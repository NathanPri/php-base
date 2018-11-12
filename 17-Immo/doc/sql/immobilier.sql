-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Immobilier
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Immobilier
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Immobilier` DEFAULT CHARACTER SET utf8 ;
USE `Immobilier` ;

-- -----------------------------------------------------
-- Table `Immobilier`.`Logement`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Immobilier`.`Logement` (
  ` id_logement` INT NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(45) NULL,
  `adresse` VARCHAR(45) NULL,
  `ville` VARCHAR(45) NULL,
  `cp` VARCHAR(45) NULL,
  `surface` VARCHAR(45) NULL,
  `prix` DECIMAL(8,2) NULL,
  `photo` VARCHAR(45) NULL,
  `type (location ou vente)` VARCHAR(45) NULL,
  `description` VARCHAR(255) NULL,
  PRIMARY KEY (` id_logement`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
