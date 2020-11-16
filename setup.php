-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema sistemav3
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sistemav3
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sistemav3` DEFAULT CHARACTER SET utf8 ;
USE `sistemav3` ;

-- -----------------------------------------------------
-- Table `sistemav3`.`login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistemav3`.`login` (
  `idlogin` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(45) NULL,
  `pass` VARCHAR(45) NULL,
  PRIMARY KEY (`idlogin`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemav3`.`calificaciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistemav3`.`calificaciones` (
  `idcalificaciones` INT NOT NULL,
  `calificacion` TINYINT NULL,
  `idlogin` INT NULL,
  PRIMARY KEY (`idcalificaciones`),
  INDEX `idlogin_idx` (`idlogin` ASC) VISIBLE,
  CONSTRAINT `idlogin`
    FOREIGN KEY (`idlogin`)
    REFERENCES `sistemav3`.`login` (`idlogin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
