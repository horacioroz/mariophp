-- MySQL Script generated by MySQL Workbench
-- Tue Jul 11 12:09:36 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Mario_Articles
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Mario_Articles
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Mario_Articles` DEFAULT CHARACTER SET utf8 ;
USE `Mario_Articles` ;

-- -----------------------------------------------------
-- Table `Mario_Articles`.`SECTIONS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Mario_Articles`.`SECTIONS` (
  `id_section` INT NOT NULL,
  `section_name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_section`),
  UNIQUE INDEX `id_section_UNIQUE` (`id_section` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Mario_Articles`.`ARTICLES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Mario_Articles`.`ARTICLES` (
  `id_articles` INT NOT NULL,
  `code` VARCHAR(45) NOT NULL,
  `description` VARCHAR(140) NULL,
  `price` INT NULL,
  PRIMARY KEY (`id_articles`),
  UNIQUE INDEX `id_articles_UNIQUE` (`id_articles` ASC),
  CONSTRAINT `article_section`
    FOREIGN KEY (`id_articles`)
    REFERENCES `Mario_Articles`.`SECTIONS` (`id_section`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Mario_Articles`.`PHOTOS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Mario_Articles`.`PHOTOS` (
  `id_photos` INT NOT NULL,
  `photo` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_photos`),
  UNIQUE INDEX `idPHOTOS_UNIQUE` (`id_photos` ASC),
  UNIQUE INDEX `photo_UNIQUE` (`photo` ASC),
  CONSTRAINT `photo_article`
    FOREIGN KEY (`id_photos`)
    REFERENCES `Mario_Articles`.`ARTICLES` (`id_articles`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Mario_Articles`.`THUMBLINES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Mario_Articles`.`THUMBLINES` (
  `id_thumbline` INT NOT NULL,
  `thumbline` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_thumbline`),
  UNIQUE INDEX `id_thumbline_UNIQUE` (`id_thumbline` ASC),
  UNIQUE INDEX `thumbline_UNIQUE` (`thumbline` ASC),
  CONSTRAINT `article_thumbline`
    FOREIGN KEY (`id_thumbline`)
    REFERENCES `Mario_Articles`.`ARTICLES` (`id_articles`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
